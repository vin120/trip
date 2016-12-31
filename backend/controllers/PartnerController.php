<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class PartnerController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		
		$query = new Query();
		$result = $query->select(['id','name','img_url','introduct','time','author','status'])
				->from('zh_partner')
				->limit(10)
				->orderby('id desc')
				->all();
		
		
		$query = new Query();
		$count = $query->select(['id'])
				->from('zh_partner')
				->count();
		
		
		return $this->render('index',['result'=>$result,'count'=>$count,'partner_page'=>1]);
	}
		
	public function actionAdd()
	{
		if($_POST) {
		
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$time = date("Y-m-d H:i:s",time());
			
			$allow_size = 3;
			if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}
			if(!isset($photo)){
				$photo="";
			}
		
			$result = Yii::$app->db->createCommand()
					->insert('zh_partner',['name'=>$name,'status'=>$status,'introduct'=>$introduct,'img_url'=>$photo,'time'=>$time])->execute();
		
			if($result) {
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		
		}
		
		return $this->render('add');
		
	}
	
	public function actionEdit()
	{
	
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		if($_POST){
			
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$time = date("Y-m-d H:i:s",time());
			
			$allow_size = 3;
			if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}
		
		
			if(!isset($photo)){
				$query=new Query();
				$photo= $query->select(['img_url'])
						->from('zh_partner')
						->where("id=$id")
						->one()['img_url'];
			}
		
			$result = Yii::$app->db->createCommand()
					->update('zh_partner',['name'=>$name,'status'=>$status,'introduct'=>$introduct,'img_url'=>$photo,'time'=>$time],"id=$id")
					->execute();
		
			if($result) {
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		
		}
		
		$query = new Query();
		$partner = $query->select(['name','img_url','introduct','author','status'])
				->from('zh_partner')
				->where(['id'=>$id])
				->one();
		
		return $this->render('edit',['partner'=>$partner]);
	}
	
	
	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;
		
			$sql = " DELETE FROM `zh_partner` WHERE `id`= $id ";
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
		
			$sql = "DELETE FROM `zh_partner` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();
		
			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
	}
	
	
	public function actionGetpartnerpage()
	{
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;
		
		
		$query = new Query();
		$result = $query->select(['id','name','img_url','introduct','time','author','status'])
				->from('zh_partner')
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