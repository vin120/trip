<?php
namespace frontend\modules\website\themes\basic\myasset;

use yii\web\AssetBundle;

class ThemeAssetInner extends AssetBundle
{

    public $sourcePath = '@frontend/modules/website/themes/basic/static';
    public $css = [
    	'css/inner.css',
    ];

    public $js = [
    	'js/jquery-1.11.3.min.js',
    	'js/inner.js',
    ];
}
