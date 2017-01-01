<?php
	$this->title = '订单详情';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<style>
	div.div-box-float{
		overflow: hidden;
	}
	div.div-box-float .div-box-left-float{
		display: inline-block;
		width: 45%;
		float: left;
	}
	div.div-box-float .div-box-right-float{
		display: inline-block;
		width: 45%;
		float: left;
	}
	div.div-box-float > div label{
		display: block;
		line-height: 35px;
	}
	div.div-box-float > div label span{
		width: 100px;
		display: inline-block;
		text-align: right;
	}

</style>


<!-- content start -->
<div class="r content">
	<div class="topNav">订单管理&nbsp;&gt;&gt;&nbsp;
	<a href="#">订单信息</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">订单详情</a></div>
	
	<div class="searchResult">

		<div class="div-box-float">
			<div class="div-box-left-float">
				<label><span>订单号：</span></label>
				<label><span>订单状态：</span></label>
				<label><span>支付状态：</span></label>
				<label><span>下单时间：</span></label>
				<label><span>支付时间：</span></label>
			</div>
			<div class="div-box-right-float">
				<label><span>价格：</span></label>
				<label><span>人均价格：</span></label>
				<label><span>状态：</span></label>
				<label><span>是否高亮：</span></label>
			</div>
		</div>


		
	</div>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){


}
</script>