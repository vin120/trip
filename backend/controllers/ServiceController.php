<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ServiceController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		

	public function actionAdd()
	{
	
		return $this->render('add');
	}
	
	public function actionEdit()
	{
	
		return $this->render('edit');
	}
}