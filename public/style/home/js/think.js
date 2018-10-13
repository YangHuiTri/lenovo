$(function(){
	day=3.11;
	// 多少秒
	times=day*24*60*60;
	function daojishi(){
		days=Math.floor(times/60/60/24);
		if (days<10) {
			days='0'+days;
		};
		hours=Math.floor((times-days*24*60*60)/60/60);
		if (hours<10) {
			hours="0"+hours;
		};
		min=Math.floor((times-days*24*60*60-hours*60*60)/60);
		if(min<10){
			min="0"+min;
		}
		second=Math.floor(times-days*24*60*60-hours*60*60-min*60);
		if (second<10) {
			second='0'+second;
		};
		str=days+"天 "+hours+'时 '+min+'分 '+second+'秒';
		time=document.getElementById('time');
		time.innerHTML=str;
		times--;
	}

	setInterval(daojishi,1000);
	// 数量加减
	var t = $(".J_input");
	$(".J_add").click(function(){		
		t.val(parseInt(t.val())+1)
		
	});
	$(".J_minus").click(function(){
		t.val(parseInt(t.val())-1)
		if(parseInt(t.val())<0){
			t.val(0)
		}
	
	});
	// 选项卡
	$(".tab-hd #tab li").click(function(){
	 $(this).addClass("current").siblings().removeClass("current"); 
	 var index=$(this).index(); 
	 $("#content >ul").eq(index).show().siblings().hide();
	});
	// 系类
	$(".xilei-main>span").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	});


	$("#tab>li:nth-child(1)").click(function(){
		$(".ns_attributes-list").show()
	})

	// 回到顶部
		  var ding1=null;
     $(window).scroll(function(){
        scrollHeight=$(this).scrollTop();
        if (scrollHeight<=0) {
            clearInterval(ding1);
        };
     });
     $(".shop_totop").click(function(){
        ding1=setInterval(function(){
            scrollHeight=scrollHeight-200;
            $(window).scrollTop(scrollHeight);  
        },100);
      });  
})