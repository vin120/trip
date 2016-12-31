$(document).ready(function() {

	//文本框点击获取焦点隐藏错误提示
	$(document).on("click","input[type='text']",function(){
		$(this).parents('p').find("em.error_tips").remove();
	});
	$(document).on("click","input[type='password']",function(){
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


	//用户信息添加编辑验证账号和手机号和邮箱唯一性

	$("form#user_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var user_id = $("form#user_form input[type='hidden'][name='user_id']").val();
		var user_name = $("form#user_form input[type='text'][name='user_name']").val();
		var phone_number = $("form#user_form input[type='text'][name='phone_number']").val();
		var email = $("form#user_form input[type='text'][name='email']").val();
		var password = $("form#user_form input[type='password'][name='password']").val();
		var query_password = $("form#user_form input[type='password'][name='query_password']").val();
		var flag = 1;
		$("form#user_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}
		
		$("form#user_form input[type='password']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}

		//验证手机号


		//验证密码长度
		if(password.length <6){
			$("form#user_form input[type='password'][name='password']").parents('p').append("<em class='error_tips'>密码长度需超过6位</em>");flag = 0;return false;
		}

		//验证邮件

		if(password != query_password){
			$("form#user_form input[type='password'][name='query_password']").parents('p').append("<em class='error_tips'>密码不一致</em>");flag = 0;return false;
		}

		//验证账号,手机号,邮箱唯一性
		$.ajax({
			url:verify_user_info,
			type:'POST',
			dataType:'json',
			data:'user_name='+user_name+'&phone_number='+phone_number+'&email='+email+'&user_id='+user_id,
			async:false,
			success:function(data){
				var name = data['name'];
				var phone = data['phone'];
				var email = data['email'];

				if(name!=0){
					$("form#user_form input[type='text'][name='user_name']").parents('p').append("<em class='error_tips'>账户名已存在,请更换</em>");flag = 0;
				}
				if(phone!=0){
					$("form#user_form input[type='text'][name='phone_number']").parents('p').append("<em class='error_tips'>手机号已存在,请更换</em>");flag = 0;
				}
				if(email!=0){
					$("form#user_form input[type='text'][name='email']").parents('p').append("<em class='error_tips'>邮箱已存在,请更换</em>");flag = 0;
				}
			}
		});
		if(flag == 0){return false;}

		// alert(12345);return false;


	});


	$("form#admin_form").submit(function(){
		var error_str = "<em class='error_tips'>必填字段</em>";
		var admin_id = $("form#admin_form input[type='hidden'][name='admin_id']").val();
		var user_name = $("form#admin_form input[type='text'][name='user_name']").val();
		var real_name = $("form#admin_form input[type='text'][name='real_name']").val();
		var password = $("form#admin_form input[type='password'][name='password']").val();
		var query_password = $("form#admin_form input[type='password'][name='query_password']").val();
		var flag = 1;
		$("form#admin_form input[type='text']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}
		
		$("form#admin_form input[type='password']").each(function(){
			$(this).parents('p').find("em.error_tips").remove();
			var this_val = $(this).val();
			if(this_val == ''){
				$(this).parents('p').append(error_str);flag = 0;return false;
			}

		});
		if(flag == 0){return false;}

		//验证密码长度
		if(password.length <6){
			$("form#admin_form input[type='password'][name='password']").parents('p').append("<em class='error_tips'>密码长度需超过6位</em>");flag = 0;return false;
		}

		if(password != query_password){
			$("form#admin_form input[type='password'][name='query_password']").parents('p').append("<em class='error_tips'>密码不一致</em>");flag = 0;return false;
		}

		//验证账号唯一性
		$.ajax({
			url:verify_admin_info,
			type:'POST',
			dataType:'json',
			data:'user_name='+user_name+'&admin_id='+admin_id,
			async:false,
			success:function(data){

				if(data!=0){
					$("form#admin_form input[type='text'][name='user_name']").parents('p').append("<em class='error_tips'>账户名已存在,请更换</em>");flag = 0;
				}
			}
		});
		if(flag == 0){return false;}


	});



});


function clearNoNum(obj)    
{    
    //先把非数字的都替换掉，除了数字和.    
    obj.value = obj.value.replace(/[^\d.]/g,"");    
    //保证只有出现一个.而没有多个.    
    obj.value = obj.value.replace(/\.{2,}/g,".");    
    //必须保证第一个为数字而不是.    
    obj.value = obj.value.replace(/^\./g,"");    
    //保证.只出现一次，而不能出现两次以上    
    obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");    
    //只能输入两个小数  
    obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3');   
} 