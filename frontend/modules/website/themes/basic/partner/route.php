<?php
	$this->title = '珠海正和国际旅游有限公司-推荐路线';
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

 <style type="text/css">
 	.tr-fanyi{ text-align: center; font-size: 20px; font-family: arial,'microsoft yahei'; padding: 10px 0 20px; font-weight:bold;} 
 	.tr-fanyi a, .tr-fanyi span, .tr-fanyi b{width: 42px; height: 42px; display: inline-block; line-height: 42px; margin: 0 2px;color: #8895a3; font-size: 16px;} 
 	.tr-fanyi a{background: #ffffff;} 
 	.tr-fanyi b{ background: #ff8000;color:#ffffff;} 
 	.tr-fanyi a:first-child, .tr-fanyi a:last-child {font-weight:bold;} 
 	.tr-fanyi span{ width: 30px; font-size: 20px;}
    .editormd-html-preview { width: 95%; margin: 0 auto; margin-bottom: 50px; overflow-x: hidden; overflow-y: hidden; } 
    p>img{ width: 560px; } 
    #markdown-view img { text-align: center; }
</style>

        <div class=" tr-main tr-pb20">
        
          <div class="tr-pro_box tr-posr">
            <div class="tr-header  tr-ovh tr-posr">
              <img style="width:100%;" src="<?php echo $baseUrl?>img/large_1481881042.jpg">
              <div class="tr-mask tr-posa"></div>
            </div>
            <div class="tr-posa tr-ml35 " style="bottom: 10px;z-index: 2">
              <img class="tr-list-head tr-fll " src="<?php echo Yii::$app->params['img_url']."/".$partner['img_url'];?>">
              <h1 class="tr-fz32 tr-ml15 tr-mt5 tr-cfff tr-fll tr-ellipsis" style="width: 900px;font-weight:normal;"><?php echo $partner['name']?></h1></div>
            <div class="tr-posr tr-bgcw" style="height: 75px;">
              <div class="tr-fll tr-u-info tr-mt5">
                <span class="tr-fz14 tr-c666 tr-pr10 tr-pl10">
                  <i class="tr-dib tr-u-s-h"></i></span>
                <span class="tr-caf tr-fz14 tr-pr10 tr-pl10 tr-left-text">电话：<?php echo $partner['telephone']?></span>
                <span class="tr-caf tr-fz14 tr-pr10 tr-pl10 tr-left-text">邮箱：<?php echo $partner['email']?></span>
                <span class="tr-caf tr-fz14 tr-pr10 tr-pl10 tr-left-text">地址：<?php echo $partner['address']?></span>
                
              </div>
              <div class="tr-flr tr-u-info tr-mr10 tr-pt5">
                 <a target="_self" title="查看简介" href="<?php echo Url::toRoute(['partner/index','id'=>$partner['id']])?>" class="hz_btn">查看简介</a>
              </div>
            </div>
          </div>
          
          
          <div class="tr-left tr-fll tr-mt5 ">
            <div class="tr-list-content">
            
            <?php foreach($route as $row):?>
            
              <a href="<?php echo Url::toRoute(['partner/route_detail','id'=>$row['id']]);?>">
                  <div class="tr-mt15 tr-bgcw tr-pro_box ">
                    <div class="tr-fll tr-pro-img_box" style="position:relative;">
                      <img class="tr-vert" src="<?php echo Yii::$app->params['img_url']."/".$row['img_url'];?>" source="<?php echo Yii::$app->params['img_url']."/".$row['img_url'];?>"></div>
                    <div class="tr-fll tr-ml20 tr-pro-text-w">
                      <div class="tr-mt10">
                        <div class="tr-cfl">
                          <div class="tr-fz18 tr-c444 tr-ellipsis" style="width: 265px"><?php echo $row['name']?></div>
                          <div class="tr-caf tr-fz12"><?php echo $row['partner_name']?>
                            <div class="tr-flr tr-caf tr-fz12" style="line-height:18px"><?php echo substr($row['time'],0,10)?></div>
                          </div>
                        </div>
                        <div class="tr-cfb"></div>
                      </div>
                      <div class="tr-c444 tr-mt15"><?php echo mb_substr($row['introduct'], 0,100,"utf8") ?>
                        <a target="_blank" href="/travels/detail/70">
                          <span class="tr-curp tr-ml5 tr-c9e">... [详情]</span></a>
                      </div>
                    </div>
                    <div class="tr-cfb"></div>
                  </div>
                </a>
                
             <?php endforeach;?>
             
            </div>
            <div class="tr-mt25 tr-tac tr-mb25 tr-fanyi" date-page-now="1" date-page-all="<?php echo $date_page_all?>"></div>
          </div>
          
         
          
          <div class="tr-right tr-flr tr-mt20">
            <div class="tr-bottom-line tr-fz16 tr-pb10">推荐路线</div>
            
            
            
            <?php foreach($partner_route as $row):?>
            <div class="tr-mt15 tr-ovh tr-posr tr-bgcw">
              <a title="<?php echo $row['name']?>" href="<?php echo Url::toRoute(['partner/route_detail','id'=>$row['id']])?>">
                <img style="width: 100%" src="<?php echo Yii::$app->params['img_url']."/".$row['img_url'];?>"></a>
              <div class="tr-pl5 tr-pr5 tr-ellipsis">
                <span class="tr-fz14 tr-c666"><?php echo $row['name']?></span>
              </div>
              <div class="tr-mt5 tr-mb5 tr-pl5 tr-pr5">
                <div class="tr-fz10 tr-caf tr-ellipsis" style="width:74%;display:inline-block;"><?php echo $row['partner_name']?></div>
                <span class="tr-flr tr-fz10 tr-caf" style="line-height:18px"><?php echo substr($row['time'],0,10)?></span>
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <div class="tr-cfb"></div>
		</div>
		
<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
	var pageID = 'travels';
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
              pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
            }
          }
          if (allPages > 6) {
            pageHtml += '<span>···</span>';
          }
          if (allPages == iNowNumb) {
            pageHtml += '<b>' + allPages + '</b>';
          } else {
            pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
          }
          pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?php echo $baseUrl?>img/js_images/pagenext.png" /></a>');
        } else if (iNowNumb >= allPages - 4) {
          pageHtml += (iNowNumb <= 1 ? '': '<a href="javascript:void(0);" class="prev"><img src= "<?php echo $baseUrl?>img/js_images/pageprev.png"/></a>');
          pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
          if (allPages > 6) {
            pageHtml += '<span>···</span>';
          }
          var start = allPages - 4 > 2 ? allPages - 4 : 2;
          for (var i = start; i <= allPages; i++) {
            if (i == iNowNumb) {
              pageHtml += '<b>' + i + '</b>';
            } else {
              pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
            }
          }
          pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?php echo $baseUrl?>img/js_images/pagenext.png"/></a>');
        } else if (allPages >= 9 && iNowNumb >= 6 && iNowNumb <= allPages - 5) {
          pageHtml += (iNowNumb <= 1 ? '': '<a href="javascript:void(0);" class="prev"><img src= "<?php echo $baseUrl?>img/js_images/pageprev.png"/></a>');
          pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + '1' + '" class="pageNumb" data-num="' + '1' + '">' + '1' + '</a>';
          pageHtml += '<span>···</span>';
          for (var i = iNowNumb - 2; i <= iNowNumb + 2; i++) {
            if (i == iNowNumb) {
              pageHtml += '<b>' + i + '</b>';
            } else {
              pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + i + '" class="pageNumb" data-num="' + i + '">' + i + '</a>';
            }
          }
          pageHtml += '<span>···</span>';
          pageHtml += '<a href="javascript:void(0);" data-src="<?php echo Url::toRoute(['partner/routepage'])?>?page=' + allPages + '" class="pageNumb" data-num="' + allPages + '">' + allPages + '</a>';
          pageHtml += (iNowNumb == allPages ? '': '<a href="javascript:void(0);" class="next"><img src= "<?php echo $baseUrl?>img/js_images/pagenext.png"/></a>');
        }
        pageCont.html('').html(pageHtml);
      }
      $('.tr-fanyi a').each(function() {
        $(this).on('click',
        function() {
          if ($(this).hasClass('prev')) {
            var n = parseInt($('.tr-fanyi b').html()) - 1;
            $.get("<?php echo Url::toRoute(['partner/routepage'])?>?page=" + n +"&id="+<?php echo $_GET['id']?>,
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
            $.get("<?php echo Url::toRoute(['partner/routepage'])?>?page=" + n +"&id="+<?php echo $_GET['id']?>,
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
            $.get("<?php echo Url::toRoute(['partner/routepage'])?>?page=" + n +"&id="+<?php echo $_GET['id']?>,
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