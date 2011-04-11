var Cms = {
		onMsg:function(msg) {
			alert(msg);
		},
		
		AddNews:function(){
			 if (confirm('您确定要增加这些记录？'))
			 {   
				 alert($('.nicEdit-main').html());
				 //alert($('newscontent').val());
				 //var meetid = $('#selectmeet').val();
				 /*
				 $('#meetlist tr').each(function(k,v){
					var a = $(this).children("td:first").html();
					 if (a !== null){
					
					   $.ajax({
						  type : "get",
						  url : "/ajax?sk=supaddprod&fl=;"+meetid+";"+a,
						  beforeSend : function(XMLHttpRequest) {
							//
					  	  },
						  success : function(data, textStatus) {
							  location.href='/home?sk=supm&fl='+meetid;
							// v.html(data);
						  },
						  complete : function(XMLHttpRequest, textStatus) {
							 // $('#hh').html();
						  },
					 });
				   }
				 });*/
			 }
		},		
		addArea:function(a){
		  area2 = new nicEditor({buttonList : ['fontSize','bold','italic','underline','left','center','right','justify','ol','ul','strikeThrough','subscript','superscript','xhtml','upload','link','unlink','forecolor','bgcolor','fontSize','fontFamily']}).panelInstance('newscontent');
		},
		
};


 