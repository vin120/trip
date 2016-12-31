<?php
	$this->title = '服务类别';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<script type="text/javascript">
	var verify_service_name = "<?php echo Url::toRoute(['service/verifyservicename']);?>";
</script>
<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['service/index']);?>">服务类别</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑服务类别</a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'action' => ['edit'],
			'method'=>'post',
			'id'=>'service_form',
			'options' => ['class' => 'service_form'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="searchResult">
			<input type='hidden' name="service_id" value="<?php echo $data['service_id']?>" />
			<p>
				<span>设施名：</span>
				<input type="text" name="service_name" maxlength="12" value="<?php echo $data['name'] ?>" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1" <?php echo $data['status']==1?"selected='selected'":''; ?> >启用</option>
					<option value="0" <?php echo $data['status']==0?"selected='selected'":""; ?> >禁用</option>
				</select>
			</p>
			<p>
				<span style="vertical-align:top;">属性：</span>
				<?php 
					$str = '';
					foreach ($attr as $key => $value) {
						$str .= $value['name'].',';
					}
					$str =  trim($str,',');
				?>
				<textarea name="service_attr" style="resize: none;width:300px;height: 120px;"><?php echo $str;?></textarea>
				<em class="required_tips">*</em>
			</p>
			

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['service/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->