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
					pagestat: '共 {total} 页',
					outof:'/',
					nomsg:'没有查找到相关内容', 
					width: 'auto',
					height: 375,  
				  	buttons:[
				      {name:'添加',bimage:'/media/images/new.gif',onpress:function(){Products.RowAdd()}},
				      {name:'修改',bimage:'/media/images/modify.gif',onpress:function(){Products.Modify()}},
					  {name:'删除',bimage:'/media/images/delete.gif',onpress:function(){Products.RowDelete()}},
					  {name:'导出',bimage:'/media/images/export.gif',onpress:function(){Products.exports()}},
				      {name:'导入',bimage:'/media/images/import.gif',onpress:function(){Products.exports()}},
					  {name:'打印',bimage:'/media/images/print.gif',onpress:function(){Products.exports()}},
                    ],
				     			
				});
	    },
		exports:function(){},
		ClearInfo:function(){
		   $('#grid_add table:first td').each(function(){
			   $(this).find('input').val('');
			   $(this).find('textarea').val('');
			   $(this).find('select:first').attr('selected','true');
			   $(this).find('input[name=is_active]').attr('checked',false);			
		   });
		},    
        RowAdd:function(){
	      $('.flexigrid').hide();
	      $('input[name=id]').removeAttr("readonly");
          Products.ClearInfo();
          $('#grid_add').show();
        },
	    Modify:function(){
		      Products.ClearInfo();
              var gd = $('#flexgrid').flexModify(function(a){ 
		      if (a != null){	
		                var id = a.attr('id').substring(3);
			            $('.flexigrid').hide();
				        $('#grid_add').show();
			            $.ajax({
								type : 'post',
								url : '/post/getproductinfo',
								data : '&id='+id,
								beforeSend : function(XMLHttpRequest) {
									$('.loading').show(); 
								},
								success : function(data, textStatus) {
					              $('#grid_add').html(data); 
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
		     },
		Serialize:function(obj){
		    switch (obj.constructor){
			   case Object:
				 var str="{";
				 for (var o in obj){
					str += "\""+o+"\"" +":"+Products.Serialize(obj[o])+",";
				 }
				 
				 if (str.substr(str.length-1)==","){
				    str= str.substr(0,str.length-1);	
				 }
				
				 return str+"}";
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
			      return "\""+ obj.toString() +"\"";	 
			      break;
			
			   case Date:
			      return "\""+ obj.toString() +"\"";	 
			      break;
			   
			   case Number:
				      return "\""+ obj.toString() +"\"";	 
				      break;
   			   case String:
					      return "\""+ obj.toString() +"\"";	 
					      break;
		    }
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
					               $('#grid_add').hide(); 
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
						url : '/post/productdb/modity',
						data :'&data='+obj,
						beforeSend : function(XMLHttpRequest) {
							//$('.loading').show(); 
						},
						success : function(data, textStatus) {
			                if (data==="1")
			                {
				               alert("成功保存！");
				               $('#grid_add').hide(); 
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
				               //alert("成功保存！");
				               $('#grid_add').hide(); 
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
	    AddContent:function(){
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
		
	     	serialize = Products.Serialize(ary);
		    Products.AddToDb(serialize);  
		},
		ModityContent:function(){
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
		 	ary['uses']=description;
		    var active_check = $('input[name=is_active]').attr("checked");
		    ary['is_active'] = (active_check==true)? "启用" : "禁用" ;

			serialize = Products.Serialize(ary);
		    Products.UpdateToDb(serialize);  
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