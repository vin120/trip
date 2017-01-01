<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class OrderController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;
	
	public function actionIndex()
	{
		
		$sql = "SELECT count(*) count FROM `zh_order` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT * FROM `zh_order` ORDER BY order_time DESC LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionGetorderpage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT * FROM `zh_order` ORDER BY order_time DESC LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}

	public function actionDetail(){
		$order_id = isset($_POST['id'])?trim($_GET['id']):'';

		$sql = "SELECT * FROM `zh_order` WHERE order_id='{$order_id}' ";
		$basic = Yii::$app->db->createCommand($sql)->queryOne();



		return $this->render('detail',['basic'=>$basic]);
	}


		
	
}