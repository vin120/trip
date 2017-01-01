<?php
	$this->title = '公寓图片管理';
	use backend\views\myasset\PublicAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use backend\views\myasset\ThemeAssetUpload;
	
	PublicAsset::register($this);
	ThemeAssetUpload::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style type="text/css">
    /*upload*/
	.uploadFileBox { display: inline-block; width: 180px; line-height: 20px; border: 1px solid #dcdcdc; border-radius: 4px; box-sizing: border-box; overflow: hidden; }
	.fileName { display: inline-block; width: 50px; line-height: 10px; margin-left: 10px; vertical-align: middle; overflow: visible; }
	.uploadFile { float: right; position: relative; display: inline-block; background-color: #3f7fcf; padding: 6px 12px; overflow: hidden; color: #fff; text-decoration: none; text-indent: 0; line-height: 20px; }
	.uploadFile input { position: absolute; font-size: 100px; right: 0; top: 0; opacity: 0; }
    #pic img {display: block; width: 17%; min-height: 100px; margin-bottom: 20px; border: 1px solid #dcdcdc;position: relative;left: 160px;}

</style>

<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['apartmentimg/index']);?>">公寓图片管理</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">编辑公寓图片管理</a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'action' => ['apartmentimgeditsave'],
			'method'=>'post',
			'id'=>'apartmentimg_form',
			'options' => ['class' => 'apartmentimg_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
	<div class="searchResult">
		<input type="hidden" name="img_id" value="<?php echo $data['img_id'] ?>" />
		<p>
			<span>地区名：</span>
			<?php echo $zone_name; ?>
			<!--<input type="hidden" name="zone_id" value="< ?php echo $data['zone_id'] ?>" />
			< ?php $ex_zone_index = explode('-',$level_index) ?>
			<select name="zone_name">
				<option value="0">全部</option>
				< ?php foreach ($zone_data as $value) {?>
				<option value="< ?php echo $value['zone_id']?>" < ?php echo $value['zone_id']==$ex_zone_index[0]?"selected='selected'":"" ?>>< ?php echo $value['zone_name']?></option>
				< ?php }?>
			</select>
			<select name="zone_name1" class="< ?php echo empty($zone_data1)?"hidden":"";?>">
				<option value="0">全部</option>
				< ?php foreach($zone_data1 as $row){?>
				<option value="< ?php echo $row['zone_id'] ?>" < ?php echo $row['zone_id']==$ex_zone_index[1]?"selected='selected'":"" ?> >< ?php echo $row['zone_name'] ?></option>
				< ?php }?>
			</select>
			</select>
			<select name="zone_name2" class="< ?php echo empty($zone_data2)?"hidden":"";?>">
				<option value="0">全部</option>
				< ?php foreach($zone_data2 as $row){?>
				<option value="< ?php echo $row['zone_id'] ?>" < ?php echo $row['zone_id']==$ex_zone_index[2]?"selected='selected'":"" ?> >< ?php echo $row['zone_name'] ?></option>
				< ?php }?>
			</select>-->
		</p>

		<p>
			<span>公寓：</span>
			<?php echo $data['apartment_name'] ?>
			<!--<select name='apartment_name'>
				<option value="0">请选择</option>
				< ?php foreach($apartment_name as $v){?>
				<option value="< ?php  echo $v['apartment_id']?>" < ?php echo $data['apartment_id']==$v['apartment_id']?"selected='selected'":"" ?> >< ?php echo $v['apartment_code'].'|'.$v['apartment_name'] ?></option>
				< ?php }?>
			</select>-->
		</p>
		<p>
            <span><?php echo yii::t('app','图片预览：');?></span>
            <div id="pic" >
                <img id="ImgPr" src="<?= Yii::$app->params['img_url'].'/'.$data['img_url']?>">
            </div>
        </p>
        <p>
            <span><?php echo yii::t('app','图片：')?></span>
			<label class="uploadFileBox" >
                <span class="fileName"><?php echo yii::t('app','Select')?></span>
				<a href="#"  class="uploadFile"><?php echo yii::t('app','请选择')?><input type="file"  name="image" id="image"></input></a>
			</label>
        </p>
		<p>
			<span>状态：</span>
			<select name="state">
				<option value="1" <?php echo $data['status']==1?"selected='selected'":''; ?>>启用</option>
				<option value="0" <?php echo $data['status']==0?"selected='selected'":''; ?>>禁用</option>
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
	
	$("#image").uploadPreview({ Img: "ImgPr", Width: 120, Height: 120 });

    // 上传文件功能
	$(".uploadFile").on("change","input[type='file']",function(){
		var filePath = $(this).val();
		var arr=filePath.split('\\');
		var fileName=arr[arr.length-1];
		$(".fileName").html(fileName);
		$(".fileName").attr("title",fileName);
	});

/*
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

		


	});*/

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
					apartment_str += '<option value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
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
					apartment_str += '<option value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
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
					apartment_str += '<option value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
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
					apartment_str += '<option value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
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
					apartment_str += '<option value="'+apartment[key]['apartment_id']+'">'+apartment[key]['apartment_code']+'|'+apartment[key]['apartment_name']+'</option>';
				});

				$("select[name='apartment_name']").html(apartment_str);


				
			}
			});
		}

	});





}
</script>