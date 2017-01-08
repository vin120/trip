<?php
	$this->title = '珠海正和国际旅游有限公司-我的订单';
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetUser;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	ThemeAssetUser::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>
 		<div class="wp user">
           <div class="user-left">
              <div class="user-list">
                <div class="user-img">
                  <span class="head-circle"></span>
                  <img src="<?php echo $baseUrl?>css/ucenter/head-pic.png" /></div>
                <h3 class="user-name"><?php echo $user['phone_number']?></h3>
                <a href="<?php echo Url::toRoute(['user/info'])?>#change">编辑资料</a>
                <a href='<?php echo Url::toRoute(['user/changepassword'])?>'>修改密码</a></div>
              <ul class="user-nav">
                <li>
                  <a class="order-link" href="<?php echo Url::toRoute(['user/index'])?>">我的订单</a></li>
                <li class="cur">
                  <a class="info-link" href="<?php echo Url::toRoute(['user/info'])?>">我的资料</a></li>
                <li>
                  <a class="house-link" href="<?php echo Url::toRoute(['user/collect'])?>">我的收藏</a></li>
            </div>
             <div class="user-right">
              <div class="main-list">
                <p class="cue">
                  <i>
                  </i>如需帮助或其他服务，请致电
                  <span><?php echo $_400_number['400_number']?></span></p>
	               <div class="myinfo">
	              <div class="info">
	                <h3>个人信息</h3>
	                <table>
	                  <tbody>
	                    <tr id="name" data-name="和其正">
	                      <!-- 数据 -->
	                      <th>姓名:</th>
	                      <td>
	                        <span></span>
	                        <input id="name-input" name="user_info[name]" class="my-modf" value=""></td>
	                    </tr>
	                    <tr id="username" data-username="2756458097@qq.com">
	                      <!-- 数据 -->
	                      <th>用户名:</th>
	                      <td>
	                        <span>2756458097@qq.com</span>
	                        <input id="username-input" class="my-modf" value="" name="user[user_name]"></td>
	                    </tr>
	                    <tr id="sex" data-sex="男">
	                      <!-- 数据 -->
	                      <th>性别:</th>
	                      <td>
	                        <span>男</span>
	                        <div class="my-modf">
	                          <div class="sex-input">
	                            <input checked="checked" type="radio" name="user_info[gender]" value="1">
	                            <i>男</i>
	                            <input type="radio" name="user_info[gender]" value="2">
	                            <i>女</i>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                    <tr id="mail" data-mail="2756458097@qq.com">
	                      <!-- 数据 -->
	                      <th>邮箱:</th>
	                      <td>
	                        <span>2756458097@qq.com</span>
	                        <div class="my-modf">
	                          <input readonly="readonly" id="mail-input" name="user[user_email]">
	                          <!-- readonly不能设置 -->
	                          <input id="mail-v-btn" type="button" value="发送验证邮件"></div>
	                      </td>
	                    </tr>
	                    <tr id="phone" data-phone="1375664765">
	                      <!-- 数据 -->
	                      <th>手机:</th>
	                      <td>
	                        <span></span>
	                        <div class="my-modf">
	                          <input type="text" id="phone-input" name="user[user_phone]">
	                          <!-- readonly不能设置 -->
	                          <input class="change-phone" id="phone-v" type="text" placeholder="输入收到的验证码">
	                          <input class="change-phone" id="phone-v-btn" type="button" value="发送验证码"></div>
	                      </td>
	                    </tr>
	                    <tr id="card" data-card="448337711662837654">
	                      <!-- 数据 -->
	                      <th id="cardText">身份证号:</th>
	                      <td>
	                        <span></span>
	                        <div class="my-modf">
	                          <select id="card-input" name="user_info[identity_type]">
	                            <option value="1">身份证号</option>
	                            <option value="2">护照</option>
	                            <option value="3">驾驶证</option></select>证件号
	                          <input id="cardNum" type="text" name="user_info[identity_no]"></div></td>
	                    </tr>
	                    <tr id="SetOff" data-province="广东" data-city="珠海">
	                      <!-- 数据 -->
	                      <th>常用出发城市:</th>
	                      <td>
	                        <span></span>
	                        <div class="my-modf">
	                          <div id="SetOff-input">
	                 
	                            </div>
	                        </div>
	                      </td>
	                    </tr>
	                    <tr id="postAdr" data-province="广东" data-city="珠海" data-area="香洲" data-adr="紫荆路">
	                      <!-- 数据 -->
	                      <th>邮寄地址:</th>
	                      <td>
	                        <span></span>
	                        <div class="my-modf">
	                          <div id="postAdr-input">
	                          
	                            </div>
	                          <input type="text" id="input-adr" placeholder="详细地址" name="user_info[user_address]"></div>
	                      </td>
	                    </tr>
	                    <tr class="postAdr-tip">
	                      <th></th>
	                      <td>
	                        <p class="my-modf">为了方便我们将发票以及定期的精美礼品邮寄给你，请填写你的正确地址</p></td>
	                    </tr>
	                    <tr>
	                      <th></th>
	                      <td>
	                        <div class="my-modf-no">
	                          <a class="but1 modf" href="javascript:;">修改</a></div>
	                        <div class="my-modf">
	                          <a class="but2 modf-no" href="javascript:;">取消</a>&nbsp;&nbsp;&nbsp;&nbsp;
	                          <input class="but1 modf-ok" id="save" type="button" value="保存"></div></td>
	                    </tr>
	                  </tbody>
	                </table>
	              </div>
	              <div class="password">
	                <h3>修改密码</h3>
	                <table>
	                  <tbody>
	                    <tr>
	                      <th>旧密码:</th>
	                      <td>
	                        <input id="old-paw" type="password" value="">
	                        <span></span>
	                      </td>
	                    </tr>
	                    <tr>
	                      <th>新密码:</th>
	                      <td>
	                        <input id="new-paw" type="password" value="">
	                        <span></span>
	                      </td>
	                    </tr>
	                    <tr>
	                      <th>再次输入新密码:</th>
	                      <td>
	                        <input id="new-paw-a" type="password" value="">
	                        <span></span>
	                      </td>
	                    </tr>
	                    <tr>
	                      <th></th>
	                      <td>
	                        <input class="but1 modf-ok" id="paw-btn" type="button" value="修改"></td>
	                    </tr>
	                  </tbody>
	                </table>
	              </div>
	            </div>
	          </div>
	          <div style="clear:both;"></div>
	          <!--中间内容结束--></div>
            </div>
          </div>
          

	<script type="text/javascript">
	<?php $this->beginBlock('js_end') ?>
		var pageID = 'myinfo';
		var COMMON_MESSAGE = '';
		var MESSAGE = {
	            'id_card': '身份证号',
	            'passport': '护照',
	            'driver_license': '驾驶证',
	            'certificates': '证件',
	            'old_paw': '旧密码不能为空',
	            'two_paw': '两次新密码必须一致',
	          };
	
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