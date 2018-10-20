<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo e(config("web.title")); ?></title>
	<meta name="keywords" content="<?php echo e(config('web.keywords')); ?>" />
	<meta name="description" content="<?php echo e(config('web.description')); ?>" />
	<link rel="shortcut icon" href="/style/home/img/1.png">
	<link rel="stylesheet" href="/style/home/css/thinkpad.css">
	<script src="/style/home/js/jquery.js"></script>
	<script src="/style/home/js/think.js"></script>
</head>
<body>
	<!-- 头 -->
	<?php echo $__env->make("home.public.header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container centers">
		<div class="mianbao">
		        	<a href="http://www.lenovo.com.cn">首页</a> &gt; <a href="#">商品详情</a>
		         &gt; <?php echo e($goods->title); ?> 
		</div>
		<div class="action">
			<div class="ac-left">  
				<!-- 橱窗图上部  空白位-->
				<!-- 橱窗图 --> 
            <div class="imgs" id="imgSlider">
                <a href="javascript:;" class="l-s"></a>
                <a href="javascript:;" class="l-r"></a>
                <ul class="img-d" id="imgBig">

                	<?php $__currentLoopData = $goodsImg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <li id="bigim0" style="z-index:1;filter: alpha(opacity=100); opacity: 1;"><a href="javascript:;"><!--最后效果abc.jpg  abc.w544.jpg -->
                        <img width="544px" height="544px" src="/Uploads/goods/<?php echo e($img->img); ?>" alt="<?php echo e($goods->title); ?>">
                    	</a>
                	</li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </ul>
                <div class="img-x">
					<ul class="pro_ul" id="imgSmall" style="width: 408px;">

						<?php $__currentLoopData = $goodsImg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					    

						    <li id="im0" style="filter:alpha(opacity:100);opacity:1;">
						    	<a href="javascript:;">
						    	<img style="width:88px;height:88px;" src="/Uploads/goods/<?php echo e($img->img); ?>" alt="<?php echo e($goods->title); ?>">
						    	</a>
						    </li>

					    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						
					</ul>
                </div>
            </div>
            <div class="nr ">
                 <span>商品编号：20DFA08ECD</span>
                <a href="javascript:void(0);" title="收藏"><span class=""></span>收藏</a>
                <a href="javascript:void(0);" title="分享"> <span  class="g"></span>分享</a>
                <div class="box">
                        <!-- JiaThis Button BEGIN -->
                        <div class="jiathis_style">
                            <a class="jiathis_button_tsina" latag="latag_pc_detail_share_weibo" title="分享到微博"><span class="jiathis_txt jtico jtico_tsina"></span></a>
                            <a class="jiathis_button_qzone" latag="latag_pc_detail_share_qzone" title="分享到QQ空间"><span class="jiathis_txt jtico jtico_qzone"></span></a>
                            <a class="jiathis_button_renren" latag="latag_pc_detail_share_renren" title="分享到人人网"><span class="jiathis_txt jtico jtico_renren"></span></a>
                            <a class="jiathis_button_weixin" latag="latag_pc_detail_share_weixin" title="分享到微信"><span class="jiathis_txt jtico jtico_weixin"></span></a>
                        </div>
                    </div>
            </div>
    </div>

				<!-- 橱窗图下部  空白位-->
			
	<div class="ac-right">
		        	
					<!-- 基本信息上部  空白位-->
		            
					<!-- 商品基础信息 -->
	        <h1 class="biaoti"><?php echo e($goods->title); ?></h1>
	            <p class="ar-jie"><?php echo e($goods->info); ?></p>
	        <div class="tishi">【温馨提示】<a href="&#10;http://click.lenovo.com.cn/phpstat/tourl.php?a=1775" target="blank"><font color="red">晒单最高送1年延保，点击晒单-&gt;</font></a><br>
	        </div>
	        <div class="ar-main">
	            <div class="amt clearfix">
	                <span >商城价：</span>
	                <b>¥<?php echo e($goods->price); ?></b>
	                <div id="yd">
	                    <div class="icon">预售</div>
	                    <span id="preselldj">定金：0</span>
	                    <div id="box_djs">
	                        <span id="
	                        preselldjs"></span><a id="presellzc" href="pd_comp/html/presell_info.html" target="_blank">预售规则</a>
	                    </div>
	                </div>
	            
	            </div>
	            <div class="cx">
	            	<span class="cxix">促销信息：</span>
					<div class="de_sail_r">
						<ul class="de_sail_top">
							<li class="clearfix" 
								id="xdlj">
									<span class="ht">下单立减</span>
									<span class="xjz">下单立减
										<b class="detail_red">700.00元</b>，距离结束时间还有:<b class="detail_red" id="time">3天 2时 38 分 24秒</b>
								  </span>
								  <div class="clear"></div>
							</li>
						</ul>
					</div>
						<p id="n_yyks" style="display:none; color:red" class="ns_gray_less">
						</p>
						<p id="n_sgks" style="display:none; color:red" class="ns_gray_less">
						</p>
						<p id="n_fsgks" style="display:none; color:red" class="ns_gray_less">
						</p>
						<p id="n_djs" style="display:none; color:red" class="ns_gray_less"></p>
					</div>
	       	 </div>
	                <div class="de_info_app clearfix">
	                <!-- <a href="javascript:;" class="de_more" id="appshow"><i class="guan de_down"></i><span>APP首单立减10元</span></a>
	                <div class="de_app_code"><img src="pd_comp/images/detail/de_code.jpg" alt="" /></div> -->
	                </div>

					
					<!-- 价格下部  空白位-->
		            
					<!-- 商品规格 -->
		<div class="xilei">
<!-- 			<ul>
    			<li class="clearfix">
	    			<span class="qj" typeid="e430ee78-7b11-4437-9ca2-2201807640d0">E系列15寸：</span>
	    			<div class="xilei-main">
		    			<span id="b2306585-0b8a-11e6-943c-0050569f0752" class="de_sec_sel click_radio2 active" latag="latag_pc_detail_choose_48639_E系列15寸_b2306585-0b8a-11e6-943c-0050569f0752">i5 4GB 500GB机械 标准版</span>
		    			<span id="b23e5d38-0b8a-11e6-943c-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_48639_E系列15寸_b23e5d38-0b8a-11e6-943c-0050569f0752">i5  4GB  1TB机械   标准版</span>
		    			<span id="b245b8df-0b8a-11e6-943c-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_48639_E系列15寸_b245b8df-0b8a-11e6-943c-0050569f0752">i5 8GB 500GB机械 标准版</span>
		    			<span id="8a990b5f-18dd-11e6-943c-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_48639_E系列15寸_8a990b5f-18dd-11e6-943c-0050569f0752">i7 4GB 500GB机械 定制版</span>
		    			<span id="b24c64c5-0b8a-11e6-943c-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_48639_E系列15寸_b24c64c5-0b8a-11e6-943c-0050569f0752">i7  8GB   1TB机械   定制版</span>
		    			<span id="9853e1ee-6380-11e6-b8c7-0050569f0752" class="de_sec_sel click_radio2" latag="latag_pc_detail_choose_48639_E系列15寸_9853e1ee-6380-11e6-b8c7-0050569f0752">i5 8GB 1TB机械 定制版</span>
		    	</li>
		    </ul> -->
		<div>
						<!-- ThinkPad 私人订制 -->
						
		<div class="xuan" style="">
<!-- 		    <ul>
		        <li class="clearfix">
		            <span class="qj">选择服务：</span>
		           <div class='fuwrap'>
		            <div class="fuwub">
   		            	<span class="abb"itle="2年内提供由于意外情况（摔、瞌、碰、进液）导致的机器故障及外观损坏保修服务"  class="selectOption click_checkbox"><i class="guan"></i>Think笔记本2年意外保修 ￥509</span> 
   		            	<ul>
   		            	 <li title="1年内提供由于意外情况（摔、瞌、碰、进液）导致的机器故障及外观损坏保修服务" latag="latag_pc_detail_chooseservice_48639_51725" sort="1" data-code="51725"><i class="guan"></i>Think笔记本1年意外保修 ￥255</li>
   		            	  <span class="guan shows show_down"></span>  
   		            	</ul>
   		            	
   		            </div>
   
   	            	  <div class="fuwus">
   	            	  	<span title="2年内提供全国范围免费上门维修服务" latag="latag_pc_detail_chooseservice_48639_51728" sort="0" data-code="51728" class="selectOption click_checkbox"><i class="guan"></i>Think笔记本2年上门服务（全国） ￥579</span>
   	            	   </div>
   	            	   <div class="fuh">
   	            	  	<span title="2年内提供机械硬盘故障换新，旧盘不回收服务" latag="latag_pc_detail_chooseservice_48639_51730" sort="0" data-code="51730" class="selectOption click_checkbox"><i class="guan"></i>Think笔记本2年硬盘不回收 ￥249</span> 
   	            	  </div>
   	            	</div>
		            </div>
		        </li>
		    </ul> -->
		</div>
				
							<!-- 分期文案 -->
			<!-- think o2o -->
		<div id="city_wrap" class="de_info_section de_info_section_city" style="display:none;"></div>
            <div class="de_info_btn clearfix">
                <div class="de_info_num">
                    <label class="i_box">
                        <input class="pro_num J_input" type="text" value="1">
                        <input class="pro_add J_add" type="button">
                        <input class="pro_less J_minus" type="button">                    
                    </label>
                    <span id="stock">有库存</span>
                </div> 
		                <a href="javascript:void(0);" class="de_button de_btn_buy" id="ljgm" style="" event-name="PC端_产品详情页_立即购买_ThinkPad E550 20DFA08ECD" latag="latag_pc_detail_orderimmediately_48639" title="立即购买">立即购买</a>
		                <a href="javascript:void(0);" class="de_button de_btn_car" id="jrgwc" style="" event-name="PC端_产品详情页_加入购物车_ThinkPad E550 20DFA08ECD" latag="latag_pc_detail_addshopcart_48639" title="加入购物车">加入购物车</a>
                </div>
            
			<!-- 基本信息下部  空白位-->
        </div>
	</div>
</div>
		<div class="mainsss">
			<div class="box-lt">
				        	
							<!-- 推荐列表上部  空白位--> 
							
<div id="rxb">
	<div class="lt-boxa" style="margin-bottom: 10px;">   
	              <h1>热销榜</h1>
	               <dl> 
	                <dt> 
	                	<a target="_blank">
	                		<img src="/style/home/img/S5pkCbFJg0toXIbnpUChlbRmG-4457.w70xh70.jpg"> 
	                	</a> 
	                </dt>
						<dd>
							<a  target="_blank"> 
							<p>天逸100 (I5/Windows 10 家庭版/14英寸/2G独显/4G/500G/DVD)</p>
							</a>
							<b>￥3199</b> 
						</dd>
					</dl>
					<dl> 
						<dt>  
							<a  target="_blank">
							<img src="/style/home/img/18M4UXb7X8EujEoNGjGkWA84r-8467.w70xh70.jpg">   
							</a>    
						</dt> 
						<dd>
							<a  target="_blank">
							<p>小新310 (I7/Windows 10 家庭版/14.
							0英寸/4G/500G)</p> 
							</a>    
							<b>￥4499</b>  
						</dd> 
					</dl> 
					<dl> 
						<dt> 
							<a target="_blank"><img src="/style/home/img/0VI374vmQqVNdnpGraQHDgsrF-5614.w70xh70.jpg">     
							</a>  
						</dt> 
						<dd> 
							<a  target="_blank"> 
							<p>拯救者 (I5/Windows 10 家庭版/15.6英寸/8G/1T)</p>                       
							</a>            
							<b>￥5499</b>
					   </dd>                
					</dl>
					<dl>
						<dt>
							<a  target="_blank">
							<img src="/style/home/img/AdIdi01d05ryyOZ3y8RtoRTL9-9011.w70xh70.jpg">  
							</a> 
						</dt>
						<dd> 
							<a  target="_blank">
							<p>小新700 (I5/Windows 10 家庭版/15.6英寸/4G独显/500G+128G)
							</p>  
							</a>                  
							<b>￥5499</b>  
						</dd>
					</dl>
					<dl style="border-bottom:none;"> 
						<dt> 
							<a  target="_blank">
								<img src="/style/home/img/76qsTSOhdkr94jtzCUirwIQet-3814.w70xh70.jpg">
							 </a>  
						</dt>  
					<dd>
						<a target="_blank">
						 <p>拯救者 (I7/Windows 10家庭版/15.6英寸/8G/1T)</p> 
						</a> 
						<b>￥6399</b> 
					</dd>   
					</dl>       
	  </div>
	</div>

   <div id="gxhtj">
	 <div class="lt-boxa" style="margin-bottom: 10px;"> 
	                <h1>猜你喜欢</h1>             
					<dl>        
						<dt>        
							<a  href="http://www.lenovo.com.cn/product/53381.html" target="_blank"><img src="http://p3.lefile.cn/product/adminweb/2016/11/02/JEO8ueAXNCxyoR5vdgu9oEhI6-3309.w70xh70.jpg">    
							</a>         
						</dt>             
						<dd>       
							<a  href="http://www.lenovo.com.cn/product/53381.html" target="_blank"> <p>小新Air 13 Pro (I5/Windows 10 家庭版/13.3英寸/8G/256G SSD/金)</p>                
							</a>        
							<b>￥5699</b>     
						</dd>       
					</dl>                            
					<dl>       
						<dt>            
							<a  href="http://www.lenovo.com.cn/product/58053.html" target="_blank">
								<img src="http://p1.lefile.cn/product/adminweb/2016/08/17/tseds0UW4IhC8L6glTtoyvI6b-0769.w70xh70.jpg">  
							</a>             
						</dt>           
						<dd>                      
							<a href="http://www.lenovo.com.cn/product/58053.html" target="_blank">
							<p>小新Air 13 Pro-金 (I5/Windows 10 家庭版/13.3英寸/LTE 48G流量)
							</p>              
							</a>                       
							<b>￥6499</b>        
						</dd>  
					</dl>
					<dl>                  
						<dt>    
							<a  href="http://www.lenovo.com.cn/product/52618.html" target="_blank">
								<img src="/style/home/img/AdIdi01d05ryyOZ3y8RtoRTL9-9011.w70xh70.jpg">    
							</a>    
						</dt>                 
						<dd>      
						<a href="http://www.lenovo.com.cn/product/52618.html" target="_blank">
						<p>小新700 (I5/Windows 10 家庭版/15.6英寸/4G独显/500G+128G)
						</p>   
						</a>    
						<b>￥5499</b>           
						</dd>  
					
					</dl>                             
					<dl>       
						<dt>           
							<a href="http://www.lenovo.com.cn/product/52413.html" target="_blank">
								<img src="/style/home/img/KrSWdKJd453n4lbWrCcVdgr8a-4391.w70xh70.jpg">                     
							</a>        
						</dt>         
						<dd>                      
							<a  href="http://www.lenovo.com.cn/product/52413.html" target="_blank"> 
							<p>小新Air 12 (6Y30/Windows 10 家庭版/WiFi/12.2英寸/4G/128G)
							</p>                     
							</a>               
							<b>￥2999</b>      
						</dd>    
			       </dl>            
					<dl>                 
						<dt>               
							<a target="_blank">
								<img src="/style/home/img/ZiHG29LjNlXsL7jAat0H4YCgl-9203.w70xh70.jpg">                    
							</a>   
						</dt>         
						<dd>                
							<a  href="http://www.lenovo.com.cn/product/52667.html" target="_blank">
							<p>拯救者 (I7/Windows 10 家庭版/14.0英寸/1T+128G SSD)
							</p>                     
							</a>              
							<b>￥6999</b>       
						</dd>         
					</dl>                   
					<dl style="border-bottom:none;">                 
						<dt>        
							<a href="http://www.lenovo.com.cn/product/48302.html" target="_blank">
								<img src="/style/home/img/dsQvUYkKH6voKQWnsZXG7o7to-6032.w70xh70.jpg">   
							 </a>
						</dt>     
						<dd>                      
							<a  href="http://www.lenovo.com.cn/product/48302.html" target="_blank"> 
							</a>    
							<b>￥6099</b>                
						</dd>              
					</dl>            
				</div>
			</div>


          <div id="cnxh">
          	<div class="lt-boxa" style="margin-bottom: 10px;">       
                    <h1 style="font-size:14px;">看了又看</h1> 
					<dl>              
						<dt>               
						 <a latag="latag_pc_detail_view_rec_1_48639_52413_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52413.html" target="_blank">
							<img src="/style/home/img/KrSWdKJd453n4lbWrCcVdgr8a-4391.w70xh70.jpg">                
						 </a>             
						</dt>          
						<dd>        
							<a latag="
							latag_pc_detail_view_rec_1_48639_52413_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52413.html" target="_blank">   
							<p latag="latag_pc_detail_view_rec_1_48639_52413_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">小新Air 12 (6Y30/Windows 10 家庭版/WiFi/12.2英寸/4G/128G)</p>                    
							</a>      
							<b>￥2999</b>                       
							 <br>                      
							<span>推荐指数：</span> 
							<b>86%</b>                            
						</dd>               
					</dl>                   
					<dl>            
						<dt>         
							<a latag="latag_pc_detail_view_rec_2_48639_52667_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52667.html" target="_blank">
								<img src="/style/home/img/ZiHG29LjNlXsL7jAat0H4YCgl-9203.w70xh70.jpg">   
							</a>               
						</dt>                    
						<dd>  
							<a latag="latag_pc_detail_view_rec_2_48639_52667_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52667.html" target="_blank">      
							<p latag="latag_pc_detail_view_rec_2_48639_52667_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">拯救者 (I7/Windows 10 家庭版/14.0英寸/1T+128G SSD)</p>         
							</a>                        
							<b>￥6999</b>  <br>                        
							<span>推荐指数：</span>                        
							<b>82%</b>                        
						</dd>             
					</dl>       
					<dl>     
						<dt>  
							<a latag="latag_pc_detail_view_rec_3_48639_48302_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/48302.html" target="_blank">
								<img src="/style/home/img/dsQvUYkKH6voKQWnsZXG7o7to-6032.w70xh70.jpg">             
							</a>      
						</dt>                  
						<dd>        
							<a latag="latag_pc_detail_view_rec_3_48639_48302_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/48302.html" target="_blank">            
							<p latag="latag_pc_detail_view_rec_3_48639_48302_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">拯救者 (I7/Windows 10家庭版/14.0英寸/2G独显/4G/1T)</p>                      
							</a>                      
							<b>￥6099</b>                                              
							<br>                        
							<span>推荐指数：</span>                    
							<b>79%</b>                                           
						</dd>       
					</dl>     
					<dl>              
						<dt>     
							<a latag="latag_pc_detail_view_rec_4_48639_53011_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/53011.html" target="_blank">
								<img src="/style/home/img/jHvJCkVhS4qb4sBxcqTr9LIu9-8090.w70xh70.jpg">                    
							</a>         
						</dt>         
						<dd>                     
						<a latag="latag_pc_detail_view_rec_4_48639_53011_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/53011.html" target="_blank">                      
							<p latag="latag_pc_detail_view_rec_4_48639_53011_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">小新Air 13 Pro (I5/Windows 10 家庭版/13.3英/ 4G/256G SSD/金)</p>                     
						</a>             
						<b>￥5499</b>                                                
						<br>       
						<span>推荐指数：</span>      
						<b>78%</b>                              
						</dd>           
					</dl>   

					<dl>             
						<dt>        
						<a latag="latag_pc_detail_view_rec_6_48639_52669_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52669.html" target="_blank">
							<img src="/style/home/img/GcCHbiDmUV9PMTYwCa7pCpqpm-0128.w70xh70.jpg">                  
						</a>               
						</dt>                  
						<dd>       
						<a latag="latag_pc_detail_view_rec_6_48639_52669_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52669.html" target="_blank">
						 <p latag="latag_pc_detail_view_rec_6_48639_52669_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">拯救者 (I5/Windows 10家庭版/14.0英寸/8G/1T)</p>            
						</a>                      
						<b>￥5499</b>                                                
						<br>                
						<span>推荐指数：</span>                     
						<b>75%</b>                                             
						</dd>               
					</dl>       
					<dl>    
						<dt>    
							<a latag="latag_pc_detail_view_rec_7_48639_52157_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52157.html" target="_blank">
								<img src="/style/home/img/M9R6m2BPiFzMuaCUUHbUq1ycI-9363.w70xh70.jpg">               
							</a>      
						</dt>            

						<dd>       
							<a latag="latag_pc_detail_view_rec_7_48639_52157_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/52157.html" target="_blank">      
							<p latag="latag_pc_detail_view_rec_7_48639_52157_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">联想官方商城专属鼠标垫</p>
							</a>                 
							<b>￥39</b>                                             
							<br>                      
							<span>推荐指数：</span>          
							<b>73%</b>                                       
						</dd>           
					</dl>             
					<dl style="border-bottom:none;">       
						<dt>                      
							<a latag="latag_pc_detail_view_rec_8_48639_53370_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/53370.html" target="_blank">
								<img src="/style/home/img/VsCFp68OUHe9FucluD1r5ec5P-3863.w70xh70.jpg">                       
							</a>        
						</dt>           
						<dd>                     
							<a latag="latag_pc_detail_view_rec_8_48639_53370_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468" href="http://www.lenovo.com.cn/product/53370.html" target="_blank">             
							<p latag="latag_pc_detail_view_rec_8_48639_53370_DZ02010001_84d4dbeb-95d0-4ada-926f-6a1d248cc468">小新Air 13 Pro (I5/Windows 10 家庭版/13.3英寸/4G/256G SSD/银)</p>                      
							</a>                
							<b>￥5499</b>                                             
							<br>                
							<span>推荐指数：</span>                     
							<b>72%</b>
						</dd>      
					</dl>            
				</div>
			</div>


<!-- 推荐列表下部  空白位--> 
      <div class="box-rt">
				<!-- 详情配置上部  空白位--> 
			<div class="tab-hd">   
				<ul id="tab"> 
				<!-- 商品详情配置评价tab --> 
					<li class="current" latag="latag_pc_detail_tab_商品详情_48639">商品详情</li>
					<li latag="latag_pc_detail_tab_配置信息_48639">配置信息</li>
					<li id="pingjia_title" latag="latag_pc_detail_tab_商品评论_48639">商品评价</li>
				</ul>
            </div>
            <div id="content">
					<!-- 商品详情 -->
					<ul class="rt-box">
						<?php echo $goods->text; ?>

					</ul>
									

					<!-- 配置信息 -->
						


			<ul>
		    <div class="ns_attributes-list">                         
        
				<?php echo $goods->config; ?>

			</div>
			</ul>
                                                                            
			<ul id="pingjia_body" style="display: none;">

  <div class="ns_comment ns_fixClear" id="div3">
    <div class="ns_comment-inner" id="sppl_box">
        <dl id="sppl_list" class="clearfix">
      
        </dl>
    </div>
    <div id="pager_divdiv3" class="ns_discusspager">
	<div class="ns_comment-inner" id="sppl_box">
		<dl id="sppl_title"> 
		 	<dt>
			 	<b><?php echo e(round(($arr['goodTot']/$arr['commentTot'])*100)); ?></b>
				<span>&nbsp;%</span>
				<p>好评率</p>
			</dt> 
	  		<dd class="sppl_total active" data-level="0">全部评价(<span><?php echo e($arr['commentTot']); ?></span>)</dd>  
		 	<dd class="sppl_good" data-level="3">好评(<span><?php echo e($arr['goodTot']); ?></span>)</dd> 
		  	<dd class="sppl_medium" data-level="2">中评(<span><?php echo e($arr['zhongTot']); ?></span>)</dd>  
		  	<dd class="sppl_total" data-level="1">差评(<span><?php echo e($arr['chaTot']); ?></span>)</dd> 
		</dl>
        <dl id="sppl_list" class="clearfix">

        	<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<dd>  
				<div class="sppl_top">  
				<span style="color:red"><?php echo e(str_repeat("★",$com->star)); ?><?php echo e(str_repeat('☆',5-$com->star)); ?></span>  
				<span class="sppl_username">匿名</span>   
				<span class="sppl_time"><?php echo e(date("Y-m-d H:i:s",$com->time)); ?></span>  
				</div>  
				<div class="sppl_user_box">
				<p><a class="clickpl" uuid="9ffce34a-deda-483c-8754-833b29421f76" href="javascript:void(0);">还不错  </a>
				</p> 
				</div>   
				 
			</dd>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				
		</dl>
	</div>
	</div>
</div>

  <!-- 社区评论 -->
  <div class="club-evaluation">
 
  </div>

				
</div>
</div>
</div>
</div>
</div>
<div class="container footer">
		<div id="think_bottom">
	    <div class="think_share clear">
	        <a class="th_douban" title="豆瓣" href="http://site.douban.com/thinkpad/" target="_blank">豆瓣</a>
	        <a class="th_weibo" title="微博" href="http://weibo.com/lenovothink" target="_blank">微博</a>
	        <a class="th_renren" title="人人" href="http://page.renren.com/600014223?checked=true" target="_blank">人人</a>
	        <a class="th_tencent" title="腾讯微博" href="http://e.t.qq.com/ilovethinkpad" target="_blank">腾讯微博</a>
	    </div>
	    <div class="think_link">
	        <ul class="clears">
				<li style="padding-left:0;">
					<a style="color:red;" href="http://www.thinkworld.com.cn/static/legal_notice.html" target="_blank" title="使用条款">使用条款
				</a>
				</li>
				<li>
					<a href="http://www.thinkworld.com.cn/login/about_member.html" target="_blank" title="关于会员">关于会员</a>
				</li>
				<li>
					<a href="http://think.lenovo.com.cn/" target="_blank" title="服务与支持">服务与支持</a>
				</li>
				<li>
					<a style="color:red;" href="http://c.lenovo.com.cn/think/tucao.html" target="_blank" title="官网意见反馈">官网意见反馈</a>
				</li>
				<li>
					<a href="http://www.thinkworld.com.cn/static/privacy_protection.html" target="_blank" title="隐私保护">隐私保护</a>
				</li>
				<li>
					<a href="http://www.lenovo.com.cn" target="_blank" title="联想商城">联想商城</a>
				</li>
				<li>
					<a href="http://www.zuk.com/?hmsr=thinkpad&amp;hmmd=logo" target="_blank" title="神奇工场">神奇工场
				</a>
				</li>
				<li>
					<a href="http://www.thinkworld.com.cn/hottop/page_pc.html" target="_blank" title="Think官网热搜榜">Think官网热搜榜</a>
				</li>
				<li>
					<a href="http://www.thinkworld.com.cn/fenlei/page_thinkpc.html" target="_blank" title="分类大全">分类大全</a>
				</li>   
				<li>
					<a href="http://www.thinkworld.com.cn/juhe/page_1.html" target="_blank" title="Think产品大全">Think产品大全</a>
				</li>
				<li>
					<a href="http://products.thinkworld.com.cn/thinkproducts/product/getPartners" target="_blank" title="合作伙伴认证">合作伙伴认证</a>
				</li>
				<li>
					<a href="http://www.thinkworld.com.cn/contact/index.html" target="_blank" title="联系我们">联系我们
				</a>
				</li>
				<li>
					<a href="http://fs.thinkworld.com.cn/login/index.html" target="_blank" title="黒匠专属">黒匠专属
				</a>
				</li>
				<li style="border-right:0;">
					<a href="http://b2b.thinkworld.com.cn/login/index.html" target="_blank" title="经销商注册">经销商注册
				</a>
				</li>
	        </ul>
	    </div>
	    <div class="think_copy">
	        <p>版权所有：1998-2016 联想集团| <a href="http://appserver.lenovo.com.cn/Public/public_bottom/legal.shtml">法律公告</a> | <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action">京ICP备11035381</a> |京公网安备110108007970号| <a href="http://pic.shop.lenovo.com.cn/g1/M00/01/3C/CmBZD1aLdE-AHmSmAAJk4Nd8ReY449.jpg">营业执照：110000410127232</a></p>
	        <p>超极本,赛扬、Celeron Inside、CoreInside、英特尔、英特尔标识、英特尔凌动、Intel Atom Inside、英特尔酷睿、Intel Inside, Intel Inside 标识、英特尔欢跃、英特尔博锐、安腾、Itanium Inside、奔腾、Pentium Inside、vPro Inside、至强、至强 Phi 和 Xeon Inside 均是英特尔公司在美国或其他国家的商标。ThinkPad是联想公司的注册商标。</p>
	    <div>
	</div>	
	<!-- 侧边栏 -->
	<div class="shop_rightbar" id="shop_rightbar">
		<div class="shop_rightbar_con">
		    <ul>
		        <li class="shop_userlogo">
		            <a onclick="tocenterisLogin()" target="_blank" title="会员中心"><img src="/style/home/img/3636.jpg" alt="会员中心"></a>
		        </li>
		        <li class="shop_car">
		            <a href="http://cart.lenovo.com.cn/" target="_blank" title="购物车" class="shopicon" latag="latag_pc_common_header_shopcart"></a>
		        </li>
		        <li class="shop_save">
		            <a href="http://i.lenovo.com.cn/favorite/myFavorite.jhtml?sts=e40e7004-4c8a-4963-8564-31271a8337d8" target="_blank" title="我的收藏" class="shopicon">我的收藏</a>
		        </li>
		        <li class="shop_pointer">
		            <a href="javascript:;" class="shopicon"></a>
		            <i class="shopicon V_jt"></i>

		        </li>
		        <li class="shop_totop" id="shop_totop">
		            <a href="javascript:;" title="回到顶部" class="shopicon">回到顶部</a>
		        </li>
		        <div class="clear"></div>
		    </ul>
		</div>
	</div>
</body>
</html>