/* 1、用户中心
 * 2015-05-28
 * by czli
 */
$(function(){
	var isPage = function(page, callback){
		if($(page).length > 0)
			callback();
	};
	//我的订单页面
	isPage(".order-detial",function(){
		$("body").on("click",".my-order-btn", function(event){//点击我的订单
			$('.order-detial').hide();
			$('.main-list').show();
		});
		var state = location.search.split("=")[1]//设置页面提示
		$(".nav-user-r li").removeClass("cur");
		$(".nav-user-r li").eq( state > 0 ? state : 0).addClass("cur");
	});
	//我的积分页面
	isPage(".user-r-b1",function(){
		var state = $("#hid_state");//设置页面提示
		$(".nav-user-r li").removeClass("cur");
		$(".nav-user-r li").eq( state.val()-1 ? state.val()-1 : 0).addClass("cur");
		$(".close-btn").on("click", null, function(event){//关闭图片横幅
			$(".user-r-b1").hide(1000);
		});
		$(".user-r-b1").on("click", null, function(event){//点击进入赚取积分页面
			$(".rank-share").show();
		});
		$(".my-rank").on("click", null, function(event){//点击进入面包屑离开
			$(".rank-share").hide();
			location.hash = "";
		});
		var shareBox = $(".rank-share .share-box .share-links .links-box");
		$(".rank-share .share-box .share-links-btn").on("mouseenter", null, function(event){//鼠标移至分享按钮
			shareBox.show();
		});
		shareBox.on("mouseleave", null, function(event){//鼠标离开分享选项区域
			shareBox.hide();
		});
		window._bd_share_config = {
			common : {
				bdText : '在Senseluxury注册成功就能获得200元住宿券，行动起来，一起去别墅度假吧！',	
				bdDesc : '一起去别墅度假吧！',	
				bdUrl : $('#invited_url').val(),
				bdPic : 'http://statics.hivilla.com/statics/web2/images/qrcode.png'
			},
	        share : [{
	            "bdSize" : 16
	        }]
		};
		(function(){with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];}());
		if(location.hash == "#get")
			$(".user-r-b1").trigger("click");
	});
	//我的资料页面
	isPage(".myinfo", function(){
		var data = {
			user_info : {},
			user : {}
		};
		// $("head").append('<script src="resource/js/ProvinceCity.js"></script>');
		// $("head").append('<script src="resource/js/provincesdata.js"></script>');
		$("#postAdr-input").ProvinceCity();
		$("#SetOff-input").ProvinceCity();
		$("#SetOff-input select").eq(2).remove();
		$("#SetOff-input b").eq(2).remove();
		var resetInput = function(){//重置表单信息
			//设置名字
			$("#name td span").text($("#name").data("name"));
			$("#name td #name-input").val($("#name").data("name"));
			//设置用户名
			$("#username td span").text($("#username").data("username"));
			$("#username td #username-input").val($("#username").data("username"));
			//设置性别
			$("#sex td span").text($("#sex").data("sex"));
			($("#sex").data("sex") == "男") ? $(".sex-input input").eq(0)[0].checked = true : $(".sex-input input").eq(1)[0].checked = true;
			//设置邮箱
			$("#mail td span").eq(0).text($("#mail").data("mail"));
			$("#mail td #mail-input").val($("#mail").data("mail"));
			//设置手机
			$("#phone td span").eq(0).text($("#phone").data("phone"));
			$("#phone td #phone-input").val($("#phone").data("phone"));
			//设置身份证
			$("#card td span").text($("#card").data("card"));
			$("#card td #cardNum").val($("#card").data("card"));
			//设置出发城市
			$("#SetOff").data("province") && $("#SetOff").data("city") && $("#SetOff td span").text($("#SetOff").data("province") + "省" + $("#SetOff").data("city") + "市");
			$("#SetOff").data("province") && $("#SetOff-input select").eq(0).val($("#SetOff").data("province")).change();
			$("#SetOff").data("city") && $("#SetOff-input select").eq(1).val($("#SetOff").data("city")).change();
			//设置邮寄地址
			$("#postAdr").data("province") && $("#postAdr").data("city") && $("#postAdr").data("area") && $("#postAdr td span").text($("#postAdr").data("province") + "省" + $("#postAdr").data("city") + "市" + $("#postAdr").data("area") + "区" + $("#postAdr").data("adr"));
			$("#postAdr").data("province") && $("#postAdr").data("province") && $("#postAdr-input select").eq(0).val($("#postAdr").data("province")).change();
			$("#postAdr").data("city") && $("#postAdr-input select").eq(1).val($("#postAdr").data("city")).change();
			$("#postAdr").data("area") && $("#postAdr-input select").eq(2).val($("#postAdr").data("area")).change();
			$("#postAdr").data("adr") && $("#input-adr").val($("#postAdr").data("adr"));
		};
		resetInput();
		if($("#card-input").val() == 1)
			$("#cardText").text(MESSAGE.id_card+":");
		else if($("#card-input").val() == 2)
			$("#cardText").text(MESSAGE.passport+":");
		else if($("#card-input").val() == 3)
			$("#cardText").text(MESSAGE.driver_license+":");
		$('.modf').click(function(){//点击修改
			$(this).parent().parent().parent().parent().find('span').css('display','none');
			$(this).parent().parent().parent().parent().find('.my-modf').css('display','block');
			$(this).parent().parent().find('.my-modf-no').css('display','none');
			$("#cardText").text(MESSAGE.certificates+":");
			location.hash = "#change";
		});
		$('.modf-no').click(function(){//点击取消
			$(this).parent().parent().parent().parent().find('span').css('display','block');
			$(this).parent().parent().parent().parent().find('.my-modf').css('display','none');
			$(this).parent().parent().find('.my-modf-no').css('display','block');
			if($("#card-input").val() == 1)
				$("#cardText").text(MESSAGE.id_card+":");
			else if($("#card-input").val() == 2)
				$("#cardText").text(MESSAGE.passport+":");
			else if($("#card-input").val() == 3)
				$("#cardText").text(MESSAGE.driver_license+":");
			resetInput();
			location.hash = "";
		});
		var oPhone = $("#phone-input").val();
		var verifyPhone = function(){//修改手机输入框后
			var $this = $(this);
			var reg = !!$this.val().match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
			if($this.attr("readonly"))
				return;
			if( reg )//是否为手机号
			{
				if( !(oPhone == $("#phone-input").val()) )//修改了手机号
				{
					// $.ajax({//验证是否重复
					// 	method: "POST",
					// 	url: "/activity/double/phone_is_repeat",
					// 	dataType: "json",
					// 	data: {
					// 		phone : $("#phone-input").val()
					// 	}
					// }).done(function( msg ) {
					// 	if(msg.code == 0)//0为重复
					// 	{
					// 		if($(".phone-repeat").length == 0)//如果提示不存在新增
					// 			$("#phone-input").parent().append("<span class='phone-repeat'>该号码已使用，请更换其他号码</span>")
					// 		console.log(msg);
					// 	}
					// 	else
					// 	{
					// 		$(".phone-repeat").remove();//手机不重复，移除提示
					// 		$(".change-phone").show();//展示验证码框
					// 	}
					// 	console.log(msg);
					// });
				}
				else
				{
					$(".phone-repeat").remove();//手机不重复，移除提示
				}
				$this.removeClass("wrong");
			}
			else
			{
				$(".change-phone").hide();
				$this.addClass("wrong");
				$(".phone-repeat").remove();//手机不重复，移除提示
			}
		};
		var verifyPhoneCode = function(){//修改手机验证码
			var $this = $(this);
			var d = {
				mark : data.mark,
				code : $this.val(),
				phone : $("#phone-input").val()
			};
			if((oPhone == $("#phone-input").val()))
				return;
			if(d.code.length != 6)
			{
				$this.addClass("wrong");
				return;
			}
			$this.removeClass("wrong");
			// $.ajax({
			// 	method: "POST",
			// 	url: "/activity/double/phone_available",
			// 	dataType: "json",
			// 	data: d
			// }).done(function( msg ) {
			// 	if(msg.code == 0)
			// 		$this.addClass("wrong");
			// 	else
			// 	{
			// 		$this.removeClass("wrong");
			// 		$("#phone-input").attr("readonly","readonly");
			// 	}
			// 	console.log(msg);
			// });
		};
		var verifyMail = function(){//修改邮箱输入框后
			var $this = $(this);
			var reg = !!$this.val().match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/);
			if($this.attr("readonly"))
				return;
			if( reg )
			{
				$("#mail-v-btn").show();
				$this.removeClass("wrong");
			}
			else
			{
				$("#mail-v-btn").hide();
				$this.addClass("wrong");
			}
		};
		var verifyCard = function(){//修改身份证输入框后
			var $this = $(this);
			var reg = !!$this.val().match(/^((1[1-5])|(2[1-3])|(3[1-7])|(4[1-6])|(5[0-4])|(6[1-5])|71|(8[12])|91)\d{4}((19\d{2}(0[13-9]|1[012])(0[1-9]|[12]\d|30))|(19\d{2}(0[13578]|1[02])31)|(19\d{2}02(0[1-9]|1\d|2[0-8]))|(19([13579][26]|[2468][048]|0[48])0229))\d{3}(\d|X|x)?$/);
			if( ($("#card-input").val() != 1) || reg || !($("#cardNum").val()) )
			{
				$this.removeClass("wrong");
			}
			else
			{
				$this.addClass("wrong");
			}
		};
		var verifyAll = function(){
			verifyPhone.call($("#phone-input"));
			verifyPhoneCode.call($("#phone-v"));
			verifyMail.call($("#mail-input"));
			verifyCard.call($("#cardNum"));
		};
		var verifyEvent = function(selector, callback){
			$("body").on("keyup", selector, callback);
			$("body").on("focus", selector, callback);
			$("body").on("blur", selector, callback);
		};
		verifyEvent("#phone-input",verifyPhone);
		verifyEvent("#phone-v",verifyPhoneCode);
		verifyEvent("#mail-input",verifyMail);
		verifyEvent("#cardNum",verifyCard);

		$("#save").on("click", null, function(){//点击保存按钮
			verifyAll();
			data.user_info.name = $("#name-input").val();//姓名
			data.user_info.gender = $(".sex-input input").eq(0)[0].checked ? "1" : "2";//性别
			data.user_info.identity_no = $("#cardNum").val();

			data.user_info.province = $("#SetOff select").eq(0).val();
			data.user_info.city = $("#SetOff select").eq(1).val();

			data.user_info.post_province = $("#postAdr select").eq(0).val();
			data.user_info.post_city = $("#postAdr select").eq(1).val();
			data.user_info.post_area = $("#postAdr select").eq(2).val();
			data.user_info.user_address =  $("#input-adr").val();
			data.user_info.identity_type = $("#card-input").val();

			data.user.user_name = $("#username-input").val();//用户名
			data.user.user_email = $("#mail-input").val();//邮箱
			data.user.user_phone = $("#phone-input").val();//手机

			data.v = $("#phone-v").val();
			if($(".myinfo .wrong").length > 0)//含有填写错误项
				return;
			// $.ajax({
			// 	method: "POST",
			// 	url: "/ucenter/myinfo/index",
			// 	dataType: "json",
			// 	data: {
			// 		"data": data
			// 	}
			// }).done(function( msg ) {
			// 	window.location = "/ucenter/myinfo";
			// 	console.log(msg);
			// });
		});
		var phoneBtnLock = false;
		$("#phone-v-btn").on("click", null, function(){//点击发送手机验证码按钮
			if(phoneBtnLock)
				return;
			var phone = $("#phone-input").val();
			// $.ajax({
			// 	method: "POST",
			// 	url: "/activity/double/phone_verify_by_ucenter",
			// 	dataType: "json",
			// 	data: {
			// 		"phone": phone
			// 	}
			// }).done(function( msg ) {
   //              if(msg.code==0){
   //                  alert(msg.msg);
   //                  return false;
   //              }
			// 	var i = 50;
			// 	(function(){
			// 		$("#phone-v-btn").val(i+"秒后重新获取");
			// 		$("#phone-v-btn").css("background-color","#ccc");
			// 		if(--i > 0)
			// 			setTimeout(arguments.callee,1000);
			// 		else
			// 		{
			// 			$("#phone-v-btn").val("发送验证码");
			// 			$("#phone-v-btn").css("background-color","#ff9b14");
			// 			phoneBtnLock = false;
			// 		}
			// 	}());
			// 	data.mark = msg.data.mark;
			// 	data.code = msg.code;
			// 	console.log( data );
			// });
			phoneBtnLock = true;
		});
		$("#mail-v-btn").on("click", null, function(){//点击发送验证邮件
			console.log($("#mail-input").val());
		});
		var infoRoute = function(){
			if( location.hash == "#change" )//更改个人信息
			{
				$(".my-modf-no a").trigger("click");
				$(".myinfo .info").show();
				$(".myinfo .password").hide();
			}
			else if(location.hash == "#changePassword")//更改密码
			{
				var verifyPaw = function(){//效验密码合法性
					var newP = $("#new-paw").val();
					var newPA = $("#new-paw-a").val();
					var oldP = $("#old-paw").val();
					if( newP !== newPA || newPA == "" || newP == "" )
					{

						$("#new-paw").addClass("wrong");
						$("#new-paw-a").addClass("wrong");
						$("#new-paw").parent().find("span").text(MESSAGE.two_paw);
						$("#new-paw-a").parent().find("span").text(MESSAGE.two_paw);
					}
					else
					{
						$("#new-paw").removeClass("wrong");
						$("#new-paw-a").removeClass("wrong");
						$("#new-paw").parent().find("span").text("");
						$("#new-paw-a").parent().find("span").text("");
					}
					if( oldP == "" )
					{
						$("#old-paw").addClass("wrong");
						$("#old-paw").parent().find("span").text(MESSAGE.old_paw);
					}
					else
					{
						$("#old-paw").removeClass("wrong");
						$("#old-paw").parent().find("span").text("");
					}
				};
				verifyEvent("#new-paw,#new-paw-a,#old-paw,#paw-btn",verifyPaw);
				$(".myinfo .info").hide();
				$(".myinfo .password").show();
				$(".myinfo").on("click", "#paw-btn", function(){//点击修改
					var oldpwd = $("#old-paw").val();
					var newpwd = $("#new-paw").val();
					var repwd = $("#new-paw-a").val();
					if($(".myinfo .wrong").length > 0)//含有填写错误项
						return;
					// $.ajax({
					// 	method: "POST",
					// 	url: "/ucenter/myinfo/updatepwd",
					// 	dataType: "json",
					// 	data: {
					// 		"oldpwd": oldpwd,
					// 		"newpwd": newpwd,
					// 		"repwd": repwd
					// 	}
					// }).done(function( d ) {
					// 	if(d.code==500){
					// 		//error
					// 		alert(d.msg);
					// 	}else{
					// 		//success
					// 		window.location.href='/ucenter/myinfo';
					// 	}
					// });
				});
			}
		};
		$(window).on("hashchange", null, infoRoute);
		$(".user-list a").on("click", null, infoRoute);
		$(window).trigger("hashchange");
	});	
	$(".user-nav .cur").prev().css("border-bottom","none");
});