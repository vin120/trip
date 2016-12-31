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
                <span class="newscontent-recommen-title">招聘标题</span>
            </label>
            <hr class="title-hr mobile-titlehr-top"/>
            <div>
                <div class="row homepage-time-read">
                    <div class="col-md-6 home-news-title">
                        <div class="news-time">
                            <span>更新于2016年12月10日</span>
                        </div>

                        <a class="read-all" href="anli_list_watch.php?id=1">
                            <span>招聘类别：<a href="#" style="font-size:12px">程序员</a></span>
                        </a>

                        <div style="margin-top:20px" id="aaaaa">
                            这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容
                            <img src="<?php echo $baseUrl?>img/about/about1.jpg">
                            这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内容这是测试内
                            <img src="<?php echo $baseUrl?>img/about/about2.jpg">
                        </div>
                    </div>
                </div>
            </div>
            
            <label style="margin-top: 25px">
                <img src="http://nowre.com/assets/img/label-title-icon.png" alt="" data-no-retina>
                <span class="newscontent-recommen-title">我要应聘</span>
            </label>
            
            <hr class="title-hr mobile-titlehr-top"/>

            <div style="margin-top:10px">
                <form action="<?php echo Url::toRoute(['job/submit']);?>" method="POST">
                    <p><input type="text" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 姓名"></p>
                    <p><input type="text" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 电话"></p>
                    <p><input type="text" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 邮箱"></p>
                    <p><input type="text" name="" style="width:100%;height:40px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 出生日期，如：1990年1月1日"></p>
                    <p>性别：
                        <select name="" style="width:100%;height:40px;margin-bottom:9px;margin-top:5px">
                            <option value="">男</option>
                            <option value="">女</option>
                        </select>
                    </p>

                    <p><textarea style="width:100%;height:100px;border:1px solid #CCCCCC;margin-bottom:9px" placeholder=" 自我介绍"></textarea></p>

                    <p><input type="submit" name="" value="提交应聘" style="width:100%;height:40px;border:1px solid #CCCCCC;border-radius:5px;color:white;background-color:#333333"></p>

                </form>
            </div>
        </div>
	</div>
</div>