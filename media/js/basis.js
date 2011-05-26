var Basis = {
	sort: function(a){
	   var findmc= $("#findmc").val();
	   var st= $("#sort").val(); 
	   var stname = $("#sortname").val();
	   
	   $.ajax( {
			type : "post",
			url : "/ajax?sk=basisprocs&page=1&fl="+stname,
			data : "&content="+findmc+'&flag=1&sort='+st,
			beforeSend : function(XMLHttpRequest) {
		      // $('.list tbody').html('loading...');
		     
			},
			success : function(data, textStatus) {
				
			   $('.list tbody').html(data); 
			   $('.list th span').each(function(){
				   if (this.id != a.id)
			    	  $(this).removeClass('desc').removeClass('asc');
			   });	
			    
			    $("#sortname").val(a.id);
			    
			   if (st==='1')
			   {
			     $("#sort").val('0');
			     $('#'+a.id+' span').removeClass('desc').addClass('asc');
			   }
			   else
			   {
				 $("#sort").val('1');
				 $('#'+a.id+' span').removeClass('asc').addClass('desc');
			   }      
			},
			complete : function(XMLHttpRequest, textStatus) {
				// $('#hh').html();
		},
		error : function(XMLHttpRequest, textStatus) {
			$('.list tbody').html('no');
		}
	  });
    },
	getproc : function(p) {
	   var findmc= $("#findmc").val();
	   var st= $("#sort").val(); 
	   var stname = $("#sortname").val();
	   if (st==='1') st='0'; else st='1';
	   var page=0;var flag=0;
	   if (p>0) {page=p;flag=1;}
	   if (p<0) flag=1; 
	   $.ajax( {
			type : "post",
			url : "/ajax?sk=basisprocs&page="+page+"&fl="+stname,
			data : "&content="+findmc+'&flag='+flag+'&sort='+st,
			beforeSend : function(XMLHttpRequest) {
		       //$('.list tbody').html('loading...');
			},
			success : function(data, textStatus) {
			   
			   $('.list tbody').html(data); 
			   
			   
			},
			complete : function(XMLHttpRequest, textStatus) {
				// $('#hh').html();
		},
		error : function(XMLHttpRequest, textStatus) {
			$('.list tbody').html('no');
		}
		});
	},
	
}