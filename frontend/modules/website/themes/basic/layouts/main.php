<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use frontend\modules\website\themes\basic\myasset\ThemeAsset;
    $baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<!--[if IE 8]>
    	<html class="ie ie8 ltie9">
    <![endif]-->
    <!--[if gte IE 9]>
      <html class="ie ie9">
    <![endif]-->
	<head>
	    <meta charset="<?= Yii::$app->charset ?>">
        <link rel="icon" href="picture.ico" type="image/x-icon"/>
	    <?= Html::csrfMetaTags() ?>
	    <title><?= Html::encode($this->title) ?></title>
	    <?php $this->head() ?>
	</head>
	<body>
      <?php $this->beginBody() ?>
        <!--头部 开始-->
       <div class="header">
         <div class="wp Lcfx">
           <a href="<?php echo Url::toRoute(['index']);?>" title="" class="logo Lfll"></a>
           <div class="nav Lfll">
             <ul id="nav_section" class="items Lcfx">
               <li class="navlink1">
                 <a href="javascript:;" class="ma">目的地</a>
                 <div id="destination_nav" class="dropbox termini">
                   <div class="wp na-items Lcfx">
                     <p class="da-tit">
                       <i class="icon"></i>所有目的地
                     </p>
                   
             
                     <!-- start -->
                     <div class="add-tiems Lcfx">
                       <h3>亚洲</h3>
                       <div class="lcfx dl-c">
                         <dl class="dl-list">
                         
                         
                           <dt>
                             <a title="泰国 度假别墅" href="http://www.senseluxury.com/destinations/2">泰国</a>
                           </dt>
                           
                           <dd>
                             <a class="recommend" title="苏梅岛 度假别墅" href="http://www.senseluxury.com/destinations/25">苏梅岛</a></dd>
                           <dd>
                             <a class="recommend" title="普吉岛 度假别墅" href="http://www.senseluxury.com/destinations/26">普吉岛</a></dd>
                           <dd>
                             <a class="recommend" title="清迈 度假别墅" href="http://www.senseluxury.com/destinations/649">清迈</a></dd>
                           <dd>
                             <a title="华欣  度假别墅" href="http://www.senseluxury.com/destinations/695">华欣</a></dd>
                           <dd>
                             <a title="甲米 度假别墅" href="http://www.senseluxury.com/destinations/694">甲米</a></dd>
                           <dd>
                             <a title="曼谷 度假别墅" href="http://www.senseluxury.com/destinations/950">曼谷</a></dd>
                           <dd>
                             <a title="芭提雅 度假别墅" href="http://www.senseluxury.com/destinations/715">芭提雅</a></dd>
                           <dd>
                             <a title="小长岛 度假别墅" href="http://www.senseluxury.com/destinations/751">小长岛</a></dd>
                           <dd>
                             <a title="沽岛 度假别墅" href="http://www.senseluxury.com/destinations/979">沽岛</a></dd>
                           <dd>&nbsp;</dd>
                           
                           <dt>
                             <a title="中国 度假别墅" href="http://www.senseluxury.com/destinations/692">中国</a></dt>
                           <dd>
                             <a class="recommend" title="莫干山 度假别墅" href="http://www.senseluxury.com/destinations/811">莫干山</a></dd>
                           <dd>
                             <a class="recommend" title="大理 度假别墅" href="http://www.senseluxury.com/destinations/988">大理</a></dd>
                           <!-- <dd><a class="recommend" title="北京 度假别墅" href="/destinations/900">-->
                           <!--</a></dd>-->
                        </dl>
                           
                         <dl class="dl-list">
                           <dt>
                             <a title="印度尼西亚 度假别墅" href="http://www.senseluxury.com/destinations/18">印度尼西亚</a>
                             <i style="color:#f19149;">免签</i></dt>
                           <dd>
                             <a class="recommend" title="巴厘岛 度假别墅" href="http://www.senseluxury.com/destinations/85">巴厘岛</a></dd>
                           <dd>
                             <a title="龙目岛 度假别墅" href="http://www.senseluxury.com/destinations/84">龙目岛</a></dd>
                         </dl>
                         
                         
                         <dl class="dl-list">
                           <dt>
                             <a title="新加坡 度假别墅" href="http://www.senseluxury.com/destinations/965">新加坡</a></dt>
                           <dd>
                             <a title="圣淘沙岛 度假别墅" href="http://www.senseluxury.com/destinations/966">圣淘沙岛</a></dd>
                         </dl>
                         </div>
                         </div>
                         
                      <div class="add-tiems Lcfx">
                       <h3>印度洋</h3>
                       <div class="lcfx dl-c">
                         <dl class="dl-list">
                           <dd>
                             <a class="recommend" title="马尔代夫 度假别墅" href="http://www.senseluxury.com/destinations/647">马尔代夫</a></dd>
                           <dd>
                             <a class="recommend" title="毛里求斯 度假别墅" href="http://www.senseluxury.com/destinations/48">毛里求斯</a>
                             <i style="color:#f19149;">免签</i></dd>
                         </dl>
                         
                         <dl class="dl-list">
                           <dd>
                             <a class="recommend" title="斯里兰卡 度假别墅" href="http://www.senseluxury.com/destinations/663">斯里兰卡</a></dd>
                           <dd>
                             <a class="recommend" title="塞舌尔 度假别墅" href="http://www.senseluxury.com/destinations/800">塞舌尔
                               <i style="color:#f19149;">免签</i></a>
                           </dd>
                         </dl>
                       </div>
                     </div>
             
                     
                     <div class="add-tiems Lcfx">
                       <h3>大洋洲</h3>
                       <div class="lcfx dl-c">
                         <dl class="dl-list">
                           <dt>
                             <a target="_blank" title="新西兰 度假别墅" href="http://www.senseluxury.com/destinations/656">新西兰</a>
                             <i style="color:#f19149;">HOT!</i></dt>
                           <dd>
                             <a class="recommend" target="_blank" title="奥克兰 度假别墅" href="http://www.senseluxury.com/destinations/741">奥克兰</a></dd>
                           <dd>
                             <a class="recommend" target="_blank" title="皇后镇 度假别墅" href="http://www.senseluxury.com/destinations/657">皇后镇</a></dd>
                           <dd>
                             <a target="_blank" title="陶波 度假别墅" href="http://www.senseluxury.com/destinations/689">陶波</a></dd>
                           <dd>
                             <a target="_blank" title="瓦纳卡 度假别墅" href="http://www.senseluxury.com/destinations/744">瓦纳卡</a></dd>
                           <dd>
                             <a target="_blank" title="惠灵顿 度假别墅" href="http://www.senseluxury.com/destinations/752">惠灵顿</a></dd>
                           <dd>
                             <a target="_blank" title="更多新西兰度假别墅" href="http://www.senseluxury.com/destinations/656">更多&gt;</a></dd>
                        
                           <dt>
                             <a title="大溪地群岛  度假别墅" href="http://www.senseluxury.com/destinations/1013">大溪地群岛</a></dt>
                           <dd>
                             <a title="波拉波拉岛 度假别墅" href="http://www.senseluxury.com/destinations/1014">波拉波拉岛</a></dd>
                         </dl>
                         
                       </div>
                       </div>
                      
                     <!-- end -->
                     </div>
                   <!-- 异步加载内容 -->
               		</div>
               </li>
               <li class="navlink2">
                 <a href="<?php echo Url::toRoute(['site/featured']);?>" class="ma" title="今日精选">今日精选</a></li>
               <li class="navlink3 ">
                 <a href="<?php echo Url::toRoute(['site/message']);?>" class="ma" title="资讯中心">资讯中心</a></li>
               <li class="navlink4 ">
                 <a href="<?php echo Url::toRoute(['site/partner']);?>" class="ma" title="合作伙伴">合作伙伴</a></li>
               <li class="navlink4">
                 <a href="<?php echo Url::toRoute(['site/job']);?>" class="ma" title="招聘信息">招聘信息</a></li>
               <li class="navlink4">
                 <a href="<?php echo Url::toRoute(['site/about']);?>" class="ma" title="关于我们" >关于我们</a></li>
             </ul>
           </div>
           
           <!--注册登录订阅开始-->
           <div class="userlink Lflr">
             <div class="line-1">
             <?php if(isset(Yii::$app->user->identity->user_id)) {?>
               	<div class="userName">
               	<a title="<?php echo Yii::$app->user->identity->phone_number?>" href="<?php echo Url::toRoute(['user/index'])?>">我的账户</a>
               	<span>|</span>
               	<a  href="<?php echo Url::toRoute(['login/logout'])?>">退出</a>
               	</div>
             <?php } else {?>
             	<span class="userlink_lg">
                 <a rel="nofollow" href="javascript:void(0);" class="login-btn">登录</a>
                 <span>|</span>
                 <a rel="nofollow" href="javascript:void(0);" class="reg-btn">注册</a>
             
             <?php }?>
                 
             </div>
             <div class="line-2">
               <p class="mobile"><?php echo Yii::$app->view->params['400_number']?></p></div>
           </div>
           <!--注册登录订阅结束-->
           
         </div>
       </div>
       <!--头部 结束-->
       
        <?= $content ?>

        <!--底部开始-->
       <div class="Cfoot">
         <div class="inner line-bottom Lcfx">
           <a href="<?php echo Url::toRoute(['index'])?>">
             <i class="logo"></i>
           </a>
           <div class="info" id="com-info">
             <p><?php echo Yii::$app->view->params['introduct'];?></p>
           </div>
           <div id="" class="link s_icons">
             <div class="wei-icon-btn wechat_icon icon_sprite"></div>
             <div class="we_hover">
               <img style="width: 100%" src="<?= $baseUrl?>img/cfoot_qrcode.jpg"></div>
             <p>微信服务号</p>
           </div>
           <div style="margin-left: 40px;text-align: center;float: left;">
             <a target="_blank" href="#">
               <div class=" icon_sprite sina_icon"></div>
             </a>
             <p style="margin-top: 4px;">官方微博</p></div>
         </div>
         <div class="inner Lcfx">
           <div class="foot-icon">
             <div class="icon_sprite m-icon1"></div>
             <div class="icon_sprite m-icon2"></div>
           </div>
           <div class="link sever" style="width: 340px">
             <div class="tel"><?php echo Yii::$app->view->params['400_number'];?></div>
             <div>7x24 小时在线服务</div>
             <div style="margin-top: 15px">联系地址</div>
             <div class="location"><?php echo Yii::$app->view->params['address'];?></div></div>
           <div class="link" style="width: 350px;">
             <div class="foot-icon">
               <div class="icon_sprite m-icon3"></div>
             </div>
             <div class="mail">
               <div>服务支持</div>
               <a href="mailto://service@senseluxury.com"><?php echo Yii::$app->view->params['service_email'];?></a>
               <div style="margin-top: 15px">市场合作</div>
               <a href="mailto://marketing@senseluxury.com"><?php echo Yii::$app->view->params['market_email'];?></a></div>
           </div>
           <div class="link" style="width: 200px;">
             <div>
               <a target="_blank" rel="nofollow" href="/about#us">关于团队</a></div>
             <div>
               <a target="_blank" rel="nofollow" href="/about#advance">服务理念</a></div>
             <div>
               <a href="/sitemap.html">网站地图</a></div>
             <div>
               <a href="/jobs/society.html">加入我们</a></div>
           </div>
           <div class=" link" style="width: 150px;text-align: center;">
             <img alt="手机扫描下载APP，首单立享300折扣" src="<?= $baseUrl?>img/appstore.png" class="qrcode">
             <p class="qrcode-text">APP预订，即时简单快捷</p></div>
         </div>
         <div class="bottom">
           <div class="inner Lcfx">
             <div class="half Ltac">
               <span>
                 <a href="# " target="_blank">Copyright © 2013-2016</a>珠海时间风暴科技有限公司 粤ICP备16011210号
                 <a href="#" target="_blank">营业执照</a></span>
               <span>
                 <a class="sitemap" target="_blank" href="#">
                   <font color="#eeeeee">站点地图</font></a>
               </span>
             </div>
           </div>
         </div>
       </div>
       <!--底部结束-->
       
       
       <input type="hidden" id="domain" value="<?php echo Url::toRoute(['index'])?>" />
       <!-- 登录注册区域 -->
       <div id="signin_signup" class="Cdialog Cuser_dialog">
         <a href="javascript:void(0);" class="close">x</a>
         <div class="left_img Lfll ">
           <div class="login-left-box">
             <h2 class="login-left-title">升级VIP，更多尊享服务</h2>
             <div class="text1">加入 Sense Luxury 付费会员计划，您可以 享受到迎宾宴会、接送机、私人订制等专享 服务。</div>
             <div class="text2">
               <a href="<?php echo Url::toRoute(['index'])?>" style="">了解特权</a></div>
           </div>
         </div>
         
         
         <div class="signin_area Lfll">
           <div style="font-size: 18px;color: #444444;text-align: center;">登录</div>
           <form action="<?php echo Url::toRoute(['login/login'])?>" method="POST">
           
             <div class="item Lcfx Lmt30">
               <div class="inputbox Lfll">
                 <i class="icon icon1"></i>
                 <input name="LoginForm[username]" type="text" placeholder="手机号码" class="input1"></div>
               <span class="msg err Lcfl Ldn">*请输入手机号码</span></div>
             <div class="item Lcfx Lmt15">
               <div class="inputbox Lfll">
                 <i class="icon icon2"></i>
                 <input name="LoginForm[password]" id="inputbox" type="password" placeholder="密码" class="input1"></div>
               <span class="msg err Lcfl Ldn" id="msg">*您输入的密码和账户名不匹配</span></div>
             <div class="item Lmt15">
               <label class="label1">
                 <input name="LoginForm[rememberMe]" type="checkbox" class="check1" valuse="1">自动登录</label>
               <label class="label1 Lflr">
                 <a style="color: #ff8000" rel="nofollow" href="<?php echo Url::toRoute(['login/forget'])?>">忘记密码？</a></label>
             </div>
             <div class="btnarea Ltac Lmt25">
               <button type="submit" class="Cbtn_middle_yellow">登录</button></div>
             <div class="Lcfx register_tip Lmt35">
               <span>还没账号？现在</span>	
               <span class="signuptab curr">注册</span></div>
               
           </form>
           <div id="wx_login" class="Ldn">
             <div class="qr-wrap" id="login_container"></div>
             <button class="btn Lmt20" id="accountBtn">账号登录</button></div>
         </div>
         
         
         <div class="signup_area Lfll Ldn">
           <div class="registerByPhone">
             <div class="item Lcfx Lmt25">
               <div class="inputbox Lfll">
                 <i class="icon icon1"></i>
                 <input name="phone_number" type="text" placeholder="手机号码" class="input1 phonenumber"></div>
               <span class="msg err Lcfl Ldn">*手机号不正确</span></div>
             <div class="registerCode">
               <div class="inputbox Lfll  Lmt15" style="width: 140px">
                 <i class="icon icon2"></i>
                 <input class="code " name="registerByCode" type="text" placeholder="验证码"></div>
               <div class="inputbox Lfll  Lmt15" style="border: 0;padding-left:14px">
                 <input id="getCode" clock="0" type="button" value="获取验证码"></div>
               <span class="msg err Lcfl Ldn">*验证码不正确</span></div>
             <div class="registerPwd">
               <div class="item Lcfx">
                 <div class="inputbox Lfll Lmt15">
                   <i class="icon icon2"></i>
                   <input name="password" type="password" placeholder="密码" class="input1"></div>
                 <span class="msg err Lcfl Ldn">*两次密码不同</span></div>
               <div class="item Lcfx">
                 <div class="inputbox Lfll Lmt15">
                   <i class="icon icon2"></i>
                   <input name="repassword" type="password" placeholder="确认密码" class="input1"></div>
                 <span class="msg err Lcfl Ldn">*两次密码不同</span></div>
               <input type="hidden" value="2" name="imported" />
               <div class="btnarea Ltac  Lmt15">
                 <input type="button" id="registerByPhoneForm" class="Cbtn_middle_yellow" value="注册"></div>
             </div>
           </div>
           <div class="Lcfx register_tip Lmt40">
             <span>已有账号</span>
             <span class="signintab curr">登录</span></div>
         </div>
         
         
         

	    <?php $this->endBody() ?>
	</body>
