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
		return $this->render('job');
	}
	

    public function actionAbout()
    {
    	
    	$sql = "SELECT `introduct` FROM `zh_compony` WHERE id=1";
    	$compony = Yii::$app->db->createCommand($sql)->queryOne();
    	
        return $this->render('about',['compony'=>$compony]);
    }
}
