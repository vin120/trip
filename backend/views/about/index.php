<?php
	$this->title = '关于我们';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">公司信息管理&nbsp;&gt;&gt;&nbsp;<a href="#">关于我们</a></div>
	
	<div class="searchResult">
		
		<?php
		$form = ActiveForm::begin([
			'id'=>'about_index_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
		?>
		<table id="zone_table">
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>标题</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $key=>$row) {?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $row['id']?>"></input></td>
					<td><?php echo ($key+1)?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['status']==1?"启用":"禁用";?></td>
					<td class="op_btn">
						<a href="<?php echo Url::toRoute(['about/edit','id'=>$row['id']]);?>"><img src="<?php echo $baseUrl; ?>images/write.png"></a>
						<a id="<?php echo $row['id']?>" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<?php
			ActiveForm::end();
		?>
		<p class="records">记录数:<em><?php echo count($data);?></em></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['about/add']);?>"><input type="button" value="添加"></input></a>
			<input id="del_submit" type="button" value="<?php echo yii::t('app','删除选择项')?>"></input>
		</div>

		<!-- 分页 -->
       <div class="center" id="page_div"> </div>
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
		$("form#about_index_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>