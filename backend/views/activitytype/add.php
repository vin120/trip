<?php
	$this->title = '活动分类';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_activitytype_name = "<?php echo Url::toRoute(['activitytype/verifyactivitytypename']);?>";
</script>

<!-- content start -->
<div class="r content">
	<div class="topNav">活动管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['activitytype/index']);?>">活动分类</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加活动</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'activitytype_form',
				'options' => ['class' => 'activitytype_form'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
		<input type="hidden" name="activitytype_id" value="" />
			<p>
				<span>活动名称：</span>
				<input type="text" name="name" maxlength="12" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['activitytype/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){

}
</script>