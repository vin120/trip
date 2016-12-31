<?php
	$this->title = '珠海正和国际旅游,全球值得信赖的精品度假公寓短租平台,度假别墅,度假酒店,度假公寓预订';
	use frontend\modules\wechat\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>



<div class="container" id="content">
    <div class="row">
        <div class="col-md-8 homepage-news-frame">
            <label style="margin-top: 5px">
                <img src="http://nowre.com/assets/img/label-title-icon.png" alt="" data-no-retina>
                <span class="newscontent-recommen-title">在线招聘</span>
            </label>
            <hr class="title-hr mobile-titlehr-top"/>
            <!--  循环输出  -->
            <div style="border:1px solid #eeeeee;margin-bottom:15px">
                <div style="padding:10px">
                    <div class="row homepage-title-content" style="margin-top:5px">
                        <div class="col-md-6 home-news-title">
                            <h1>
                                <a href="#">测试标题</a>
                            </h1>
                        </div>
                    </div>
                    <div class="row homepage-time-read" style="margin-top:-9px;margin-left:-5px">
                        <div class="col-md-6 home-news-title">

                            <div class="news-time" style="float:left">
                                <span>招聘类别：<a href="#">程序员</a></span>
                            </div>

                            <div class="news-time" style="float:left">
                                <span>更新于2016-12-12 10:10:10</span>
                            </div>

                            <div style="margin-top:10px">
                                这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容
                            </div>

                            <a class="read-all" href="#" style="float:right;margin-top:10px;margin-bottom:10px">
                                <span>查看详情</span>
                                <img src="http://nowre.com/assets/img/read-all.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div style="border:1px solid #eeeeee;margin-bottom:15px">
                <div style="padding:10px">
                    <div class="row homepage-title-content" style="margin-top:5px">
                        <div class="col-md-6 home-news-title">
                            <h1>
                                <a href="#">测试标题</a>
                            </h1>
                        </div>
                    </div>

                    <div class="row homepage-time-read" style="margin-top:-9px;margin-left:-5px">
                        <div class="col-md-6 home-news-title">
                            <div class="news-time" style="float:left">
                                <span>招聘类别：<a href="#">文案</a></span>
                            </div>

                            <div class="news-time" style="float:left">
                                <span>更新于2016-12-12 10:10:10</span>
                            </div>

                            <div style="margin-top:10px">
                                这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容
                            </div>

                            <a class="read-all" href="#" style="float:right;margin-top:10px;margin-bottom:10px">
                                <span>查看详情</span>
                                <img src="http://nowre.com/assets/img/read-all.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  循环输出结束  -->
		</div>
	</div>
</div>









