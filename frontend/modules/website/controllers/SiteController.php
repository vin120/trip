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
		//获取推荐活动
		$sql = "SELECT zap.apartment_id,zap.apartment_name,zap.zone_id FROM `zh_activity` za
		LEFT JOIN `zh_activity_apartment` zaa ON za.id=zaa.activity_id
		LEFT JOIN `zh_apartment` zap ON zap.apartment_id=zaa.apartment_id
		WHERE za.is_home_show='1' AND za.status='1' AND zap.status='1'
		LIMIT  6  ";
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		$data_arr = array();
		foreach ($data as $key => $value) {
	
			$sql = "SELECT img_url FROM `zh_apartment_img` WHERE apartment_id='{$value['apartment_id']}' AND status='1' ORDER BY img_id ASC limit 1 ";
			$img = Yii::$app->db->createCommand($sql)->queryOne();
			$value['img_url'] = $img['img_url'];
	
			$zone_name = '';
			$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE zone_id='{$value['zone_id']}' ";
			$res = Yii::$app->db->createCommand($sql)->queryOne();
			if($res['levle'] = 3){
				$sql = "SELECT a.zone_name zone_name2,b.zone_name zone_name1 FROM `zh_zone` a
				LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id WHERE a.zone_id='{$res['parent_id']}' LIMIT 1 ";
				$res1 = Yii::$app->db->createCommand($sql)->queryOne();
				$zone_name = $res1['zone_name1'].'-'.$res1['zone_name2'].'-'.$res['zone_name'];
			}else if($res['levle'] = 2){
				$sql = "SELECT zone_name FROM `zh_zone` WHERE zone_id='{$res['parent_id']}'  ";
				$res1 = Yii::$app->db->createCommand($sql)->queryOne();
				$zone_name = $res1['zone_name'].'-'.$res['zone_name'];
			}else{
				$zone_name = $res['zone_name'];
			}
			$value['zone_name'] = $zone_name;
			$data_arr[] = $value;
	
		}
	
	
		$sql = "SELECT apartment_id,apartment_name,zone_id,total_price,avg_price FROM `zh_apartment` WHERE status='1' ORDER BY time DESC limit 8  ";
	
		$new_data = Yii::$app->db->createCommand($sql)->queryAll();
		$new_data_arr = array();
		foreach ($new_data as $key => $value) {
			$sql = "SELECT img_url FROM `zh_apartment_img` WHERE apartment_id='{$value['apartment_id']}' AND status='1' ORDER BY img_id ASC limit 1 ";
			$img = Yii::$app->db->createCommand($sql)->queryOne();
			$value['img_url'] = $img['img_url'];
	
			$zone_name = '';
			$sql = "SELECT zone_id,zone_name,parent_id,level FROM `zh_zone` WHERE zone_id='{$value['zone_id']}' ";
			$res = Yii::$app->db->createCommand($sql)->queryOne();
			if($res['levle'] = 3){
				$sql = "SELECT a.zone_name zone_name2,b.zone_name zone_name1 FROM `zh_zone` a
				LEFT JOIN `zh_zone` b ON a.parent_id=b.zone_id WHERE a.zone_id='{$res['parent_id']}' LIMIT 1 ";
				$res1 = Yii::$app->db->createCommand($sql)->queryOne();
				$zone_name = $res1['zone_name1'].'-'.$res1['zone_name2'].'-'.$res['zone_name'];
			}else if($res['levle'] = 2){
				$sql = "SELECT zone_name FROM `zh_zone` WHERE zone_id='{$res['parent_id']}'  ";
				$res1 = Yii::$app->db->createCommand($sql)->queryOne();
				$zone_name = $res1['zone_name'].'-'.$res['zone_name'];
			}else{
				$zone_name = $res['zone_name'];
			}
			$value['zone_name'] = $zone_name;
			$new_data_arr[] = $value;
	
		}
	
		// var_dump($new_data_arr);exit;
	
		return $this->render('featured',['data'=>$data_arr,'new_data'=>$new_data_arr]);
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
