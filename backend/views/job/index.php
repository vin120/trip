<?php
	$this->title =  yii::t('app','应聘信息');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav"><?php echo yii::t('app','招聘管理')?>&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','应聘信息')?></a></div>
	
	<div class="searchResult">
	<?php
		$form = ActiveForm::begin([
			'id'=>'job_form',
			'action'=>'delete',
			'method'=>'post',
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<table id="job_table">
		<input type="hidden" id="job_page" value="<?php echo $job_page;?>" />
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th><?php echo yii::t('app','序号')?></th>
					<th><?php echo yii::t('app','申请职位')?></th>
					<th><?php echo yii::t('app','应聘者姓名')?></th>
					<th><?php echo yii::t('app','年龄')?></th>
					<th><?php echo yii::t('app','性别')?></th>
					<th><?php echo yii::t('app','手机号码')?></th>
					<th><?php echo yii::t('app','邮箱')?></th>
					<th><?php echo yii::t('app','状态')?></th>
					<th><?php echo yii::t('app','操作')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $key => $value):?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $value['id']?>" class="checkall"></input></td>
					<td><?php echo $key + 1;?></td>
					<td><?php echo $value['recruitment_name']?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['age']?></td>
					<td><?php echo $value['gender']==0 ? yii::t('app','男') : yii::t('app','女') ?></td>
					<td><?php echo $value['phone_number']?></td>
					<td><?php echo $value['email']?></td>
					<td><?php echo $value['is_already_show']==0 ? yii::t('app','未查看') : yii::t('app','已查看') ?></td>
					<td>
						<a href="<?php echo Url::toRoute(['detail','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/write.png"></a>
						<a class="delete" style="cursor:pointer" id="<?php echo $value['id'];?>"><img src="<?=$baseUrl ?>images/delete.png"></a>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	<?php 
		ActiveForm::end();
	?>
		<p class="records">记录数:<em><?= $count?></em></p>
		<div class="btn">
			<input id="del_submit" type="button" value="<?php echo yii::t('app','批量删除')?>"></input>
		</div>
		<!-- 分页 -->
       <div class="center" id="job_page_div"> </div>
	</div>
</div>
<!-- content end -->



<script type="text/javascript">
window.onload = function(){


    <?php $job_total = (int)ceil($count/10);
	   if($job_total >1){
	?>
		$('#job_page_div').jqPaginator({
		    totalPages: <?php echo $job_total;?>,
		    visiblePages: 10,
		    currentPage: 1,
		    wrapper:'<ul class="pagination"></ul>',
		    first: '<li class="first"><a href="javascript:void(0);">First</a></li>',
		    prev: '<li class="prev"><a href="javascript:void(0);">«</a></li>',
		    next: '<li class="next"><a href="javascript:void(0);">»</a></li>',
		    last: '<li class="last"><a href="javascript:void(0);">Last</a></li>',
		    page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
		    onPageChange: function (num, type) {
		    	var this_page = $("input#job_page").val();
		    	if(this_page==num){$("input#job_page").val('fail');return false;}

		    	$.ajax({
	                url:"<?php echo Url::toRoute(['getjobpage']);?>",
	                type:'get',
	                data:'pag='+num,
	             	dataType:'json',
	            	success:function(data){
	                	var str = '';
	            		if(data != 0){
	    	                $.each(data,function(key){
	                        	str += "<tr>";
	                        	str += "<td><input name='ids[]' type='checkbox' value='"+data[key]['id']+"' class='checkall'></input></td>";
	                            str += "<td>"+(key+1)+"</td>";
                                str += "<td>"+data[key]['recruitment_name']+"</td>";
                                str += "<td>"+data[key]['name']+"</td>";
                                str += "<td>"+data[key]['age']+"</td>";
                                if(data[key]['gender']==1)
	                            	var gender = "<?php echo yii::t('app','女')?>";
	                            else if(data[key]['gender']==0)
	                            	var gender = "<?php echo yii::t('app','男')?>";
                                str += "<td>"+gender+"</td>";
                                str += "<td>"+data[key]['gender']+"</td>";
                                str += "<td>"+data[key]['phone_number']+"</td>";
                                str += "<td>"+data[key]['email']+"</td>";
                                if(data[key]['is_already_show']==1)
	                            	var status = "<?php echo yii::t('app','已查看')?>";
	                            else if(data[key]['is_already_show']==0)
	                            	var status = "<?php echo yii::t('app','未查看')?>";
                                str += "<td>"+is_already_show+"</td>";
                                str += "<td  class='op_btn'>";
	                            str += '<a href="<?php echo Url::toRoute(['edit']);?>?id='+data[key]['id']+'"><img src="<?=$baseUrl ?>images/write.png"></a>';
	                            str += "<a class='delete' style='cursor:pointer' id='"+data[key]['id']+"'><img src='<?=$baseUrl ?>images/delete.png'></a>";
		                        str += "</td>";
	                            str += "</tr>";
	                          });
	    	                $("table#job_table > tbody").html(str);
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
		$("form#job_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>