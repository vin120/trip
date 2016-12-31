<?php

namespace frontend\modules\wechat\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\db\Query;


class LoginController extends Controller
{
	public function actionLogin()
	{
		return $this->render('login');
	}
	
	public function actionRegister()
	{
		return $this->render('register');
	}
}