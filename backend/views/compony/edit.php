<?php
	$this->title = '公司信息';
	use backend\views\myasset\PublicAsset;
    use backend\views\myasset\ThemeAssetUeditor;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;

	PublicAsset::register($this);
	ThemeAssetUeditor::register($this);
	$baseUrl = $this->assetBundles[PublicAsset::className()]->baseUrl . '/';
?>

<style type="text/css">
    /*write*/
    #introduct { display: inline-block; width: 50%; vertical-align: top; }
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
    <div class="topNav">公司信息管理&nbsp;&gt;&gt;&nbsp;<a href="<?php echo Url::toRoute(['index']);?>">公司信息</a></div>
    <?php
		$form = ActiveForm::begin([
			'id'=>'compony_form',
			'action' => ['edit'],
			'method'=>'post',
            'options' =>['class'=> 'compony_form','enctype'=>'multipart/form-data'],
			'enableClientValidation'=>false,
			'enableClientScript'=>false
		]);
	?>
    <div id="mainContent_content" class="pBox">
         <div class="pBox" id="info">
			<div>
				<p>
					<label>
						<span>座机号码:</span>
						<input type="text"  name="telephone_number" value="<?php echo $compony['telephone_number']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>客服号码:</span>
						<input type="text" name="phone_number" value="<?php echo $compony['phone_number']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>400号码:</span>
						<input type="text" name="400_number" value="<?php echo $compony['400_number']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>传真号码:</span>
						<input type="text" name="fax_number" value="<?php echo $compony['fax_number']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>公司地址:</span>
						<input type="text" name="address" value="<?php echo $compony['address']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>公司邮箱:</span>
						<input type="text" name="email" value="<?php echo $compony['email']?>"></input>
					</label>
				</p>
				<p>
					<label>
						<span>客服QQ:</span>
						<input type="text" id="QQ" name="QQ" value="<?php echo $compony['QQ']?>"></input>
					</label>
				</p>
				<p>
					<label>
                        <span><?php echo yii::t('app','内容：')?></span>
        				<textarea id="introduct" name="introduct"><?php echo $compony['introduct']?></textarea>
					</label>
				</p>
                <div class="btn">
        			<input style="cursor:pointer" type="submit" value="<?php echo yii::t('app','保存')?>"></input>
        		</div>
			</div>
        </div>
    </div>
    <?php
		ActiveForm::end();
	?>
</div>
<!-- content end -->

<script type="text/javascript">
window.onload = function(){
	UE.getEditor('introduct');
}
</script>
