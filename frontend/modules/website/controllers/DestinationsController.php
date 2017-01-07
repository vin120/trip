<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;

class DestinationsController extends BaseController
{
	public $enableCsrfValidation = false;
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	public function actionDetail()
	{
		$id = isset($_GET['id'])?trim($_GET['id']):'';

		//服务设施
		$sql = "SELECT zaa.attr_id,zas.name FROM `zh_apartment_attr` zaa 
		LEFT JOIN `zh_apartment_service` zas ON zas.service_id=zaa.service_id
		WHERE zaa.apartment_id='{$id}' AND zaa.status='1' AND zas.status='1' ";
		$service = Yii::$app->db->createCommand($sql)->queryAll();
		$service_arr = array();
		foreach($service as $row){
			$sql = "SELECT name  FROM `zh_apartment_service_attr` WHERE attr_id IN ({$row['attr_id']}) ";
			// var_dump($sql);
			$res = Yii::$app->db->createCommand($sql)->queryAll();
			$row['child'] = $res;
			$service_arr[] = $row;
		}
		// exit;
		// var_dump($service_arr);exit;

		//价格条款
		$sql = "SELECT * FROM `zh_apartment_type` WHERE apartment_id='{$id}' ";
		$type = Yii::$app->db->createCommand($sql)->queryAll();

		//公寓图片
		$sql = "SELECT img_url FROM `zh_apartment_img` WHERE apartment_id='{$id}' AND status='1' ";
		$apartment_img = Yii::$app->db->createCommand($sql)->queryAll();


		return $this->render('detail',['service_arr'=>$service_arr,'type'=>$type,'apartment_img'=>$apartment_img]);

	}
	
	
	public function actionCollection()
	{
		$response = array();
		
		
		$dowith = isset($_POST['dowith']) ? $_POST['dowith'] : '';
		if($dowith == 1) {
			var_dump($_POST);exit;
			//收藏
			$pid = $_POST['trans']['0']['p_id'];				//1958
			$links = $_POST['trans']['0']['links'];			//http://www.trip.com/website/destinations/detail?id=2
			$img = $_POST['trans']['0']['img'];				//http://www.images.com/apartment_img/201701/vmVMif1483623591.jpeg
			$title = $_POST['trans']['0']['title'];			//萨穆嘉纳26号别墅
			$address = $_POST['trans']['0']['address'];		//泰国 苏梅岛 曾蒙
			$typeText = $_POST['trans']['0']['typeText'];	//5卧室，6浴室，1泳池
			
			//入库	todo
				
			
			$response['code'] = 200;
		} else if($dowith == 2){
			//取消收藏
			$pid = $_POST['pid'];
			
			//从数据库中删除	todo
			
			$response['code'] = 200;
		} else {
			$response['code'] = 500;
			
		}

		$response = json_encode($response);
		echo $response;
		
		
	}
	
	
}
	