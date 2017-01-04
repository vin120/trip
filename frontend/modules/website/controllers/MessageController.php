<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;
use frontend\components\Helper;

class MessageController extends BaseController
{
	public $enableCsrfValidation = false;
	
	//合作伙伴详情页面
	public function actionIndex()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$limit = 4;
		
		$sql = "SELECT * FROM `zh_message` WHERE id=$id";
		$message = Yii::$app->db->createCommand($sql)->queryOne();
		
		
		$sql = " SELECT * FROM `zh_message` WHERE id!=$id ORDER BY RAND() DESC LIMIT $limit ";
		$relate_message = Yii::$app->db->createCommand($sql)->queryAll();
		
		
		return $this->render('index',['message'=>$message,'relate_message'=>$relate_message]);
	}
	

	
	
	//ajax 实现site/message 的翻页功能
	public function actionPage()
	{
		$limit = 5 ;
		
		$page = isset($_GET['page']) ? $_GET['page'] == 1 ? 0 : ($_GET['page'] - 1) * $limit : 0;
		
		$type = isset($_GET['type'])?trim($_GET['type']):'';
		
		$where = '';
		

		if($type != ''){
			$where .= " a.type_id='{$type}' ";
		}
	
		
		$query = new Query();
		$message = $query->select(['a.id','a.title','a.time','a.content','a.img_url','a.time','a.author','b.name'])
					->from('zh_message a')
					->leftJoin('zh_message_type b','a.type_id=b.id')
					->where('b.status=1')
					->andWhere('a.status=1')
					->andWhere($where)
					->limit($limit)
					->offset($page)
					->orderBy('a.time DESC')
					->all();
		
		
		
		$response = array();
		$tmp = '';
		
		foreach ($message as $row) {
			
			$tmp .= "<a href='". Url::toRoute(['message/index','id'=>$row['id']])."'>";
            $tmp .= "<div class='tr-mt15 tr-bgcw tr-pro_box '>";
            $tmp .= "<div class='tr-fll tr-pro-img_box' style='position:relative;'>";
            $tmp .= "<img class='tr-vert' src='". Yii::$app->params['img_url']."/".$row['img_url']."' ></div>";
            $tmp .= "<div class='tr-fll tr-ml20 tr-pro-text-w'>";
            $tmp .= "<div class='tr-mt10'>";
            $tmp .= "<div class='tr-fll'>";
            $tmp .= "<img style='border-radius: 50%;width: 50px;height: 50px;' src='".Yii::$app->params['img_url']."/".$row['img_url']."'></div>";
            $tmp .= "<div class='tr-fll tr-ml15'>";
            $tmp .= "<div class='tr-fz18 tr-c444 tr-ellipsis' style='width: 265px'>". $row['title']."</div>";
            $tmp .= "<div class='tr-caf tr-fz12'>作者：". $row['author']."</div></div>";
            $tmp .= "<div class='tr-cfb'></div>";
            $tmp .= "</div>";
            $tmp .= "<div class='tr-c444 tr-mt15'>". mb_substr($row['content'], 0,100,"utf8") ;
            $tmp .= "<a href='". Url::toRoute(['message/index','id'=>$row['id']])."'>";
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