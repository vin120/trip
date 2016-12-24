<?php
	$this->title = '应聘信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">招聘管理&nbsp;&gt;&gt;&nbsp;<a href="#">应聘信息</a></div>
	
	<div class="searchResult">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>申请职位</th>
					<th>应聘者姓名</th>
					<th>年龄</th>
					<th>性别</th>
					<th>手机号码</th>
					<th>邮箱</th>
					<th>自我介绍</th>
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
					<td>12345678</td>
					<td>苏州太湖国际旅行社责任有限公司</td>
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