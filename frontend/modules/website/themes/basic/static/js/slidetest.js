var slidetest = function(btnid,phone,url,client){
    if (!client){
        client = 'pc';
        $("#signin_signup").append('<div id="popup-captcha"></div>');
    }
    else{
        $('.login-content').append('<div id="mask"></div><div id="popup-captcha-mobile"></div>');
    }
    //获取验证码参数
    $.post("/gt?t=" + (new Date()).getTime(),{type:'pc'},function(d){
        if(d.code){
            initGeetest({
                gt: d.data.gt,
                challenge: d.data.challenge,
                product: "popup",
                offline: !d.data.status
            },function(captchaObj){
                // 将验证码加到id为captcha的元素里
                if (client == "m"){
                    captchaObj.appendTo("#popup-captcha-mobile");
                }
                else if(client == "pc"){
                    if ($('.popmask')[0]){
                        $('.popmask').css('display','block');
                    }
                    else{
                        $('#signin_signup').append('<div class = "popmask" style = "width:100vw;height:100vh;background-color:rgba(0,0,0,0.3);position:fixed;top:0;left:0;z-index:100;"></div>');
                    }                   
                    captchaObj.appendTo("#popup-captcha");
                }
                captchaObj.onReady(function(){
                    captchaObj.show();
                    $('.gt_popup_cross').on('click',function(){
                        $('.popmask').css('display','none');
                        $("#"+btnid).val('获取验证码');
                    });
                });               
                // 成功的回调
                captchaObj.onSuccess(function () {
                    $('.popmask').css('display','none');
                    $("#"+btnid).val('获取验证码');
                    var validate = captchaObj.getValidate();
                    $.post("/gtverify", {
                        type: client,
                        geetest_challenge: validate.geetest_challenge,
                        geetest_validate: validate.geetest_validate,
                        geetest_seccode: validate.geetest_seccode
                    },function(d){
                        if(d.code){
                            asynccode(btnid,phone,url);
                        }else{
                            //失败了
                        }
                    },'json');
                });
            });
        }
    },'json');
};
function asynccode(btnid,phone,url){
    $that = $('#'+btnid);
    var data = {
        'phone':phone
    };
    $.ajax({
        type:'POST',
        url:url,
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

                $that.val(50-seconds + "秒后重新获取验证码");
                if(seconds == 50){
                    $that.attr('clock',0);
                    clearInterval(t);
                    $that.val("获取验证码");
                }
            },1000);
        }
    });
}