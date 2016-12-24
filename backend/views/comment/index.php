<?php
	$this->title = '评论管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;<a href="#">评论管理</a></div>
	
	<div class="searchResult">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>公寓名</th>
					<th>用户名</th>
					<th>类型</th>
					<th>评论时间</th>
					<th>评论内容</th>
					<th>评论星级</th>
					<th>评论星级</th>
					<th>是否显示</th>
					<th>是否已查看</th>
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
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>
						<a href="#"><img src="<?php echo $baseUrl; ?>images/delete.png" class="btn2"></a>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="records">记录数:<em>26</em></p>
		<div class="btn">
			<input type="button" value="批量删除"></input>
		</div>
	</div>
</div>
<!-- content end -->