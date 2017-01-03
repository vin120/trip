<?php
	$this->title = '活动公寓';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<style>
	.choose-box-div{
		width: 100%;
		/*border: 1px solid #ccc;*/
		height:300px;
		overflow: hidden;
		margin-left: 15%;
		padding-left: 4px;
		margin-bottom: 20px;
	}
	.choose-box-div .choose-left-div{
		float: left;
		width: 350px;
		overflow-y: auto;
		height:300px;
		border: 1px solid #e0e9f4;

	}
	.choose-box-div .choose-left-div > label{
		width: 100%;
		display: inline-block;
	}
	.choose-box-div .choose-conter-div{
		float: left;
		width: 100px;
		overflow-y: auto;
		height:300px;
		text-align: center;
		/*border: 1px solid #ccc;*/
		
	}
	.choose-box-div .choose-conter-div .choose-conter-div-but{
		color: #fff;
		background: #3f7fcf;
		display: inline-block;
		border-radius: 8px;
	    display: inline-block;
	    line-height: 30px;
	    margin-top: 120px;
	    text-align: center;
	    width: 80px;
	    cursor: pointer;
	}
	.choose-box-div .choose-right-div{
		float: left;
		width: 350px;
		overflow-y: auto;
		height:300px;
		border: 1px solid #e0e9f4;
		
	}
	.choose-box-div .choose-right-div > label{
		width: 100%;
		display: inline-block;
	}

	.choose-button{
		width: 20px;
		text-align: center;
		display: inline-block;
		line-height: 35px;
	}
	.right-apartment-del-but{
		color: red;
		cursor: pointer;
	}
	.apartment-code-css{
		display: inline-block;
		width: 115px;
		line-height: 35px;
	}
	.apartment-name-css{
		display: inline-block;
		line-height: 35px;
	}

