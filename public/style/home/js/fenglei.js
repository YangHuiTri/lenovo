$(function(){
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
// 全部商品
$(".menus-dao>ul>li>h4").mouseover(function(){
	if($(".left").css("display")=="none"){
		$(".left").show()
	}
});
$(".left").mouseleave(function(){
	$(this).hide()
});
// 多选
   //  var $category= $("ul li:gt(5):not(:last)");
   //  $category.hide();
   //   $(".le_sel_con3 > a").toggle(function(){
   //  $category.show();
   //  $(this).find('span').text("▲ 精简显示品牌");
   // },function(){
   //  $category.hide();
   //  $(this).find('span').text("▼ 显示全部品牌"); 
   // })
   
 })
