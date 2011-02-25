var Sys = {
		onMsg:function(msg) {
	       alert(msg);
        },
        showRes:function(o){
        	var obj = o.options[o.selectedIndex].value;
        	if (obj === 'all')
        	 $('.roletree').hide();
        	else
        	 $('.roletree').show();
            		
        },
        getTree:function(){
        	 var id= $('.rid').val(); 
        	
        	 $.ajax({
				  type : "post",
				  url : "/ajax?sk=editsysrole",
				  data : "&id="+id,
				  beforeSend : function(XMLHttpRequest) {
					//
			  	  },
				  success : function(data, textStatus) {
			  		 
			  		 var d= eval('('+data+')');	
					 $(".roletree div.checkbox").each(function(a,b){			  
						 if (d[a].permission==='allow')  
			        	     $(this).attr("class",'checkbox checked');
						   else 
							 $(this).attr("class",'checkbox');
				        	     
					 });  
				  },
				  complete : function(XMLHttpRequest, textStatus) {
					 // $('#hh').html();
				  },
				  error: function(XMLHttpRequest, textStatus){
					  
				  }
			 });
        },
        objClick:function (){
        	 var v01='';  
        	 var v02='';
        	 var id= $('.rid').val(); 
        	 var sel =  $("#all").find("option:selected").val();
        	 
        	 var users='';
        	 $(".userlist input").each(function(a,b){
        		 if ($(this).attr("checked")=== true) {
        			 users = users + $(this).val()+';';    
        		 }
        	 });
        	 
        	 $(".roletree div.checkbox").each(function(a,b){
        		
        	   obj= $(this).parent().find('input');
        	   obj=obj.val();
                         
        	   if ($(this).attr("class") === 'checkbox checked' || $(this).attr("class") === 'checkbox half_checked' )
               {
            	   v01=	obj+';allow|';
            	   
        	   }
        	   else
        	   {
        		   v01=	obj+';deny|';  
        	   }   
        	   v02=v02 + v01;
             });
        	  
        	  if (sel==='all')
        	  {
        		 v02= 'all;allow;'; 
        	  }
        	  
        	  if (v02!='')
        	  {
        	    $.ajax({
					  type : "post",
					  url : "/ajax?sk=addsysrole",
					  data : "&res="+v02.substr(0,v02.length-1)+'&id='+id+'&user='+users,
					  beforeSend : function(XMLHttpRequest) {
        	    	     $('#status').html('正在保存...').addClass('warning');
				  	  },
					  success : function(data, textStatus) {
				  		 $('#status').html('成功保存');
					  },
					  complete : function(XMLHttpRequest, textStatus) {
						 $('#status').removeClass('warning').addClass('success');
					  },
					  error: function(XMLHttpRequest, textStatus){
						 $('#status').html('保存有误！').removeClass('warning').removeClass('success').addClass('error');; 
					  }
				 });
        	  }
        }
}