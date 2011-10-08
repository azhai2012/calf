var Hiss = {
		onMsg:function(msg) {
			alert(msg);
		},
		findprod:function(p){
			var yp=  $('#yp').val();
			var cd=  $('#cd').val();
                        if (!p) p=0;
                        $.ajax({
					type : "get",
					url : "/ajax?sk=hissplist&fl="+yp+','+cd+'&page='+p,
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
		
};


 