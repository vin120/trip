<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\modules\wechat\themes\basic\myasset\ThemeAsset;

$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="珠海正和国际旅行有限公司">
    <meta name="keywords" content="珠海正和国际旅行有限公司">
    <meta name="author" content="Seismitech">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="uyan_auth" content="aba6238e9b" />
    <meta name="google-site-verification" content="362TTltlA-Uozef_S2PAxBp5ApoSFn9y7k9TprcFcLA" />
    <meta name="baidu-site-verification" content="RtXC84mJUy" />
    <link rel="shortcut icon" href="http://nowre.com/assets/img/favicon.ico" type="image/x-icon"/>
    <link href="http://nowre.com/assets/img/app_icon/apple-touch-icon.jpg" rel="apple-touch-icon" />
    <link href="http://nowre.com/assets/img/app_icon/apple-touch-icon-76x76.jpg" rel="apple-touch-icon" sizes="76x76" />
    <link href="http://nowre.com/assets/img/app_icon/apple-touch-icon-120x120.jpg" rel="apple-touch-icon" sizes="120x120" />
    <link href="http://nowre.com/assets/img/app_icon/apple-touch-icon-152x152.jpg" rel="apple-touch-icon" sizes="152x152" />
    <link href="http://nowre.com/assets/img/app_icon/apple-touch-icon-180x180.jpg" rel="apple-touch-icon" sizes="180x180" />
    <link href="http://nowre.com/assets/img/app_icon/icon-hires.jpg" rel="icon" sizes="192x192" />
    <link href="http://nowre.com/assets/img/app_icon/icon-normal.jpg" rel="icon" sizes="128x128" />
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/bootstrap.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/bootstrap-theme.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/jasny-bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/fancybox/css/jquery.fancybox.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/animate.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/lib/jiathis_share.css">
	<link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/demo.css">
	<link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/vendor/captions.css">
	
	<!--[if gte IE 9]>
	<style type="text/css">
	    .homepage-bottom-slider-shadow {
	        filter: none;
	    }
	</style>
	<![endif]-->
    <link media="all" type="text/css" rel="stylesheet" href="http://nowre.com/assets/css/main.css?v=20150401">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
	    #aaaaa img{
	        width:100%;
	        margin-top:10px;
	        margin-bottom:10px;
	    }
    </style>
    

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="body">
<div id="frame">

 <?= $content ?>


<?php $this->endBody() ?>
 	
<!-- mobile footer -->
    <div class="container feature-index-footer" id="footer-nav">
        <div class="mobile-footer-copyright">
            <div>
                <p>© COPYRIGHT 正和国际 2016 ALL RIGHTS RESERVED.</p>
                <p>邮箱：541574844@qq.com</p>
                <p>电话：13750028864</p>
            </div>
        </div>
    </div>
</div><!-- end of frame -->


<!-- mobile header -->
<div class="mobile-header" style="background-color: white">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle nav-button three-icon-bar" data-toggle="offcanvas" data-target=".navmenu-fixed-left" data-canvas="body">
            <img src="<?php echo $baseUrl?>img/abc.png" style="width:20px;height:20px">
        </button>
        <a href="<?php echo Url::toRoute('site/index')?>">
            <img src="<?php echo $baseUrl?>img/logo2.png" style="margin-top:5px;" />
        </a>
        <button type="button" class="navbar-toggle pull-right nav-button" data-toggle="offcanvas" data-target=".navmenu-fixed-right" data-canvas="body">
            <img src="<?php echo $baseUrl?>img/search.png" style="width:20px;height:20px">
        </button>
    </div>
</div><!-- end of mobile header -->


<!-- mobile left-menu -->
<div class="navmenu navmenu-inverse navmenu-fixed-left offcanvas mobile-left" data-btn="0" style="width:50%">
<ul class="nav" style="width:100%">
	<li><a href="<?php echo Url::toRoute(['index']);?>"><span>主页</span></a></li>
 	<li><a href="<?php echo Url::toRoute(['featured']);?>"><span>今日精选</span></a></li>
 	<li><a href="<?php echo Url::toRoute(['index']);?>"><span>旅行故事</span></a></li>
	<li><a href="<?php echo Url::toRoute(['index']);?>"><span>度假攻略</span></a></li>
	<li><a href="<?php echo Url::toRoute(['partner']);?>"><span>合作伙伴</span></a></li>
	<li><a href="<?php echo Url::toRoute(['job']);?>"><span>在线招聘</span></a></li>
	<li><a href="<?php echo Url::toRoute(['about']);?>"><span>关于我们</span></a></li>
	<li><a href="<?php echo Url::toRoute(['contact']);?>"><span>联系我们</span></a></li>
</ul>
</div><!-- end of mobile left-menu -->

<!-- mobile right-menu and copyright-->
<div class="navmenu navmenu-inverse navmenu-fixed-right offcanvas mobile-right" data-btn="1">
    <form role="form" action="<?php echo Url::toRoute(['Search/index'])?>" method="GET" id="search-right">
        <div class="form-group active-right">
            <label for="q">
                <img src="<?php echo $baseUrl?>img/search2.png" alt="搜索" style="width:25px;height: 20px;" data-no-retina />搜索
            </label>

            <input type="text" name="destinations" class="form-control text-center" placeholder="目的地/别墅" style="margin-bottom:5px">
            <input type="text" name="day_in" class="form-control text-center" placeholder="入住日期" style="margin-bottom:5px">
            <input type="text" name="day_out" class="form-control text-center" placeholder="退房日期" style="margin-bottom:5px">
            <input type="text" name="number_guest" class="form-control text-center" placeholder="入住人数" style="margin-bottom:5px">
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            <img src="<?php echo $baseUrl?>img/search2.png" alt="搜索" width="20px" height="20px" data-no-retina />
        </button>
    </form>
    
    <div class="mobile-copyright">
        <div class="container">
            <p class="text-muted text-center">©正和国际 2016 ALL RIGHTS RESERVED</p>
        </div>
    </div>
</div><!-- end of mobile right-menu and copyright -->
</div>

<script src="http://nowre.com/assets/js/vendor/jquery-1.11.0.min.js"></script>
<script src="http://nowre.com/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://nowre.com/assets/js/vendor/jasny-bootstrap.min.js"></script>
<script src="http://nowre.com/assets/js/vendor/offcanvas.js"></script>
<script src="http://nowre.com/fancybox/js/jquery.fancybox.pack.js"></script>
<script src="http://nowre.com/assets/js/vendor/hammer.js"></script>
<script src="http://nowre.com/assets/js/vendor/jquery.dotdotdot.js"></script>
<script src="http://nowre.com/assets/js/vendor/retina.js"></script>
<script src="http://nowre.com/assets/js/vendor/fastclick.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox({
            openEffect  : 'elastic',
            closeEffect : 'elastic',
            padding: 0,
            helpers: {
                overlay: {
                    locked: false
                },
                title : {
                    type : 'float'
                }
            }
        });
    });
</script>
<script src="http://nowre.com/assets/js/main.js"></script>

<!-- Google Analytics-->
<script type="text/javascript" charset="utf-8">
    $(function() {
        FastClick.attach(document.body);
    });

    function setShare(title, url, pic) {
        jiathis_config.title = title;
        jiathis_config.summary = "";
        jiathis_config.url = url;
        jiathis_config.pic = pic;
    }
    var jiathis_config = {}
</script>
<script src="http://nowre.com/assets/js/lib/jiathis.js?uid=1407154435672965"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
<?php $this->endPage() ?>
