<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ActivityController extends BaseController
{
	public $layout = "myloyout";
	public $enableCsrfValidation = false;

	public function actionIndex(){

		$sql = "SELECT count(*) count FROM `zh_activity` ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT id,name FROM `zh_activity` LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		$data_arr = array();
		foreach ($data as $key => $value) {
			$sql = "SELECT zaa.id,za.apartment_code,za.apartment_name FROM `zh_activity_apartment` zaa
			LEFT JOIN `zh_apartment` za  ON zaa.apartment_id=za.apartment_id
			WHERE zaa.activity_id='{$value['id']}' ";
			$res = Yii::$app->db->createCommand($sql)->queryAll();
			$value['child'] = $res;
			$data_arr[] = $value;
		}

		return $this->render('index',['data'=>$data_arr,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionEdit(){
		$db = Yii::$app->db;
		$activity_id = isset($_GET['id'])?trim($_GET['id']):'';

		if($_POST){
			$activity_id = isset($_POST['activity_id'])?trim($_POST['activity_id']):'';
			$apartment = isset($_POST['apartment'])?$_POST['apartment']:array();

			$in_sql = "INSERT INTO `zh_activity_apartment` (activity_id,apartment_id) VALUES  ";
			$str = '';

			foreach ($apartment as $key => $value) {
				$str .= "('{$activity_id}','{$value}'),";
			}

			$del_sql = "DELETE FROM `zh_activity_apartment` WHERE activity_id='{$activity_id}' ";

			$commen = $db->beginTransaction();
			try{
				$db->createCommand($del_sql)->execute();

				if($str!=''){
					$str = trim($str,',');
					$in_sql = $in_sql . $str;
					$db->createCommand($in_sql)->execute();
				}

				$commen->commit();
				Helper::show_message('保存成功', Url::toRoute(['index']));
			}catch(Exception $e){
				$commen->rollBack();
				Helper::show_message('删除失败','#');
			}

		}


		$sql = "SELECT * FROM `zh_activity` WHERE id='{$activity_id}' ";
		$basic = Yii::$app->db->createCommand($sql)->queryOne();

		//获取地区名
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE parent_id='0' " ;
		$zone_data = Yii::$app->db->createCommand($sql)->queryAll();

		$sql = "SELECT a.apartment_id,b.apartment_code,b.apartment_name FROM `zh_activity_apartment` a 
		LEFT JOIN `zh_apartment` b ON a.apartment_id=b.apartment_id
		WHERE a.activity_id='{$activity_id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();


		return $this->render('edit',['zone_data'=>$zone_data,'basic'=>$basic,'data'=>$data]);
	}

	public function actionZonegetzonedata(){
		$zone = isset($_POST['zone'])?trim($_POST['zone']):'';
		$act = isset($_POST['act'])?trim($_POST['act']):'';

		$data = array();
		if($act!=3){
			$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND parent_id='{$zone}' ";
			$data = Yii::$app->db->createCommand($sql)->queryAll();
		}
		

		//获取公寓
		$sql = "SELECT apartment_id,apartment_code,apartment_name FROM `zh_apartment` WHERE zone_id='{$zone}' ";
		$apartment = Yii::$app->db->createCommand($sql)->queryAll();
		$data_arr = array();
		$data_arr['data'] = $data;
		$data_arr['apartment'] = $apartment;

		echo json_encode($data_arr);
	}


}
