<?php
	$this->title = '信息发布';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content" id="shoreExcursions_content">
<div class="topNav">信息发布&nbsp;&gt;&gt;&nbsp;<a href="/messagetype/index">信息分类</a></div>
	<div class="searchResult">
	<div id="service_write" class=" write">
	<?php
		$form = ActiveForm::begin([
			'action' => ['add'],
			'method'=>'post',
			'id'=>'messagetype_add',
			'options' => ['class' => 'messagetype_add'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="form">
			<p>
				<label>
					<span class='max_l'><?php echo yii::t('app','消息类型:')?>:</span>
					<input type="text" id="name" name="name" ></input>
				</label>
			</p>

			<p>
				<label>
					<span class='max_l'><?php echo yii::t('app','状态')?>:</span>
					<select name="status" id=status class='input_select'>
						<option value='1' ><?php echo yii::t('app','启用')?></option>
						<option value='0' ><?php echo yii::t('app','禁用')?></option>
					</select>
				</label>
			</p>

		</div>

		<div class="btn">
			<input style="cursor:pointer" type="submit" value="<?php echo yii::t('app','保存')?>"></input>
		</div>

	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->
