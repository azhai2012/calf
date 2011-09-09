/* 
    Document   : product
    Created on : 2011-9-9, 5:19:40
    Author     : root
    Description:
        Purpose of the JavaScript follows.
*/

var Product={
    postsone:function(){
        Azhai.callMethod2("/callmethodajax","[\'postsone\']");
    },
    poststwo:function(){
        Azhai.callMethod2("/callmethodajax","[\'poststwo\']");
    }
}

$(function () {
         
         Product.postsone();
         $('.post1').click(function(){
                   $(this).addClass('cur');
                   $('.post2').removeClass('cur');
                   
                   $('#postsone').show();
                   $('#poststwo').hide();
                   Product.postsone();
                   
	  });
        
         $('.post2').click(function(){
                   $(this).addClass('cur');
                   $('.post1').removeClass('cur');
                   $('#poststwo').show();
                   $('#postsone').hide();
                   Product.poststwo();
         });
          
})



