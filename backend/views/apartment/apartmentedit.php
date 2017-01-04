<?php
	$this->title = '公寓信息';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use backend\views\myasset\ThemeAssetUeditor;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style>
	/*Editor*/
    #desc{ display: inline-block; width: 50%; vertical-align: top; }
	ul.choose-ul{
		list-style: none;
		margin: 0px;
		padding: 0px;
		overflow: hidden;
		position: relative;
	    top: 1px;
	}
	ul li.choose-ul-li{
		width: 100px;
		list-style: none;
		display: inline-block;
		background: #3f7fcf;
		line-height: 35px;
		float: left;
		text-align: center;
		cursor: pointer;
		border: 1px solid #e0e9f4;
		border-bottom: 0px;
		color: #fff;
	}
	.curr-choose{
		color: #585858 !important;
		background: #fff !important;
	}
	.choose-div-content{
		border: 1px solid #e0e9f4;
		width: 100%;
		/*height:200px;*/
		padding-bottom: 20px;
	}

</style>
<style type="text/css">
	div.apartment-box-div{
		margin-left: 1%;
	}
	span.add_btn_tr{
		display: inline-block;
		width:80px;
		height: 35px;
		line-height: 35px;
		background: #3f7fcf;
		margin-top:20px;
		text-align: center;
		cursor: pointer;
	}
	table.table-box-apartment{
		width: 99%;
		/*margin: auto;*/
	}
	table.table-box-apartment th{
		border: 0px;

	}
	table.table-box-apartment input[type='text']{
		width:150px;
		line-height: 35px;
		height:35px;
		box-sizing: border-box;
	}
	table.table-box-apartment .div-attr-big-box{
		display: inline-block;
		width: 500px;
		height:120px;
		overflow-y: auto;
		border: 1px solid #e0e9f4;
		text-align: left;
	}
	table.table-box-apartment .div-attr-big-box .attr-span-box{
		display: inline-block;
		width:115px;
		padding: 2px;

	}
	table.table-box-apartment select{
		width: 100px;
	}
	table.table-box-apartment thead th{
		padding: 5px 0px;
	}
	table.table-box-apartment tbody td{
		padding: 10px;
	}
