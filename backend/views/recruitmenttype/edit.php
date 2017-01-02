<?php
	$this->title =  yii::t('app','招聘管理');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content" id="shoreExcursions_content">
<div class="topNav"><?php echo yii::t('app','招聘管理')?>&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','招聘分类')?></a></div>
	<div class="searchResult">
	<div id="service_write" class=" write">
	<?php
		$form = ActiveForm::begin([
			'action' => ['edit','id'=>$recruitment_type['id']],
			'method'=>'post',
			'id'=>'recruitmenttype_edit',
			'options' => ['class' => 'recruitmenttype_edit'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="form">
			<p>
				<label>
				<input type="hidden">
					<span class='max_l'><?php echo yii::t('app','类型名')?>:</span>
					<input type="text" id="name" name="name" value="<?php echo $recruitment_type['name']?>"></input>
				</label>
			</p>

			<p>
				<label>
					<span class='max_l'><?php echo yii::t('app','状态')?>:</span>
					<select name="status" id=status class='input_select'>
						<option value='1'  <?php echo  $recruitment_type['status'] == 1 ? "selected='seletcted'" : '';?> ><?php echo yii::t('app','启用')?></option>
						<option value='0'  <?php echo  $recruitment_type['status'] == 0 ? "selected='seletcted'" : '';?> ><?php echo yii::t('app','禁用')?></option>
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
