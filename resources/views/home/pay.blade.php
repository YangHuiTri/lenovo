<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>联想商城-收银台</title>
    <meta name="keywords" content="{{config('web.keywords')}}" />
    <meta name="description" content="{{config('web.description')}}" />
	<link rel="shortcut icon" href="/style/home/img/1.png">
	<link rel="stylesheet" href="/style/home/css/money.css">
	<script src="/style/home/js/jquery.js"></script>
	<script src="/style/home/js/money.js"></script>
</head>
<body>
	<div class="header">
    <div class="user_content">
        <div class="userinfo">
            <a href="http://www.lenovo.com.cn/">
                <span class="toIndex">
                        返回首页
                </span>
            </a>|
            <a href="http://i.lenovo.com.cn/info/center.jhtml?sts=e40e7004-4c8a-4963-8564-31271a8337d8">
                <span class="username">15364711138</span>
            </a>|
            <a href="http://order.lenovo.com.cn/center/orderlist.jhtm?merchantId=1">
                <span class="order">
                        我的订单
                </span>
            </a>|
            <span class="logout">退出</span>
        </div>
    </div>
</div>
<div class="steps">
    <div class="pageInfo">
        <a href="javascript:void(0)" class="logo"></a>
    </div>
    <div class="step step_pay">
        <ul>
            <li class="step1">我的购物车</li>
            <li class="step2">填写核对订单</li>
            <li class="step3 current">确认支付</li>
        </ul>
    </div>
</div>
<div class="content_wrapper">
<div class="info">
    <div class="con">
        <div class="left">
        	<em class="icon"></em>
        </div>
        <div class="right">
            <div class="detail">
                <p>订单提交完成，请您尽快付款！
                	<span id="ledou_span">支付成功将赠送您一定比例的乐豆，使用乐豆可抵用现金，积分相关内容请到个人中心查看~</span></p>
                <p id="dead_time_p">请您在<span class="dead_time" id="dead_time">2016-11-11 14:50:20</span>前完成支付，订单失效期：<span class="persist_time" id="persist_time">60分钟</span> </p>
                <p id="order_show_msg_p"></p>
                <ul>
					 <li class="syt_huanh">
                            <label>
                            	<input type="checkbox" name="order" value="46667520010" onchange="getOrderPayType(this)">订单号：{{$orders[0]->code}}
                                <span>&nbsp;&nbsp;商品名称: ThinkPad 黑将S5 20G4A000CD 黑色&nbsp;&nbsp;</span>
                            </label>
                            <div class="deliver_hid hidden" id="deliver46667520010">张三 182****1110 北京_北京_昌平_天安门</div>
                            <div class="vatDeliver_hid hidden" id="vatDeliver46667520010"></div>
                            <div class="receiver_hid hidden">由联想(上海)有限公司发货</div>
                            <div class="invoice_hid hidden" id="taxCompany46667520010">个人</div>
                            <div class="dead_time_hid hidden">2016-11-11 14:50:20</div>
                            <div class="persist_time_hid hidden">60分钟</div>
                            <div class="show_msg_hid hidden"></div>
                            <div class="amountMoney_hid hidden">6699.00</div>
                            <div class="orderAddType_hid hidden">0</div>
                            <div class="ledou_num_hid hidden">0</div>
                            
                            <input type="hidden" id="amountMoney_hid" value="6699.00">  
                            <input type="hidden" id="hbOrderMeg_hid" value="4666752订单收款方信息：此物品是联想正品 由联想(上海)有限公司发货">
                        </li>
                    </ul>
                <input type="hidden" id="orders" value="4666752;">
                <input type="hidden" id="products" value="ThinkPad 黑将S5 20G4A000CD 黑色&amp;&amp;">
                <input type="hidden" id="lenovoId" value="10090423014">
                <input type="hidden" id="plat" value="4">
                <input type="hidden" id="shopId" value="1">
                <input type="hidden" id="terminal" value="1">
                <input type="hidden" id="isHb" value="0">
                <input type="hidden" id="wxsmflag" value="1">
                <input type="hidden" id="merchantid" value="b2c">
                <div class="money">
                    <p>应付金额：<span class="total">6699元</span></p>
                    <a class="show_more" href="javascript:void(0)">
                    	<span style="float:right;">订单详情</span>
                    	<em id="em_order_detail" class="down"></em>
                    </a>
                </div>
            
            </div>
            <div class="more clear">
                <ul class="address" id="address"> 
                <li >收货信息：<span>张三 182****1110 北京_北京_昌平_天安门</span>
                </li>
                <li>收款方信息：此物品是联想正品 <span>由联想(上海)有限公司发货</span>
                </li>
                <li>发票信息：<span>个人</span></li></ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="payment">