</style>
<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['apartment/index']);?>">公寓信息</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑公寓信息</a>
	</div>
	
	<div class="searchResult">
		
		<input type='hidden' name="apartment_id" value="<?php echo $basic['apartment_id'] ?>" />
		<ul class="choose-ul">
			<li class="choose-ul-li <?php echo $table==1?"curr-choose":'' ?>">基本信息</li>
			<li class="choose-ul-li <?php echo $table==2?"curr-choose":'' ?>">服务设施</li>
			<li class="choose-ul-li <?php echo $table==3?"curr-choose":'' ?>">价格条款</li>
		</ul>	

		<div class="choose-div-content  <?php echo $table!=1?"hidden":'' ?> ">
		<?php
			$form = ActiveForm::begin([
				'id'=>'apartment_basic_form',
				'action'=>'apartmentbasicedit',
				'method'=>'post',
	            'options' =>['class'=> 'apartment_basic_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
			<input type='hidden' name="apartment_id" value="<?php echo $basic['apartment_id'] ?>" />
			<p>
				<span>公寓编码：</span>
				<input type="text" name="apartment_code" maxlength="12" value="<?php echo $basic['apartment_code'] ?>" />
			</p>
			<p>
				<span>公寓名：</span>
				<input type="text" name="apartment_name" maxlength="12" value="<?php echo $basic['apartment_name'] ?>" />
			</p>
			<p>
				<span>地区名：</span>
				<input type="hidden" name="zone_id" value="<?php echo $basic['zone_id'] ?>" />
				<?php $ex_zone_index = explode('-',$level_index) ?>
				<select name="zone_name">
					<option value="0">全部</option>
					<?php foreach ($zone_data as $value) {?>
					<option value="<?php echo $value['zone_id']?>" <?php echo $value['zone_id']==$ex_zone_index[0]?"selected='selected'":"" ?>><?php echo $value['zone_name']?></option>
					<?php }?>
				</select>
				<select name="zone_name1" class="<?php echo empty($zone_data1)?"hidden":"";?>">
					<option value="0">全部</option>
					<?php foreach($zone_data1 as $row){?>
					<option value="<?php echo $row['zone_id'] ?>" <?php echo $row['zone_id']==$ex_zone_index[1]?"selected='selected'":"" ?> ><?php echo $row['zone_name'] ?></option>
					<?php }?>
				</select>
				</select>
				<select name="zone_name2" class="<?php echo empty($zone_data2)?"hidden":"";?>">
					<option value="0">全部</option>
					<?php foreach($zone_data2 as $row){?>
					<option value="<?php echo $row['zone_id'] ?>" <?php echo $row['zone_id']==$ex_zone_index[2]?"selected='selected'":"" ?> ><?php echo $row['zone_name'] ?></option>
					<?php }?>
				</select>
			</p>
			<p>
				<span>价格：</span>
				<input type="text" name="total_price" maxlength="12" value="<?php echo $basic['total_price'] ?>" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" />
			</p>
			<p>
				<span>人均价格：</span>
				<input type="text" name="avg_price" maxlength="12" value="<?php echo $basic['avg_price'] ?>" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" />
			</p>
			<p>
				<span>星级：</span>
				<select name="star">
					<option value="1" <?php echo $basic['star']==1?"selected='selected'":"" ?>>1</option>
					<option value="2" <?php echo $basic['star']==2?"selected='selected'":"" ?>>2</option>
					<option value="3" <?php echo $basic['star']==3?"selected='selected'":"" ?>>3</option>
					<option value="4" <?php echo $basic['star']==4?"selected='selected'":"" ?>>4</option>
					<option value="5" <?php echo $basic['star']==5?"selected='selected'":"" ?>>5</option>
				</select>
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1" <?php echo $basic['status']==1?"selected='selected'":"" ?>>启用</option>
					<option value="0" <?php echo $basic['status']==0?"selected='selected'":"" ?>>禁用</option>
				</select>
			</p>
			<p>
				<span>是否高亮：</span>
				<select name="is_highlight">
					<option value="1" <?php echo $basic['highlight']==1?"selected='selected'":"" ?> >是</option>
					<option value="0" <?php echo $basic['highlight']==0?"selected='selected'":"" ?> >否</option>
				</select>
			</p>
			<p>
				<span style="vertical-align:top;">简介：</span>
				<?php $desc_rep =  str_replace('src="','src="'.Yii::$app->params['img_url'],$basic['desc']); ?> 
				<textarea id="desc" name="desc"><?php echo $desc_rep; ?></textarea>
			</p>


			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		<?php ActiveForm::end();?>
		</div>
		<div class="choose-div-content <?php echo $table!=2?"hidden":'' ?>">
		<?php
			$form = ActiveForm::begin([
				'id'=>'apartment_service_form',
				'action'=>'apartmentservicesave',
				'method'=>'post',
	            'options' =>['class'=> 'apartment_service_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
			<input type='hidden' name="apartment_id" value="<?php echo $basic['apartment_id'] ?>" />
			

			<div class="apartment-box-div service-box-div">
			<span class="add_btn_tr add_service_tr">添加</span>
			<table class="table-box-apartment service_table">
				<thead>
				<tr>
					<th style="width:180px;">设施名</th>
					<th style="width:530px;">属性</th>
					<th style="width:50px;">状态</th>
					<th>操作</th>
				</tr>
				</thead>
				<tbody>
					<?php $service_number = ''; foreach($service_attr_data as $k=>$row){
						$attr_id = explode(',',$row['attr_id']);
						$service_number .=  ($k+1).',';
					 ?>
					<tr>
						<td>
							
							<input type="hidden" name="apartment_attr<?php echo ($k+1)?>" value="<?php echo $row['id'] ?>" />
							<select class="service_name_selelct" name="service_name<?php echo ($k+1)?>" style="width:130px;">
							<option value="0">请选择</option>
							<?php foreach($service_data as $val){?>
								<option value="<?php echo $val['service_id'] ?>" <?php echo $row['service_id']==$val['service_id']?"selected='selected'":"" ?> ><?php echo $val['name'] ?></option>
							<?php }?>
							</select>
						</td>
						<td>
							<div class="div-attr-big-box">
								<?php foreach($row['attr'] as $vv){ ?>
								<span class="attr-span-box">
								<input type="checkbox" <?php echo in_array($vv['attr_id'], $attr_id)?"checked='checked'":"" ?> value="<?php echo $vv['attr_id'] ?>" name="service_attr_<?php echo ($k+1)?>[]" /><?php echo $vv['name'] ?>
								</span>
								<?php }?>
							</div>
						</td>
						<td>
							<select name="s_state<?php echo ($k+1)?>">
							<option value="1" <?php echo $row['status']==1?"selected='selected'":"" ?> >启用</option>
							<option value="0" <?php echo $row['status']==0?"selected='selected'":"" ?> >禁用</option>
							</select>
						</td>
						<td>
							<a  id="s<?php echo ($k+1)?>_<?php echo $row['id'] ?>"  class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
			<input type="hidden" name="service_number" value="<?php echo $service_number ?>" />
			</div>
			
			<div class="btn">
					<input type="submit" value="保存"></input>
					<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
				</div>

			<?php ActiveForm::end();?>

			
		</div>
		<div class="choose-div-content  <?php echo $table!=3?"hidden":'' ?>">
			<?php
			$form = ActiveForm::begin([
				'id'=>'apartment_price_form',
				'action'=>'apartmentpricesave',
				'method'=>'post',
	            'options' =>['class'=> 'apartment_price_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
			?>
			<input type='hidden' name="apartment_id" value="<?php echo $basic['apartment_id'] ?>" />

			<div class="apartment-box-div">
				<span class="add_btn_tr add_price_tr">添加</span>
				<table class="table-box-apartment price_table">
					<thead>
					<tr>
						<th>类型名</th>
						<th>卧室数量</th>
						<th>价格</th>
						<th>最少住天数</th>
						<th>库存</th>
						<th>税</th>
						<th>押金</th>
						<th>服务费</th>
						<th>备注</th>
						<th>状态</th>
						<th>操作</th>
					</tr>
					</thead>
					<tbody>
						<?php foreach($apartment_price as $k=>$row){ ?>
						<tr>
							<td><input type="hidden" name="apartment_price[]" value="<?php echo $row['type_id'] ?>" /><input style="width: 120px;" type="text" value="<?php echo $row['type_name'] ?>" placeholder="类型名" name="type_name[]" maxlength="20" /></td>
							<td><input style="width: 60px;" value="<?php echo $row['room_count'] ?>" type="text" placeholder="卧室数量" name="room_num[]" maxlength="3" onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>
							<td><input style="width: 60px;" value="<?php echo $row['price'] ?>" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" type="text" placeholder="价格" name="p_price[]" maxlength="8"  /></td>
							<td><input style="width: 50px;" value="<?php echo $row['day'] ?>" type="text" placeholder="最少入住天数" name="live_day[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>
							<td><input style="width: 90px;" value="<?php echo $row['stock'] ?>" type="text" placeholder="库存" name="stock[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>
							<td><input style="width: 50px;" value="<?php echo $row['tax'] ?>" type="text" placeholder="税" name="tax[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>
							<td><input style="width: 55px;" value="<?php echo $row['deposit'] ?>" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" type="text" placeholder="押金" name="deposit[]" maxlength="8" /></td>
							<td><input style="width: 50px;" value="<?php echo $row['service_charge'] ?>" type="text" placeholder="服务费" name="service_charge[]" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" maxlength="8" /></td>
							<td><input style="width: 120px;" value="<?php echo $row['remark'] ?>" type="text" placeholder="备注" name="p_remark[]" maxlength="50" /></td>
							<td>
								<select style="width: 55px;" name="p_state[]">
									<option value="1" <?php echo $row['status']==1?"selected='selected'":'' ?> >启用</option>
									<option value="0" <?php echo $row['status']==0?"selected='selected'":'' ?> >禁用</option>
								</select>
							</td>
							<td>
								<a id="p<?php echo ($k+1)?>_<?php echo $row['type_id'] ?>" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
				</div>
				
				<div class="btn">
						<input type="submit" value="保存"></input>
						<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
					</div>

				<?php ActiveForm::end();?>
		</div>


	</div>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	var service_index_tr = "<?php echo count($service_attr_data) ?>";
	var price_index_tr = "<?php echo count($apartment_price) ?>";
	UE.getEditor('desc');

	$("ul.choose-ul li.choose-ul-li").on('click',function(){
		var obj = $(this);
		var apartment_id = $("input[type='hidden'][name='apartment_id']").val();
		var index = $("ul.choose-ul li.choose-ul-li").index(this);
		var is_checked = $(this).hasClass('curr-choose');
		if(is_checked){
			return false;
		}else{
			if(apartment_id=='' &&　(index == 1 || index == 2)){
				return false;
			}

			if(index == 1){	//获取服务设施
				getserviceinfo(apartment_id);
			}else if(index == 2){	//获取价格条款
				getpriceinfo(apartment_id);
			}

			$("ul.choose-ul li.choose-ul-li").each(function(e){
				$(this).removeClass('curr-choose');
			});
			$("div.choose-div-content").each(function(e){
				$(this).addClass('hidden');
			});
			obj.addClass('curr-choose');
			$("div.choose-div-content").eq(index).removeClass('hidden');


		}
	});

	//服务设施添加
	$("span.add_service_tr").on('click',function(){
		var str = '';
		str += '<tr>';
		str += '<td>';
		str += '<input type="hidden" name="apartment_attr'+(parseInt(service_index_tr)+1)+'" value="" />';
		str += '<select class="service_name_selelct" name="service_name'+(parseInt(service_index_tr)+1)+'" style="width:130px;">';
		str += '<option value="0">请选择</option>';
		<?php foreach($service_data as $row){?>
			str += '<option value="<?php echo $row['service_id'] ?>"><?php echo $row['name'] ?></option>';
		<?php }?>
		str += '</select>';
		str += '</td>';
		str += '<td>';
		str += '<div class="div-attr-big-box">';
		// str += '<span class="attr-span-box">';
		// str += '<input type="checkbox" name="service_attr_1[]" />风景';
		// str += '</span>';
		str += '</div>';
		str += '</td>';
		str += '<td>';
		str += '<select name="s_state'+(parseInt(service_index_tr)+1)+'">';
		str += '<option value="1">启用</option>';
		str += '<option value="0">禁用</option>';
		str += '</select>';
		str += '</td>';
		str += '<td>';
		str += '<a  id="s'+(parseInt(service_index_tr)+1)+'_"  class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>';
		str += '</td>';
		str += '</tr>';

		var service_number = $("input[type='hidden'][name='service_number']").val();
		service_number = service_number + (parseInt(service_index_tr)+1) +',';
		$("input[type='hidden'][name='service_number']").val(service_number);
		$("table.service_table tbody").append(str);

		service_index_tr = parseInt(service_index_tr) + 1;
	});

	//价格条款添加
	$("span.add_price_tr").on('click',function(){
		var str = '';
		str += '<tr>';
		str += '<td><input type="hidden" name="apartment_price[]" value="" /><input style="width: 120px;" type="text" placeholder="类型名" name="type_name[]" maxlength="20" value="" /></td>';
		str += '<td><input style="width: 60px;" type="text" placeholder="卧室数量" value="" name="room_num[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>';
		str += '<td><input style="width: 60px;" type="text" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" placeholder="价格" value="" name="p_price[]" maxlength="8" /></td>';
		str += '<td><input style="width: 90px;" type="text" placeholder="最少入住天数" value="" name="live_day[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>';
		str += '<td><input style="width: 50px;" type="text" placeholder="库存" value="" name="stock[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>';
		str += '<td><input style="width: 50px;" type="text" placeholder="税" value="" name="tax[]" maxlength="3"  onkeyup="clearNoInt(this)" onblur="clearNoInt(this)" /></td>';
		str += '<td><input style="width: 55px;" type="text" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" placeholder="押金" value="" name="deposit[]" maxlength="8" /></td>';
		str += '<td><input style="width: 50px;" type="text" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" placeholder="服务费" value="" name="service_charge[]" maxlength="8" /></td>';
		str += '<td><input style="width: 120px;" type="text" placeholder="备注" value="" name="p_remark[]" maxlength="50" /></td>';
		str += '<td>';
		str += '<select style="width: 55px;" name="p_state[]">';
		str += '<option value="1">启用</option>';
		str += '<option value="0">禁用</option>';
		str += '</select>';
		str += '</td>';
		str += '<td>';
		str += '<a id="p'+(parseInt(price_index_tr)+1)+'_" class="delete"><img src="<?php echo $baseUrl; ?>images/delete.png"></a>';
		str += '</td>';
		str += '</tr>';

		price_index_tr = parseInt(price_index_tr) + 1;

		$("table.price_table tbody").append(str);
	});

	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but",function(){
		var val = $(this).attr('id');
		var id = val.split('_')[1];
		var first_str = val.substr(0,1);
		// alert(first_str);
		if(first_str == 's'){
			var service_number = $("input[type='hidden'][name='service_number']").val();
			var index = val.split('_')[0].substr(1);

			if(id!=''){
				$.ajax({
				url:"<?php echo Url::toRoute(['apartment/deleteserviceattr']);?>",
				type:'POST',
				dataType:'json',
				data:'id='+id,
				async:false,
				success:function(data){	
					if(data == 0){
						Alert("删除失败");
					}else{
						service_number = service_number.replace(index+',','');
						$("input[type='hidden'][name='service_number']").val(service_number);
						$("table.service_table tbody td ").find("a[id='"+val+"']").parents('tr').remove();
					}
				}
				});
			}else{
				service_number = service_number.replace(index+',','');
				$("input[type='hidden'][name='service_number']").val(service_number);
				$("table.service_table tbody td ").find("a[id='"+val+"']").parents('tr').remove();
			}
			
		}else if(first_str == 'p'){
			if(id!=''){
				$.ajax({
				url:"<?php echo Url::toRoute(['apartment/deletepriceattr']);?>",
				type:'POST',
				dataType:'json',
				data:'id='+id,
				async:false,
				success:function(data){	
					if(data == 0){
						Alert("删除失败");
					}else{
						$("table.price_table tbody td ").find("a[id='"+val+"']").parents('tr').remove();
					}
				}
				});
			}else{
				$("table.price_table tbody td ").find("a[id='"+val+"']").parents('tr').remove();
			}

			
		}
		
		$(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	    $("#promptBox").hide();
	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
 	   // $("#seleteselect").val("");
 	   $(".ui-widget-overlay").removeClass("ui-widget-overlay");//移除遮罩效果
 	   $("#promptBox").hide();
	});


	//地区改变()第一层
	$(document).on('change',"select[name='zone_name']",function(){
		$("form#apartment_basic_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_1 = $(this).val();
		if(zone_1 == 0){
			$("select[name='zone_name1']").addClass("hidden");
			$("select[name='zone_name2']").addClass("hidden");
		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartment/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_1,
			async:false,
			success:function(data){
				var str = '';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});
				if(str!=''){
					str = '<option value="0">全部</option>'+str;
					$("select[name='zone_name1']").html('');
					$("select[name='zone_name1']").html(str);
					$("select[name='zone_name1']").removeClass('hidden');
				}else{
					$("select[name='zone_name1']").addClass("hidden");
					$("select[name='zone_name2']").addClass("hidden");
				}
				
			}
			});

		}

	});

	//地区第二层改变
	$(document).on("change","select[name='zone_name1']",function(){
		$("form#apartment_basic_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_2 = $(this).val();
		if(zone_2 == 0){
			$("select[name='zone_name2']").addClass("hidden");
		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartment/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2,
			async:false,
			success:function(data){
				var str = '';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});
				if(str!=''){
					str = '<option value="0">全部</option>'+str;
					$("select[name='zone_name2']").html('');
					$("select[name='zone_name2']").html(str);
					$("select[name='zone_name2']").removeClass('hidden');
				}else{
					$("select[name='zone_name2']").addClass("hidden");
				}
				
			}
			});
		}

	});

	//基本信息表单保存
	$("form#apartment_basic_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var apartment_code = $("input[type='text'][name='apartment_code']").val();
		var apartment_id = $("form#apartment_basic_form input[type='hidden'][name='apartment_id']").val();
		var flag = 1;
		//验证文本框不能为空
		$("form#apartment_basic_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}

		//验证公寓编码是否已经存在
		$.ajax({
			url:"<?php echo Url::toRoute(['apartment/verifyapartmentcode']);?>",
			type:'POST',
			dataType:'text',
			data:'apartment_code='+apartment_code+'&apartment_id='+apartment_id,
			async:false,
			success:function(data){

				if(data!=0){
					$("form#apartment_basic_form input[type='text'][name='apartment_code']").parents('p').append("<em class='error_tips'>公寓编码已存在,请更换</em>");flag = 0;return false;
				}
				
			}
		});
		if(flag == 0){return false;}

		//判断地区
		var zone_id = '';
		var zone_name_2 = $("select[name='zone_name2']").hasClass("hidden");
		if(zone_name_2){
			var zone_name_1 = $("select[name='zone_name1']").hasClass("hidden");
			if(zone_name_1){
				zone_id = $("select[name='zone_name']").val();
			}else{
				if($("select[name='zone_name1']").val() == 0){
					zone_id = $("select[name='zone_name']").val();
				}else{
					zone_id = $("select[name='zone_name1']").val();
				}

				
			}
		}else{

			if($("select[name='zone_name2']").val() == 0){
				zone_id = $("select[name='zone_name1']").val();
			}else{
				zone_id = $("select[name='zone_name2']").val();
			}
			
		}

		if(zone_id == 0){
			$("form#apartment_basic_form select[name='zone_name2']").parents('p').append("<em class='error_tips'>请选择地区</em>");flag = 0;return false;
		}
		// alert(zone_id);
		$("input[type='hidden'][name='zone_id']").val(zone_id);


	});

	//设施名改变获取对应设施下的属性
	$(document).on("change","form#apartment_service_form select[class='service_name_selelct']",function(){
		var obj = $(this).parents("tr").find("td .div-attr-big-box");
		var index = $(this).parents("tr").find("a.delete").attr('id');
		index = index.split('_')[0];
		index = index.substr(1);
		var service_id = $(this).val();
		if(service_id == 0){
			obj.html('');
		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartment/servicegetattrdata']);?>",
			type:'POST',
			dataType:'json',
			data:'service_id='+service_id,
			async:false,
			success:function(data){
				var str = '';
				$.each(data,function(k){
					str += '<span class="attr-span-box">';
					str += '<input type="checkbox" value="'+data[k]['attr_id']+'" name="service_attr_'+index+'[]" />'+data[k]['name'];
					str += '</span>';
				});
				obj.html(str);
				
			}
		});
		}

	});

	//服务设施保存
	$("form#apartment_service_form").submit(function(){
		// var error_str = "<em class='error_tips'>必填字段</em>";
		var apartment_id = $("form#apartment_service_form input[type='hidden'][name='apartment_id']").val();
		var len = $("form#apartment_service_form table tbody tr").length;
		if(len == 0){return false;}
		var flag = 1;
		var service_arr = new Array();
		//验证是否选择了设施名
		$("form#apartment_service_form table select[class='service_name_selelct']").each(function(){
			var this_val = $(this).val();
			// alert(this_val);
			if(this_val == 0){
				Alert("存在下拉框未选择设施名");flag=0;return false;
			}else{
				if($.inArray(this_val,service_arr)>=0){
					Alert("设施名选择需唯一");flag=0;return false;
				}
				service_arr.push(this_val);
			}
		});
		if(flag == 0){return false;}
		// alert(123);return false;
	});

	//价格条款保存
	$("form#apartment_price_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var len = $("form#apartment_price_form table tbody tr").length;
		if(len == 0){return false;}
		var flag = 1;
		//验证文本框不能为空
		$("form#apartment_price_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				Alert("存在文本框未填写");flag=0;return false;
			}

		});
		if(flag == 0){return false;}


	});


}

//获取服务设施
function getserviceinfo(apartment_id){
	// $.ajax({
	// 	url:"< ?php echo Url::toRoute(['apartment/getserviceinfo']);?>",
	// 	type:'POST',
	// 	dataType:'text',
	// 	data:'apartment_id='+apartment_id,
	// 	async:false,
	// 	success:function(data){
	// 		// $.each(data,function(key){

	// 		// });
		
			
	// 	}
	// });
}

//获取价格条款
function getpriceinfo(apartment_id){

}


</script>