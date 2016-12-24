
<?php
	$this->title = '推荐路线';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;

	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">合作伙伴管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['route/index']);?>">推荐路线</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑推荐路线</a>
	</div>
	<form >
		<div class="searchResult">

			<p>
				<span>合作伙伴名称：</span>
				<select name="parent_zoom_name">
					<option value="0">顶级</option>
				</select>
			</p>
			<p>
				<span>推荐路线名称：</span>
				<input type="text" name="zoom_name" maxlength="12" />
			</p>
			<p>
				<span>图片：</span>
			</p>

			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>
			<p>
				<span>图文介绍：</span>
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['route/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	</form>
</div>
<!-- content end -->
