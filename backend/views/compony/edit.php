<?php
	$this->title = '公司信息';
	use backend\views\myasset\PublicAsset;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<style type="text/css">
	.pBox p label span:first-child{
		width: 100px;
		text-align: right;;
		display: inline-block;
	}
	.pBox p label input{
		width: 180px;
		height:30px;
		line-height: 30px;
		box-sizing: border-box;
	}
</style>

<!-- content start -->
<div class="r content" id="user_content">
    <div class="topNav">公司信息管理&nbsp;&gt;&gt;&nbsp;<a href="/compony/index">公司信息</a></div>
    <div id="mainContent_content" class="pBox">
         <div class="pBox" id="info">
			<div>
				<p>
					<label>
						<span>座机号码:</span>
						<input type="text" value="1234"></input>
					</label>
				</p>
				<p>
					<label>
						<span>客服号码:</span>
						<input type="text" value="1234"></input>
					</label>
				</p>
				<p>
					<label>
						<span>400号码:</span>
						<input type="text" value="1234"></input>
					</label>
				</p>
				<p>
					<label>
						<span>传真号码:</span>
						<input type="text"></input>
					</label>
				</p>
				<p>
					<label>
						<span>公司地址:</span>
						<input type="text"></input>
					</label>
				</p>
				<p>
					<label>
						<span>公司邮箱:</span>
						<input type="text"></input>
					</label>
				</p>
				<p>
					<label>
						<span>客服QQ:</span>
						<input type="text"></input>
					</label>
				</p>
				<p>
					<label>
						<span style="position: relative;top:-130px;">简介:</span>
						<textarea  style="resize: none;width: 400px;height: 150px;" ></textarea>
					</label>
				</p>
				<div class="btn">
					<input type="button" value="保存"></input>
				</div>
			</div>
        </div>
    </div>
</div>
<!-- content end -->