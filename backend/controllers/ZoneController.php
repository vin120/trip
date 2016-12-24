<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ZoneController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		

	public function actionZoomadd(){
		return $this->render('zoomadd');
	
	}
}