</html>


<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>

var COMMON_MESSAGE = {};
var $centent = $('.signin_area'),
emailInput = $centent.find('.input1[name = "username"]'),
submitBtn = $centent.find('.Cbtn_middle_yellow');


$("#getCode").click(function() {

    if ($(this).attr("clock") != 0) {
      return;
    }
    var $that = $(this);
    var phone_number = $(this).parent().parent().parent().find(".phonenumber").val();
    var data = {
      'phone': phone_number
    };

    
    $(this).val("验证码获取中...");
    if (phone_number.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/)) {
    	$.ajax({
          type:'POST',
          url:'<?php echo Url::toRoute(['login/getcode'])?>',
          data:data,
          dataType:'json',
          success:function(data){
              if(!data.code){
                  alert(data.msg);
                  $that.attr('clock',0);
                  clearInterval(t);
                  $that.val("获取验证码");
                  return;
              }
              $that.attr('clock',1);
              mark = data.mark;
              var seconds = 0;
              var t = setInterval(function(){
                  seconds += 1;
                  $that.val(50-seconds + "秒后重新获取");
                  if(seconds == 50){
                      $that.attr('clock',0);
                      clearInterval(t);
                      $that.val("获取验证码");
                  }
              },1000);
          }
      })
    } else {
      alert("请输入合适的手机号！");
      $that.attr('clock', 0);
      $that.val("获取验证码");
    }
  });



