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
		<a href="#">添加管理员</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'admin_form',
				'options' => ['class' => 'admin_form'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
			<input type="hidden" name="admin_id" value="" />
			<p>
				<span>账号：</span>
				<input type="text" name="user_name" maxlength="20" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>真实姓名：</span>
				<input type="text" name="real_name" maxlength="20" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>密码：</span>
				<input type="password" name="password" maxlength="20" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>确认密码：</span>
				<input type="password" name="query_password" maxlength="20" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>是否是超级管理员：</span>
				<input type='checkbox' name="tag" value="1" />
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