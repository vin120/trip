<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class JobController extends Controller
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}