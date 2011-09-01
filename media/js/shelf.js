$(function () {
      
	 $('li[class=product]').hover(function(){
		   $(this).addClass("product_hover");
	     },function(){
		   $(this).removeClass("product_hover");
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
	}
}