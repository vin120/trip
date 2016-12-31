<?php
	$this->title = '公寓信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;<a href="#">公寓信息</a></div>
	
	<div class="searchResult">
		<input type="hidden" id="pag_input" value="<?php echo $pag;?>" />
		<?php
		$form = ActiveForm::begin([
			'id'=>'apartment_index_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
		?>
		<table id="apartment_table">
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
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
				<?php foreach ($data as $key => $value) {?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $value['apartment_id']?>" ></input></td>
					<td><?php echo ($key+1) ?></td>
					<td><?php echo $value['zone_name'] ?></td>
					<td><?php echo $value['apartment_name'] ?></td>
					<td><?php echo $value['total_price'] ?></td>
					<td><?php echo $value['avg_price'] ?></td>
					<td><?php echo $value['star'] ?></td>
					<td><?php echo $value['status']==1?"启用":"禁用" ?></td>
					<td><?php echo $value['highlight']==1?"是":"否" ?></td>
					<td>
						<a href="<?php echo Url::toRoute(['apartment/apartmentedit','id'=>$value['apartment_id']]);?>"><img src="<?php echo $baseUrl; ?>images/write.png"></a>
						<a id="<?php echo $value['apartment_id']?>" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
						<a href="<?php echo Url::toRoute(['apartment/apartmentdetail','id'=>$value['apartment_id']]);?>"><img src="<?php echo $baseUrl; ?>images/text.png"></a>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<?php
			ActiveForm::end();
		?>
		<p class="records">记录数:<em><?php echo $count; ?></em></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['apartment/apartmentadd']);?>"><input type="button" value="添加"></input></a>
			<input id="del_submit" type="button" value="<?php echo yii::t('app','删除选择项')?>"></input>
		</div>

		<!-- 分页 -->
       <div class="center" id="page_div"> </div>

	</div>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){


    <?php $total = (int)ceil($count/10);
	   if($total >1){
	?>
		$('#page_div').jqPaginator({
		    totalPages: <?php echo $total;?>,
		    visiblePages: 10,
		    currentPage: 1,
		    wrapper:'<ul class="pagination"></ul>',
		    first: '<li class="first"><a href="javascript:void(0);">首页</a></li>',
		    prev: '<li class="prev"><a href="javascript:void(0);">«</a></li>',
		    next: '<li class="next"><a href="javascript:void(0);">»</a></li>',
		    last: '<li class="last"><a href="javascript:void(0);">尾页</a></li>',
		    page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
		    onPageChange: function (num, type) {
		    	var this_page = $("input#pag_input").val();
		    	if(this_page==num){$("input#pag_input").val('fail');return false;}

		    	$.ajax({
	                url:"<?php echo Url::toRoute(['getapartmentpage']);?>",
	                type:'get',
	                data:'pag='+num,
	             	dataType:'json',
	            	success:function(data){
	                	var str = '';
	            		if(data != 0){
	    	                $.each(data,function(key){

	    	                	str += '<tr>';
								str += '<td><input type="checkbox" name="ids[]" value="'+data[key]['apartment_id']+'" ></input></td>';
								str += '<td>'+(key+1)+'</td>';
								str += '<td>'+data[key]['zone_name']+'</td>';
								str += '<td>'+data[key]['apartment_name']+'</td>';
								str += '<td>'+data[key]['total_price']+'</td>';
								str += '<td>'+data[key]['avg_price']+'</td>';
								str += '<td>'+data[key]['star']+'</td>';
								var state = data[key]['status']==1?"启用":"禁用";
								str += '<td>'+state+'</td>';
								var highlight = data[key]['highlight']==1?"是":"否";
								str += '<td>'+highlight+'</td>';
								str += '<td>';
								str += '<a href="<?php echo Url::toRoute(['apartment/apartmentedit']);?>?id='+data[key]['apartment_id']+'"><img src="<?php echo $baseUrl; ?>images/write.png"></a>';
								str += '<a id="'+data[key]['apartment_id']+'" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>';
								str += '<a href="<?php echo Url::toRoute(['apartment/apartmentdetail']);?>?id='+data[key]['apartment_id']+'"><img src="<?php echo $baseUrl; ?>images/text.png"></a>';
								str += '</td>';
								str += '</tr>';


	                          });
	    	                $("table#apartment_table > tbody").html(str);
	    	            }
	            	}
	            });

	       	// $('#text').html('当前第' + num + '页');
	    	}
		});
	<?php }?>


	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but",function(){
		var val = $(this).attr('id');
		location.href="<?php echo Url::toRoute(['delete']);?>"+"?id="+val;
	});

	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but_more",function(){
		$("form#apartment_index_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>