<div class="title">请选择支付方式</div>
<div class="pay_types" id="pay_types">
<div id="pay_type1_div" class="pay_type1 pay_is_hidden" style="height:150px;border-bottom: 1px dashed #d2d2d2;">
    <div id="pay_type1_title" class="pay_type_title" style="">支付平台</div>
    <ul class="pay_plats" style="magin-top:0px;">
        <li id="zhifubao" style="cursor: pointer;" class="active">
            <a href="javascript:void(0)" latag="latag_pc_cashier_zhifubao">
            <img src="/style/home/img/payOnline_zfb.png" alt="">
        </a>
        <span class="zfpttint1">有卡就能付，没网银也可</span>
        </li>
         <li id="caifutong" style="display: none;cursor: pointer;" onclick="paycft()">
            <a href="javascript:void(0)">
            <img src="/style/home/img/payOnline_caifutong.png" alt="">
        </a>
         </li>
        <li id="weixin" onclick="paywx()" style="cursor: pointer; overflow: hidden;">
            <p>
            <img src="/style/home/img/payOnline_weixin.png" alt="" style="position: absolute; border: 0px none; height: 35px; left: 25px; top: 8px;">
        </p>
         </li>
        <li id="zs" style="cursor: pointer;" onclick="payzs()">
            <a href="javascript:void(0)" latag="latag_pc_cashier_zhaoshang">
            <img src="/style/home/img/payOnline_zsyh.png" alt="">
        </a><span class="zfpttint2">可支持工、农、中、建、招、交、中信等多家银行</span>
         </li>
        <li id="yinlian" style="display: none;cursor: pointer;overflow:hidden;" onclick="payyl()">
            <a href="javascript:void(0)" latag="latag_pc_cashier_yinlian">
            <img src="/style/home/img/payOnline_yinlian.png" alt="">
        </a>
         </li>
        <li class="weixinSaoMa" id="weixinSaoMaLi" style="float: right; margin-top: -30px; border: none;">
            <div style="text-align:center;border:1px solid #D8D8D8;float:right;" id="weixinSaoMa" title="weixin://wxpay/bizpayurl?pr=1lSWfna">
            </div>
            <!-- <div style="clear:both;text-align:center;margin-left:32px;">微信扫一扫</div> -->
        </li>

        <li class="aliPaySaoMa" style="float: right; margin-top: -30px; cursor: pointer; border: none;" id="aliPaySaoMa" onclick="aliPaySaoMa()">
            <div style="text-align:center;border:1px solid #D8D8D8;float:right;">
                            <span style="float:right;width:75px;height:80px;overflow:hidden;padding:0;margin:5px;">
                                <iframe width="75" height="75" frameborder="0" style="height: auto ! important;" scrolling="no" id="aliPaySaoMaIframe" src="/style/home/img/255.png">
                                </iframe>
                            </span>

            </div>
            <div style="clear:both;text-align:center;margin-left:32px;">支付宝扫一扫</div>
        </li>

    </ul>
</div>

