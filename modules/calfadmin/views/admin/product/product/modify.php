<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-31 
 * @copyright 2011 
 *
 */
?>
       <script src="/media/js/admin.products.js" type="text/javascript" charset="utf-8"></script>
       <script type="text/javascript" src="/media/js/jquery.placeholder.js"></script>
	<script src="/media/js/jquery.upload.js" type="text/javascript" charset="utf-8"></script>
	<script src="/media/js/jquery.ui.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
        $(function(){
	   
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
          
               $( "#tabs" ).tabs();
	       $("#btn_save").click(function(){
		  if ($('#check_change').html()=="1")
		     Products.ModityContent(); 
		  else
		   alert('没有内容改变，无须保存');
	       });
	       
	        $(".cancel").click(function(){
		  	$('.flexigrid').show();
		        $('#grid_add').hide();  
	        });
	      
	       	$(".uiInfoTable:first td input").each(function(){
		    $(this).keyup(function(){
		        $(this).addClass("ismodity");	
		        $('#check_change').html("1");
		    });
	        }); 
		
		$(".uiInfoTable:first td select").each(function(){
		    $(this).change(function(){
			  $(this).addClass("ismodity");	
			  $('#check_change').html("1");
		    });
		});	
	
	       
          }); 	
       </script>
<div id="tabs">
 <ul>
   <li><a href="#tabs-1"><?php echo __('基本设置'); ?></a></li>
   <li><a href="#tabs-2"><?php echo __('图片设置'); ?></a></li>
   <li><a href="#tabs-3"><?php echo __('商品描述'); ?></a></li>
</ul>
<div id="tabs-1"> 
<div style="display:none" id="check_change"></div>		 
<table class="uiInfoTable">
<tbody>
	<?php $ids = Text::random('hexdec',5); ?>
        <?php $count= count($array_data); ?>
	<?php foreach ($array_data AS $key => $value): ?>
	   <tr class="dataRow">
	    <th class="label"><label for="<?php echo $ids.'_'.$key ?>"><?php echo $value['display_name'] ?>：</label></th>
	    <?php $select = array_key_exists('subvalue',$value)? $value['subvalue'] : ''  ?>
	      <?php if (is_array($select)): ?>
	        <td> 
		 <select>
	    	   <?php foreach ($select AS $skey => $svalue): ?>
		      <?php $selected = ($svalue===$value['value'])? 'selected':'' ; ?>
		      <option <?php echo $selected; ?>><?php echo $svalue ?></option>  
		   <?php endforeach ?> 
	         </select>
	        </td> 
	      <?php else: ?> 
	      <?php if ($key=="id"): ?>
	         <td class="data" ><input readonly style="width:<?php echo $value['width'] ?>px;color:#000" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
	      <?php else: ?> 		
	      <?php if($value['type']=='textarea'): ?>
	         <td class="data"><textarea id="<?php echo $ids.'_'.$key ?>" placeholder="<?php echo $value['placeholder'] ?>" <?php echo $value['attr'] ?>></textarea></td> 	
	      <?php else: ?>	
  	         <td class="data" ><input style="width:<?php echo $value['width'] ?>px;color:#000" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
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
	  	<script type="text/javascript"> Products.addArea();</script>
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
   <label class="cancel uiButton" for="uvh5i2_10">
   <input value="取消" type="button" id="uvh5i2_10"></label>
</div>