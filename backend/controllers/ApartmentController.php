<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ApartmentController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_apartment` za
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id  ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT za.*,zz.zone_name  FROM `zh_apartment` za
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);

	}

	public function actionGetapartmentpage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT za.*,zz.zone_name  FROM `zh_apartment` za
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
				$sql = " DELETE FROM `zh_apartment` WHERE apartment_id= $id ";
				$sql1 = "DELETE FROM `zh_apartment_attr` WHERE apartment_id= $id ";
				$sql2 = "DELETE FROM `zh_apartment_comment` WHERE apartment_id= $id ";
				$sql3 = "DELETE FROM `zh_apartment_img` WHERE apartment_id= $id ";
				$sql4 = "DELETE FROM `zh_apartment_type` WHERE apartment_id= $id ";

				$db->createCommand($sql)->execute();
				$db->createCommand($sql1)->execute();
				$db->createCommand($sql2)->execute();
				$db->createCommand($sql3)->execute();
				$db->createCommand($sql4)->execute();

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
				$sql = "DELETE FROM `zh_apartment` WHERE apartment_id in ('$ids')";
				$sql1 = "DELETE FROM `zh_apartment_attr` WHERE apartment_id in ('$ids')";
				$sql2 = "DELETE FROM `zh_apartment_comment` WHERE apartment_id in ('$ids')";
				$sql3 = "DELETE FROM `zh_apartment_img` WHERE apartment_id in ('$ids')";
				$sql4 = "DELETE FROM `zh_apartment_type` WHERE apartment_id in ('$ids')";

				$db->createCommand($sql)->execute();
				$db->createCommand($sql1)->execute();
				$db->createCommand($sql2)->execute();
				$db->createCommand($sql3)->execute();
				$db->createCommand($sql4)->execute();
				$commen->commit();
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}
			exit;
		}
	}


	public function actionApartmentadd(){
		$db = Yii::$app->db;
		if($_POST){
			$apartment_code = isset($_POST['apartment_code'])?trim($_POST['apartment_code']):'';
			$apartment_name = isset($_POST['apartment_name'])?trim($_POST['apartment_name']):'';
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
			$total_price = isset($_POST['total_price'])?trim($_POST['total_price']):0;
			$avg_price = isset($_POST['avg_price'])?trim($_POST['avg_price']):'';
			$star = isset($_POST['star'])?trim($_POST['star']):1;
			$state = isset($_POST['state'])?trim($_POST['state']):1;
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):0;
			$desc = isset($_POST['desc'])?trim($_POST['desc']):'';

			// var_dump($desc);

			$img_url = Yii::$app->params['img_url'];
			$desc =  addslashes(str_replace('src="'.$img_url,'src="',$desc));
			// var_dump($desc);exit;

			$sql = "INSERT INTO `zh_apartment` (apartment_code,apartment_name,zone_id,total_price,avg_price,star,status,highlight,`desc`) VALUES ('{$apartment_code}','{$apartment_name}','{$zone_id}','{$total_price}','{$avg_price}','{$star}','{$state}','{$is_highlight}','{$desc}')";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$in_id = $db->getLastInsertId();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['apartmentedit','id'=>$in_id]));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
		}


		//获取地区名
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' " ;
		$zone_data = Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('apartmentadd',array('zone_data'=>$zone_data));
	}

	public function actionApartmentedit(){
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		$table = isset($_GET['table'])?trim($_GET['table']):1;
		$db = Yii::$app->db;

		// if($table == 1)
		$sql = "SELECT * FROM `zh_apartment` WHERE apartment_id='{$id}' ";
		$basic = $db->createCommand($sql)->queryOne();

		//获取地区名
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' " ;
		$zone_data = Yii::$app->db->createCommand($sql)->queryAll();
		$zone_data1 = array();
		$zone_data2 = array();
		$level_index = '';

		$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE zone_id='{$basic['zone_id']}' ";
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


		// if($table == 2)

		$sql = "SELECT * FROM `zh_apartment_attr` WHERE apartment_id='{$id}' ";
		$apartment_service_attr = Yii::$app->db->createCommand($sql)->queryAll();
		$service_attr_data = array();
		foreach ($apartment_service_attr as $key => $value) {
			$sql = "SELECT attr_id,name FROM `zh_apartment_service_attr` WHERE service_id='{$value['service_id']}' ";
			$attr_res = Yii::$app->db->createCommand($sql)->queryAll();
			$value['attr'] = $attr_res;
			$service_attr_data[] = $value;

		}

		// if($table == 3)

		$sql = "SELECT * FROM `zh_apartment_type` WHERE apartment_id='{$id}' ";
		$apartment_price = Yii::$app->db->createCommand($sql)->queryAll();



		//设施名
		$sql = "SELECT service_id,name FROM `zh_apartment_service` ";
		$service_data = Yii::$app->db->createCommand($sql)->queryAll();






		return $this->render('apartmentedit',['basic'=>$basic,'zone_data'=>$zone_data,'zone_data1'=>$zone_data1,'zone_data2'=>$zone_data2,'level_index'=>$level_index,'service_data'=>$service_data,'service_attr_data'=>$service_attr_data,'apartment_price'=>$apartment_price,'table'=>$table]);
	}

	public function actionDeleteserviceattr(){
		$db = Yii::$app->db;
		$flag = 0;
		$id = isset($_POST['id'])?trim($_POST['id']):'';
		$sql = "DELETE FROM `zh_apartment_attr` WHERE id='{$id}' ";

		$commen = $db->beginTransaction();
		try{
			$db->createCommand($sql)->execute();
			$commen->commit();
			$flag = 1;
		}catch(Exception $e){
			$commen->rollBack();
			$flag = 0;
		}

		echo $flag;

	}

	public function actionDeletepriceattr(){
		$db = Yii::$app->db;
		$flag = 0;
		$id = isset($_POST['id'])?trim($_POST['id']):'';
		$sql = "DELETE FROM `zh_apartment_type` WHERE type_id='{$id}' ";

		$commen = $db->beginTransaction();
		try{
			$db->createCommand($sql)->execute();
			$commen->commit();
			$flag = 1;
		}catch(Exception $e){
			$commen->rollBack();
			$flag = 0;
		}

		echo $flag;
	}

	public function actionApartmentbasicedit(){
		$db = Yii::$app->db;

		if($_POST){
			$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):"";
			$apartment_code = isset($_POST['apartment_code'])?trim($_POST['apartment_code']):'';
			$apartment_name = isset($_POST['apartment_name'])?trim($_POST['apartment_name']):'';
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
			$total_price = isset($_POST['total_price'])?trim($_POST['total_price']):0;
			$avg_price = isset($_POST['avg_price'])?trim($_POST['avg_price']):'';
			$star = isset($_POST['star'])?trim($_POST['star']):1;
			$state = isset($_POST['state'])?trim($_POST['state']):1;
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):0;
			$desc = isset($_POST['desc'])?trim($_POST['desc']):'';

			$img_url = Yii::$app->params['img_url'];
			$desc =  addslashes(str_replace('src="'.$img_url,'src="',$desc));

			$sql = "UPDATE `zh_apartment` SET apartment_code='{$apartment_code}',apartment_name='{$apartment_name}',zone_id='{$zone_id}',total_price='{$total_price}',avg_price='{$avg_price}',star='{$star}',status='{$state}',highlight='{$is_highlight}',`desc`='{$desc}' WHERE apartment_id='{$apartment_id}' ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['apartmentedit','id'=>$apartment_id]));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
		}

	}

	public function actionGetserviceinfo(){
		$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):'';
		$sql = "SELECT zpa.*,zas.name service_name FROM `zh_apartment_attr` zpa 
		LEFT JOIN `zh_apartment_service` zas ON zpa.service_id=zas.service_id
		WHERE apartment_id='{$apartment_id}'  ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		$result = array();
		foreach ($data as $key => $value) {
			$sql = "SELECT attr_id,name FROM `zh_apartment_service_attr` WHERE attr_id IN ('{$value['attr_id']}') ";
			$res = Yii::$app->db->createCommand($sql)->queryAll();
			$value['child'] = $res;
			$result[] = $value;
		}

		echo json_encode($result);

	}

	public function actionServicegetattrdata(){
		$service_id = isset($_POST['service_id'])?trim($_POST['service_id']):'';
		$sql = "SELECT attr_id,name FROM `zh_apartment_service_attr` WHERE service_id='{$service_id}' ";
		$res = Yii::$app->db->createCommand($sql)->queryAll();
		echo json_encode($res);
	}

	public function actionApartmentservicesave(){
		$db = Yii::$app->db;
		if($_POST){
			$service_number = isset($_POST['service_number'])?trim(trim($_POST['service_number']),','):'';
			$service_number = explode(',', $service_number);
			$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):'';

			$commen = $db->beginTransaction();
			try{
				$in_sql = "INSERT INTO `zh_apartment_attr` (apartment_id,service_id,attr_id,status) VALUES ";
				$in_str = "";
				foreach ($service_number as $key) {
					$service_id = isset($_POST['service_name'.($key)])?$_POST['service_name'.($key)]:'';
					$apartment_attr = isset($_POST['apartment_attr'.($key)])?$_POST['apartment_attr'.($key)]:'';	//区分新增or编辑
					$service_attr = isset($_POST['service_attr_'.($key)])?$_POST['service_attr_'.($key)]:array();

					$attr_str = implode(',',$service_attr);
					$s_state = isset($_POST['s_state'.($key)])?$_POST['s_state'.($key)]:1;

					if($apartment_attr == ''){
						$in_str .= "('{$apartment_id}','{$service_id}','{$attr_str}','{$s_state}'),";
					}else{
						$up_sql = "UPDATE `zh_apartment_attr` SET service_id='{$service_id}',attr_id='{$attr_str}',status='{$s_state}' WHERE id='{$apartment_attr}' ";
						// var_dump($up_sql);exit;
						$db->createCommand($up_sql)->execute();

					}
					
				}
				if($in_str!=''){
					$in_str = trim($in_str,',');
					$in_sql = $in_sql . $in_str;
					$db->createCommand($in_sql)->execute();
				}

				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['apartmentedit','id'=>$apartment_id,'table'=>'2']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
			

			
		}
	}

	public function actionApartmentpricesave(){
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):'';
			$apartment_price = isset($_POST['apartment_price'])?$_POST['apartment_price']:array();
			$type_name = isset($_POST['type_name'])?$_POST['type_name']:array();
			$room_num = isset($_POST['room_num'])?$_POST['room_num']:array();
			$p_price = isset($_POST['p_price'])?$_POST['p_price']:array();
			$live_day = isset($_POST['live_day'])?$_POST['live_day']:array();
			$tax = isset($_POST['tax'])?$_POST['tax']:array();
			$deposit = isset($_POST['deposit'])?$_POST['deposit']:array();
			$service_charge = isset($_POST['service_charge'])?$_POST['service_charge']:array();
			$p_remark = isset($_POST['p_remark'])?$_POST['p_remark']:array();
			$p_state = isset($_POST['p_state'])?$_POST['p_state']:array();

			$in_sql = "INSERT INTO `zh_apartment_type` (apartment_id,type_name,room_count,price,day,remark,status,tax,deposit,service_charge) VALUES ";
			$in_str = '';
			$commen = $db->beginTransaction();
			try{

				foreach($apartment_price as $k=>$value){
					if($value!=''){	//修改
						$sql = "UPDATE `zh_apartment_type` SET apartment_id='{$apartment_id}',type_name='{$type_name[$k]}',room_count='{$room_num[$k]}',price='{$p_price[$k]}',day='{$live_day[$k]}',remark='{$p_remark[$k]}',status='{$p_state[$k]}',tax='{$tax[$k]}',deposit='{$deposit[$k]}',service_charge='{$service_charge[$k]}' WHERE type_id='{$value}' ";
						$db->createCommand($sql)->execute();
					}else{	//新增
						$in_str .= " ('{$apartment_id}','{$type_name[$k]}','{$room_num[$k]}','{$p_price[$k]}','{$live_day[$k]}','{$p_remark[$k]}','{$p_state[$k]}','{$tax[$k]}','{$deposit[$k]}','{$service_charge[$k]}'),";
					}
				}

				if($in_str!=''){
					$in_str = trim($in_str,',');
					$in_sql = $in_sql . $in_str;
					$db->createCommand($in_sql)->execute();
				}

				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['apartmentedit','id'=>$apartment_id,'table'=>'3']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}

	}

	public function actionZonegetzonedata(){
		$zone = isset($_POST['zone'])?trim($_POST['zone']):'';
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND parent_id='{$zone}' ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		echo json_encode($data);
	}

	public function actionVerifyapartmentcode(){
		$apartment_code = isset($_POST['apartment_code'])?trim($_POST['apartment_code']):'';
		$apartment_id = isset($_POST['apartment_id'])?trim($_POST['apartment_id']):'';
		if($apartment_id == ''){
			$sql = "SELECT count(*) count FROM `zh_apartment` WHERE apartment_code='{$apartment_code}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_apartment` WHERE apartment_code='{$apartment_code}' AND apartment_id!='{$apartment_id}' ";
		}
		
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$data['count'];

	}


	public function actionApartmentdetail(){
		$db = Yii::$app->db;
		$id = isset($_GET['id'])?trim($_GET['id']):'';

		//基本信息
		$sql = "SELECT za.*,zz.zone_name FROM `zh_apartment` za
		LEFT JOIN `zh_zone` zz ON zz.zone_id=za.zone_id
		WHERE za.apartment_id='{$id}' ";
		$basic = Yii::$app->db->createCommand($sql)->queryOne();

		//设施
		$sql = "SELECT zaa.*,zas.name service_name FROM `zh_apartment_attr` zaa
		LEFT JOIN `zh_apartment_service` zas ON zas.service_id=zaa.service_id  
		WHERE zaa.apartment_id='{$id}' ";
		$service = Yii::$app->db->createCommand($sql)->queryAll();
		$service_attr = array();

		foreach ($service as $key => $value) {
			$sql = "SELECT name FROM `zh_apartment_service_attr` WHERE service_id='{$value['service_id']}'  AND attr_id IN ('{$value['attr_id']}') ";
			$attr = Yii::$app->db->createCommand($sql)->queryAll();
			$value['child'] = $attr;
			$service_attr[] = $value;
			
		}

		//价格
		$sql = "SELECT * FROM `zh_apartment_type` WHERE apartment_id='{$id}' ";
		$price = Yii::$app->db->createCommand($sql)->queryAll();






		return $this->render('detail',['basic'=>$basic,'service_attr'=>$service_attr,'price'=>$price]);
	}





}
