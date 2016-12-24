<?php
	$this->title = '招聘分类';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;

	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style type="text/css">
	.hidden{
		display: none;
	}
	.alert_div{
		position: fixed;
		top:20%;
		left:35%;
		z-index: 30;
		background: #fff;
	}
	.alert_barrier{
		background: #000 none repeat scroll 0 0;
	    height: 100%;
	    left: 0;
	    opacity: 0.5;
	    position: fixed;
	    top: 0;
	    width: 100%;
	    z-index: 20;
	}
	.alert_div p{
		padding-left: 65px;
	}
	.alert_div p label span:first-child{
		display: inline-block;
		width:100px;
		text-align: right;
	}

</style>

<!-- content start -->
<div class="r content">
	<div class="topNav">招聘管理&nbsp;&gt;&gt;&nbsp;<a href="#">招聘分类</a></div>
	
	<div class="searchResult recruitmenttype">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>类别名</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></input></td>
					<td>刘珍凤</td>
					<td>刘珍凤</td>
					<td>
						<a ><img src="<?php echo $baseUrl; ?>images/write.png" class="btn1"></a>
						<a href="#"><img src="<?php echo $baseUrl; ?>images/delete.png" class="btn2"></a>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="records">记录数:<span>26</span></p>
		<div class="btn">
			<input class="recruitmenttype_alert_but" type="button" value="添加"></input>
			<input type="button" value="批量删除"></input>
		</div>


		<!-- 弹框 -->
		<div class="alert_barrier hidden"></div>
		<div class="pop-ups write alert_div hidden">
			<h3>添加<a href="#" class="close r"></a></h3>
			<div>
				<input type="hidden" name="id" value="" />
				<p>
					<label>
						<span>类别名:</span>
						<input name="type_name" type="text" style="height:30px;line-height: 30px;box-sizing:border-box;width: 180px"></input>
					</label>
				</p>
				<p>
					<label>
						<span>状态:</span>
						<select name="state" style="height:30px;line-height: 30px;width: 180px">
							<option value="1">启用</option>
							<option value="0">禁用</option>
						</select>
					</label>
				</p>
				<div class="btn">
					<input type="button" value="保存"></input>
					<input id="close_alert_btn" type="button" value="关闭"></input>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- content end -->