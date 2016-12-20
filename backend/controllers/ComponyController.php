<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ComponyController extends Controller
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		$sql = "SELECT telephone_number,phone_number,400_number,fax_number,address,email,QQ FROM zh_compony WHERE id= 1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();
		
		return $this->render('index',[
				'compony'=>$compony,
		]);
	}
	
	
	public function actionEdit()
	{
		return $this->render('edit');
	}
	
	
}