<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ZoneController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT a.*,b.zone_name parent_zone_name FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			//判断是否存在子集
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id='{$id}' ";
			$count = Yii::$app->db->createCommand($sql)->queryOne();
			if((int)$count['count']!=0){
				Helper::show_message('删除失败，存在子地区', Url::toRoute(['index']));exit;
			}

			$sql = " DELETE FROM `zh_zone` WHERE zone_id= $id ";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count > 0) {
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败');
			}
			exit;
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			//判断是否存在子集
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id in ('$ids') ";
			$count = Yii::$app->db->createCommand($sql)->queryOne();
			if((int)$count['count']!=0){
				Helper::show_message('删除失败，存在子地区', Url::toRoute(['index']));exit;
			}

			$sql = "DELETE FROM `zh_zone` WHERE zone_id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
			exit;
		}
	}

	public function actionGetzomepage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT a.*,b.zone_name parent_zone_name FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();


       
        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}
		
	public function actionZoneadd(){
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$name = isset($_POST['name'])?trim($_POST['name']):"";
			$parent_zone_id = isset($_POST['parent_zone_id'])?trim($_POST['parent_zone_id']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):"";
			$level = 1;
			if($parent_zone_id!=0){
				$sql = "SELECT level FROM `zh_zone` WHERE zone_id='{$parent_zone_id}'  ";
				$level_res = Yii::$app->db->createCommand($sql)->queryOne();
				if($level_res['level'] == 1){
					$level = 2;
				}else if($level_res['level'] == 2){
					$level = 3;
				}
			}
			

			$sql = "INSERT INTO `zh_zone` (zone_name,parent_id,status,highlight,level) VALUES ('{$name}','{$parent_zone_id}','{$state}','{$is_highlight}','{$level}') ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' ";
		$parent_zone = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('zoneadd',['parent_zone'=>$parent_zone]);
	
	}
	public function actionZoneedit(){
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
			$name = isset($_POST['name'])?trim($_POST['name']):"";
			$parent_zone_id = isset($_POST['parent_zone_id'])?trim($_POST['parent_zone_id']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):"";
			$level = 1;
			if($parent_zone_id!=0){
				$sql = "SELECT level FROM `zh_zone` WHERE zone_id='{$parent_zone_id}'  ";
				$level_res = Yii::$app->db->createCommand($sql)->queryOne();
				if($level_res['level'] == 1){
					$level = 2;
				}else if($level_res['level'] == 2){
					$level = 3;
				}
			}


			$sql = "UPDATE `zh_zone` SET zone_name='{$name}',parent_id='{$parent_zone_id}',status='{$state}',highlight='{$is_highlight}',level='{$level}' WHERE zone_id = '{$zone_id}' ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}


		$sql = "SELECT * FROM `zh_zone` WHERE zone_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' AND zone_id!='{$id}' ";
		$parent_zone = Yii::$app->db->createCommand($sql)->queryAll();
		$parent_zone1 = array();

		if($data['parent_id']==0){
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='{$id}' AND zone_id!='{$id}' ";
			$parent_zone1 = Yii::$app->db->createCommand($sql)->queryAll();
		}else if($data['level']==2){
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='{$data['parent_id']}' AND zone_id !='{$id}' ";
			$parent_zone1 = Yii::$app->db->createCommand($sql)->queryAll();
		}else if($data['level']==3){
			$sql = "SELECT parent_id FROM `zh_zone` WHERE zone_id='{$data['parent_id']}' ";
			$parent = Yii::$app->db->createCommand($sql)->queryOne();
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='{$parent['parent_id']}' AND zone_id !='{$id}' ";
			$parent_zone1 = Yii::$app->db->createCommand($sql)->queryAll();
		}

		

		// $sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE (status='1' OR zone_id='{$data['parent_id']}') AND zone_id != '{$id}' AND level!=3 ";
		// $parent_zone = Yii::$app->db->createCommand($sql)->queryAll();


		return $this->render('zoneedit',['parent_zone'=>$parent_zone,'parent_zone1'=>$parent_zone1,'data'=>$data]);
	
	}

	public function actionVerifyzonename(){
		$name = isset($_POST['zone_name'])?trim($_POST['zone_name']):'';
		$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';

		if($zone_id == ''){
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE zone_name='{$name}' LIMIT 1 ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE zone_name='{$name}' AND zone_id !='{$zone_id}' LIMIT 1 ";
		}
		
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$data['count'];

	}

	public function actionZonegetzonedata(){
		$zone = isset($_POST['zone'])?trim($_POST['zone']):'';
		$curr_zone_id = isset($_POST['curr_zone_id'])?trim($_POST['curr_zone_id']):'';
		if($curr_zone_id != ''){
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND parent_id='{$zone}' AND zone_id!='{$curr_zone_id}' ";
		
		}else{
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND parent_id='{$zone}' ";
		
		}
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		echo json_encode($data);
	}

	public function actionVerifyparentzoneusable(){
		$parent_zone_id = isset($_POST['parent_zone_id'])?trim($_POST['parent_zone_id']):'';
		$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
		$level = isset($_POST['level'])?trim($_POST['level']):'';
		$flag = 0;	//1：可用 0:不可用


		//获取当前等级
		$sql = "SELECT level FROM `zh_zone` WHERE zone_id='{$zone_id}' ";
		$level_res = Yii::$app->db->createCommand($sql)->queryOne();

		if($level_res['level'] == 3 ){	//说明不存在子级
			$flag = 1;
		}else if($level_res['level'] == 2){
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id='{$zone_id}' ";
			$count = Yii::$app->db->createCommand($sql)->queryOne();
			if((int)$count['count'] == 0){
				$flag = 1;
			}else{
				if($level==1){
					$flag = 1;
				}
			}

		}else if($level_res['level'] == 1){
			$sql = "SELECT zone_id FROM `zh_zone` WHERE parent_id='{$zone_id}' ";
			$res = Yii::$app->db->createCommand($sql)->queryAll();
			if(count($res) == 0){	//不存在二级，说明没三级
				$flag = 1;
			}else{	//存在二级，查看是否有三级
				if($level != 2){
					$str = '';
					foreach ($res as $key => $value) {
						$str .= $value['zone_id'];
					}
					$str = trim($str,',');
					$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id IN ('{$str}') ";
					$res = Yii::$app->db->createCommand($sql)->queryOne();
					if($res['count']==0){
						$flag = 1;
					}
				}
			}

		}

		echo $flag;

	}

	















}