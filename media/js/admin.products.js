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
        RowAdd:function(){
	      $('.flexigrid').hide();
          $('#grid_add').show();
        },
	    Modify:function(){var gd = $('#flex1').flexModify(function(a){ if (a != null){	
		       var id = a.attr('id').substring(3);
			                $('#grid_add input[name=id]').val(id);
				        $('#grid_add input[name=product_name]').val('商品名称');
				        $('.flexigrid').addClass('hideBody');
				        $('#grid_add').show();
			                $('#flexgrid').flexReload();
			               }
			               else
			                  alert('清先选择商品。');
				   });	
		     },
		RowDelete:function(){
				   var gd = $('#flexgrid').flexDeleteRows(function(a){ 
				     if (a != null)
				     {
				       if (confirm('Delete Are you sure!'))
				        {	
				          var id = a.attr('id').substring(3);
			 	           alert(id);
			                   $('#flexgrid').flexReload(); 
			                }  
				      }
			              else 
			                alert('清先选择商品。');
			          });  
		},
	 
};