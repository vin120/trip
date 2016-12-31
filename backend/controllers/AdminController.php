<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class AdminController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		$sql = "SELECT count(*) count FROM `zh_admin` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT *  FROM `zh_admin` LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionGetadminpage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT * FROM `zh_admin` LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}

	public function actionDelete(){
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_admin` WHERE admin_id= $id ";
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

			$sql = "DELETE FROM `zh_admin` WHERE admin_id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
			exit;
		}
	}

	public function actionAdd(){

		$db = Yii::$app->db;

		if($_POST){
			// var_dump($_POST);exit;
			// $user_id = isset(]$_POST['user_id'])?trim($_POST['user_id']):'';
			$user_name = isset($_POST['user_name'])?trim($_POST['user_name']):'';
			$real_name = isset($_POST['real_name'])?trim($_POST['real_name']):'';
			$password = isset($_POST['password'])?trim($_POST['password']):'';
			$query_password = isset($_POST['query_password'])?trim($_POST['query_password']):'';
			$tag = isset($_POST['tag'])?trim($_POST['tag']):1;

			$password = md5($password);
			$time = date('Y-m-d H:i:s',time());

			$sql = "INSERT INTO `zh_admin` (admin_username,admin_password,admin_real_name,state,tag) VALUES ('{$user_name}','{$password}','{$real_name}','1','{$tag}') ";
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
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$admin_id = isset($_POST['admin_id'])?trim($_POST['admin_id']):'';
			$user_name = isset($_POST['user_name'])?trim($_POST['user_name']):'';
			$real_name = isset($_POST['real_name'])?trim($_POST['real_name']):'';
			$password = isset($_POST['password'])?trim($_POST['password']):'';
			$query_password = isset($_POST['query_password'])?trim($_POST['query_password']):'';
			$tag = isset($_POST['tag'])?trim($_POST['tag']):0;

			if($password!='******'){
				$password = md5($password);
				$sql = "UPDATE `zh_admin` SET admin_username='{$user_name}',admin_real_name='{$real_name}',admin_password='{$password}',tag='{$tag}' WHERE admin_id='{$admin_id}' ";

			}else{
				$sql = "UPDATE `zh_admin` SET admin_username='{$user_name}',admin_real_name='{$real_name}',tag='{$tag}' WHERE admin_id='{$admin_id}' ";
			}

			
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


		$sql = "SELECT * FROM `zh_admin` WHERE admin_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		return $this->render('edit',['data'=>$data]);
	}


	public function actionVerifyadmininfo(){
		$user_name = isset($_POST['user_name'])?trim($_POST['user_name']):'';
		$admin_id = isset($_POST['admin_id'])?trim($_POST['admin_id']):"";

		if($admin_id != ''){
			$sql = "SELECT count(*) count FROM `zh_admin` WHERE admin_username='{$user_name}' AND admin_id!='{$admin_id}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_admin` WHERE admin_username='{$user_name}' ";
		}
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$count['count'];


	}
		
	
}