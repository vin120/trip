<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class ZoneController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT a.*,b.zone_name parent_zone_name FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		// var_dump($data);exit;
		return $this->render('index',['data'=>$data,'count'=>$count['count'],'pag'=>'1']);
	}

	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			//判断是否存在子集
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id='{$id}' ";
			$count = Yii::$app->db->createCommand($sql)->queryOne();
			if((int)$count['count']!=0){
				Helper::show_message('删除失败，存在子地区', Url::toRoute(['index']));exit;
			}

			$sql = " DELETE FROM `zh_zone` WHERE zone_id= $id ";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count > 0) {
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败');
			}
			exit;
		}
		//多项删除
		if(isset($_POST['ids'])) {

			$ids = implode('\',\'', $_POST['ids']);

			//判断是否存在子集
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE parent_id in ('$ids') ";
			$count = Yii::$app->db->createCommand($sql)->queryOne();
			if((int)$count['count']!=0){
				Helper::show_message('删除失败，存在子地区', Url::toRoute(['index']));exit;
			}

			$sql = "DELETE FROM `zh_zone` WHERE zone_id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
			exit;
		}
	}

	public function actionGetzomepage(){
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT a.*,b.zone_name parent_zone_name FROM `zh_zone` a
		LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();


       
        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}
		
	public function actionZoneadd(){
		$db = Yii::$app->db;
		if($_POST){
			$zone_name = isset($_POST['zone_name'])?trim($_POST['zone_name']):"";
			$parent_zone_name = isset($_POST['parent_zone_name'])?trim($_POST['parent_zone_name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):"";
			$level = 1;
			if($parent_zone_name!=0){
				$sql = "SELECT level FROM `zh_zone` WHERE zone_id='{$parent_zone_name}'  ";
				$level_res = Yii::$app->db->createCommand($sql)->queryOne();
				if($level_res['level'] == 1){
					$level = 2;
				}else if($level_res['level'] == 2){
					$level = 3;
				}
			}
			

			$sql = "INSERT INTO `zh_zone` (zone_name,parent_id,status,highlight,level) VALUES ('{$zone_name}','{$parent_zone_name}','{$state}','{$is_highlight}','{$level}') ";

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
		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE status='1' AND level!=3 ";
		$parent_zone = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('zoneadd',['parent_zone'=>$parent_zone]);
	
	}
	public function actionZoneedit(){
		$id = isset($_GET['id'])?trim($_GET['id']):'';
		$db = Yii::$app->db;
		if($_POST){
			// var_dump($_POST);exit;
			$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';
			$zone_name = isset($_POST['zone_name'])?trim($_POST['zone_name']):"";
			$parent_zone_name = isset($_POST['parent_zone_name'])?trim($_POST['parent_zone_name']):'';
			$state = isset($_POST['state'])?trim($_POST['state']):'';
			$is_highlight = isset($_POST['is_highlight'])?trim($_POST['is_highlight']):"";
			$level = 1;
			if($parent_zone_name!=0){
				$sql = "SELECT level FROM `zh_zone` WHERE zone_id='{$parent_zone_name}'  ";
				$level_res = Yii::$app->db->createCommand($sql)->queryOne();
				if($level_res['level'] == 1){
					$level = 2;
				}else if($level_res['level'] == 2){
					$level = 3;
				}
			}


			$sql = "UPDATE `zh_zone` SET zone_name='{$zone_name}',parent_id='{$parent_zone_name}',status='{$state}',highlight='{$is_highlight}',level='{$level}' WHERE zone_id = '{$zone_id}' ";

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


		$sql = "SELECT * FROM `zh_zone` WHERE zone_id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT zone_id,zone_name FROM `zh_zone` WHERE (status='1' OR zone_id='{$data['parent_id']}') AND zone_id != '{$id}' AND level!=3 ";
		$parent_zone = Yii::$app->db->createCommand($sql)->queryAll();


		return $this->render('zoneedit',['parent_zone'=>$parent_zone,'data'=>$data]);
	
	}

	public function actionVerifyzonename(){
		$name = isset($_POST['zone_name'])?trim($_POST['zone_name']):'';
		$zone_id = isset($_POST['zone_id'])?trim($_POST['zone_id']):'';

		if($zone_id == ''){
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE zone_name='{$name}' LIMIT 1 ";
		}else{
			$sql = "SELECT count(*) count FROM `zh_zone` WHERE zone_name='{$name}' AND zone_id !='{$zone_id}' LIMIT 1 ";
		}
		
		$data = Yii::$app->db->createCommand($sql)->queryOne();

		echo (int)$data['count'];

	}
	
}