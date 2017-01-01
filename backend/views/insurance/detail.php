<?php
	$this->title = '保险管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">订单管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['insurance/index']);?>">保险管理</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">保险详情</a>
	</div>
		
	<div class="searchResult">
		<div style="line-height: 35px;">
			<span style="display: inline-block;width: 120px;text-align: right;">保险名称：</span>
			<?php echo $data['name'] ?>
			
		</div>
		<div style="line-height: 35px;">
			<span style="display: inline-block;width: 120px;text-align: right;">价格：</span>
			<?php echo $data['price'] ?>
		</div>
		<div style="line-height: 35px;">
			<span style="display: inline-block;width: 120px;text-align: right;">状态：</span>
			<?php echo $data['status']==1?"启用":"禁用" ?>
		</div>
		<div style="line-height: 35px;">
			<span style="display: inline-block;width: 120px;text-align: right;vertical-align: top;">保险内容：</span>
			<?php $desc_rep =  str_replace('src="','src="'.Yii::$app->params['img_url'],$data['content']); ?> 
			<label style="display: inline-block;width: 200px;"><?php echo $desc_rep ?></label>
		</div>


		<div class="btn">
			<a href="<?php echo Url::toRoute(['insurance/index']);?>"><input type="button" value="返回"></input></a>
		</div>

	</div>
	
</div>
<!-- content end -->
