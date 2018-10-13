$(function(){
	$("#close").click(function(){
		$('.header').hide();
	});
	// 社交平台
$('.nav>.top>.nav-1>.she').hover(function(){
	$(this).find('.menu').stop(true).slideDown(500);
},function(){
	$(this).find('.menu').stop(true).slideUp(500)
});
    // 手机
$('.nav>.top>.nav-1>.ji').hover(function(){
	$(this).find('.shou').stop(true).slideDown(500)
},function(){
	$(this).find('.shou').stop(true).slideUp(500)
});
    // 爆款
$('.bk').hover(function(){
	$(this).find('.bk-bao').stop(true).slideDown(500)
},function(){
	$(this).find('.bk-bao').stop(true).slideUp(500)
});
   // 服务
$('.fw').hover(function(){
	$(this).find('.fuwu').stop(true).slideDown(500)
},function(){
	$(this).find('.fuwu').stop(true).slideUp(500)
});
    //左侧菜单显示内容
$('.left-menu').hover(function(){
	$(this).find('.left-xiang').show()
},function(){
	$(this).find(".left-xiang").hide()
});
   //轮播图
	var lunI=0;
	var lunSize=$(".imgs>li").size();
	var ding="";
    function move(){
    	lunI++;
    	if (lunI==lunSize) {
    		lunI=0;
    	};
    	$(".imgs>li").eq(lunI).addClass('active').siblings().removeClass('active');
    	$(".nums>li").eq(lunI).addClass('active').siblings().removeClass('active');
    };
    function moveLeft(){
    	lunI--;
    	if (lunI<0) {
    		lunI=lunSize-1;
    	};
    	$(".imgs>li").eq(lunI).addClass('active').siblings().removeClass('active');
    	$(".nums>li").eq(lunI).addClass('active').siblings().removeClass('active');
    }
	  ding=setInterval(move,1000);
	// 经过小点

	$(".nums>li").hover(function(){
        clearInterval(ding);
        lunI=$(this).index();
		
        $(".imgs>li").eq(lunI).addClass('active').siblings().removeClass('active');
		$(".nums>li").eq(lunI).addClass('active').siblings().removeClass('active');
	},function(){
	    ding=setInterval(move,1000);
	});
	$(".center .btn-left").click(function(){
		moveLeft();
	});
	$(".center .btn-right").click(function(){
		move();
	});
	// 鼠标经过按钮
	$(".center .btn").hover(function(){
		clearInterval(ding);
	},function(){	
		ding=setInterval(move,1000);
	});

	var adsI=0;
	var adsLi=$(".boo .bo-1 li").size()

	var adsPage=adsLi/4;
    // alert(adsPage)
	// 二播
    $(".boo>.btn-right").click(function(){
    	adsI++;

    	if (adsI>=adsPage) {
        
    		adsI=adsPage-1
    	};
    	$(".bo-1").stop(true).animate({'margin-left':-(1008*adsI)+'px'},500);
    });
    $(".boo>.btn-left").click(function(){
    	adsI--;
    	if (adsI<0) {
    		adsI=adsPage-1;
    	};
    	$(".bo-1").stop(true).animate({'margin-left':-(1008*adsI)+'px'},500);

    	});
     $("h3").each(function(){
     	asd=$(this).children('span').html();
     	$(".jianting>ul").append("<li>"+asd+"</li>");
     });
     // 默认第一楼选中
     $(".jianting>ul>li").eq(0).addClass('active');

    // 循环广告
    var xun=null;
    function xuan(){
        // clearInterval(ding);
        $('.xnss>li').css('top','-1px');
        $('.xnss>li').animate({'top':'-63px'},1000);
        $('.xnss>li').eq(0).appendTo('.xnss');
    }
    xun=setInterval(xuan,800);
    // 默认第一楼选中
    $(".jianting ul li").eq(0).addClass('active');

    var oneHeight=$("h3").eq(0).offset().top; 

    $(window).scroll(function(){
        heights=$(this).scrollTop();
        if (heights>= oneHeight-500) {
            $(".jianting").show();
        }else{
            $(".jianting").hide();

        }

        guHeight=$(".jianting").offset().top;
        // 判断
        $("h3").each(function(){
            h=$(this).offset().top;
            if (guHeight>h) {
                idx=$(this).index("h3");
                $(".jianting>ul>li").eq(idx).addClass('active').siblings().removeClass('active');
            };
        });

    });
    $(".jianting>ul>li").click(function(){
        x=$(this).index();
        xh=$("h3").eq(x).offset().top;
        $(window).scrollTop(xh-100);
    });
     //
     var ding1=null;
     $(window).scroll(function(){
        scrollHeight=$(this).scrollTop();
        if (scrollHeight<=0) {
            clearInterval(ding1);
        };
     });
     $(".huidao").click(function(){
        ding1=setInterval(function(){
            scrollHeight=scrollHeight-200;
            $(window).scrollTop(scrollHeight);  
        },100);
      });  
     // 侧边栏
     // $('.ccbl').hover(function(){
     //    $(this).find('.xianshi').stop(true).show(500)
     // },function(){
     //    $(this).find('.xianshi').stop(true).hide(500)
     // });
     var cheI=0;
    $(".ccbl").hover(function(){
        if (cheI%2==0) {
            $(".xianshi").show();
            $('ccb1').css('background','#46A0EC')
        }else{
            $(".xianshi").hide();
        }
                cheI++;
    
    });
    // 登陆页面
    $(".nav-right>ul>li>.dl").click(function(){
        $("#WB").show();
    })
    $(".closess").click(function(){
        $("#WB").hide()
    })
    $(".zc").click(function(){
        $('.zhuce').show()
    }); 
    $(".closes").click(function(){
        $('zhuce').hide()
    });
    $('.dengtitle h2').click(function(){
        $(this).addClass("now").siblings().removeClass("now")
    });


         $(".WB .dengtitle h2.btn1").click(function(){
            $(this).parent().next().find('.account').show().siblings('.m_account').hide();
            $(this).parent().next().next().find('.pwd').show().siblings('.mcode').hide();
            $(this).parent().next().next().find('.getMobileCode').hide();
            $(this).parent().next().next().find('.pwd_placeholder').show().siblings('.m_account_placeholder').hide();

        });

        $(".WB .dengtitle h2.btn2").click(function(){
            $(this).parent().next().find('.m_account').show().siblings('.account').hide();
            $(this).parent().next().next().find('.mcode').show().siblings('.pwd').hide();
            $(this).parent().next().next().find('.getMobileCode').show();
            $(this).parent().next().next().find('.m_account_placeholder').show().siblings('.pwd_placeholder').hide();

        });
    });
 