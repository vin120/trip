<?php
	$this->title = '珠海正和国际旅游,全球值得信赖的精品度假公寓短租平台,度假别墅,度假酒店,度假公寓预订';
	use frontend\modules\wechat\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>


<div class="container" id="content">
    <div class="row">
        <!-- news -->
        <div class="col-md-8 homepage-news-frame">
            <label style="margin-top: 5px">
                <img src="http://nowre.com/assets/img/label-title-icon.png" alt="" data-no-retina>
                <span class="newscontent-recommen-title">会员登录</span>
            </label>
            <hr class="title-hr mobile-titlehr-top"/>
            <div style="margin-top:10px">

                <form action+"" method="POST">
                    <p><input type="text" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 姓名/手机号"></p>
                    <p><input type="password" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:15px" placeholder=" 密码"></p>
                    <p><input type="submit" name="" value="登录" style="width:100%;height:40px;border:1px solid #CCCCCC;border-radius:5px;color:white;background-color:#333333"></p>
                </form>
            </div>
        </div>
	</div>
</div>
