<?php
	$this->title = '珠海正和国际旅游有限公司-订单详情';
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

   		<div class="Cdir">
          <div class="inner Lcfx">
            <div class="link Lfll">
              <a title="" href="/">首页</a>
              <i>&gt;</i>
              <a target="_blank" title="诺曼海滩别墅" href="/villa/3508">诺曼海滩别墅</a>
              <i>&gt;</i>预订</div>
          </div>
        </div>
        <!--面包屑 结束-->
        <!--内页中间内容开始-->
        <div class="wp Lcfx">
          <div class="jg-left Lfll">
            <!--订单详情开始-->
            <form method="post" id="order_form">
              <div class="dtitle Lcfx ddxq-tit">订单详情</div>
              <div class="de-ddxq Lmt10">
                <dl class="bs-con Lcfx">
                  <dt>
                    <a href="javascript:;">
                      <img height="170px" src="http://image01.hivilla.com/uploads/destination/article/3/3508/6.jpg"></a>
                  </dt>
                  <dd>
                    <p class="tit">诺曼海滩别墅</p>
                    <p class="add Lcfx">
                      <span class="Lfll">越南，岘港，唐人海滩</span></p>
                    <ul class="rz-xix">
                      <li>入住时间：
                        <span>2016-12-20 （建议14:00以后）</span></li>
                      <li>退房时间：
                        <span>2016-12-21 （建议 12:00以前）</span></li>
                      <li>入住人数：
                        <span>6 成人，0 儿童</span></li>
                    </ul>
                  </dd>
                </dl>
                <h2 class="tit-h2">预订信息</h2>
                <ul class="ydxx-cot Lcfx">
                  <li>
                    <span>您的预订</span>1晚，3卧室别墅</li>
                  <li>
                    <span>姓名</span>陈先生</li>
                  <li>
                    <span>电子邮箱</span>2756458097@qq.com</li>
                  <li>
                    <span>手机号</span>13750027262</li>
                  <li class="ff-n">
                    <span>房费已含服务项</span>早餐&nbsp;&nbsp;&nbsp;&nbsp;客房服务&nbsp;&nbsp;&nbsp;&nbsp;清洁服务&nbsp;&nbsp;&nbsp;&nbsp;</li></ul>
                <!-- <div class="break-bar Lmt10">
                <p class="f-price checkbox ddxp-icon">早餐<input type="hidden" name="breakfast_fee" data-value="" value="" id="addPrice_2"></p>
                <p class="f-des">别墅提供收费早餐，入住期间每人每天早餐价格为元。您共需支付元。</p></div> -->
                <input type="hidden" name="hid_rank_total" id="hid_rank_total" />
                <input type="hidden" name="hid_rank_checkid" id="hid_rank_checkid" />
                <!--订单错误用这个 <div class="coupons Lmt10 error "> -->
                <div class="coupons Lmt10">
                  <p class="coupons-switch checkbox pl0">使用积分抵扣现金
                    <span>0</span></p>
                  <div class="cant-append list">
                    <!-- 不可叠加 -->
                    <p class="type-switch">不可叠加积分</p>
                    <table>
                      <tr>
                        <th>可用积分</th>
                        <th>抵用金额</th>
                        <th>有效期</th>
                        <th>备注</th></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49325>
                        <td class="count">
                          <p>0</p>
                        </td>
                        <td class="price">0</td>
                        <td class="date">2016-12-31</td>
                        <td class="remark">机场免费1日泊车（美泊提供）</td></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49324>
                        <td class="count">
                          <p>300</p>
                        </td>
                        <td class="price">300</td>
                        <td class="date">2017-06-30</td>
                        <td class="remark">注册</td></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49323>
                        <td class="count">
                          <p>300</p>
                        </td>
                        <td class="price">300</td>
                        <td class="date">2017-06-30</td>
                        <td class="remark">注册</td></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49322>
                        <td class="count">
                          <p>300</p>
                        </td>
                        <td class="price">300</td>
                        <td class="date">2017-06-30</td>
                        <td class="remark">注册</td></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49321>
                        <td class="count">
                          <p>300</p>
                        </td>
                        <td class="price">300</td>
                        <td class="date">2017-06-30</td>
                        <td class="remark">注册</td></tr>
                      <!-- -->
                      <tr>
                        <input type="hidden" id="hid_rank_id" value=49320>
                        <td class="count">
                          <p>300</p>
                        </td>
                        <td class="price">300</td>
                        <td class="date">2017-06-30</td>
                        <td class="remark">注册</td></tr>
                    </table>
                  </div>
                  <!-- 不可叠加结束 --></div>
                <p class="tit-con">价格与条款</p>
                <ul class="jatk-bar">
                  <li>
                    <span>房费（1晚）：</span>¥ 8777</li>
                  <input type="hidden" value="8777" id="addPrice_3">
                  <li>
                    <span>地方税及服务费：</span>￥ 1360.4</li>
                  <input type="hidden" value="1360.4" id="addPrice_4">
                  <input type="hidden" value="0" id="addPrice_5">
                  <input type="hidden" value="0" id="addPrice_6"></ul>
                <p class="zj">
                  <span>总计：</span>¥
                  <i>8777</i>
                </p>
                <input type="hidden" id="sumPrice" name="total_rate"></p>
                <p class="Terms">
                  <span>儿童条款：</span>- 每个卧室最多容纳2名成人和2名12岁以下儿童，或3名成人。 - 6-12岁儿童，不加床，收取早餐费USD10. - 6-12岁儿童加床费USD50，包含早餐。 - 12-16岁儿童必须加床，加床费USD50，包含早餐。 - 16岁以上为成人，加床费USD100，包含早餐和SPA. - 16岁以下儿童不允许接受水疗。</p>
                <p class="Terms">
                  <span>预订/取消条款：</span>- 平季入住日前14天以上取消，不收费。 - 平季入住日前7-14天取消，收取第1晚房费。 - 平季入住日前7天内取消，收取全部房费。 - 高峰季入住日前21天以上取消，不收费。 - 高峰季入住日前7-21天取消，收取第1晚房费。 - 高峰季入住日前7天内取消，收取全部房费。</p>
                <p style="margin: 16px 0 0 10px;color: #f19149;font-size: 14px;">友情提醒：预订过程中部分别墅可能存在无房情况，可先拨打400-9600-080咨询客服</p></div>
              <input id="v" type="hidden" value="" />
              <div class="tj-pay">
                <a style="float: left;margin-top: -75px;margin-left: 60px;" href="javascript:;" id="submit_inquire">提交咨询</a>
                <a style="margin-top: -75px;float: right;margin-right: -290px;" href="javascript:;" id="pay_next">同意以下条款进入支付</a></div>
              <div class="clause Lcfx">
                <h3>SenseLuxury责任、条件与条款</h3>
                <div class="clause_text Lcfx">
                  <p>预订度假别墅与预订传统酒店具有很大的不同，特别是考虑到付款和取消预订的流程。所以请您仔细阅读以下条款。</p>
                  <p>SenseLuxury(以下简称SL)旨在为客户提供优质、可靠的度假别墅的租赁预订服务.每一次客户通过SL成功确认订单并付款后，客户本人都将被视为已经同意以下条款。</p>
                  <p>1. 预订</p>
                  <p>
                    <span>1.1 预订意向确认</span></p>
                  <p class="sub-point">
                    <font>a) 收到您的预订意向后，您将会收到相应别墅的费率和全额押金信息。</font>
                    <font>b) 除了某些指明的特殊时期，预订采用“先到先得”的方式进行。</font>
                    <font>c) SL保留取消客人预订的权利。</font></p>
                  <p>
                    <span>1.2 包括的项目&附加费用</span></p>
                  <p>总费用中包含了别墅的房费，客人指明需要的接机服务和额外加床服务的费用。但是不包括以下服务与费用：行李搬运服务、租车服务、食物以及软饮料或者含有酒精的饮料提供的服务、服务费、电话以及传真和电报费、个人项目的费用或者根据个人要求出现的费用以及任何退房时出现的额外的清扫需要（例如沙发、枕套、地毯上污渍的清理等）或者替换损坏物品所产生的费用。</p>
                  <p>
                    <span>1.3 付款</span></p>
                  <p class="sub-point">
                    <font>a) 当客户收到别墅预订确认单和付款通知单后即表明客户具有该别墅的优先预订权，客户必须在24小时之内向SL就订房确认完成付款。</font>
                    <font>b) 所有的付款都默认通过人民币支付。</font>
                    <font>c) 如果没有在确认书上载明的支付期限前完成付款，预订将有可能被取消，而预订的别墅将会安排给其他对此感兴趣的客户。在这样的情况下，SL将不会发出任何额外的通知。</font></p>
                  <p>2.入住</p>
                  <p>
                    <span>2.1 入住确认函</span></p>
                  <p>全额付款后，客户将会收到别墅入住确认函，以及别墅的地址，别墅接待员的具体联系方式,，到达别墅的交通方式以及别墅的使用说明等。确认函以及客户的护照需要在到达目的地的时候向别墅方出示。</p>
                  <p>
                    <span>2.2 入住/退房的时间</span></p>
                  <p>除了一些个别的情况以外，通常别墅的入住和退房时间是下午3:00和中午12:00，但具体以入住别墅的实际要求为准。如果客户有想要提前入住或者延迟退房的请求，请尽早提前通知SL。一般而言，早于上午8点的入住，将会产生全天的房费；晚于下午3点早于晚上6点的退房，会产生半天的房费，晚于晚上6点的退房，将会产生全天的房费。具体的收费情况参照各别墅的安排。</p>
                  <p>
                    <span>2.3 入住押金</span></p>
                  <p>入住押金如果没有在预订时一起支付，则需要在办理别墅入住时支付。别墅的预订介绍页面已经详细说明每一个别墅的押金的不同金额，当然别墅有权利根据实际情况适当的增加一些不同的要求。到达别墅后，如果没有全额支付入住押金，别墅方可能拒绝入住。如果入住押金需要通过现金支付或者有其他特殊的支付要求，SL将会提前告知客户。 正常情况下，押金将会在客户退房时，扣除以下费用后退还给客户:</p>
                  <p class="sub-point">
                    <font>a) 所有在客户入住期间产生的额外费用 (例如购买一些物品的额外费用，没有被客户立即支付的服务费和小费以及电话费等)。</font>
                    <font>b) 在入住时期内，由于客户的不当使用造成的别墅内以及别墅周边的设施的丢失或者损毁，需要替换或者维修的费用。</font></p>
                  <p>如果在客户离开别墅之前这个费用无法被确定，别墅方有权利扣留部分押金，并且会尽快的确认客户的实际消费后返还余额。</p>
                  <p>
                    <span>2.4 日用品</span></p>
                  <p>某些别墅可能要求客户在入住期间自己准备日用消费品。别墅的工作人员将会对客户合理的要求提供帮助，包括在居住期间采购一些生活用品，但是这部分费用将会计算在客户的消费账单中（一般而言，大部分别墅提供毛巾，浴袍以及其它基本的洗漱用具）。</p>
                  <p>
                    <span>2.5 损毁和遗失</span></p>
                  <p>我们提供的别墅通常都是私人房产，客户应该友好的对待租赁的别墅，在离开别墅的时候确保其房间大致整齐干净。 任何由于客户居住期间引起的损毁和遗失，以及某些特殊的清扫需要，都将由客户自己承担责任。其费用将可能被计算到客户的消费账单中或者直接从客户的安全押金中扣除。 在某些情况下，如果客户及其访客在别墅内的聚会行为有可能造成别墅财产的严重损坏，则别墅方有权要求客户及其访客离开，并且不会提供任何的补偿。</p>
                  <p>
                    <span>2.6 出入</span></p>
                  <p>为了保证别墅及其附属设施在客户的入住期间能够提供给客户极致的享受，别墅的管理人员或者其他工作人员可能需要进出别墅（例如为了维护房间、花园、游泳池以及其他服务设施或者提供客户要求的其他额外服务等）。客户应该为这些合理的进出提供必要的便利。</p>
                  <p>
                    <span>2.7 入住人数</span></p>
                  <p>别墅的入住人数（成人和小孩），不能超过在入住确认函上指明的人数。一旦入住人数超过规定，可能遭到别墅拒绝或者限制入住。同时禁止携带宠物，除非获得书面同意。</p>
                  <p>
                    <span>2.8 别墅的使用</span></p>
                  <p>除非通过了事先的申请，所有的别墅预订都默认是为了度假。 如果客户计划在别墅中进行一些特殊活动，例如婚礼或者聚会，而且这些活动会包含大量的参与者，请在预订别墅的时候，事先就这些问题与SL进行交流，因为这样的计划需要得到特殊的批准。根据活动的具体情况客户可能会被要求缴纳一些追加费用或者额外的押金，这些费用都将会在预订完成之前得到确认。 注意某些别墅可能位于居住区内，而且其使用需要严格服从当地相应的政策。因此客户对别墅的某些特殊使用或者计划举办的特殊活动，需要获得SL和别墅方以外的相应机关的批准。</p>
                  <p>3.取消预订</p>
                  <p>
                    <span>3.1 取消</span></p>
                  <p>如果客户想要取消已经成功预订的订单，应该以书面形式通知SL。SL将会确认所有接收到的退订申请。强烈推荐客户以及客户聚会的参与者购买旅行行程取消保险。 预订的取消包括但是不限于：</p>
                  <p class="sub-point">
                    <font>a) 取消一天或者多天；</font>
                    <font>b) 预订的修改以至于修改后的预订的日期没有任何一天在最初预订的日期范围内；</font>
                    <font>c) 所有的客户都不能在到达别墅时提供必要的文件（例如护照或者其他适当的身份证明）；</font>
                    <font>d) 客户试图进行聚会，或者客户的朋友试图在别墅内进行的任何活动违反了以上的条款或者违反了所提供的别墅内的规定。</font>
                    <p>
                      <span>3.2 取消预订的费用</span></p>
                    <p>一旦客户取消了预订成功的订单，除了已经在别墅预订函已经指明的一些费用，通常还会产生以下的取消费用：</p>
                    <p class="sub-point">
                      <font>a) 在别墅入住日期前60天及以上取消订单，扣除总费用的20%。</font>
                      <font>b) 在别墅入住日期前30天及以上至60天取消订单，扣除总费用的50%。
                        <font>
                          <font>c) 在别墅入住日期前1天及以上至30天取消订单，扣除总费用的100%。</font>
                          <font>d) 适当的费用（如汇费）将从客户的押金或者付款中扣除，然后返还余额。</font></p>
                    <p>4. 责任&免责声明</p>
                    <p>
                      <span>4.1 客户的行为&表现</span></p>
                    <p>一旦客户出现了违规的行为，别墅方有权利要求违规的客户立即搬离别墅。 除了泳池、阳台和停车区，整个别墅区都是禁烟区。严禁乱扔香烟、雪茄以及点火器，其只能用水熄灭后扔到像烟灰缸这样的设施中。向阳台的栅栏和台阶的扶手以外乱丢东西同样也是不被允许的。 当身体潮湿或者在皮肤上涂有防晒霜（或者其他任何种类的乳霜、精油或者防蚊喷雾等）的时候，不建议坐在或者躺在别墅内的家具上。 别墅行为规范要求客户不能对别墅的工作人员有任何性别歧视，种族歧视和风俗歧视行为。 除此之外，客户理解别墅方还可能提前告知客户遵守其他行为规则。 另外别墅保留要求客户离开的权利。如果出现以上的严重行为或严重违反别墅方提出的其他行为规则，客户将被要求搬离别墅，同时，客户不能够向SL或者别墅方索求任何补偿。</p>
                    <p>
                      <span>4.2 社会责任</span></p>
                    <p>严格禁止任何非法的行为或者携带使用非法的物品（如毒品等）。任何违反者将被送交当地的法律机关。 除此之外, 为了遵守当地的风俗，尊重当地劳动者并且为了客户的安全，客户在任何情形之下都不能带没有登记过的人员回到别墅。别墅方保留在任何时间要求任何人搬离别墅的权利。</p>
                    <p>
                      <span>4.3 SL的责任</span></p>
                    <p>SL将保证其宣传并提供给客户的服务是基于最近收到的信息。然而SL不对住房信息的改变或者误差承担责任。SL网站上显示的由第三方做出的别墅的描述、评论仅仅是对房屋信息的呈现，SL不对这些评论提供信任担保。</p>
                    <p>
                      <span>4.4 免责声明</span></p>
                    <p>由于如下原因，客户不能在预订期间入住，或者遭到任何损失， SL不承担任何责任：</p>
                    <p class="sub-point">
                      <font>a) 客人自身原因取消出行或被中国或旅游目的地国家移民局认定为禁止出入国境的。</font>
                      <font>b) 由客户、朋友及其聚会中由于没有履行其注意的义务而产生的额外的花费。</font>
                      <font>c) 任何客户自身原因导致的物理伤害、疾病、死亡、遗失、损毁、不便造成的损失。</font>
                      <font>d) 如遇到自然的，技术的，人工的等其它不可抗力原因导致的入住的取消或者延误。</font>
                      <font>e) 在使用别墅健身房和游泳池时，无视自己身体状况参与锻炼或者酒后游泳等由于客人自己的原因造成的意外，SL不承担责任。</font>
                      <font>f) 由于别墅的厨房设备或者电器设备使用不当造成的意外，SL不承担责任。</font>
                      <font>g) 客户在外游玩时选择参加一些活动，包括但不限于水上活动、花香、潜水、高原游、滑雪、滑冰、雪山电单车、滑草和滑沙、各种游乐设施和极限运动等。由于自身没有控制好风险而对自身的人身安全造成的严重隐患，SL不承担责任。</font>
                      <font>h) 海边戏水时请勿超过安全警戒线，水性不好请勿独自下水，违反如上建议造成损失，SL不承担责任。</font>
                      <font>i) 旅途及入住期间，客人需看管好个人随身物品，如有遗失，SL不承担责任。如不幸遭遇物品遗落，客人应及时与别墅方或当地警方联络，寻找物品。</font>
                      <p>SL和别墅方不会单独或者联合做出任何超过了客户租赁别墅的总费用的付款或者补偿。</p>
                      <p>4.5 客户知晓并理解，客户委托SL为客户租赁别墅提供相关预订服务，但租赁关系存在于客户和别墅方之间，别墅方就租赁别墅事宜可能对客户提出额外的要求或进行其他限制，或在租赁关系项下对客户存在若干违约行为，对此SL不承担任何责任。客户同意，就因别墅方的原因导致客户发生的任何损失，客户不向SL提出任何赔偿请求或其他权利主张。</p>
                      <p>4.6 若因客户原因导致别墅方对SL提出任何赔偿请求的，客户同意为SL进行抗辩，并赔偿因此给SL造成的任何损失。</p>
                      <p>5. 纠纷</p>
                      <p>
                        <span>5.1 陈述</span></p>
                      <p>SL会尽力做出各种努力，以便能够提供给客户一次极致的居住体验，.如果客户在居住期间有任何问题，请立刻告知SL或者别墅方，其都将尽最大努力将事情安排好。假如别墅方没有满意的处理好客户的问题，请马上联系SL。为了能够使得客户的投诉得到马上的处理，客户应该在即时联系SL。一旦在离开别墅5天以后没有任何投诉，SL和别墅方将会默认别墅给予了客户满意的服务并且今后也不会提出任何投诉。</p>
                      <p>
                        <span>5.2 权限</span></p>
                      <p>这份协定将受中华人民共和国法律的管辖，一旦在别墅预订和别墅租赁中双方产生的纠纷不能得到妥善的解决，双方同意将纠纷提交给SL所在地有管辖权的法院作出裁决。 客户在SL完成别墅预订并付款，即被视为理解并同意以上条款。 如果这份条款或条件中的任何条款变为或者被视为无效，或者在条款中存在任何省略，剩余的条款仍将有效，可以被强制实施并且不能被反驳。</p>
                      <p>以上条款中之未尽事宜，将以SenseLuxury最终解释为准。</p>
                </div>
                <a class="clause_more">【查看全部声明+】</a></div>
            </form>
            <!--订单详情结束--></div>
          <script>var MESSAGE = {};
            function submit_form(obj) {
              obj.disabled = true;
              document.forms['order_form'].submit();
            }</script>
          <div class="jg-right Lflr">
            <!--优化 开始-->
            <div class="Lmt68 detail-lxfs">
              <ul class="majo-cont">
                <li>
                  <span>最优价格</span>如有比我们更优价格，差价双倍赔付</li>
                <li>
                  <span>最优品质</span>所有别墅均亲自考察，保障品质</li>
                <li>
                  <span>最优服务</span>评论有礼全程贴心咨询，一站式为您服务</li>
                <li>
                  <span>注册有礼</span>只需注册，即可获得1500元抵用券</li>
                <li>
                  <span>评论有礼</span>轻松点评，即可获得100元抵用券</li></ul>
            </div>
            <!--优化 结束--></div>
        </div>
        <!--内页中间内容结束 <!--中间内容结束-->
        
        
<script type="text/javascript">
	<?php $this->beginBlock('js_end') ?>
	
		var pageID = 'myorder';
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