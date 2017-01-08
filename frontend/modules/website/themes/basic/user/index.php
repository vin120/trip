<?php
	$this->title = '珠海正和国际旅游有限公司-我的订单';
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetUser;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	ThemeAssetUser::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>
 		<div class="wp user">
            <div class="user-left">
              <div class="user-list">
                <div class="user-img">
                  <span class="head-circle"></span>
                  <img src="<?php echo $baseUrl?>css/ucenter/head-pic.png" /></div>
                <h3 class="user-name"><?php echo $user['phone_number']?></h3>
                <a href="<?php echo Url::toRoute(['user/info'])?>#change">编辑资料</a>
                <a href='<?php echo Url::toRoute(['user/changepassword'])?>'>修改密码</a></div>
              <ul class="user-nav">
                <li class="cur">
                  <a class="order-link" href="<?php echo Url::toRoute(['user/index'])?>">我的订单</a></li>
                <li>
                  <a class="info-link" href="<?php echo Url::toRoute(['user/info'])?>">我的资料</a></li>
                <li>
                  <a class="house-link" href="<?php echo Url::toRoute(['user/collect'])?>">我的收藏</a></li>
            </div>
            
            
             <div class="user-right">
              <div class="main-list">
                <p class="cue">
                  <i>
                  </i>如需帮助或其他服务，请致电
                  <span><?php echo $_400_number['400_number']?></span></p>
                <ul class="nav-user-r">
                  <input type="hidden" id="hid_state" name="hid_state" value="" />
                  <li>
                    <a href='/ucenter/user'>全部(<span>1</span>)</a></li>
                  <li>
                    <a href='/ucenter/user?state=1'>待付款(<span>0</span>)</a></li>
                  <li>
                    <a href='/ucenter/user?state=2'>处理中(<span>1</span>)</a></li>
                  <li>
                    <a href='/ucenter/user?state=3'>已付款(<span>0</span>)</a></li>
                  <li>
                    <a href='/ucenter/user?state=4'>已取消(<span>0</span>)</a></li>
                </ul>
                <div class="listsL">
                  <div class="listH">
                    <ul>
                      <li class="lists1">
                        <span>订单号</span></li>
                      <li class="lists2">
                        <span>别墅名称</span></li>
                      <li class="lists3">
                        <span>预定日期</span></li>
                      <li class="lists4">
                        <span>入住日期-退房日期</span></li>
                      <li class="lists5">
                        <span>人数</span></li>
                      <li class="lists6">
                        <span>金额</span></li>
                      <li class="lists7">
                        <span>操作</span></li>
                      <li class="lists8">
                        <span>查看</span></li>
                    </ul>
                  </div>
                  <div class="listsMk">
                    <ul>
                      <li class="lists1">SLV010011687</li>
                      <li class="lists2 color-ff9">
                        <a href="gongyu.html" target="_blank">诺曼海滩别墅</a></li>
                      <li class="lists3">2016-12-20 14:07:15</li>
                      <li class="lists4">2016-12-20 - 2016-12-21</li>
                      <li class="lists5">6成人，0儿童</li>
                      <li class="lists6">10137</li>
                      <li class="lists7">
                        <a class="u-f-c2" href="<?php echo Url::toRoute(['payment/index'])?>">付款</a></li>
                      <li class="lists8">
                        <a class="u-f-c1 order-detial-btn" onclick="showDetail(11687,1)" class="u-f-c1">订单详情</a></li>
                      <!-- <li class="lists1"></li>
                      <li class="lists2">2016-12-20 - 2016-12-21</li>
                      <li class="lists3">6成人，0儿童</li>
                      <li class="lists4"></li>
                      <li class="lists5">处理中</li>
                      <li class="lists6"><a class="u-f-c1 order-detial-btn"  onclick="showDetail(11687,1)" class="u-f-c1">订单详情</a></li>
                      -->
                    </ul>
                  </div>
                  <div style="clear:both;"></div>
                </div>
              </div>
              <div class="order-detial">
                <!-- 订单详情 --></div>
            </div>
          </div>
          

	<script type="text/javascript">
	<?php $this->beginBlock('js_end') ?>

	function showDetail(id, state) {
        window.location.href='<?php echo Url::toRoute(['user/orderdetail'])?>';
	}


	
		var pageID = 'myorder';
		var MESSAGE = {};
		var COMMON_MESSAGE = '';
	
	
		if ('default' == pageID) {
			senseluxuryFed.loadIndexFun();
		} else if ('detail' == pageID || 'bankDetail' == pageID) {
	    	senseluxuryFed.loadDetailFun();
	  	} else if ('fqa' == pageID) {
	    	senseluxuryFed.loadFqaFun();
	  	} else {
	    	senseluxuryFed.loadListFun();
	  	}
	
	<?php $this->endBlock() ?>
	</script>
	<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>