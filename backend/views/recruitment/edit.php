<?php
	$this->title = '职位信息发布';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">招聘管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['recruitment/index']);?>">职位信息发布</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑职位信息发布</a>
	</div>
	<form >
		<div class="searchResult">
			
			<p>
				<span>招聘类别：</span>
				<select name="parent_zoom_name">
					<option value="0">顶级</option>
				</select>
			</p>
			<p>
				<span>职位名称：</span>
				<input type="text" name="zoom_name" maxlength="12" />
			</p>
			<p>
				<span>招聘人数：</span>
				<input type="text" name="zoom_name" maxlength="12" />
			</p>
			<p>
				<span>职位描述：</span>
				<input type="text" name="zoom_name" maxlength="12" />
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
				<a href="<?php echo Url::toRoute(['recruitment/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	</form>
</div>
<!-- content end -->