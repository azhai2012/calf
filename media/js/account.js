var Account= {
  	 
	AllSelect:function(){
		
      var isActive= ($('#allselect').attr('checked')) ? "1" : "";

	  $('input[id=allselect]').each(function(){
		  $(this).attr('checked',isActive);  
	  });
	  
	  $('input[id=CheckAll]').each(function (){
			 $(this).attr('checked',isActive);
	  });
	
	},
	SelectSort:function(a){
		window.location.href="/account/wishlist/"+a.options[a.selectedIndex].value;
	}


}



