<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\components\Helper;
use yii\helpers\Url;

class CommentController extends BaseController
{
	public $enableCsrfValidation = false;
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$sql = "SELECT count(*) count FROM `zh_apartment_comment` zpc
		LEFT JOIN `zh_apartment` zp ON zp.apartment_id=zpc.apartment_id
		LEFT JOIN `zh_user` zu ON zu.user_id=zpc.user_id  ";
		$count = Yii::$app->db->createCommand($sql)->queryOne();

		$sql = "SELECT zu.user_name,za.apartment_name,zac.* FROM `zh_apartment_comment` zac
		LEFT JOIN `zh_apartment` za ON za.apartment_id=zac.apartment_id
		LEFT JOIN `zh_user` zu ON zu.user_id=zac.user_id ORDER BY zac.time DESC,is_already_set ASC  LIMIT 10 ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('index',['count'=>(int)$count['count'],'data'=>$data,'pag'=>'1']);
	}

	public function actionGetcommentpage(){

		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;

		$sql = "SELECT zu.user_name,za.apartment_name,zac.* FROM `zh_apartment_comment` zac
		LEFT JOIN `zh_apartment` za ON za.apartment_id=zac.apartment_id
		LEFT JOIN `zh_user` zu ON zu.user_id=zac.user_id ORDER BY zac.time DESC,is_already_set ASC LIMIT $pag,10 ";
		$result = Yii::$app->db->createCommand($sql)->queryAll();

        if($result) {
            echo json_encode($result);
        } else {
            echo 0;
        }
	}

	public function actionDetail(){

		$id = isset($_GET['id'])?trim($_GET['id']):'';

		$sql = "SELECT zu.user_name,za.apartment_name,zac.* FROM `zh_apartment_comment` zac
		LEFT JOIN `zh_apartment` za ON za.apartment_id=zac.apartment_id
		LEFT JOIN `zh_user` zu ON zu.user_id=zac.user_id WHERE zac.id='{$id}' ";
		$data = Yii::$app->db->createCommand($sql)->queryOne();


		return $this->render('detail',['data'=>$data]);
	}

	public function actionChangeisshow(){

		$db = Yii::$app->db;
		$id = isset($_POST['id'])?trim($_POST['id']):'';
		$state = isset($_POST['state'])?trim($_POST['state']):0;
		$flag = 0;

		$sql = "UPDATE `zh_apartment_comment` SET is_show='{$state}' WHERE id='{$id}' ";

		$commen = $db->beginTransaction();
		try{
			$db->createCommand($sql)->execute();
			$commen->commit();
			$flag = 1;
		}catch(Exception $e){
			$commen->rollBack();
			$flag = 0;
		}

		echo $flag;

	}

	public function actionChangeisselect(){
		$db = Yii::$app->db;
		$id = isset($_POST['id'])?trim($_POST['id']):'';
		$state = isset($_POST['state'])?trim($_POST['state']):0;
		$flag = 0;

		$sql = "UPDATE `zh_apartment_comment` SET is_already_set='{$state}' WHERE id='{$id}' ";

		$commen = $db->beginTransaction();
		try{
			$db->createCommand($sql)->execute();
			$commen->commit();
			$flag = 1;
		}catch(Exception $e){
			$commen->rollBack();
			$flag = 0;
		}

		echo $flag;
	}



	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;

			$sql = " DELETE FROM `zh_apartment_comment` WHERE id= $id ";
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


			$sql = "DELETE FROM `zh_apartment_comment` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();

			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
			exit;
		}
	}


		
	
}