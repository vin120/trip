<?php
	$this->title = '公寓信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style>
	.searchResult p{
		display: block;
		width:100%;
		margin-left: 30%; 

	}
	.searchResult p input{
		width: 150px;
		height:29px;
		line-height: 29x;
	}
	.searchResult p select{
		width: 150px;
		height:30px;
		line-height: 30px;
	}
	.searchResult p span:first-child{
		display: inline-block;
		width: 10%;
		text-align: right;
	}

</style>
<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['apartment/index']);?>">公寓信息</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑公寓信息</a>
	</div>
	
	<div class="searchResult">
		<p>
			<span>公寓名：</span>
			<input type="text" name="apartment_name" maxlength="12" />
		</p>
		<p>
			<span>地区名：</span>
			<select name="zoom_name">
				<option value="0">顶级</option>
			</select>
		</p>
		<p>
			<span>价格：</span>
			<input type="text" name="total_price" maxlength="12" />
		</p>
		<p>
			<span>人均价格：</span>
			<input type="text" name="avg_price" maxlength="12" />
		</p>
		<p>
			<span>星级：</span>
			<input type="text" name="star" maxlength="1" />
		</p>
		<p>
			<span>状态：</span>
			<select name="state">
				<option value="1">启用</option>
				<option value="0">禁用</option>
			</select>
		</p>
		<p>
			<span>是否高亮：</span>
			<select name="is_highlight">
				<option value="1">是</option>
				<option value="0">否</option>
			</select>
		</p>

		<div class="btn">
			<input type="submit" value="保存"></input>
			<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
		</div>

	</div>
</div>
<!-- content end -->