<?php
	$this->title = '珠海正和国际旅游有限公司-今日精选';

  use yii\helpers\Url;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetDate;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	ThemeAssetDate::register($this);
	
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';



?>

<style>.defList{ padding:0.875rem; padding-bottom:0; position:absolute; width:332px!important; border:none!important; left:0!important; background-color:#ffffff; z-index:500; display:none; } .defList div{ height:2rem; border-bottom:1px solid #dddddd; } .defList div img{ float:left; height:1rem; margin:0.5rem; margin-left:0; } .defList div.hot img{ margin:0.5rem 0.6rem 0.5rem 0.1rem; } .defList div span{ float:left; line-height:2rem; color:#888888; font-size:0.75rem; } .defList .history b{ float:right; line-height:2rem; font-weight:normal; color:#ff8000; } .defList .history b:hover{ cursor:pointer; } .defList ul{ overflow:hidden; padding:0.35rem 0!important; } .defList ul li{ line-height:1.5rem; width:100%; margin-left:1.4rem!important; } .defList ul li span{ font-size:0.875rem!important; display:inline-block; } .defList ul li b{ font-size:0.75rem!important; color:#888888; font-weight:normal; display:inline-block; } .defList ul li span:hover{ cursor:pointer; color:#ff8000; } .defList ul li b:hover{ cursor:pointer; } .defList p{ margin-left:1.4rem!important; line-height:1.5rem; padding:0.5rem 0!important; } .defList p span{ margin-right:10px; font-size:0.875rem; display:inline-block; } .defList p span:hover{ color:#ff8000; cursor:pointer; } .D1main ul .li1 input{ width:270px!important; } .D1main ul .li1 b.clear{ width:30px; font-size:20px; color:#888888; display:none; font-weight:normal } .D1main ul .li1 b.clear:hover{ cursor:pointer; } .check-ctn{ margin-left:0.5rem; margin-top:0.5rem; width: 5rem; height:1.2rem; position: relative; } .check-ctn input { visibility:hidden; } .check-ctn label.icon{ cursor: pointer; position: absolute; width: 0.8rem; height: 0.8rem; top: 0; left: 0; background: #ffffff; border:1px solid #aaaaaa; } .check-ctn label.filterspan{ position:relative; bottom:0.2rem; cursor: pointer; height: 1.2rem; line-height: 1.2rem; } .check-ctn label.icon>span{ display:none; content: ''; position: absolute; width: 7px; height: 4px; background: transparent; top: 2px; left: 2px; border: 2px solid #aaaaaa; border-top: none; border-right: none; -webkit-transform: rotate(-45deg); -moz-transform: rotate(-45deg); -o-transform: rotate(-45deg); -ms-transform: rotate(-45deg); transform: rotate(-45deg); }</style>


		<div class="D1Search">
          <div class="D1main">
            <ul>
              <li class="li1 des-input">
                <i class="bg iconfont-home">&#xe61a;</i>
                <input type="text" autocomplete="off" placeholder="目的地/别墅" data-valname="目的地/别墅" class="txt-input" id="AutoSearch" style="border: medium none;" data-FBColor='#ff9b14'>
                <!-- <b class="clear">&times;</b> -->
                <div class="defList">
                  <div class="history">
                    <img src="<?php echo $baseUrl?>img/history.png" />
                    <span>历史搜索</span>
                    <b id="clear_history">清空历史记录</b></div>
                  <ul></ul>
                  <div class="hot">
                    <img src="<?php echo $baseUrl?>img/hot.png" />
                    <span>热门目的地</span></div>
                  <p>
                    <span data-id=2  data-type="2">苏梅岛</span>
                    <span data-id=7  data-type="2">巴黎</span>
                    <span data-id=8  data-type="2">巴厘岛</span>
                    <span data-id=6  data-type="2">洛杉矶</span>
                    <span data-id=6  data-type="2">皇后镇</span>
                    <span data-id=7  data-type="2">伦敦</span>
                    <span data-id=2  data-type="2">普吉岛</span>
                    <span data-id=6  data-type="2">马尔代夫</span></p>
                </div>
              </li>
              <li class="li2">
                <i class="bg iconfont-home">&#xe619;</i>
                <input class="txt-input" type="text" name="" placeholder="入住日期" id="rz_time_start" /></li>
              <li class="li3">
                <i class="bg iconfont-home">&#xe619;</i>
                <input class="txt-input" type="text" name="" placeholder="退房日期" id="rz_time_end" /></li>
              <li class="li4" id="people_numb">
                <i class="bg iconfont-home">&#xe618;</i>
                <input class="txt-input" type="text" name="" placeholder="入住人数" />
                <div class="people-select">
                  <a type="0">不限</a><a type="1">1</a><a type="2">2</a><a type="3">3</a><a type="4">4</a><a type="5">5</a><a type="6">6</a><a type="7">7</a><a type="8">8</a><a type="9">9</a><a type="10">10</a><a type="11">10+</a>
                </div>
              </li>
              <li class="li5 search-btn">
                <input class="btn" type="button" name="" value="搜 索" /></li>
            </ul>
          </div>
        </div>
        
        
        <div class="CltBanner">
          <div class="wp">
            <h2>每日精选别墅</h2>
            <p>每个特别的别墅，都是一场卓越度假的开始</p>
          </div>
        </div>
        
	   <div class="wp Clt">    
        <div class="handpick">
            <?php foreach($data as $k=>$row){ ?>
            <a target="_blank" href="<?php echo Url::toRoute(['destinations/detail','id'=>$row['apartment_id']])  ?>">
              <div class="lists">
                <img alt="<?php echo $row['apartment_name'] ?>" src="<?php echo Yii::$app->params['img_url'].'/'. $row['img_url']?>" />
                <h2><?php echo $row['apartment_name'] ?></h2>
                <p><?php echo $row['zone_name'] ?></p>
                <p>5 卧室，6 浴室</p>
              </div>
            </a>
            <?php }?>
        </div>
		
          
        <div class="TP">
            <h3>今日上新</h3>
            <p class="etitle"></p>
            <ul class="TPList">
              <?php foreach($new_data as $row){ ?>
              <li>
                <a target="_blank" class="aImg" title="<?php echo $row['apartment_name'] ?>" href="<?php echo Url::toRoute(['destinations/detail','id'=>$row['apartment_id']])  ?>">
                  <img alt="<?php echo $row['apartment_name'] ?>" class="scrollLoading" src="<?php echo Yii::$app->params['img_url'].'/'. $row['img_url']?>" /></a>
                <p class="title">
                  <a class="Lfll" href="<?php echo Url::toRoute(['destinations/detail','id'=>$row['apartment_id']])  ?>"><?php echo $row['apartment_name'] ?></a>￥
                  <span class="money"><?php echo  $row['total_price'] ?></span>/晚起</p>
                <p class="DQ">
                  <span class="Lfll"><?php echo $row['zone_name'] ?></span>￥
                  <span class="money"><?php echo $row['avg_price'] ?></span>/人/晚</p>
                <p class="JJ">
                  <span class="Lfll">4 卧室，5 浴室 ，1泳池</span>
                  <!-- <a title="评论（0）" href="/villa/4336_mamshillvillasv21#bspj-tit" target="_blank" class="tag t_l">
                  <img src="<?php echo $baseUrl?>img/comments.png">评论（0）</a>
                  <a title="去过（8）" href="javascript:void(0);" target="_blank" class="tag t_r">
                  <img src="<?php echo $baseUrl?>img/been_orange.png">去过（8）</a> --></p>
              </li>
              <?php }?>
              
            </ul>
        </div>
	</div>
	 <div class="Cmask"></div>
	


<script type="text/javascript">
	<?php $this->beginBlock('js_end') ?>
	var pageID = '';
	var MESSAGE = {};
	editormd.markdownToHTML("markdown-view", {
    	htmlDecode: "style,script,iframe"
	});

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

	
	