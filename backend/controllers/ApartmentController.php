<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ApartmentController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}