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
		getMeetIdList:function(obj){
			location.href="/home?sk=supm&fl="+obj.value;
			
		},
		AddSupProcs:function(){
			 if (confirm('您确定要增加这些记录？'))
			 {   
				 var meetid = $('#selectmeet').val();
				 
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
				 });
			 }
		},
		addProcPic:function(a){
			Sups.showdialogs("/ajax?sk=supmupload&fl="+a,"600");
		},
		addProcFav:function(a){
			Sups.showdialogs("/ajax?sk=supfav&fl="+a,"600");
		},
		addArea:function(a){
		  area2 = new nicEditor({buttonList : ['fontSize','bold','italic','underline','left','center','right','justify','ol','ul','strikeThrough','subscript','superscript','xhtml','image','link','unlink','forecolor','bgcolor','fontSize','fontFamily']}).panelInstance('myeditor');
		},
		addProcFavContent:function(a){
			
			if (confirm('您确定要增加记录？'))
			 {   
				 var meetid = $('#selectmeetid').val();
				 var content= $('.nicEdit-main').html();
				 var location = $('#selectlocation').val(); 
  				 $.ajax({
						  type : "POST",
						  url : "/ajax?sk=supaddfav&fl="+meetid,
						  data:"&content="+content+'&location='+location,
						  beforeSend : function(XMLHttpRequest) {
							//
					  	  },
						  success : function(data, textStatus) {
			                 // alert(data); 
							 Sups.closedialog();
	
						  },
						  complete : function(XMLHttpRequest, textStatus) {
					 		//
						  },
						  error : function() {
							// 请求出错处理
						 }
					 });
				
			 }	
			
			
		},
		setSupProdinfo:function(){
			 var obj     = $('#supid').val();
			 var cxnr    = $('#supstextarea').val();
			 var picname = $('#picname').val();
			 var picsize = $('#picsize').val();
			 
			 var num     = $('#limit_num').val();
			 var price   = $('#price').val();
			 
			 if (isNaN(num)) {alert('限购数量输入格式不正确！请重新输入');return false;}
			 if (isNaN(price)) {alert('单价输入格式不正确！请重新输入');return false;}
			 
			 if (picname==='') {alert('还没有选择图片，请先上传图片。');} 
			 if (confirm('您确定要保存该条记录？'))	{
				 $.ajax({
					type : "POST",
					url : "/ajax?sk=supsetprodinfo",
					data: "&id="+obj+"&cxnr="+cxnr+"&picname="+picname+"&picsize="+picsize+"&num="+num+"&price="+price,
					beforeSend : function(XMLHttpRequest) {
						
					},
					success : function(data, textStatus) {
						alert("成功保存！");
						location.reload();
					},
					complete : function(XMLHttpRequest, textStatus) {
						
					},
					error : function() {
						// 请求出错处理
					}
				 });
			   } 
			
		},
		clearList:function(){
			 $('#meetlist tbody tr').each(function(k,v){
				 $(this).remove();
			 });
		},
		orderList:function(obj){
		
			location.href="/home?sk=suporder&fl="+obj.value; 
		},
		findprod:function(){
			var meetid=  $('#selectmeet').val();
			var prodid=  $('#findspmc').val();
			var cdid=  $('#findcdmc').val();
			
			$.ajax({
					type : "get",
					url : "/ajax?sk=supselectprocother&fl="+meetid+','+prodid+','+cdid,
					beforeSend : function(XMLHttpRequest) {
						$('#selectlist tbody').html('<tr>正在查询...</tr>');
					},
					success : function(data, textStatus) {
					
						$('#selectlist tbody').html(data);
					},
					complete : function(XMLHttpRequest, textStatus) {
						
					},
					error : function() {
						// 请求出错处理
					}
				});
		},
		addprod:function(a){
			var meetid=  $('#selectmeet').val();
			var prodid=  $('#product').val();		

			Sups.showdialogs("/ajax?sk=supselectproc&fl="+meetid+','+prodid+'&'+new Date().getTime(),"600");
		},
		addprodkey:function(a){
			
			Sups.keyshowdialogs("/ajax?sk=supselectproc"+'&'+new Date().getTime());
		},
		deleteMeetProdName:function(obj){
			if (confirm('您确定要删除该条记录？'))	{
			
			 $.ajax({
				type : "get",
				url : "/ajax?sk=supdelprod&fl="+obj,
				beforeSend : function(XMLHttpRequest) {
					
				},
				success : function(data, textStatus) {
					$('#row'+obj).remove();
					$('.list tbody tr').each(function(k,v){
						if ((k%2)===0) {$(this).children("td").addClass("odd");}
						else {$(this).children("td").addClass("even");}
							
						$(this).children("td:first").html(k+1);
					});
				},
				complete : function(XMLHttpRequest, textStatus) {
					
				},
				error : function() {
					// 请求出错处理
				}
			});
		  }
		},
		keyshowdialogs:function(ajaxpath,divwidth){
            var e = event ? event : (window.event ? window.event : null);        
             if(e.keyCode == 13){  
                Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":ajaxpath,
                                "content":{"div":"hello","top":"47px","width":divwidth}});
                e.returnValue = false;  
             }  
             /*
				 * var d = document,o =
				 * d.getElementById("list"),index=0,count=o.rows.length;
				 * d.onkeydown = function(e){ e = e||event;
				 * if(e.keyCode==38||e.keyCode==40){ o.rows[index].className =
				 * ""; index = e.keyCode==38?index-1<0?count-1:index-1:index+1==count?0:index+1;
				 * o.rows[index].className = "high"; }
				 *  }
				 */
          
        },
        showdialogs:function (ajaxpath,divwidth){
           Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":ajaxpath,
            "content":{"div":"hello","top":"47","width":divwidth}});    
        },
		delSelectProc:function(a){
			if (confirm('您确定要删除该条记录？'))	
			{ $("#"+a).remove();}	
		},
        closedialog:function (){
            $("#fullbg").hide();
            $(".dragDiv").hide();
        },
        Allchecked:function(){
        	var dd= $('#selectlist th input').attr("checked");
              $('#selectlist tr').each(function(i,s){
        	        $(this).children("td").children("input").attr("checked",dd);
       	         });
        	
        },
        CheckTableExists:function(checkstr){
        	 var rs=false;
        	 $('#meetlist tr').each(function(i,s){        		 
        			 if ($(this).attr('id')===checkstr)
        			 {
        				 rs=true;
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
        	    	      if (Sups.CheckTableExists($(this).attr('id'))===false){	  
        	    	         result+='<tr id="'+$(this).attr('id')+'">';
               	             $(this).children("td").each(function(k,l){
				              if (k>0){
				                 result+= '<td>'+$(this).html()+'</td>'; 
				               }
				             });
               	             result+="</tr>";
       		               }
				       }
        	    	  
			       });
		          $('#meetlist').append(result);
		          Sups.closedialog();
				}
		   }
		   else
		   { alert('没有选择商品！');}  
		    
		},
		getAjax : function(_ajax){
			var v = $('.'+a);
			$.ajax({
				type : "get",
				url : _ajax,
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
		},
		ajaxFileUpload:function(){
			
			$("#loading")
			.ajaxStart(function(){
				$(this).show();
			})
			.ajaxComplete(function(){
				$(this).hide();
			});
			$('#uploadinfo').html('');
	        var pid=$('#pid').val(); 
	
			$.ajaxFileUpload({
					url:'/ajax?sk=supuploadpic&fl='+pid,
					secureuri:false,
					fileElementId:'fileToUpload',
					dataType: 'json',
					beforeSend : function(XMLHttpRequest) {
						$('#uploadinfo').html('<span style="margin-left:15px;color:blue">图片上传中....</span>');	
					},
					success: function (data, status)
					{
						
						if(typeof(data.error) !== 'undefined')
						{
							if(data.error !== '')
							{
								alert(data.error);
							}else
							{
								$('#picname').val(data.msg.FileName);
								$('#picsize').val(data.msg.FileSize);
								//alert('图片成功上传');
								$('#uploadinfo').html('<span style="margin-left:15px;color:blue">图片已成功上传</span>');
							}
						}
					},
					error: function (data, status, e)
					{
						alert(e);
					}
				});
			
			return false;

		}
		
};


 