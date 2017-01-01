<?php
	$this->title = '招聘信息';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use yii\helpers\Url;
	
	
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
      <?php foreach ($recruitment as $key => $value) {?>
        <a target="_blank" href="zp_xiangqing.html">
          <div class="tr-mt15 tr-bgcw tr-pro_box ">
            <div class="tr-cfl tr-ml20 tr-mr20">
              <div class="tr-mt10">
                <div class="tr-cfl">
                  <div class="tr-fz18 tr-c444 tr-ellipsis" style="width: 265px"><?php echo $value['job_name'] ?></div>
                  <div class="tr-caf tr-fz12">分类：<?php echo $value['type_name'] ?><div class="tr-flr tr-caf tr-fz12" style="line-height:18px">2016.12.25</div></div>

                </div>
                <div class="tr-cfb"></div>
              </div>
              <div class="tr-c444 tr-mt15 tr-mb15"><?php echo substr($value['introduct'], 0,50) ?>
                <a target="_blank" href="zp_xiangqing.html">
                  <span class="tr-curp tr-ml5 tr-c9e">[查看详情]</span></a>
              </div>
            </div>
            <div class="tr-cfb"></div>
          </div>
        </a>
        <?php }?>

      </div>
      <div class="tr-mt25 tr-tac tr-mb25 tr-fanyi" date-page-now="1" date-page-all="5"></div>
    </div>
    <div class="tr-right tr-flr tr-mb20">
      <div class="tr-mt10 tr-bottom-line tr-fz16 tr-pb10">招聘分类</div>

      <?php foreach($recruitment_type as $row){ ?>
      <a href="<?php echo Url::toRoute(['job','type'=>$row['id']]);?>" >
        <div class="tr-mb15 tr-ovh tr-posr tr-bgcw ">
          <div class="tr-pb10 tr-pt10">
            <i class=" tr-ml5 tr-ic"></i>
            <span class="tr-caf tr-ml5"><?php echo $row['name'] ?></span>
          </div>
        </div>
      </a>
      <?php }?>
      
    </div>
    <div class="tr-cfb"></div>
  </div>

	<div class="Cmask"></div>

<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
var pageID = 'travels';
var MESSAGE = {};
var COMMON_MESSAGE = '';
page(2);

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