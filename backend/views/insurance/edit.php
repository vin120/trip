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
	<a href="#">编辑保险</a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'action' => ['edit'],
			'method'=>'post',
			'id'=>'insurance_form',
			'options' => ['class' => 'insurance_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
	<div class="searchResult">
	<input type="hidden" name="insurance_id" value="<?php echo $data['insurance_id'] ?>" />
		<p>
			<span>保险名称：</span>
			<input type="text" name="insurance_name" maxlength="12" value="<?php echo $data['name'] ?>" />
			<em class="required_tips">*</em>
			
		</p>
		<p>
			<span>价格：</span>
			<input type="text" name="insurance_price" maxlength="8" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" value="<?php echo $data['price'] ?>" />
			<em class="required_tips">*</em>
		</p>
		<p>
			<span>状态：</span>
			<select name="state">
				<option value="1" <?php echo $data['status']==1?"selected='selected'":"" ?> >启用</option>
				<option value="0" <?php echo $data['status']==0?"selected='selected'":"" ?> >禁用</option>
			</select>
		</p>
		<p>
			<span>保险内容：</span>
			<?php $desc_rep =  str_replace('src="','src="'.Yii::$app->params['img_url'],$data['content']); ?> 
			<textarea id="content" name="content"><?php echo $desc_rep ?></textarea>
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