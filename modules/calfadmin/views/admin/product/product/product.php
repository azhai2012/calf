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
	<script src="/media/js/jquery.ui.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
         $(function(){   
            
	        $.Placeholder.init();
           	Products.getGrid();
           
                $( "#tabs" ).tabs();
               
               	 $("#btn_save").click(function(){
		       Products.AddContent(); 
		  });

                $("#btn_cancel").click(function(){
	     	  $('.flexigrid').show();
		  $('#grid_add').hide();  
	        });
	       
           }); 	
        </script>
    </div> <!-- end list -->
    <div id="grid_add">

	<div id="tabs">
	 <ul>
	   <li><a href="#tabs-1"><?php echo __('基本设置'); ?></a></li>
	   <li><a href="#tabs-2"><?php echo __('图片设置'); ?></a></li>
	   <li><a href="#tabs-3"><?php echo __('商品描述'); ?></a></li>
	</ul>
	<div id="tabs-1"> 	 
        <table class="uiInfoTable">
	<tbody>
		<?php $ids = Text::random('hexdec',5); ?>
	        <?php $array_data = array(
		      array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'编号不能为空','name'=>'id','value'=>''),
	              array('display_name' =>'商品分类','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'category','value'=>'',
	                    'subvalue'=>array('化学药制剂','中成药','生物制品','保健食品','器械')),
		      array('display_name' =>'剂型','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'product_type','value'=>'',
		            'subvalue'=>array('针剂','片剂','口服外用','一类医疗器械','二类医疗器械','三类医疗器械','其他')),
		      array('display_name' =>'商品名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','message'=>'商品名称不能为空','name'=>'name','value'=>''),
		      array('display_name' =>'商品通用名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','message'=>'商品通用名称不能为空','name'=>'general_name','value'=>''),
		      array('display_name' =>'规格','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'规格不能为空','name'=>'norm','value'=>''),
		      array('display_name' =>'单位','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'单位不能为空','name'=>'unit','value'=>''),
		      array('display_name' =>'生产企业','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','message'=>'生产企业不能为空','name'=>'factory','value'=>''),
		      array('display_name' =>'批准文号','type'=>'text','attr'=>'','width'=>150,'placeholder'=>'必填','message'=>'批准文号不能为空','name'=>'certificateNo','value'=>''),
		      array('display_name' =>'包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'包装不能为空','name'=>'group','value'=>''),
		      array('display_name' =>'中包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'中包装不能为空','name'=>'middle_group','value'=>''),
		      array('display_name' =>'国批价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','message'=>'国批价不能为空','name'=>'general_price','value'=>''),
		      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'请输入该商品的功能','name'=>'uses','value'=>''),
		      array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px"','name'=>'is_active'),

		); 
		
		
		?>
		<?php $count= count($array_data); ?>
		<div id="message"></div>
		<?php foreach ($array_data AS $key => $value): ?>
		   <tr class="dataRow">
		    <th class="label"><label for="<?php echo $ids.'_'.$key ?>"><?php echo $value['display_name'] ?>：</label></th>
		    <?php $select = array_key_exists('subvalue',$value)? $value['subvalue'] : ''  ?>
		      <?php if (is_array($select)): ?>
		        <td> 
			 <select>
		    	   <?php foreach ($select AS $skey => $svalue): ?>
			      <option><?php echo $svalue ?></option>  
			   <?php endforeach ?> 
		         </select>
		        </td> 
		      <?php else: ?>
		      <?php if($value['type']=='checkbox'): ?>
		         <td class="data"><input type="checkbox" name="<?php echo $value['name'] ?>"  id="<?php echo $ids.'_'.$key ?>" <?php echo $value['attr'] ?> /></td> 	
		      <?php else: ?> 		 
		      <?php if($value['type']=='textarea'): ?>
		       <td class="data"><textarea name="<?php echo $value['name'] ?>"  id="<?php echo $ids.'_'.$key ?>" placeholder="<?php echo $value['placeholder'] ?>" <?php echo $value['attr'] ?>></textarea></td> 	
		      <?php else: ?>	
	  	         <td class="data" ><input style="width:<?php echo $value['width'] ?>px;color:#000" msg="<?php echo $value['message']; ?>" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
	               <?php endif ?>
	              <?php endif ?>
	            <?php endif ?>
		  </tr>
	        <?php endforeach ?>
	         </tbody>	  
	       </table>
	        </div> <!-- end tabs-1 -->
	        <div id="tabs-2">
		<table class="uiInfoTable">
	 	<tbody>	  
		  <tr class="dataRow">
	            <th class="label"><label for="file">上传图片：</label></th>
	            <td><div id="uploadform"> </div> <div id="status"></div> 
	          </td> 	
	          </tr>
	        </tbody>	  
		</table>
	        </div> <!-- end tabs-2 -->
	        <div id="tabs-3">
		<table class="uiInfoTable">
	  	 <tbody>	  
	        <tr class="dataRow">
		  <th class="label"><label for="description" >商品描述：</label></th>
		  <td>
		  
			<textarea style="width:588px;" rows="20" cols="69"  name="newscontent" id="description" value="" /></td>	
		  </td> 
	        </tr>
	         </tbody>
	        </table>
	       </div> <!-- end tabs-3 -->
         </div> <!-- end tabs -->
        <div class="mtm" style="margin-bottom:20px;" >
	   <label class="submit uiButton" id="uvh5i2_7" for="btn_save">
	   <input value="保存更改" type="submit" id="btn_save"></label>
	   <label class="cancel uiButton" for="btn_cancel">
	   <input value="取消" type="button" id="btn_cancel"></label>
	</div>	
    </div>

    <div id="dialog">	
     <div class="dragDiv">  
       <div class="pop_content " id="pop_content" tabindex="0" role="alertdialog">
       <div class="pop_content_load"></div> 
      </div>
     <div>
   </div> <!-- end #dialog -->	

	
</div>