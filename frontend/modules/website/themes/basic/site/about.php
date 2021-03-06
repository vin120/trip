<?php
	$this->title = '珠海正和国际旅游有限公司-关于我们';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

<style>.editormd-html-preview { width: 95%; margin: 0 auto; margin-bottom: 50px; overflow-x: hidden; overflow-y: hidden; } p>img{ width: 560px; } #markdown-view img { text-align: center; }</style>
<div class=" tr-main tr-pb20">
  <div class="tr-pro_box tr-posr">
    <div class="tr-header  tr-ovh tr-posr">
      <img style="width:100%;" src="<?php echo $baseUrl?>img/large_1481881042.jpg">
      <div class="tr-mask tr-posa"></div>
    </div>
  </div>
  <div class="tr-left tr-fll tr-bgcw tr-mt20 ">

    <div class=" tr-mt20 tr-pl15 tr-pr15 tr-posr" id="markdown-view">
    	<?php 
    		foreach($compony as $key =>$value) :
    			echo "<div id='" .$key. "F'></div>";
    			echo "<h3>".$value['name']."</h3>";
    			echo $value['introduct'];
    		endforeach;
    	?>
    	
    </div>
  </div>
  <div class="tr-right tr-flr tr-mt20">
  
    <?php foreach ($about as $key => $value):?>
    <a href='#<?php echo $key?>F'>
      <div class="tr-mb15 tr-ovh tr-posr tr-bgcw ">
        <div class="tr-pb10 tr-pt10">
          <i class=" tr-ml5 tr-ic"></i>
          <span class="tr-caf tr-ml5"><?php echo $value['name'];?></span>
        </div>
      </div>
    </a>
  	<?php endforeach;?>
    
  </div>
  <div class="tr-cfb"></div>
</div>
 <div class="Cmask"></div>

<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
    
	var MESSAGE = {};
	editormd.markdownToHTML("markdown-view", {
    	htmlDecode: "style,script,iframe"
	});

    var pageID = 'travels';
    var COMMON_MESSAGE ={};
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
