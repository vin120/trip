<?php
	$this->title = yii::t('app','合作伙伴信息');
	use backend\views\myasset\PublicAsset;
	use backend\views\myasset\ThemeAssetUpload;
	use backend\views\myasset\ThemeAssetUeditor;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	
	PublicAsset::register($this);
    ThemeAssetUpload::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style type="text/css">
    /*write*/
    #introduct{ display: inline-block; width: 50%; vertical-align: top; }
    /*upload*/
	.uploadFileBox { display: inline-block; width: 180px; line-height: 20px; border: 1px solid #dcdcdc; border-radius: 4px; box-sizing: border-box; overflow: hidden; }
	.fileName { display: inline-block; width: 50px; line-height: 10px; margin-left: 10px; vertical-align: -moz-middle-with-baseline; overflow: visible; }
	.uploadFile { float: right; position: relative; display: inline-block; background-color: #3f7fcf; padding: 6px 12px; overflow: hidden; color: #fff; text-decoration: none; text-indent: 0; line-height: 20px; }
	.uploadFile input { position: absolute; font-size: 100px; right: 0; top: 0; opacity: 0; }
    #pic img {display: block; width: 17%; min-height: 100px; margin-bottom: 20px; border: 1px solid #dcdcdc;position: relative;left: 160px;}

</style>

<!-- content start -->
<div class="r content">
	<div class="topNav"><?php echo yii::t('app','合作伙伴管理')?>&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['partner/index']);?>"><?php echo yii::t('app','合作伙伴信息')?></a>&nbsp;&gt;&gt;&nbsp;
	<a href="#"><?php echo yii::t('app','编辑合作伙伴信息')?></a></div>
	<?php
		$form = ActiveForm::begin([
			'id'=>'partner_form',
			'action' => ['edit','id'=>$_GET['id']],
			'method'=>'post',
            'options' =>['class'=> 'partner_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="searchResult">
			<p>
				<span><?php echo yii::t('app','合作伙伴名称：')?></span>
				<input type="text" name="name"  value="<?php echo $partner['name']?>"/>
			</p>
			<p>
				<span><?php echo yii::t('app','电话：')?></span>
				<input type="text" name="telephone"  value="<?php echo $partner['telephone']?>"/>
			</p>
			<p>
				<span><?php echo yii::t('app','邮箱：')?></span>
				<input type="text" name="email"  value="<?php echo $partner['email']?>"/>
			</p>
			<p>
				<span><?php echo yii::t('app','地址：')?></span>
				<input type="text" name="address"  value="<?php echo $partner['address']?>"/>
			</p>
			 <p>
                <span><?php echo yii::t('app','图片预览：');?></span>
                <div id="pic" >
                    <img id="ImgPr" src="<?= Yii::$app->params['img_url']."/".$partner['img_url']?>">
                </div>
            </p>
            <p>
                <span style="vertical-align: top;position: relative;top:5px;"><?php echo yii::t('app','图片：')?></span>
				<label class="uploadFileBox" >
                    <span class="fileName"><?php echo yii::t('app','Select')?></span>
					<a href="#"  class="uploadFile"><?php echo yii::t('app','请选择')?><input type="file"  name="image" id="image"></input></a>
				</label>
            </p>
            <p>
				<span><?php echo yii::t('app','状态：')?></span>
				<select name="status">
					<option value="1" <?= $partner['status']==1?"selected='selected'":''?>> <?= yii::t('app','启用')?></option>
					<option value="0" <?= $partner['status']==0?"selected='selected'":''?>> <?= yii::t('app','禁用')?></option>
				</select>
			</p>
			<p>
				<span><?php echo yii::t('app','介绍：')?></span>
				<textarea id="introduct" name="introduct"><?php echo $partner['introduct']?></textarea>
			</p>
			<div class="btn">
				<input type="submit" value="保存"></input>
				<a href="<?php echo Url::toRoute(['index']);?>"><input type="button" value="返回"></input></a>
			</div>
		</div>
	<?php ActiveForm::end();?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	UE.getEditor('introduct');
	$("#image").uploadPreview({ Img: "ImgPr", Width: 120, Height: 120 });

    // 上传文件功能
	$(".uploadFile").on("change","input[type='file']",function(){
		var filePath = $(this).val();
		var arr=filePath.split('\\');
		var fileName=arr[arr.length-1];
		$(".fileName").html(fileName);
		$(".fileName").attr("title",fileName);
	});
}
</script>