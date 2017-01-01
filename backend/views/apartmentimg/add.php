<?php
	$this->title = '公寓图片管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use backend\views\myasset\ThemeAssetMoreUpload;
	
	PublicAsset::register($this);
	ThemeAssetMoreUpload::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
		<a href="<?php echo Url::toRoute(['apartmentimg/index']);?>">公寓图片管理</a>&nbsp;&gt;&gt;&nbsp;
		<a href="#">添加公寓图片</a>
	</div>
		<?php
			$form = ActiveForm::begin([
				'action' => ['add'],
				'method'=>'post',
				'id'=>'apartmentimg_form',
				'options' => ['class' => 'apartmentimg_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
		<div class="searchResult">
			<p>
				<span>地区名：</span>
				<input type="hidden" name="zone_id" value="" />
				<select name="zone_name">
					<option value="0">全部</option>
					<?php foreach ($zone_data as $value) {?>
					<option value="<?php echo $value['zone_id']?>"><?php echo $value['zone_name']?></option>
					<?php }?>

				</select>
				<select name="zone_name1" class="hidden">
					<option value="0">全部</option>
				</select>
				<select name="zone_name2" class="hidden">
					<option value="0">全部</option>
				</select>
			</p>
			<p>
				<span>公寓：</span>
				<select name='apartment_name'>
					<option value="0">请选择</option>
				</select>
			</p>
			<p>
				<span style="vertical-align:top;position: relative;top:15px;">图片：</span>
				<span style="width: 596px; position: relative;display: inline-block;">
                	<input id="upload_file_img" type="hidden" name="file_img" value="" />
                	<?php $url = Url::toRoute(['uploader/imgfileupload']);?>
                    <span id="demo" class="demo" lang="zh_cn" data="<?php echo $url;?>"></span>
                </span>
				
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>

			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['apartmentimg/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		</div>
	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	$("form#apartmentimg_form").submit(function(){
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
			$("form#apartmentimg_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
			$("form#apartmentimg_form select[name='zone_name2']").parents('p').append("<em class='error_tips'>请选择地区</em>");flag = 0;return false;
		}
		// alert(zone_id);
		$("input[type='hidden'][name='zone_id']").val(zone_id);

		//验证公寓
		var apartment_name = $("select[name='apartment_name']").val();
		if(apartment_name == 0){
			$("form#apartmentimg_form select[name='apartment_name']").parents('p').find("em.error_tips").remove();
			$("form#apartmentimg_form select[name='apartment_name']").parents('p').append("<em class='error_tips'>请选择公寓</em>");flag = 0;return false;
		}

		var img_url = $("input[name='file_img']").val();
      	img_url = $.trim(img_url);
      	if(img_url == ''){
          Alert('文件上传不能为空');
          return false;
      	}

      	var max_img_number = "<?php echo Yii::$app->params['max_img_number'] ?>";	//最多可上传图片数
		var curr_img_number = $("#preview").find('.upload_append_list').length;	//当前多图选择图片数
		var choose_apartment_img_num = $("select[name='apartment_name'] option:selected").attr('img_num');
		// alert(choose_apartment_img_num);alert(max_img_number);alert(curr_img_number);

		// if(choose_apartment_img_num == undefined ){
		// 	choose_apartment_img_num = '';
		// }

		var num = parseInt(max_img_number)-parseInt(choose_apartment_img_num);
		if( num < parseInt(curr_img_number) ) {
			Alert("当前公寓剩余图片"+num+"张可上传,最多可上传已超出上传图片数");return false; 	//图片数超出
		}


	});

	$(document).on('click',"#promptBox >span.op,#promptBox > .btn .cancel_but",function(){
		   $(".ui-widget-overlay").addClass('hide');
		   $("#promptBox").addClass('hide');
	   });

	$(document).on('change',"select[name='apartment_name']",function(){
		$("form#apartmentimg_form select[name='apartment_name']").parents('p').find("em.error_tips").remove();
	});


	//地区改变()第一层
	$(document).on('change',"select[name='zone_name']",function(){
		$("form#apartmentimg_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_1 = $(this).val();
		if(zone_1 == 0){
			$("select[name='zone_name1']").addClass("hidden");
			$("select[name='zone_name2']").addClass("hidden");

			var apartment_str = '<option value="0">请选择</option>';
			$("select[name='apartment_name']").html(apartment_str);


		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartmentimg/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_1,
			async:false,
			success:function(result){
				var data = result['data'];
				var apartment = result['apartment'];
				var str = '';
				var apartment_str = '<option value="0">请选择</option>';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});

				$.each(apartment,function(key){
					if(apartment[key]['apartment_id']!='' && apartment[key]['apartment_id']!=null){
					apartment_str += '<option img_num="'+apartment[key]['img_num']+'" value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
					}
				});


				if(str!=''){
					str = '<option value="0">请选择</option>'+str;
					$("select[name='zone_name1']").html('');
					$("select[name='zone_name1']").html(str);
					$("select[name='zone_name1']").removeClass('hidden');
				}else{
					$("select[name='zone_name1']").addClass("hidden");
					$("select[name='zone_name2']").addClass("hidden");
				}
				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});

		}

	});

	//地区第二层改变
	$(document).on("change","select[name='zone_name1']",function(){
		$("form#apartmentimg_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_2 = $(this).val();
		if(zone_2 == 0){
			$("select[name='zone_name2']").addClass("hidden");
			var zone_1 = $("select[name='zone_name']").val();
			$.ajax({
			url:"<?php echo Url::toRoute(['apartmentimg/zonegetapartmentdata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2,
			async:false,
			success:function(apartment){

				var apartment_str = '<option value="0">请选择</option>';

				$.each(apartment,function(key){
					if(apartment[key]['apartment_id']!='' && apartment[key]['apartment_id']!=null){
					apartment_str += '<option  img_num="'+apartment[key]['img_num']+'" value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
					}
				});

				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});

		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartmentimg/zonegetzonedata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2,
			async:false,
			success:function(result){
				var data = result['data'];
				var apartment = result['apartment'];
				var str = '';
				var apartment_str = '<option value="0">请选择</option>';
				$.each(data,function(k){
					str += '<option value="'+data[k]['zone_id']+'">'+data[k]['zone_name']+'</option>';
				});

				$.each(apartment,function(key){
					if(apartment[key]['apartment_id']!='' && apartment[key]['apartment_id']!=null){
					apartment_str += '<option  img_num="'+apartment[key]['img_num']+'" value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
					}
				});

				if(str!=''){
					str = '<option value="0">全部</option>'+str;
					$("select[name='zone_name2']").html('');
					$("select[name='zone_name2']").html(str);
					$("select[name='zone_name2']").removeClass('hidden');
				}else{
					$("select[name='zone_name2']").addClass("hidden");
				}

				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});
		}

	});

	//地区第三层改变
	$(document).on("change","select[name='zone_name2']",function(){
		$("form#apartmentimg_form select[name='zone_name2']").parents('p').find("em.error_tips").remove();
		// alert();return false;
		var zone_3 = $(this).val();
		if(zone_3 == 0){
			// $("select[name='zone_name2']").addClass("hidden");
			var zone_2 = $("select[name='zone_name1']").val();
			$.ajax({
			url:"<?php echo Url::toRoute(['apartmentimg/zonegetapartmentdata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_2,
			async:false,
			success:function(apartment){

				var apartment_str = '<option value="0">请选择</option>';

				$.each(apartment,function(key){
					if(apartment[key]['apartment_id']!='' && apartment[key]['apartment_id']!=null){
					apartment_str += '<option  img_num="'+apartment[key]['img_num']+'" value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
					}
				});

				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});


		}else{
			$.ajax({
			url:"<?php echo Url::toRoute(['apartmentimg/zonegetapartmentdata']);?>",
			type:'POST',
			dataType:'json',
			data:'zone='+zone_3,
			async:false,
			success:function(apartment){

				var apartment_str = '<option value="0">请选择</option>';

				$.each(apartment,function(key){
					if(apartment[key]['apartment_id']!='' && apartment[key]['apartment_id']!=null ){
					apartment_str += '<option  img_num="'+apartment[key]['img_num']+'" value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
					}
				});

				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});
		}

	});




	//点击图片时验证图片数量

	$(document).on('click',".filePicker",function(){
		// return false;
		var max_img_number = "<?php echo Yii::$app->params['max_img_number'] ?>";	//最多可上传图片数
		var curr_img_number = $("#preview").find('.upload_append_list').length;	//当前多图选择图片数
		var choose_apartment_img_num = $("select[name='apartment_name'] option:selected").attr('img_num');
		// alert(choose_apartment_img_num);alert(max_img_number);alert(curr_img_number);

		if(choose_apartment_img_num == undefined ){
			choose_apartment_img_num = '';
		}

		if(choose_apartment_img_num!=''){
			var num = parseInt(max_img_number)-parseInt(curr_img_number)-parseInt(choose_apartment_img_num);
			if(num <=20){return false;} 	//不可再点击
		}
		
		// $.ajax({
		// 	url:"< ?php echo Url::toRoute(['apartmentimg/verifyimgnumber']);?>",
		// 	type:'POST',
		// 	dataType:'json',
		// 	data:'zone='+zone_3,
		// 	async:false,
		// 	success:function(count){
		// 		if(count){
					
		// 		}
		// 	}
		// });
	});




}
</script>