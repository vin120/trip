<?php
	$this->title = '用户信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<script type="text/javascript">
	var verify_user_info = "<?php echo Url::toRoute(['user/verifyuserinfo']);?>";
</script>>

<!-- content start -->
<div class="r content">
	<div class="topNav">用户管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['user/index']);?>">用户信息</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加用户信息</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'user_form',
				'options' => ['class' => 'user_form'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
			<input type="hidden" name="user_id" value="" />
			<p>
				<span>账号：</span>
				<input type="text" name="user_name" maxlength="20" />
				<em class="required_tips">*</em>
				
			</p>
			<p>
				<span>手机号：</span>
				<input type="text" name="phone_number" maxlength="11" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>邮箱：</span>
				<input type="text" name="email" maxlength="20" />
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
				<span>是否同意协议：</span>
				<input type='checkbox' name="protocol" value="1" />
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['user/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->