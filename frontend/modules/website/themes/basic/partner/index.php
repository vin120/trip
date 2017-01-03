<?php
	$this->title = '珠海正和国际旅游有限公司-合作伙伴详情';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>


	<style>
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
                 <a target="_self" title="查看旅游路线" href="<?php echo Url::toRoute(['partner/route','id'=>$partner['id']])?>" class="hz_btn">查看路线</a>
              </div>
            </div>
          </div>
          <div class="tr-left tr-fll tr-bgcw tr-mt20 ">
            <div class=" tr-mt20 tr-pl15 tr-pr15 tr-posr" id="markdown-view">
            <?php echo $partner['introduct'];?>
            </div>
          </div>
          <div class="tr-right tr-flr tr-mt20">
            <div class="tr-bottom-line tr-fz16 tr-pb10">推荐路线</div>
            
            <?php foreach ($partner_route as $row) :?>
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