<div id="pay_type2_div" class="pay_type2 pay_is_hidden">
    <div id="pay_type2_title" class="pay_type_title" style="">银行借记卡与信用卡&nbsp;&nbsp;<a href="http://www.lenovo.com.cn/limitlist.html" target="_blank" style="color:blue;font-size:12px;" latag="latag_pc_cashier_showPayStyle">[查看支付限额]</a></div>
    <ul class="pay_plats pay_y_j">
        <li id="gs" style="cursor: pointer; z-index: 2;">
             <a href="javascript:void(0)" >
            <img src="/style/home/img/payOnline_gsyh.png" alt="">
            </a>
            <div class="tint" style="display: none;">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            <p>
            <span>不支持5000元以上订单</span>
            <span>支付</span>
            </p>
            </div>
        </li>
        <li id="zfbzs" style="cursor: pointer;" onclick="payzfb('CMB')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_zhaoshang">
            <img src="/style/home/img/payOnline_zsyh.png" alt="">
            </a>
            <div class="tint" style="display: none;">
                <p>
                <span>支持：借记卡和信用卡</span>
                </p>
            </div>
        </li>
        <li id="js" style="cursor: pointer; z-index: 2;">
            <a href="javascript:void(0)" latag="latag_pc_cashier_jianshe">
            <img src="/style/home/img/payOnline_jsyh.png" alt="">
     
            </a>
            <div class="tint" style="display: none;">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            <p>
            <span>不支持5000元以上订单</span>
            <span>支付</span>
            </p>
            </div>
        </li>
        <li id="zh" style="cursor: pointer;" onclick="payzfb('BOCB2C')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_zhongguo">
            <img src="/style/home/img/payOnline_zgyh.png" alt="">
            </a>
            <div class="tint" style="display: none;">
                <p>
                <span>支持：借记卡和信用卡</span>
                </p>
            </div>
        </li>
        <li id="ny" style="cursor: pointer;">
            <a href="javascript:void(0)" latag="latag_pc_cashier_nongye">
            <img src="/style/home/img/payOnline_nyyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p><span>
            支持：借记卡和信用卡
            </span>
            </p>
            </div>
        </li>
        <li id="gf" style="cursor: pointer;">
            <a href="javascript:void(0)">
            <img src="/style/home/img/payOnline_gfyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="xy" style="cursor: pointer;" onclick="payzfb('CIB')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_xingye">
            <img src="/style/home/img/payOnline_xyyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p><span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="yz" style="cursor: pointer;">
            <a href="javascript:void(0)" latag="latag_pc_cashier_youzheng">
            <img src="/style/home/img/payOnline_youzheng.png" alt="">
            </a>
        </li>
        <li id="pa" style="cursor: pointer;" >
            <a href="javascript:void(0)" latag="latag_pc_cashier_pingan">
            <img src="/style/home/img/payOnline_payh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="jt" style="cursor: pointer;" onclick="payzfb('COMM')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_jiaotong">
             <img src="/style/home/img/payOnline_jtyh.png" alt="">
            </a>
            <div class="tint" style="display: none;">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="pf" style="cursor: pointer;" onclick="payzfb('SPDB')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_pufa">
            <img src="/style/home/img/payOnline_pufa.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="hy" style="cursor: pointer; display: none;" onclick="payzfb('FDB')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_fudian">
            <img src="/style/home/img/payOnline_fcyh.png" alt="">
            </a>
            </li>
            <li id="hz" style="cursor: pointer; display: none;" onclick="payzfb('HZCBB2C')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_hangzhou">
            <img src="/style/home/img/payOnline_hzyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡
            </span>
            </p>
            </div>
        </li>
        <li id="sh" style="cursor: pointer; display: none;" onclick="payzfb('SHBANK')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_shanghai">
            <img src="/style/home/img/payOnline_shyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>
        <li id="nb" style="cursor: pointer; display: none;" >
            <a href="javascript:void(0)">
            <img src="/style/home/img/payOnline_nbyh.png" alt="">
        </a>
        </li>
        <li id="ms" style="cursor: pointer; display: none;" onclick="payzfb('CMBC')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_minsheng">
            <img src="/style/home/img/payOnline_msyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡
            </span>
            </p>
            </div>
        </li>
        <li id="zx" style="cursor: pointer; display: none;" onclick="payzfb('CITIC-DEBIT')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_zhongxin">
            <img src="/style/home/img/payOnline_zxyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡
            /span>
            </p>
            </div>
        </li>
        <li id="gd" style="cursor: pointer; display: none;" onclick="payzfb('CEB-DEBIT')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_guangda">
            <img src="/style/home/img/payOnline_gdyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡
            </span>
            </p>
            </div>
        </li>
        <li id="bjns" style="cursor: pointer; display: none;" onclick="payzfb('BJRCB')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_bjnongshang">
            <img src="/style/home/img/payOnline_bjnsyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>
            支持：借记卡和信用卡</span>
            </p>
            </div>
        </li>

        <li id="bj" style="cursor: pointer; display: none;" onclick="payzfb('BJBANK')">
            <a href="javascript:void(0)" latag="latag_pc_cashier_beijing">
            <img src="/style/home/img/payOnline_bjyh.png" alt="">
            </a>
            <div class="tint" style="display: none">
            <p>
            <span>支持：借记卡和信用卡
            </span>
            </p>
            </div>
        </li>
        <li id="shns" style="cursor: pointer; display: none;" onclick="payzfb('SHRCB')">
            

        </li>
        <li style="cursor: pointer; text-align: center; font-size: 14px; line-height: 30px; display: list-item;">
            查看更多
        </li>
        <input type="hidden" id="xyState" value="1">

    </ul>
    <div class="clear"></div>
</div>

