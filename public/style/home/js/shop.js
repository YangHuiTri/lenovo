$(function(){
var adsI=0;
	var adsLi=$("#lunbo-img li").size()
	var adsPage=adsLi/4;
    $(".rgt-btn").click(function(){
    	adsI++;

    	if (adsI>=adsPage) {
        
    		adsI=adsPage-1
    	};
    	$("#lunbo-img").stop(true).animate({'margin-left':-(1200*adsI)+'px'},500);
    });
    $(".lft-btn").click(function(){
    	adsI--;
    	if (adsI<0) {
    		adsI=adsPage-1;
    	};
    	$("#lunbo-img").stop(true).animate({'margin-left':-(1200*adsI)+'px'},500);

    	});
        var t = $(".J_input");
    $(".J_add").click(function(){       
        t.val(parseInt(t.val())+1)
   setTotal(); 
        
    });
    $(".J_minus").click(function(){
        t.val(parseInt(t.val())-1)
        if(parseInt(t.val())<=0){
            t.val(1)
        }
   setTotal(); 
    
    });
     function setTotal(){
    $("#totalmoneyf").html((parseInt(t.val())*7499).toFixed(2));
  };
   
    var checkbox = $('input[name=checkbox]');
    $('.selectAll').on("click",function(){
      checkbox.prop('checked', this.checked);
    });
    checkbox.on("click",function(){
      var _tmp = checkbox;
      $(".selectAll").prop('checked',_tmp.length == _tmp.filter(":checked").length);
    });

  })
