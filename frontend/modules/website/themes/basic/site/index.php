<?php
	$this->title = '珠海正和国际旅游,全球值得信赖的精品度假公寓短租平台,度假别墅,度假酒店,度假公寓预订';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

<div class="Cmask"></div>

<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
    
	var MESSAGE = {};
	editormd.markdownToHTML("markdown-view", {
    	htmlDecode: "style,script,iframe"
	});

    var pageID = '';
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