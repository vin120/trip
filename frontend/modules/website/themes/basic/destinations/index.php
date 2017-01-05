<?php
	$this->title = '度假屋查询，预订';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>


<style>
.defList{ padding:0.875rem; padding-bottom:0; position:absolute; width:332px!important; border:none!important; left:0!important; background-color:#ffffff; z-index:500; display:none; } 
.defList div{ height:2rem; border-bottom:1px solid #dddddd; } 
.defList div img{ float:left; height:1rem; margin:0.5rem; margin-left:0; } 
.defList div.hot img{ margin:0.5rem 0.6rem 0.5rem 0.1rem; } 
.defList div span{ float:left; line-height:2rem; color:#888888; font-size:0.75rem; } 
.defList .history b{ float:right; line-height:2rem; font-weight:normal; color:#ff8000; } 
.defList .history b:hover{ cursor:pointer; } .defList ul{ overflow:hidden; padding:0.35rem 0!important; } 
.defList ul li{ line-height:1.5rem; width:100%; margin-left:1.4rem!important; } 
.defList ul li span{ font-size:0.875rem!important; display:inline-block; } 
.defList ul li b{ font-size:0.75rem!important; color:#888888; font-weight:normal; display:inline-block; } 
.defList ul li span:hover{ cursor:pointer; color:#ff8000; } 
.defList ul li b:hover{ cursor:pointer; } 
.defList p{ margin-left:1.4rem!important; line-height:1.5rem; padding:0.5rem 0!important; } 
.defList p span{ margin-right:10px; font-size:0.875rem; display:inline-block; } 
.defList p span:hover{ color:#ff8000; cursor:pointer; } 
.D1main ul .li1 input{ width:270px!important; } 
.D1main ul .li1 b.clear{ width:30px; font-size:20px; color:#888888; display:none; font-weight:normal } 
.D1main ul .li1 b.clear:hover{ cursor:pointer; } 
.check-ctn{ margin-left:0.5rem; margin-top:0.5rem; width: 5rem; height:1.2rem; position: relative; } 
.check-ctn input { visibility:hidden; } 
.check-ctn label.icon{ cursor: pointer; position: absolute; width: 0.8rem; height: 0.8rem; top: 0; left: 0; background: #ffffff; border:1px solid #aaaaaa; } 
.check-ctn label.filterspan{ position:relative; bottom:0.2rem; cursor: pointer; height: 1.2rem; line-height: 1.2rem; } 
.check-ctn label.icon>span{ display:none; content: ''; position: absolute; width: 7px; height: 4px; background: transparent; top: 2px; left: 2px; border: 2px solid #aaaaaa; border-top: none; border-right: none; -webkit-transform: rotate(-45deg); -moz-transform: rotate(-45deg); -o-transform: rotate(-45deg); -ms-transform: rotate(-45deg); transform: rotate(-45deg); }
</style>

 		<div class="D1Search">
          <div class="D1main">
            <ul>
              <li class="li1 des-input">
                <i class="bg iconfont-home">&#xe61a;</i>
                <input type="input" autocomplete="off" placeholder="泰国" data-valname="泰国" value="泰国" placeholder="目的地/别墅" data-valname="目的地/别墅" class="txt-input" id="AutoSearch" style="border: medium none;" data-type="2" data-id="2" data-FBColor='#ff9b14'>
                <b class="clear">&times;</b>
                <div class="defList">
                  <div class="history">
                    <img src="<?php echo $baseUrl?>/img/history.png" />
                    <span>历史搜索</span>
                    <b id="clear_history">清空历史记录</b></div>
                  <ul></ul>
                  <div class="hot">
                    <img src="<?php echo $baseUrl?>/img/hot.png" />
                    <span>热门目的地</span></div>
                  <p>
                    <span data-id=2 5 data-type="2">苏梅岛</span>
                    <span data-id=7 7 data-type="2">巴黎</span>
                    <span data-id=8 5 data-type="2">巴厘岛</span>
                    <span data-id=6 06 data-type="2">洛杉矶</span>
                    <span data-id=6 57 data-type="2">皇后镇</span>
                    <span data-id=7 62 data-type="2">伦敦</span>
                    <span data-id=2 6 data-type="2">普吉岛</span>
                    <span data-id=6 47 data-type="2">马尔代夫</span></p>
                </div>
              </li>
              <li class="li2">
                <i class="bg iconfont-home">&#xe619;</i>
                <input class="txt-input" type="text" " name="" placeholder="入住日期" id="rz_time_start" /></li>
              <li class="li3">
                <i class="bg iconfont-home">&#xe619;</i>
                <input class="txt-input" type="text" name=""  placeholder="退房日期" id="rz_time_end" /></li>
              <li class="li4" id="people_numb">
                <i class="bg iconfont-home">&#xe618;</i>
                <input class="txt-input" type="text" name="" placeholder="入住人数" data-valname="入住人数" />
                <div class="people-select">
                  <a type="0">不限</a><a type="1">1</a><a type="2">2</a><a type="3">3</a><a type="4">4</a><a type="5">5</a><a type="6">6</a><a type="7">7</a><a type="8">8</a><a type="9">9</a><a type="10">10</a><a type="11">10+</a>
                </div>
              </li>
              <li class="li5 search-btn">
                <input class="btn" type="button" name="" value="搜 索" /></li>
            </ul>
            <!-- <div class="ll_input_tip">请输入城市名字</div>-->
		</div>
        </div>
        
        
        
  <div class="inner-bg" style="padding-top: 0;">
          <div class="like-wp" style="background-color:#eeeeee;padding: 48px 0 16px;">
            <div class="wp like-cont">
              <div style="margin: -35px 0 10px;color: orange;font-size: 18px;">泰国热卖 HOT!!</div>
              <div class="like-items" id="likeCont">
                <a href="" class="arr-btn prev"></a>
                <a href="" class="arr-btn next"></a>
                <div class="items">
                  <ul class="Lcfx">
                    <li style="display:none;">
                      <a>
                      </a>
                      <p class="tit"></p>
                      <b>
                      </b>
                    </li>
                    <li>
                      <a target="_blank" title="泰国-热卖-月影别墅-Villa Moonshadow" href="/villa/1498_villamoonshadow">
                        <img alt="月影别墅-Villa Moonshadow" src="http://image01.hivilla.com/uploads/destination/article/1/1498/thumb.15.jpg?villamoonshadow月影别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-月影别墅-Villa Moonshadow" href="/destination_detail/1498">月影别墅</a>
                        <span style="float:right; ">984 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-亚莎别墅-Villa Akasha（SV03）" href="/villa/1500_villaakashasv03">
                        <img alt="亚莎别墅-Villa Akasha（SV03）" src="http://statics.hivilla.com/uploads/destination/article/1/1500/thumb.0.jpg?villaakashasv03亚莎别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-亚莎别墅-Villa Akasha（SV03）" href="/destination_detail/1500">亚莎别墅</a>
                        <span style="float:right; ">930 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-班丽莱别墅-Ban Lealay" href="/villa/70_banlealay">
                        <img alt="班丽莱别墅-Ban Lealay" src="http://image01.hivilla.com/uploads/destination/article/0/70/thumb.0.jpg?banlealay班丽莱别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-班丽莱别墅-Ban Lealay" href="/destination_detail/70">班丽莱别墅</a>
                        <span style="float:right; ">902 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-苏梅莉慕2号别墅-Lime Samui Villa 2" href="/villa/1835_limesamuivilla2">
                        <img alt="苏梅莉慕2号别墅-Lime Samui Villa 2" src="http://image02.hivilla.com/uploads/destination/article/1/1835/thumb.8.jpg?limesamuivilla2苏梅莉慕2号别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-苏梅莉慕2号别墅-Lime Samui Villa 2" href="/destination_detail/1835">苏梅莉慕2号别墅</a>
                        <span style="float:right; ">867 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-苏梅莉慕4号别墅-Villa Zest at Lime Samui" href="/villa/1598_villazestatlimesamui">
                        <img alt="苏梅莉慕4号别墅-Villa Zest at Lime Samui" src="http://image02.hivilla.com/uploads/destination/article/1/1598/thumb.0.jpg?villazestatlimesamui苏梅莉慕4号别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-苏梅莉慕4号别墅-Villa Zest at Lime Samui" href="/destination_detail/1598">苏梅莉慕4号别墅</a>
                        <span style="float:right; ">816 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-茵娅别墅-Baan Hinyai" href="/villa/1541_baanhinyai">
                        <img alt="茵娅别墅-Baan Hinyai" src="http://image02.hivilla.com/uploads/destination/article/1/1541/thumb.0.jpg?baanhinyai茵娅别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-茵娅别墅-Baan Hinyai" href="/destination_detail/1541">茵娅别墅</a>
                        <span style="float:right; ">765 人去过</span></p>
                      <b style="font-size:13px;">泰国 苏梅岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-萨玛尼别墅-Villa Zamani" href="/villa/1298_villazamani">
                        <img alt="萨玛尼别墅-Villa Zamani" src="http://image02.hivilla.com/uploads/destination/article/1/1298/thumb.68.jpg?villazamani萨玛尼别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-萨玛尼别墅-Villa Zamani" href="/destination_detail/1298">萨玛尼别墅</a>
                        <span style="float:right; ">765 人去过</span></p>
                      <b style="font-size:13px;">泰国 普吉岛</b></li>
                    <li>
                      <a target="_blank" title="泰国-热卖-香缇别墅-Shanti at Villas Jivana " href="/villa/1302_shantiatvillasjivana">
                        <img alt="香缇别墅-Shanti at Villas Jivana " src="http://statics.hivilla.com/uploads/destination/article/1/1302/thumb.3.jpg?shantiatvillasjivana香缇别墅"></a>
                      <p class="tit" style="font-size:14px;">
                        <a target="_blank" title="泰国-热卖-香缇别墅-Shanti at Villas Jivana " href="/destination_detail/1302">香缇别墅</a>
                        <span style="float:right; ">732 人去过</span></p>
                      <b style="font-size:13px;">泰国 普吉岛</b></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="wp TM_mbox">
            <div class="in-warp Lcfx" style="border-top:1px solid gray;">
              <div class="tm_left Lfll">
                <!--按条件筛选 开始-->
                <div class="item">
                  <div class="btitle">按条件筛选：</div>
                  <!-- <div class=" check-ctn">
                  <input type = "checkbox" id = "promotion">
                  <label for = "promotion" class = "icon"><span></span></label>
                  <label for = "promotion" class = "filterspan">促销</label></div>   
                  <div class = "check-ctn">                           
                  <input type = "checkbox" id = "realtime">
                  <label for = "realtime" class = "icon"><span></span></label>
                  <label for = "realtime" class = "filterspan">实时房态</label></div> -->
                  <div class="slider_box">
                    <label class="Lpb5 Ldib">价格：
                      <small class="Lfz12">￥0-￥8000+</small></label>
                    <div class="slider" id="slider-range" data-slider-type="min_price" data-slider-max="8000" data-slider-step="100" data-slider-min="0"></div>
                  </div>
                  <div class="slider_box">
                    <label class="Lpb5 Ldib">卧室：
                      <small class="Lfz12">1-10</small></label>
                    <div class="slider" id="slider-range1" data-slider-type="max_bedroom" data-slider-max="10" data-slider-step="1" data-slider-min="1"></div>
                  </div>
                </div>
                <!--按条件筛选 结束-->
                <!--通过以下分类搜索 开始-->
                <div id="posi-fix">
                  <div class="item Lmt20">
                    <div class="btitle">通过以下分类搜索：</div>
                    <div class="class-search">
                      <dl class="sele-items curr noselect">
                        <dt>
                          <i class="icon1"></i>地区</dt>
                        <dd>
                          <a title="苏梅岛-Koh Samui" href="/destinations/25">苏梅岛</a></dd>
                        <dd>
                          <a title="普吉岛-Phuket" href="/destinations/26">普吉岛</a></dd>
                        <dd>
                          <a title="清迈-Chiang Mai" href="/destinations/649">清迈</a></dd>
                        <dd>
                          <a title="华欣-Hua Hin" href="/destinations/695">华欣</a></dd>
                        <dd>
                          <a title="甲米-Krabi" href="/destinations/694">甲米</a></dd>
                        <dd>
                          <a title="曼谷-Bangkok" href="/destinations/950">曼谷</a></dd>
                        <dd>
                          <a title="芭提雅-Pattaya" href="/destinations/715">芭提雅</a></dd>
                        <dd>
                          <a title="沽岛-Koh Kood" href="/destinations/979">沽岛</a></dd>
                        <dd>
                          <a title="小长岛-Koh Yao Noi" href="/destinations/751">小长岛</a></dd>
                      </dl>
                      <dl class="sele-items curr">
                        <dt>
                          <i class="icon1"></i>景观/主题</dt>
                        <dd>
                          <a href="javascript:void(0);" tag_id="187">河景</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="60">海景</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="36">山景</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="193">城市景观</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="9">自然</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="62">园景</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="63">海滩</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="388">码头景观</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="64">悬崖景观</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="139">亲子</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="27">蜜月</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="327">明星名人入住</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="20">商务</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="38">婚礼</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="49">家庭</a></dd>
                        <dd>
                          <a href="javascript:void(0);" tag_id="22">探险</a></dd>
                      </dl>
                    </div>
                  </div>
                  <!--通过以下分类搜索 结束--></div>
              </div>
              <div class="tm_right Lflr">
                <!--选择搜索开始-->
                <div class="search-result-hd Lcfx">
                  <p class="re-text Lfll">
                    <em>东南亚 泰国</em>
                    <b id="total">1 - 15，共353</b>条</p>
                  <div class="sele-hd Lflr">
                    <ul class="items Lcfx">
                      <input type="hidden" id="pageName" value="destinations" />
                      <input type="hidden" id="subId" value="2">
                      <li class="first">排序</li>
                      <li class="price">
                        <a href="javascript:void(0);">推荐排序
                          <i></i>
                        </a>
                        <div class="list">
                          <span data-price="" class="cur">推荐排序</span>
                          <span data-price="e.mini_price asc">价格由低到高</span>
                          <span data-price="e.mini_price desc">价格由高到低</span>
                          <span data-price="p.max_bedroom">卧室数由低到高</span>
                          <span data-price="p.max_bedroom desc">卧室数由高到低</span></div>
                      </li>
                      <li class="map">
                        <a href="javascript:void(0);">地图</a></li>
                    </ul>
                  </div>
                </div>
                <!--选择搜索结束-->
                <!--搜索结果列表开始-->
                <div class="search-result-cm">
                  <ul class="items-list extra-item">
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853802031278974|9.5610748729689181" />
                      <a target="_blank" class="tag t_l" href="/villa/1958_samujanavilla26#bspj-tit" title="评论（4）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;4
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（51）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;51
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳26号别墅Samujana Villa 26 别墅预订，主题度假在线预订" href="/villa/1958_samujanavilla26" class="pic">
                        <img alt="萨穆嘉纳26号别墅Samujana Villa 26" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/1/1958/0.jpg#samujanavilla26萨穆嘉纳26号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳26号别墅Samujana Villa 26," href="/villa/1958_samujanavilla26">萨穆嘉纳26号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">5 卧室 ，6 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳26号别墅Samujana Villa 26 别墅预订" href="/villa/1958_samujanavilla26" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1958" class="icon favorite"></a>
                          <p class="price">￥20362/
                            <small>晚起</small>
                            <span price="2990--2800--6.81--1--5--5">人均 ￥2037 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                      <a href="javascript:void(0)">
                        <div class="panorama">
                          <span>全景</span></div>
                      </a>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="98.2741057833671903|8.2865685978645214" />
                      <a target="_blank" class="tag t_l" href="/villa/1902_inialabeachhousevillabianca#bspj-tit" title="评论（4）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;4
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（62）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;62
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 比安卡别墅Iniala Beach House - Villa Bianca 别墅预订，主题度假在线预订" href="/villa/1902_inialabeachhousevillabianca" class="pic">
                        <img alt="比安卡别墅Iniala Beach House - Villa Bianca" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/1/1902/16.jpg#inialabeachhousevillabianca比安卡别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,普吉岛, 纳泰海滩度假、旅游，就在 第六感 Senseluxury 预订比安卡别墅Iniala Beach House - Villa Bianca," href="/villa/1902_inialabeachhousevillabianca">比安卡别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 普吉岛 纳泰海滩</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">3 卧室 ，3 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海滩
                            <span>|</span>商务
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">早餐&nbsp;&nbsp;&nbsp;&nbsp;私人厨师&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;洗衣服务&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;酒精饮料&nbsp;&nbsp;&nbsp;&nbsp;美容服务&nbsp;&nbsp;&nbsp;&nbsp;晚餐&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;管家服务&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;礼宾服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="比安卡别墅Iniala Beach House - Villa Bianca 别墅预订" href="/villa/1902_inialabeachhousevillabianca" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1902" class="icon favorite"></a>
                          <p class="price">￥45813/
                            <small>晚起</small>
                            <span price="6727.2998046875--8091--6.81--1--3--3">人均 ￥7636 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853902614117032|9.5610793485303418" />
                      <a target="_blank" class="tag t_l" href="/villa/1953_samujanavilla15#bspj-tit" title="评论（6）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;6
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（41）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;41
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳15号别墅Samujana Villa 15 别墅预订，主题度假在线预订" href="/villa/1953_samujanavilla15" class="pic">
                        <img alt="萨穆嘉纳15号别墅Samujana Villa 15" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/1/1953/22.jpg#samujanavilla15萨穆嘉纳15号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳15号别墅Samujana Villa 15," href="/villa/1953_samujanavilla15">萨穆嘉纳15号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">2-4 卧室 ，4 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳15号别墅Samujana Villa 15 别墅预订" href="/villa/1953_samujanavilla15" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1953" class="icon favorite"></a>
                          <p class="price">￥10965/
                            <small>晚起</small>
                            <span price="1610--2000--6.81--1--2--4">人均 ￥2742 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853884563446172|9.5610753811042688" />
                      <a target="_blank" class="tag t_l" href="/villa/1959_samujanavilla27#bspj-tit" title="评论（3）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;3
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（82）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;82
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳27号别墅Samujana Villa 27 别墅预订，主题度假在线预订" href="/villa/1959_samujanavilla27" class="pic">
                        <img alt="萨穆嘉纳27号别墅Samujana Villa 27" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/1/1959/5.jpg#samujanavilla27萨穆嘉纳27号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳27号别墅Samujana Villa 27," href="/villa/1959_samujanavilla27">萨穆嘉纳27号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">4 卧室 ，5 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳27号别墅Samujana Villa 27 别墅预订" href="/villa/1959_samujanavilla27" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1959" class="icon favorite"></a>
                          <p class="price">￥17230/
                            <small>晚起</small>
                            <span price="2530--2400--6.81--1--4--4">人均 ￥2154 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                      <a href="javascript:void(0)">
                        <div class="panorama">
                          <span>全景</span></div>
                      </a>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0193904680013475|9.5514285843134044" />
                      <a target="_blank" class="tag t_l" href="/villa/1580_kalyaresidence#bspj-tit" title="评论（12）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;12
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（328）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;328
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 卡利亚别墅Kalya Residence 别墅预订，主题度假在线预订" href="/villa/1580_kalyaresidence" class="pic">
                        <img alt="卡利亚别墅Kalya Residence" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/1/1580/0.jpg#kalyaresidence卡利亚别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,博普海滩度假、旅游，就在 第六感 Senseluxury 预订卡利亚别墅Kalya Residence," href="/villa/1580_kalyaresidence">卡利亚别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 博普海滩</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">4 卧室 ，4 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">租车服务&nbsp;&nbsp;&nbsp;&nbsp;旅游咨询&nbsp;&nbsp;&nbsp;&nbsp;婚庆服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;私人厨师&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;洗衣服务&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;本地电话&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="卡利亚别墅Kalya Residence 别墅预订" href="/villa/1580_kalyaresidence" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1580" class="icon favorite"></a>
                          <p class="price">￥16344/
                            <small>晚起</small>
                            <span price="2400--2400--6.81--1--4--4">人均 ￥2043 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853842264414197|9.5610755342066049" />
                      <a target="_blank" class="tag t_l" href="/villa/1961_samujanavilla30#bspj-tit" title="评论（4）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;4
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（204）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;204
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳30号别墅Samujana Villa 30 别墅预订，主题度假在线预订" href="/villa/1961_samujanavilla30" class="pic">
                        <img alt="萨穆嘉纳30号别墅Samujana Villa 30" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/1/1961/1.jpg#samujanavilla30萨穆嘉纳30号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳30号别墅Samujana Villa 30," href="/villa/1961_samujanavilla30">萨穆嘉纳30号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">5 卧室 ，5 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳30号别墅Samujana Villa 30 别墅预订" href="/villa/1961_samujanavilla30" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1961" class="icon favorite"></a>
                          <p class="price">￥20362/
                            <small>晚起</small>
                            <span price="2990--2800--6.81--1--5--5">人均 ￥2037 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="98.2735547521149329|7.9492944834442705" />
                      <a target="_blank" class="tag t_l" href="/villa/4319_stunning3brkamalacliffvilla1#bspj-tit" title="评论（0）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;0
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（6）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;6
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 卡玛拉崖景1号别墅Stunning 3 BR Kamala Cliff Villa 1 别墅预订，主题度假在线预订" href="/villa/4319_stunning3brkamalacliffvilla1" class="pic">
                        <img alt="卡玛拉崖景1号别墅Stunning 3 BR Kamala Cliff Villa 1" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/4/4319/24.jpg#stunning3brkamalacliffvilla1卡玛拉崖景1号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,普吉岛,卡玛拉度假、旅游，就在 第六感 Senseluxury 预订卡玛拉崖景1号别墅Stunning 3 BR Kamala Cliff Villa 1," href="/villa/4319_stunning3brkamalacliffvilla1">卡玛拉崖景1号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 普吉岛 卡玛拉</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">3 卧室 ，3 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>蜜月
                            <span>|</span>家庭</p>
                          <p class="fw">机场接送&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;管家服务&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="卡玛拉崖景1号别墅Stunning 3 BR Kamala Cliff Villa 1 别墅预订" href="/villa/4319_stunning3brkamalacliffvilla1" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="4319" class="icon favorite"></a>
                          <p class="price">￥13870/
                            <small>晚起</small>
                            <span price="1912.5--1912.5--7.252--1--3--3">人均 ￥2312 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0004386496543702|9.5696919463639851" />
                      <a target="_blank" class="tag t_l" href="/villa/1292_villawayu#bspj-tit" title="评论（17）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;17
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（639）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;639
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 吾玉别墅Villa Wayu 别墅预订，主题度假在线预订" href="/villa/1292_villawayu" class="pic">
                        <img alt="吾玉别墅Villa Wayu" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/1/1292/1.jpg#villawayu吾玉别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,湄南海滩度假、旅游，就在 第六感 Senseluxury 预订吾玉别墅Villa Wayu," href="/villa/1292_villawayu">吾玉别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 湄南海滩</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">5-7 卧室 ，8 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海滩
                            <span>|</span>婚礼
                            <span>|</span>商务
                            <span>|</span>家庭</p>
                          <p class="fw">私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;租车服务&nbsp;&nbsp;&nbsp;&nbsp;儿童看护&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;婚庆服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;管家服务&nbsp;&nbsp;&nbsp;&nbsp;私人厨师&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="吾玉别墅Villa Wayu 别墅预订" href="/villa/1292_villawayu" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1292" class="icon favorite"></a>
                          <p class="price">
                            <img style="width: 9px;position: absolute;margin-left: -9px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">￥24516/
                            <small>晚起</small>
                            <span price="3600--3780--6.81--1--5--7">人均 ￥2452 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>10%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853815442324048|9.5610712606051997" />
                      <a target="_blank" class="tag t_l" href="/villa/1960_samujanavilla28#bspj-tit" title="评论（3）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;3
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（244）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;244
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳28号别墅Samujana Villa 28 别墅预订，主题度假在线预订" href="/villa/1960_samujanavilla28" class="pic">
                        <img alt="萨穆嘉纳28号别墅Samujana Villa 28" class="lazy" data-original="http://image01.hivilla.com/uploads/destination/article/1/1960/0.jpg#samujanavilla28萨穆嘉纳28号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳28号别墅Samujana Villa 28," href="/villa/1960_samujanavilla28">萨穆嘉纳28号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">6 卧室 ，7 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭
                            <span>|</span>明星名人入住</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳28号别墅Samujana Villa 28 别墅预订" href="/villa/1960_samujanavilla28" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1960" class="icon favorite"></a>
                          <p class="price">￥21929/
                            <small>晚起</small>
                            <span price="3220--3200--6.81--1--6--6">人均 ￥1828 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                      <a href="javascript:void(0)">
                        <div class="panorama">
                          <span>全景</span></div>
                      </a>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="98.3923394999999346|7.9659448999999993" />
                      <a target="_blank" class="tag t_l" href="/villa/4317_villakalyana#bspj-tit" title="评论（0）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;0
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（10）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;10
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 卡尔雅娜别墅Villa Kalyana 别墅预订，主题度假在线预订" href="/villa/4317_villakalyana" class="pic">
                        <img alt="卡尔雅娜别墅Villa Kalyana" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/4/4317/2.jpg#villakalyana卡尔雅娜别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,普吉岛,普吉游艇俱乐部度假、旅游，就在 第六感 Senseluxury 预订卡尔雅娜别墅Villa Kalyana," href="/villa/4317_villakalyana">卡尔雅娜别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 普吉岛 普吉游艇俱乐部</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">3-5 卧室 ，5 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">码头景观
                            <span>|</span>家庭</p>
                          <p class="fw">私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;租车服务&nbsp;&nbsp;&nbsp;&nbsp;儿童看护&nbsp;&nbsp;&nbsp;&nbsp;洗衣服务&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;酒精饮料&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;私人厨师&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;礼宾服务&nbsp;&nbsp;&nbsp;&nbsp;开夜床服务&nbsp;&nbsp;&nbsp;&nbsp;床单/枕套更换&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="卡尔雅娜别墅Villa Kalyana 别墅预订" href="/villa/4317_villakalyana" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="4317" class="icon favorite"></a>
                          <p class="price">￥14301/
                            <small>晚起</small>
                            <span price="2100--2100--6.81--1--3--5">人均 ￥2384 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0007346829175958|9.5695176359384249" />
                      <a target="_blank" class="tag t_l" href="/villa/1261_villaacacia#bspj-tit" title="评论（4）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;4
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（164）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;164
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 金合欢别墅Villa Acacia 别墅预订，主题度假在线预订" href="/villa/1261_villaacacia" class="pic">
                        <img alt="金合欢别墅Villa Acacia" class="lazy" data-original="http://image01.hivilla.com/uploads/destination/article/1/1261/3.jpg#villaacacia金合欢别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,度假、旅游，就在 第六感 Senseluxury 预订金合欢别墅Villa Acacia," href="/villa/1261_villaacacia">金合欢别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">2-4 卧室 ，5 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海滩
                            <span>|</span>婚礼
                            <span>|</span>蜜月
                            <span>|</span>家庭</p>
                          <p class="fw">私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;租车服务&nbsp;&nbsp;&nbsp;&nbsp;儿童看护&nbsp;&nbsp;&nbsp;&nbsp;婚庆服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="金合欢别墅Villa Acacia 别墅预订" href="/villa/1261_villaacacia" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1261" class="icon favorite"></a>
                          <p class="price">
                            <img style="width: 9px;position: absolute;margin-left: -9px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">￥17025/
                            <small>晚起</small>
                            <span price="2500--2500--6.81--1--2--4">人均 ￥4257 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>10%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0853889203071958|9.5610722280181690" />
                      <a target="_blank" class="tag t_l" href="/villa/1954_samujanavilla16#bspj-tit" title="评论（3）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;3
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（82）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;82
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳16号别墅Samujana Villa 16 别墅预订，主题度假在线预订" href="/villa/1954_samujanavilla16" class="pic">
                        <img alt="萨穆嘉纳16号别墅Samujana Villa 16" class="lazy" data-original="http://image01.hivilla.com/uploads/destination/article/1/1954/0.jpg#samujanavilla16萨穆嘉纳16号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳16号别墅Samujana Villa 16," href="/villa/1954_samujanavilla16">萨穆嘉纳16号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">4 卧室 ，4 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>商务
                            <span>|</span>蜜月
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳16号别墅Samujana Villa 16 别墅预订" href="/villa/1954_samujanavilla16" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1954" class="icon favorite"></a>
                          <p class="price">￥17230/
                            <small>晚起</small>
                            <span price="2530--2400--6.81--1--4--4">人均 ￥2154 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="99.9320322529815712|9.4263510857330441" />
                      <a target="_blank" class="tag t_l" href="/villa/4328_villarenaissancesv09#bspj-tit" title="评论（0）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;0
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（41）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;41
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 瑞纳赛斯别墅Villa Renaissance SV 09 别墅预订，主题度假在线预订" href="/villa/4328_villarenaissancesv09" class="pic">
                        <img alt="瑞纳赛斯别墅Villa Renaissance SV 09" class="lazy" data-original="http://image02.hivilla.com/uploads/destination/article/4/4328/2.jpg#villarenaissancesv09瑞纳赛斯别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,塔林甘海滩度假、旅游，就在 第六感 Senseluxury 预订瑞纳赛斯别墅Villa Renaissance SV 09," href="/villa/4328_villarenaissancesv09">瑞纳赛斯别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 塔林甘海滩</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">4 卧室 ，5 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;儿童看护&nbsp;&nbsp;&nbsp;&nbsp;洗衣服务&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;水疗服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;礼宾服务&nbsp;&nbsp;&nbsp;&nbsp;毛巾/浴巾更换&nbsp;&nbsp;&nbsp;&nbsp;床单/枕套更换&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="瑞纳赛斯别墅Villa Renaissance SV 09 别墅预订" href="/villa/4328_villarenaissancesv09" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="4328" class="icon favorite"></a>
                          <p class="price">￥8853/
                            <small>晚起</small>
                            <span price="1300--1300--6.81--1--4--4">人均 ￥1107 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0193911385536012|9.5514241058336289" />
                      <a target="_blank" class="tag t_l" href="/villa/1581_puranaresidence#bspj-tit" title="评论（4）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;4
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（123）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;123
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 布拉纳别墅Purana Residence 别墅预订，主题度假在线预订" href="/villa/1581_puranaresidence" class="pic">
                        <img alt="布拉纳别墅Purana Residence" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/1/1581/0.jpg#puranaresidence布拉纳别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,博普海滩度假、旅游，就在 第六感 Senseluxury 预订布拉纳别墅Purana Residence," href="/villa/1581_puranaresidence">布拉纳别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 博普海滩</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">4 卧室 ，4 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">海景
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">租车服务&nbsp;&nbsp;&nbsp;&nbsp;婚庆服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;私人厨师&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;洗衣服务&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;礼宾服务&nbsp;&nbsp;&nbsp;&nbsp;本地电话&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="布拉纳别墅Purana Residence 别墅预订" href="/villa/1581_puranaresidence" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="1581" class="icon favorite"></a>
                          <p class="price">￥16344/
                            <small>晚起</small>
                            <span price="2400--2400--6.81--1--4--4">人均 ￥2043 /晚起</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <input type="hidden" class="mapCoordinates" value="100.0854235458267567|9.5610076420917682" />
                      <a target="_blank" class="tag t_l" href="/villa/3219_samujanavilla29#bspj-tit" title="评论（3）">
                        <i class="icon iconfont newicon">&#xe603;</i>&nbsp;3
                        <div class="comment_tip">评论</div></a>
                      <a class="tag t_r" href="javascript:void(0);" title="去过（61）">
                        <i class="icon iconfont newicon">&#xe602;</i>&nbsp;61
                        <div class="been_tip">去过</div></a>
                      <a target="_blank" title="第六感 别墅度假 萨穆嘉纳29号别墅Samujana Villa 29 别墅预订，主题度假在线预订" href="/villa/3219_samujanavilla29" class="pic">
                        <img alt="萨穆嘉纳29号别墅Samujana Villa 29" class="lazy" data-original="http://statics.hivilla.com/uploads/destination/article/3/3219/0.jpg#samujanavilla29萨穆嘉纳29号别墅" src="<?php echo $baseUrl?>/img/default-info.png" /></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hd-bg-l icon-hd-hover  hidden">
                        <i class="icon-hd icon-hd-l"></i>
                        <div class="hd-notice left-700 hd-notice-new">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 -->
                      <div class="msg-text">
                        <h3 class="tit">
                          <a title="去泰国,苏梅岛,曾蒙度假、旅游，就在 第六感 Senseluxury 预订萨穆嘉纳29号别墅Samujana Villa 29," href="/villa/3219_samujanavilla29">萨穆嘉纳29号别墅</a></h3>
                        <div class="add-type">
                          <p class="address">
                            <span>泰国 苏梅岛 曾蒙</span>
                            <!-- <a href="javascript:void(0);" class="icon map">地图</a> --></p>
                          <p class="type-text">6 卧室 ，7 浴室 ，1 泳池</p></div>
                        <div class="serve-type">
                          <p class="ms">自然
                            <span>|</span>商务
                            <span>|</span>婚礼
                            <span>|</span>家庭</p>
                          <p class="fw">私人厨师&nbsp;&nbsp;&nbsp;&nbsp;私人司机与车辆&nbsp;&nbsp;&nbsp;&nbsp;租车服务&nbsp;&nbsp;&nbsp;&nbsp;儿童看护&nbsp;&nbsp;&nbsp;&nbsp;按摩服务&nbsp;&nbsp;&nbsp;&nbsp;成人加床&nbsp;&nbsp;&nbsp;&nbsp;儿童加床&nbsp;&nbsp;&nbsp;&nbsp;美容服务&nbsp;&nbsp;&nbsp;&nbsp;早餐&nbsp;&nbsp;&nbsp;&nbsp;女佣&nbsp;&nbsp;&nbsp;&nbsp;机场接送&nbsp;&nbsp;&nbsp;&nbsp;保安&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        <div class="inner">
                          <a target="_blank" title="萨穆嘉纳29号别墅Samujana Villa 29 别墅预订" href="/villa/3219_samujanavilla29" class="xq-btn">立即预订</a>
                          <a href="javascript:;" data-id="3219" class="icon favorite"></a>
                          <p class="price">￥21929/
                            <small>晚起</small>
                            <span price="3220--3220--6.81--1--6--6">人均 ￥1828 /晚起</span></p>
                        </div>
                      </div>
                      <span class="xsyh-icon new-s-off">
                        <p>15%OFF</p>
                        <p>限时特惠</p>
                      </span>
                    </li>
                  </ul>
                </div>
                <!--搜索结果列表开始-->
                <!--分页开始-->
                <div class="page-list" date-page-now="1" date-page-all="24"></div>
                <!--分页结束--></div>
            </div>
          </div>
        </div>
        <!--侧边联系栏 s-->
        <style>/*@keyframes shake{ 0% {transform:rotate(0deg);transform-origin:center top;} 20% {transform:rotate(-30deg);transform-origin:center top;} 40% {transform:rotate(30deg);transform-origin:center top;} 60% {transform:rotate(-15deg);transform-origin:center top;} 80% {transform:rotate(15deg);transform-origin:center top;} 100% {transform:rotate(0deg);transform-origin:center top;} } @-moz-keyframes shake{ 0% {transform:rotate(0deg);transform-origin:center top;} 20% {transform:rotate(-30deg);transform-origin:center top;} 40% {transform:rotate(30deg);transform-origin:center top;} 60% {transform:rotate(-15deg);transform-origin:center top;} 80% {transform:rotate(15deg);transform-origin:center top;} 100% {transform:rotate(0deg);transform-origin:center top;} } @-webkit-keyframes shake{ 0% {transform:rotate(0deg);transform-origin:center top;} 20% {transform:rotate(-30deg);transform-origin:center top;} 40% {transform:rotate(30deg);transform-origin:center top;} 60% {transform:rotate(-15deg);transform-origin:center top;} 80% {transform:rotate(15deg);transform-origin:center top;} 100% {transform:rotate(0deg);transform-origin:center top;} } @-o-keyframes shake{ 0% {transform:rotate(0deg);transform-origin:center top;} 20% {transform:rotate(-30deg);transform-origin:center top;} 40% {transform:rotate(30deg);transform-origin:center top;} 60% {transform:rotate(-15deg);transform-origin:center top;} 80% {transform:rotate(15deg);transform-origin:center top;} 100% {transform:rotate(0deg);transform-origin:center top;} } .shake{ animation: shake 2s; -moz-animation: shake 2s; -webkit-animation: shake 2s; -o-animation: shake 2s; }*/</style>
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
    
        <!--侧边联系栏 e-->
        <!--内页中间内容结束-->
        <div id="map-warp">
          <div class="close"></div>
          <div id="map_canvas"></div>
        </div>
        <script type="text/javascript" src="http://ditu.google.cn/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript">var MESSAGE = {
            'reviews': '评论',
            'stayed': '去过',
            'service': '服务',
            'book': '立即预订',
            'night': '晚起',
            'percaptial': '人均',
            'promotion': '限时特惠',
            'contact': '联系客服咨询报价',
          }</script>
        
 
<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
	var pageID = 'travels';
	var MESSAGE = {};
	var COMMON_MESSAGE = '';










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
     //筛选
     $('.check-ctn>label.filterspan').each(function() {
       $(this).on('click',
       function() {
         if ($(this).prev().prev().is(':checked') == true) {
           $(this).prev().children('span').css('display', 'block');
         } else {
           $(this).prev().children('span').css('display', 'none');
         }
       })
     }) 
     $('.check-ctn>input').each(function() {
       $(this).on('click',
       function() {
         if ($(this).is(':checked') == true) {
           $(this).next().children('span').css('display', 'block');
         } else {
           $(this).next().children('span').css('display', 'none');
         }
       })
     })

	$('.side-bar>.items>li>a').each(function() {
        if ($(this).next().hasClass('list')) {
          $(this).next().mouseover(function() {
            $(this).prev().addClass('hover');
          });
          $(this).next().mouseout(function() {
            $(this).prev().removeClass('hover');
          });
        }
      });
      $(window).on('scroll resize',
      function() {
        if (($('.goTop').css('display') == 'list-item') && ($('.survey').offset().top - $(document).scrollTop()) > 0 && ($('.survey').offset().top - $(document).scrollTop()) < 537) {
          $('.survey').css('position', 'static');
        }
      })
      // var shaked = false;
      // var shaking = false;
      // $(window).scroll(function(){
      //     if (shaked == false && $('.side-bar').css('display') == 'block'){
      //         shaked = true;
      //         shaking = true;
      //         $('.svgsurvey').addClass('shake');
      //         setTimeout(function(){shaking = false},2000);
      //     }
      //     else if(shaking == false){
      //         $('.svgsurvey').removeClass('shake');
      //     }
      // });


      
      
      
      
      
      
      
	
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