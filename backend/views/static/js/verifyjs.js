$(document).ready(function() {

	//文本框点击获取焦点隐藏错误提示
	$(document).on("click","input[type='text']",function(){
		$(this).parents('p').find("em.error_tips").remove();
	});
	$(document).on("click","textarea",function(){
		$(this).parents('p').find("em.error_tips").remove();
	});

	//地区表单提交验证信息有效性
	$("form#zone_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var zone_id = $("form#zone_form input[type='hidden'][name='zone_id']").val();
		var zone_name = $("form#zone_form input[type='text'][name='zone_name']").val();
		// alert(zone_name);return false;
		var flag = 1;
		$("form#zone_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}

		$.ajax({
			url:verify_zone_name,
			type:'POST',
			dataType:'json',
			data:'zone_name='+zone_name+'&zone_id='+zone_id,
			async:false,
			success:function(data){
				if(data==0){ 
					flag =1;
				}
				else{
					$("form#zone_form input[type='text'][name='zone_name']").parents('p').append("<em class='error_tips'>地区已存在，请更换</em>");flag = 0;return false;
				}
			}
		});
		if(flag == 0){return false;}
		// return false;
	});


	//服务设施表单提交验证
	$("form#service_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var service_id = $("form#service_form input[type='hidden'][name='service_id']").val();
		var service_name = $("form#service_form input[type='text'][name='service_name']").val();
		var service_attr = $("form#service_form textarea[name='service_attr']").val();
		var flag = 1;
		$("form#service_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}

		//验证多行文本是否存在多个重复值
		if(service_attr == '' ){
			$("form#service_form textarea[name='service_attr']").parents('p').append(error_str);flag = 0;return false;
		}
		//将字符串中成的全部中文逗号转化英文逗号
		var reg = /，/gi;
		service_attr = service_attr.replace(reg,',');	//将中文逗号转化成英文逗号
		// alert(service_attr);
		var reg = / /gi;
		service_attr = service_attr.replace(reg,',');	//去除字符串中间空格
		// alert(service_attr);
		// alert(service_attr);return false;
		if (service_attr.substr(0,1)==','){		//去除字符串第一个逗号
			service_attr=service_attr.substr(1);	
		}
		
	    var reg = /,$/gi;
		service_attr = service_attr.replace(reg,'');	//去除最右边逗号

		var ary = service_attr.split(',');
		var s = service_attr+",";

		$("form#service_form textarea[name='service_attr']").parents('p').find("em.error_tips").remove();
		for(var i=0;i<ary.length;i++) {
		    if(s.replace(ary[i]+",","").indexOf(ary[i]+",")>-1) {
		    	$("form#service_form textarea[name='service_attr']").parents('p').append("<em class='error_tips'>存在重复属性,请更换</em>");flag = 0;return false;
		    }
		}
		if(flag == 0){return false;}

		//验证设施名唯一
		$.ajax({
			url:verify_service_name,
			type:'POST',
			dataType:'json',
			data:'service_name='+service_name+'&service_id='+service_id,
			async:false,
			success:function(data){
				if(data==0){ 
					flag =1;
				}
				else{
					$("form#service_form input[type='text'][name='service_name']").parents('p').append("<em class='error_tips'>设施名已存在，请更换</em>");flag = 0;return false;
				}
			}
		});
		if(flag == 0){return false;}


		// alert('yes');return false;

	});





});