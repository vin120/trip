<?php
	$this->title = '评论管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;<a href="#">评论管理</a></div>
	
	<div class="searchResult">
		<input type="hidden" id="pag_input" value="<?php echo $pag;?>" />
		<?php
		$form = ActiveForm::begin([
			'id'=>'comment_index_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
		?>
		<table id="comment_table">
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th>序号</th>
					<th>公寓名</th>
					<th>用户名</th>
					<th>评论星级</th>
					<th>评论时间</th>
					<th>评论内容</th>					
					<th>是否显示</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $k=>$row){?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $row['id']?>"></input></td>
					<td><?php echo ($k+1) ?></td>
					<td><?php echo $row['apartment_name'] ?></td>
					<td><?php echo $row['user_name']?></td>
					<td><?php echo $row['star']?></td>
					<td><?php echo $row['time']?></td>
					<td><?php echo $row['content']?></td>					
					<td>
						<select class="change_is_show" onChange="changeisshow(this.value,<?php echo $row['id']?>)" >
							<option value="1" <?php echo $row['is_show']==1?"selected='selected'":"";?> >是</option>
							<option value="0" <?php echo $row['is_show']==0?"selected='selected'":"";?> >否</option>
						</select>
					</td>
					<td>
						<select class="change_is_select" onChange="changeisselect(this.value,<?php echo $row['id']?>)" >
							<option value="1" <?php echo $row['is_already_set']==1?"selected='selected'":""; ?> >已查看</option>
							<option value="0" <?php echo $row['is_already_set']==0?"selected='selected'":""; ?> >未查看</option>
						</select>
					</td>
					<td class="op_btn">
						<a href="<?php echo Url::toRoute(['comment/detail','id'=>$row['id']]);?>" ><img src="<?php echo $baseUrl; ?>images/text.png"></a>
						<a id="<?php echo $row['id']?>" class="delete" ><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
						
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
	                url:"<?php echo Url::toRoute(['getcommentpage']);?>",
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
								str += '<td>'+data[key]['apartment_name']+'</td>';
								str += '<td>'+data[key]['user_name']+'</td>';
								str += '<td>'+data[key]['star']+'</td>';
								str += '<td>'+data[key]['time']+'</td>';
								str += '<td>'+data[key]['content']+'</td>';								
								str += '<td>';
								var is_show = data[key]['is_show']==1?"selected='selected'":"";
								var is_no_show = data[key]['is_show']==0?"selected='selected'":"";
								str += '<select class="change_is_show"  onChange="changeisshow(this.value,'+data[key]['id']+')" >';
								str += '<option value="1" '+is_show+' >是</option>';
								str += '<option value="0" '+is_no_show+' >否</option>';
								str += '</select>';
								str += '</td>';
								str += '<td>';
								var is_set = data[key]['is_already_set']==1?"selected='selected'":"";
								var is_no_set = data[key]['is_already_set']==0?"selected='selected'":"";
								str += '<select class="change_is_select" onChange="changeisselect(this.value,'+data[key]['id']+')" >';
								str += '<option value="1" '+is_set+' >已查看</option>';
								str += '<option value="0" '+is_no_set+' >未查看</option>';
								str += '</select>';
								str += '</td>';
								str += '<td class="op_btn">';
								str += '<a href="<?php echo Url::toRoute(['comment/detail']);?>?id='+data[key]['id']+'" ><img src="<?php echo $baseUrl; ?>images/text.png"></a>';
								str += '<a id="'+data[key]['id']+'" class="delete" ><img src="<?php echo $baseUrl; ?>images/delete.png"></a>';
								
								str += '</td>';
								str += '</tr>';

	                          });
	    	                $("table#comment_table > tbody").html(str);
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
		$("form#comment_index_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});


	//是否显示取消选择
	$(document).on('click',"#promptBox >span.op_isshow,#promptBox > .btn .op_isshow",function(){
	 
	   var id = $(this).parents("#promptBox").find("input[type='hidden'][name='id']").val();
	   var state = $(this).parents("#promptBox").find("input[type='hidden'][name='state']").val();

	   var val = parseInt(state) == 1 ? 0 : 1;
	   $("table#comment_table input[type='checkbox'][value='"+id+"']").parents("tr").find("select[class='change_is_show'] option").each(function(){
	   		$(this).removeAttr('selected');
	   		var this_val = $(this).val();
	   		if(this_val == val){
	   			$(this).prop('selected','selected');
	   		}
	   });
	   

	});
	//是否查看取消选择
	$(document).on('click',"#promptBox >span.op_isselect,#promptBox > .btn .op_isselect",function(){
	  
	   var id = $(this).parents("#promptBox").find("input[type='hidden'][name='id']").val();
	   var state = $(this).parents("#promptBox").find("input[type='hidden'][name='state']").val();

	   var val = parseInt(state) == 1 ? 0 : 1;
	   $("table#comment_table input[type='checkbox'][value='"+id+"']").parents("tr").find("select[class='change_is_select'] option").each(function(){
	   		$(this).removeAttr('selected');
	   		var this_val = $(this).val();
	   		if(this_val == val){
	   			$(this).prop('selected','selected');
	   		}
	   });

	});

	//保存是否显示选择
	$(document).on('click',"#promptBox > .btn .confirm_cahngeisshow_but",function(){
		var id = $(this).parents("#promptBox").find("input[type='hidden'][name='id']").val();
		var state = $(this).parents("#promptBox").find("input[type='hidden'][name='state']").val();

		$.ajax({
			url:"<?php echo Url::toRoute(['changeisshow']);?>",
			type:'POST',
			dataType:'json',
			data:'id='+id+'&state='+state,
			async:false,
			success:function(data){
				if(data == 0){
					Alert("修改失败");
				}else{
					Alert("修改成功");
				}
			}
		});

		// $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	//    	$("#promptBox").hide();

	});

	//保存是否查看选择
	$(document).on('click',"#promptBox > .btn .confirm_cahngeisselect_but",function(){
		var id = $(this).parents("#promptBox").find("input[type='hidden'][name='id']").val();
	   	var state = $(this).parents("#promptBox").find("input[type='hidden'][name='state']").val();

	   	$.ajax({
			url:"<?php echo Url::toRoute(['changeisselect']);?>",
			type:'POST',
			dataType:'json',
			data:'id='+id+'&state='+state,
			async:false,
			success:function(data){
				if(data == 0){
					Alert("修改失败");
				}else{
					Alert("修改成功");
				}
			}
		});

		// $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	//    	$("#promptBox").hide();
		
	});

}

