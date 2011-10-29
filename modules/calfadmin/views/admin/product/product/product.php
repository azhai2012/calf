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
   <div id="product-list"> <!-- begin list -->
    <table id="flexgrid" style="display:none"></table>
        <script src="/media/js/jquery.flexigrid.js" type="text/javascript" charset="utf-8"></script>
        <script src="/media/js/admin.products.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="/media/js/jquery.placeholder.js"></script>
	<script src="/media/js/jquery.upload.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
                 $('#uploadform').ajaxUpload({
		       target:'/testajax',
		       handleJsonResponse:function(json){
			    if (json.file.name){
			      $('#status').append('<div><input type="checkbox" value="'+json.filename+'" id="files" name="attach" checked >'+json.file.name+'  ( <i>'+json.file.type+'</i> )  '+Math.round(json.file.size/1024)+'KB </div>');
		              
		            }
			},
		       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
		       afterSubmit: function(form,iframe){$('#loading').html('');$('#file',form).val('');}
		 });
	        $.Placeholder.init();
           	Products.getGrid();
	       
          	
        </script>
    </div> <!-- end list -->
    <div id="grid_add">
	 <div class="mtm" style="margin-top:10px;padding-top:0;margin-bottom:10px;padding-bottom:10px;border-top:0;border-bottom:1px #ccc solid">
		   <label class="submit uiButton " id="uvh5i2_7" for="uvh5i2_9">
		   <input value="保存更改" type="submit" id="uvh5i2_9"></label>
		   <label class="cancel uiButton" for="uvh5i2_10">
		   <input value="取消" type="button" id="uvh5i2_10"></label>
	</div>
      <table class="uiInfoTable">
	
	<tbody>
		<?php $ids = Text::random('hexdec',5); ?>
	        <?php $array_data = array(
		      array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
	              array('display_name' =>'分类','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'category','value'=>''),
		      array('display_name' =>'商品名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'product_name','value'=>''),
		      array('display_name' =>'商品通用名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'product_common_name','value'=>''),
		      array('display_name' =>'规格','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'spec','value'=>''),
		      array('display_name' =>'单位','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'unit','value'=>''),
		      array('display_name' =>'生产企业','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'origin','value'=>''),
		      array('display_name' =>'批准文号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'listens','value'=>''),
		      array('display_name' =>'包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'中包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'国批价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
		      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'请输入该商品的功能','name'=>'uses','value'=>''),
		); ?>
		<?php $count= count($array_data); ?>
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
	        <tr class="dataRow">
	          <th class="label"><label for="file">上传图片：</label></th>
	          <td><div id="uploadform"> </div> <div id="status"></div> 
	          </td> 	
	        </tr>
	        <tr class="dataRow">
		  <th class="label"><label for="description" >商品描述：</label></th>
		  <td>
		  	<script type="text/javascript"> Products.addArea();</script>
			<textarea style="width:588px;" rows="20" cols="69"  name="newscontent" id="description" value="" /></td>	
		  </td> 
	        </tr>
	</tbody>
       </table>	 
        <div class="mtm" style="padding-top:10px;margin-bottom:20px;" >
	   <label class="submit uiButton" id="uvh5i2_7" for="uvh5i2_9">
	   <input value="保存更改" type="submit" id="uvh5i2_9"></label>
	   <label class="cancel uiButton" for="uvh5i2_10">
	   <input value="取消" type="button" id="uvh5i2_10"></label>
	</div>	
    </div>	
</div>