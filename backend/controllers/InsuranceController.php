<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class InsuranceController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;
	
	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_insurance` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT insurance_id,name,price,status  FROM `zh_insurance` LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}
	public function actionGetinsurancepage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT insurance_id,name,price,status  FROM `zh_insurance` LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }


	}

	public function actionDelete(){
		$db = Yii::$app->db;

		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$commen = $db->beginTransaction();
			try{
				$sql = " DELETE FROM `zh_insurance` WHERE insurance_id= $id ";

				$db->createCommand($sql)->execute();

				$commen->commit();
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}

		
			exit;
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			$commen = $db->beginTransaction();
			try{
				$sql = "DELETE FROM `zh_insurance` WHERE insurance_id in ('$ids')";

				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}
			exit;
		}
	}

	public function actionAdd(){
		$db = Yii::$app->db;

		if($_POST){
			$insurance_name = isset($_POST['insurance_name'])?trim($_POST['insurance_name']):'';
			$insurance_price = isset($_POST['insurance_price'])?trim($_POST['insurance_price']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$content = isset($_POST['content'])?trim($_POST['content']):'';
			$img_url = Yii::$app->params['img_url'];
			$content =  addslashes(str_replace('src="'.$img_url,'src="',$content));

			$sql = "INSERT INTO `zh_insurance` (name,content,price,status) VALUES ('{$insurance_name}','{$content}','{$insurance_price}','{$state}') ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
		}

		return $this->render('add');
	}

	public function actionEdit(){
		$db = Yii::$app->db;
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		if($_POST){
			$insurance_id = isset($_POST['insurance_id'])?trim($_POST['insurance_id']):'';
			$insurance_name = isset($_POST['insurance_name'])?trim($_POST['insurance_name']):'';
			$insurance_price = isset($_POST['insurance_price'])?trim($_POST['insurance_price']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$content = isset($_POST['content'])?trim($_POST['content']):'';
			$img_url = Yii::$app->params['img_url'];
			$content =  addslashes(str_replace('src="'.$img_url,'src="',$content));

			$sql = "UPDATE `zh_insurance` SET name='{$insurance_name}',content='{$content}',price='{$insurance_price}',status='{$state}' WHERE insurance_id='{$insurance_id}' ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($sql)->execute();
				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('保存失败','#');
			}
		}

		$sql = "SELECT * FROM `zh_insurance` WHERE insurance_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();
		return $this->render('edit',['data'=>$data]);
	}

	public function actionVerifyinsurancename(){

		$insurance_name = isset($_POST['insurance_name'])?trim($_POST['insurance_name']):'';
		$insurance_id = isset($_POST['insurance_id'])?trim($_POST['insurance_id']):'';

		if($insurance_id == ''){
			$sql = "SELECT count(*) count FROM `zh_insurance` WHERE name = '{$insurance_name}' ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_insurance` WHERE  name = '{$insurance_name}' AND insurance_id!='{$insurance_id}' ";
		}
		
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$count['count'];
	}

	public function actionDetail(){
		$id = isset($_GET['id'])?trim($_GET['id']):'';

		$sql = "SELECT * FROM `zh_insurance` WHERE insurance_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();
		return $this->render('detail',['data'=>$data]);
	}
		
	
}