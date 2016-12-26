<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ServiceController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";

	public function actionIndex()
	{
		$db = Yii::$app->db;

		$sql = "SELECT count(*) count FROM `zh_apartment_service` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT * FROM `zh_apartment_service` LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		$data_arr = array();
		foreach ($data as $key => $value) {
			$sql = "SELECT name FROM `zh_apartment_service_attr` WHERE service_id='{$value['service_id']}' ";
			$attr = Yii::$app->db->createCommand($sql)->queryAll();
			$value['child'] = $attr;
			$data_arr[] = $value;
		}


		return $this->render('index',['count'=>(int)$count['count'],'data'=>$data_arr,'pag'=>'1']);
	}

	public function actionGetservicepage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT * FROM `zh_apartment_service` LIMIT $pag,10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		$data_arr = array();
		foreach ($data as $key => $value) {
			$sql = "SELECT name FROM `zh_apartment_service_attr` WHERE service_id='{$value['service_id']}' ";
			$attr = Yii::$app->db->createCommand($sql)->queryAll();
			$value['child'] = $attr;
			$data_arr[] = $value;
		}

        if($data_arr) {
            echo json_encode($data_arr);
        } else {
            echo 0;
        }
	}

	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_apartment_service` WHERE service_id= $id ";
			$count = Yii::$app->db->createCommand($sql)->execute();
			$sql = " DELETE FROM `zh_apartment_service_attr` WHERE service_id= $id ";
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

			$sql = "DELETE FROM `zh_apartment_service` WHERE service_id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();
			$sql = "DELETE FROM `zh_apartment_service_attr` WHERE service_id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
			exit;
		}
	}

	public function actionAdd()
	{
		$db = Yii::$app->db;
		if($_POST){
			$service_id = isset($_POST['service_id'])?trim($_POST['service_id']):'';
			$service_name = isset($_POST['service_name'])?trim($_POST['service_name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$service_attr = isset($_POST['service_attr'])?trim($_POST['service_attr']):'';

			//将中文逗号转化成英文逗号
			$service_attr = preg_replace("/(，)/",',',$service_attr);
			$service_attr_arr = explode(",",$service_attr);

			$commen = $db->beginTransaction();
			try{

				$sql = "INSERT INTO `zh_apartment_service` (name,status) VALUES ('{$service_name}','{$state}') ";
				$service = $db->createCommand($sql)->execute();
				$insert_id = $db->getLastInsertID();

				$sql = "INSERT INTO `zh_apartment_service_attr` (service_id,name,status) VALUES ";
				$str = '';
				foreach ($service_attr_arr as $key => $value) {
					$value = trim($value);
					$str .= "('{$insert_id}','{$value}','1'),";
				}
				if($str!=''){
					$str = trim($str,',');
					$sql = $sql.$str;
					// var_dump($sql);exit;
					$db->createCommand($sql)->execute();
				}

				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}
		return $this->render('add');
	}

	public function actionEdit()
	{
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		$db = Yii::$app->db;
		if($_POST){

			$service_id = isset($_POST['service_id'])?trim($_POST['service_id']):'';
			$service_name = isset($_POST['service_name'])?trim($_POST['service_name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$service_attr = isset($_POST['service_attr'])?trim($_POST['service_attr']):'';

			//将中文逗号转化成英文逗号
			$service_attr = preg_replace("/(，)/",',',$service_attr);
			$service_attr_arr = explode(",",$service_attr);


			$commen = $db->beginTransaction();
			try{

				$sql = "UPDATE `zh_apartment_service` SET name='{$service_name}',status='{$state}' WHERE service_id='{$service_id}' ";
				$service = $db->createCommand($sql)->execute();

				$sql = "DELETE FROM `zh_apartment_service_attr` WHERE service_id='{$service_id}' ";
				$service = $db->createCommand($sql)->execute();

				$sql = "INSERT INTO `zh_apartment_service_attr` (service_id,name,status) VALUES ";
				$str = '';
				foreach ($service_attr_arr as $key => $value) {
					$value = trim($value);
					$str .= "('{$service_id}','{$value}','1'),";
				}
				if($str!=''){
					$str = trim($str,',');
					$sql = $sql.$str;
					// var_dump($sql);exit;
					$db->createCommand($sql)->execute();
				}

				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}

		}

		$sql = "SELECT * FROM `zh_apartment_service` WHERE service_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();
		$sql = "SELECT name FROM `zh_apartment_service_attr` WHERE service_id='{$id}' ";
		$attr = Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('edit',['data'=>$data,'attr'=>$attr]);
	}

	public function actionVerifyservicename(){
		$service_name = isset($_POST['service_name'])?trim($_POST['service_name']):'';
		$service_id = isset($_POST['service_id'])?trim($_POST['service_id']):'';

		if($service_id!=''){
			$sql = "SELECT count(*) count FROM `zh_apartment_service` WHERE name='{$service_name}' AND service_id !='{$service_id}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_apartment_service` WHERE name = '{$service_name}' ";
		}

		$data = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$data['count'];
	}
}
