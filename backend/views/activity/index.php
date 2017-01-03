<?php
	$this->title = '活动公寓';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">活动管理&nbsp;&gt;&gt;&nbsp;<a href="#">活动公寓</a></div>
	
	<div class="searchResult">
		<input type="hidden" id="pag_input" value="<?php echo $pag;?>" />
		<?php
		$form = ActiveForm::begin([
			'id'=>'activity_index_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
		?>
		<table id="activity_table">
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>活动名称</th>
					<th>活动公寓</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $key=>$row) {?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $row['id']?>"></input></td>
					<td><?php echo ($key+1)?></td>
					<td><?php echo $row['name'] ?></td>
					<?php 
						$apartment_str = '';
						foreach($row['child'] as $v){
							$apartment_str .= $v['apartment_code'].'|'.$v['apartment_name'].',';
						}

						$apartment_str = trim($apartment_str,',');
					?>
					<td><?php echo $apartment_str;?></td>
					<td>
						<a href="<?php echo Url::toRoute(['activity/edit','id'=>$row['id']]);?>"><img src="<?php echo $baseUrl; ?>images/write.png"></a>
						<a id="<?php echo $row['id']?>" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<?php
			ActiveForm::end();
		?>
		<p class="records">记录数:<em><?php echo $count;?></em></p>
		<div class="btn">
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
	                url:"<?php echo Url::toRoute(['getactivitypage']);?>",
	                type:'get',
	                data:'pag='+num,
	             	dataType:'json',
	            	success:function(data){
	                	var str = '';
	            		if(data != 0){
	    	                $.each(data,function(key){
	    	                	str += '<tr>';
								str += '<td><input type="checkbox" name="ids[]" value="'+data[key]['id']+'"></input></td>';
								str += '<td>'+(key+1)+'</td>';
								str += '<td>'+data[key]['name']+'</td>';
								var apartment_str = '';
								$.each(data[key]['child'],function(k){
									apartment_str += data[key]['child'][k]['name']+',';
								});
								if(apartment_str!=''){
									apartment_str = apartment_str.substring(0,apartment_str.length-1);
								}
								str += '<td>'+apartment_str+'</td>';
								str += '<td>';
								str += '<a href="<?php echo Url::toRoute(['activity/edit']);?>?id='+data[key]['id']+'"><img src="<?php echo $baseUrl; ?>images/write.png" ></a>';
								str += '<a class="delete" id="'+data[key]['id']+'" ><img src="<?php echo $baseUrl; ?>images/delete.png"></a>';
								str += '</td>';
								str += '</tr>';

	                          });
	    	                $("table#activity_table > tbody").html(str);
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
		$("form#activity_index_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>