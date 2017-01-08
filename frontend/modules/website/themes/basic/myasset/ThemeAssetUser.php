<?php
namespace frontend\modules\website\themes\basic\myasset;

use yii\web\AssetBundle;

class ThemeAssetUser extends AssetBundle
{

    public $sourcePath = '@frontend/modules/website/themes/basic/static';
    public $css = [
		'css/user.css',
    	
    ];

    public $js = [
    	'js/ucenter.js',
    	'js/ProvinceCity.js',
    	'js/provincesdata.js',
    ];
}
