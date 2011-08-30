$(function () {
      
	 $('li[class=product]').hover(function(){
		   $(this).addClass("product_hover");
	     },function(){
		   $(this).removeClass("product_hover");
	  })
})

var Compare = {
	getcompare:function(a){
		Azhai.callMethod2("/callmethodajax?id="+a,"[\'compare\']");
	},
}