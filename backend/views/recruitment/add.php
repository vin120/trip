<?php
	$this->title = yii::t('app','职位信息发布') ;
	use backend\views\myasset\PublicAsset;
	use backend\views\myasset\ThemeAssetUeditor;
	use yii\helpers\Url;
    use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<style type="text/css">
    /*write*/
    #introduct{ display: inline-block; width: 50%; vertical-align: top; }
</style>


<!-- content start -->
<div class="r content">
	<div class="topNav"><?php echo yii::t('app','招聘管理')?>&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','职位信息发布')?></a>&nbsp;&gt;&gt;&nbsp;
		<a href="#"><?php echo yii::t('app','添加职位信息发布')?></a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'id'=>'recruitment_form',
			'action'=>'add',
			'method'=>'post',
            'options' =>['class'=> 'recruitment_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="searchResult">
			<p>
				<span><?php echo yii::t('app','招聘类别：')?></span>
				<select name="type_id">
					<?php foreach($recruitment_type as $row):?>
					    <option value="<?= $row['id']?>"><?= $row['name']?></option>
                    <?php endforeach?>
				</select>
			</p>
			<p>
				<span><?php echo yii::t('app','职位名称：')?></span>
				<input type="text" name="name" />
			</p>
			
			<p>
				<span><?php echo yii::t('app','招聘人数：')?></span>
				<input type="text" name="number" />
			</p>
			<p>
				<span><?php echo yii::t('app','发布者：')?></span>
				<input type="text" name="author" />
			</p>
			<p>
				<span><?php echo yii::t('app','状态：')?></span>
				<select name="status">
					<option value="1"><?= yii::t('app','启用')?></option>
					<option value="0"><?= yii::t('app','禁用')?></option>
				</select>
			</p>
			
			<p>
				<span><?php echo yii::t('app','职位描述：')?></span>
				<textarea id="introduct" name="introduct"></textarea>
			</p>
			
			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['index']);?>"><input type="button" value="返回"></input></a>
			</div>
		</div>
	<?php ActiveForm::end();?>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){
	UE.getEditor('introduct');
}
</script>
