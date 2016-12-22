<?php
	$this->title = '公司信息';
	use backend\views\myasset\PublicAsset;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>


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
						<span>简介:</span>
						<textarea rows="10" cols="50"></textarea>
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