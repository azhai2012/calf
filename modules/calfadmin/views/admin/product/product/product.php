<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-05 
 * @copyright 2011 
 *
 */
?>
<div id="product-content">
   <div id="admin-header">
       管理 
       <h1>Products - 商品管理 </h1>
   </div>
 <div id="product-list">
  <table id="flex1" style="display:none"></table>
        <script src="/media/js/jquery.flexigrid.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
	
		$('#flex1').flexigrid({
				url: '/post/product/list',
				dataType: 'json',
				colModel : [
					{display: '编号', name : 'id', width : 40, sortable : true, align: 'center'},
					{display: '名称', name : 'display_name', width : 180, sortable : true, align: 'left'},
					{display: '单位', name : 'unit', width : 80, sortable : true, align: 'left'},
					{display: '创建日期', name : 'create_date', width : 130, sortable : true, align: 'left', hide: true},
					{display: '生效日期', name : 'active_date', width : 80, sortable : true, align: 'right'},
		  		        {display: '状态', name : 'is_active', width : 80, sortable : true, align: 'right'}
					],
				searchitems : [
					{display: '编号', name : 'id'},
					{display: '名称', name : 'display_name', isdefault: true}
					],
				sortname: "id",
				sortorder: "asc",
				usepager: true,
				title:'商品列表',
				useRp: true,
				rp: 15,
				showTableToggleBtn: true,
				hideOnSubmit:false,
				width: 'auto',
				height: 375,  
				<?php if (true): ?>
			        buttons:[
			            
			             {name:'导出',bimage:'/media/images/export.gif',onpress:function(){exports()}},
			             {name:'打印',bimage:'/media/images/print.gif',onpress:function(){exports()}},
				   		
			            ],
			        <?php endif ?> 				
			});
	   
	       function exports(){
	           alert(4);	
	       }   
          	
        </script>
    </div>	
</div>