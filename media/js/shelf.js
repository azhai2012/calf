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
	} 
	
}