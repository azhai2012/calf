var Products={
	addArea:function(a){ $('#description').wysiwyg({autoGrow:true, controls:"bold,italic,|,undo,redo"});},
	getGrid:function(){
	  		$('#flexgrid').flexigrid({
					url: '/post/product/list',
					dataType: 'json',
					colModel : [
						{display: '编号', name : 'id', width : 40, sortable : true, align: 'center'},
						{display: '名称', name : 'display_name', width : 180, sortable : true, align: 'left'},
						{display: '单位', name : 'unit', width : 80, sortable : true, align: 'left'},
						{display: '创建日期', name : 'create_date', width : 130, sortable : true, align: 'left', hide: false},
						{display: '生效日期', name : 'active_date', width : 80, sortable : true, align: 'right'},
			  		        {display: '状态', name : 'is_active', width : 80, sortable : true, align: 'right'}
						],
					searchitems : [
						{display: '编号', name : 'id'},
						{display: '名称', name : 'display_name', isdefault: true},
						{display: '状态', name : 'is_active'},					
						],
					sortname: "id",
					sortorder: "asc",
					usepager: true,
					title:'商品列表',
					useRp: true,
					rp: 15,
					showTableToggleBtn: true,
					hideOnSubmit:false,
					//hideBody:true,
					pagestat: '共 {total} 个记录',
					outof:'/',
					nomsg:'没有查找到相关内容', 
					width: 'auto',
					height: 375,  
				  	buttons:[
				     // {name:'添加',bimage:'/media/images/new.gif',onpress:function(){Products.RowAdd()}},
				     // {name:'修改',bimage:'/media/images/modify.gif',onpress:function(){Products.Modify()}},
					 {name:'编辑选择',bimage:'/media/images/modify.gif',onpress:function(){Products.Modify()}},
					 {name:'删除',bimage:'/media/images/delete.gif',onpress:function(){Products.RowDelete()}},
					 {name:'导出',bimage:'/media/images/export.gif',onpress:function(){},
				            down:"<ul><li><a href='javascript:Products.Exports(1,1);'>导出为 EXCEL 文件</a></li><li><a href='javascript:Products.Exports(1,2);'>导出为 CSV 文件</a></li><li><a href='javascript:Products.Exports(1,3);'>导出为 PDF 文件</a></li></ul>"
					  },
				      {name:'导入',bimage:'/media/images/import.gif',onpress:function(){Products.Imports()}},
					 // {name:'打印',bimage:'/media/images/print.gif',onpress:function(){}},
                    ],
				     			
				});
	    },
	    Showdialogs:function (ajaxpath,divwidth){
	       Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":ajaxpath,
	            "content":{"div":"hello","top":"47","width":divwidth}});    
	    },
	    Imports:function(){
		   Products.Showdialogs('/dialog/product/export',600);
   	    },
        CloseDialog:function(){
            $('.dragDiv').hide();
            $('.pop_content').html('');
            $('.overlay','#dialog').remove();
        },
		QuickImport:function(){
			 var fname= $('#fname').val().split('.');
			 $.ajax({
				type : 'post',
			    url : '/import/product/'+fname[0],
				data : '&action=quick&d='+fname[1],
				beforeSend : function(XMLHttpRequest) {
				    $('#showtb').html('<p>正在执行中...请稍等！</p><p><img src="/media/images/loading.gif" /></p>');
				},
				success : function(data, textStatus) {	
                      if (data==='1') {
	                     alert('数据导入成功！');
                         Products.CloseDialog();
                         $('#flexgrid').flexReload(); 
                      } 
                      else
                      {
                        alert('导入数据超时，（可是导入的数据量太大，请把导入的数据分隔后，重新导入！）');
                        Products.CloseDialog();
                      }
                    
				},
				complete : function(XMLHttpRequest, textStatus) {
				},
				error : function() {
					$('#showtb').html('导入数据错误。'); 
			   }
			 });	
		 },
		Exports:function(p,q){
			 var action ='';var id='';
			 switch (p){
			   case 1: action = 'product'; break;
			   case 2: action = 'orders'; break;
			 }
			 switch (q){
			   case 1: id = 'Excel5'; break;
			   case 2: id = 'CSV'; break;
			   case 3: id = 'PDF'; break;
			 }
		   var fn = $('select[name=qtype] option:selected').val();
		   var fv = $('.qsbox').val(); 	 
		   window.location.href='/export/'+action+'/'+id+'?params='+fn+','+fv;		 
		},
		ClearInfo:function(){
		   $('#message').hide();
		   $('#grid_operating').html('');
		   $('#grid_operating table:first td').each(function(){
			   $(this).find('input').val('');
			   $(this).find('textarea').val('');
			   $(this).find('select:first').attr('selected','true');
			   $(this).find('input[name=is_active]').attr('checked',false);	
			   		
		   });
		},
		setBodyHeight:function(){
		  var body_h= $('#body-right-content').height();
		  $('#body-right-content').height(body_h+150);
		},
        ShowOperating:function(flag){
	      var f=flag;
		   Products.ClearInfo();
		   if (f===0){
		          var gd = $('#flexgrid').flexModify(function(a){ 
			              if (a != null){	
							             var id = a.attr('id').substring(3);
						                  
										            $('.flexigrid').hide();
											        $('#grid_add').show();
										            $.ajax({
															type : 'post',
															url : '/post/getproductinfo',
															data : '&id='+id+'&flag='+f,
															beforeSend : function(XMLHttpRequest) {
														 	   	$('.loading').show(); 
															},
															success : function(data, textStatus) {
																 $('#grid_operating').html(data); 
																 Products.setBodyHeight();
											                },
															complete : function(XMLHttpRequest, textStatus) {
															  	$('.loading').remove();
															    $('#flexgrid').flexReload();

															},
															error : function() {
																// 请求出错处理
															}
														});
					       }
						   else
						      alert('清先选择商品。');
					       });	
	               }
	           else
	           {	
		              $('.flexigrid').hide();
							        $('#grid_add').show();
						            $.ajax({
											type : 'post',
											url : '/post/getproductinfo',
											data : '&flag='+f,
											beforeSend : function(XMLHttpRequest) {
										 	   	$('.loading').show(); 
											},
											success : function(data, textStatus) {
								                 $('#grid_operating').html(data); 
							                     Products.setBodyHeight();
											},
											complete : function(XMLHttpRequest, textStatus) {
											  	$('.loading').remove();
											    $('#flexgrid').flexReload();

											},
											error : function() {
												// 请求出错处理
											}
										});
			  }
	
			
   	    },
	    RowAdd:function(){
	        Products.ShowOperating(1);
	    },
	    Modify:function(){
		       Products.ShowOperating(0);
		
		     },
		Serialize:function(obj){
		    switch (obj.constructor){
			   case Object:
				 var str='{';
				 for (var o in obj){
					str += '"'+o+'"' +":"+Products.Serialize(obj[o])+",";
				 }
				 
				 if (str.substr(str.length-1)==","){
				    str= str.substr(0,str.length-1);	
				 }
				
				 return str+'}';
				 break;
				
			   case Array:
			     var str="[";
			     for (var o in obj){
				   str+= Products.Serialize(obj[o])+",";
		     	 }	
		         if (str.substr(str.length-1)==","){
				    str= str.substr(0,str.length-1);	
				 }
                 return str+"]";
				 break;
			
			   case Boolean:
			      return '"'+ obj.toString() +'"';	 
			      break;
			
			   case Date:
			      return '"'+ obj.toString() +'"';	 
			      break;
			   
			   case Number:
				      return '"'+ obj.toString() +'"';	 
				      break;
   			   case String:
					      return '"'+ obj.toString() +'"';	 
					      break;
		    }
		},
		Validate:function(){
			var result= true;
		    $(".uiInfoTable:first td input").each(function(a,b){
			       var self = $(b);
			       var _name = self.attr("placeholder");
			       var _value = self.val().replace(/(^\s*)|(\s*$)/g, "");  
			       if (_name==="必填"){
				      if ((_value === '') || (_value === "必填")){
					    $(self).addClass("validate");
					    $(self).parent().append('<span id="validate_msg" style="padding-left:3px;color:red;">'+$(self).attr('msg')+'</b>'); 
				 	    result= false; 
					    return result;
				      }
				      else  {
					   $(self).removeClass('validate');
				       $('#validate_msg').remove();
				      }
			       }
			});	
			return result; 
		},
		AddToDb:function(obj){
		 	    $.ajax({
							type : 'post',
							url : '/post/productdb/add',
							data :'&data='+obj,
							beforeSend : function(XMLHttpRequest) {
								//$('.loading').show(); 
							},
							success : function(data, textStatus) { 
								if (data==="-1")
								{
								   alert("编号重复！无法保存");	
								}
								else
				                if (data==="1")
				                {
					               alert("成功保存！");
					               $('#grid_operating').hide(); 
					               $('#flexgrid').flexReload();
					               $('.flexigrid').show();
			 	                }
			                    else 
			                      alert('保存失败!'.data);   
				                //$('#grid_add').html(data); 
							},
							complete : function(XMLHttpRequest, textStatus) {
							  	//$('.loading').remove();
							},
							error : function() {
								// 请求出错处理
							}
						});
		},
	    UpdateToDb:function(obj){
		     $.ajax({
						type : 'post',
						url : '/post/productdb/modify',
						data :'&data='+obj,
						beforeSend : function(XMLHttpRequest) {
							//$('.loading').show(); 
						},
						success : function(data, textStatus) {
			              if (data==="1")
			                {
				               alert("成功保存！");
				               $('#grid_operating').html(''); 
				               $('#flexgrid').flexReload();
				               $('#product').click();
		 	                }
		                    else 
		                    alert('保存失败!'+data);   
			                //$('#grid_add').html(data); 
						},
						complete : function(XMLHttpRequest, textStatus) {
						  	//$('.loading').remove();
						},
						error : function() {
							// 请求出错处理
						}
					});
	    },
	    DeleteToDb:function(obj){
		     $.ajax({
						type : 'post',
						url : '/post/productdb/delete',
						data :'&data='+obj,
						beforeSend : function(XMLHttpRequest) {
							//$('.loading').show(); 
						},
						success : function(data, textStatus) {
						
			                if (data==="1")
			                {
				               alert("成功保存！");
				               $('#grid_operating').hide(); 
				               $('#flexgrid').flexReload();
				               $('.flexigrid').show();
		 	                }
		                    else 
		                    alert('保存失败!'.data);   
			                //$('#grid_add').html(data); 
						},
						complete : function(XMLHttpRequest, textStatus) {
						  	//$('.loading').remove();
						},
						error : function() {
							// 请求出错处理
						}
					});
	    },
	    removeImg:function(p){
		    var obj=p;
		    var pid = $('.uiInfoTable input[name=id]').val();
		    var lid= p.split('.'); 
		    if (confirm('是否真的删除此图片吗？'))
			$.ajax({
						type : 'post',
						url : '/post/productdb/removeimg',
						data :'&data='+obj+'&pid='+pid,
						beforeSend : function(XMLHttpRequest) {
							//$('.loading').show(); 
						},
						success : function(data, textStatus) {
						   
			                if (data==="1")
			                {
				                $('#'+lid[0]).remove();
				   		 	 }
		                    else 
		                        alert('保存失败!'.data);   
			                //$('#grid_add').html(data); 
						},
						complete : function(XMLHttpRequest, textStatus) {
						  	//$('.loading').remove();
						},
						error : function() {
							// 请求出错处理
						}
					}); 
	    },
	    AddContent:function(){
		    if (!Products.Validate()) { return; };
		   	if (confirm('是否增加该商品?')) {
		    $('#message').hide();
            var ary = {};
            var serialize = '{}';
            $(".uiInfoTable:first td input").each(function(a,b){
			     var self = $(b);
			       var _name=self.attr("name");
			       var _value= self.val();
			       ary[_name]=_value;
			});			 
			$(".uiInfoTable:first td select").each(function(a,b){
				var self= $(b);  
				  var select = self.find("option:selected").text(); 
				  switch (a){
				    case 0: ary['category']= select; break;
				    case 1: ary['product_type']= select; break;
				  }
		    }); 
		    var description = $('textarea[name=uses]').val().replace(/[\r\n]/g,"<br>");
		    ary['uses']=description;
		    var active_check = $('input[name=is_active]').attr("checked");
			ary['is_active'] = (active_check==true)? "启用" : "禁用" ;	
			
			var sr=new Array();
			$('#status input').each(function(){
			
					if ($(this).attr('checked')==true){
						var iv= $(this).val();
						sr.push({'name':iv});
						 
					}
			});
            ary['imgs']=sr;	
		    
	     	serialize = Products.Serialize(ary);
		    Products.AddToDb(serialize); 
		   } 
		},
		ModityContent:function(){
			if (confirm('是否修改该商品?')) {
		    var ary = {};
            var serialize = '{}';
            $("#grid_add").html();
			$(".uiInfoTable:first td input").each(function(a,b){
			     var self = $(b);
			     if (self.attr('class').indexOf("ismodity")>-1 || a<1){
			       var _name=self.attr("name");
			       var _value= self.val();
			       ary[_name]=_value;
			     }
			});			 
			$(".uiInfoTable:first td select").each(function(a,b){
				var self= $(b);  
				if (self.attr('class').indexOf("ismodity")>-1){
				  var select = self.find("option:selected").text(); 
				  switch (a){
				    case 0: ary['category']= select; break;
				    case 1:  ary['product_type']= select; break;
				  }
				} 
			})
		    var description = $('textarea[name=uses]').val().replace(/[\r\n]/g,"<br>");
		    if (description !='')
		 	ary['uses']=description;
		    var active_check = $('input[name=is_active]').attr("checked");
		    var check_checkbox_change = $('#check_checkbox_change').html();
		    if (check_checkbox_change==="1")
		    ary['is_active'] = (active_check==true)? "启用" : "禁用" ;

            var sr=new Array();
			$('#status input').each(function(){
					if ($(this).attr('checked')==true){
						var iv= $(this).val();
						sr.push({'name':iv});
					}
			});
			if(sr.length>0) ary['imgs']=sr;
			
            var check_textarea_change = $('#check_textarea_change').html();
            if (check_textarea_change==="1"){
               var s = $('#description').html();
			   if (s!='')
			   ary['description']= s.replace(new RegExp("\"","g"),"'");
            }

            serialize = Products.Serialize(ary);
		    Products.UpdateToDb(serialize);4
		   }  
		},
		DeleteContent:function(obj){
		   var ary = {};
		   ary['id']= obj;
		   var serialize = '{}';
		   serialize = Products.Serialize(ary);	 			
		   Products.DeleteToDb(serialize);	
		  
		},
		RowDelete:function(){
			if (confirm('Delete Are you sure!'))
			{	
			   	     var gd = $('#flexgrid').flexDeleteRows(function(a){ 
			 	     if (a != null)
				     {
				          var id = a.attr('id').substring(3);
			 	             Products.DeleteContent(id);
			                 $('#flexgrid').flexReload(); 
			          }
			              else 
			                alert('清先选择商品。');
			         });  
			}
		},
	 
};

 
