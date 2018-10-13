var Fnav = (function(){
    var _fnav = {};

    //左侧楼层导航
    _fnav.floornav = function(){
    	var floorNav = $("#J-floor-nav-box");
        var floorNavA = floorNav.find("a");

        floorNavA.bind("click",function(){ 
            floorNavA.removeClass('active');
            $(this).addClass('active');        
            var scrolltodom = $(this).attr("data-scroll");
            $('html,body').animate({
                scrollTop:$(scrolltodom).offset().top},500
            );
            return false;
        });
    }

    return _fnav;
})(jQuery, Fnav)

//逻辑，如果blankWidth小于50则隐藏，如果大于50再判断高度，满足显示不满足隐藏
function showOrHide(){
    var scroll_top = $(document).scrollTop();
    var win_height = $(window).height();
    var first_top = $('.nav_floor_item:eq(0)').offset().top;
    var blankWidth=($(window).width()-1200)/2;

    if(blankWidth<50){
        $('#J-floor-nav-box').hide();
        $('#J-floor-nav-box').find('li>a').removeClass('active');
    }else{
        if(scroll_top + 200 > first_top){
            $("#J-floor-nav-box").show();
            //$('#J-floor-nav-box').find('li>a:eq(0)').addClass('active');
        }else{
            $("#J-floor-nav-box").hide();
            $('#J-floor-nav-box').find('li>a').removeClass('active');
        }
    }  
}

$(function(){
    //左侧楼层导航
    Fnav.floornav();
    win_scroll();
    setTimeout(function(){
        win_scroll();//先执行一下,之所以有350延迟，是因为首页头广告有一个300动画，相当于完成动画后再执行这个函数，会更精确
    },1000);
    

    $(document).scroll(function(){
        win_scroll();
    });

    $(window).resize(function(){ 
        win_scroll();
    })

    function heighlight_when_scroll(index){
        $('#J-floor-nav-box').find('li>a').removeClass('active');
        $('#J-floor-nav-box').find('li>a:eq('+index+')').addClass('active');
    }

    var timer = null;
    function win_scroll(){
        if(timer){
            clearTimeout(timer);
            timer = null;
        }
        timer = setTimeout(function(){
            showOrHide();
            var scroll_top = $(document).scrollTop();
            var doc_height = $(document).height();
            var sc_height = $(window).height();
            $('.nav_floor_item').each(function(index){
                var top = $(this).offset().top;
                //console.log(top+'----'+scroll_top+'-----'+$(this).find('h3').text()+'-----'+index)
                if(top <= scroll_top){
                    heighlight_when_scroll(index);
                }
                if(doc_height == scroll_top-0+sc_height){
                    var last = $('#J-floor-nav-box li>a').length - 1;
                    heighlight_when_scroll(last);
                }
            });
        },30);
    }
})