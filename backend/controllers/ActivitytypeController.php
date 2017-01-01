<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ActivitytypeController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_activity` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT * FROM `zh_activity`  LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);

	}

	public function actionGetactivitytypepage(){

		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT * FROM `zh_activity` LIMIT $pag,10 ";
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
				$sql = " DELETE FROM `zh_activity` WHERE id= $id ";

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
				$sql = "DELETE FROM `zh_activity` WHERE id in ('$ids')";

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

	public function actionVerifyactivitytypename(){

		$name = isset($_POST['name'])?trim($_POST['name']):'';
		$activitytype_id = isset($_POST['activitytype_id'])?trim($_POST['activitytype_id']):'';

		if($activitytype_id == ''){
			$sql = "SELECT count(*) count FROM `zh_activity` WHERE name='{$name}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_activity` WHERE name='{$name}' AND id!='{$activitytype_id}' ";
		}
		$count = Yii::$app->db->createCommand($sql)->queryOne();
		echo (int)$count['count'];

	}

	public function actionAdd(){
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$name = isset($_POST['name'])?trim($_POST['name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';

			$sql = "INSERT INTO `zh_activity` (name,status) VALUES ('{$name}','{$state}') ";

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
		return $this->render('add');
	}


	public function actionEdit(){
		$db = Yii::$app->db;
		$id = isset($_GET['id'])?trim($_GET['id']):'';

		if($_POST){
			$activitytype_id = isset($_POST['activitytype_id'])?trim($_POST['activitytype_id']):'';
			$name = isset($_POST['name'])?trim($_POST['name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			
			$sql = "UPDATE `zh_activity` SET name='{$name}',status='{$state}' WHERE id='{$activitytype_id}' ";

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
		$sql = "SELECT * FROM `zh_activity` WHERE id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		return $this->render('edit',['data'=>$data]);
	}



}