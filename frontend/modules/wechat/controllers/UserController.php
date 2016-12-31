<?php

namespace frontend\modules\wechat\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\db\Query;


class UserController extends Controller
{
	public function actionIndex()
	{
		
	}
	
	
	//订单
	public function actionOrder()
	{
		return $this->render('order');
	}
	
	//订单详情
	public function actionOrderdetail()
	{
		return $this->render('orderdetail');
	}
}