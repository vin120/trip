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
                <span class="newscontent-recommen-title">订单详情</span>
            </label>
            <hr class="title-hr mobile-titlehr-top"/>
            <div>
                <div class="row homepage-time-read">
                    <div class="col-md-6 home-news-title">
                        <div>
                            <a class="read-all">
                                <span>下单于2016年12月10日</span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="read-all">
                                <span>入住人数：3人</span>
                            </a>
                        </div>
                        <div>
                            <a class="read-all">
                                <span>总金额：2000元</span>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="read-all">
                                <span>入住日期：2016-12-10&nbsp;&nbsp;&nbsp;退房日期：2016-12-15</span>
                            </a>
                        </div>
                        <hr>
                        <div style="margin-top:20px" id="aaaaa">
                            这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试
                            <img src="<?php echo $baseUrl?>img/about/about1.jpg">
                            这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内
                            <img src="<?php echo $baseUrl?>img/about/about2.jpg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
