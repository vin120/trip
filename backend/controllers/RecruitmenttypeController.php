<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class RecruitmenttypeController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		return $this->render('index');
	}
		
	
}