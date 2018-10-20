<!-- 顶部 -->
<div class='nav'>
  <div class="top">
    <ul class="nav-1">
      <li><a href="/Lenovo_HouseHold_Index.aspx" target="_blank">个人及家用产品</a><span class="gang">|</span></li>
      <li><a href="/Lenovo_Commercial_Index.aspx" target="_blank">库商用产品</a><span class="gang">|</span></li>
      <li><a href="appserver.lenovo.com.cn/Lenovo_EnterPrise_Index.aspx" target="_blank">库企业级产品库</a><span class="gang">|</span></li>
      <li><a href="http://www.lenovovip.com.cn/" target="_blank">聚享汇会员</a><span class="gang">|</span></li>
      <li class='she'>
        <a href="javascript:">社交平台
          <span class="tou-one"></span>
        </a>
        <span class="gang"style="margin-left:18px">|</span>
        
        <ul class='menu'>
          <li><a href=""><span class="guanbo"></span>联想官方微博</a></li>
          <li><a href=""><span class="bo"></span>杨元庆微博</a></li>
          <li><a href=""><span class="wei"></span>联想官方微信</a></li>
          <li><a href=""><span class="tie"></span>百度贴吧联想吧</a></li>
          <li><a href=""><span class="bu"></span>联想兴趣部落</a></li>
          <li><a href=""><span class="qq"></span>联想qq空间</a></li>
          <li><a href=""><span class="gushe"></span>联想官方社区</a></li>
        </ul>
      </li>        
      <li class="ji">
        <a href="javascript:">手机版</a>
        <span class="tou"></span>
            <ul class='shou'>
               <li>
                  <span class="shou-tu"></span>
                  <div class="shou-zi">联想商城客户端</div>
                  <div class='shou-jian'>首次下单立减20元</div>
                  <img src="/style/home/img/2.jpg" alt="">
                </li>
                <div class="clear"></div>
            </ul>
      </li> 
      <div class="clear"></div> 
   </ul>
   <div class="nav-right">
      <ul>
        <li>
          <a style="position:relative" href="/car">购物车 
          <span class="guo">0</span>
          </a>
        </li>
        @if(session('lenovoHomeUserInfo'))
          <li><a href="/logout">退出</a><span class="gang">|</span></li>
          <li><a href="">欢迎 {{session('lenovoHomeUserInfo.name')?session('lenovoHomeUserInfo.name'):session('lenovoHomeUserInfo.email')}} 登录</a><span class="gang">|</span></li>
        @else
          <li><a class="zc" href="/reg">注册</a><span class="gang">|</span></li>
          <li><a class="dl"href="/login">登录</a><span class="gang">|</span></li>
        @endif
      </ul> 
    </div>
 </div> 
</div>
<!-- 顶部图片 -->
<div class='container header'>
<a href="http://www.lenovo.com.cn/activity/marketing/yoga5prof/index.html" title="" target="_blank" >
    <img id='imgs
    'src="/style/home/img/3.png" alt="" width='1200px' height="101px">
</a>
<a href="javascript:;"><span id='close'>&times;</span></a>
</div>
<!-- 中 -->
<!-- <div class="middle">
 <!-- 搜索 -->
<div class="container search">
   <div class="search-left">
     <a href="http://www.lianxiang.com"><img src="/Uploads/sys/{{config('web.logo')}}" alt=""></a>
   </div>
   <div class="search-right">
      <div class="fang">
        <span class="da" ></span>
      </div>
      <input type="text" placeholder="miix5">
   </div>
   <div class="clear"></div>
</div>