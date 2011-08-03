var Admins = {
		onMsg:function(msg) {
			alert(msg);
		},
		Userlists:function(p){
			var uname=  $('#finduname').val();
		    if (!p) p=0;
                 $.ajax({
					type : "get",
					url : "/ajax?sk=adulist&fl="+uname+'&page='+p,
					beforeSend : function(XMLHttpRequest) {
						$('.list tbody').html('<tr><td colspan=8>正在查询...</td></tr>');
					},
					success : function(data, textStatus) {
		       
						$('.list tbody').html(data);
					},
					complete : function(XMLHttpRequest, textStatus) {
						
					},
					error : function() {
						// 请求出错处理
					}
				});

		},
		EditCms:function(){
			var titlename=  $('#title').val();
			
			$.ajax({
				type : "get",
				url : "/ajax?sk=adcedit&fl="+titlename,
				beforeSend : function(XMLHttpRequest) {
				},
				success : function(data, textStatus) {
	                 alert(data);   
				},
				complete : function(XMLHttpRequest, textStatus) {
					
				},
				error : function() {
					// 请求出错处理
				}
			});
			
		},
		
};



 