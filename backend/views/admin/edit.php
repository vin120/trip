<?php
	$this->title = '管理员信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_admin_info = "<?php echo Url::toRoute(['admin/verifyadmininfo']);?>";
</script>>

<!-- content start -->
<div class="r content">
	<div class="topNav">管理员管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['admin/index']);?>">管理员信息</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑管理员信息</a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'action' => ['edit'],
			'method'=>'post',
			'id'=>'admin_form',
			'options' => ['class' => 'admin_form'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
	<div class="searchResult">
		<input type="hidden" name="admin_id" value="<?php echo $data['admin_id'] ?>" />
		<p>
			<span>账号：</span>
			<input type="text" name="user_name" maxlength="20" value="<?php echo $data['admin_username'] ?>" />
			<em class="required_tips">*</em>
			
		</p>
		<p>
			<span>真实姓名：</span>
			<input type="text" name="real_name" maxlength="20" value="<?php echo $data['admin_real_name'] ?>" />
			<em class="required_tips">*</em>
			
		</p>
		<p>
			<span>密码：</span>
			<input type="password" name="password" maxlength="20" value="******" />
			<em class="required_tips">*</em>
		</p>
		<p>
			<span>确认密码：</span>
			<input type="password" name="query_password" maxlength="20" value="******"  />
			<em class="required_tips">*</em>
		</p>
		<p>
			<span>是否是超级管理员：</span>
			<input type='checkbox' name="tag" value="1" <?php echo $data['tag']==0?"checked='checked'":"";?> />
		</p>

		<div class="btn">
			<input type="submit" value="保存"></input>
			<a href="<?php echo Url::toRoute(['admin/index']);?>"><input type="button" value="返回"></input></a>
		</div>

	</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->