</style>
<!-- content start -->
<div class="r content">
	<div class="topNav">活动管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['activity/index']);?>">活动公寓</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑活动公寓</a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'action' => ['edit'],
			'method'=>'post',
			'id'=>'activity_form',
			'options' => ['class' => 'activity_form'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
	<div class="searchResult">
		<input type='hidden' name="activity_id" value="<?php echo $basic['id'] ?>" />
		<p>
			<span>活动名称：</span>
			<?php echo $basic['name'] ?>
			
		</p>

		<p>
			<span>地区名：</span>
			<input type="hidden" name="zone_id" value="" />
			<select name="zone_name">
				<option value="0">请选择</option>
				<?php foreach ($zone_data as $value) {?>
				<option value="<?php echo $value['zone_id']?>"><?php echo $value['zone_name']?></option>
				<?php }?>

			</select>
			<select name="zone_name1" class="hidden">
				<option value="0">请选择</option>
			</select>
			<select name="zone_name2" class="hidden">
				<option value="0">请选择</option>
			</select>
		</p>

		
		<div class="choose-box-div">
			<div class="choose-left-div">
				<!--<label>
				<input type="checkbox" class="checkbox-input choose-button" value="" />
				<span class="left-apartment-code apartment-code-css">1247131239</span>
				<span class="left-apartment-name apartment-name-css">七天连锁酒店</span>
				</label>-->
			</div>
			<div class="choose-conter-div">
				<span class="choose-conter-div-but">&gt;&gt;</span>
			</div>
			<div class="choose-right-div">
				<?php foreach($data as $row){ ?>
				<label>
				<span class="right-apartment-del-but choose-button"><em>×</em></span>
				<input type="hidden" name="apartment[]" value="<?php echo $row['apartment_id'] ?>" />
				<span class="right-apartment-code apartment-code-css"><?php echo $row['apartment_code'] ?></span>
				<span class="right-apartment-name apartment-name-css"><?php echo $row['apartment_name'] ?></span>
				</label>
				<?php }?>
			</div>

		</div>


	

		<div class="btn">
			<input type="submit" value="保存"></input>
			<a href="<?php echo Url::toRoute(['activity/index']);?>"><input type="button" value="返回"></input></a>
		</div>

	</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->


<script type="text/javascript">
window.onload = function(){

	$(".choose-conter-div-but").on('click',function(){

		var already_ids = new Array();
		$(".choose-right-div label input[type='hidden']").each(function(){
			var this_val = $(this).val();
			already_ids.push(this_val);

		});
		
		var str = '';
		$(".choose-left-div label input[type='checkbox']:checked").each(function(){
			// alert($(this).val());
			var obj = $(this);
			var apartment_id = obj.val();
			var apartment_code = obj.parents('label').find(".left-apartment-code").html();
			var apartment_name = obj.parents('label').find(".left-apartment-name").html();
			// alert(apartment_id);
			if($.inArray(apartment_id,already_ids) == -1){
				str += '<label>';
				str += '<span class="right-apartment-del-but choose-button"><em>×</em></span>';
				str += '<input type="hidden" name="apartment[]" value="'+apartment_id+'" />';
				str += '<span class="right-apartment-code apartment-code-css">'+apartment_code+'</span>';
				str += '<span class="right-apartment-name apartment-name-css">'+apartment_name+'</span>';
				str += '</label>';
			}
		});

		// alert(str);return false;
		$("div.choose-box-div .choose-right-div ").append(str);



	});

	$(document).on("click",".choose-right-div .right-apartment-del-but > em",function(){
		 var val = $(this).parents("label").find("input[type='hidden'][name='apartment[]']").val();
		 $(".ui-widget-overlay").remove();
		 $("#promptBox").remove();
		 var str = "<div class='ui-widget-overlay ui-front'></div>";
		 var str_con = '<div id="promptBox" class="pop-ups write ui-dialog" >';
			str_con += '<h3>消息</h3>';
			str_con += '<span class="op"><a class="close r"></a></span>';
			str_con += '<p>你确定需要删除吗?</p>';
			str_con += '<p class="btn">';
			str_con += '<input type="button" class="confirm_but" value="确定"></input>';
			str_con += '<input type="button" class="cancel_but" value="取消"></input>';
			str_con += '</p></div>';

		 //$("#promptBox").before(str);
		 $(document.body).append(str);
		 $(document.body).append(str_con);
		 //$("#promptBox").removeClass('hide');

		 $(".btn > .confirm_but").attr('id',val);
	});

	//delete删除确定button
	$(document).on('click',"#promptBox > .btn .confirm_but",function(){
		var val = $(this).attr('id');
		$(".choose-right-div input[type='hidden'][name='apartment[]'][value='"+val+"']").parents('label').remove();

		$(".choose-left-div input[type='checkbox'][value='"+val+"']").removeAttr('checked');


		$(".ui-widget-overlay").addClass('hide');
		$("#promptBox").addClass('hide');
	});



	//地区改变()第一层
	$(document).on('change',"select[name='zone_name']",function(){
	
		var zone_1 = $(this).val();
		if(zone_1 == 0){
			$("select[name='zone_name1']").addClass("hidden");
			$("select[name='zone_name2']").addClass("hidden");
			$("div.choose-box-div .choose-left-div ").html('');
		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['activity/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_1,
			async:false,
			success:function(data_arr){
				var data = data_arr['data'];
				var apartment = data_arr['apartment'];

				var already_ids = new Array();
				$(".choose-right-div label input[type='hidden']").each(function(){
					var this_val = $(this).val();
					already_ids.push(this_val);
				});

				var str = '';
				var a_str = '';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});
				$.each(apartment,function(key){

					var checked = '';
					if($.inArray(apartment[key]['apartment_id'],already_ids) != -1){
						checked = " checked='checked' ";
					}

					a_str += '<label>';
					a_str += '<input type="checkbox" '+checked+' class="checkbox-input choose-button" value="'+apartment[key]['apartment_id']+'" />';
					a_str += '<span class="left-apartment-code apartment-code-css">'+apartment[key]['apartment_code']+'</span>';
					a_str += '<span class="left-apartment-name apartment-name-css">'+apartment[key]['apartment_name']+'</span>';
					a_str += '</label>';
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

				$("div.choose-box-div .choose-left-div ").html(a_str);
				
			}
			});

		}

	});

	//地区第二层改变
	$(document).on("change","select[name='zone_name1']",function(){
		
		var zone_2 = $(this).val();
		if(zone_2 == 0){
			$("select[name='zone_name2']").addClass("hidden");

			var zone_1 = $("select[name='zone_name']").val();

			$.ajax({
			url:"<?php echo Url::toRoute(['activity/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_1+'&act=3',
			async:false,
			success:function(data_arr){
				var already_ids = new Array();
				$(".choose-right-div label input[type='hidden']").each(function(){
					var this_val = $(this).val();
					already_ids.push(this_val);
				});

				var apartment = data_arr['apartment'];

				var a_str = '';

				$.each(apartment,function(key){
					var checked = '';
					if($.inArray(apartment[key]['apartment_id'],already_ids) != -1){
						checked = " checked='checked' ";
					}

					a_str += '<label>';
					a_str += '<input type="checkbox" '+checked+' class="checkbox-input choose-button" value="'+apartment[key]['apartment_id']+'" />';
					a_str += '<span class="left-apartment-code apartment-code-css">'+apartment[key]['apartment_code']+'</span>';
					a_str += '<span class="left-apartment-name apartment-name-css">'+apartment[key]['apartment_name']+'</span>';
					a_str += '</label>';
				});

				$("div.choose-box-div .choose-left-div ").html(a_str);

			}
			});



		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['activity/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2,
			async:false,
			success:function(data_arr){
				var data = data_arr['data'];
				var apartment = data_arr['apartment'];

				var already_ids = new Array();
				$(".choose-right-div label input[type='hidden']").each(function(){
					var this_val = $(this).val();
					already_ids.push(this_val);
				});


				var str = '';
				var a_str = '';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});

				$.each(apartment,function(key){

					var checked = '';
					if($.inArray(apartment[key]['apartment_id'],already_ids) != -1){
						checked = " checked='checked' ";
					}

					a_str += '<label>';
					a_str += '<input type="checkbox" '+checked+' class="checkbox-input choose-button" value="'+apartment[key]['apartment_id']+'" />';
					a_str += '<span class="left-apartment-code apartment-code-css">'+apartment[key]['apartment_code']+'</span>';
					a_str += '<span class="left-apartment-name apartment-name-css">'+apartment[key]['apartment_name']+'</span>';
					a_str += '</label>';
				});


				if(str!=''){
					str = '<option value="0">全部</option>'+str;
					$("select[name='zone_name2']").html('');
					$("select[name='zone_name2']").html(str);
					$("select[name='zone_name2']").removeClass('hidden');
				}else{
					$("select[name='zone_name2']").addClass("hidden");
				}
				$("div.choose-box-div .choose-left-div ").html(a_str);
			}
			});
		}

	});


	//地区第三层改变
	$(document).on("change","select[name='zone_name2']",function(){
		
		// alert();return false;
		var zone_3 = $(this).val();
		if(zone_3 == 0){
			$("select[name='zone_name2']").addClass("hidden");
			var zone_2 = $("select[name='zone_name1']").val();

			$.ajax({
			url:"<?php echo Url::toRoute(['activity/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2+'&act=3',
			async:false,
			success:function(data_arr){

				var already_ids = new Array();
				$(".choose-right-div label input[type='hidden']").each(function(){
					var this_val = $(this).val();
					already_ids.push(this_val);
				});

				var apartment = data_arr['apartment'];

				var a_str = '';

				$.each(apartment,function(key){
					var checked = '';
					if($.inArray(apartment[key]['apartment_id'],already_ids) != -1){
						checked = " checked='checked' ";
					}

					a_str += '<label>';
					a_str += '<input type="checkbox" '+checked+' class="checkbox-input choose-button" value="'+apartment[key]['apartment_id']+'" />';
					a_str += '<span class="left-apartment-code apartment-code-css">'+apartment[key]['apartment_code']+'</span>';
					a_str += '<span class="left-apartment-name apartment-name-css">'+apartment[key]['apartment_name']+'</span>';
					a_str += '</label>';
				});

				$("div.choose-box-div .choose-left-div ").html(a_str);

			}
			});


		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['activity/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_3+'&act=3',
			async:false,
			success:function(data_arr){
				var already_ids = new Array();
				$(".choose-right-div label input[type='hidden']").each(function(){
					var this_val = $(this).val();
					already_ids.push(this_val);
				});

				var apartment = data_arr['apartment'];
				var a_str = '';

				$.each(apartment,function(key){
					var checked = '';
					if($.inArray(apartment[key]['apartment_id'],already_ids) != -1){
						checked = " checked='checked' ";
					}
					a_str += '<label>';
					a_str += '<input type="checkbox" '+checked+' class="checkbox-input choose-button" value="'+apartment[key]['apartment_id']+'" />';
					a_str += '<span class="left-apartment-code apartment-code-css">'+apartment[key]['apartment_code']+'</span>';
					a_str += '<span class="left-apartment-name apartment-name-css">'+apartment[key]['apartment_name']+'</span>';
					a_str += '</label>';
				});

				$("div.choose-box-div .choose-left-div ").html(a_str);

			}
			});
		}

	});



}
</script>