<!-- <div class="pay_type3" style="display: none;height:150px;border-bottom: 1px dashed #d2d2d2;">
    <div class="pay_type_title">快捷支付</div>
    <ul class="pay_plats hidden">
        <li class="gs"><a href="#">&nbsp;</a></li>
        <li class="zs"><a href="#"></a></li>
        <li class="js"><a href="#"></a></li>
        <li class="zh"><a href="#"></a></li>
        <li class="ny"><a href="#"></a></li>
        <li class="pf"><a href="#"></a></li>
        <li class="xy"><a href="#"></a></li>
        <li class="gf"><a href="#"></a></li>
        <li class="hy"><a href="#"></a></li>
        <li class="zx"><a href="#"></a></li>
        <li class="hz"><a href="#"></a></li>
        <li class="sh"><a href="#"></a></li>
        <li class="nb"><a href="#"></a></li>
        <li class="pa"><a href="#"></a></li>
        <li class="gd"><a href="#"></a></li>
        <li class="yz"><a href="#"></a></li>
    </ul>
    <ul class="edit">
        <li>
            <span class="type">付款银行:</span>
                            <span class="e2 choose_bank">
                                <em class="bank_logo zs"></em>
                                单笔限额2W,单日限额2W
                            </span>
        </li>
        <li><span class="type">卡种:</span><span class="card_type e2"><label><input name="card_type" type="radio">&nbsp;借记卡</label><label><input name="card_type" type="radio">&nbsp;储蓄卡</label></span></li>
        <li><span class="type">银行卡号:</span><span class="card e2"><input type="text"></span></li>
        <li><span class="type">姓名:</span><span class="e2">龙夏天</span></li>
        <li><span class="type">身份证:</span><span class="e2">411034********4668</span></li>
        <li><span class="type">手机号:</span><span class="mobile e2"><input type="text"></span></li>
        <li class="xieyi"><label><input checked="" type="checkbox">《联想快捷支付相关协议》</label></li>
        <li class="submit"><button>同意开通并支付</button></li>
    </ul>
    <div class="clear"></div>
</div> -->
<div id="pay_type4" class="pay_type4 noborder" style="overflow: auto;">
    <div class="fenqi">
        <h1>分期付款<span><a href="http://www.lenovo.com.cn/help/bank_fq.html" target="_blank"><img src="/style/home/img/icon-1.jpg">&nbsp;分期付款细则</a></span></h1>
        <div class="xinyka">
            <div class="xuanz">
                <p>1.选择分期方式</p>
                <div class="clearfix">
                    <div class="banks bank-as bkbg" id="hbfq" style="" onclick="openHBFQ()">
                        <img src="/style/home/img/pic-01_03.png">
                     <!--    <img id="icon" src="/style/home/img/icon-3.jpg"> -->
                    </div>
                    <div class="banks  bank-as bkbg" id="nhfq" style="display: none" onclick="openNHFQ()">
                        <img src="/style/home/img/nongye.jpg">
                        <img id="icon" src="/style/home/img/icon-3.jpg">
                    </div>
                </div>

            </div>
            <div id="nonghang" style="display: none">
                <div class="banks-tab">
                    <div>
                        <p style="line-height: 60px;font-size: 15px;font-family: 微软雅黑;">2. 选择分期期数</p>
                        <div class="date" id="nfenqi-date-num">

                        </div>
                        <span id="nfenqi-date-num-selected-desc"><b></b></span>
                    </div>
                    <div style="padding-top: 75px;">
                        <p style="margin: 15px 0px;font-size: 15px;">3. 手续费：在线购买产品达500元以上可申请分期付款，订单最高限额为5万元，活动期间免手续费</p>
                    </div>
                </div>

                <div class="mores">
                    <p class="menuTitle"><span>更多信息</span><a href="javascript:;"></a></p>
                    <div class="menuContent" style="display:none;">
                        <div class="mores-text">
                            <b>中国农业银行信用卡用户在线购买产品达500元以上可申请分期付款服务，订单最高限额为5万元，银行会根据您的申请进行核实及批准。请参考以下分期付款手续费率</b>
                            <div id="fenqi-desc-list">
                                <table cellspacing="0" cellpadding="0">
                                    <tbody> 
                                    <tr height="25" class="tr">
                                        <td width="180">银行
                                        </td>
                                        <td width="100">最低限额
                                        </td> 
                                        <td width="100">3期
                                        </td>
                                        <td width="100">6期</td>
                                        <td width="100">12期</td>
                                        </tr> 
                                    <tr height="35">
                                        <td>蚂蚁花呗</td> 
                                        <td>500元</td>
                                        <td>1.7999999999999998%</td> 
                                        <td>4.5%</td> 
                                        <td>8%</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                        </div>
                        <div class="tes">
                            <p>您使用农行分期，我承担分期费率，联想让您享受免费分期！</p>
                        </div>
                    </div>

                </div>

                <div class="fenqi-btn">
                    <a href="#" id="fenqi-pay-button" url-data="">现在支付</a>
                </div>
            </div>
            <div id="huabei" style="">
                <div class="banks-tab">
                    <div>
                        <p style="line-height: 60px;font-size: 15px;font-family: 微软雅黑;">2. 选择分期期数</p>
                        <div class="date" id="hfenqi-date-num">
                            <div orderid="46741120011" order_amount="5499" num="3" rate="0.018" fqratepro="100" class="hbGBse">3期
                            <img src="/style/home/img/icon-3.jpg">
                            </div>
                            <div orderid="46741120011" order_amount="5499" num="6" rate="0.045" fqratepro="100" class="hbGBse">6期
                            <!-- <img src="/style/home/img/icon-3.jpg"> -->
                            </div>
                            <div orderid="46741120011" order_amount="5499" num="12" rate="0.08" fqratepro="100" class="hbGBse">12期
                            <!-- <img src="/style/home/img/icon-3.jpg"> -->
                            </div>
                            </div>
                            <span id="hfenqi-date-num-selected-desc"><b></b></span>
                            </div>
                            <div style="padding-top: 25px;">
                            <p class="ding" style="margin: 15px 0px;font-size: 15px;">&nbsp;</p>
                            </div>
                        </div>

                <div class="mores">
                    <p class="menuTitle"><span></span><a href="javascript:;"></a></p>
                    <div class="menuContent" style="display:none;">
                        <div class="mores-text">
                            <b>中国农业银行信用卡用户在线购买产品达500元以上可申请分期付款服务，订单最高限额为5万元，银行会根据您的申请进行核实及批准。请参考以下分期付款手续费率</b>
                            <div id="fenqi-desc-list">

                            </div>
                        </div>
                        <div class="tes">
                            <p>您使用农行分期，我承担分期费率，联想让您享受免费分期！</p>
                        </div>
                    </div>
                </div>

                    <div class="fenqi-btn" onclick="payHuaBei()">
                        <a href="#" id="hbFenqi-pay-button" url-data="">现在支付</a>
                    </div>
                 </div>
             </div>
   
    <div class="clear"></div>
