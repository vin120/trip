<?php

namespace frontend\modules\website;

use yii;
use yii\base\Theme;


class Website extends \yii\base\Module
{
	public $controllerNamespace = 'frontend\modules\website\controllers';

	public $layout="@frontend/modules/website/themes/basic/layouts/main.php";

	public function init()
	{
		parent::init();
		\Yii::$app->view->theme = new Theme([
			'basePath' => '@frontend/modules/website/themes/basic',
			'pathMap' => ['@frontend/modules/website/views'=>'@frontend/modules/website/themes/basic'],
			'baseUrl' => '@frontend/modules/website/themes/basic',
		]);
	}
}