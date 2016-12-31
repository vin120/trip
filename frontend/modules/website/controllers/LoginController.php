<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;

class LoginController extends BaseController
{
	public $enableCsrfValidation = false;
	
	public function actionLogin()
	{
		
		if($_POST) {
			$username = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';
			
			$sql = "SELECT `phone_number`,`password` FROM `zh_user` WHERE `phone_number` = '$username'";
			$result = Yii::$app->db->createCommand($sql)->queryOne();
			
			if($result) {
				if(md5($password) == $result['password']) {
					//登录成功
					
				} else {
					//密码错误
					
				}
				
			}else {
				//帐号不存在
				
			}
		}
	}
	
	
	public function actionRegister()
	{
		if($_POST) {
			
			$phone_number = $_POST['phone'];			//发送的手机号
			$command = Yii::$app->params['command'];	//短信类别
			$cpid = Yii::$app->params['cpid'];			//帐号
			$cppwd = Yii::$app->params['cppwd'];		//密码
			$dc = Yii::$app->params['dc'];				//语言选择
			$da = "86".$phone_number;					//电话号码
			
			$sm = "d1e9d6a4c2eb31323334";				//发送的短信内容(验证码)
			
			
			$response = array();
			//发送短信
			MyCurl::sentMessage($command, $cpid, $cppwd, $da,$dc, $sm);
			
			$response['code'] = 1;
			$response['message'] = '发送验证成功';
			
			$response = json_encode($response);
			
			echo $response;
		}
	}
}