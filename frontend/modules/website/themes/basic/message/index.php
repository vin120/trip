<?php
	$this->title = '珠海正和国际旅游有限公司-资讯详情';
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
          
            <div class="tr-posr tr-bgcw" style="height: 95px;">
              <div class="tr-fll tr-u-info tr-mt5" style="margin-left: 0px">
                <h1 class="tr-fz32 tr-ml15 tr-mt5 tr-c666 tr-fll tr-ellipsis" style="width: 900px;font-weight:normal;"><?php echo $message['title']?></h1>
                <div class="tr-cfl">
                  <span class="tr-fz14 tr-c666 tr-pr10 tr-pl10">
                  <i class="tr-dib tr-u-s-h"></i><?php echo $message['author']?>
                  </span>
                  <span class="tr-caf tr-fz14 tr-pr10 tr-pl10 tr-left-text"><?php echo substr($message['time'],0,10)?></span>
                </div>
              </div>
              <div class="tr-flr tr-u-info tr-mt10 tr-mr10"></div>
            </div>
          </div>
          <div class="tr-left tr-fll tr-bgcw tr-mt20 ">
            <div class=" tr-mt20 tr-pl15 tr-pr15 tr-posr" id="markdown-view">
             <?php echo $message['content'];?>
            </div>
          </div>
          <div class="tr-right tr-flr tr-mt20">
           
            <div class="tr-bottom-line tr-fz16 tr-pb10">相关资讯</div>
            
            <?php foreach ($relate_message as $row):?>
            <a href="<?php echo Url::toRoute(['index','id'=>$row['id']])?>">
              <div class="tr-mt15 tr-ovh tr-posr tr-bgcw ">
                <div class=" tr-bottom-line tr-pb10 tr-pt10 tr-pr10 tr-pl10 tr-mb10">
                  <div class="tr-fy-img tr-fll">
                    <img src="<?php echo Yii::$app->params['img_url']."/".$row['img_url'];?>"></div>
                  <div class="tr-fll tr-ml15" style="width:50%;">
                    <div class="tr-mt10 tr-fz14 tr-c444 tr-ellipsis"><?php echo $row['title']?></div>
                    <div class="tr-mt10 tr-fz10 tr-c666 tr-ellipsis-more"><?php echo mb_substr($row['content'], 0,50,"utf8") ?></div></div>
                  <div class="tr-cfb"></div>
                </div>
                <div class="tr-pb10">
                  <span class="tr-caf tr-ml10 tr-pr10 tr-fz14"><?php echo $row['author']?></span>
                  <span class=" tr-caf tr-pr15 tr-pl15 tr-fz12 tr-left-text tr-fz14"><?php echo substr($row['time'],0,10)?></span>
                </div>
              </div>
            </a>
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