</div>
</div>
</div>

    <div class="clear"></div>
</div>
</div>
</div>
<!--*************支付统一区域结束************-->
<!--*************Footer开始************-->
<div class="footer">
    <div class="ns_footer_line">
        <a href="http://appserver.lenovo.com.cn/About/index.aspx" title="关于联想" target="_blank">关于联想</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/contact.shtml" title="联系我们" target="_blank">联系我们</a>
        <span>|</span><a href="http://www.lenovocareers.com/chi/index.html" title="工作机会" target="_blank">工作机会</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn//About/news_center.aspx" title="新闻中心" target="_blank">新闻中心</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/LenovoMap/LenovoMap_Direct.aspx?intcmp=MAP20140730_1" title=" 销售网点" target="_blank">
        <em class="usepng icon_addr1"></em>销售网点</a>
        <span>|</span><a href="http://support1.lenovo.com.cn/lenovo/wsi/station/servicestation/default.aspx?intcmp=MAP20140730_2" title=" 服务网点" target="_blank">
        <em class="usepng icon_addr2"></em>服务网点</a>
    </div>
    <div class="ns_footer_line">版权所有：1998-2016 联想集团
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/legal.shtml" title="法律公告" target="_blank">法律公告</a>
        <span>|</span><a href="http://appserver.lenovo.com.cn/Public/public_bottom/privacy.shtml" title="隐私保护" target="_blank">隐私保护</a>
        <span>|</span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11035381</a><span>|</span><i>京公网安备110108007970号</i>
        <span>|</span><a href="http://pic.shop.lenovo.com.cn/g1/M00/01/3C/CmBZD1aLdE-AHmSmAAJk4Nd8ReY449.jpg" title="营业执照" target="_blank">营业执照：110000410127232</a>
    </div>
</div>
<!--*************Footer结束************-->
<div class="mask" style="display: none"></div>
<div class="popbox" style="display: none">
    <div class="title">正在支付...<a href="javascript:void(0)" class="close">X</a></div>
    <div class="line"></div>
    <div class="btn error">
        <div class="bcon">
            <p>支付遇到问题<br>点击查看<a href="javascript:void(0)" onclick="payQuestion()">支付常见问题</a></p>
        </div>
    </div>
    <div class="btn ok">
        <div class="bcon">
            <p>已完成支付<br>点击查看<a href="javascript:void(0)" onclick="goOrderInfo()">详细订单</a></p>
        </div>
    </div>
</div>

<input type="hidden" value="pageview::b2c_pc::www.easy_analysis.com/test_b2cPc_url.html" id="LA_TAG_ELEMENID">
<div id="code_box"></div>

</div>
</body>
</html>