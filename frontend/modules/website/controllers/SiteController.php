<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;

class SiteController extends BaseController
{
	public function actionIndex()
	{	
		return $this->render('index');
	}
	
	
	
	public function actionFeatured()
	{
		return $this->render('featured');
	}
	
	
	
	public function actionMessage()
	{
		
		$type = isset($_GET['type'])?trim($_GET['type']):'';
		$where = '';
		$count_where= '';
		$limit = 5;		//一页显示5条数据
		
		
		if($type != ''){
			$where .= " AND a.type_id='{$type}' ";
			$count_where .= "type_id='{$type}'";
		}

		//获取分类
		$sql = "SELECT id,name,img_url FROM `zh_message_type` WHERE status='1' ";
		$message_type = Yii::$app->db->createCommand($sql)->queryAll();

		
		
		$sql = "SELECT a.id,a.title,a.img_url,a.content,a.time,a.author,b.name,a.img_url FROM `zh_message` a 
				LEFT JOIN `zh_message_type` b ON a.type_id=b.id 
				WHERE b.status='1' AND a.status='1' ".$where." ORDER BY a.time DESC LIMIT $limit";
		$message = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		$query = new Query();
		$count = $query->select('id')
				->from('zh_message')
				->where('status=1')
				->andWhere($count_where)
				->count();
		$date_page_all = ceil($count / $limit);
		
		
		
		return $this->render('message',['message_type'=>$message_type,'message'=>$message,'date_page_all'=>$date_page_all]);
	}
	
	
	
	public function actionPartner()
	{
		$limit = 5 ;
		
		$sql = "SELECT * FROM `zh_partner` WHERE `status`=1  ORDER BY time DESC  LIMIT  $limit";
		$partner = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		$sql = "SELECT a.* , b.name partner_name  FROM `zh_partner_route` a LEFT JOIN `zh_partner` b ON a.partner_id=b.id WHERE a.status=1 AND b.status=1 ORDER BY RAND() DESC LIMIT 3";
		$partner_route = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		$query = new Query();
		$count = $query->select('id')
					->from('zh_partner')
					->where('status=1')
					->count();
		
		$date_page_all = ceil($count / $limit);
					
					
					
		return $this->render('partner',['partner'=>$partner,'partner_route'=>$partner_route,'date_page_all'=>$date_page_all]);
	}
	
	
	
	public function actionJob()
	{
		$type = isset($_GET['type'])?trim($_GET['type']):'';
		$where = '';
		$count_where= '';
		$limit = 5;		//一页显示5条数据
		
		
		if($type != ''){
			$where .= " AND a.type_id='{$type}' ";
			$count_where .= "type_id='{$type}'";
		}

		//获取分类
		$sql = "SELECT id,name FROM `zh_recruitment_type` WHERE status='1' ";
		$recruitment_type = Yii::$app->db->createCommand($sql)->queryAll();

		$sql = "SELECT a.id,a.name job_name,a.time,b.name type_name,a.introduct FROM `zh_recruitment` a 
				LEFT JOIN `zh_recruitment_type` b ON a.type_id=b.id 
				WHERE b.status='1' AND a.status='1' ".$where." ORDER BY a.time DESC LIMIT $limit";
		$recruitment = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		$query = new Query();
		$count = $query->select('id')
				->from('zh_recruitment')
				->where('status=1')
				->andWhere($count_where)
				->count();
		$date_page_all = ceil($count / $limit);
		
		return $this->render('job',['recruitment_type'=>$recruitment_type,'recruitment'=>$recruitment,'date_page_all'=>$date_page_all]);
	}
	

    public function actionAbout()
    {
    	
    	
    	$sql = "SELECT * FROM `zh_about` WHERE `status`=1";
    	$about = Yii::$app->db->createCommand($sql)->queryAll();
    	
    	
    	
    	$sql = "SELECT `name`,`introduct` FROM `zh_about` WHERE `status`=1";
    	$compony = Yii::$app->db->createCommand($sql)->queryAll();
    	
        return $this->render('about',['compony'=>$compony,'about'=>$about]);
    }
}
