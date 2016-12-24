<?php
	$this->title = '服务类别';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['service/index']);?>">服务类别</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加服务类别</a>
	</div>
	<form >
		<div class="searchResult">
			<p>
				<span>设施名：</span>
				<input type="text" name="zoom_name" maxlength="12" />
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>
			<p>
				<span style="position: relative;top:20px;top:-95px;">属性：</span>
				<textarea style="resize: none;width:300px;height: 120px;"></textarea>
			</p>
			

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['service/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	</form>
</div>
<!-- content end -->