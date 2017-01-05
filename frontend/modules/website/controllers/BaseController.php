<?php

namespace frontend\modules\website\controllers;
use Yii;
use yii\web\Controller;


class BaseController extends Controller
{
	public function init()
	{
		
		$sql = " SELECT `telephone_number`,`phone_number`,`400_number`,`address`,`introduct` FROM `zh_compony` WHERE id=1";
		$compony = Yii::$app->db->createCommand($sql)->queryOne();

		$zone_data = array();

		$sql = "SELECT * FROM `zh_zone` WHERE parent_id='0' AND status='1' AND level='1' ";
		$class = Yii::$app->db->createCommand($sql)->queryAll();
		
		foreach ($class as $key => $value) {
			
			$sql = "SELECT * FROM `zh_zone` WHERE parent_id='{$value['zone_id']}' AND status='1' AND level='2'";
			$class2 = Yii::$app->db->createCommand($sql)->queryAll();

			foreach ($class2 as $k => $v) {
				
				$sql = "SELECT * FROM `zh_zone` WHERE parent_id='{$v['zone_id']}' AND status='1' AND level='3'";
				$class3 = Yii::$app->db->createCommand($sql)->queryAll();
				$v['child3'] = $class3;
				$class2[$k] = $v;
			}
			
			$value['child2'] = $class2; 
			$zone_data[] = $value;
		}
		
		
		Yii::$app->view->params['400_number'] = $compony['400_number'];
		Yii::$app->view->params['introduct'] = $compony['introduct'];
		Yii::$app->view->params['address'] = $compony['address'];
		Yii::$app->view->params['service_email'] = 'service@zhengheguoji.com';
		Yii::$app->view->params['market_email'] = 'marketing@zhengheguoji.com';
		Yii::$app->view->params['zone_data'] = $zone_data;
		
		
	}

	
}
