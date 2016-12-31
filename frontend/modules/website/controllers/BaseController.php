<?php

namespace frontend\modules\website\controllers;
use Yii;
use yii\web\Controller;


class BaseController extends Controller
{
	public function init()
	{
		
		$sql = " SELECT `telephone_number`,`phone_number`,`400_number`,`address`,`introduct` FROM `zh_compony` WHERE id=1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();
		
		
		Yii::$app->view->params['400_number'] = $compony['400_number'];
		Yii::$app->view->params['introduct'] = $compony['introduct'];
		Yii::$app->view->params['address'] = $compony['address'];
		Yii::$app->view->params['service_email'] = 'service@senseluxury.com';
		Yii::$app->view->params['market_email'] = 'marketing@senseluxury.com';
		
		
	}
	
}
