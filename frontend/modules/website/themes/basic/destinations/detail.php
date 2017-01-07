<?php
	$this->title = '度假屋详情';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	use frontend\modules\website\themes\basic\myasset\ThemeAssetInner;
	ThemeAssetInner::register($this);
	ThemeAsset::register($this);
	
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>


 		<div class="Cdir">
          <div class="inner Lcfx">
            <div class="link Lfll">
              <a title="" href="/">珠海正和国际旅行</a>
              <i>&gt;</i>
              <a target="_blank" title="泰国" href="/destinations/2">泰国</a>
              <i>&gt;</i>
              <a target="_blank" title="苏梅岛" href="/destinations/25">苏梅岛</a>
              <i>&gt;</i>
              <a target="_blank" title="曾蒙 " href="/destinations/634 ">曾蒙</a></div>
          </div>
        </div>
        <!--面包屑 结束-->
        <!--内页中间内容开始-->
        <div class="wp Lcfx save-data-info" data-info=''>
          <div class="jg-left Lfll">
            <!--banner开始-->
            <div class="de-info Lpt20 Lpb10">
              <h1 class="tit">萨穆嘉纳26号别墅</h1>
              <input type="hidden" id="pid" value="1958" />
              <input type="hidden" id="p_memo" value="5卧室，6浴室，1泳池" />
              <p class="add Lcfx">
                <span class="Lfll">泰国 苏梅岛 曾蒙</span>
                <a href="javascript:void(0);" class="Lfll">
                  <i class="icon"></i>查看地图</a>
              </p>
              <p class="del_price">
                <span style="color:red; font-size:15px;">
                  <del>￥13940</del></span>
              </p>
              <p class="price">¥
                <b>8364 </b>/ 晚起
                <i>
                  <span class="hint_box">
                    <font>
                      <em></em>该价格为今日后最低住宿费用，产品价格会根据您所选的出行日期、入住人数、所选服务的不同以及汇率浮动而有所变动，具体请参照预订条款或详情垂询客服。</font></span>
                </i>
              </p>
            </div>
            <div style="display:none; ">该价格为今日后最低住宿费用，产品价格会根据您所选的出行日期、入住人数、所选服务的不同以及汇率浮动而有所变动，具体请参照预订条款或详情垂询客服。</div>
            <div class="DT_banner">
              <div id="dt_slides" class="Cslides dt_slides">
                <a href="/panorama/1958" target="_blank">
                  <div class="panorama">
                    <span>全景</span></div>
                </a>
                <span class="xsyh-icon new-r-off">
                  <p>40%OFF</p>
                  <p>10.27-12.20</p> 
                </span>
                <ul class="tab_body">
                  <?php foreach($apartment_img as $k=>$row){ ?>
                  <li data-label-text="<?php echo ($k+1) ?>/<?php echo count($apartment_img) ?>">
                    <a href="#">
                      <img alt="" src="<?php echo Yii::$app->params['img_url'].'/'. $row['img_url']?>"></a>
                  </li>
                  <?php } ?>
                  <!--<li data-label-text="2/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-1" src="http://image01.hivilla.com/uploads/destination/article/1/1958/1.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="3/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-2" src="http://image02.hivilla.com/uploads/destination/article/1/1958/2.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="4/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-3" src="http://statics.hivilla.com/uploads/destination/article/1/1958/3.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="5/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-4" src="http://image01.hivilla.com/uploads/destination/article/1/1958/4.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="6/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-5" src="http://image02.hivilla.com/uploads/destination/article/1/1958/10.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="7/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-6" src="http://statics.hivilla.com/uploads/destination/article/1/1958/5.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="8/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-7" src="http://image01.hivilla.com/uploads/destination/article/1/1958/6.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="9/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-8" src="http://image02.hivilla.com/uploads/destination/article/1/1958/7.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="10/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-9" src="http://statics.hivilla.com/uploads/destination/article/1/1958/8.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="11/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-10" src="http://image01.hivilla.com/uploads/destination/article/1/1958/9.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="12/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-11" src="http://image02.hivilla.com/uploads/destination/article/1/1958/11.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="13/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-12" src="http://statics.hivilla.com/uploads/destination/article/1/1958/12.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="14/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-13" src="http://image01.hivilla.com/uploads/destination/article/1/1958/13.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="15/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-14" src="http://image02.hivilla.com/uploads/destination/article/1/1958/14.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="16/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-15" src="http://statics.hivilla.com/uploads/destination/article/1/1958/15.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="17/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-16" src="http://image01.hivilla.com/uploads/destination/article/1/1958/16.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="18/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-17" src="http://image02.hivilla.com/uploads/destination/article/1/1958/17.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="19/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-18" src="http://statics.hivilla.com/uploads/destination/article/1/1958/18.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="20/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-19" src="http://image01.hivilla.com/uploads/destination/article/1/1958/19.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="21/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-20" src="http://image02.hivilla.com/uploads/destination/article/1/1958/20.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>
                  <li data-label-text="22/22">
                    <a href="#">
                      <img alt="Senseluxury 度假别墅-萨穆嘉纳26号别墅-screenshot-21" src="http://statics.hivilla.com/uploads/destination/article/1/1958/21.jpg#samujanavilla26萨穆嘉纳26号别墅"></a>
                  </li>-->
                </ul>
                <a href="javascript:;" class="prev"></a>
                <a href="javascript:;" class="next"></a>
                <div class="tabLabel">
                  <a href="javascript:;" target="">1/<?php echo count($apartment_img) ?></a></div>
                <ul class="tabCon">
                  <?php for($i=1;$i<=count($apartment_img);$i++){ ?>
                  <li <?php $i==1?"class='active'":"" ?>></li>
                  <?php }?>
                 
                </ul>
              </div>
            </div>
            <div class="detail-type Lmt10">
              <ul class="items Lcfx">
                <li class="cur">
                  <a href="">
                    <i class="ic bsyl">&#x1304;</i>别墅总览</a></li>
                <li>
                  <a href="" class="plr13">
                    <i class="ic ssfw">&#x1306;</i>设施&服务</a></li>
                <li>
                  <a href="">
                    <i class="ic jgtk">&#x1305;</i>价格&条款</a></li>
                <li>
                  <a href="">
                    <i class="ic bswz">&#x1302;</i>别墅位置</a></li>
                <li>
                  <a href="">
                    <i class="ic bspj">&#x1303;</i>别墅评价</a></li>
              </ul>
            </div>
            <div class="info-cont Lmt20 floor-index">
              <div class="p-mask"></div>
              <div class="info-text">
                <p>
                  <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;"></span>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px; color: rgb(255, 0, 0);"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &#39;Microsoft YaHei&#39;; font-size: 14px;">
                    <strong style="white-space: normal;">
                      <span style="font-family:微软雅黑, Microsoft YaHei">
                        <span style="font-size: 14px; color: rgb(255, 0, 0);"></span>
                      </span>
                    </strong>
                  </span>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;">
                    <span style="font-size: 14px; color: rgb(255, 0, 0);"></span>
                  </span>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;">
                    <span style="color: rgb(255, 0, 0); font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;"></span>
                  </span>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;">
                    <span style="color: rgb(255, 0, 0);">
                      <strong>【6折优惠】即日起预订2016.12.20日之前的住宿，可享6折优惠！</strong></span>
                  </span>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">优惠包括：</span></p>
                <ul class=" list-paddingleft-2" style="width: 934.797px; white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">入住3晚可享池边BBQ</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">机场接送</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">每日早餐</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">提早入住和延迟退房（视情况而定）</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <br/></p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">【春节优惠】即日起预订2016.1.25-2.5期间的住宿，可享85折优惠！</span></strong>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">更可享受：</span></p>
                <ul class=" list-paddingleft-2" style="width: 934.797px; white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">庆祝晚餐</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">每位入住成人一次1小时泰式按摩</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">苏梅岛私人观光</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">私人厨师服务</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">机场接送</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">每日早餐</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">高速无线网络</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px; color: rgb(255, 0, 0);">提早入住和延迟退房（视情况而定）</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <span style="color: rgb(255, 0, 0); font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;">*以上优惠不可叠加使用，预定后不可取消，请咨询旅行顾问</span></p>
                <p style="white-space: normal;">
                  <span style="color: rgb(255, 0, 0); font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;">注：房价根据房态变动，预订前请先咨询。</span>
                  <br/></p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 14px;">萨穆嘉纳26号别墅是一栋三层楼的建筑，别墅的地理位置使得客人可以看到附近海洋上的小岛与海洋面上的日落。</span></p>
                <p>
                  <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">别墅共有5间卧室与6间浴室。别墅还有拥有一个大型的花园，私人健身馆与电影院与两个现代化的厨房。大型的无边泳池特别适合游泳，阳光躺椅为客人提供了享受日光浴的条件。</span></p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">位置：</span></strong>
                </p>
                <p style="white-space: normal;">
                  <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">萨穆嘉纳别墅群位于苏梅岛东北海岸的山坡上</span></p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">距离苏梅国际机场（Samui Airport） &nbsp; &nbsp;4.2km</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">距离查汶海滩 （Beach Chaweng） &nbsp; &nbsp;9km</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">房间细节：</span></strong>
                  <br/></p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">5间卧室入住10位客人</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">可以加1张成人床与婴儿床</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">房间内有吹风机和保险箱</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">设施：</span></strong>
                </p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">WIFI</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">泳池</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">私人电影院</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">淋浴</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">浴缸</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei;">
                        <span style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;">吹风机</span></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">DVD播放设备</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">健身房</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">餐厅</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">花园</span>
                      <br/></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">躺椅</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑,Microsoft YaHei; font-size: 14px;"></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">服务：</span></strong>
                </p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">别墅员工</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">别墅早餐</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">机场接送</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei;">
                        <span style="font-size: 14px;">抵达时的欢饮饮品及湿巾</span></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">安保（24小时）</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">私人厨师（另付，提前24小时预约）</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-family: 微软雅黑, Microsoft YaHei; font-size: 14px;">Spa（另付，提前预约）</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <br/></p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">注意事项：</span></strong>
                </p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">别墅不准抽烟，不允许携带宠物</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">鉴于安全，不准燃放烟花，不可携带或使用灯笼</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">别墅入住人数不可超过其最多容纳人数</span></p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">别墅内丰富多彩的活动：</span></strong>
                </p>
                <ul class=" list-paddingleft-2" style=" white-space: normal;">
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">您可以在别墅内享受我们奢华的SPA理疗和可口的美食，这里有充分的空间来休闲，冥想和做瑜伽，不论是在拳击场，专业级的健身房，还是网球场，我们都有专业级的教练可以为您做指导</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">在灯光网球场可以全天候的享受网球</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">租借我们的豪华43英尺船出海</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">前往世界上最好的潜水胜地之一的涛岛，探索神秘的海底世界</span></p>
                  </li>
                  <li>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">瑜伽，SPA ，美食烹饪，跆拳道</span></p>
                    <p>
                      <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;"></span>
                    </p>
                  </li>
                </ul>
                <p style="white-space: normal;">
                  <strong>
                    <span style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">
                      <br/></span>
                  </strong>
                </p>
                <p style="white-space: normal;">
                  <strong style="font-size: 14px; font-family: 微软雅黑, Microsoft YaHei;">价格另付17.7%的地方税及服务费</strong></p>
                <p style="white-space: normal;">
                  <br/>
                  <strong style="font-size: 14px; font-family: 微软雅黑,Microsoft YaHei;"></strong>
                </p>
                <p>
                  <span style="font-size: 14px;">©以上内容版权归珠海正和国际旅行别墅度假所属，未经授权不得以任何形式使用</span></p>
              </div>
              <a href="javascript:void(0);" class="more">【查看全部介绍 + 】</a></div>
            <!--banner结束-->
            <!--设施&服务开始-->
            <div class="dtitle Lcfx ssfw-tit">
              <i class="ic ssfw">&#x1306;</i>设施&服务</div>
            <div class="de-ssfw floor-index">
              <ul class="itmes">
                <?php foreach($service_arr as $row){ ?>
                <li>
                  <label><?php echo $row['name'] ?>：</label>
                  <table class="ssfw-table" border="0">
                    <?php foreach($row['child'] as $k=>$v){
                      if($k%2==0){
                     ?>
                    <tr>
                      <td width="260"><?php echo $v['name'] ?></td><?php }else{?>
                      <td><?php echo $v['name'] ?></td>
                    </tr><?php }?>
                    <?php }?>
                     <?php if(count($row['child'])/2!=0){?>
                    <td></td></tr>
                    <?php }?>
                  </table>
                </li>
                <?php }?>
                <!--<li>
                  <label>主题：</label>
                  <table class="ssfw-table" border="0">
                    <tr>
                      <td width="260">商务</td>
                      <td>蜜月</td></tr>
                    <tr>
                      <td width="260">婚礼</td>
                      <td>家庭</td></tr>
                  </table>
                </li>
                <li>
                  <label>面积：</label>1607m²</li>
                <li id="server">
                  <label>免费服务：</label>
                  <table class="ssfw-table" border="0">
                    <tr>
                      <td width="260">早餐</td>
                      <td>女佣</td></tr>
                    <tr>
                      <td width="260">机场接送</td>
                      <td>保安</td></tr>
                    <tr>
                      <td width="260">客房服务</td>
                      <td></td>
                    </tr>
                  </table>
                </li>
                <li>
                  <label>收费服务：</label>
                  <table class="ssfw-table" border="0">
                    <tr>
                      <td width="260">私人厨师</td>
                      <td>按摩服务</td></tr>
                  </table>
                </li>
                <li id="facility">
                  <label>别墅设施：</label>
                  <table class="ssfw-table" border="0">
                    <tr>
                      <td width="260">拖鞋</td>
                      <td>保险箱</td></tr>
                    <tr>
                      <td width="260">吹风机</td>
                      <td>DVD播放器</td></tr>
                    <tr>
                      <td width="260">室内淋浴</td>
                      <td>音响</td></tr>
                    <tr>
                      <td width="260">阳光躺椅与遮阳伞</td>
                      <td>平板电视</td></tr>
                    <tr>
                      <td width="260">空调</td>
                      <td></td>
                    </tr>
                  </table>
                </li>
                <li>
                  <label>综合设施：</label>
                  <table class="ssfw-table" border="0">
                    <tr>
                      <td width="260">家庭影院</td>
                      <td>泳池</td></tr>
                    <tr>
                      <td width="260">健身房</td>
                      <td>餐厅</td></tr>
                    <tr>
                      <td width="260">花园</td>
                      <td></td>
                    </tr>
                  </table>
                </li>-->
                <li>
                  <label>备注：</label>禁止吸烟；禁止携带宠物</li></ul>
            </div>
            <!--设施&服务结束-->
            <!--价格&条款开始-->
            <div class="dtitle Lcfx jgtk-tit">
              <i class="ic jgtk">&#x1305;</i>价格&条款</div>
            <div class="price-tk floor-index">
              <div class="query-price Lcfx">
                <b class="Lfll">当前价格查询：</b>
                <div class="room-c Lfll">
                  <span>5间卧室 5卧室，可容纳10人</span>
                  <div>
                    <b>
                    </b>
                  </div>
                  <ul class="room-c-list">
                    <li>5间卧室 5卧室，可容纳10人</li></ul>
                </div>
                <strong class="Lfll">请选择房型</strong></div>
              <div class="price-tabcont" style="display: block">
                <table class="price-tab" border="0">
                  <thead>
                    <tr>
                      <td width="110">价目（RMB/晚）</td>
                      <td>最短停留时间（晚）</td>
                      <td width="224">时间范围</td></tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>13940</td>
                      <td>3</td>
                      <td>2016-09-01 - 2016-12-23</td></tr>
                    <tr>
                      <td>20332</td>
                      <td>7</td>
                      <td>2016-12-24 - 2017-01-07</td></tr>
                    <tr>
                      <td>13260</td>
                      <td>3</td>
                      <td>2017-01-08 - 2017-01-24</td></tr>
                    <tr>
                      <td>19040</td>
                      <td>5</td>
                      <td>2017-01-25 - 2017-02-05</td></tr>
                    <tr>
                      <td>13260</td>
                      <td>3</td>
                      <td>2017-02-06 - 2017-06-30</td></tr>
                    <tr>
                      <td>15844</td>
                      <td>3</td>
                      <td>2017-07-01 - 2017-08-31</td></tr>
                    <tr>
                      <td>13260</td>
                      <td>3</td>
                      <td>2017-09-01 - 2017-12-23</td></tr>
                    <tr>
                      <td>19040</td>
                      <td>5</td>
                      <td>2017-12-24 - 2018-01-07</td></tr>
                  </tbody>
                </table>
                <div class="bz-cont">备注：此房价为5卧室的价格10位客人。
                  <a href="javascript:void(0);">【查看所有时段价格 + 】</a></div>
              </div>
              <table class="fy-tab" border="0">
                <tr>
                  <td width="200">地方税：</td>
                  <td>7.7%</td></tr>
                <tr class="even">
                  <td width="200">服务费：</td>
                  <td>10%</td></tr>
                <tr>
                  <td>成人加床费：</td>
                  <td>
                    <p class="price">¥
                      <b>408（不含服务费，不参与优惠）</b>
                    </p>
                  </td>
                </tr>
                <tr class="even">
                  <td>儿童加床费：</td>
                  <td>
                    <p class="price">¥
                      <b>204（不含服务费，不参与优惠）</b>
                    </p>
                  </td>
                </tr>
              </table>
              <p class="tk-cont">
                <span>儿童条款：</span>１３岁以上即视为成人； 每间房最多可容纳２名３岁以下的儿童； ３岁以下儿童可免费提供婴儿床； ４岁－１２岁之间的儿童加床费用每晚３０美金＋＋</p>
              <p class="tk-cont">
                <span>预订/取消条款：</span>淡季：于入住前72小时之内取消，收取1晚的房费；于入住前24小时之内取消，收取100%房费 旺季：于入住前14天之内取消，收取1晚的房费；于入住前72小时之内取消，收取100%房费 高峰季：于入住前90天之内取消，收取100%房费</p></div>
            <!--价格&条款结束-->
            <!--别墅位置开始-->
            <div class="dtitle Lcfx bswz-tit">
              <i class="ic bswz">&#x1302;</i>别墅位置</div>
            <div class="detail-map Lmt20 floor-index">
              <div id="map-canvas" style="height:302px;width:798px;"></div>
              <p class="text">距离苏梅国际机场（Samui Airport） 4.2km 距离查汶海滩 （Beach Chaweng） 9km</p></div>
            <!--别墅位置结束-->
            <!--别墅评价开始-->
            <a name="bspj-tit"></a>
            <div class="dtitle Lcfx bspj-tit Cslides">
              <i class="ic bspj">&#x1303;</i>别墅评价(4)</div>
            <div class="dyq">
              <span>写下入住体验，赢取100元抵用券！</span></div>
            <div class="detail-app Lmt10 Lcfx floor-index">
              <div class="Lcfx Lmt10">
                <div class="star-box Lfll" data-num="3.5">综合评分</div>
                <div class="Lfll star-default">
                  <div class="Lfll star-orange" style="width: 100%"></div>
                </div>
                <div class="Lfll">&nbsp;&nbsp;&nbsp;
                  <span class="score">5.0</span>
                  <span></span>
                </div>
              </div>
              <div class="Lcfx Lmt10 ">
                <div class="Lfll Lmr10">别墅设施
                  <span class="score">5.0</span></div>
                <div class="Lfll Lmr10">别墅服务
                  <span class="score">5.0</span></div>
                <div class="Lfll Lmr10">餐饮服务
                  <span class="score">5.0</span></div>
                <div class="Lfll Lmr10">交通位置
                  <span class="score">5.0</span></div>
              </div>
            </div>
            <div class="detail-app Lmt10">
              <ul>
                <li>
                  <div class="com-top">
                    <i class="rx-icon">
                      <img src="http://statics.hivilla.com//uploads/headimg/9.png" class="avatar"></i>
                    <span class="hes">唐*</span>
                    <span class="hus">2016-02-16 00:00:00</span></div>
                  <div class="yhlf-bg">
                    <div class="yhrt-bg">
                      <p>当地的活动需要深入调研一下，欧美人为主的活动场地品质比较高。同样是ATV，中国人集中的地方服务品质要差一截。这样能推荐更加合适的活动提供商给客人。</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-big-img">
                      <span class="arrow-bar arrow-l"></span>
                      <span class="arrow-bar arrow-r"></span>
                      <img src="" title="缩小" /></div>
                  </div>
                </li>
                <li>
                  <div class="com-top">
                    <i class="rx-icon">
                      <img src="http://statics.hivilla.com//uploads/headimg/11.png" class="avatar"></i>
                    <span class="hes">j**********om</span>
                    <span class="hus">2015-02-20 04:10:39</span></div>
                  <div class="yhlf-bg">
                    <div class="yhrt-bg">
                      <p>这里有最好的阳光和沙滩，在这我们享受了从未经历过的、置身天堂般的体验。强烈推荐情侣来这！</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-big-img">
                      <span class="arrow-bar arrow-l"></span>
                      <span class="arrow-bar arrow-r"></span>
                      <img src="" title="缩小" /></div>
                  </div>
                </li>
                <li>
                  <div class="com-top">
                    <i class="rx-icon">
                      <img src="http://statics.hivilla.com//uploads/headimg/6.png" class="avatar"></i>
                    <span class="hes">d**********com</span>
                    <span class="hus">2014-09-25 11:56:30</span></div>
                  <div class="yhlf-bg">
                    <div class="yhrt-bg">
                      <p>到了萨穆嘉纳别墅群，潜水运动爱好者一定要去龟岛！很近。</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-big-img">
                      <span class="arrow-bar arrow-l"></span>
                      <span class="arrow-bar arrow-r"></span>
                      <img src="" title="缩小" /></div>
                  </div>
                </li>
                <li>
                  <div class="com-top">
                    <i class="rx-icon">
                      <img src="http://statics.hivilla.com//uploads/headimg/4.png" class="avatar"></i>
                    <span class="hes">d**********n.com</span>
                    <span class="hus">2014-08-19 01:26:57</span></div>
                  <div class="yhlf-bg">
                    <div class="yhrt-bg">
                      <p>我们在这里度过了极其美妙的时光，感觉是如此的宁静而且清爽，更不要那些美味的食物，还有这里的服务生实在是的太好了</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-big-img">
                      <span class="arrow-bar arrow-l"></span>
                      <span class="arrow-bar arrow-r"></span>
                      <img src="" title="缩小" /></div>
                  </div>
                </li>
              </ul>
              <div class="page-list" date-page-now="1" date-page-all="1"></div>
              <div class="my-pl">
                <p>您的评价：</p>
                <div class="Lcfx" style="margin: 0px 0 15px 70px;display:none">
                  <div class="Lfll pj-star" dt-value="bsss">别墅设施
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                  <div class="Lfll pj-star" dt-value="bsfw">别墅服务
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                  <div class="Lfll pj-star" dt-value="cyfw">餐饮服务
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                  <div class="Lfll pj-star" dt-value="jtwz">交通位置
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                  <div class="Lfll pj-star" dt-value="kfrd">客服接待
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                  <div class="Lfll pj-star" dt-value="xctx">行程提醒
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star star-active"></div>
                    <div class="Ldib star"></div>
                    <div class="Ldib star"></div>
                  </div>
                </div>
                <input type="hidden" value="" id="login_user_id">
                <span>评论请先
                  <a href="javascript:void(0);" class="login-btn">登录</a>，或
                  <a href="javascript:void(0);" class="reg-btn">注册</a></span>
                <div class="textarea">
                  <textarea placeholder="点评赢取积分，留下您对珠海正和国际旅行别墅的度假体验吧" tabindex="1" autocomplete="off" name="content" accesskey="u" id="top_textarea"></textarea>
                </div>
                <!--***************上传模块******************************file**********************************************************************************-->
                <div class="fbplBtn">
                  <a href="javascript:void(0);">发表评论</a></div>
              </div>
            </div>
            <input type="hidden" name="hid_refreshtoken" id="hid_refreshtoken" value="3021dc4c4c01bbf527e8395fb397c312" />
            <!--别墅评价结束-->
            <div class="Lpb10">&nbsp;</div></div>
          <div class="jg-right Lflr">
            <div class="jg-right">
              <div class="d-Icon-r">
                <div class="d-icon">
                  <a href="javascript:void(0);" class="favorite" title="想去"></a>
                  <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
                    <a href="javascript:void(0);" class="bds_more share" title="共享"></a>
                  </div>
                  
                </div>
                <div class="immbook container-pr icon-hd-hover ">立即预订
                  <!-- 实时房态标记 开始 -->
                  <div class="hidden">
                    <i class="icon-hd icon-hd-w"></i>
                    <div class="hd-notice">
                      <p>即时预订</p>
                      <p>无需等待客服确认即可付款完成预订</p>
                    </div>
                  </div>
                  <!-- 实时房态标记 结束 --></div>
              </div>
              <div class="js-box">
                <div class="feature-left">
                  <div class="feature-right">
                    <p title="在阳光躺椅上享受日光浴，眺望辽阔大海。">在阳光躺椅上享受日光浴，眺望辽阔大海。</p></div>
                </div>
                <ul>
                  <li class="bg-h">
                    <span>海景</span>景观：</li>
                  <li class="bg-b">
                    <span>商务, 蜜月, 婚礼, 家庭</span>主题：</li>
                  <li class="bg-h">
                    <span>奢华, 现代</span>风格：</li>
                  <li class="bg-b">
                    <span>5卧室，6浴室</span>规格：</li>
                  <li class="bg-h">
                    <span>10人</span>可住人数：</li>
                  <li class="bg-b">
                    <span>15:00后/12:00前</span>入住/退房时间：</li>
                  <li class="bg-h">
                    <a href="javascript:void(0);" class="facility-btn">更多</a>
                    <span class="icon">
                      <i title="泳池">
                        <img alt="泳池" src="http://file.hivilla.com/uploads/picture/icon/20140505190351qAGMBm.png" /></i>
                      <i title="健身房">
                        <img alt="健身房" src="http://file.hivilla.com/uploads/picture/icon/20140505190417sYoAeT.png" /></i>
                      <i title="餐厅">
                        <img alt="餐厅" src="http://file.hivilla.com/uploads/picture/icon/20140505190509ujctCM.png" /></i>
                      <i title="花园">
                        <img alt="花园" src="http://file.hivilla.com/uploads/picture/icon/20140505191729vAAhQt.png" /></i>
                      <i title="阳光躺椅与遮阳伞">
                        <img alt="阳光躺椅与遮阳伞" src="http://file.hivilla.com/uploads/picture/icon/20140505193200USNWzR.png" /></i>
                    </span>设施：</li>
                  <li class="bg-b">
                    <a href="javascript:void(0);" class="server-btn">更多</a>
                    <span class="icon">
                      <i title="女佣">
                        <img alt="女佣" src="http://file.hivilla.com/uploads/picture/icon/20140505185109lBuHIQ.png" /></i>
                      <i title="机场接送">
                        <img alt="机场接送" src="http://file.hivilla.com/uploads/picture/icon/20140505185300VeOOUG.png" /></i>
                      <i title="私人厨师">
                        <img alt="私人厨师" src="http://file.hivilla.com/uploads/picture/icon/20140505185321eVSoec.png" /></i>
                      <i title="按摩服务">
                        <img alt="按摩服务" src="http://file.hivilla.com/uploads/picture/icon/20140505185413cmQxKC.png" /></i>
                      <i title="保安">
                        <img alt="保安" src="http://file.hivilla.com/uploads/picture/icon/20140505185510edVfqf.png" /></i>
                    </span>服务：</li>
                </ul>
              </div>
              <div class="data-fiexd">
                <div class="Date-box">
                  <span class="qz">入住日期</span>
                  <div class="dateinput">
                    <input id="start" type="text" placeholder="年-月-日" class="start" readonly ></div>
                  <span class="lk">退房日期</span>
                  <div class="dateinput">
                    <input id="start1" type="text" placeholder="年-月-日" class="start" readonly></div>
                  <span class="jg">卧室规格</span>
                  <div class="room-c Lcfx">
                    <span id='bedroom_show' data-val='5' data-flag='1' date_diff='3' data-standard='10'>5间卧室， 5卧室，可容纳10人</span>
                    <div>
                      <b>
                      </b>
                    </div>
                    <ul class="room-c-list">
                      <li data-val="5" data-flag="1" data-standard="10" date_diff="3">5间卧室， 5卧室，可容纳10人</li></ul>
                  </div>
                  <div class="Ltac price Lovh Lmt10">
                    <span style="float: left;">房费</span>
                    <span id="cost" style="float: right;">¥0</span></div>
                  <div class="Ltac price Lovh Lmt10">
                    <span style="float: left;">服务费</span>
                    <span id="service" style="float: right;">¥0</span></div>
                  <div class="Ltac price Lovh Lmt10">
                    <span style="float: left;">税费</span>
                    <span id="tax" style="float: right;">¥0</span></div>
                  <div class="Ltac price Lovh Lmt10" style="border-bottom:1px solid gray;">
                    <span style="float: left;">清洁费</span>
                    <span id="clean_price" style="float: right;">¥0</span></div>
                  <div class="Ltac price Lovh Lmt10">
                    <span style="float: left;">总价</span>
                    <span id="total" style="float: right;">¥0</span>
                    <span id="total_original" style="text-decoration:line-through;float: right;margin-right: 10px;color: orange"></span>
                  </div>
                  <div class="price_cal_notice" id="price_cal_notice"></div>
                  <div class="Ltac Lmt10" style="color:#ff8000;">*该价格为标准价格计算，如有其它收费服务项或存在折扣活动，价格会有调整</div>
                  <div class="Ltac Lmt10">
                    <!-- <button class="Cbtn_small_yellow style2" id="seek-btn"><i class="icon2"></i>咨询我们</button> 
                    <button class="Cbtn_small_yellow style21" id="order-btn"><i class="icon3"></i>立即预订</button>  -->
                    <div class="gotobook" id="order-btn">立即预订</div></div>
                </div>
                <div class="Lpb10">&nbsp;</div></div>
            </div>
          </div>
        </div>
        <!--内页中间内容结束-->
        <div id="fixed-menu">
          <div class="wp">
            <div class="detail-type Lmt10 Lfll">
              <ul class="items Lcfx">
                <li class="cur">
                  <a href="javascript:void(0);">
                    <i class="ic bsyl">&#x1304;</i>别墅总览</a></li>
                <li>
                  <a href="javascript:void(0);" class="plr13">
                    <i class="ic ssfw">&#x1306;</i>设施&服务</a></li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="ic jgtk">&#x1305;</i>价格&条款</a></li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="ic bswz">&#x1302;</i>别墅位置</a></li>
                <li>
                  <a href="javascript:void(0);">
                    <i class="ic bspj">&#x1303;</i>别墅评价</a></li>
              </ul>
            </div>
            <div class="jg-right Lflr">
              <div class="d-Icon-r">
                <div class="d-icon">
                  <a href="javascript:void(0);" class="favorite" title="想去"></a>
                  <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
                    <a href="javascript:void(0);" class="bds_more share" title="共享"></a>
                  </div>
                  <!--<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><span class="bds_more"></span></div>-->
                  
                </div>
                <div class="immbook">立即预订</div></div>
            </div>
          </div>
        </div>
        <!--您可能还喜欢开始-->
        <div class="like-wp">
          <div class="wp like-cont">
            <h2>您可能还喜欢...</h2>
            <div class="like-items" id="likeCont">
              <a href="" class="arr-btn prev"></a>
              <a href="" class="arr-btn next"></a>
              <div class="items">
                <ul class="Lcfx">
                  <li>
                    <a title="苏梅岛四季度假村" href="/villa/3542_fourseasonsresortkohsamui">
                      <img alt="苏梅岛四季度假村" src="http://image02.hivilla.com/uploads/destination/article/3/3542/thumb.18.jpg" /></a>
                    <p class="tit">
                      <a title="苏梅岛四季度假村" href="/villa/3542_fourseasonsresortkohsamui">苏梅岛四季度假村</a></p>
                    <b>泰国 苏梅岛</b>
                  </li>
                  <li>
                    <a title="天幕别墅" href="/villa/1609_villaskyfall">
                      <img alt="天幕别墅" src="http://image01.hivilla.com/uploads/destination/article/1/1609/thumb.0.jpg" /></a>
                    <p class="tit">
                      <a title="天幕别墅" href="/villa/1609_villaskyfall">天幕别墅</a></p>
                    <b>泰国 苏梅岛</b>
                  </li>
                  <li>
                    <a title="帕安娜别墅" href="/villa/1583_praanaresidence">
                      <img alt="帕安娜别墅" src="http://image02.hivilla.com/uploads/destination/article/1/1583/thumb.39.jpg" /></a>
                    <p class="tit">
                      <a title="帕安娜别墅" href="/villa/1583_praanaresidence">帕安娜别墅</a></p>
                    <b>泰国 苏梅岛</b>
                  </li>
                  <li>
                    <a title="萨穆嘉纳12号别墅" href="/villa/1370_samujanavilla12">
                      <img alt="萨穆嘉纳12号别墅" src="http://image02.hivilla.com/uploads/destination/article/1/1370/thumb.9.jpg" /></a>
                    <p class="tit">
                      <a title="萨穆嘉纳12号别墅" href="/villa/1370_samujanavilla12">萨穆嘉纳12号别墅</a></p>
                    <b>泰国 苏梅岛</b>
                  </li>
                  <li>
                    <a title="迪加别墅" href="/villa/1981_villatiga">
                      <img alt="迪加别墅" src="http://image01.hivilla.com/uploads/destination/article/1/1981/thumb.21.jpg" /></a>
                    <p class="tit">
                      <a title="迪加别墅" href="/villa/1981_villatiga">迪加别墅</a></p>
                    <b>泰国 苏梅岛</b>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--咨询弹框-->
        <div class="Cdialog Cconsult_dialog zxDialog Ldn">
          <a href="javascript:void(0);" class="close"></a>
          <div class="Lcfx">
            <div class="larea Lfll">
              <div class="limg">
                <img alt="萨穆嘉纳26号别墅" src="http://statics.hivilla.com/uploads/destination/article/1/1958/0.jpg" class="Ldb"></div>
              <div class="info Ltac Lovh">
                <h3 class="Lmt10" title="萨穆嘉纳26号别墅">萨穆嘉纳26号别墅</h3>
                <p>泰国 苏梅岛 曾蒙</p>
              </div>
            </div>
            <div class="rarea Lfll Lpt20">
              <h3></h3>
              <p>
              </p>
              <form action="/web/user/inquire" method="POST" novalidate="novalidate">
                <input type="hidden" name="product_id[]" value="1958">
                <input type="hidden" name="Inquire[user_id]" value="0">
                <input type="hidden" name="villa_name" value="萨穆嘉纳26号别墅">
                <span class="msg err"></span>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <input name="Inquire[user_name]" type="text" placeholder="*姓名" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                  <div class="inputbox Lflr">
                    <input name="Inquire[user_email]" type="text" placeholder="*Email地址" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <input name="Inquire[user_phone]" type="text" placeholder="*手机号码" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <div class="Lmr10 Cdateinput Lcfx">
                      <input id="inquireus_start" placeholder="入住时间" name="Inquire[start_date]" class="dinput input2 Lfll no_global_datepicker"></div>
                    <span class="msg err"></span>
                  </div>
                  <div class="inputbox Lflr">
                    <div class="Cdateinput Lcfx">
                      <input id="inquireus_end" placeholder="退房时间" name="Inquire[end_date]" class="dinput input2 Lfll no_global_datepicker"></div>
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="item">
                  <div class="inputbox">
                    <textarea name="Inquire[user_message]" placeholder="您有任何疑问，请留言给我们，我们将竭诚为您提供最专业的解答" class="tarea1"></textarea>
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="bottom Ltac">
                  <div>
                    <button type="submit" class="Cbtn_small_yellow style3">发送</button></div>
                  <p class="Lmt15">想要通话了解更多别墅信息？请马上致电我们吧！
                    <br>400-9600-080</p></div>
              </form>
            </div>
          </div>
        </div>
        <!--预订弹框-->
        <div class="Cdialog  Cconsult_dialog orderDialog Ldn">
          <a href="javascript:void(0);" class="close"></a>
          <div class="Lcfx">
            <div class="larea Lfll">
              <div class="limg">
                <img alt="萨穆嘉纳26号别墅" src="http://statics.hivilla.com/uploads/destination/article/1/1958/0.jpg" class="Ldb"></div>
              <div class="info Ltac Lovh">
                <h3 class="Lmt10" title="萨穆嘉纳26号别墅">萨穆嘉纳26号别墅</h3>
                <p>泰国 苏梅岛 曾蒙</p>
              </div>
            </div>
            <div class="rarea Lfll Lpt10">
              <h3>预订信息</h3>
              <p>请填写以下有效预订信息：</p>
              <form id="book_form" action="/web/user/placeorder" method="POST" novalidate="novalidate">
                <input id="book_product_id" type="hidden" name="book_product_id" value="1958">
                <input id="book_user_id" type="hidden" name="book_user_id" value="">
                <input id="book_villa_name" type="hidden" name="book_villa_name" value="萨穆嘉纳26号别墅">
                <span class="msg err"></span>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <input id="book_user_name" name="book_user_name" type="text" placeholder="*姓名" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                  <div class="inputbox Lflr">
                    <input id="book_user_email" name="book_user_email" type="text" placeholder="*Email地址" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <input id="book_user_phone" name="book_user_phone" type="text" placeholder="*手机号码" class="input1" value="">
                    <span class="msg err"></span>
                  </div>
                </div>
                <div class="item Lcfx">
                  <div class="inputbox Lfll">
                    <div class="Lmr10 Cdateinput Lcfx">
                      <input id="book_start" placeholder="*入住时间" name="book_start_date" class="dinput input2 Lfll no_global_datepicker">
                    </div>
                    <span class="msg err"></span>
                  </div>
                  <div class="inputbox Lflr">
                    <div class="Cdateinput Lcfx">
                      <input id="book_end" placeholder="*退房时间" name="book_end_date" class="dinput input2 Lfll no_global_datepicker">
                    </div>
                    <span class="msg err"></span>
                  </div>
                </div>
                <p>*2岁以下儿童可以与两成人同住</p>
                <div class="item">
                  <div class="select-c Lcfx select-c-b">
                    <font>*房型：</font>
                    <span data-val="0" id="room-type" data-flag="1">请选择房型</span>
                    <div>
                      <b>
                      </b>
                    </div>
                    <ul class="select-c-list">
                      <li data-val="5" data-flag="1" data-standard="10">5间卧室 5卧室，可容纳10人</li></ul>
                    <input type="hidden" name="book_flag" id="book_flag" />
                    <input type="hidden" name="book_bedroom" id="book_bedroom" />
                    <input type="hidden" name="book_standard" id="book_standard" />
                    <input type="hidden" name="book_adult" id="book_adult" />
                    <input type="hidden" name="book_child" id="book_child" /></div>
                  <div class="select-c Lcfx Lml10">
                    <font>成人：</font>
                    <span data-val="1" id="span-val">1</span>
                    <div>
                      <b>
                      </b>
                    </div>
                    <ul class="select-c-list">
                      <li data-val="1">1</li>
                      <li data-val="2">2</li>
                      <li data-val="3">3</li>
                      <li data-val="4">4</li>
                      <li data-val="5">5</li>
                      <li data-val="6">6</li>
                      <li data-val="7">7</li>
                      <li data-val="8">8</li>
                      <li data-val="9">9</li>
                      <li data-val="10">10</li>
                      <li data-val="11">11</li></ul>
                  </div>
                  <div class="select-c Lcfx Lml10">
                    <font>儿童：</font>
                    <span data-val="0">0</span>
                    <div>
                      <b>
                      </b>
                    </div>
                    <ul class="select-c-list">
                      <li data-val="0">0</li>
                      <li data-val="1">1</li>
                      <li data-val="2">2</li>
                      <li data-val="3">3</li>
                      <li data-val="4">4</li>
                      <li data-val="5">5</li>
                      <li data-val="6">6</li>
                      <li data-val="7">7</li>
                      <li data-val="8">8</li>
                      <li data-val="9">9</li>
                      <li data-val="10">10</li>
                      <li data-val="11">11</li></ul>
                  </div>
                </div>
                <div class="sumPriceCon">
                  <div style="color:red; margin-top:-5px;margin-bottom: 5px;position: fixed;" id="booking_price_notice"></div>
                  <p>
                    <span>总价：</span>￥
                    <b id="sum-price">0</b>
                    <span>·</span>
                    <span class="f14">
                      <i>0</i>晚</span>
                    <span class="f12">（价格中已算入服务费和税）</span></p>
                </div>
                <div class="bottom Ltac">
                  <div>
                    <button type="submit" class="Cbtn_small_yellow style3"><a href="fukuan.html" style="color:white">下一步</a></button></div>
                  <p class="Lmt15">*如有任何问题请致电：
                    <br>400-9600-080</p></div>
                <input type="hidden" name="book_token" id="book_token" value="46d0445ce8ed85a1fedf651fec9022cb" />
              </form>
              <input type="hidden" id="count-url" value="http://www.senseluxury.com/web/destination/countcost" /></div>
          </div>
        </div>
        <div class="dt-loading hidden">正在加载数据...请稍后</div>
        <input type="hidden" id="extend_code" value="">
        <input type="hidden" id="source" value="166">
        <input type="hidden" id="first_day_of_month" value="2016-12-1">
        <input type="hidden" id="first_day_of_next_month" value="2017-01-1">


		<div class="side-bar" id="side-bar">
          <div class="right-line"></div>
          <ul class="items">
            <li class="zxzixun">
              <a target="_blank" href="https://chat32.live800.com/live800/chatClient/chatbox.jsp?companyID=494672&configID=72861&jid=8286288351&s=1" class="zx" id="live800iconlink" rel="nofollow">
                <div class="svgcustomer"></div>
                <p>在线
                  <br/>客服</p></a>
            </li>
            <li class="weixin">
              <a href="javascript:void(0);" rel="nofollow">
                <div class="svgqr"></div>
                <p>扫描
                  <br/>咨询</p></a>
              <div class="list qrcode" style="display:none;">
                <div>
                  <img src="<?php echo $baseUrl?>/img/wx_qrcode.png" width="136" height="136" /></div>
              </div>
            </li>
            <li>
              <a href="javascript:void(0);" rel="nofollow">
                <div class="svgtel"></div>
                <p>客服
                  <br/>热线</p></a>
              <div class="list tel" style="display:none;">
                <div>400-9600-080</div></div>
            </li>
            <li class="goTop">
              <a href="javascript:void(0);" class="go" rel="nofollow">
                <div class="svgtotop"></div>
                <p>回到
                  <br/>顶部</p>
                <div class="list">
                  <div>
                    <div class="arrow"></div>
                  </div>
                </div>
              </a>
            </li>
            <li class="survey">
              <a target="_blank" href="https://sojump.com/jq/10393033.aspx" rel="nofollow">
                <div class="svgsurvey"></div>
                <p>有奖
                  <br/>问卷</p></a>
              <div class="list tel" style="display:none;">
                <div>填问卷，领抵用券</div></div>
            </li>
          </ul>
        </div>


