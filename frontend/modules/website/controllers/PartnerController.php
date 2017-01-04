<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;
use frontend\components\Helper;

class PartnerController extends BaseController
{
	public $enableCsrfValidation = false;
	
	//合作伙伴详情页面
	public function actionIndex()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		
		$sql = "SELECT * FROM `zh_partner` WHERE id=$id";
		$partner = Yii::$app->db->createCommand($sql)->queryOne();
		
		
		
		$sql = "SELECT a.* , b.name partner_name  FROM `zh_partner_route` a LEFT JOIN `zh_partner` b ON a.partner_id=b.id WHERE a.status=1 AND b.status=1 AND a.partner_id=$id ORDER BY a.time DESC LIMIT 3";
		$partner_route = Yii::$app->db->createCommand($sql)->queryAll();
	
		
		return $this->render('index',['partner'=>$partner,'partner_route'=>$partner_route]);
	}
	

	
	
	//推荐路线详情页面
	public function actionRoute()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$limit = 5 ;
		
		
		$sql = "SELECT * FROM `zh_partner` WHERE id=$id";
		$partner = Yii::$app->db->createCommand($sql)->queryOne();
	
		
		
		$sql = "SELECT a.* ,b.name partner_name FROM `zh_partner_route` a LEFT JOIN `zh_partner` b ON a.partner_id=b.id WHERE a.`partner_id`=$id AND a.status=1 AND b.status=1 ORDER BY a.time DESC LIMIT $limit";
		$route = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		
		$query = new Query();
		$count = $query->select('id')
			->from('zh_partner_route')
			->where('status=1')
			->andWhere(['partner_id'=>$id])
			->count();
		
		$date_page_all = ceil($count / $limit);
		
		
		//推荐路线
		$sql = "SELECT a.* , b.name partner_name  FROM `zh_partner_route` a LEFT JOIN `zh_partner` b ON a.partner_id=b.id WHERE a.status=1 AND b.status=1 ORDER BY a.time DESC LIMIT 3";
		$partner_route = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		
		return $this->render('route',['partner'=>$partner,'route'=>$route,'partner_route'=>$partner_route,'date_page_all'=>$date_page_all]);
	}
	
	
	
	//推荐路线详情
	public function actionRoute_detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		
		$sql = " SELECT * FROM `zh_partner_route` WHERE id=$id";
		$route = Yii::$app->db->createCommand($sql)->queryOne();
		
		
		
		//侧边栏的推荐路线
		$sql = "SELECT a.* , b.name partner_name  FROM `zh_partner_route` a LEFT JOIN `zh_partner` b ON a.partner_id=b.id WHERE a.id!=$id AND a.status=1 AND b.status=1 ORDER BY RAND() DESC LIMIT 4";
		$partner_route = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		
		return $this->render('route_detail',['route'=>$route,'partner_route'=>$partner_route]);
	}
	
	
	
	
	
	
	
	
	
	
	//ajax 实现site/partner 的翻页功能
	public function actionPage()
	{
		$limit = 5 ;
		$page = isset($_GET['page']) ? $_GET['page'] == 1 ? 0 : ($_GET['page'] - 1) * $limit : 0;
		
		
		$query = new Query();
		$partner = $query->select(['*'])
					->from('zh_partner')
					->where('status=1')
					->limit($limit)
					->offset($page)
					->orderBy('time DESC')
					->all();
		
		
		$response = array();
		$tmp = '';
		
		foreach ($partner as $row) {
			
			$tmp .= "<a target='_blank' href='". Url::toRoute(['partner/index','id'=>$row['id']])."'>";
	        $tmp .= "<div class='tr-mt15 tr-bgcw tr-pro_box '>";
	        $tmp .= "<div class='tr-fll tr-pro-img_box' style='position:relative;'>";
	        $tmp .= "<img class='tr-vert' src='".Yii::$app->params['img_url']."/".$row['img_url']."' source='". Yii::$app->params['img_url']."/".$row['img_url']."'></div>";
	        $tmp .= "<div class='tr-fll tr-ml20 tr-pro-text-w'>";
	        $tmp .= "<div class='tr-mt10'>";
	        $tmp .= "<div class='tr-fll'>";
	        $tmp .= "<img style='border-radius: 50%;width: 50px;height: 50px;' src='". Yii::$app->params['img_url']."/".$row['img_url']."'></div>";
	        $tmp .= "<div class='tr-fll tr-ml15'>";
	        $tmp .= "<div class='tr-fz18 tr-c444 tr-ellipsis' style='width:265px;line-height:53px;'>". $row['name']."</div>";
	        $tmp .= "</div>";
	        $tmp .= "<div class='tr-cfb'></div>";
	        $tmp .= "</div>";
	        $tmp .= "<div class='tr-mt15'>";
	        $tmp .= "<div class='tr-c444 tr-fz14 tr-mt5'>电话：".$row['telephone']."</div>";
	        $tmp .= "<div class='tr-c444 tr-fz14 tr-mt5'>邮箱：".$row['email']."</div>";
	        $tmp .= "<div class='tr-c444 tr-fz14 tr-mt5'>地址：".$row['address']."</div>";
	        $tmp .= "</div>";
	        $tmp .= "</div>";
	        $tmp .= "<div class='tr-cfb'></div>";
	        $tmp .= "</div>";
	        $tmp .= "</a>";
		
		}
		
		
		$response['code'] = "1";
		$response['msg'] = "success";
		$response['data'] = [
				'data' => $tmp,
		];
		
		$response = json_encode($response);
		echo $response;
	}
	
	
	
	
	
	//ajax获取推荐路线分页
	public function actionRoutepage()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$limit = 5 ;
		$page = isset($_GET['page']) ? $_GET['page'] == 1 ? 0 : ($_GET['page'] - 1) * $limit : 0;
		
		$query = new Query();
		$partner_route = $query->select(['a.*','b.name partner_name'])
			->from('zh_partner_route a')
			->leftJoin('zh_partner b','a.partner_id=b.id')
			->where("a.partner_id=$id")
			->andWhere('a.status=1')
			->andWhere('b.status=1')
			->limit($limit)
			->offset($page)
			->orderBy('a.time DESC')
			->all();
		
		
		$response = array();
		$tmp = '';
		
		foreach($partner_route as $row) {
			$tmp .= "<a target='_blank' href='".Url::toRoute(['partner/route_detail','id'=>$row['id']])."'>";
            $tmp .= "<div class='tr-mt15 tr-bgcw tr-pro_box '>";
            $tmp .= "<div class='tr-fll tr-pro-img_box' style='position:relative;'>";
            $tmp .= "<img class='tr-vert' src='".Yii::$app->params['img_url']."/".$row['img_url']."' source='". Yii::$app->params['img_url']."/".$row['img_url']."'></div>";
            $tmp .= "<div class='tr-fll tr-ml20 tr-pro-text-w'>";
            $tmp .= "<div class='tr-mt10'>";
            $tmp .= "<div class='tr-cfl'>";
            $tmp .= "<div class='tr-fz18 tr-c444 tr-ellipsis' style='width: 265px'>".$row['name']."</div>";
            $tmp .= "<div class='tr-caf tr-fz12'>". $row['partner_name'];
            $tmp .= "<div class='tr-flr tr-caf tr-fz12' style='line-height:18px'>".substr($row['time'],0,10)."</div>";
            $tmp .= "</div>";
            $tmp .= "</div>";
            $tmp .= "<div class='tr-cfb'></div>";
            $tmp .= "</div>";
            $tmp .= "<div class='tr-c444 tr-mt15'>".mb_substr($row['introduct'], 0,100,"utf8");
            $tmp .= "<a target='_blank' href='".Url::toRoute(['partner/route_detail','id'=>$row['id']])."'>";
            $tmp .= "<span class='tr-curp tr-ml5 tr-c9e'>... [详情]</span></a>";
            $tmp .= "</div>";
            $tmp .= "</div>";
            $tmp .= "<div class='tr-cfb'></div>";
            $tmp .= "</div>";
            $tmp .= "</a>";
			
		}
		
		
		$response['code'] = "1";
		$response['msg'] = "success";
		$response['data'] = [
				'data' => $tmp,
		];
		
		$response = json_encode($response);
		echo $response;
		
		
	}
	
	
	
	
	
	
}