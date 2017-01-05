<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;
use yii\web\Session;
use frontend\models\LoginForm;

class LoginController extends BaseController
{
	public $enableCsrfValidation = false;
	
	public function actionLogin()
	{
		
		$response = array();
		
		$model = new LoginForm();
		
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
        	
			$response['success'] = 1;
			$response['username'] = Yii::$app->request->post('phone_number');
				
		
		} else {
		
			$response['success'] = 0;
		}
		

		$response = json_encode($response);
		echo $response;
		
		
		
// 		$response = array();
		
// 		$model = new LoginForm();
// 		$model['username'] = Yii::$app->request->post('phone_number');
// 		$model['password'] = Yii::$app->request->post('password');
		
// 		if ($model->login()) {
			 
// 			$response['success'] = 1;
// 			$response['username'] = Yii::$app->request->post('phone_number');
		
		
// 		} else {
		
// 			$response['success'] = 0;
// 		}
		
		
// 		$response = json_encode($response);
// 		echo $response;
		
	}
	
	
	public function actionLogout()
	{
		Yii::$app->user->logout();
		$response = array();
		$response['code'] = 1;
		$response['msg'] = 'quit successful !';
		$response = json_encode($response);
		echo $response;
		
	}
	
	
	public function actionGetcode()
	{
		if($_POST) {
			
			$phone_number = $_POST['phone'];			//发送的手机号
			$command = Yii::$app->params['command'];	//短信类别
			$cpid = Yii::$app->params['cpid'];			//帐号
			$cppwd = Yii::$app->params['cppwd'];		//密码
			$dc = Yii::$app->params['dc'];				//语言选择
			$da = "86".$phone_number;					//电话号码
			
			$sm = "d1e9d6a4c2eb31323334";				//发送的短信内容(验证码)
			
			$tmp_sm = '1234';
			
			$response = array();
			//发送短信
// 			MyCurl::sentMessage($command, $cpid, $cppwd, $da,$dc, $sm);
			
			
			$session = Yii::$app->session;
			
			if(isset($session['code'])) {
				unset($session['code']);
			}
			
			$session['code'] = $tmp_sm;
			
			$response['code'] = 1;
			$response['message'] = '发送验证成功';
			$response = json_encode($response);
			
			echo $response;
		}
	}
	
	
	
	public function actionRegister()
	{
		if($_POST) {
			$phone_number = isset($_POST['phone']) ? $_POST['phone'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			$code = isset($_POST['code']) ? $_POST['code'] : '';
			
			$session = Yii::$app->session;
			$session_code = isset($session['code']) ? $session['code'] : '0';
			$response = array();
			
			if($code == $session_code) {
				//验证码正确
				$sql = "SELECT `user_id` FROM `zh_user` WHERE `phone_number`='{$phone_number}'";
				$result = Yii::$app->db->createCommand($sql)->queryAll();
				
				if($result) {
					
					$response['msg'] = '该手机号已经被注册';
					
				} else {
					
					$password = md5($password);
					$time = date('Y-m-d H:i:s',time());
					
						
					$sql = "INSERT INTO `zh_user` (`phone_number`,`password`,`register_time`) VALUES ('$phone_number','$password','$time')";
					Yii::$app->db->createCommand($sql)->execute();
					
					
					$response['code']=1;
					$response['msg'] = '注册成功';
				}
				
				
			} else {
				//验证码不正确
				$response['msg'] = '验证码不正确';
			}
			unset($session['code']);
			$response = json_encode($response);
			echo $response;
		}	
	}
	

	
	
}