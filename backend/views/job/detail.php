<?php
	$this->title = yii::t('app','咨询中心');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;

    PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content" id="refundReason_content">
	<div class="topNav"><?php echo yii::t('app','咨询中心')?>&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','信息发布')?></a>&nbsp;&gt;&gt;&nbsp;<a href="#"><?php echo yii::t('app','添加信息发布')?></a></div>

		<div class="searchResult">
			<p>
				<span><?php echo yii::t('app','申请职位：')?></span>
				<?php echo $job['recruitment_name']?>
			</p>
			<p>
				<span><?php echo yii::t('app','应聘者姓名：')?></span>
				<?php echo $job['name']?>
			</p>
            <p>
				<span><?php echo yii::t('app','年龄：')?></span>
				<?php echo $job['age']?>
			</p>
           
            
            <p>
				<span><?php echo yii::t('app','性别：')?></span>
				<?php echo $job['gender']==0 ?  yii::t('app','男') :  yii::t('app','女')?>
			</p>
			<p>
				<span><?php echo yii::t('app','手机号码：')?></span>
				<?php echo $job['phone_number']?>
			</p>
			<p>
				<span><?php echo yii::t('app','邮箱：')?></span>
				<?php echo $job['email']?>
			</p>
			<p>
				<span><?php echo yii::t('app','自我介绍：')?></span>
				<?php echo $job['introduct']?>
			</p>
			<div class="btn">
				<a href="<?php echo Url::toRoute(['index']);?>"><input type="button" value="返回"></input></a>
			</div>
		</div>
</div>
<!-- content end -->
