<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;
use yii\web\Session;
use frontend\models\LoginForm;

class UserController extends BaseController
{
	public $enableCsrfValidation = false;
	
	
	//我的订单
	public function actionIndex()
	{
		if(isset(Yii::$app->user->identity)) {
			//登录成功
			$id = Yii::$app->user->identity->user_id;
			
			$sql = " SELECT * FROM zh_user WHERE user_id=$id";
			$user = Yii::$app->db->createCommand($sql)->queryOne();
			
			
			$sql = "SELECT 400_number FROM zh_compony WHERE id=1";
			$_400_number = Yii::$app->db->createCommand($sql)->queryOne();
			
			return $this->render('index',['user'=>$user,'_400_number'=>$_400_number]);
		} else {
			//没有登录
			return $this->redirect(['site/index']);
		}
	}
	
	//我的资料
	public function actionInfo()
	{
		if(isset(Yii::$app->user->identity)) {
			//登录成功
			$id = Yii::$app->user->identity->user_id;
			
			$sql = " SELECT * FROM zh_user WHERE user_id=$id";
			$user = Yii::$app->db->createCommand($sql)->queryOne();
			
			
			$sql = "SELECT 400_number FROM zh_compony WHERE id=1";
			$_400_number = Yii::$app->db->createCommand($sql)->queryOne();
			
			return $this->render('info',['user'=>$user,'_400_number'=>$_400_number]);
		} else {
			//没有登录
			return $this->redirect(['site/index']);
		}
	}
	
	//我的收藏
	public function actionCollect()
	{
		if(isset(Yii::$app->user->identity)) {
			//登录成功
			$id = Yii::$app->user->identity->user_id;
			
			$sql = " SELECT * FROM zh_user WHERE user_id=$id";
			$user = Yii::$app->db->createCommand($sql)->queryOne();
			
			
			$sql = "SELECT 400_number FROM zh_compony WHERE id=1";
			$_400_number = Yii::$app->db->createCommand($sql)->queryOne();
			
			return $this->render('collect',['user'=>$user,'_400_number'=>$_400_number]);
		} else {
			//没有登录
			return $this->redirect(['site/index']);
		}
	}
	
	
	//修改密码
	public function actionChangepassword()
	{
		if(isset(Yii::$app->user->identity)) {
			//登录成功
			$id = Yii::$app->user->identity->user_id;
				
			$sql = " SELECT * FROM zh_user WHERE user_id=$id";
			$user = Yii::$app->db->createCommand($sql)->queryOne();
				
				
			$sql = "SELECT 400_number FROM zh_compony WHERE id=1";
			$_400_number = Yii::$app->db->createCommand($sql)->queryOne();
				
			return $this->render('changepassword',['user'=>$user,'_400_number'=>$_400_number]);
		} else {
			//没有登录
			return $this->redirect(['site/index']);
		}
	}
	
	
	//订单详情
	public function actionOrderdetail()
	{
		if(isset(Yii::$app->user->identity)) {
			//登录成功
			$id = Yii::$app->user->identity->user_id;
		
			$sql = " SELECT * FROM zh_user WHERE user_id=$id";
			$user = Yii::$app->db->createCommand($sql)->queryOne();
		
		
			$sql = "SELECT 400_number FROM zh_compony WHERE id=1";
			$_400_number = Yii::$app->db->createCommand($sql)->queryOne();
		
			return $this->render('orderdetail',['user'=>$user,'_400_number'=>$_400_number]);
		} else {
			//没有登录
			return $this->redirect(['site/index']);
		}
	}
	
	
}