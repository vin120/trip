<?php
	$this->title = '公寓信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;<a href="#">公寓信息</a></div>
	
	<div class="searchResult">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>地区名</th>
					<th>公寓名</th>
					<th>价格</th>
					<th>人均价格</th>
					<th>星级</th>
					<th>状态</th>
					<th>是否高亮</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></input></td>
					<td>广东</td>
					<td>珠海度假屋</td>
					<td>1299</td>
					<td>299</td>
					<td>5</td>
					<td>启用</td>
					<td>是</td>
					<td>
						<a href="<?php echo Url::toRoute(['apartment/apartmentedit']);?>"><img src="<?php echo $baseUrl; ?>images/write.png" class="btn1"></a>
						<a href="#"><img src="<?php echo $baseUrl; ?>images/delete.png" class="btn2"></a>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="records">记录数:<span>1</span></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['apartment/apartmentadd']);?>"><input type="button" value="添加"></input></a>
			<input type="button" value="批量删除"></input>
		</div>
	</div>
</div>
<!-- content end -->