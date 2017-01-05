<?php

namespace frontend\modules\website\controllers;

use Yii;
use yii\helpers\Url;
use frontend\modules\website\controllers\BaseController;
use yii\db\Query;

class DestinationsController extends BaseController
{
	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	public function actionDetail()
	{
		return $this->render('detail');
	}
	
	
}
	