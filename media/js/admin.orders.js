var Orders={
	getGrid:function(){
	  		$('#flexgrid').flexigrid({
					url: '/post/orders/list',
					dataType: 'json',
					colModel : [
						{display: '编号', name : 'id', width : 40, sortable : true, align: 'center'},
						{display: '客户名称', name : 'customer_name', width : 180, sortable : true, align: 'left'},
						{display: '订单数量', name : 'rowcount', width : 80, sortable : true, align: 'right'},
						{display: '订单金额', name : 'amount', width : 80, sortable : true, align: 'right'},
						{display: '创建日期', name : 'create_date', width : 130, sortable : true, align: 'left', hide: false},
			  		    {display: '状态', name : 'flows', width : 80, sortable : true, align: 'right'}
						],
					searchitems : [
						{display: '编号', name : 'id'},
						{display: '客户名称', name : 'customer_name', isdefault: true},
						{display: '状态', name : 'flows'},
						],
					sortname: "id",
					sortorder: "asc",
					usepager: true,
					title:'客户订单列表',
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
				 	  {name:'详细',bimage:'/media/images/detail.gif',onpress:function(){Orders.details()}},
				 	  {name:'导出',bimage:'/media/images/export.gif',onpress:function(){Orders.exports()}},
				   ],
				});
	    },
	    details:function(){
		      
			   var gd = $('#flexigrid').flexModify(function(a){
			   if (a != null){	
				   $('#order-list').hide();
				   $('#grid_details').show();
				   $('#grid_details').html('<table id="details_grid" style="display:none"></table>');
			       var id = a.attr('id').substring(3);
				   $('#details_grid').flexigrid({
					GridName:'detailgrid', 
					url: '/post/orders/'+id,
					dataType: 'json',
					colModel : [
						{display: '订单号', name : 'id', width : 40, sortable : true, align: 'center'},
						{display: '商品编号', name : 'product_id', width : 40, sortable : true, align: 'center'},
						{display: '商品名称', name : 'display_name', width : 180, sortable : true, align: 'left'},
				  	    {display: '单位', name : 'unit', width : 180, sortable : true, align: 'left'},
						{display: '数量', name : 'quantity', width : 180, sortable : true, align: 'right'},
						{display: '单价', name : 'price', width : 180, sortable : true, align: 'right'},
						{display: '金额', name : 'amount', width : 180, sortable : true, align: 'right'},
						{display: '批号', name : 'batch', width : 180, sortable : true, align: 'left'},
						{display: '效期至', name : 'validity', width : 80, sortable : true, align: 'right'},
						],
					searchitems : [
						{display: '编号', name : 'id'},
						{display: '商品名称', name : 'display_name', isdefault: true},
						],
					sortname: "id",
					sortorder: "asc",
					usepager: false,
					title:'订单商品明细',
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
					 	  {name:'返回',bimage:'/media/images/back.gif',onpress:function(){
						
						   	   $('#order-list').show();
							   $('#grid_details').hide();
						     	$('#flexgrid').flexReload();
						       $('#grid_details').html('');
						  }},
					],
				});
				            
		     }
			 else
				                  alert('清先选择要查看的订单。');
		   });
				
	    },
	  
};