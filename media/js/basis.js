var Basis = {
	getproc : function(p) {
	   var findmc= $("#findmc").val();
	   var page=0;var flag=0;
	   if (p>0) {page=p;flag=1;}
	   if (p<0) flag=1; 
	   $.ajax( {
			type : "post",
			url : "/ajax?sk=basisprocs&page="+page,
			data : "&content="+findmc+'&flag='+flag,
			beforeSend : function(XMLHttpRequest) {
		       $('.list tbody').html('loading...');
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