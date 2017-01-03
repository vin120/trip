<?php
	$this->title = yii::t('app','推荐路线');
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav"><?php echo yii::t('app','合作伙伴管理')?>&nbsp;&gt;&gt;&nbsp;<a href="#"><?php echo yii::t('app','推荐路线')?></a></div>
	
	<div class="searchResult">
	<?php
		$form = ActiveForm::begin([
			'id'=>'route_form',
    		'action'=>'delete',
    		'method'=>'post',
    		'enableClientValidation'=>false,
    		'enableClientScript'=>false
    	]);
	?>
		<table id="route_table">
		<input type="hidden" id="route_page" value="<?php echo $route_page;?>" />
			<thead>
				<tr>
					<th><input type="checkbox"></input></th>
					<th><?php echo yii::t('app','序号')?></th>
					<th><?php echo yii::t('app','图片')?></th>
					<th><?php echo yii::t('app','合作伙伴名称')?></th>
					<th><?php echo yii::t('app','推荐路线名称')?></th>
					<th><?php echo yii::t('app','发布人')?></th>
					<th><?php echo yii::t('app','状态')?></th>
					<th><?php echo yii::t('app','操作')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($result as $key => $value):?>
				<tr>
					<td><input type="checkbox" name="ids[]" value="<?php echo $value['id']?>" class="checkall"></input></td>
					<td><?php echo $key+1 ?></td>
					<td><img src="<?php echo  Yii::$app->params['img_url'].'/'. $value['img_url']?>" align="absmiddle" width="90" height="50"/></td>
					<td><?php echo $value['partner_name']?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['author']?></td>
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
		<p class="records">记录数:<em><?= $count ?></em></p>
		<div class="btn">
            <a href="<?php echo Url::toRoute(['add']);?>"><input type="button" value="<?php echo yii::t('app','添加')?>"></input></a>
            <input id="del_submit" type="button" value="<?php echo yii::t('app','删除选择项')?>"></input>
		</div>
        <!-- 分页 -->
       <div class="center" id="route_page_div"> </div>
	</div>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){

    <?php $route_total = (int)ceil($count/10);
	   if($route_total >1){
	?>
		$('#route_page_div').jqPaginator({
		    totalPages: <?php echo $route_total;?>,
		    visiblePages: 10,
		    currentPage: 1,
		    wrapper:'<ul class="pagination"></ul>',
		    first: '<li class="first"><a href="javascript:void(0);">First</a></li>',
		    prev: '<li class="prev"><a href="javascript:void(0);">«</a></li>',
		    next: '<li class="next"><a href="javascript:void(0);">»</a></li>',
		    last: '<li class="last"><a href="javascript:void(0);">Last</a></li>',
		    page: '<li class="page"><a href="javascript:void(0);">{{page}}</a></li>',
		    onPageChange: function (num, type) {
		    	var this_page = $("input#route_page").val();
		    	if(this_page==num){$("input#route_page").val('fail');return false;}

		    	$.ajax({
	                url:"<?php echo Url::toRoute(['getroutepage']);?>",
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
                                str += "<td><img src="+"<?php echo Yii::$app->params['img_url']?>"+"/"+data[key]['img_url']+ " align='absmiddle' width='90' height='50'/></td>"
                                str += "<td>"+data[key]['partner_name']+"</td>";
                                str += "<td>"+data[key]['name']+"</td>";
                                str += "<td>"+data[key]['author']+"</td>";
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
	    	                $("table#route_table > tbody").html(str);
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
		$("form#route_form").submit();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});

}
</script>