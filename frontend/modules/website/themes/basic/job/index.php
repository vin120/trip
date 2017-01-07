<?php
	$this->title = '珠海正和国际旅游有限公司-招聘详情';
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>



	<style>.editormd-html-preview { width: 95%; margin: 0 auto; margin-bottom: 50px; overflow-x: hidden; overflow-y: hidden; } p>img{ width: 560px; } #markdown-view img { text-align: center; }</style>
        <div class=" tr-main tr-pb20">
          <div class="tr-pro_box tr-posr">
            <div class="tr-header  tr-ovh tr-posr">
              <img style="width:100%;" src="http://file.hivilla.com/uploads/travels/large_1481881042.jpg">
              <div class="tr-mask tr-posa"></div>
            </div>

            <div class="tr-posr tr-bgcw" style="height: 95px;">
              <div class="tr-fll tr-u-info tr-mt5" style="margin-left: 0px">
                <h1 class="tr-fz32 tr-ml15 tr-mt5 tr-c666 tr-fll tr-ellipsis" style="width: 900px;font-weight:normal;"><?php echo $detail['name']?></h1>
                <div class="tr-cfl">
                  <span class="tr-fz14 tr-c666 tr-pr10 tr-pl10">
                  <i class="tr-dib tr-u-s-h"></i>
                  </span>
                  <span class="tr-caf tr-fz14 tr-pr10 tr-pl10 tr-left-text"><?php echo substr($detail['time'],0,10)?></span>
                </div>
              </div>
              <div class="tr-flr tr-u-info tr-mt10 tr-mr10">
              </div>
            </div>
          </div>
          <div class="tr-left tr-fll tr-bgcw tr-mt20 ">
            <div class="tr-mt20 tr-pl15 tr-pr15 tr-posr" id="markdown-view">
              <!-- <textarea id="append-html"></textarea> -->
            	<?php echo $detail['introduct'];?>
				<br/><br/><br/>
            </div>
            <div class="sq-zw tr-pl15 tr-pr15 tr-mb15">
              <p class="tr-fz16">申请该职位：</p>

			<?php
				$form = ActiveForm::begin([
					'action' => ['job/submit'],
					'method'=>'post',
					'id'=>'job_form',
					'options' => ['class' => 'job_form',],
					'enableClientValidation'=>false,
					'enableClientScript'=>false
				]);
			?>
				
				<input type="hidden" name="recruitment_id" value="<?php echo $detail['id']?>">
                <div class="item Lcfx Lmt15">
                  <div class="inputbox Lfll">*姓名：
                    <i class="icon icon1"></i>
                    <input name="username" type="text" placeholder="姓名" class="input2"></div>
                  <span class="msg err Lcfl Ldn">*请输入姓名</span>
                </div>
                <div class="item Lcfx Lmt15">
                  <div class="inputbox Lfll">*性别：
                    <input checked="checked" type="radio" name="gender" value="0">
                    <i>男</i>
                    <input type="radio" name="gender" value="1">
                    <i>女</i>
                  </div>
                  <span class="msg err Lcfl Ldn"></span>
                </div>
                <div class="item Lcfx Lmt15">
                  <div class="inputbox Lfll">*年龄：
                    <i class="icon icon1"></i>
                    <input name="age" type="text" placeholder="年龄" class="input2"></div>
                  <span class="msg err Lcfl Ldn"></span>
                </div>
                <div class="item Lcfx Lmt15">
                  <div class="inputbox Lfll">*电话：
                    <i class="icon icon1"></i>
                    <input name="telephone" type="text" placeholder="电话" class="input2"></div>
                  <span class="msg err Lcfl Ldn">*请输入电话</span>
                </div>
                <div class="item Lcfx Lmt15">
                  <div class="inputbox Lfll">*邮箱：
                    <i class="icon icon1"></i>
                    <input name="email" type="text" placeholder="邮箱" class="input2"></div>
                  <!-- <span class="msg err Lcfl">&nbsp;</span>-->
                  <span class="msg err Lcfl Ldn">*请输入邮箱</span>
                </div>
                <div class="item Lcfx Lmt15">
                  <div class="inputbox my-pl">*个人介绍：
                  </div>
                  <span class="msg err Lcfl Ldn">*请输入个人介绍</span>
                </div>
                <div class="my-pl">
                  <div class="textarea">
                    <textarea placeholder="请简单地介绍一下自己......" tabindex="1" autocomplete="off" name="content" accesskey="u" id="top_textarea"></textarea>
                  </div>
                </div>

                <div class="bottom Ltac Lmt15">
                    <button type="submit" class="Cbtn_middle_yellow" style="line-height: 32px;">提交申请</button>
                </div>

				<?php
					ActiveForm::end();
				?>

            </div>
          </div>
          <div class="tr-right tr-flr tr-mt20">
            <div class="tr-bottom-line tr-fz16 tr-pb10">相关招聘</div>
 
            <?php foreach($job as $row) :?>
            <a href="<?php echo Url::toRoute(['job/index','id'=>$row['id']]);?>">
              <div class="tr-mt15 tr-ovh tr-posr tr-bgcw ">
                <div class=" tr-bottom-line tr-pb10 tr-pt10 tr-pr10 tr-pl10 tr-mb10">
                  <!-- <div class="tr-fy-img tr-fll">
                    <img src="resource/img/large_1481878072.png"></div> -->
                  <div class="tr-fll" >
                    <div class="tr-mt10 tr-fz14 tr-c444 tr-ellipsis"><?php echo mb_substr($row['name'], 0,30,"utf8") ?></div>
                    <div class="tr-mt10 tr-fz10 tr-c666 tr-ellipsis-more"><?php echo mb_substr($row['introduct'], 0,100,"utf8") ?></div></div>
                  <div class="tr-cfb"></div>							  
                </div>
                <div class="tr-pb10">
                  <span class="tr-caf tr-ml10 tr-pr10 tr-fz14"><?php echo $row['type_name']?></span>
                  <span class=" tr-caf tr-pr15 tr-pl15 tr-fz12 tr-left-text tr-fz14"><?php echo substr($row['time'],0,10)?></span>
                </div>
              </div>
            </a>
            <?php endforeach;?>
            
            
          </div>
          <div class="tr-cfb"></div>
        </div>
        
        

<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
	var pageID = 'travels';
	var MESSAGE = {};
	var COMMON_MESSAGE = '';


	if ('default' == pageID) {
		senseluxuryFed.loadIndexFun();
	} else if ('detail' == pageID || 'bankDetail' == pageID) {
    	senseluxuryFed.loadDetailFun();
  	} else if ('fqa' == pageID) {
    	senseluxuryFed.loadFqaFun();
  	} else {
    	senseluxuryFed.loadListFun();
  	}

<?php $this->endBlock() ?>
</script>
<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>