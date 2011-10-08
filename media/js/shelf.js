$(function () {
      
	 $('li[class=product]').hover(function(){
		   $(this).addClass("product_hover");
	     },function(){
		   $(this).removeClass("product_hover");
	  });
	
    
     $('.taxis a').click(function(){
	        Compare.Filter($(this).attr('alt'));
			var sort = $(this).attr('class');
			if (sort==='def')
			    $(this).removeClass('def');

			if (sort==='up')   
			  $(this).removeClass('up').addClass("down");
			else
		      $(this).removeClass('down').addClass("up");
	  });
	
	 $(window).scroll(function(){
	      var scrolltop = $(this).scrollTop();
      	  var h = $(this).height()+scrolltop;
          var body = $('body').height();
          var p= $('input[name=isPage]').val();
          var tp= $('input[name=maxPage]').val();
		  if (scrolltop>300) 
             $('#top').show();	
          else $('#top').hide();
          if ((body-h)<200){
             if (tp-p>0) Compare.Append(p);
          }
	 })
	
		
})

var Compare = {
	getcompare:function(id){		
		Azhai.callMethod2("/callmethodajax?id="+id,"[\'compare\']");
	},
	clear:function(){
		Azhai.callMethod2("/callmethodajax?fl=close","[\'compare\']");
	},
	openCompare:function(){
		window.location="/shelf/compare";
	},
	Filter:function(obj){
		$('.taxis a').each(function(){
		   var sort = $(this).attr('alt');
           if (sort != obj)
 	       $(this).removeClass('up').removeClass('fav').removeClass('down').addClass('def');
		
		})
	},
	Gotop:function(){
	    $('html,body').animate({scrollTop:'0'},800);
	    $('#top').hide();	
	}, 
	Append:function(p){
	   	$.ajax({
            type:
            "post",
            url: '/callmethodajax?id='+p,
            data: '&sk=append',
            beforeSend: function(XMLHttpRequest) {
               $('#page').html('Loading...');
            },
            success: function(data, textStatus) {
                $('ul.product-list').append(data); 
                p++;
                $('input[name=isPage]').val(p);
            },
            complete: function(XMLHttpRequest, textStatus) {
                $("#page").html('<a href="javascript:Compare.Append('+(p+1)+');" >继续浏览</a>');
				$('li[class=product]').hover(function(){
					   $(this).addClass("product_hover");
				     },function(){
					   $(this).removeClass("product_hover");
				});
            },
            error: function() {
                // error
            }
        });	
	}, 
	
}