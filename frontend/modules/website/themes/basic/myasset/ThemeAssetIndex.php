<?php
namespace frontend\modules\website\themes\basic\myasset;

use yii\web\AssetBundle;

class ThemeAssetIndex extends AssetBundle
{

    public $sourcePath = '@frontend/modules/website/themes/basic/static';
    public $css = [
    	'css/index.css',
    ];
    public $js = [
    	'js/jquery-1.10.2.min.js',
    	'js/index.js'
    ];
}
