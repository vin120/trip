<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class OrderController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}