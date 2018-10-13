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
// 左侧菜单
$(".lb h3").click(function(){
	$(this).siblings("ul").slideToggle(500)
	.parent().siblings().find("ul").slideUp(500);
});
$(".lb h3").click(function(){
	$(this).find("i").css("background","url('../public/img/666.png') no-repeat -2px -2px")
},function(){
	$(this).find("i").css("background","url('../public/img/666.png') no-repeat -16px -3px")

});
})