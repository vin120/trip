<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

use backend\views\myasset\PublicAsset;

PublicAsset::register($this);
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
<header id="mainHeader" class="clearfix">
    <!-- logo start -->
    <h1 id="logo" class="l">
        <img src="<?=$baseUrl ?>images/logo.png">
        <?= \Yii::t('app', '后台管理系统') ?>
    </h1>
    <!-- logo end -->
    <!-- user start -->
    <div id="user" class="r clearfix">
        <div class="l" id="userImg">
            <img src="<?=$baseUrl ?>images/user.png">
        </div>
        <div class="l">
            <span id="userName"><?= Yii::$app->user->identity->admin_username;?></span>
            <span id="exit"><a href="/site/logout" ><?= \Yii::t('app', 'Logout') ?></a></span>
        </div>
    </div>
    <!-- user end -->
</header>
<!-- header end -->
<!-- main start -->
<main id="main" class="pBox">
    <!-- asideNav start -->
    <aside id="asideNav">
        <nav id="openNav">
            <!-- 一级 -->
            <ul>
                <li class="open">
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '公司信息管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='compony'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['compony/index']);?>"><?= \Yii::t('app', '公司信息') ?></a></li>
                  </ul>
            </ul>
            
            <!-- 一级 -->
            <ul>
                <li>
                   	<a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '公寓管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='zone'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['zone/index']);?>"><?= \Yii::t('app', '地区管理') ?></a></li>
                    <li<?= $controller=='apartmenttype'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['apartmenttype/index']);?>"><?= \Yii::t('app', '公寓类别') ?></a></li>
                    <li<?= $controller=='apartment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['apartment/index']);?>"><?= \Yii::t('app', '公寓信息') ?></a></li>
                    <li<?= $controller=='service'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['service/index']);?>"><?= \Yii::t('app', '服务类别') ?></a></li>
                    <li<?= $controller=='comment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['comment/index']);?>"><?= \Yii::t('app', '评论管理') ?></a></li>
                  </ul>
            </ul>
            
            <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '用户管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='user'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['user/index']);?>"><?= \Yii::t('app', '用户信息') ?></a></li>
                  </ul>
            </ul>
            
            
              <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '管理员管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='admin'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['admin/index']);?>"><?= \Yii::t('app', '管理员信息') ?></a></li>
                  </ul>
            </ul>
            
            
            <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '订单管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='order'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['order/index']);?>"><?= \Yii::t('app', '查看订单') ?></a></li>
                    <li<?= $controller=='insurance'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['insurance/index']);?>"><?= \Yii::t('app', '保险管理') ?></a></li>
                  </ul>
            </ul>
            
            <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '合作伙伴管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='partner'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['partner/index']);?>"><?= \Yii::t('app', '合作伙伴信息') ?></a></li>
                    <li<?= $controller=='route'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['route/index']);?>"><?= \Yii::t('app', '推荐路线') ?></a></li>
                  </ul>
            </ul>
            
            <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '招聘管理') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='recruitmenttype'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['recruitmenttype/index']);?>"><?= \Yii::t('app', '招聘分类') ?></a></li>
                    <li<?= $controller=='recruitment'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['recruitment/index']);?>"><?= \Yii::t('app', '职位信息发布') ?></a></li>
                    <li<?= $controller=='job'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['job/index']);?>"><?= \Yii::t('app', '应聘信息') ?></a></li>
                  </ul>
            </ul>
            
            
            <!-- 一级 -->
            <ul>
                <li>
                    <a><img src="<?=$baseUrl ?>images/icon.png"><?= \Yii::t('app', '信息发布') ?></a>
                </li>
                <!-- 二级 -->
                <ul>
                    <li<?= $controller=='messagetype'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['messagetype/index']);?>"><?= \Yii::t('app', '信息分类') ?></a></li>
                    <li<?= $controller=='message'? ' class="active"':'' ?>><a href="<?php echo Url::toRoute(['message/index']);?>"><?= \Yii::t('app', '信息发布') ?></a></li>
                  </ul>
            </ul>
            
            
            <div class="extendBtn">
                <a href="#"><span><<</span></a>
            </div>
        </nav>
        <nav id="closeNav">
            <ul>
                <li><img src="<?=$baseUrl ?>images/icon.png"></li>
            </ul>
            <div class="extendBtn">
                <a href="#"><span><<</span></a>
            </div>
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

