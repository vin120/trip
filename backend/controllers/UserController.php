<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class UserController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		$sql = "SELECT count(*) count FROM `zh_user` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT * FROM `zh_user` LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionGetuserpage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT * FROM `zh_user` LIMIT $pag,10 ";
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

			$sql = " DELETE FROM `zh_user` WHERE user_id= $id ";
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

			$sql = "DELETE FROM `zh_user` WHERE user_id in ('$ids')";
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
			$phone_number = isset($_POST['phone_number'])?trim($_POST['phone_number']):'';
			$email = isset($_POST['email'])?trim($_POST['email']):'';
			$password = isset($_POST['password'])?trim($_POST['password']):'';
			$query_password = isset($_POST['query_password'])?trim($_POST['query_password']):'';
			// $state = isset($_POST['state'])?trim($_POST['state']):0;
			$protocol = isset($_POST['protocol'])?trim($_POST['protocol']):0;

			$password = md5($password);
			$time = date('Y-m-d H:i:s',time());

			$sql = "INSERT INTO `zh_user` (user_name,phone_number,password,register_time,email,status,protocol) VALUES ('{$user_name}','{$phone_number}','{$password}','{$time}','{$email}','1','{$protocol}') ";
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
			$user_id = isset($_POST['user_id'])?trim($_POST['user_id']):'';
			$user_name = isset($_POST['user_name'])?trim($_POST['user_name']):'';
			$phone_number = isset($_POST['phone_number'])?trim($_POST['phone_number']):'';
			$email = isset($_POST['email'])?trim($_POST['email']):'';
			$password = isset($_POST['password'])?trim($_POST['password']):'';
			$query_password = isset($_POST['query_password'])?trim($_POST['query_password']):'';
			// $state = isset($_POST['state'])?trim($_POST['state']):0;
			$protocol = isset($_POST['protocol'])?trim($_POST['protocol']):0;

			if($password!='******'){
				$password = md5($password);
				$sql = "UPDATE `zh_user` SET user_name='{$user_name}',phone_number='{$phone_number}',password='{$password}',email='{$email}',protocol='{$protocol}' WHERE user_id='{$user_id}' ";

			}else{
				$sql = "UPDATE `zh_user` SET user_name='{$user_name}',phone_number='{$phone_number}',email='{$email}',protocol='{$protocol}' WHERE user_id='{$user_id}' ";
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


		$sql = "SELECT * FROM `zh_user` WHERE user_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		return $this->render('edit',['data'=>$data]);
	}
		

	public function actionVerifyuserinfo(){

		$db = Yii::$app->db;
		$user_name = isset($_POST['user_name'])?trim($_POST['user_name']):'';
		$phone_number = isset($_POST['phone_number'])?trim($_POST['phone_number']):'';
		$email = isset($_POST['email'])?trim($_POST['email']):'';
		$user_id = isset($_POST['user_id'])?trim($_POST['user_id']):'';
		$result = array();
		$where = '';
		if($user_id!=''){
			$where .=" AND user_id != '{$user_id}' ";
		}

		//验证账号
		$sql = "SELECT count(*) count FROM `zh_user` WHERE user_name='{$user_name}' ".$where;
		$count1 = Yii::$app->db->createCommand($sql)->queryOne();

		//验证手机号
		$sql = "SELECT count(*) count FROM `zh_user` WHERE phone_number='{$phone_number}' ".$where;
		$count2 = Yii::$app->db->createCommand($sql)->queryOne();

		//验证邮箱
		$sql = "SELECT count(*) count FROM `zh_user` WHERE email='{$email}' ".$where;
		$count3 = Yii::$app->db->createCommand($sql)->queryOne();

		$result['name'] = (int)$count1['count'];
		$result['phone'] = (int)$count2['count'];
		$result['email'] = (int)$count3['count'];

		echo json_encode($result);
	}

	
}