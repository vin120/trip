<?php
	$this->title = '合作伙伴信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">合作伙伴管理&nbsp;&gt;&gt;&nbsp;<a href="#">合作伙伴信息</a></div>
	
	<div class="searchResult">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>合作伙伴名称</th>
					<th>图片</th>
					<th>介绍</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></input></td>
					<td>12345678</td>
					<td>苏州太湖国际旅行社责任有限公司</td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>
						<a href="<?php echo Url::toRoute(['partner/edit']);?>"><img src="<?php echo $baseUrl; ?>images/write.png" class="btn1"></a>
						<a href="#"><img src="<?php echo $baseUrl; ?>images/delete.png" class="btn2"></a>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="records">记录数:<span>26</span></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['partner/add']);?>"><input type="button" value="添加"></input></a>
			<input type="button" value="批量删除"></input>
		</div>
	</div>
</div>
<!-- content end -->