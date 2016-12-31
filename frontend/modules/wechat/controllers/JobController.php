<?php

namespace frontend\modules\wechat\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\db\Query;

class JobController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	
	//接收应聘者消息
	public function actionSubmit()
	{
		
	}
}