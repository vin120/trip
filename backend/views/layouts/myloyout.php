<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

use backend\views\myasset\PublicAsset;

$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';

$controller = Yii::$app->controller->id;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- header start -->
<header id="header">
    <div class="l" id="title">
        <h1><?= \Yii::t('app', '后台管理系统') ?></h1>
    </div>
    <div class="r" id="user">
        <div class="l" id="user_img">
            <img src="<?=$baseUrl ?>images/user.png">
        </div>
        <div class="r">
            <span id="userName"><?= Yii::$app->user->identity->admin_username;?></span>
            <span id="exit"><a href="/site/logout" ><?= \Yii::t('app', 'Logout') ?></a></span>
        </div>
    </div>
</header>
<!-- header end -->
<!-- main start -->
<main id="main">
    <!-- asideNav start -->
    <aside id="asideNav" class="l">
       <nav id="asideNav_open">
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='compony'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '公司信息管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='compony'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='compony'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['compony/index']);?>"><?= \Yii::t('app', '公司信息') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='zone'||$controller=='apartment'||$controller=='service'||$controller=='comment'? ' class="open"':'' ?>>
                   	<a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '度假屋管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='zone'||$controller=='apartment'||$controller=='service'||$controller=='comment'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='zone'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['zone/index']);?>"><?= \Yii::t('app', '地区管理') ?></a></li>
                    <li<?= $controller=='apartment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['apartment/index']);?>"><?= \Yii::t('app', '度假屋信息') ?></a></li>
                    <li<?= $controller=='service'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['service/index']);?>"><?= \Yii::t('app', '服务类别') ?></a></li>
                    <li<?= $controller=='comment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['comment/index']);?>"><?= \Yii::t('app', '评论管理') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='user'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '用户管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='user'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='user'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['user/index']);?>"><?= \Yii::t('app', '用户信息') ?></a></li>
                  </ul>
            </ul>
              <!-- 一级 -->
            <ul>
                <li <?= $controller=='admin'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '管理员管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='admin'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='admin'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['admin/index']);?>"><?= \Yii::t('app', '管理员信息') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='order'||$controller=='insurance'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '订单管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='order'||$controller=='insurance'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='order'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['order/index']);?>"><?= \Yii::t('app', '查看订单') ?></a></li>
                    <li<?= $controller=='insurance'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['insurance/index']);?>"><?= \Yii::t('app', '保险管理') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='partner'||$controller=='route'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '合作伙伴管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='partner'||$controller=='route'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='partner'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['partner/index']);?>"><?= \Yii::t('app', '合作伙伴信息') ?></a></li>
                    <li<?= $controller=='route'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['route/index']);?>"><?= \Yii::t('app', '推荐路线') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='recruitmenttype'||$controller=='recruitment'|| $controller=='job'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '招聘管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='recruitmenttype'||$controller=='recruitment'||$controller=='job'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='recruitmenttype'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['recruitmenttype/index']);?>"><?= \Yii::t('app', '招聘分类') ?></a></li>
                    <li<?= $controller=='recruitment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['recruitment/index']);?>"><?= \Yii::t('app', '职位信息发布') ?></a></li>
                    <li<?= $controller=='job'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['job/index']);?>"><?= \Yii::t('app', '应聘信息') ?></a></li>
                  </ul>
            </ul>
            <!-- 一级 -->
            <ul>
                <li <?= $controller=='messagetype'||$controller=='message'? ' class="open"':'' ?>>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '咨询中心') ?></a>
                </li>
                <!-- 二级 -->
                <ul style="<?= $controller=='messagetype'||$controller=='message'? 'display: block;':'display: none;' ?>">
                    <li<?= $controller=='messagetype'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['messagetype/index']);?>"><?= \Yii::t('app', '信息分类') ?></a></li>
                    <li<?= $controller=='message'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['message/index']);?>"><?= \Yii::t('app', '信息发布') ?></a></li>
                  </ul>
            </ul>
            <a href="#" id="closeAsideNav"><img src="<?=$baseUrl ?>images/asideNav_close.png"></a>
        </nav>
        <nav id="asideNav_close">
            <ul>
                <li><img src="<?=$baseUrl ?>images/routeManage_icon.png"></li>
                <a href="#" id="openAsideNav"><img src="<?=$baseUrl ?>images/asideNav_open.png"></a>
            </ul>
        </nav>
    </aside>
    <!-- asideNav end -->
    <!-- content start -->
    <?= $content ?>
    <!-- content end -->
</main>
<!-- main end -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
