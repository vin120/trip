<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class RouteController extends Controller
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}