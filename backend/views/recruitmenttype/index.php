<?php
	$this->title =  yii::t('app','招聘管理');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
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
	<div class="topNav"><?php echo yii::t('app','招聘管理')?>&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>"><?php echo yii::t('app','招聘分类')?></a></div>
	
	<div class="searchResult recruitmenttype">
		<?php
			$form = ActiveForm::begin([
				'id'=>'recruitmenttype_form',
				'action'=>'delete',
				'method'=>'post',
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<table id="recruitment_type_table">
		<input type="hidden" id="recruitment_type_page" value="<?php echo $recruitment_type_page;?>" />
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th><?php echo yii::t('app','序号')?></th>
					<th><?php echo yii::t('app','类别名')?></th>
					<th><?php echo yii::t('app','状态')?></th>
					<th><?php echo yii::t('app','操作')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($recruitment_type as $key => $value) :?>
				<tr>
					<td><input type="checkbox" name="ids[]" id="ids" value="<?php echo $value['id'];?>" class="checkall"></input></td>
					<td><?php echo $key + 1?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['status'] == 1 ?  yii::t('app','启用') :  yii::t('app','禁用')?></td>
					<td>
						<a href="<?php echo Url::toRoute(['edit','id'=>$value['id']]);?>"><img src="<?=$baseUrl ?>images/write.png"></a>
						<a class="delete" style="cursor:pointer" id="<?php echo $value['id'];?>"><img src="<?=$baseUrl ?>images/delete.png"></a>	
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		<?php
			ActiveForm::end();
		?>
		</table>
        <p class="records">记录数:<em><?= $count?></em></p>
		<div class="btn">
			<a href="<?php echo Url::toRoute(['add']);?>"><input type="button" value="<?php echo yii::t('app','添加')?>"></input></a>
            <input id="del_submit" type="button" value="<?php echo yii::t('app','删除选择项')?>"></input>
		</div>
        <!-- 分页 -->
       <div class="center" id="recruitment_type_page_div"> </div>
	</div>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){


    <?php $recruitment_type_total = (int)ceil($count/10);
	   if($recruitment_type_total >1){
	?>
		$('#recruitment_type_page_div').jqPaginator({
		    totalPages: <?php echo $recruitment_type_total;?>,
		    visiblePages: 10,
		    currentPage: 1,
		    wrapper:'<ul class="pagination"></ul>',
		    first: '<li class="first"><a href="javascript:void(0);">First</a></li>',
		    prev: '<li class="prev"><a href="javascript:void(0);">«</a></li>',
		    next: '<li class="next"><a href="javascript:void(0);">»</a></li>',
		    last: '<li class="last"><a href="javascript:void(0);">Last</a></li>',
		    page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
		    onPageChange: function (num, type) {
		    	var this_page = $("input#recruitment_type_page").val();
		    	if(this_page==num){$("input#recruitment_type_page").val('fail');return false;}

		    	$.ajax({
	                url:"<?php echo Url::toRoute(['getrecruitmenttypepage']);?>",
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
                                str += "<td>"+data[key]['name']+"</td>";
                                if(data[key]['status']==1)
	                            	var status = "<?php echo yii::t('app','启用')?>";
	                            else if(data[key]['status']==0)
	                            	var status = "<?php echo yii::t('app','禁用')?>";
                                str += "<td>"+status+"</td>";
                                str += "<td  class='op_btn'>";
	                            str += '<a href="<?php echo Url::toRoute(['edit']);?>?id='+data[key]['id']+'"><img src="<?=$baseUrl ?>images/write.png"></a>';
	                            str += "<a class='delete' style='cursor:pointer' id='"+data[key]['id']+"'><img src='<?=$baseUrl ?>images/delete.png'></a>";
		                        str += "</td>";
	                            str += "</tr>";
	                          });
	    	                $("table#recruitment_type_table > tbody").html(str);
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
		$("form#recruitmenttype_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>		
