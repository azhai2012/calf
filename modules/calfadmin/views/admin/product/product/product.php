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
        <script type="text/javascript" src="/media/js/jquery.placeholder.js"></script>
        <script type="text/javascript" charset="utf-8">
	        $.Placeholder.init();
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
				//hideBody:true,
				width: 'auto',
				height: 375,  
				<?php if (true): ?>
			        buttons:[
			             {name:'添加',bimage:'/media/images/new.gif',onpress:function(){RowAdd()}},
			             {name:'修改',bimage:'/media/images/modify.gif',onpress:function(){Modify()}},
				     {name:'删除',bimage:'/media/images/delete.gif',onpress:function(){RowDelete()}},
				     {name:'导出',bimage:'/media/images/export.gif',onpress:function(){exports()}},
			             {name:'导入',bimage:'/media/images/import.gif',onpress:function(){exports()}},
				     {name:'打印',bimage:'/media/images/print.gif',onpress:function(){exports()}},
				   		
			            ],
			        <?php endif ?> 				
			});
	   
	       function exports(){
	          	
	       }   
	
	       function RowAdd(){
		  $('.flexigrid').addClass('hideBody');
		  $('#grid_add').show();
		
	       }
	       
	       function Modify(){
		 var gd = $('#flex1').flexModify(function(a){
		      if (a != null){	
	                var id = a.attr('id').substring(3);
	                $('#grid_add input[name=id]').val(id);
		        $('#grid_add input[name=product_name]').val('商品名称');
		        $('.flexigrid').addClass('hideBody');
		        $('#grid_add').show();
	                $('#flex1').flexReload();
	               }
	               else
	                  alert('清先选择商品。');
		   });	
	       }
	
        	function RowDelete(){
		 if (confirm('Delete Are you sure!'))
	          {
	             var gd = $('#flex1').flexDeleteRows(function(a){ 
		       var id = a.attr('id').substring(3);
	 	       alert(id);  
		     });
	            $('#flex1').flexReload(); 	
	           }
	       }
          	
        </script>
    </div>
    <div id="grid_add">
      <table class="uiInfoTable">
	
	<tbody>
		<?php $ids = Text::random('hexdec',5); ?>
	        <?php $array_data = array(
		      array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
	              array('display_name' =>'商品名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'product_name','value'=>''),
		      array('display_name' =>'规格','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'spec','value'=>''),
		      array('display_name' =>'单位','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'unit','value'=>''),
		      array('display_name' =>'生产企业','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'origin','value'=>''),
		      array('display_name' =>'批准文号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'listens','value'=>''),
		      array('display_name' =>'包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'中包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'国批价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'请输入该商品的功能','name'=>'uses','value'=>''),
		); ?>
		<?php foreach ($array_data as $key => $value): ?>
		   <tr class="dataRow">
		    <th class="label"><label for="<?php echo $ids.'_'.$key ?>"><?php echo $value['display_name'] ?>：</label></th>
		    <?php if ($value['type']=='textarea'): ?>
		    <td class="data"><textarea id="<?php echo $ids.'_'.$key ?>" placeholder="<?php echo $value['placeholder'] ?>" <?php echo $value['attr'] ?>></textarea></td> 	
		    <?php else: ?>	
	  	    <td class="data" ><input style="width:<?php echo $value['width'] ?>px;color:#000" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
	            <?php endif ?>
	            </tr>
	        <?php endforeach ?>
	      
	</tbody>
       </table>	 
        <div class="mtm">
	   <label class="submit uiButton uiButtonConfirm" id="uvh5i2_7" for="uvh5i2_9">
	   <input value="保存更改" type="submit" id="uvh5i2_9"></label>
	   <label class="cancel uiButton" for="uvh5i2_10">
	   <input value="取消" type="button" id="uvh5i2_10"></label>
	</div>	
    </div>	
</div>