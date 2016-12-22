<?php
	$this->title = '信息发布';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content" id="refundReason_content">
	<div class="topNav">信息发布&nbsp;&gt;&gt;&nbsp;<a href="/messagetype/index">信息分类</a></div>
	<div class="searchResult">
		<table>
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>消息类型</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($result as $key => $value):?>
				<tr>
					<td><input type="checkbox"></input></td>
					<td><?php echo $key + 1;?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['status'] == 1 ? '可用' : '不可用'?></td>
					<td>
						<a href="<?php echo Url::toRoute(['edit','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/write.png" class="btn1"></a>
						<a href="<?php echo Url::toRoute(['edit','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/delete.png" class="btn2"></a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<p class="records">Records:<span><?php echo $count?></span></p>
		<div class="btn">
		<a href="<?php echo Url::toRoute(['add']);?>"><input type="button" value="<?php echo yii::t('app','添加')?>"></input></a>
			<input id="del_submit" type="button" value="删除选择项"></input>
		</div>
	</div>
</div>
<!-- content end -->