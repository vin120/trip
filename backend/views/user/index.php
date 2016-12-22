<?php
	$this->title = '公司信息';
	use backend\views\myasset\PublicAsset;
	
	PublicAsset::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>