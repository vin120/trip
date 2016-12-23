<?php
	$this->title = '信息发布';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content" id="refundReason_content">
	<div class="topNav">信息发布&nbsp;&gt;&gt;&nbsp;<a href="/messagetype/index">信息分类</a></div>
	<div class="searchResult">
	<?php
		$form = ActiveForm::begin([
			'id'=>'messagetype_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]); 
	?>
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
					<td><input type="checkbox" name="ids[]" value="<?php echo $value['id']?>" class="checkall"></input></td>
					<td><?php echo $key + 1;?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['status'] == 1 ? '可用' : '不可用'?></td>
					<td>
						<a href="<?php echo Url::toRoute(['edit','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/write.png"></a>
						<a class="delete" style="cursor:pointer" id="<?php echo $value['id'];?>"><img src="<?=$baseUrl ?>images/delete.png"></a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		<?php 
			ActiveForm::end();
		?>
		</table>
		<p class="records">Records:<span><?php echo $count?></span></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['add']);?>"><input type="button" value="<?php echo yii::t('app','添加')?>"></input></a>
            <input id="del_submit" type="button" value="<?php echo yii::t('app','删除选择项')?>"></input>
		</div>
	</div>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
		
	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but",function(){
		var val = $(this).attr('id');
		location.href="<?php echo Url::toRoute(['delete']);?>"+"?id="+val;
	});

	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but_more",function(){
		$("form#messagetype_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>