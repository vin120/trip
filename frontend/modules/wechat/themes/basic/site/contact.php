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
                <span class="newscontent-recommen-title">联系我们</span>
            </label>
            
            <hr class="title-hr mobile-titlehr-top"/>
            <div>
                <div class="row homepage-time-read">
                    <div class="col-md-6 home-news-title">
                        <div style="margin-top:20px" id="aaaaa">
                            <p>地址：<?php echo $compony['address'];?></p>
                            <p>邮箱：<?php echo $compony['email']?></p>
                            <p>客服电话：<a href="tel:<?php echo $compony['telephone_number']?>"><?php echo $compony['telephone_number']?></a></p>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>