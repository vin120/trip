
<?php
	$this->title = yii::t('app','推荐路线');
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
	.fileName { display: inline-block; width: 50px; line-height: 10px; margin-left: 10px; vertical-align: middle; overflow: visible; }
	.uploadFile { float: right; position: relative; display: inline-block; background-color: #3f7fcf; padding: 6px 12px; overflow: hidden; color: #fff; text-decoration: none; text-indent: 0; line-height: 20px; }
	.uploadFile input { position: absolute; font-size: 100px; right: 0; top: 0; opacity: 0; }
    #pic img {display: block; width: 17%; min-height: 100px; margin-bottom: 20px; border: 1px solid #dcdcdc;position: relative;left: 160px;}

</style>

<!-- content start -->
<div class="r content">
	<div class="topNav"><?php echo yii::t('app','合作伙伴管理')?>&nbsp;&gt;&gt;&nbsp;
	<a href="<?php echo Url::toRoute(['route/index']);?>"><?php echo yii::t('app','推荐路线')?></a>&nbsp;&gt;&gt;&nbsp;
	<a href="#"><?php echo yii::t('app','编辑推荐路线')?></a>
	</div>
	<?php
		$form = ActiveForm::begin([
			'id'=>'route_form',
			'action' => ['edit','id'=>$_GET['id']],
			'method'=>'post',
            'options' =>['class'=> 'route_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
		<div class="searchResult">
			<p>
				<span><?php echo yii::t('app','合作伙伴名称：')?></span>
				<select name="partner_id">
                    <?php foreach($partner as $row):?>
                    	<option <?= $row['id']==$route['partner_id'] ? "selected='selected'" : ''?> value="<?= $row['id']?>"><?= $row['name']?></option>				    
                    <?php endforeach?>
				</select>
			</p>
			<p>
				<span><?php echo yii::t('app','推荐路线名称：')?></span>
				<input type="text" name="name"  value="<?php echo $route['name']?>"/>
			</p>
			<p>
				<span><?php echo yii::t('app','发布人：')?></span>
				<input type="text" name="author"  value="<?php echo $route['author']?>"/>
			</p>
			<p>
                <span><?php echo yii::t('app','图片预览：');?></span>
                <div id="pic" >
                   <img id="ImgPr" src="<?= Yii::$app->params['img_url']."/".$route['img_url']?>">
                </div>
            </p>
             <p>
                <span><?php echo yii::t('app','图片：')?></span>
				<label class="uploadFileBox" >
                    <span class="fileName"><?php echo yii::t('app','Select')?></span>
					<a href="#"  class="uploadFile"><?php echo yii::t('app','请选择')?><input type="file"  name="image" id="image"></input></a>
				</label>
            </p>
 			<p>
				<span><?php echo yii::t('app','状态：')?></span>
				<select name="status">
					<option value="1"><?= yii::t('app','启用')?></option>
					<option value="0"><?= yii::t('app','禁用')?></option>
				</select>
			</p>
			<p>
				<span><?php echo yii::t('app','图文内容：')?></span>
				<textarea id="introduct" name="introduct"><?php echo $route['introduct']?></textarea>
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
