<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;
use frontend\components\MyCurl;
use frontend\components\Helper;

class JobController extends BaseController
{
	public $enableCsrfValidation = false;
	
	public function actionIndex()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$detail  =array();
		
		if($id) {
			$sql = " SELECT * FROM `zh_recruitment` WHERE `id`=$id AND `status`=1";
			$detail = Yii::$app->db->createCommand($sql)->queryOne();
		}
		
		$type_id = 0;
		
		if($detail) {
			$type_id = $detail['type_id'];
		}
		
		$sql = "SELECT a.* , b.name type_name FROM `zh_recruitment` a  LEFT JOIN `zh_recruitment_type` b  ON a.type_id=b.id WHERE a.status=1 AND a.id != $id  ORDER BY RAND() LIMIT 4";
		$job = Yii::$app->db->createCommand($sql)->queryAll();
	
		
		return $this->render('index',['detail'=>$detail,'job'=>$job]);
	}
	
	
	//招聘职位申请
	public function actionSubmit()
	{
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$gender = isset($_POST['gender']) ? $_POST['gender'] : 1;
		$age = isset($_POST['age']) ? $_POST['age'] : '';
		$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$content = isset($_POST['content']) ? $_POST['content'] :  '';
		$recruitment_id = isset($_POST['recruitment_id']) ? $_POST['recruitment_id'] : '';
		
		$sql = "INSERT INTO `zh_job_application` (`recruitment_id`,`name`,`age`,`gender`,`phone_number`,`email`,`introduct`) 
				VALUES ($recruitment_id,'$username',$age,$gender,'$telephone','$email','$content')";
		$result = Yii::$app->db->createCommand($sql)->execute();
		
		if($result) {
			Helper::show_message('提交成功', Url::toRoute(['index'])."?id=$recruitment_id");
		} else {
			Helper::show_message('提交失败','#');
		}
	}
	
	
	//ajax 实现site/job 的翻页功能
	public function actionPage()
	{
		$limit = 5 ;
		
		$page = isset($_GET['page']) ? $_GET['page'] == 1 ? 0 : ($_GET['page'] - 1) * $limit : 0;
		
		$type = isset($_GET['type'])?trim($_GET['type']):'';
		
		$where = '';
		

		if($type != ''){
			$where .= " a.type_id='{$type}' ";
		}
	
		
// 		$sql = "SELECT a.id,a.name job_name,a.time,b.name type_name,a.introduct FROM `zh_recruitment` a 
// 				LEFT JOIN `zh_recruitment_type` b ON a.type_id=b.id 
// 				WHERE b.status='1' AND a.status='1' ".$where." ORDER BY a.time DESC LIMIT $page,$limit";
// 		$recruitment = Yii::$app->db->createCommand($sql)->queryAll();
		
		$query = new Query();
		$recruitment = $query->select(['a.id','a.name job_name','a.time','b.name type_name','a.introduct'])
					->from('zh_recruitment a')
					->leftJoin('zh_recruitment_type b','a.type_id=b.id')
					->where('b.status=1')
					->andWhere('a.status=1')
					->andWhere($where)
					->limit($limit)
					->offset($page)
					->orderBy('a.time DESC')
					->all();
		
		
		
		$response = array();
		$tmp = '';
		
		foreach ($recruitment as $key => $value) {
			
			$tmp .=  "<a target='_blank' href=" . Url::toRoute(['job/index','id'=>$value['id']]).">";
	        $tmp .=  "<div class='tr-mt15 tr-bgcw tr-pro_box'>";
	        $tmp .=  "<div class='tr-cfl tr-ml20 tr-mr20'>";
	        $tmp .=  "<div class='tr-mt10'>";
	        $tmp .=  "<div class='tr-cfl'>";
	        $tmp .=  "<div class='tr-fz18 tr-c444 tr-ellipsis' style='width: 265px'>". $value['job_name']."</div>";
	        $tmp .=  "<div class='tr-caf tr-fz12'>分类：".$value['type_name'];
	        $tmp .=  "<div class='tr-flr tr-caf tr-fz12' style='line-height:18px'>".substr($value['time'],0,10);
	        $tmp .=  "</div></div>";
	        $tmp .=  "</div>";
	        $tmp .=  "<div class='tr-cfb'></div>";
	        $tmp .=  "</div>";
	        $tmp .=  "<div class='tr-c444 tr-mt15 tr-mb15'>". mb_substr($value['introduct'], 0,100,"utf8") ." ......";
	        $tmp .=  "<a target='_blank' href='". Url::toRoute(['job/index','id'=>$value['id']])."'>";
	        $tmp .=  "<span class='tr-curp tr-ml5 tr-c9e'>[查看详情]</span></a>";
	        $tmp .=  "</div>";
	        $tmp .=  "</div>";
	        $tmp .=  "<div class='tr-cfb'></div>";
	        $tmp .=  "</div>";
	        $tmp .=  "</a>";
		
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