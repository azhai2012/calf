var Sups = {
		onMsg:function(msg) {
			alert(msg);
		},
		CheckSelect:function(a){		
			var rs=false;
			$('#selectlist tr').each(function(i,s){
				 var ch = $(this).children("td").children("input").attr("checked");
				  if (ch === true)
				  {
					 rs = true;
					return false;
				  }
					  
			});
			return rs; 
		},
		onSelect:function(a) {
		   var result='';
		   var checked = Sups.CheckSelect();
		   if (checked===true){
			   if (confirm('您确定要增加该条记录？'))
				{   
		          $('#selectlist tr').each(function(i,s){
        	      if ($(this).children("td").children("input").attr("checked")=== true) 
				   { 
        		     result+='<tr>';
               	     $(this).children("td").each(function(k,l){
				      if (k>0){
				       result+= '<td>'+$(this).html()+'</td>'; 
				      }
				     });
				    }
			       });
		          
		          result+="</tr>";
		          $('#meetlist').append(result);
		          closedialog();
				}
		   }
		   else
			  alert('没有选择商品！');  
		    
		},
		getAjax : function(a){
			var v = $('.'+a);
			$.ajax({
				type : "get",
				url : __ajax,
				beforeSend : function(XMLHttpRequest) {
					
				},
				success : function(data, textStatus) {
					alert(data); 
					// v.html(data);
				},
				complete : function(XMLHttpRequest, textStatus) {
					
				},
				error : function() {
					// 请求出错处理
				}
			});
		}
	}