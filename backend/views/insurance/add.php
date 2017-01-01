<?php
	$this->title = '保险管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use backend\views\myasset\ThemeAssetUeditor;
	
	PublicAsset::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_insurance_name = "<?php echo Url::toRoute(['insurance/verifyinsurancename']);?>";
</script>

<style type="text/css">
    /*write*/
    #content{ display: inline-block; width: 50%; vertical-align: top; }
</style>

<!-- content start -->
<div class="r content">
	<div class="topNav">订单管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['insurance/index']);?>">保险管理</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加保险</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'insurance_form',
				'options' => ['class' => 'insurance_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
		<input type="hidden" name="insurance_id" value="" />
			<p>
				<span>保险名称：</span>
				<input type="text" name="insurance_name" maxlength="12" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>价格：</span>
				<input type="text" name="insurance_price" maxlength="8" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>
			<p>
				<span>保险内容：</span>
				<textarea id="content" name="content"></textarea>
			</p>


			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['insurance/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){
	UE.getEditor('content');

	
	
}
</script>