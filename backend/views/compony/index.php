<?php
	$this->title = '公司信息';
	use backend\views\myasset\PublicAsset;
    use yii\helpers\Url;

	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<!-- content start -->
<div class="r content" id="user_content">
    <div class="topNav">公司信息管理&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>">公司信息</a></div>
    <div id="mainContent_content" class="pBox">
    	<div id="componyInfo" >
         <h2>公司基本信息</h2>
         <div class="pBox" id="info" style="padding-bottom: 20px;">
            <ul>
                <li>
                    <span>座机号码:</span>
                    <span><?php echo $compony['telephone_number'];?></span>
                </li>
                <li>
	           		<span>客服号码:</span>
	           		<span><?php echo $compony['phone_number'];?></span>
	           	</li>
                <li>
                    <span>400号码:</span>
                    <span><?php echo $compony['400_number'];?></span>
                </li>
                <li>
	           		<span>传真号码:</span>
	           		<span><?php echo $compony['fax_number'];?></span>
	           	</li>
	           	<li>
	           		<span>公司地址:</span>
	           		<span><?php echo $compony['address'];?></span>
	           	</li>
	           	<li>
	           		<span>公司邮箱:</span>
	           		<span><?php echo $compony['email'];?></span>
	           	</li>
	           	<li>
	           		<span>客服QQ:</span>
	           		<span><?php echo $compony['QQ'];?></span>
	           	</li>
	           	<li>
	           		<span>简介:</span>
	           		<span><?php echo $compony['introduct'];?></span>
	           	</li>
            </ul>
        </div>

        <div class="btnBox2">
        	<a href="<?php echo Url::toRoute(['edit']);?>"><input type="button" value="<?php echo yii::t('app','修改公司信息')?>" class="btn2"></input></a>
        </div>
        </div>
	</div>
</div>
<!-- content end -->
