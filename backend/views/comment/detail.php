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
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['index']);?>">评论管理</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">评论管理详情</a></div>

	<div class="searchResult">
		<p>
			<span>公寓名：</span>
			<?php echo $data['apartment_name']?>
		</p>
		<p>
			<span>用户名：</span>
			<?php echo $data['user_name']?>
		</p>
		<p>
			<span>评论星级：</span>
			<?php echo $data['star']?>
		</p>
		<p>
			<span>评论时间：</span>
			<?php echo $data['time']?>
		</p>
		<p>
			<span>评论内容：</span>
			<?php echo $data['content']?>
		</p>
		<p>
			<span>是否显示：</span>
			<select class="change_is_show" onChange="changeisshow(this.value,<?php echo $data['id']?>)" >
				<option value="1" <?php echo $data['is_show']==1?"selected='selected'":"";?> >是</option>
				<option value="0" <?php echo $data['is_show']==0?"selected='selected'":"";?> >否</option>
			</select>
		</p>
		<p>
			<span>状态：</span>
			<select class="change_is_select" onChange="changeisselect(this.value,<?php echo $data['id']?>)" >
				<option value="1" <?php echo $data['is_already_set']==1?"selected='selected'":""; ?> >已查看</option>
				<option value="0" <?php echo $data['is_already_set']==0?"selected='selected'":""; ?> >未查看</option>
			</select>

		</p>

		<div class="btn">
			<a href="<?php echo Url::toRoute(['comment/index']);?>"><input type="button" value="返回"></input></a>
		</div>

	</div>
</div>
<!-- content end -->



<script type="text/javascript">
window.onload = function(){

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
	   $("select[class='change_is_show'] option").each(function(){
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
	   $("select[class='change_is_select'] option").each(function(){
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
