<?php
namespace frontend\modules\website\themes\basic\myasset;

use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{

    public $sourcePath = '@frontend/modules/website/themes/basic/static';
    public $css = [
		'css/push_app.css',
    	'css/header.css',
		'css/head_invite.css',
    	'css/swiper.min.css',
        'css/TR-Global.css',
        'css/editormd.preview.min.css',
        'css/jquery-ui-1.10.3.custom.min.css',
        'css/jquery-ui-datepick.css',
    ];

    public $js = [
    	'js/slidetest.js',
    	'js/knockout-3.1.0.js',
    	'js/pic_upload.js',
        'js/marked.min.js',
        'js/prettify.min.js',
        'js/editormd.min.js',
        'js/clamp.min.js',
        
    ];
}
