var rateUp;
var repic_upload = {
    uploadInit: function(dom) {
        $(dom).wrap("<form id='myupload' action='/web/detail/upload' method='post' enctype='multipart/form-data'></form>");
        $(dom).change(function() {
            var _val = $(this).val();
            if (_val == '') {
                alert('请选择文件');
                return false;
            }
            var strFilter = ".jpeg|.jpg|.bmp|.png|";
            if (_val.indexOf(".") > -1) {
                var p = _val.lastIndexOf(".");
                var strPostfix = _val.substring(p, _val.length) + '|';
                strPostfix = strPostfix.toLowerCase();
                if (strFilter.indexOf(strPostfix) <= -1) {
                    alert("只能上传jpeg、jpg、bmp、png图片格式哦");
                    return false;
                }
            } else {
                alert("只能上传jpeg、jpg、bmp、png图片格式哦");
                return false;
            }

            if ($("#img-list img").length > 8) {
                alert("上传失败,最多可以上传九张");
                return false;
            }
            $("#myupload").ajaxSubmit({
                dataType: 'json',
                data: FORMDATA,
                beforeSend: function(rate) {
                    //生成div函数 并显示进度
                    $("#img-list").append('<div class="up-pic"><span class="rate-upload">0%</span></div>');


                    //设置上传按钮不可点击状态
                    console.log('准备上传');
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $("#file-btn").attr("disabled", "disabled");
                    $("#clp").text("上传中");
                    $(".rate-upload").text(percentComplete + '%');
                },
                success: function(data) {
                    if (data.code = '200') {
                        $(".up-pic").css("backgroundColor", "white");
                        // 
                        $("#img-list .up-pic:last").append('<div class="img-mask"></div>').append('<img src="' + data.val.smallurl + '" vpid="' + data.val.vid + '"  class="upImg" />');
                        $(".up-pic span").attr("class", "removeImg").text("删除");
                    } else {
                        alert(data.val)
                    }
                    console.log($("#img-list img").length);
                    //取消按钮不可点击状态
                    // console.log(data)
                    $("#file-btn").removeAttr("disabled");
                    $("#clp").text("上传照片");
                },
                error: function(xhr) {
                    console.log('上传失败');
                    //提示上传失败 并且设置可点击状态
                    // console.log(xhr.responseText);
                }
            });
        });
    },
    //阻止file默认样式
    file: function(dom) {
        return $(dom).click();
    },
    //删除图片
    reviewDelPic: function(dom) {
        var _data = {
            vpid: $(dom).attr('vpid'),
            timestamp: FORMDATA.timestamp,
            token: FORMDATA.token
        };
        $(dom).find('span').text('删除中').css("left", "10px");
        $.post("/web/detail/deleteupload", _data, function(d) {
            if (d == '1') {
                $(dom).remove();
            }
        });
    }
};

var cur_sm_index = 0;
//评论图照片放大
var comment_imgs = {
    commentImgBig: function() {
        //显示大图，点击图片切换
        $(".detail-app li").find(".comment>.upImg").click(function(event) {
            event.stopPropagation();

            if ($(this).prevAll("img").size() == 0) {
                $(".arrow-l").css("display", "none");
            };
            if ($(this).nextAll("img").size() == 0) {
                $(".arrow-r").css("display", "none");
            };
            if ($(this).nextAll("img").size() != 0 && $(this).prevAll("img").size() != 0) {
                $(".arrow-bar").css("display", "block");
            };
            if ($(this).prevAll(".comment-big-img").css("display") != "block") {
                $(this).prevAll(".comment-big-img").css({
                    "display": "block"
                });
            }
            $(this).prevAll(".comment-big-img").children("img").attr('src', $(this).attr('date-big-url'));
            $(".comment>img").css("border-color", "white");
            $(this).css("border-color", "#FFA500");
            // if ($(this).prevAll("img").length == 0) {
            //     $("arrow-l").css("display","none");
            // }
            // if ($(this).nextAll("img").length == 0) {
            //     $("arrow-r").css("display","none");
            // }
            // if($(this).prevAll("img").length != 0&&$(this).nextAll("img").length != 0)
            //     $("arrow-bar").css("display","block");

        })
    },
    arrow_slide: function() {

        $(".arrow-bar").click(function(event) {
            event.stopPropagation();
            var cur_url = $(this).siblings("img");
            var cur_arrow = $(this);
            cur_arrow.parent(".comment-big-img").nextAll(".upImg").each(function(index, el) {
                var thisPic = $(this);
                if (thisPic.attr("date-big-url") == cur_url.attr('src')) {
                    cur_sm_index = index;
                    // console.log(cur_sm_index + "  " + cur_arrow.parent(".comment-big-img").nextAll(".upImg").length);

                    if (cur_arrow.hasClass('arrow-l')) {
                        cur_sm_index--;
                        cur_url.attr("src", thisPic.prev('img').attr("date-big-url"));
                        thisPic.prev('img').css("border-color", "#FFA500");
                        thisPic.css("border-color", "white");
                        if (cur_sm_index == 0) {
                            cur_arrow.css("display", "none");
                        } else {
                            $(".arrow-bar").css("display", "block");
                        }
                    } else if (cur_arrow.hasClass('arrow-r')) {
                        cur_sm_index++;
                        cur_url.attr("src", thisPic.next('img').attr("date-big-url"));

                        thisPic.next('img').css("border-color", "#FFA500");
                        thisPic.css("border-color", "white");
                        if (cur_sm_index == cur_arrow.parent(".comment-big-img").nextAll(".upImg").length - 1) {
                            cur_arrow.css("display", "none");
                        } else {
                            $(".arrow-bar").css("display", "block");
                        }
                    }
                    // console.log(thisPic.prevAll('img').length);

                    return false;

                };
            });
        })

    },
    //隐藏图片
    hideBigImg: function() {
        $(document).on('click', function(event) {
            event.stopPropagation();
            $(".comment-big-img").css({
                "display": "none"
            });
            //$(document).css({
            //    "display": "none"
            //});
        });
    }
}
$(function() {
    $("#clp").click(function() {
        repic_upload.file("#file-btn");
    });
    repic_upload.uploadInit("#file-btn");
    $("#img-list").on('click', 'div', function() {
        repic_upload.reviewDelPic(this);
    });
    comment_imgs.commentImgBig();
    comment_imgs.arrow_slide();
    comment_imgs.hideBigImg();
})
