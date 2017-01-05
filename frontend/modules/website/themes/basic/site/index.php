<?php
	$this->title = '珠海正和国际旅游,全球值得信赖的精品度假公寓短租平台,度假别墅,度假酒店,度假公寓预订';
	use frontend\modules\website\themes\basic\myasset\ThemeAsset;
	
	ThemeAsset::register($this);
	$baseUrl = $this->assetBundles[ThemeAsset::className()]->baseUrl . '/';
?>

        <!--搜索历史记录样式-->
        <style>
          .defList{ padding:0.875rem; padding-bottom:0; position:absolute; width:332px!important; border:none!important; left:0!important; background-color:#ffffff; display:none; z-index:500; } 
          .defList div{ height:2rem; border-bottom:1px solid #dddddd; } 
          .defList div img{ float:left; height:1rem; margin:0.5rem; margin-left:0; } 
          .defList div.hot img{ margin:0.5rem 0.6rem 0.5rem 0.1rem; } 
          .defList div span{ float:left; line-height:2rem; color:#888888; font-size:0.75rem; } 
          .defList .history{ display:none; } 
          .defList .history b{ float:right; line-height:2rem; font-weight:normal; color:#ff8000; } 
          .defList .history b:hover{ cursor:pointer; } 
          .defList ul{ overflow:hidden; padding:0.35rem 0!important; } 
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
        </style>
        <!--侧边联系栏 e-->
        <div class="slides_bg">
          <!--焦点图开始-->
          <div class="IN_main">
            <div id="in_slides" class="Cslides in_slides">
              <ul class="slides">
                <li>
                  <a target="_blank" title="3D全景看别墅，穿透屏幕体验极致3D全景看别墅，穿透屏幕体验极致" href="http://www.senseluxury.com/destinations/634">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481531511.jpg#3D全景看别墅，穿透屏幕体验极致" alt="3D全景看别墅，穿透屏幕体验极致3D全景看别墅，穿透屏幕体验极致" /></a>
                  <a target="_blank" title="3D全景看别墅，穿透屏幕体验极致3D全景看别墅，穿透屏幕体验极致" href="http://www.senseluxury.com/destinations/634" class="slink">
                    <b>
                    </b>
                    <i>
                    </i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="芬兰，玻璃圆顶木屋追逐极光，开启你的奇幻旅程" href="/villa/4072">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1472779915.jpg#芬兰，玻璃圆顶木屋" alt="芬兰，玻璃圆顶木屋追逐极光，开启你的奇幻旅程" /></a>
                  <a target="_blank" title="芬兰，玻璃圆顶木屋追逐极光，开启你的奇幻旅程" href="/villa/4072" class="slink">
                    <b>芬兰，玻璃圆顶木屋</b>
                    <i>追逐极光，开启你的奇幻旅程</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="斐济，萨瓦西私人岛人间仙境，有山有水，春节特惠，住四付三" href="/destinations/1033">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481016218.jpg#斐济，萨瓦西私人岛" alt="斐济，萨瓦西私人岛人间仙境，有山有水，春节特惠，住四付三" /></a>
                  <a target="_blank" title="斐济，萨瓦西私人岛人间仙境，有山有水，春节特惠，住四付三" href="/destinations/1033" class="slink">
                    <b>斐济，萨瓦西私人岛</b>
                    <i>人间仙境，有山有水，春节特惠，住四付三</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="北海道，富良野来自北国的薰衣草胜地" href="/destinations/938">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1480488373.jpg#北海道，富良野" alt="北海道，富良野来自北国的薰衣草胜地" /></a>
                  <a target="_blank" title="北海道，富良野来自北国的薰衣草胜地" href="/destinations/938" class="slink">
                    <b>北海道，富良野</b>
                    <i>来自北国的薰衣草胜地</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="伦敦塔桥，骑士三码头公寓邂逅一见倾心的“伦敦塔桥”" href="/destinations/1030">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481017746.jpg#伦敦塔桥，骑士三码头公寓" alt="伦敦塔桥，骑士三码头公寓邂逅一见倾心的“伦敦塔桥”" /></a>
                  <a target="_blank" title="伦敦塔桥，骑士三码头公寓邂逅一见倾心的“伦敦塔桥”" href="/destinations/1030" class="slink">
                    <b>伦敦塔桥，骑士三码头公寓</b>
                    <i>邂逅一见倾心的“伦敦塔桥”</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="日本，京都梦回古都" href="/destinations/697">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481002068.jpg#日本，京都" alt="日本，京都梦回古都" /></a>
                  <a target="_blank" title="日本，京都梦回古都" href="/destinations/697" class="slink">
                    <b>日本，京都</b>
                    <i>梦回古都</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="巴黎，弗吉金色满堂顶层公寓入住顶层公寓，拥有整个巴黎" href="/villa/3016">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1463383514.jpg#巴黎，弗吉金色满堂顶层公寓" alt="巴黎，弗吉金色满堂顶层公寓入住顶层公寓，拥有整个巴黎" /></a>
                  <a target="_blank" title="巴黎，弗吉金色满堂顶层公寓入住顶层公寓，拥有整个巴黎" href="/villa/3016" class="slink">
                    <b>巴黎，弗吉金色满堂顶层公寓</b>
                    <i>入住顶层公寓，拥有整个巴黎</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="巴厘岛，雅丹巴厘别墅民族艺术，尊享宁静" href="/villa/4297">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481441621.jpg#巴厘岛，雅丹巴厘别墅" alt="巴厘岛，雅丹巴厘别墅民族艺术，尊享宁静" /></a>
                  <a target="_blank" title="巴厘岛，雅丹巴厘别墅民族艺术，尊享宁静" href="/villa/4297" class="slink">
                    <b>巴厘岛，雅丹巴厘别墅</b>
                    <i>民族艺术，尊享宁静</i>
                  </a>
                </li>
                <li>
                  <a target="_blank" title="苏梅岛，萨蔓拉别墅圣诞新年可入住" href="/villa/1860">
                    <img class="lazy" src="http://senseluxury.com/uploads/poster/1481509401.jpg#苏梅岛，萨蔓拉别墅" alt="苏梅岛，萨蔓拉别墅圣诞新年可入住" /></a>
                  <a target="_blank" title="苏梅岛，萨蔓拉别墅圣诞新年可入住" href="/villa/1860" class="slink">
                    <b>苏梅岛，萨蔓拉别墅</b>
                    <i>圣诞新年可入住</i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0);" class="prev"></a>
              <a href="javascript:void(0);" class="next"></a>
            </div>
          </div>
          <!--焦点图结束-->
          <!-- 搜索栏目 -->
          <div class="D1Search indexD1Sh">
            <div class="D1main">
              <ul>
                <li class="li1 des-input">
                  <i class="bg iconfont-home">&#xe61a;</i>
                  <input type="input" autocomplete="off" value="目的地/别墅" data-valname="目的地/别墅" class="txt-input" id="AutoSearch" placeholder="目的地/别墅" style="border: medium none;" data-FBColor='#ff9b14'>
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
                  <input class="txt-input" type="text" name="" value="入住日期" data-valname="入住日期" id="rz_time_start" /></li>
                <li class="li3 bg ">
                  <i class="bg iconfont-home">&#xe619;</i>
                  <input class="txt-input" type="text" name="" value="退房日期" data-valname="退房日期" id="rz_time_end" /></li>
                <li class="li4 bg " id="people_numb">
                  <i class="bg iconfont-home">&#xe618;</i>
                  <input class="txt-input" dt-num="" type="text" name="" placeholder="入住人数" data-valname="入住人数" />
                  <div class="people-select">
                    <a type="0">不限</a><a type="1">1</a><a type="2">2</a><a type="3">3</a><a type="4">4</a><a type="5">5</a><a type="6">6</a><a type="7">7</a><a type="8">8</a><a type="9">9</a><a type="10">10</a><a type="11">10+</a>
                  </div>
                </li>
                <li class="li5 search-btn">
                  <input class="btn" type="button" name="" value="搜 索" /></li>
              </ul>
              <!-- <div class="ll_input_tip">请输入城市名字</div>--></div>
          </div>
          <!-- 搜索栏目 EDN-->
          <!--个性尊贵超值品质开始-->
          <div class="wp">
            <div class="ll_Slogan2">全球值得信赖的精品别墅和公寓短租平台</div>
            <div class="strong-type Lcfx">
              <div class="items type1">
                <h3>
                  <span class="iconfont-home">&#xe616;</span>个性</h3>
                <p>更大、更私密空间， 能够满足您不同场景下的个性化需求</p>
              </div>
              <div class="items type2">
                <h3>
                  <span class="iconfont-home">&#xe620;</span>尊贵</h3>
                <p>7*24管家服务：司机、厨师、管家、保安，一应俱全。尊享奢华住宿体验</p>
              </div>
              <div class="items type3">
                <h3>
                  <span class="iconfont-home">&#xe617;</span>超值</h3>
                <p>人均价格及附加服务使得别墅比高端酒店性价比更高</p>
              </div>
              <div class="items type4">
                <h3>
                  <span class="iconfont-home">&#xe610;</span>品质</h3>
                <p>专人定期现场检查，保证无与伦比的住宿品质</p>
              </div>
            </div>
          </div>
          <!--个性尊贵超值品质结束--></div>
        </div>
        <div class="display_bx">
          <div class="display_num Lcfx">
            <ul>
              <li>
                <div class="ds_numbtn">
                  <div class="numbtn_left"></div>
                  <div class="numbtn_text">
                    <font>167</font>
                    <i>
                    </i>
                  </div>
                  <div class="numbtn_right"></div>
                </div>
                <p>个海外目的地</p>
              </li>
              <li>
                <div class="ds_numbtn">
                  <div class="numbtn_left"></div>
                  <div class="numbtn_text">
                    <font>2,158</font>
                    <i>
                    </i>
                  </div>
                  <div class="numbtn_right"></div>
                </div>
                <p>套高端物业</p>
              </li>
              <li>
                <div class="ds_numbtn">
                  <div class="numbtn_left"></div>
                  <div class="numbtn_text">
                    <font>62,719</font>
                    <i>
                    </i>
                  </div>
                  <div class="numbtn_right"></div>
                </div>
                <p>人已入住</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="slV1_web wauto">
          <!-- 客户评价 开始 -->
          <div class="testimonial-c">
            <div class="testimonial-header w1100-a">客户评价
              <p>
                <a href="/show">超过
                  <span class="color-ff8">62,092</span>位客户赞誉+</a></p>
            </div>
            <div class="testimonial clearfix">
              <div class="testimontial-left fl">
                <div class="testimotial-box clearfix">
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/cdfacbadd4c1130eacf05308ff6a44ba.jpg" alt="威士忌别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>starbob</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/3972_whiskeywoods">威士忌别墅 | 日本 北海道</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"第一次北海道二世古，能第一次就定到这么好的别墅真的出乎意料，外面下大雪里面穿短袖，孩子们好开心。关键珠海正和国际旅行的客房全程跟踪，中间帮助我们多少我都数不清了，必须全五星，真的很棒，回来我又续订了一月的，希望继续写更好的点评出来，期待。"
                        <a href="javascript:;">
                          <span>2016-12-09 12:20:51</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/3972_whiskeywoods#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/8ebf7a8662c92ed9de774942da3b594a.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/24c68f5cc04d9e001adef0d2ef45b242.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/292d2e334cb302fb8c253eb76f7c57fb.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/798fbacd2dc7c66c09097344f89cb862.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/1ee2d4179378fb53d8dc639f00c0713c.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/3972/1efe9172a79ad4749671389ebc6b1340.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/1.png" alt="雅丹巴厘别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>蛋蛋娘</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/4297_jadinebalivilla">雅丹巴厘别墅 | 印度尼西亚 巴厘岛</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"这个酱超好吃，问了管家Adi配料没听懂😅😅，英文还是很重要的，从外面请了BBQ厨师，很可爱的小老头，重要的是菜也很好吃，独占泳池边卧室，夜深人静的时候慢慢游"
                        <a href="javascript:;">
                          <span>2016-12-09 11:46:17</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/4297_jadinebalivilla#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/9c52d63678215093fb93c11d67161f94.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/2a7f25ad8a56a93bfbd172f53ec21958.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/fab96a2c678a9347a7d57c5f1ec975a1.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/b07c4e1111d7bc1f5722dda8e5ffa4de.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/d972aac584a946c4e035f49841b0b6d8.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-09/22095/2d699a699a5b970cf5b5341bddbe03a9.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/f976c2f1c3f228cb4c560504b4d4bad5.jpg" alt="娜塔罗伽别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>小芬</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/1883_villanatarajamajapahitbeach">娜塔罗伽别墅 | 印度尼西亚 巴厘岛</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"別墅內環境很漂亮 適合全家一起出遊 和好朋友一起出遊 很漂亮的地方。管家服務很好 很有親和力 也很有心意 廚師的廚藝也非常棒 "
                        <a href="javascript:;">
                          <span>2016-12-04 22:37:15</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/1883_villanatarajamajapahitbeach#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/dc499adba645bbcf27ceda7962c4348b.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/1c5627b519c471bdbcd9cf05ec76571e.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/ba74a0e105e141cdde7630aec5669560.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/0f13af855ab4ae435d94190e2b77e82c.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/7e20084e57f829776d7a186faaa11fc3.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-12-04/21046/f2cc9f7bde4516d8a4983053e8a76a94.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/8.png" alt="萨薇尔别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>小百货</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/2073_villazavier">萨薇尔别墅 | 泰国 普吉岛</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"2016年春节去的普吉行，入住萨维尔别墅。10大3小，住得超舒坦。风景好，房间好，设施好（有健身房、影音室、游泳池），服务好。超赞，强烈推荐。"
                        <a href="javascript:;">
                          <span>2016-11-23 17:36:24</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/2073_villazavier#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/fb68b289c2e04d2f6d28eb2f2419dbaf.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/7e1b7b5aeefd8d4c6b4cb496f662c5e9.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/31c252757685395363cfea8444d7469d.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/8d2f12ccd610272b957d14cbf939ac6c.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/3f5d4da6b7a8e62fd11531d572ed29b9.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/16898/5097d244e10dcf98e1cc1f2f972f69a5.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/7.png" alt="吾玉别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>韩宇</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/1292_villawayu">吾玉别墅 | 泰国 苏梅岛</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"提前2个月就在珠海正和国际旅行官网订好了，一切那么美好[呲牙]，不符大家期望。希望有机会再去住吾玉别墅。"
                        <a href="javascript:;">
                          <span>2016-11-23 17:28:05</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/1292_villawayu#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/4ad24d2921226a19177566aaaf9aad5d.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/44ef9603ab007e1c8f49fc56465a3e29.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/c68b718ccd6695d4a335dc844bbdecd4.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/be6d7805ae32007d2d36acb4e1632b77.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/7505a7c0a3120bd39b64b8eae165d57e.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com/uploads/sns/2016-11-23/21802/1c06e587fdf04c5a492b7d319ee46144.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="testimontial-left-item">
                    <div class="testimotial-left-c ">
                      <img class="testimotial-left-avatar" src="http://statics.hivilla.com/uploads/headimg/01d32f03a3473c4bbc9a788e8395b684.jpg" alt="卡莉佩别墅入住体验">
                      <div style="margin-left:60px;">
                        <p>9527</p>
                        <p class="color-ff8 testimotial-left-l">
                          <i class="icon-laction"></i>
                          <a target="_blank" href="/villa/1628_villakalipay">卡莉佩别墅 | 泰国 普吉岛</a></p>
                        <a href="/show">
                          <span class="test-time">更多体验 >></span></a>
                      </div>
                      <p class="testimotial-left-info">"这个假期都非常棒，别墅环境优美服务佳管家jimmy非常nice，以后还想来～"
                        <a href="javascript:;">
                          <span>2016-11-06 23:28:08</a></span>
                      </p>
                      <a title="入住体验" target="_blank" href="/villa/1628_villakalipay#bspj-tit">
                        <div class="testimotial-left-img clearfix">
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/8e10290ec98111432f63e89a1c9fafc4.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/2e6140085510a73b45cf096f4893dd34.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/afa44d075573334c6b339c6305cd1487.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/74a9ce5461b16fc4b141c244c1337139.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/42fe12becaaf19479ea37e97bd34578c.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                          <div style="background:url(http://statics.hivilla.com//uploads/view/1628/08cb2928c6d4e13b9104cec478b0076f.jpg) no-repeat;background-position: center;background-size: cover;"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="testimotial-btn">
                  <ul class="clearfix">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="testimontial-right fr">
                <div class="testimontial-c">
                  <div class="testimotial-container" data-limit="2">
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/c28c702cd9e6a0ec4ea7bbb2bd174d46.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>崔*</p>
                          <a target="_blank" href="/villa/3203_miaresortcliffvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>米娅悬崖别墅 | 越南 芽庄</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"酒店服务 餐厅的味道都非常棒 只是现在是芽庄的雨季经常阴天下雨 把泥沙都翻出来了 海的颜色不美 海浪又非常大 不适合游泳 总体mia的设施服务给5星"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/cdfacbadd4c1130eacf05308ff6a44ba.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>彭*</p>
                          <a target="_blank" href="/villa/3972_whiskeywoods">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>威士忌别墅 | 日本 北海道</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"第一次北海道二世古，能第一次就定到这么好的别墅真的出乎意料，外面下大雪里面穿短袖，孩子们好开心。关键珠海正和国际旅行的客房全程跟踪，中间帮助我们多少我都数不清了，必须全五星，真的很棒，回来我又续订了一月的，希望继续写更好的点评出来，期待。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/39d5436644490971da2f58ecd878a301.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>冯*</p>
                          <a target="_blank" href="/villa/1298_villazamani">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>萨玛尼别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"很完美的一次亲子度假，从此爱上别墅出行。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/12.png" alt="">
                        <div class="testimotial-right-c">
                          <p>郎**</p>
                          <a target="_blank" href="/villa/3003_miaresortfivebedroombeachfrontvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>米娅海滨别墅 | 越南 芽庄</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"非常好的一次体验。除了没有管家有点麻烦以外，所有都很好！大家很开心"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/12.png" alt="">
                        <div class="testimotial-right-c">
                          <p>郎**</p>
                          <a target="_blank" href="/villa/3003_miaresortfivebedroombeachfrontvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>米娅海滨别墅 | 越南 芽庄</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"除了没有管家有点麻烦以外其他满分！同事们非常满意！客服服务也很到位！全部满分"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/7.png" alt="">
                        <div class="testimotial-right-c">
                          <p>沈**</p>
                          <a target="_blank" href="/villa/2035_villamonsoon">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>梦松别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施非常好,别墅服务很满意,客服接待服务很满意,行程提醒做得很满意,餐饮质量很满意,交通情况很满意,"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/7.png" alt="">
                        <div class="testimotial-right-c">
                          <p>沈**</p>
                          <a target="_blank" href="/villa/3633_coralcayvilla1">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>珊瑚礁1号别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅环境不错，有挺多设施的，泳池，BBQ，台球桌等等，我们18个人订了两个别墅，请厨师麻烦，所以基本都是外面吃和自己做，别墅早餐就是鸡蛋，面包，饮料，水果等，别墅在山上，我们基本都是叫车上山的，管家比较忙，回复相对比较慢"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/62b2fcab85a13f4d635b2ca79e658ef3.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>洪*</p>
                          <a target="_blank" href="/villa/1525_villamotsamot">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>莫莎莫特别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"今晚是最后一晚住在Motsamot，必须说珠海正和国际旅行给提供了一次超赞的假期住宿！我们四个家庭，8大两小入住这个别墅酒店，5间客房，刚刚好，其中一间单人房也解决了其中一位爸爸打呼影响宝宝休息的顾虑！再说整体环境，舒适优美，因我们是晚班机到达苏梅，虽然预订的酒店接机有些小状况，但珠海正和国际旅行客服及时帮忙解决了！到达酒店已经接近晚10点，管家特意的等候并帮我们叫了当地外卖美食！美味的晚餐让我们这一路旅途的疲惫瞬间消散，住宿附近其实很便利，左转就是7-11，右转再左转就有很多当地餐厅和摩托车租赁，整体环境闹中取静，舒适便利！最后一晚我们还特意预约了厨师来了一顿海鲜BBQ，食材管家代购，不仅新鲜还贴心的帮忙控制成本及份量，避免浪费！而厨师的冬阴功汤、木瓜沙拉，味道更是超赞！总之这个假期每天早晨伴着阳光与鸟鸣醒来，有满桌丰盛的早餐，管家热情的笑脸以及周到贴心的服务，让这个假期美好的几近完美！必须说motsamot的这次入住让我们很是惊艳！感谢珠海正和国际旅行提供了这么棒的住宿环境！"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/82ea3c9497f3bdeb167cb6a831206253.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>陈*</p>
                          <a target="_blank" href="/villa/1873_villasunsetheights">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>日落山庄别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅好的没话说 应有尽有 唯一缺点就是离市区远了点"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/18e406c5bf973182ddac91bf20718514.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>崔*</p>
                          <a target="_blank" href="/villa/1884_villamayamajapahitbeach">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>玛雅海滨别墅 | 印度尼西亚 巴厘岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施较旧，交通不方便，别墅所在区域离景点较远，但是只想好好放松休息在别墅就够了，因为有足大的泳池和优质的服务"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/12.png" alt="">
                        <div class="testimotial-right-c">
                          <p>任*</p>
                          <a target="_blank" href="/villa/1844_villaneung">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>妮恩别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅位置稍微偏了一些，门口的小路还在修缮中，但是美景无敌~静谧的私家海滩完全无人打扰，无边际泳池随时可以放松身心。管家服务贴心周到，大厨的厨艺无懈可击。一切的一切都非常好！ 下次出行一定会再找珠海正和国际旅行的！"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/676ce36402d8c5a6dcfd83bf1fa7465b.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>李**</p>
                          <a target="_blank" href="/villa/3248_sonevajaniresort">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>索尼娃Soneva Jani岛 | 印度洋 马尔代夫</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"酒店非常棒.!spa 酒 所有活动出海基本都免费.不知道是不是刚开始...景色也比W好 岛也很大还在继续扩建中 .!管家lana和餐厅的tiu都非常好.!还安排在独立的岛上晚餐...小孩基本有管家照顾着 ...非常愉快"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/1374b67226ef9451077fa53a94d60e81.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>张*</p>
                          <a target="_blank" href="/villa/1471_thelayarvilla2bedroom">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>拉雅别墅1号 | 印度尼西亚 巴厘岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"巴厘岛的交通普遍拥堵，通往别墅的道路有些狭窄，但里面别有洞天，设施很好，服务很棒，整体感觉非常不错"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/7bb6cc3983be5b1f00eeb45cf32b3462.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>谷*</p>
                          <a target="_blank" href="/villa/70_banlealay">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>班丽莱别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅风景没的说，居高临下，非常美 我们一行人最喜欢的是那种自由的感觉，是住酒店没办法体会的。泳池很棒，一趟下来居然全部人都学会了游泳，也是这趟最大的收获，哈哈~美中不足因为在半山腰，交通略有不便"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/b589b5bb67611cdf09d8a22c849ac54f.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>周*</p>
                          <a target="_blank" href="/villa/71_villabelle">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>美丽别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施非常好,别墅服务非常好,客服接待服务非常好,行程提醒做得非常好,餐饮质量非常好,交通情况非常好,"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/01d32f03a3473c4bbc9a788e8395b684.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>胡**</p>
                          <a target="_blank" href="/villa/1628_villakalipay">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>卡莉佩别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"这个假期都非常棒，别墅环境优美服务佳管家jimmy非常nice，以后还想来～"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/c8dc548dbc3983078fb1f97ace78b661.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>冯*</p>
                          <a target="_blank" href="/villa/3003_miaresortfivebedroombeachfrontvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>米娅海滨别墅 | 越南 芽庄</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"总体非常的满意 ，房间服务员风景都非常棒，只是酒店早餐类型偏少 ，离市区较远 ，比较适合情侣度假～～～Mia是可以然后我连续好几天都不出门的酒店"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/5.png" alt="">
                        <div class="testimotial-right-c">
                          <p>徐**</p>
                          <a target="_blank" href="/villa/3579_villanatha">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>娜塔别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施非常好,别墅服务非常好,客服接待服务非常好,行程提醒做得非常好,餐饮质量非常好,交通情况非常好,"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/3.png" alt="">
                        <div class="testimotial-right-c">
                          <p>陆**</p>
                          <a target="_blank" href="/villa/2886_jiavillaatjivana">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>吉亚别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅景观很美，第一天天气很好，玩水很开心。管家服务也很贴心，会给我们介绍，安排车，都不需要我们自己动脑筋。可惜10月份天气有台风，没有出海潜水，下次还找珠海正和国际旅行预定别墅。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/595bc5276133d59a8d98e83ca7d3aedf.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>C********</p>
                          <a target="_blank" href="/villa/1814_baanorachon">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>奥拉秋别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅不错，沙滩也很好。厨师的菜很地道，味道很好，要吃什么直接告诉经理就行，食材新鲜。房间唯一的缺点是空调声音有点响，睡眠不好的可能会影响睡眠，洗澡热水不够热，其他的都OK。出行是非常不方便的，叫车很贵，别上有点荒凉，享受纯别墅度假还是不错的选者"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/9.png" alt="">
                        <div class="testimotial-right-c">
                          <p>周**</p>
                          <a target="_blank" href="/villa/2254_keemalaclaypoolvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>奇玛拉-克蕾别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"酒店位于山林之中，绿树环绕，安静舒适，服务非常殷勤体贴，mini吧都是免费的，可惜我们都不喜欢喝冰饮，泳池有点小，但是有压力冲水也可以游一会，酒店外观设计跟自然融于一体，错落有致，出行不太方便，只有酒店自有的租车，比外边的略贵，总体来说非常棒的体验！"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/382b407ba53bc05f7e94d7c8cae37e75.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>Q********</p>
                          <a target="_blank" href="/villa/1503_villariva">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>瑞瓦别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅在小山丘上，可谓背山面海，海景一流，还有一条小路到自己的私人沙滩，一亩三分海景色也很不错，小朋友玩的很开心，房间硬件设施都挺好的，厨师手艺还可以，相比之前住过萨曼拉的厨师就差一点点，服务人员十分客气礼貌，总体服务还不错，不能强求跟专业的管家服务一样周到细致，管家有乐能中文交流，这次忘了皮带管家还帮忙寄了回来。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/d6dd9721f52a9b792a4d91aecc9ac250.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>姚**</p>
                          <a target="_blank" href="/villa/2436_nusaduavilla305">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>妲丽别墅 | 印度尼西亚 巴厘岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"海景一流，美不胜收，很惊艳，以前都是住酒店第一次住私人别墅，可以免费使用七座汽车只需加汽油、还有那么多的人服务保安厨师女佣管家！！！买了很多菜加工，海景美美美。。。怎么拍都美！！"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/4.png" alt="">
                        <div class="testimotial-right-c">
                          <p>向*</p>
                          <a target="_blank" href="/villa/3003_miaresortfivebedroombeachfrontvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>米娅海滨别墅 | 越南 芽庄</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"对于我们这些SPG和IHG的常客来说，别墅的设计、设施、布草、服务，饮食、景色都很完美。8人4晚，泳池面积与深度足够嬉戏；5个房间景色面积相近、没有优劣；可供8-10人一起打牌喝酒聊天的地方超过5个；酒店餐厅品质OK，但价格没有体现越南优势，简餐人均100，BBQ人均400。酒店离市区20km，打车80左右，但住这样的别墅，去市区毫无意义，嘈杂的环境和人流，也没啥好买好逛的，仅吃饭便宜些。完美旅程，特别感谢珠海正和国际旅行员工Nico和Neil，体现了这家公司的情怀和人文，很喜欢也赞叹。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/14.png" alt="">
                        <div class="testimotial-right-c">
                          <p>林**</p>
                          <a target="_blank" href="/villa/3633_coralcayvilla1">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>珊瑚礁1号别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"不错的环境，度假好去处，特别宁静。每天起床都是面朝大海，风景独好"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/4.png" alt="">
                        <div class="testimotial-right-c">
                          <p>Zha****enbo</p>
                          <a target="_blank" href="/villa/1838_baantawantok">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>塔湾图克别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"总体别墅设施还是有些老，只有客厅有电视，房间里都没有，别墅的服务人员都还比较给力，就是下班的太早，晚餐结束就直接晚安了，弄的之后要找人完全找不到。管家LUCK还不错，后来还用她自己车带我们出去买东西，厨师烧的菜很好吃。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/3.png" alt="">
                        <div class="testimotial-right-c">
                          <p>崔*</p>
                          <a target="_blank" href="/villa/3326_premierdanangoceanaccessvilla">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>尊享岘港海景别墅 | 越南 岘港</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"非常棒的酒店，太适合一家老小入住了。这次非常幸运还被升级到海滩别墅，直面大海，水清沙幼，孩子在泳池玩的不亦乐乎，我是雅高会员，这次刚好赶上个活动，送了一晚in villa bbq，高大上到不行。服务也非常不错，每个人都很热情，早餐也不错，6:30-10:30，我们经常中餐都不吃了。有个会中文的管家，沟通也很棒。一定要找机会再去一次。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/6.png" alt="">
                        <div class="testimotial-right-c">
                          <p>4**********6.com</p>
                          <a target="_blank" href="/villa/1640_baankuno">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>班库诺别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"拍照渣渣前来上图，不过必须得承认别墅景色超美的！！！还有必须要说的是厨师太棒了~~"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/d0cf2223ddde9911b80ae7e80f12cfb1.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>刘*</p>
                          <a target="_blank" href="/villa/1303_lagunawaters">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>拉古娜别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅位于拉古娜区域内，周边几个拉古娜集团旗下的酒店都可以坐免费bus到达。有两位客房服务人员负责照顾我们，服务态度很好，设施非常齐全。到沙滩坐区域内bus五分钟到达，便利店在一公里范围内。如果需要买水果蔬菜肉类，需要走到2.5公里左右的易初莲花超市。总体来说，别墅比较安静，也比较便利。免费早餐包括面包、果汁、牛奶、酸奶、咖啡、麦片等，自己做饭也很方便。"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/14.png" alt="">
                        <div class="testimotial-right-c">
                          <p>L*******</p>
                          <a target="_blank" href="/villa/3636_coralcayvilla4">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>珊瑚礁4号别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"海景无敌，别墅所处的地段也不错，虽然在山上不过走去海边并不远，而且出路口就有一间7-11，而且餐厅也多，去查汶也就20分钟。唯一的遗憾就是服务和亚莎别墅的有点距离，可能有对比吧，希望能提高服务意识"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/14.png" alt="">
                        <div class="testimotial-right-c">
                          <p>L*******</p>
                          <a target="_blank" href="/villa/1500_villaakashasv03">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>亚莎别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"非常非常好的别墅，环境和服务都一流，除了第一天记错了航班日期，不过管家也马上开车过来接了，帮佣很热情也很帮忙，在这种环境下就静静待着也舒服，早知道多订两晚…"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/7.png" alt="">
                        <div class="testimotial-right-c">
                          <p>周**</p>
                          <a target="_blank" href="/villa/1889_villahalemalia">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>哈尔玛利亚别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施非常好,别墅服务非常好,客服接待服务非常好,行程提醒做得非常好,餐饮质量非常好,交通情况非常好,"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/1.png" alt="">
                        <div class="testimotial-right-c">
                          <p>1**********t.com</p>
                          <a target="_blank" href="/villa/2654_villaparadiso">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>普吉天堂别墅 | 泰国 普吉岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"景色超美的，还有提前安排了晚餐，大家也是非常满意，之后一直是吃吃吃玩玩玩，度假模式开启，夜市也是超级热闹，还不小心碰到了人妖小姐，哈哈，总之非常充实的一次旅行~~~玩的非常尽兴"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/461980e5e0b319010a181b7c61cdf6b3.jpg" alt="">
                        <div class="testimotial-right-c">
                          <p>向**</p>
                          <a target="_blank" href="/villa/1314_villamullioncove">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>觅丽湾别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅美丽是不像话。管家们都超级nice ！都舍不得走了！"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/9.png" alt="">
                        <div class="testimotial-right-c">
                          <p>周*</p>
                          <a target="_blank" href="/villa/3389_villagrandvista">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>苏梅远景别墅 | 泰国 苏梅岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"非常棒"</p></div>
                    <div class="testimontial-right-item">
                      <div>
                        <img class="testimotial-right-avatar" src="http://statics.hivilla.com//uploads/headimg/5.png" alt="">
                        <div class="testimotial-right-c">
                          <p>赵**</p>
                          <a target="_blank" href="/villa/1321_villajamalu">
                            <p class="color-ff8 testimotial-left-l">
                              <i class="icon-laction"></i>嘉玛露别墅 | 印度尼西亚 巴厘岛</p>
                          </a>
                        </div>
                      </div>
                      <p class="testimotial-right-info">"别墅设施非常好,别墅服务非常好,客服接待服务非常好,行程提醒做得非常好,餐饮质量,交通情况,"</p></div>
                  </div>
                </div>
                <div class="icons-arrow icons-up-arrow"></div>
                <div class="icons-arrow icons-down-arrow"></div>
              </div>
            </div>
          </div>
          <!-- 客户评价 结束 -->
          <!--分类列表 1 -->
          <div class="slV1_I_L w1100">
            <div class="slV1_I_L_hd_bm">
              <div class="slV1_I_L_hd hd1">
                <h2 class="title">限时优惠</h2>
                <div class="link">
                  <a href="/discounts/85">巴厘</a>
                  <a href="/discounts/25">苏梅</a>
                  <a href="/discounts/26">普吉</a>
                  <a href="/discounts/652">日本</a>
                  <a href="/discounts/0">更多+</a></div>
              </div>
            </div>
            <div class="slV1_I_L_con con1">
              <ul class="slV1_I_L_con_ul border_d_r w1097">
                <li class="w357">
                  <i class="a_ibg Discount new-s-off">
                    <p>25%OFF</p>
                    <p>仅剩 3天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="法国 巴黎 昆茜公寓Apartment Quincy" href="/villa/3336_apartmentquincy">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://statics.hivilla.com/uploads/destination/article/3/3336/mobile.15.jpg#apartmentquincy昆茜公寓" alt="昆茜公寓Apartment Quincy"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/3336_apartmentquincy">昆茜公寓</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="法国 度假" href="/destinations/14">法国</a>
                      <a target="_blank" title="巴黎 度假" href="/destinations/77">巴黎</a>
                      <!-- <span>1  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>1175</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥783/ 晚起</span></div>
                  <div class="divyy">
                    <span>城市景观</span>
                    <span>埃菲尔铁塔景</span>
                    <span>婚礼</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>1</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>1</div></div>
                </li>
                <li class="w357">
                  <i class="a_ibg Discount new-s-off">
                    <p>住5付4</p>
                    <p>仅剩 2天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="英国 伦敦 舍瓦尔格洛斯特双卧公寓Cheval Gloucester Park_2-bedroom Apartment" href="/villa/3158_chevalgloucesterpark_2bedroomapartment">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image02.hivilla.com/uploads/destination/article/3/3158/mobile.1.jpg#chevalgloucesterpark_2bedroomapartment舍瓦尔格洛斯特双卧公寓" alt="舍瓦尔格洛斯特双卧公寓Cheval Gloucester Park_2-bedroom Apartment"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/3158_chevalgloucesterpark_2bedroomapartment">舍瓦尔格洛斯特双卧公寓</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="英国 度假" href="/destinations/761">英国</a>
                      <a target="_blank" title="伦敦 度假" href="/destinations/762">伦敦</a>
                      <!-- <span>2  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>3323</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥831/ 晚起</span></div>
                  <div class="divyy">
                    <span>城市景观</span>
                    <span>家庭</span>
                    <span>商务</span>
                    <span>亲子</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>2</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>2</div></div>
                </li>
                <li class="w357">
                  <i class="a_ibg Discount new-s-off">
                    <p>40%OFF</p>
                    <p>仅剩 6天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="印度洋 马尔代夫 阿米拉公馆Amilla Villa Estate" href="/villa/4183_amillavillaestate">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image01.hivilla.com/uploads/destination/article/4/4183/mobile.16.jpg#amillavillaestate阿米拉公馆" alt="阿米拉公馆Amilla Villa Estate"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/4183_amillavillaestate">阿米拉公馆</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="印度洋 度假" href="/destinations/10">印度洋</a>
                      <a target="_blank" title="马尔代夫 度假" href="/destinations/647">马尔代夫</a>
                      <!-- <span>6  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>102769</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥14274/ 晚起</span></div>
                  <div class="divyy">
                    <span>海景</span>
                    <span>海滩</span>
                    <span>家庭</span>
                    <span>亲子</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>6</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>6</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div></div>
                </li>
                <li class="w357">
                  <i class="a_ibg Discount new-s-off">
                    <p>25%OFF</p>
                    <p>仅剩 2天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="印度尼西亚 巴厘岛 拉雅别墅3号The Layar – Villa - 3 Bedroom" href="/villa/1472_thelayarvilla3bedroom">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image02.hivilla.com/uploads/destination/article/1/1472/mobile.0.jpg#thelayarvilla3bedroom拉雅别墅3号" alt="拉雅别墅3号The Layar – Villa - 3 Bedroom"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1472_thelayarvilla3bedroom">拉雅别墅3号</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="印度尼西亚 度假" href="/destinations/18">印度尼西亚</a>
                      <a target="_blank" title="巴厘岛 度假" href="/destinations/85">巴厘岛</a>
                      <!-- <span>3  卧</span> --></span>
                    <strong class="slV1_fs3">
                      <img style="width: 7px;position: relative;top: 3px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">¥
                      <span>2491</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥554/ 晚起</span></div>
                  <div class="divyy">
                    <span>园景</span>
                    <span>商务</span>
                    <span>婚礼</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>3</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>3</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div></div>
                </li>
                <li class="w357">
                  <a href="javascript:void(0)">
                    <div class="panorama">
                      <span>全景</span></div>
                  </a>
                  <i class="a_ibg Discount new-s-off">
                    <p>40%OFF</p>
                    <p>仅剩 7天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="泰国 苏梅岛 萨穆嘉纳26号别墅Samujana Villa 26" href="/villa/1958_samujanavilla26">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image02.hivilla.com/uploads/destination/article/1/1958/mobile.0.jpg#samujanavilla26萨穆嘉纳26号别墅" alt="萨穆嘉纳26号别墅Samujana Villa 26"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1958_samujanavilla26">萨穆嘉纳26号别墅</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="泰国 度假" href="/destinations/2">泰国</a>
                      <a target="_blank" title="苏梅岛 度假" href="/destinations/25">苏梅岛</a>
                      <!-- <span>5  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>8318</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥1387/ 晚起</span></div>
                  <div class="divyy">
                    <span>海景</span>
                    <span>商务</span>
                    <span>蜜月</span>
                    <span>婚礼</span>
                    <span>家庭</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>5</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>6</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div></div>
                </li>
                <li class="w357">
                  <i class="a_ibg Discount new-s-off">
                    <p>50%OFF</p>
                    <p>仅剩 2天</p>
                  </i>
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="斐济 塔妙妮岛 ​塔妙妮棕榈树天域别墅Taveuni Palms Resort-Hirizon villa" href="/villa/4081_taveunipalmsresorthirizonvilla">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image01.hivilla.com/uploads/destination/article/4/4081/mobile.8.jpg#taveunipalmsresorthirizonvilla​塔妙妮棕榈树天域别墅" alt="​塔妙妮棕榈树天域别墅Taveuni Palms Resort-Hirizon villa"></a>
                  </div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/4081_taveunipalmsresorthirizonvilla">​塔妙妮棕榈树天域别墅</a>
                    <span class="dsp slV1_fs5">
                      <a target="_blank" title="斐济 度假" href="/destinations/1018">斐济</a>
                      <a target="_blank" title="塔妙妮岛 度假" href="/destinations/1029">塔妙妮岛</a>
                      <!-- <span>3  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>5072</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥1691/ 晚起</span></div>
                  <div class="divyy">
                    <span>自然</span>
                    <span>海滩</span>
                    <span>雨林景观</span>
                    <span>蜜月</span>
                    <span>婚礼</span>
                    <span>亲子</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>3</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>3</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div></div>
                </li>
              </ul>
            </div>
          </div>
          <!--分类列表 1 END-->
          <!--分类列表 2 -->
          <div class="slV1_I_L w1100">
            <div class="slV1_I_L_hd_bm">
              <div class="slV1_I_L_hd hd2">
                <h2 class="title">最受欢迎别墅</h2>
                <div class="link">
                  <a title="巴厘" href="/destinations/85">巴厘</a>
                  <a title="苏梅" href="/destinations/25">苏梅</a>
                  <a title="普吉" href="/destinations/26">普吉</a>
                  <a title="新西兰" href="/destinations/656">新西兰</a>
                  <!-- <a title="更多最受欢迎别墅" href="/destinations/606">更多+</a> --></div>
              </div>
            </div>
            <div class="slV1_I_L_con con2">
              <ul class="slV1_I_L_con_ul w1097">
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="泰国 普吉岛 萨玛尼别墅Villa Zamani" href="/villa/1298_villazamani">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="萨玛尼别墅-Villa Zamani" data-url="http://image02.hivilla.com/uploads/destination/article/1/1298/mobile.68.jpg#villazamaniVilla Zamani"></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1298_villazamani">萨玛尼别墅</a>
                    <span class="dsp slV1_fs5">
                      <a title="泰国" href="/destinations/2">泰国</a>
                      <a target="_blank" title="普吉岛" href="/destinations/26">普吉岛</a>
                      <!-- <span>5  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>7685</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥769/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>海景</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>5</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>5</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 765&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 15</div></div>
                </li>
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="泰国 普吉岛 香缇别墅Shanti at Villas Jivana " href="/villa/1302_shantiatvillasjivana">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="香缇别墅-Shanti at Villas Jivana " data-url="http://statics.hivilla.com/uploads/destination/article/1/1302/mobile.3.jpg#shantiatvillasjivanaShanti at Villas Jivana "></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1302_shantiatvillasjivana">香缇别墅</a>
                    <span class="dsp slV1_fs5">
                      <a title="泰国" href="/destinations/2">泰国</a>
                      <a target="_blank" title="普吉岛" href="/destinations/26">普吉岛</a>
                      <!-- <span>4-6  卧</span> --></span>
                    <strong class="slV1_fs3">
                      <img style="width: 7px;position: relative;top: 3px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">¥
                      <span>12172</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥1522/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>海滩</span>
                    <span>家庭</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>4-6</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>7</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 732&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 12</div></div>
                </li>
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="印度尼西亚 巴厘岛 拉雅别墅3号The Layar – Villa - 3 Bedroom" href="/villa/1472_thelayarvilla3bedroom">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="拉雅别墅3号-The Layar – Villa - 3 Bedroom" data-url="http://image02.hivilla.com/uploads/destination/article/1/1472/mobile.0.jpg#thelayarvilla3bedroomThe Layar – Villa - 3 Bedroom"></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1472_thelayarvilla3bedroom">拉雅别墅3号</a>
                    <span class="dsp slV1_fs5">
                      <a title="印度尼西亚" href="/destinations/18">印度尼西亚</a>
                      <a target="_blank" title="巴厘岛" href="/destinations/85">巴厘岛</a>
                      <!-- <span>3  卧</span> --></span>
                    <strong class="slV1_fs3">
                      <img style="width: 7px;position: relative;top: 3px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">¥
                      <span>3321</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥554/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>园景</span>
                    <span>商务</span>
                    <span>婚礼</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>3</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>3</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 837&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 11</div></div>
                </li>
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="印度尼西亚 巴厘岛 塔曼阿斯曼别墅Villa Taman Ahimsa" href="/villa/1319_villatamanahimsa">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="塔曼阿斯曼别墅-Villa Taman Ahimsa" data-url="http://image02.hivilla.com/uploads/destination/article/1/1319/mobile.0.jpg#villatamanahimsaVilla Taman Ahimsa"></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/1319_villatamanahimsa">塔曼阿斯曼别墅</a>
                    <span class="dsp slV1_fs5">
                      <a title="印度尼西亚" href="/destinations/18">印度尼西亚</a>
                      <a target="_blank" title="巴厘岛" href="/destinations/85">巴厘岛</a>
                      <!-- <span>4-7  卧</span> --></span>
                    <strong class="slV1_fs3">
                      <img style="width: 7px;position: relative;top: 3px;" src="<?php echo $baseUrl?>/img/icon_xianshi.png">¥
                      <span>5681</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥711/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>园景</span>
                    <span>海滩</span>
                    <span>婚礼</span>
                    <span>商务</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>4-7</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>7</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 710&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 14</div></div>
                </li>
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="越南 芽庄 米娅海滨别墅Mia Resort Five Bedroom Beachfront Villa" href="/villa/3003_miaresortfivebedroombeachfrontvilla">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="米娅海滨别墅-Mia Resort Five Bedroom Beachfront Villa" data-url="http://statics.hivilla.com/uploads/destination/article/3/3003/mobile.2.jpg#miaresortfivebedroombeachfrontvillaMia Resort Five Bedroom Beachfront Villa"></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/3003_miaresortfivebedroombeachfrontvilla">米娅海滨别墅</a>
                    <span class="dsp slV1_fs5">
                      <a title="越南" href="/destinations/684">越南</a>
                      <a target="_blank" title="芽庄" href="/destinations/804">芽庄</a>
                      <!-- <span>5  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>7985</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥799/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>海滩</span>
                    <span>家庭</span>
                    <span>婚礼</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>5</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>4</div>
                    <div class="icon-wsj">
                      <span class="iconfont-home">&#xe607;</span>1</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 510&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 5</div></div>
                </li>
                <li class="w357">
                  <!--<i class="newsicon2 Discount"></i>-->
                  <div class="container-pr">
                    <a target="_blank" title="新西兰 皇后镇 柯梦妮基11号别墅Commonage Villa 11" href="/villa/3528_commonagevilla11">
                      <img class="scrollLoading h240" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="柯梦妮基11号别墅-Commonage Villa 11" data-url="http://statics.hivilla.com/uploads/destination/article/3/3528/mobile.22.jpg#commonagevilla11Commonage Villa 11"></a>
                    <!-- 实时房态标记 开始 -->
                    <div class="hd-bg-w hidden">
                      <i class="icon-hd"></i>
                      <div class="hd-notice">
                        <p>即时预定</p>
                        <p>无需等待客服确认即可付款完成预订</p>
                      </div>
                    </div>
                    <!-- 实时房态标记 结束 --></div>
                  <div class="con">
                    <a target="_blank" class="title slV1_fs3" href="/villa/3528_commonagevilla11">柯梦妮基11号别墅</a>
                    <span class="dsp slV1_fs5">
                      <a title="新西兰" href="/destinations/656">新西兰</a>
                      <a target="_blank" title="皇后镇" href="/destinations/657">皇后镇</a>
                      <!-- <span>4  卧</span> --></span>
                    <strong class="slV1_fs3">¥
                      <span>4749</span>/晚起</strong>
                    <span class="Lflr slV1_fs5">人均 ￥594/ 晚起</span></div>
                  <!-- <div class="divyy"><span>-->
                  <!--</span></div>-->
                  <div class="divyy">
                    <span>自然</span>
                    <span>山景</span>
                    <span>湖景</span>
                    <span>家庭</span></div>
                  <div class="icons">
                    <div class="icon-ws">
                      <span class="iconfont-home">&#xe606;</span>4</div>
                    <div class="icon-yc">
                      <span class="iconfont-home">&#xe60e;</span>3</div>
                    <div class="been_comm">
                      <i class="icon iconfont newicon">&#xe602;</i>&nbsp; 82&nbsp;&nbsp;
                      <i class="icon iconfont newicon">&#xe603;</i>&nbsp; 0</div></div>
                </li>
              </ul>
            </div>
          </div>
          <!--分类列表 2 END-->
          <!--分类列表 3 -->
          <div class="slV1_I_L w1100">
            <div class="slV1_I_L_hd_bm">
              <div class="slV1_I_L_hd hd3">
                <h2 class="title">极奢系列</h2>
                <div class="link">
                  <a class="index-tab1A" href="/destinations/657">更多
                    <span id="site-name">皇后镇</span>极奢别墅+</a></div>
              </div>
            </div>
            <div class="slV1_I_L_con con3">
              <div class="slV1_I_L_con_div">
                <ul>
                  <li class="jieji_1  jieji_1s cur" data-id="657">
                    <p>皇后镇</p>
                    <p>Queenstown</p>
                  </li>
                  <li class="jieji_2" data-id="606">
                    <p>洛杉矶</p>
                    <p>Los Angeles</p>
                  </li>
                  <li class="jieji_3" data-id="77">
                    <p>巴黎</p>
                    <p>Paris</p>
                  </li>
                  <li class="jieji_4" data-id="762">
                    <p>伦敦</p>
                    <p>London</p>
                  </li>
                  <li class="jieji_5" data-id="85">
                    <p>巴厘</p>
                    <p>Bali</p>
                  </li>
                  <li class="jieji_6" data-id="26">
                    <p>普吉</p>
                    <p>Puhket</p>
                  </li>
                  <li class="jieji_7" data-id="25">
                    <p>苏梅岛</p>
                    <p>Koh Samui</p>
                  </li>
                </ul>
              </div>
              <div class="ul_main">
                <ul class="slV1_I_L_con_ul slV1_cur" data-ajaxid="1">
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/2176_thecopperhouse" title=" 皇后镇 库柏别墅The Copper House" target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image01.hivilla.com/uploads/destination/article/2/2176/mobile.2.jpg#库柏别墅库柏别墅" alt="库柏别墅The Copper House"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="库柏别墅The Copper House" href="/villa/2176_thecopperhouse">库柏别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>6  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>99281</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥8274/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>6</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>6</div>
                      <div class="icon-wsj">
                        <span class="iconfont-home">&#xe607;</span>1</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/2717_lodgeatthehills" title=" 皇后镇 私人高尔夫独享别墅Lodge at The Hills" target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image02.hivilla.com/uploads/destination/article/2/2717/mobile.4.jpg#私人高尔夫独享别墅私人高尔夫独享别墅" alt="私人高尔夫独享别墅Lodge at The Hills"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="私人高尔夫独享别墅Lodge at The Hills" href="/villa/2717_lodgeatthehills">私人高尔夫独享别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>6  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>94964</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥7914/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>6</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>7</div>
                      <div class="icon-wsj">
                        <span class="iconfont-home">&#xe607;</span>1</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/4215_stelvio" title=" 皇后镇 斯泰尔维奥别墅Stelvio" target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://statics.hivilla.com/uploads/destination/article/4/4215/mobile.1.jpg#斯泰尔维奥别墅斯泰尔维奥别墅" alt="斯泰尔维奥别墅Stelvio"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="斯泰尔维奥别墅Stelvio" href="/villa/4215_stelvio">斯泰尔维奥别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>5  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>86148</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥8615/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>5</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>5</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/2446_matakaurilodgeownerscottage" title=" 皇后镇 玛塔卡瑞别墅Matakauri Lodge Owner's Cottage " target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image01.hivilla.com/uploads/destination/article/2/2446/mobile.20.jpg#玛塔卡瑞别墅玛塔卡瑞别墅" alt="玛塔卡瑞别墅Matakauri Lodge Owner's Cottage "></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="玛塔卡瑞别墅Matakauri Lodge Owner's Cottage " href="/villa/2446_matakaurilodgeownerscottage">玛塔卡瑞别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>2-4  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>52123</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥13031/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>2-4</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>4</div>
                      <div class="icon-wsj">
                        <span class="iconfont-home">&#xe607;</span>1</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/3568_jaggededge" title=" 皇后镇 嘉吉德别墅Jagged Edge" target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://image01.hivilla.com/uploads/destination/article/3/3568/mobile.21.jpg#嘉吉德别墅嘉吉德别墅" alt="嘉吉德别墅Jagged Edge"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="嘉吉德别墅Jagged Edge" href="/villa/3568_jaggededge">嘉吉德别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>3  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>23982</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥3997/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>3</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>3</div>
                      <div class="icon-wsj">
                        <span class="iconfont-home">&#xe607;</span>1</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a href="/villa/3567_theguesthouseatjaggededge" title=" 皇后镇 嘉吉德宾客别墅The Guest House at Jagged Edge" target="_blank">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" data-url="http://statics.hivilla.com/uploads/destination/article/3/3567/mobile.1.jpg#嘉吉德宾客别墅嘉吉德宾客别墅" alt="嘉吉德宾客别墅The Guest House at Jagged Edge"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" class="title slV1_fs3" title="嘉吉德宾客别墅The Guest House at Jagged Edge" href="/villa/3567_theguesthouseatjaggededge">嘉吉德宾客别墅</a>
                      <span class="dsp slV1_fs5">
                        <a title="皇后镇" href="/destinations/657">皇后镇</a>
                        <!-- <span>5  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>19186</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥1919/ 晚起</span></div>
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>5</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>6</div>
                      <div class="icon-wsj">
                        <span class="iconfont-home">&#xe607;</span>1</div></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--分类列表 3 END-->
          <!--分类列表 4 -->
          <div class="slV1_I_L w1100">
            <div class="slV1_I_L_hd_bm">
              <div class="slV1_I_L_hd">
                <h2 class="title">主题别墅</h2>
                <div class="link">
                  <a class="index-tab2A" href="/subject/49">更多
                    <span id="site-name1">家庭</span>主题别墅+</a></div>
              </div>
            </div>
            <div class="slV1_I_L_con con4">
              <div class="slV1_I_L_con_div">
                <ul>
                  <li data-name="家庭" data-id="49" class="cur">
                    <div class="shade"></div>
                    <img alt="家庭" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_01.png?t=161210" src="<?php echo $baseUrl?>/img/imgsrc.gif">
                    <img alt="家庭" class="font" src="<?php echo $baseUrl?>/img/theme-font_01.png?t=161210"></li>
                  <li data-name="蜜月" data-id="27">
                    <div class="shade"></div>
                    <img alt="蜜月" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_06.png?t=161210" src="<?php echo $baseUrl?>/img/imgsrc.gif">
                    <img alt="蜜月" class="font" src="<?php echo $baseUrl?>/img/theme-font_06.png?t=161210"></li>
                  <li data-name="婚礼" data-id="38">
                    <div class="shade"></div>
                    <img alt="婚礼" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_02.png?t=161210" src="<?php echo $baseUrl?>/img/imgsrc.gif">
                    <img alt="婚礼" class="font" src="<?php echo $baseUrl?>/img/theme-font_02.png?t=161210"></li>
                  <li data-name="商务" data-id="20">
                    <div class="shade"></div>
                    <img alt="商务" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_03.png?t=161210">
                    <img alt="商务" class="font" src="<?php echo $baseUrl?>/img/theme-font_03.png?t=161210"></li>
                  <li data-name="探险" data-id="22">
                    <div class="shade"></div>
                    <img alt="探险" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_04.png?t=161210">
                    <img alt="探险" class="font" src="<?php echo $baseUrl?>/img/theme-font_04.png?t=161210"></li>
                  <li data-name="明星" data-id="327">
                    <div class="shade"></div>
                    <img alt="明星入住" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="pic scrollLoading" data-url="<?php echo $baseUrl?>/img/theme_05.png?t=161210">
                    <img alt="明星入住" class="font" src="<?php echo $baseUrl?>/img/theme-font_05.png?t=161210"></li>
                </ul>
              </div>
              <div class="ul_main">
                <ul class="slV1_I_L_con_ul slV1_cur">
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="意大利 米兰 卡斯蒂利亚垂直森林公寓1号Castillia-Bosco Verticale – 79892" href="/villa/3903_castilliaboscoverticale79892">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="卡斯蒂利亚垂直森林公寓1号" data-url="http://statics.hivilla.com/uploads/destination/article/3/3903/mobile.1.jpg#castilliaboscoverticale79892卡斯蒂利亚垂直森林公寓1号"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/3903_castilliaboscoverticale79892">卡斯蒂利亚垂直森林公寓1号</a>
                      <span class="dsp slV1_fs5">
                        <a title="意大利" href="/destinations/9">意大利</a>
                        <a title="米兰" href="/destinations/1000">米兰</a>
                        <!-- <span>2  卧</span> --></span>
                      <strong class="slV1_fs3">价格请咨询客服</strong></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>2</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>2</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="意大利 米兰 卡斯蒂利亚垂直森林公寓2号Castillia Bosco Verticale 79888" href="/villa/3943_castilliaboscoverticale79888">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="卡斯蒂利亚垂直森林公寓2号" data-url="http://image01.hivilla.com/uploads/destination/article/3/3943/mobile.18.jpg#castilliaboscoverticale79888卡斯蒂利亚垂直森林公寓2号"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/3943_castilliaboscoverticale79888">卡斯蒂利亚垂直森林公寓2号</a>
                      <span class="dsp slV1_fs5">
                        <a title="意大利" href="/destinations/9">意大利</a>
                        <a title="米兰" href="/destinations/1000">米兰</a>
                        <!-- <span>2  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>2847</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥712/ 晚起</span></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>2</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>2</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="意大利 米兰 卡斯蒂利亚垂直森林公寓3号Castilla Bosco Verticale 3969" href="/villa/3922_castillaboscoverticale3969">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="卡斯蒂利亚垂直森林公寓3号" data-url="http://image01.hivilla.com/uploads/destination/article/3/3922/mobile.1.jpg#castillaboscoverticale3969卡斯蒂利亚垂直森林公寓3号"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/3922_castillaboscoverticale3969">卡斯蒂利亚垂直森林公寓3号</a>
                      <span class="dsp slV1_fs5">
                        <a title="意大利" href="/destinations/9">意大利</a>
                        <a title="米兰" href="/destinations/1000">米兰</a>
                        <!-- <span>2  卧</span> --></span>
                      <strong class="slV1_fs3">价格请咨询客服</strong></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>2</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>2</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="美国 洛杉矶 乐维洛杉矶三号高级公寓Level Furnished Living Apartment 3-bedroom" href="/villa/2539_levelfurnishedlivingapartment3bedroom">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="乐维洛杉矶三号高级公寓" data-url="http://image01.hivilla.com/uploads/destination/article/2/2539/mobile.8.jpg#levelfurnishedlivingapartment3bedroom乐维洛杉矶三号高级公寓"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/2539_levelfurnishedlivingapartment3bedroom">乐维洛杉矶三号高级公寓</a>
                      <span class="dsp slV1_fs5">
                        <a title="美国" href="/destinations/1">美国</a>
                        <a title="洛杉矶" href="/destinations/606">洛杉矶</a>
                        <!-- <span>3  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>9190</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥1532/ 晚起</span></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>3</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>3</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="美国 洛杉矶 乐维洛杉矶一号高级公寓Level Furnished Living Apartment 1-bedroom" href="/villa/2514_levelfurnishedlivingapartment1bedroom">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="乐维洛杉矶一号高级公寓" data-url="http://statics.hivilla.com/uploads/destination/article/2/2514/mobile.35.jpg#levelfurnishedlivingapartment1bedroom乐维洛杉矶一号高级公寓"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/2514_levelfurnishedlivingapartment1bedroom">乐维洛杉矶一号高级公寓</a>
                      <span class="dsp slV1_fs5">
                        <a title="美国" href="/destinations/1">美国</a>
                        <a title="洛杉矶" href="/destinations/606">洛杉矶</a>
                        <!-- <span>1  卧</span> --></span>
                      <strong class="slV1_fs3">¥
                        <span>2293</span>/晚起</strong>
                      <span class="Lflr slV1_fs5">人均 ￥1147/ 晚起</span></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>1</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>1</div></div>
                  </li>
                  <li>
                    <!--<i class="newsicon2 Discount"></i>-->
                    <div class="container-pr">
                      <a target="_blank" title="意大利 米兰 孔法洛涅里垂直森林公寓4号Confalonieri Bosco Verticale 4063" href="/villa/3946_confalonieriboscoverticale4063">
                        <img class="scrollLoading" src="<?php echo $baseUrl?>/img/imgsrc.gif" alt="孔法洛涅里垂直森林公寓4号" data-url="http://image01.hivilla.com/uploads/destination/article/3/3946/mobile.4.jpg#confalonieriboscoverticale4063孔法洛涅里垂直森林公寓4号"></a>
                      <!-- 实时房态标记 开始 -->
                      <div class="hd-bg-w hidden">
                        <i class="icon-hd"></i>
                        <div class="hd-notice">
                          <p>即时预定</p>
                          <p>无需等待客服确认即可付款完成预订</p>
                        </div>
                      </div>
                      <!-- 实时房态标记 结束 --></div>
                    <div class="con">
                      <a target="_blank" title="" class="title slV1_fs3" href="/villa/3946_confalonieriboscoverticale4063">孔法洛涅里垂直森林公寓4号</a>
                      <span class="dsp slV1_fs5">
                        <a title="意大利" href="/destinations/9">意大利</a>
                        <a title="米兰" href="/destinations/1000">米兰</a>
                        <!-- <span>3  卧</span> --></span>
                      <strong class="slV1_fs3">价格请咨询客服</strong></div>
                    <!-- <div class="divyy"><span>-->
                    <!--</span></div>-->
                    <div class="icons">
                      <div class="icon-ws">
                        <span class="iconfont-home">&#xe606;</span>3</div>
                      <div class="icon-yc">
                        <span class="iconfont-home">&#xe60e;</span>2</div></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--分类列表 4 END-->
          <div class="index-icobz w1100">
            <ul>
              <li>
                <ins></ins>
                <i class="icon1"></i>
                <a title="珠海正和国际旅行 别墅度假 海景别墅度假" href="/subject/60">更多海景别墅</a></li>
              <li>
                <ins></ins>
                <i class="icon2"></i>
                <a title="珠海正和国际旅行 别墅度假 园景别墅度假" href="/subject/62">更多园景别墅</a></li>
              <li>
                <ins></ins>
                <i class="icon3"></i>
                <a title="珠海正和国际旅行 别墅度假 海滩别墅度假" href="/subject/63">更多海滩别墅</a></li>
              <li>
                <ins></ins>
                <i class="icon4"></i>
                <a title="珠海正和国际旅行 别墅度假 山景别墅度假" href="/subject/36">更多山景别墅</a></li>
              <li>
                <ins></ins>
                <i class="icon5"></i>
                <a title="珠海正和国际旅行 别墅度假 自然景观别墅度假" href="/subject/9">更多自然别墅</a></li>
              <li>
                <i class="icon6"></i>
                <a title="珠海正和国际旅行 别墅度假 悬崖景观别墅度假" href="/subject/64">更多悬崖别墅</a></li>
            </ul>
          </div>
          <!--分类列表 5 -->
          <div class="slV1_I_L w1100">
            <div class="slV1_I_L_hd_bm">
              <div class="slV1_I_L_hd hd2">
                <h2 class="title">度假攻略</h2>
                <div class="link">
                  <a href="/place.html">更多+</a></div>
              </div>
            </div>
            <div class="slV1_I_L_con con5">
              <ul class="slV1_I_L_con_ul">
                <li style="margin-right: 13px;">
                  <div>
                    <a href="/place/paris-77.html" target="_blank">
                      <img data-url="<?php echo $baseUrl?>/img/france_paris.jpg" alt="巴黎旅游攻略" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="scrollLoading"></a>
                  </div>
                  <div class="con">
                    <a href="/place/paris-77.html" class="title slV1_fs3" target="_blank">巴黎旅游攻略</a></div>
                </li>
                <li style="margin-right: 13px;">
                  <div>
                    <a href="/place/bali-85.html" target="_blank">
                      <img data-url="<?php echo $baseUrl?>/img/bali.jpg" alt="巴厘岛旅游攻略" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="scrollLoading"></a>
                  </div>
                  <div class="con">
                    <a href="/place/bali-85.html" class="title slV1_fs3" target="_blank">巴厘岛旅游攻略</a></div>
                </li>
                <li style="margin-right: 13px;">
                  <div>
                    <a href="/place/newzealand-656.html" target="_blank">
                      <img data-url="<?php echo $baseUrl?>/img/newzealand.jpg" alt="新西兰旅游攻略" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="scrollLoading"></a>
                  </div>
                  <div class="con">
                    <a href="/place/newzealand-656.html" class="title slV1_fs3" target="_blank">新西兰旅游攻略</a></div>
                </li>
                <li style="margin-right: 13px;">
                  <div>
                    <a href="/place/london-762.html" target="_blank">
                      <img data-url="<?php echo $baseUrl?>/img/london.jpg" alt="伦敦旅游攻略" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="scrollLoading"></a>
                  </div>
                  <div class="con">
                    <a href="/place/london-762.html" class="title slV1_fs3" target="_blank">伦敦旅游攻略</a></div>
                </li>
              </ul>
              <div class="slV1_I_L_con_div">
                <div>
                  <a href="/place/thailand-2.html" title="">
                    <img data-url="<?php echo $baseUrl?>/img/thailand.jpg" alt="泰国旅游攻略" src="<?php echo $baseUrl?>/img/imgsrc.gif" class="scrollLoading"></a>
                </div>
                <div class="con">
                  <a href="/place/london-762.html" class="title slV1_fs3" target="_blank">泰国旅游攻略</a></div>
              </div>
            </div>
          </div>
          <!--分类列表 5 END-->
          <div class="Lcfb"></div>
          <div class="index-link w1100-a">
            <h6>合作伙伴</h6>
            <div class="links Lcfx linko">
              <a rel="nofollow" target="_blank" title="支付宝-珠海正和国际旅行 别墅度假" href="http://www.alipay.com">
                <img src="https://i.alipayobjects.com/i/localhost/png/201406/2m8CambYir_src.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="去哪儿-珠海正和国际旅行 别墅度假" href="http://yaaa1.package.qunar.com/">
                <img src="<?php echo $baseUrl?>img/84950caca689d1d44c4713aece87f719.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="淘宝-珠海正和国际旅行 别墅度假" href="http://shop109860818.taobao.com/">
                <img src="<?php echo $baseUrl?>img/333.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="福布斯-珠海正和国际旅行 别墅度假" href="http://www.forbeschina.com">
                <img src="<?php echo $baseUrl?>/img/334.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="PATA-珠海正和国际旅行 别墅度假" href="http://patachina.org/">
                <img src="<?php echo $baseUrl?>/img/logo-PATA.png" width="52px"></a>
              <a rel="nofollow" target="_blank" title="IATA-珠海正和国际旅行 别墅度假" href="http://www.iata.org/Pages/default.aspx">
                <img src="<?php echo $baseUrl?>/img/logo-iata-2012.png" width="52px"></a>
              <a rel="nofollow" target="_blank" title="汇付天下-珠海正和国际旅行 别墅度假" href="http://www.chinapnr.com">
                <img src="<?php echo $baseUrl?>/img/331.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="胡润百富-珠海正和国际旅行 别墅度假" href="http://www.hurun.net">
                <img src="<?php echo $baseUrl?>/img/332.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="平安万里通-珠海正和国际旅行 别墅度假" href="http://vip.wanlitong.com/haidao.html">
                <img src="<?php echo $baseUrl?>/img/pingan.png" width="80px"></a>
              <a rel="nofollow" target="_blank" title="中国工商银行-珠海正和国际旅行 别墅度假" href="http://booking.hclub.com/Travels/">
                <img src="<?php echo $baseUrl?>/img/icbc1.png" width="110px"></a>
              <a rel="nofollow" target="_blank" title="上海珠海正和国际旅行旅行社专营店-阿里旅行-去啊-珠海正和国际旅行 别墅度假" href="http://shdlglxs.alitrip.com/">
                <img src="<?php echo $baseUrl?>/img/ali.png" width="90px"></a>
              <a rel="nofollow" target="_blank" title="上海珠海正和国际旅行旅行社天猫店-珠海正和国际旅行 别墅度假" href="http://shdlglxs.alitrip.com/">
                <img src="<?php echo $baseUrl?>/img/tianmao.png" width="80px"></a>
            </div>
            <br/>友情链接：
            <a href="http://www.zhengheworld.com" target="_blank">珠海正和国际旅行别墅度假</a>
            <a href="http://weibo.com/senseluxury" target="_blank">新浪微博</a>
            <a href="http://shdlglxs.alitrip.com" target="_blank">天猫</a>
            <a href="http://yaaa1.package.qunar.com" target="_blank">去哪儿</a>
            <a href="http://vip.wanlitong.com/haidao.html" target="_blank">平安万里通</a>
            <a href="http://www.xiaoxiaw.com" target="_blank">中国国际旅行社</a>
            <a href="http://www.itrip.com/ouzhou/" target="_blank">欧洲自由行</a>
            <a href="http://www.cdcyts.cn/" target="_blank">成都中国青年旅行社</a>
            <a href="http://www.uucits.com/" target="_blank">深圳旅行社</a>
            <a href="http://www.czyoo.com/" target="_blank">广东众游网</a>
            <a href="http://cn.toursforfun.com/europe-all-tours/" target="_blank">欧洲旅游路线</a>
            <a href="http://www.qulv.com" target="_blank">海岛游</a>
            <a href="http://www.haiwan.com" target="_blank">海玩网</a>
            <a href="http://travel.qunar.com/p-cs299878-shanghai-jingdian" target="_blank">上海旅游景点大全</a>
            <a href="http://travel.qunar.com/p-cs299878-shanghai" target="_blank">上海旅游攻略</a>
            <a href="http://www.yiqihi.com" target="_blank">当地华人导游</a></div>
          <div class="index-say">
            <!-- 用户说 -->
            <div class="say-title">
              <h2>超过
                <span>62,092</span>位客户赞誉</h2></div>
            <div class="say-slider">
              <ul class="slider-ul">
                <li class="slider-li">
                  <span class="marks-left"></span>
                  <p>如果你想让你的客户更加离不开你，我建议你邀请他们去海外度假别墅住住。我们已经尝试了好几次珠海正和国际旅行Sense Luxury的服务平台，每次客户都非常满意！别墅的业主很热情，亲自开着奔驰车送我们的客户去超市购物。他还帮我们租车。管家贴心打理好了所有的行程安排。更令我们客户感动的是，私厨还是非常细心的询问了每个人的食物过敏和忌口情况。非常贴心周到！我们将来肯定还会来珠海正和国际旅行Sense Luxury招待我们重要的伙伴的。</p>
                  <span class="marks-right"></span>
                </li>
                <li class="slider-li">
                  <span class="marks-left"></span>
                  <p>别墅很宽敞，容纳公司50人的outing绰绰有余。私密性又强，举办商务活动非常合适。加上四周环绕的海景，劳累耗时的会议也变得轻松，感觉不到累和无聊。一想到可以再次在美丽的海景别墅中享受悠然假期，我们的员工都充满动力。</p>
                  <span class="marks-right"></span>
                </li>
                <li class="slider-li">
                  <span class="marks-left"></span>
                  <p>别墅很私密，服务团队非常好，不仅提供优质的服务，而且还尊重客人的私人空间。别墅奢华宽敞，距离海滩很近几步之遥，非常赞的美景，很享受在这里的时光，旅程非常愉快！</p>
                  <span class="marks-right"></span>
                </li>
                <li class="slider-li">
                  <span class="marks-left"></span>
                  <p>住别墅私密感强，房间足够我们5个家庭住，大家在一起又热闹，关键平摊下来，每个家庭的费用并不高，比订酒店要划算。关键别墅带有管家和厨师，可以给你安排和打理很多事情。另外，客服的跟进和沟通都很好，省去很多琐碎烦恼。在岛期间都有国内客服人员24小时值班。</p>
                  <span class="marks-right"></span>
                </li>
              </ul>
              <div class="slider-point">
                <div class="arrow-down"></div>
                <div class="point-list Lcfx">
                  <a class="active" data-index="0" href="javascript:;">
                    <span class="cover"></span>
                    <img src="<?php echo $baseUrl?>/img/huawei.png" alt="华为集团Senseluxury入住体验" />
                    <h3>华为集团</h3></a>
                  <a data-index="1" href="javascript:;">
                    <span class="cover"></span>
                    <img src="<?php echo $baseUrl?>/img/tx.png" alt="腾讯科技Senseluxury入住体验" />
                    <h3>腾讯科技</h3></a>
                  <a data-index="2" href="javascript:;">
                    <span class="cover"></span>
                    <img src="<?php echo $baseUrl?>/img/jx.png?t=1" alt="歌手演员金朴俊" />
                    <h3>歌手演员金朴俊</h3></a>
                  <a data-index="3" href="javascript:;">
                    <span class="cover"></span>
                    <img src="<?php echo $baseUrl?>/img/yuki.png" alt="知名博主小多妈YukiSenseluxury入住体验" />
                    <h3 class="overflow">知名博主小多妈Yuki</h3></a>
                </div>
              </div>
            </div>
          </div>
          <div class="index-say index-instead"></div>
          <!-- 用户说结束 -->
          <div class="index-link index-linkmt linkt hotnew w1100-a">
            <h6>媒体报道</h6>
            <div class="links Lcfx">
              <a rel="nofollow" target="_blank" title="中高端别墅及公寓预订平台 “珠海正和国际旅行 SenseLuxury” 宣布完成 B 轮融资，投资方为高和翰同，具体金额并未透露。此外，2015年11月，珠海正和国际旅行宣布完成 A 轮融资，由SIG领投，China Rock跟投；Pre A 轮则来自上市公司中兴通讯旗下基金中兴合创。" href="#">
                <dl>
                  <dt>
                    <img alt="珠海正和国际旅行 别墅度假Senseluxury，36kr报道" src="<?php echo $baseUrl?>/img/36k_48.png"></dt>
                  <dd>中高端别墅及公寓预订平台“珠海正和国际旅行 SenseLuxury” 宣布完成 B 轮融资，投资方为高和翰同，具体金额并未透露。此外，2015年11月，珠海正和国际旅行宣布完成A轮融资，由SIG领投，China Rock跟投；Pre A 轮则来自上市公司中兴通讯旗下基金中兴合创。</dd></dl>
              </a>
              <a rel="nofollow" target="_blank" href="#">
                <dl>
                  <dt>
                    <img alt="珠海正和国际旅行 别墅度假Senseluxury，创业邦报道" src="<?php echo $baseUrl?>/img/changyebang.png"></dt>
                  <dd>曾在DFJ做VC的边浩，2013年离开了这家机构在上海创办了“珠海正和国际旅行Senseluxury”：整合境外零散的别墅房源，打造一个满足国内用户高端度假的O2O服务平台。带朋友、家人度假、举办婚礼、公司高管开会等仪式这些都是其服务对象。</dd></dl>
              </a>
            </div>
          </div>
        </div>
        <div id="apptuiguang" class="app-small" style="display: block;">
          <div class="app-open" style="left: -100%;">
            <img alt="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" title="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" src="<?php echo $baseUrl?>/img/AppPush-small.png"></div>
          <div class="app-extension" style="left: 0px;">
            <div class="extension-content clearfix">
              <img alt="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" title="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" class="phone-pic" src="<?php echo $baseUrl?>/img/AppPush-hand.png">
              <div class="down-pannel">
                <div class="down-button">
                  <img alt="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" title="用珠海正和国际旅行APP预订别墅，即时、简单、快捷" src="<?php echo $baseUrl?>/img/AppPush-description.png" class="app-downtext">
                  <div class="app-down-buddon">
                    <a href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=921867302&mt=8" target="_blank">
                      <img alt="iOS下载" src="<?php echo $baseUrl?>/img/AppPush-appleStore.png" class="app-Apple"></a>
                    <a href="http://www.senseluxury.com/downloadapk">
                      <img alt="Android下载" src="<?php echo $baseUrl?>/img/AppPush-android.png" class="app-Android"></a>
                  </div>
                </div>
                <div class="down-2dcode">
                  <img alt="珠海正和国际旅行别墅度假扫描二维码 下载App" title="珠海正和国际旅行别墅度假扫描二维码 下载App" src="<?php echo $baseUrl?>/img/AppPush-2dcode.png" class="img-2dcode">
                  <span class="code-font">扫描二维码 下载App</span></div>
              </div>
            </div>
          </div>
          <div class="app-close" style="display: block;">
            <img src="<?php echo $baseUrl?>/img/AppPush-close.png" alt="点击关闭"></div>
        </div>
        <!--中间内容结束-->




<div class="Cmask"></div>

<script type="text/javascript">
<?php $this->beginBlock('js_end') ?>
    
	var MESSAGE = {};
	editormd.markdownToHTML("markdown-view", {
    	htmlDecode: "style,script,iframe"
	});

    var pageID = '';
    var COMMON_MESSAGE ={};
    if ('default' == pageID) {
        senseluxuryFed.loadIndexFun();
    } else if ('detail' == pageID || 'bankDetail' == pageID) {
        senseluxuryFed.loadDetailFun();
    } else if ('fqa' == pageID) {
        senseluxuryFed.loadFqaFun();
    } else {
        senseluxuryFed.loadListFun();
    }
    

    (function(a) {
    	a.fn.scrollLoading = function(b) {
    		var c = {
    			attr: "data-url",
    			container: a(window),
    			callback: a.noop
    		};
    		var d = a.extend({}, c, b || {});
    		d.cache = [];
    		a(this).each(function() {
    			var h = this.nodeName.toLowerCase(),
    				g = a(this).attr(d.attr);
    			var i = {
    				obj: a(this),
    				tag: h,
    				url: g
    			};
    			d.cache.push(i)
    		});
    		var f = function(g) {
    				if (a.isFunction(d.callback)) {
    					d.callback.call(g.get(0))
    				}
    			};
    		var e = function() {
    				var g = d.container.height();
    				if (d.container.get(0) === window) {
    					contop = a(window).scrollTop()
    				} else {
    					contop = d.container.offset().top
    				}
    				a.each(d.cache, function(m, n) {
    					var p = n.obj,
    						j = n.tag,
    						k = n.url,
    						l, h;
    					if (p) {
    						l = p.offset().top - contop, h = l + p.height();
    						if ((l >= 0 && l < g) || (h > 0 && h <= g)) {
    							if (k) {
    								if (j === "img") {
    									f(p.attr("src", k))
    								} else {
    									p.load(k, {}, function() {
    										f(p)
    									})
    								}
    							} else {
    								f(p)
    							}
    							n.obj = null
    						}
    					}
    				})
    			};
    		e();
    		d.container.bind("scroll", e)
    	}
    })(jQuery);

    

    $(function() {
        $(".scrollLoading").scrollLoading();
      });

    $(function() {
        var date = new Date();
        var expiresDays = 30;
        date.setTime(date.getTime() + expiresDays * 24 * 3600 * 1000);
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; ");
        var langV;
        for (var i = 0; i < arrCookie.length; i++) {
          var arr = arrCookie[i].split("=");
          if (arr[0] == 'lang') {
            langV = arr[1];
          }
        }
      });
	

    //app动画
    if ($.cookie('sl_app_push')) {
        $(".app-close").hide();
        $(".app-extension").animate({
          "left": "-100%"
        },
        "fast",
        function() {
          $(".app-open").animate({
            "left": "0"
          },
          "normal");
          $("#yuding_box").css("visibility", "visible");
        });
      } else {
        $(".app-open").trigger('click');
      }

      $(document).ready(function() {
        $(".app-open").click(function() {
          $(this).animate({
            "left": "-100%"
          },
          "normal",
          function() {
            $(".down-pannel").css('display', 'block');
            $(".app-extension").animate({
              "left": "0"
            },
            "normal");
            $("#yuding_box").css("visibility", "hidden");
            $(".app-close").show();
          });
        });
        $(".app-close").click(function() {
          $(".app-close").hide();
          $(".app-extension").animate({
            "left": "-100%"
          },
          "normal",
          function() {
            $(".down-pannel").css('display', 'none');
            $(".app-open").animate({
              "left": "0"
            },
            "normal");
            $("#yuding_box").css("visibility", "visible");
          });
          $.cookie('sl_app_push', 'true');
        });
        $(".download-btn").mouseover(function() {
          $('.download-box').css('display', 'block');
        }) 
        $(".download-btn").mouseleave(function() {
          $('.download-box').css('display', 'none');
        }) 
        $(".download-box").mouseout(function() {
          $('.download-box').css('display', 'none');
        }) 
        $.extend({
          getUrlVars: function() {
            var vars = [],
            hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for (var i = 0; i < hashes.length; i++) {
              hash = hashes[i].split('=');
              vars.push(hash[0]);
              vars[hash[0]] = hash[1];
            }
            return vars;
          },
          getUrlVar: function(name) {
            return $.getUrlVars()[name];
          }
        });
        if ($.getUrlVar('t') == "b299116fec") {
          $('.Cmask').show();
          $('.Cuser_dialog').show();
          $('.Cuser_dialog').find('.signintab').removeClass('curr');
          $('.Cuser_dialog').find('.signuptab').addClass('curr');
          $('#signin_signup').find('.signin_area').addClass('Ldn');
          $('#signin_signup').find('.signup_area').removeClass('Ldn');
        }
      });




    

  <?php $this->endBlock() ?>
  </script>

<?php $this->registerJs($this->blocks['js_end'], \yii\web\View::POS_END); ?>