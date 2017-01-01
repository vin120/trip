<?php
namespace backend\controllers;

use Yii;
use backend\components\Helper;
use yii\helpers\Url;

class AboutController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$sql = "SELECT id,name,status FROM `zh_about`  ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
	
		return $this->render('index',['data'=>$data]);

	}

	public function actionAdd(){
		$db = Yii::$app->db;
		if($_POST){
			$name = isset($_POST['name'])?trim($_POST['name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$desc = isset($_POST['desc'])?trim($_POST['desc']):'';
			$img_url = Yii::$app->params['img_url'];
			$desc =  addslashes(str_replace('src="'.$img_url,'src="',$desc));

			$sql = "INSERT INTO `zh_about` (name,introduct,status) VALUES ('{$name}','{$desc}','{$state}') ";

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
			// var_dump($_POST);exit;
			$about_id = isset($_POST['about_id'])?trim($_POST['about_id']):'';
			$name = isset($_POST['name'])?trim($_POST['name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$desc = isset($_POST['desc'])?trim($_POST['desc']):'';
			$img_url = Yii::$app->params['img_url'];
			$desc =  addslashes(str_replace('src="'.$img_url,'src="',$desc));

			$sql = "UPDATE `zh_about` SET name='{$name}',introduct='{$desc}',status='{$state}' WHERE id='{$about_id}' ";

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
		$sql = "SELECT * FROM `zh_about` WHERE id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		return $this->render('edit',['data'=>$data]);
	}

	public function actionVerifyaboutname(){
		$name = isset($_POST['name'])?trim($_POST['name']):'';
		$about_id = isset($_POST['about_id'])?trim($_POST['about_id']):'';

		if($about_id == ''){
			$sql = "SELECT count(*) count FROM `zh_about` WHERE name='{$name}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_about` WHERE name='{$name}' AND id!='{$about_id}' ";
		}
		$count = Yii::$app->db->createCommand($sql)->queryOne();
		echo (int)$count['count'];

	}



	public function actionDelete(){
		$db = Yii::$app->db;

		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$commen = $db->beginTransaction();
			try{
				$sql = " DELETE FROM `zh_about` WHERE id= $id ";

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
				$sql = "DELETE FROM `zh_about` WHERE id in ('$ids')";

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



}