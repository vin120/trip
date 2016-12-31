<?php
	$this->title = '珠海正和国际旅游,全球值得信赖的精品度假公寓短租平台,度假别墅,度假酒店,度假公寓预订';
	use frontend\modules\wechat\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>




<!-- news and recommendation -->
<div class="container" id="content">
    <div class="row">
        <!-- news -->
        <div class="col-md-8 homepage-news-frame">
            <label style="margin-top: 5px">
                <img src="http://nowre.com/assets/img/label-title-icon.png" alt="" data-no-retina>
                <span class="newscontent-recommen-title">我的订单</span>
            </label>
            
            <hr class="title-hr mobile-titlehr-top"/>
            
            <!--  循环输出  -->

            <div style="border:1px solid #eeeeee;margin-bottom:15px">
                <div style="padding:10px">
                    <a href="#">
                        <img class="main-image" src="<?php echo $baseUrl?>img/about/about2.jpg" data-no-retina />
                    </a>

                    <div class="row homepage-title-content" style="margin-top:15px">
                        <div class="col-md-6 home-news-title">
                            <h1>
                                <a href="#">度假屋标题</a>   
                            </h1>
                        </div>
                    </div>

                    <div class="row homepage-time-read" style="margin-top:-9px;margin-left:-5px">
                        <div class="col-md-6 home-news-title">
                            <div class="news-time">
                                <span>下单于2016-12-12 10:10:10</span>
                            </div>
                            <a class="read-all" href="#" style="float:right;margin-bottom:10px">
                                <span>查看详情</span>
                                <img src="http://nowre.com/assets/img/read-all.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>