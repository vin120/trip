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
// 		$id = isset($_GET['id']) ? $_GET['id'] : '';
// 		$detail  =array();
		
// 		if($id) {
// 			$sql = " SELECT * FROM `zh_recruitment` WHERE `id`=$id AND `status`=1";
// 			$detail = Yii::$app->db->createCommand($sql)->queryOne();
// 		}
		
// 		$type_id = 0;
		
// 		if($detail) {
// 			$type_id = $detail['type_id'];
// 		}
		
// 		$sql = "SELECT a.* , b.name type_name FROM `zh_recruitment` a  LEFT JOIN `zh_recruitment_type` b  ON a.type_id=b.id WHERE a.status=1 AND a.type_id != $type_id  ORDER BY a.id ASC LIMIT 4";
// 		$job = Yii::$app->db->createCommand($sql)->queryAll();
	
		
// 		return $this->render('index',['detail'=>$detail,'job'=>$job]);
	}
	

	
	
	//推荐路线详情页面
	public function actionRoute()
	{
		
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
			
			$tmp .= "<a target='_blank' href='". Url::toRoute(['Partner/index','id'=>$row['id']])."'>";
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
	
	
	
	
	
	
}