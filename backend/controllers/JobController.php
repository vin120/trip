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
		->orderby('id desc')
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
		$id = $_GET['id'];
		
		$query = new Query();
		$job = $query->select(['a.id','a.name','a.age','a.gender','a.phone_number','a.email','a.introduct','b.name as recruitment_name'])
				->from('zh_job_application a')
				->join('LEFT JOIN','zh_recruitment b','a.recruitment_id=b.id')
				->where("a.id=$id")
				->one();
		
		Yii::$app->db->createCommand()->update('zh_job_application', ['is_already_show'=>1],['id'=>$id])->execute();
		
		return $this->render('detail',['job'=>$job]);
	}
	
	
	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_job_application` WHERE `id`= $id ";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count > 0) {
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败');
			}
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			$sql = "DELETE FROM `zh_job_application` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
		
	}
	
	//ajax获取分页
	public function actionGetjobpage()
	{
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;
		
		$query = new Query();
		$result = $query->select(['a.id','a.name','a.age','a.gender','a.phone_number','a.email','a.is_already_show','b.name as recruitment_name'])
		->from('zh_job_application a')
		->join('LEFT JOIN','zh_recruitment b','a.recruitment_id=b.id')
		->offset($pag)
		->limit(10)
		->orderby('id desc')
		->all();
		
		if($result) {
			echo json_encode($result);
		} else {
			echo 0;
		}
	}
		
	
}