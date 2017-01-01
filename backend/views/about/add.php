<?php
	$this->title = '关于我们';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use backend\views\myasset\ThemeAssetUeditor;
	
	PublicAsset::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_about_name = "<?php echo Url::toRoute(['about/verifyaboutname']);?>";
</script>
<style>
	/*Editor*/
    #desc{ display: inline-block; width: 50%; vertical-align: top; }
</style>

<!-- content start -->
<div class="r content">
	<div class="topNav">公司信息管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['about/index']);?>">关于我们</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加关于我们</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'about_form',
				'options' => ['class' => 'about_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
		<input type="hidden" name="about_id" value="" />
			<p>
				<span>标题：</span>
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
			<p>
				<span>内容：</span>
				<textarea id="desc" name="desc"></textarea>
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['about/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	UE.getEditor('desc');
}
</script>