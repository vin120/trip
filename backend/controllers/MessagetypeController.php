<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class MessagetypeController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$sql = "SELECT * FROM zh_story_type";
		$result = Yii::$app->db->createCommand($sql)->queryAll();
		$count = count($result);
		return $this->render('index',['result'=>$result,'count'=>$count]);
	}
	
	public function actionAdd()
	{
		if($_POST){
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;
			
			$sql = "INSERT INTO `zh_story_type` (`name` , `status`) VALUES ('$name' , $status)";
			$result = Yii::$app->db->createCommand($sql)->execute();
			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败', '#');
			}
		}
		
		return $this->render('add');
	}
	
	
	
	public function actionEdit()
	{
		$id = $_GET['id'];
		
		if($_POST){
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : 1;
			
			$sql = " UPDATE `zh_story_type` SET `name` = '$name' ,`status` = $status WHERE `id` = $id";
			$result = Yii::$app->db->createCommand($sql)->execute();
			
			if($result){
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败', '#');
			}
		}
		
		
		$sql = " SELECT * FROM zh_story_type WHERE id= $id ";
		$story_type = Yii::$app->db->createCommand($sql)->queryOne();
		
		return $this->render('edit',['story_type' => $story_type]);
	}
		
	
}