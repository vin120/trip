<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class UserController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}