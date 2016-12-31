<?php

namespace frontend\modules\wechat;

use yii;
use yii\base\Theme;


class Wechat extends \yii\base\Module
{
	public $controllerNamespace = 'frontend\modules\wechat\controllers';

	public $layout="@frontend/modules/wechat/themes/basic/layouts/main.php";

	public function init()
	{
		parent::init();
		\Yii::$app->view->theme = new Theme([
			'basePath' => '@frontend/modules/wechat/themes/basic',
			'pathMap' => ['@frontend/modules/wechat/views'=>'@frontend/modules/wechat/themes/basic'],
			'baseUrl' => '@frontend/modules/wechat/themes/basic',
		]);
	}
}