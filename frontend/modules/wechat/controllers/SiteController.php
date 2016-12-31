<?php

namespace frontend\modules\wechat\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\db\Query;

class SiteController extends Controller
{

	public function actionIndex()
	{
		return $this->render('index');		
	}
	
	
	public function actionJob()
	{
		return $this->render('job');
	}
	
	
	
	public function actionContact()
	{
		$sql = "SELECT `address`,`email`,`telephone_number` FROM `zh_compony` WHERE id=1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();
		
		return $this->render('contact',['compony'=>$compony]);
	}
	
	
	public function actionAbout()
	{
		$sql = "SELECT `introduct` FROM `zh_compony` WHERE id = 1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();
		return $this->render('about',['compony'=>$compony]);
	}
}