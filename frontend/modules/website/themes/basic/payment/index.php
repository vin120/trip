<?php
	$this->title = '珠海正和国际旅游有限公司-我的订单';
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

		<div class="Cdir">
          <div class="inner Lcfx">
            <div class="link Lfll">
              <a title="" href="/">首页</a>
              <i>&gt;</i>支付页面</div>
          </div>
        </div>
        <div class="wp Lcfx">
          <div class="jg-left Lfll">
            <!--支付开始-->
            <form id="pay_form" action="" method="post">
              <div class="dtitle Lcfx zf-tit">支付</div>
              <div class="de-zf Lmt10">
                <p class="ordersNum">您的订单号：SLV010011687</p>
                <p class="money">付款金额：￥9837元</p>
                <h2 class="tit-h2">第三方支付</h2>
                <div class="pay-list">
                  <div class="short-b">
                    <div class="input">
                      <input type="radio" name="gate_id" data-name="支付宝" value="alipay"></div>
                    <div class="image">
                      <img src="<?php echo $baseUrl?>img/bank/alipay.jpg"></div>
                  </div>
                  <div class="short-b">
                    <div class="input">
                      <input type="radio" name="gate_id" data-name="微信" value="wechat"></div>
                    <div class="image">
                      <img src="<?php echo $baseUrl?>/img/bank/wechat.jpg"></div>
                  </div>
                </div>
              </div>
              <div class="tj-pay">
                <a href="javascript:;" id="pay_next" onclick="submit_form();">下一步</a></div>
            </form>
            <!--支付结束-->
            </div>
            
           <div class="jg-right Lflr">
            <!--优化 开始-->
            <div class="Lmt68 detail-lxfs">
              <ul class="majo-cont">
                <li>
                  <span>最优价格</span>如有比我们更优价格，差价双倍赔付</li>
                <li>
                  <span>最优品质</span>所有别墅均亲自考察，保障品质</li>
                <li>
                  <span>最优服务</span>评论有礼全程贴心咨询，一站式为您服务</li>
                <li>
                  <span>注册有礼</span>只需注册，即可获得1500元抵用券</li>
                <li>
                  <span>评论有礼</span>轻松点评，即可获得100元抵用券</li></ul>
            </div>
            <!--优化 结束-->
            </div>
		</div>
		
		
	<script type="text/javascript">
	<?php $this->beginBlock('js_end') ?>
		var pageID = 'pay';
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