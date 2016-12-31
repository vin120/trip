<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ApartmentimgController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{

		$sql = "SELECT count(*) count FROM `zh_apartment_img` zai
		LEFT JOIN `zh_apartment` za ON zai.apartment_id=za.apartment_id
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT zai.*,za.apartment_name,zz.zone_name FROM `zh_apartment_img` zai
		LEFT JOIN `zh_apartment` za ON zai.apartment_id=za.apartment_id
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);

	}

	public function actionGetapartmentimgpage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT zai.*,za.apartment_name,zz.zone_name FROM `zh_apartment_img` zai
		LEFT JOIN `zh_apartment` za ON zai.apartment_id=za.apartment_id
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}

	public function actionDelete(){
		$db = Yii::$app->db;

		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$commen = $db->beginTransaction();
			try{
				$sql = "DELETE FROM `zh_apartment_img` WHERE img_id= $id ";

				$db->createCommand($sql)->execute();

				$commen->commit();
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}

		
			exit;
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			$commen = $db->beginTransaction();
			try{
				$sql = "DELETE FROM `zh_apartment_img` WHERE img_id in ('$ids')";

				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}
			exit;
		}
	}


	public function actionAdd(){
		$db = Yii::$app->db;

		if($_POST){
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):"";
			$apartment_name = isset($_POST['apartment_name'])?trim($_POST['apartment_name']):'';
			$file_img = isset($_POST['file_img'])?trim($_POST['file_img']):"";
			$state = isset($_POST['state'])?trim($_POST['state']):'';

			$file_img = trim($file_img,',');	//获取图片url
			$file_img = explode(",",$file_img);		//拆分url

			$in_sql = "INSERT INTO `zh_apartment_img` (apartment_id,img_url,status) VALUES ";
			$in_str = "";
			$commen = $db->beginTransaction();
			try{

				foreach ($file_img as $row){
					$row = explode('=', $row);
					$row = $row[1];		//单个图片url(入库时只需存放$row)
					
					$in_str .= "('{$apartment_name}','{$row}','{$state}'),";
				}

				if($in_str!=''){
					$in_str = trim($in_str,',');
					$in_sql = $in_sql . $in_str;
					$db->createCommand($in_sql)->execute();
				}


				
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
		}


		// 获取地区
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' ";
		$zone_data = Yii::$app->db->createCommand($sql)->queryAll();



		return $this->render('add',['zone_data'=>$zone_data]);
	}

	public function actionZonegetzonedata(){
		$zone = isset($_POST['zone'])?trim($_POST['zone']):'';

		//获取子集地区
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND parent_id='{$zone}' ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();

		//获取当前地区公寓
		$sql = "SELECT apartment_id,apartment_code,apartment_name FROM `zh_apartment` WHERE zone_id='{$zone}' ";
		$apartment = Yii::$app->db->createCommand($sql)->queryAll();

		$result = array();
		$result['data'] = $data;
		$result['apartment'] = $apartment;

		echo json_encode($result);
	}

	public function actionZonegetapartmentdata(){
		$zone = isset($_POST['zone'])?trim($_POST['zone']):'';

		//获取当前地区公寓
		$sql = "SELECT apartment_id,apartment_code,apartment_name FROM `zh_apartment` WHERE zone_id='{$zone}' ";
		$apartment = Yii::$app->db->createCommand($sql)->queryAll();


		echo json_encode($apartment);
	}

	public function actionEdit(){
		$db = Yii::$app->db;
		$id = isset($_GET['id'])?trim($_GET['id']):'';


		$sql = "SELECT zai.*,za.zone_id FROM `zh_apartment_img` zai
		LEFT JOIN `zh_apartment` za ON za.apartment_id=zai.apartment_id
		WHERE zai.img_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		//获取地区名
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' " ;
		$zone_data = Yii::$app->db->createCommand($sql)->queryAll();
		$zone_data1 = array();
		$zone_data2 = array();
		$level_index = '';

		$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE zone_id='{$data['zone_id']}' ";
		$res = Yii::$app->db->createCommand($sql)->queryOne();
		// var_dump($res);exit;
		if($res['levle'] = 3){
			$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE parent_id='{$res['parent_id']}' ";
			$zone_data2 = Yii::$app->db->createCommand($sql)->queryAll();
			$sql = "SELECT parent_id FROM `zh_zone` WHERE zone_id='{$res['parent_id']}' ";
			$parent_id = Yii::$app->db->createCommand($sql)->queryOne();
			$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE parent_id='{$parent_id['parent_id']}' ";
			$zone_data1 = Yii::$app->db->createCommand($sql)->queryAll();
			$level_index = $parent_id['parent_id'].'-'.$res['parent_id'].'-'.$res['zone_id'];
		}else if($res['levle'] = 2){
			$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE parent_id='{$res['parent_id']}' ";
			$zone_data1 = Yii::$app->db->createCommand($sql)->queryAll();
			$level_index = $res['parent_id'].'-'.$res['zone_id'].'-0';
		}else{
			$level_index = $res['zone_id'].'-0-0';
		}

		$sql = "SELECT apartment_id,apartment_code,apartment_name FROM `zh_apartment` WHERE zone_id='{$data['zone_id']}' ";

		$apartment_name = Yii::$app->db->createCommand($sql)->queryAll();


		return $this->render('edit',['data'=>$data,'zone_data'=>$zone_data,'zone_data1'=>$zone_data1,'zone_data2'=>$zone_data2,'level_index'=>$level_index,'apartment_name'=>$apartment_name]);

	}

	public function actionApartmentimgeditsave(){
		$db = Yii::$app->db;

		if($_POST){
			$img_id = isset($_POST['img_id'])?trim($_POST['img_id']):'';
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
			$apartment_name = isset($_POST['apartment_name'])?trim($_POST['apartment_name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';

			$allow_size = 3;
            if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].'apartment_img/'.Yii::$app->params['month'], 'image', $allow_size);
				$photo='apartment_img/'.Yii::$app->params['month'].'/'.$result['filename'];
			}
			$up_sql = '';
			if(!isset($photo)){
				$up_sql = "UPDATE `zh_apartment_img` SET apartment_id='{$apartment_name}',status='{$state}' WHERE img_id='{$img_id}' ";
			}else{
				$up_sql = "UPDATE `zh_apartment_img` SET apartment_id='{$apartment_name}',img_url='{$photo}',status='{$state}' WHERE img_id='{$img_id}' ";
			}

			$commen = $db->beginTransaction();
			try{

				if($up_sql!=''){
					$db->createCommand($up_sql)->execute();
				}
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}
	}



	//验证指定公寓图片数据
	public function actiononVerifyimgnumber(){
		$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):'';

		$sql = "SELECT count(*) count FROM `zh_apartment_img` WHERE apartment_id='{$apartment_id}' ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$count['count'];

	}










}