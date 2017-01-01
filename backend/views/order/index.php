<?php
	$this->title = '订单信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


<!-- content start -->
<div class="r content">
	<div class="topNav">订单管理&nbsp;&gt;&gt;&nbsp;<a href="#">订单信息</a></div>
	
	<div class="searchResult">
		<input type="hidden" id="pag_input" value="<?php echo $pag;?>" />
		
		<table id="order_table">
			<thead>
				<tr>
					<th>序号</th>
					<th>订单号</th>
					<th>下单时间</th>
					<th>保险</th>
					<th>发票</th>
					<th>订单状态</th>
					<th>支付状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) {?>
				<tr>
					<td><?php echo ($key+1) ?></td>
					<td><?php echo $value['order_number'] ?></td>
					<td><?php echo $value['order_time'] ?></td>
					<td><?php echo $value['insurance_id'] ?></td>
					<td><?php echo $value['invoices'] ?></td>
					<td><?php echo $value['order_status']==1?"正常":"取消" ?></td>
					<td><?php echo $value['pay_status']==1?"已支付":"未支付" ?></td>
					<td>
						<a href="<?php echo Url::toRoute(['order/detail','id'=>$value['order_id']]);?>"><img src="<?php echo $baseUrl; ?>images/text.png"></a>
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		
		<p class="records">记录数:<em><?php echo $count; ?></em></p>
		

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
	                url:"<?php echo Url::toRoute(['getorderpage']);?>",
	                type:'get',
	                data:'pag='+num,
	             	dataType:'json',
	            	success:function(data){
	                	var str = '';
	            		if(data != 0){
	    	                $.each(data,function(key){

	    	                	str += '<tr>';
								str += '<td>'+(key+1)+'</td>';
								str += '<td>'+data[key]['order_number']+'</td>';
								str += '<td>'+data[key]['order_time']+'</td>';
								str += '<td>'+data[key]['insurance_id']+'</td>';
								str += '<td>'+data[key]['invoices']+'</td>';
								var order_status = data[key]['order_status']==1?"正常":"取消";
								str += '<td>'+order_status+'</td>';
								var pay_status = data[key]['pay_status']==1?"已支付":"未支付";
								str += '<td>'+pay_status+'</td>';								
								str += '<td>';
								str += '<a href="<?php echo Url::toRoute(['order/detail']);?>?id='+data[key]['order_id']+'"><img src="<?php echo $baseUrl; ?>images/text.png"></a>';
								str += '</td>';
								str += '</tr>';


	                          });
	    	                $("table#order_table > tbody").html(str);
	    	            }
	            	}
	            });

	       	// $('#text').html('当前第' + num + '页');
	    	}
		});
	<?php }?>

}
</script>