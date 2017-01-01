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
		return $this->render('message');
	}
	
	
	
	public function actionPartner()
	{
		return $this->render('partner');
	}
	
	
	
	public function actionJob()
	{
		$type = isset($_GET['type'])?trim($_GET['type']):'';
		$where = '';
		if($type != ''){
			$where .= " AND a.type_id='{$type}' ";
		}

		//获取分类
		$sql = "SELECT id,name FROM `zh_recruitment_type` WHERE status='1' ";
		$recruitment_type = Yii::$app->db->createCommand($sql)->queryAll();

		$sql = "SELECT a.id,a.name job_name,b.name type_name,a.introduct FROM `zh_recruitment` a 
				LEFT JOIN `zh_recruitment_type` b ON a.type_id=b.id 
				WHERE b.status='1' AND a.status='1' ".$where." ORDER BY a.time DESC  ";
		$recruitment = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('job',['recruitment_type'=>$recruitment_type,'recruitment'=>$recruitment]);
	}
	

    public function actionAbout()
    {
    	
    	$sql = "SELECT `introduct` FROM `zh_compony` WHERE id=1";
    	$compony = Yii::$app->db->createCommand($sql)->queryOne();
    	
        return $this->render('about',['compony'=>$compony]);
    }
}
