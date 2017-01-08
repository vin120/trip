<?php

namespace frontend\modules\website\controllers;
use Yii;
use frontend\modules\website\controllers\BaseController;
use common\widgets\payment\Weixinjspi;
use common\widgets\payment\Notifyurl;

class PaymentController extends BaseController
{
	
	public function beforeAction($action) {
		$this->enableCsrfValidation = false;
		return parent::beforeAction($action);
	}
	
	
	public function actionIndex()
	{
		
		
		return $this->render('index');
	}
	
	
	
	public function actionWeixinpay()
	{
		$openid=isset($_COOKIE['openid'])?$_COOKIE['openid']:'';
		
		 
		if($openid)
		{
		
			$order_=[
					'goods_desc'=>'测试',
					'order_sn' =>'2222',
					'total_fee' =>12,
					'body'=>'测试',
					'time_start' =>date("YmdHis"),
					'time_expire'=>date("YmdHis", time() + 86400*300),
					'goods_tag' =>'',
					'notify_url'=>Url::to(['@web/respond/updatepay'],true),//这是回调地址，微信通知的地址
					'openid'=>$openid,
			];
			$paymodel=Yii::$app->payment->getWeixinjspi();
		
			$result=$paymodel->pay($order_);//生成预付单
			if($result)
			{
				$jsstr=$paymodel->getJs($result,$order_['order_sn']);
				//根据预付单信息生成js，详细的可以看上面的类的方法。
		
			}
		}
		echo $jsstr;
	}
	
	
	public function actionUpdatepay()
	{
		$model=new Notifyurl();
		$model->notify('Weixinjspi');
	}
}





