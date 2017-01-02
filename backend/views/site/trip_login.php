<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\views\myasset\LoginAsset;
use yii\helpers\Url;

LoginAsset::register($this);

$this->title = 'Manager System';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = $this->assetBundles[LoginAsset::className()]->baseUrl . '/';

//$curr_language = Yii::$app->language;
?>

<header id="mainHeader">
    <h1 id="logo">
        <!--<img src="<?= $baseUrl ?>/images/logo.png"> -->
        <?= \Yii::t('app', '后台管理系统');?>
    </h1>
</header>
<main>
    <div id="loginForm">
        <h2><?= \Yii::t('app', 'Admin Login');?></h2>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="formBox">
                <div>
                    <label class="clearfix">
                        <?=
                        Html::activeTextInput($model, 'username',['class'=>"l",'maxlength'=>20,'required'=>'required',
                            'oninvalid'=>'setCustomValidity("'. \Yii::t('app', 'Username Can\'t be empty').'")',
                            'oninput'=>'setCustomValidity("")',
                            'autofocus'=>'autofocus','placeholder' =>\Yii::t('app', 'Username')])
                        ?>
                        <span class="imgBox l"><img src="<?= $baseUrl ?>/images/login_user.png"></span>
                    </label>
                    <em class="wrongBox">Please ...</em>
                </div>
                <div>
                    <label class="clearfix">
                        <?= Html::activePasswordInput($model, 'password',['class'=>"l",'maxlength'=>20,'required'=>'required',
                            'oninvalid'=>'setCustomValidity("'. \Yii::t('app', 'Password Can\'t be empty').'")',
                            'oninput'=>'setCustomValidity("")',
                            'placeholder'=>\Yii::t('app', 'Password')])?>
                        <span class="imgBox l"><img src="<?= $baseUrl ?>/images/login_pw.png"></span>
                    </label>
                    <em class="wrongBox">Please ...</em>
                </div>
                <div id="passwordthis">
				</div>
                <div id="remember">
                    <label>
                        <?= Html::activeCheckbox($model, 'rememberMe') ?>
                    </label>
                </div>
                <div id="btnBox">
                    <input type="submit" class="btn1" name="login-button" value="<?= \Yii::t('app', 'Login');?>" />
                    <input type="reset" class="btn2" value="<?= \Yii::t('app', 'Reset');?>" />
                </div>
            </div>
            
        <?php ActiveForm::end(); ?>
    </div>
</main>


<?php

$this->registerJs('
		
	var errorMessage = \''.$model->getFirstError('password') .'\';
	
	window.onload=function(){
		
		if(errorMessage != \'\'){
			$("#passwordthis").append("<strong class=\'point\' style=\'color:red;\'>用户名或密码错误,请确认无误后再输入</strong>");
		}

}	

', \yii\web\View::POS_END);

?>

