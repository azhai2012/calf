$(function(){ 

    $('#devdoc-nav').attr('style',$('body').scrollHeight());
 });

var Admins = {
		onMsg:function(msg) {
			alert(msg);
		},
		getHeight:function(){
			$('#devdoc-nav').height=$('body').height();
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





 