//是否显示改变状态
function changeisshow(state,id){
	// alert(state);
	// alert(id);

	$(".ui-widget-overlay").remove();
	$("#promptBox").remove();
	var str = "<div class='ui-widget-overlay ui-front'></div>";
	var str_con = '<div id="promptBox" class="pop-ups write ui-dialog" >';
	str_con += '<h3>消息</h3>';
	str_con += '<span class="op op_isshow"><a class="close r"></a></span>';
	str_con += '<input type="hidden" name="id" value="'+id+'" /><input type="hidden" name="state" value="'+state+'" />';
	str_con += '<p>确定改变此状态吗?</p>';
	str_con += '<p class="btn">';
	str_con += '<input type="button" class="confirm_cahngeisshow_but" value="确定"></input>';
	str_con += '<input type="button" class="cancel_but op_isshow" value="取消"></input>';
	str_con += '</p></div>';

	 $(document.body).append(str);
	 $(document.body).append(str_con);


}

//是否已查看改变状态
function changeisselect(state,id){
	// alert(state);
	// alert(id);

	$(".ui-widget-overlay").remove();
	$("#promptBox").remove();
	var str = "<div class='ui-widget-overlay ui-front'></div>";
	var str_con = '<div id="promptBox" class="pop-ups write ui-dialog" >';
	str_con += '<h3>消息</h3>';
	str_con += '<span class="op op_isselect"><a class="close r"></a></span>';
	str_con += '<input type="hidden" name="id" value="'+id+'" /><input type="hidden" name="state" value="'+state+'" />';
	str_con += '<p>确定改变此状态吗?</p>';
	str_con += '<p class="btn">';
	str_con += '<input type="button" class="confirm_cahngeisselect_but" value="确定"></input>';
	str_con += '<input type="button" class="cancel_but op_isselect" value="取消"></input>';
	str_con += '</p></div>';

	$(document.body).append(str);
	$(document.body).append(str_con);
}



</script>