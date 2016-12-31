<?php
	$this->title = '信息发布';
	use backend\views\myasset\PublicAsset;
	use backend\views\myasset\ThemeAssetUpload;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

	PublicAsset::register($this);
	ThemeAssetUpload::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>
<style type="text/css">
  
    /*upload*/
	.uploadFileBox { display: inline-block; width: 180px; line-height: 20px; border: 1px solid #dcdcdc; border-radius: 4px; box-sizing: border-box; overflow: hidden; }
	.fileName { display: inline-block; width: 50px; line-height: 10px; margin-left: 10px; vertical-align: -moz-middle-with-baseline; overflow: visible; }
	.uploadFile { float: right; position: relative; display: inline-block; background-color: #3f7fcf; padding: 6px 12px; overflow: hidden; color: #fff; text-decoration: none; text-indent: 0; line-height: 20px; }
	.uploadFile input { position: absolute; font-size: 100px; right: 0; top: 0; opacity: 0; }
    #pic img {display: block; width: 17%; min-height: 100px; margin-bottom: 20px; border: 1px solid #dcdcdc;position: relative;left: 160px;}
</style>




<!-- content start -->
<div class="r content" id="shoreExcursions_content">
<div class="topNav">信息发布&nbsp;&gt;&gt;&nbsp;<a href="/messagetype/index">信息分类</a></div>
	<div class="searchResult">
	<div id="service_write" class=" write">
	<?php
		$form = ActiveForm::begin([
			'action' => ['add'],
			'method'=>'post',
			'id'=>'messagetype_add',
			'options' => ['class' => 'messagetype_add','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="searchResult">
			<p>
				<span><?php echo yii::t('app','消息类型：')?></span>
				<input type="text" name="name" ></input>
			</p>
			<p>
                <span><?php echo yii::t('app','图片预览：');?></span>
                <div id="pic" >
                    <img id="ImgPr" src="">
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
				<label>
					<span class='max_l'><?php echo yii::t('app','状态')?>:</span>
					<select name="status" id=status class='input_select'>
						<option value='1' ><?php echo yii::t('app','启用')?></option>
						<option value='0' ><?php echo yii::t('app','禁用')?></option>
					</select>
				</label>
			</p>

		</div>

		<div class="btn">
			<input style="cursor:pointer" type="submit" value="<?php echo yii::t('app','保存')?>"></input>
		</div>

	<?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	
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


