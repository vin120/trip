<?php
	$this->title = '信息发布';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">信息发布&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['message/index']);?>">信息发布</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑信息发布</a>
	</div>
	<form >
		<div class="searchResult">
			<p>
				<span>分类：</span>
				<select name="type">
					<option></option>
				</select>
			</p>
			<p>
				<span>标题：</span>
				<input type="text" name="title" maxlength="50" />
			</p>
			<p>
				<span style="position: relative;top:-30px;">内容：</span>
				<textarea></textarea>
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
				<a href="<?php echo Url::toRoute(['message/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	</form>
</div>
<!-- content end -->