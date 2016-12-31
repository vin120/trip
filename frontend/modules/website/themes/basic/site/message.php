<?php
	$this->title = '咨询中心';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

<style type="text/css">.tr-fanyi{ text-align: center; font-size: 20px; font-family: arial,'microsoft yahei'; padding: 10px 0 20px; font-weight:bold;} .tr-fanyi a, .tr-fanyi span, .tr-fanyi b{width: 42px; height: 42px; display: inline-block; line-height: 42px; margin: 0 2px;color: #8895a3; font-size: 16px;} .tr-fanyi a{background: #ffffff;} .tr-fanyi b{ background: #ff8000;color:#ffffff;} .tr-fanyi a:first-child, .tr-fanyi a:last-child {font-weight:bold;} .tr-fanyi span{ width: 30px; font-size: 20px;}</style>

<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<img alt="旅行的瞬间在这里度假，处处都有精彩" src="<?php echo $baseUrl?>img/large_1473316293.jpg#旅行的瞬间"></div>
		</div>
	</div>
	<div class=" tr-main">
		<div class="tr-left tr-fll tr-mb20">
			<div class="tr-list-content">
                <a target="_blank" href="/travels/detail/56">
                  <div class="tr-mt15 tr-bgcw tr-pro_box ">
                    <div class="tr-fll tr-pro-img_box" style="position:relative;">
                      <img class="tr-vert" src="http://file.hivilla.com/uploads/travels/smaill_1478679984.jpg" ></div>
                    <div class="tr-fll tr-ml20 tr-pro-text-w">
                      <div class="tr-mt10">
                        <div class="tr-fll">
                          <img style="border-radius: 50%;width: 50px;height: 50px;" src="http://file.hivilla.com/uploads/travels/header_1478679984.png"></div>
                        <div class="tr-fll tr-ml15">
                          <div class="tr-fz18 tr-c444 tr-ellipsis" style="width: 265px">来到这，心里莫名的总有一种感动</div>
                          <div class="tr-caf tr-fz12">作者：Miss Lee</div></div>
                        <div class="tr-cfb"></div>
                      </div>
                      <div class="tr-c444 tr-mt15">站在广袤大地，单纯的呼吸也变得纯净美好，那是一种涤荡心灵的力量。时间仿佛在这一刻静止，一瞬间地老天荒，就是这样 不夸张 北海道的美不需要粉饰包装，想要让心胸开阔那就来北海道吧！ 来
                        <a target="_blank" href="/travels/detail/56">
                          <span class="tr-curp tr-ml5 tr-c9e">... [详情]</span></a>
                      </div>
                      <div class="tr-mt20">
                        <i class="tr-ic"></i>
                        <span class="tr-caf tr-ml10">雪景</span>
                        <span class="tr-caf tr-ml10">家庭</span>
                        <span class="tr-caf tr-ml10">经典</span></div>
                    </div>
                    <div class="tr-cfb"></div>
                  </div>
                </a>
              </div>

			<div class="tr-mt25 tr-tac tr-mb25 tr-fanyi" date-page-now="1" date-page-all="5"></div>
		</div>
		
		<div class="tr-right tr-flr tr-mb20">
			<div class="tr-mt10 tr-bottom-line tr-fz16 tr-pb10">栏目</div>
			<a target="_blank" class="tag t_l" href="/destinations/25">
				<div class="tr-mt15 tr-ovh tr-posr">
                  <img style="width: 100%" src="http://file.hivilla.com/uploads/destination/cover/kohsamui.jpg">
                  <div class="tr-posa tr-bgcfd tr-mask tr-fz26 tr-cfff">新闻</div>
				</div>
			</a>
			<a target="_blank" class="tag t_l" href="/destinations/26">
				<div class="tr-mt15 tr-ovh tr-posr">
              		<img style="width: 100%" src="http://file.hivilla.com/uploads/destination/cover/phuket.jpg">
                  	<div class="tr-posa tr-bgcfd tr-mask tr-fz26 tr-cfff">咨询</div>
            	</div>
			</a>
			<a target="_blank" class="tag t_l" href="/destinations/77">
				<div class="tr-mt15 tr-ovh tr-posr">
					<img style="width: 100%" src="http://file.hivilla.com/uploads/destination/cover/paris.jpg">
                  <div class="tr-posa tr-bgcfd tr-mask tr-fz26 tr-cfff">活动</div>
                </div>
              </a>
              <a target="_blank" class="tag t_l" href="/destinations/85">
                <div class="tr-mt15 tr-ovh tr-posr">
                  <img style="width: 100%" src="http://file.hivilla.com/uploads/destination/cover/bali.jpg">
                  <div class="tr-posa tr-bgcfd tr-mask tr-fz26 tr-cfff">优惠</div></div>
              </a>
            </div>
            <div class="tr-cfb"></div>
          </div>


<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
var pageID = '';
var MESSAGE = {};
var COMMON_MESSAGE = '';
page(1);

function page(iNowNumb) {
    var pageCont = $(".tr-fanyi");
    var allPages = pageCont.attr("date-page-all");
    var pageHtml = '';
    if (allPages <= 1) {
      pageCont.html('');
    } else {
      iNowNumb = iNowNumb < 1 ? 1 : iNowNumb;
      if (iNowNumb <= 5) {
        pageHtml += (iNowNumb <= 1 ? '': '<a href="javascript:void(0);" class="prev"><img src= "<?php echo $baseUrl?>img/js_images/pageprev.png"/></a>');
        var end = allPages - 1 >= 5 ? 5 : allPages - 1;
        for (var i = 1; i <= end; i++) {
          if (i == iNowNumb) {
            pageHtml += '<b>' + i + '</b>';
          } else {
            pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
          }
        }
        if (allPages > 6) {
          pageHtml += '<span>···</span>';
        }
        if (allPages == iNowNumb) {
          pageHtml += '<b>' + allPages + '</b>';
        } else {
          pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
        }
        pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?= $baseUrl?>img/js_images/pagenext.png" /></a>');
      } else if (iNowNumb >= allPages - 4) {
        pageHtml += (iNowNumb <= 1 ? '': '<a href="javascript:void(0);" class="prev"><img src= "<?= $baseUrl?>img/js_images/pageprev.png"/></a>');
        pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
        if (allPages > 6) {
          pageHtml += '<span>···</span>';
        }
        var start = allPages - 4 > 2 ? allPages - 4 : 2;
        for (var i = start; i <= allPages; i++) {
          if (i == iNowNumb) {
            pageHtml += '<b>' + i + '</b>';
          } else {
            pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
          }
        }
        pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?= $baseUrl?>img/js_images/pagenext.png"/></a>');
      } else if (allPages >= 9 && iNowNumb >= 6 && iNowNumb <= allPages - 5) {
        pageHtml += (iNowNumb <= 1 ? '': '<a href="javascript:void(0);" class="prev"><img src= "<?= $baseUrl?>img/js_images/pageprev.png"/></a>');
        pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
        pageHtml += '<span>···</span>';
        for (var i = iNowNumb - 2; i <= iNowNumb + 2; i++) {
          if (i == iNowNumb) {
            pageHtml += '<b>' + i + '</b>';
          } else {
            pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
          }
        }
        pageHtml += '<span>···</span>';
        pageHtml += '<a href="javascript:void(0);" data-src="/travels/pageinfo?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
        pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?= $baseUrl?>img/js_images/pagenext.png"/></a>');
      }
      pageCont.html('').html(pageHtml);
    }

	$('a').each(function() {
      $(this).on('click',
      function() {
        if ($(this).hasClass('prev')) {
          var n = parseInt($('.tr-fanyi b').html()) - 1;
          $.get("/travels/pageinfo?page=" + n,
          function(d) {
            if (d["code"] == 1) {
              $("html,body").animate({
                scrollTop: 0
              },
              200) 
              $(".tr-list-content").html(d["data"]["data"]);
              $(".tr-cur-now").html(n);
              page(n);
            }
          },
          'json');
        } else if ($(this).hasClass('next')) {
          var n = parseInt($('.tr-fanyi b').html()) + 1;
          $.get("/travels/pageinfo?page=" + n,
          function(d) {
            if (d["code"] == 1) {
              $("html,body").animate({
                scrollTop: 0
              },
              200) 
              $(".tr-list-content").html(d["data"]["data"]);
              $(".tr-cur-now").html(n);
              page(n);
            }
          },
          'json');
        } else {
          var n = $(this).attr('data-num');
          $.get("/travels/pageinfo?page=" + n,
          function(d) {
            if (d["code"] == 1) {
              $("html,body").animate({
                scrollTop: 0
              },
              200);
              $(".tr-list-content").html(d["data"]["data"]);
              $(".tr-cur-now").html(n);
              page(n);
            }
          },
          'json');
        }
      })
    });
  }


	if ('default' == pageID) {
		senseluxuryFed.loadIndexFun();
	} else if ('detail' == pageID || 'bankDetail' == pageID) {
		senseluxuryFed.loadDetailFun();
	} else if ('fqa' == pageID) {
		senseluxuryFed.loadFqaFun();
	} else {
		senseluxuryFed.loadListFun();
	}



<?php $this->endBlock() ?>
</script>
<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>