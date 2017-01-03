<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\helpers\Url;
use yii\web\Controller;
use backend\components\Helper;

class RouteController extends BaseController
{
	public $layout = "myloyout";
	
	public function actionIndex()
	{
		$query = new Query();
		$result = $query->select(['a.id','a.name','a.img_url','a.status','a.author','b.name as partner_name'])
				->from('zh_partner_route a')
				->join('LEFT JOIN','zh_partner b','a.partner_id=b.id')
				->limit(10)
				->orderby('a.id desc')
				->all();
		
		
		$query = new Query();
		$count = $query->select(['id'])
				->from('zh_partner_route')
				->count();
		
		return $this->render('index',['result'=>$result,'count'=>$count,'route_page'=>1]);
	}
		

	public function actionAdd()
	{
		
		if($_POST) {
		
			$partner_id = isset($_POST['partner_id']) ? $_POST['partner_id'] : '';
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$author = isset($_POST['author']) ? $_POST['author'] : '' ;
			$status = isset($_POST['status']) ? $_POST['status'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$time = date('Y-m-d H:i:s',time());
		
		
			$allow_size = 3;
			if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}
			if(!isset($photo)){
				$photo="";
			}
		
			$result = Yii::$app->db->createCommand()
					->insert('zh_partner_route',['partner_id'=>$partner_id,'name'=>$name,'author'=>$author,'status'=>$status,'introduct'=>$introduct,'img_url'=>$photo,'time'=>$time])->execute();
		
			if($result) {
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		
		}
		
		
		$query = new Query();
		$partner = $query->select(['id','name'])
				->from('zh_partner')
				->where(['status'=>1])
				->all();
	
		return $this->render('add',['partner'=>$partner]);
	}
	
	public function actionEdit()
	{
	
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		
		if($_POST){
			$partner_id = isset($_POST['partner_id']) ? $_POST['partner_id'] : '';
			$name = isset($_POST['name']) ? $_POST['name'] : '';
			$author = isset($_POST['author']) ? $_POST['author'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : '';
			$introduct = isset($_POST['introduct']) ? $_POST['introduct'] : '';
			$time = date('Y-m-d H:i:s',time());
		
		
			$allow_size = 3;
			if($_FILES['image']['error']!=4){
				$result=Helper::upload_file('image',"./".Yii::$app->params['img_url_prefix'].date('Ymd',time()), 'image', $allow_size);
				$photo=date('Ymd',time()).'/'.$result['filename'];
			}
		
		
			if(!isset($photo)){
				$query=new Query();
				$photo= $query->select(['img_url'])
						->from('zh_partner_route')
						->where("id=$id")
						->one()['img_url'];
			}
		
			$result = Yii::$app->db->createCommand()
					->update('zh_partner_route',['partner_id'=>$partner_id,'name'=>$name,'author'=>$author,'status'=>$status,'introduct'=>$introduct,'img_url'=>$photo,'time'=>$time],"id=$id")
					->execute();
		
			if($result) {
				Helper::show_message('保存成功', Url::toRoute(['index']));
			} else {
				Helper::show_message('保存失败','#');
			}
		
		}
		
		$query = new Query();
		$route = $query->select(['a.id','a.partner_id','a.name','a.author','a.img_url','a.introduct','a.status','b.name as partner_name'])
				->from('zh_partner_route a')
				->join('LEFT JOIN','zh_partner b','a.partner_id=b.id')
				->where(['a.id'=>$id])
				->one();
		
		$query = new Query();
		$partner = $query->select(['id','name'])
				->from('zh_partner')
				->where(['status'=>1])
				->all();
		
		return $this->render('edit',['route'=>$route,'partner'=>$partner]);
	}
	
	public function actionDelete()
	{
		//单项删除
		if(isset($_GET['id'])) {
			$id = isset($_GET['id']) ? $_GET['id'] : '' ;
		
			$sql = " DELETE FROM `zh_partner_route` WHERE `id`= $id ";
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
		
			$sql = "DELETE FROM `zh_partner_route` WHERE id in ('$ids')";
			$count = Yii::$app->db->createCommand($sql)->execute();
		
			if($count>0){
				Helper::show_message('删除成功', Url::toRoute(['index']));
			}else{
				Helper::show_message('删除失败 ');
			}
		}
		
	}
	
	//ajax获取分页
	public function actionGetroutepage()
	{
		$pag = isset($_GET['pag']) ? $_GET['pag'] == 1 ? 0 : ($_GET['pag'] - 1) * 10 : 0;
		
		
		$query = new Query();
		$result = $query->select(['a.id','a.name','a.img_url','a.status','a.author','b.name as partner_name'])
				->from('zh_partner_route a')
				->join('LEFT JOIN','zh_partner b','a.partner_id=b.id')
				->offset($pag)
				->limit(10)
				->orderby('a.id desc')
				->all();
		
		if($result) {
			echo json_encode($result);
		} else {
			echo 0;
		}
	}

}