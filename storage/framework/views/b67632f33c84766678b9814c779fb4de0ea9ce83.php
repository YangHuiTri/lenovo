<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>联想商城—购物车</title>
  <meta name="keywords" content="<?php echo e(config('web.keywords')); ?>" />
  <meta name="description" content="<?php echo e(config('web.description')); ?>" />
  <link rel="shortcut icon" href="/style/home/img/1.png">
  <link rel="stylesheet" href="/style/home/css/shop.css">
  <script src="/style/home/js/jquery.js"></script>
  <!-- // <script src="/style/home/js/shop.js"></script> -->
</head>
<body>
<?php echo $__env->make("home.public.header1", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- logo -->
<div class="top_logob">
    <img src="/style/home/img/pic-13.jpg" class="top_logob_imga">
    <img src="/style/home/img/pic-12.jpg" class="top_logob_imgb">
</div>

<div class="buycart w1200">
    <?php if($shop): ?>
<div id="cart_main">
    <div class="bc_option clearfix">
    <div class="bc_all clearfix active">
  <input type="checkbox" class="selectAll">
 <span>全选</span></div>
</div>

<form action="/jiesuan" method="post">
<div class="bc_table" id="main_table">
    <table cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <th colspan="3" width="462">商品</th>
            <th width="163">规格</th>
            <th width="152">单价</th>
            <th width="152">数量</th>
            <th width="152">金额</th>
            <th width="117">操作</th>
          </tr>
    	</tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
		
        <!--带服务-->
         <tbody>
            <?php $tot=0; ?>

            
            <?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr class=" active" gcode="52770" stock="18">
                <td width="57" class="bc_table_sel">
                    <input type="checkbox" name="goods[]" value="<?php echo e($car['id']); ?>" />
                </td>
                <td width="148" class="bc_table_img">
                    <a href="/goods/<?php echo e($car['id']); ?>" target="_blank">
                         <img src="/Uploads/goods/<?php echo e($car['goodsInfo']->img); ?>" alt="">
                    </a>
                    <div class="bc_zhezhao"></div>
                </td>
                <td width="257" class="bc_proname bc_name_gift">
                    <a href="/goods/<?php echo e($car['id']); ?>" target="_blank"><?php echo e($car['goodsInfo']->title); ?></a>
                    
                </td>
                <td width="163"><a href="/goods/<?php echo e($car['id']); ?>" target="_blank"><?php echo e($car['goodsInfo']->info); ?></a> </td>
                <td width="152" style="position:relative;">
	                <span class="current_price"><?php echo e($car['goodsInfo']->price); ?></span>
	                <!--满减-->
	             </td>
                <td width="152" text-align:center>
                    <label class="i_box clearfix">
                        <input class="pro_less J_minus"  money="<?php echo e($car['goodsInfo']->price); ?>" ids="<?php echo e($car['goodsInfo']->id); ?>" type="button" value="-" >
                        <input class="pro_num J_input" type="text" value="<?php echo e($car['num']); ?>" style="ime-mode: disabled;" >
                        <input class="pro_add J_add" money="<?php echo e($car['goodsInfo']->price); ?>" ids="<?php echo e($car['goodsInfo']->id); ?>" type="button" value="+" >
                    </label>

                </td>

                <?php 

                    $money=$car['goodsInfo']->price*$car['num'];

                    $tot+= $money;
                 ?>
                <td width="152" id="money<?php echo e($car['goodsInfo']->id); ?>" class="bc_red"><?php echo e($money); ?></td>
                <td width="117" style="text-align:left">
                    <a href="javascript:;" style="color: #000" title="删除" onclick="deleline(this,<?php echo e($car['goodsInfo']->id); ?>)">删除</a>
                    <br>
                    <a href="javascript:;" style="color: #000" title="收藏" onclick="conllectionFun('52770')">移入收藏夹</a>
                    
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            

           
    </tbody>
</table>
</div>
<div class="bc_num clearfix">
    <div class="bc_num_fl">
        <div class="bc_all clearfix active">
    <input type="checkbox" name="checkbox" class="selectAll" />

            <span>全选</span></div>
        <a href="javascript:;" class="bc_num_del">删除选中商品</a>
    </div>
    <ul class="bc_num_fr">
     <!--    <li style="margin-top:0;">商品总价：7499.00 元</li>
        <li>优惠节省：500.00 元</li> -->
        <li>合计：<span class="bc_red" id="totalmoneyf"><span id="heji"><?php echo e($tot); ?></span> 元</span></li>
    </ul>
</div>
<div class="bc_probtn clearfix">
    <?php echo e(csrf_field()); ?>

    <input type="submit" id="submit" value="去结算">
    <!-- <a href="./zhifu.html" title="去结算"  event-name="PC端_去结算">去结算</a> -->
</div>
</div>

<form>

<?php else: ?>

    <a href="/">购物车空空如也，请购物</a>
<?php endif; ?>

<script>

    // 删除方法

    function deleline(obj,id){

        $.post("/CarDel",{id:id,"_token":"<?php echo e(csrf_token()); ?>"},function(data){
            // 判断是否成功

            if (data) {
                // 移除对应商品
                $(obj).parent().parent().remove();
            };
        });

    }


    // 数量+
    $(".J_add").click(function(){
        
        // 获取商品的ID

        id=$(this).attr('ids');

        obj=$(this);

        // 发送ajax请求

        $.post("/CarAdd",{id:id,"_token":"<?php echo e(csrf_token()); ?>"},function(data){

            if (data) {
                // js修改输入框的数量
                num=obj.prev().val();

                num=Number(num);

                obj.prev().val(++num);

                // 获取商品的价格

                price=Number(obj.attr("money"));

                // 让小计发生改变

                money=Number($("#money"+id).html());
                money=money+price;

                $("#money"+id).html(money);

                // 合计

                tot=Number($("#heji").html());

                tot=tot+price;

                $("#heji").html(tot);


            };
        });
    });

    // 数量-
    $(".J_minus").click(function(){
        
        // 获取商品的ID

        id=$(this).attr('ids');

        obj=$(this);

        num=obj.next().val();

        if (num<=1) {
            return "";
        };


        // 发送ajax请求

        $.post("/CarJian",{id:id,"_token":"<?php echo e(csrf_token()); ?>"},function(data){

            if (data) {
                // js修改输入框的数量
                num=obj.next().val();

                num=Number(num);

                obj.next().val(--num);

                // 获取商品的价格

                price=Number(obj.attr("money"));

                // 让小计发生改变

                money=Number($("#money"+id).html());
                money=money-price;

                $("#money"+id).html(money);

                // 合计

                tot=Number($("#heji").html());

                tot=tot-price;

                $("#heji").html(tot);
            };
        });

    });
            
</script>
<div class="bc_prolist" id="bc_prolist"><h3>
        <span>买了又买</span>
        <a  href="javascript:void(0);"><span class="lft-btn"></span></a>
        <a  href="javascript:void(0);"><span class="rgt-btn"></span></a>
    </h3>
    <div class="lunbo-box">
        <ul id="lunbo-img">                 
                <li>
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >新秀丽轻薄商务高端手提包 T900</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="51186">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄商务高端手提包 T900" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" latag="latag_pc_cart_buy_rec_2_52770|48635_51330_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想小新闪存盘 F300-U3 16G
                    </a>
                    </p>
                    <p>商城价：99元</p>
                    <div class="bc_btn" gcode="51330">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想小新闪存盘 F300-U3 16G" latag="latag_pc_cart_buy_rec_2_52770|48635_51330_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a></div>
                </li>
                
                <li>
                    <a href="" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/PHYIgt6pSesb6HQ6WZQlxT82J-3810.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="" target="_blank">新秀丽休闲款双肩包 B800</a></p>

                    <p>商城价：599元</p>
                    <div class="bc_btn" gcode="58635"><a href="javascript:;" event-name="PC端_加入购物车_新秀丽休闲款双肩包 B800" latag="latag_pc_cart_buy_rec_3_52770|48635_58635_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a></div>

                </li>
                

                <li>
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank">
                    <img style="height:200px;width:200px;" src="/style/home/img/CmBZD1Yg2BSAQf2eAABLGXxzFSg408.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想笔记本单肩包鼠套装TM200</a>
                    </p>
                    <p>商城价：149元</p>
                    <div class="bc_btn" gcode="48070">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想笔记本单肩包鼠套装TM200" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_pic">
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件</a>
                    </p>
                    <p>商城价：1099元</p>
                    <div class="bc_btn" gcode="52099">
                    <a href="javascript:;" event-name="PC端_加入购物车_ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件" latag="latag_pc_cart_buy_rec_5_52770|48635_52099_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank"><img style="height:200px;width:200px;" src="/style/home/img/CmPJilW4atiARKnaAACSJOOXg14930.jpg"></a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >联想游戏鼠标M600 烈焰红</a>
                    </p>
                    <p>商城价：199元</p>
                    <div class="bc_btn" gcode="50522">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想游戏鼠标M600 烈焰红">加入购物车</a>
                    </div>
                </li>

                <li>
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/L3d8ElIUyhoS6Tx95PzHdjS1p-1229.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >新秀丽轻薄款单肩包 T600 米白</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53132">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 米白" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >新秀丽轻薄款单肩包 T600 黑</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53130">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 黑" >加入购物车</a>
                    </div>
                </li>
                
                <li>
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51186.html" target="_blank" >新秀丽轻薄商务高端手提包 T900</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="51186">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄商务高端手提包 T900" >加入购物车</a>
                </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/51330.html" target="_blank" >联想小新闪存盘 F300-U3 16G</a>
                    </p>
                    <p>商城价：99元</p>
                    <div class="bc_btn" gcode="51330">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想小新闪存盘 F300-U3 16G" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/PHYIgt6pSesb6HQ6WZQlxT82J-3810.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="" target="_blank" >新秀丽休闲款双肩包 B800</a>
                    </p>
                    <p>商城价：599元</p>
                    <div class="bc_btn" gcode="58635">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽休闲款双肩包 B800" latag="latag_pc_cart_buy_rec_3_52770|48635_58635_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank">
                    <img style="height:200px;width:200px;" src="/style/home/img/CmBZD1Yg2BSAQf2eAABLGXxzFSg408.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/48070.html" target="_blank" latag="latag_pc_cart_buy_rec_4_52770|48635_48070_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_name">联想笔记本单肩包鼠套装TM200</a>
                    </p>
                    <p>商城价：149元</p>
                    <div class="bc_btn" gcode="48070"><a href="javascript:;" event-name="PC端_加入购物车_联想笔记本单肩包鼠套装TM200" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/52099.html" target="_blank" >ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件</a>
                    </p>
                    <p>商城价：1099元</p>
                    <div class="bc_btn" gcode="52099">
                    <a href="javascript:;" event-name="PC端_加入购物车_ThinkPad X1 平板电脑轻薄小红点键盘盖（黑） 选件" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/CmPJilW4atiARKnaAACSJOOXg14930.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/50522.html" target="_blank" >联想游戏鼠标M600 烈焰红</a>
                    </p>
                    <p>商城价：199元</p>
                    <div class="bc_btn" gcode="50522">
                    <a href="javascript:;" event-name="PC端_加入购物车_联想游戏鼠标M600 烈焰红" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/L3d8ElIUyhoS6Tx95PzHdjS1p-1229.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53132.html" target="_blank" >新秀丽轻薄款单肩包 T600 米白</a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53132">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 米白" >加入购物车</a>
                    </div>
                </li>
                <li>
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >
                    <img style="height:200px;width:200px;" src="/style/home/img/oPvBLCpdjZqQS6nBRZ280T2A5-2388.jpg">
                    </a>
                    <p class="bc_name">
                    <a href="http://www.lenovo.com.cn/product/53130.html" target="_blank" >新秀丽轻薄款单肩包 T600 黑
                    </a>
                    </p>
                    <p>商城价：399元</p>
                    <div class="bc_btn" gcode="53130">
                    <a href="javascript:;" event-name="PC端_加入购物车_新秀丽轻薄款单肩包 T600 黑" latag="latag_pc_cart_buy_rec_8_52770|48635_53130_DZ03010002_a81d06dc-34f6-4226-a32a-01378e2dc136_addcart">加入购物车</a>
                    </div>
                </li></ul>
    </div>
</div>
</div>
 <div class="footer">
   <img src="/style/home/img/99999.png" alt="">

   <img src="/style/home/img/9999.png" alt="">
 </div>
</body>
</html>