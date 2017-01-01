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
<!-- content start -->
<div class="r content">
	<div class="topNav">公寓管理&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['apartment/index']);?>">公寓信息</a>&nbsp;&gt;&gt;&nbsp;
	<a href="#">添加公寓信息</a>
	</div>
	
	<div class="searchResult">
		<input type='hidden' name="apartment_id" value="" />

		<ul class="choose-ul">
			<li class="choose-ul-li curr-choose">基本信息</li>
			<li class="choose-ul-li">服务设施</li>
			<li class="choose-ul-li">价格条款</li>
		</ul>	

		<div class="choose-div-content">
		<?php
			$form = ActiveForm::begin([
				'id'=>'apartment_basic_form',
				'action'=>'apartmentadd',
				'method'=>'post',
	            'options' =>['class'=> 'apartment_basic_form','enctype'=>'multipart/form-data'],
				'enableClientValidation'=>false,
				'enableClientScript'=>false
			]);
		?>
			<p>
				<span>公寓编码：</span>
				<input type="text" name="apartment_code" maxlength="12" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>公寓名：</span>
				<input type="text" name="apartment_name" maxlength="12" />
				<em class="required_tips">*</em>
			</p>
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
				<span>价格：</span>
				<input type="text" name="total_price" maxlength="8" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>人均价格：</span>
				<input type="text" name="avg_price" maxlength="8" onkeyup="clearNoNum(this)" onblur="clearNoNum(this)" />
				<em class="required_tips">*</em>
			</p>
			<p>
				<span>星级：</span>
				<select name="star">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</p>
			<p>
				<span>状态：</span>
				<select name="state">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</p>
			<p>
				<span>是否高亮：</span>
				<select name="is_highlight">
					<option value="1">是</option>
					<option value="0">否</option>
				</select>
			</p>
			<p>
				<span style="vertical-align:top;">简介：</span>
				<textarea id="desc" name="desc"></textarea>
			</p>


			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['apartment/index']);?>"><input type="button" value="返回"></input></a>
			</div>

		<?php ActiveForm::end();?>
		</div>
		<div class="choose-div-content hidden">
		
		</div>
		<div class="choose-div-content hidden">
		</div>


	</div>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	
	UE.getEditor('desc');

	$("ul.choose-ul li.choose-ul-li").on('click',function(){
		var obj = $(this);
		var index = $("ul.choose-ul li.choose-ul-li").index(this);
		var is_checked = $(this).hasClass('curr-choose');
		if(is_checked){
			return false;
		}else{
			if(index == 1 || index == 2){
				return false;
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


	//表单保存
	$("form#apartment_basic_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var apartment_code = $("input[type='text'][name='apartment_code']").val();
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
			data:'apartment_code='+apartment_code,
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


		// alert(123);



		// return false;
	});



}
</script>