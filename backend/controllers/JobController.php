<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class JobController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$query = new Query();
		$result = $query->select(['a.id','a.name','a.age','a.gender','a.phone_number','a.email','a.is_already_show','b.name as recruitment_name'])
		->from('zh_job_application a')
		->join('LEFT JOIN','zh_recruitment b','a.recruitment_id=b.id')
		->limit(10)
		->all();
		
		$query  = new Query();
		$count = $query->select(['id'])
		->from('zh_job_application')
		->count();
		
		
		return $this->render('index',['result'=>$result,'count'=>$count,'job_page'=>1]);
	}
	
	
	public function actionDetail()
	{
		
	}
	
	
	public function actionDelete()
	{
		
	}
		
	
}