var mark;
$("#registerByPhoneForm").click(function() {
	var data = {
		username: $(".registerByPhone .phonenumber").val(),
		password: $(".registerByPhone input[name='password']").val(),
		repassword: $(".registerByPhone input[name='repassword']").val(),
		code: $(".registerByPhone input[name='registerByCode']").val()
	};
	if (!data.username) {
		alert("请输入手机号！")
		return;
	}
	if (data.password != data.repassword || !data.password || !data.repassword) {
		alert("两次密码不一致！");
		return;
	}
	
	$.ajax({
		data: {
			password: data.password,
			phone: data.username,
			code: data.code,
			imported: $(".registerByPhone input[name='imported']").val(),
			mark: mark
		},
		type: 'post',
		url: "<?php echo Url::toRoute(['login/register'])?>",
		dataType: 'json',
		success: function(data) {
			if (data.code) {
				$('.Cuser_dialog').find('.close').trigger('click');
				alert("注册成功！");
				window.location.reload();
			} else {
				alert(data.msg);
			}
		}
	});
});



$('.Cuser_dialog .signin_area form').validate({
	rules: {
		username: {
			required: true
		},
		password: {
			required: true,
			minlength: 6,
			maxlength: 16
		}
	},
	errorPlacement: function(error, element) {
		var $element;
		$element = $(element);
		$element.parents('.item').find('.msg').show().css({
			"display": "block"
		});
		$element.parents('.item').find('.inputbox').css({
			"border": "1px solid red"
		});
	},
	submitHandler: function(form) {
		var $self;
		$self = $(form);
		$self.ajaxSubmit(function(data) {
			if (typeof data === 'string') {
				data = $.parseJSON(data);
			}
			if (data.success !== 1) {
				$('#msg').show().css({
					"display": "block"
				});
				$('#inputbox').css({
					"border": "1px solid red"
				})
			} else {
				$('.Cuser_dialog').find('.close').trigger('click');
				var html = '<div class="userName"><a title="' + data.username + '" href="user/index">我的账户</a><span>|</span><a  href="/login/logout">退出</a></div>'
				$(html).insertBefore('.userlink_lg');
				$('.userlink_lg').remove();
				$('.detail-app').find('.my-pl span').html('');
				$('#top_textarea').val('').css('color', '#333');
				window.location.reload();
			}
		});
	}
});



$('.userlink').find('.rssbox').on('click', 'button.btn1', function() {
	var text = $(this).siblings('.input1').val();
	$('.signup_area').find('input[name="username"]').val(text);
	$(this).val('').parents('.rssbox').hide();
	$('.userlink').find('.reg-btn').trigger('click');
	return false;
});




<?php $this->endBlock() ?>
</script>
<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>
<?php $this->endPage() ?>
