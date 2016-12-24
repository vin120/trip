<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class InsuranceController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}