<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
    
	editormd.markdownToHTML("markdown-view", {
    	htmlDecode: "style,script,iframe"
	});

    
    var COMMON_MESSAGE = {
            'favorate': "我想去",
    }
    var MESSAGE = {
            'show_more_details': '查看全部介绍',
            'show_less_details': '收起全部介绍',
            'show_more_rates': '查看所有时段价格',
            'show_less_rates': '收起所有时段价格',
            'house_status_busy': '您选择的日期包含无房状态，请选择其他日期或别墅',
            'prompts': '提示：您预订的期间最短入住天数要求为',
            'prompts_one': '天，小于该天数将无法预订成功',
          };

          var FORMDATA = {
            timestamp: "1481979827",
            token: "b346766acb7b531cf7dcbbbbfedc2a4b",
            pid: "1958",
            refreshtoken: "3021dc4c4c01bbf527e8395fb397c312"
          };

   	var pageID = 'detail';
    if ('default' == pageID) {
        senseluxuryFed.loadIndexFun();
    } else if ('detail' == pageID || 'bankDetail' == pageID) {
        senseluxuryFed.loadDetailFun();
    } else if ('fqa' == pageID) {
        senseluxuryFed.loadFqaFun();
    } else {
        senseluxuryFed.loadListFun();
    }


	//google map
    var id_timer = window.setInterval(function() {
        if (typeof jQuery != 'undefined') {

          window.clearInterval(id_timer);
          $.getScript("http://ditu.google.cn/maps/api/js?v=3.exp&sensor=false", g_callback);
        }
      },
      100);

      function g_callback() {
        var geocoder = new google.maps.Geocoder();
        var map, marker;

        function initialize() {

          var longitude = '100.0853802031278974';
          var latitude = '9.5610748729689181';

          var latLng = new google.maps.LatLng(latitude, longitude);
          map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 16,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          marker = new google.maps.Marker({
            position: latLng,
            title: "萨穆嘉纳26号别墅",
            icon: "<?php echo $baseUrl?>/img/pointer.png?t=121509",
            map: map,
            draggable: false
          });
        }
        // 加载载应用程序。
        google.maps.event.addDomListener(window, 'load', initialize);
      }


	//侧边栏
      var $sideCont = $('#side-bar'),
      $window = $(window),
      winH = $window.height();

      $sideCont.find('.items li').hover(function() {
        var $this = $(this);
        $this.find('.list').show();
      },
      function() {
        var $this = $(this);
        $this.find('.list').hide();
      });
      $window.scroll(function() {
        var scrTop = $(window).scrollTop();
        var topbar = parseInt($('.IN_main').css('height'));
        var winhei = parseInt($(window).height());
        if (scrTop < topbar) {
          $('#side-bar').css('display', 'none');
        } else {
          $('#side-bar').css('display', 'block');
          $('#side-bar').css('z-index', 10);
        }
        if (scrTop > winhei) {
          $sideCont.find('.goTop').show();
        } else {
          $sideCont.find('.goTop').hide();
        }
      });
      $sideCont.find('.items').on('click', '.goTop a',
      function() {
        $('html,body').animate({
          scrollTop: 0
        },
        500);
      });

      
      var starObj = {};
      $(".pj-star").on("click", ".star",
      function(e) {
        var p_n = $(this).parent().attr("dt-value") //$(".pj-star").index();
        var index = $(this).parent().children().index(this);
        starObj[p_n] = index + 1;
        console.log(starObj) ;
        $(this).parent().children().removeClass("star-active");
        for (var i = 0; i <= index; i++) {
          $(this).parent().children().eq(i).addClass("star-active");
        }
      })

  <?php $this->endBlock() ?>
  </script>

<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>