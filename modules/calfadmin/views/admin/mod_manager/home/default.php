<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-10 
 * @copyright 2012 
 *
 */
?>
  <script src="/media/js/crm.customer.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="/media/js/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="/media/js/jquery.placeholder.js"></script>
  <script type="text/javascript" src="/media/js/jquery.datepicker.js"></script>
  <script type="text/javascript" src="/media/js/jquery.ui.min.js"></script>
 
  <script type="text/javascript" charset="utf-8">
    $(function(){
           $.Placeholder.init();
           $('#tabs input[class=date]').each(function(){
	      $(this).datepicker({dateFormat:'yy-mm-dd'});
           });    
           $('#action_title').html(' - <?php echo $action ?>');	
  	   $( "#tabs" ).tabs();
	   $("#btn_save").click(function(){
		  var s= editor.document.getBody().getHtml(); 
		  $('#description').html(s);
		  if ($('#check_change').html()=="1")
		     
		     Products.ModityContent();
	
		     //CKEDITOR.remove( 'editor1'); 
		  else
		   alert('没有内容改变，无须保存');
	       });

	        $(".cancel").click(function(){
		  	$('.flexigrid').show();
		        $('#grid_add').hide();  
	        });

	      	$(".uiInfoTable:first td").each(function(){
		    $(this).find('input').keyup(function(){
		        $(this).addClass("ismodity");	
		        $('#check_change').html("1");
		    });

		   $(this).find('select').change(function(){
		        $(this).addClass("ismodity");	
		        $('#check_change').html("1");
		    });

		   $(this).find('textarea').change(function(){
		        $(this).addClass("ismodity");	
		        $('#check_change').html("1");
		    });

		  $(this).find('input[name=is_active]').change(function(){
		        $(this).addClass("ismodity");	
		        $('#check_change').html("1");
	        	 $('#check_checkbox_change').html("1");
		    });

	        });

    }); 		
 </script>
	
<div id="body-right-content"> <!-- 操作视图 -->
  
<div class="tDiv">  <!-- begin tDiv -->	
  <div class="tDiv2" >
     <div class="fbutton" style="margin-left:2px;">
          <div><span style="background-image: url(/media/images/back.gif); 
	          background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; padding-left: 20px; background-position: 0% 50%; background-repeat: no-repeat no-repeat; ">
	       <a href="javascript:void(0);" onclick="$('#modmanager').click();">返回列表</a></span>
   	  </div>	
     </div>
     <div class="fbutton" style="margin-left:2px;">
       <div><span id="btn_save" style="background-image: url(/media/images/save.gif); 
	          background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; padding-left: 20px; background-position: 0% 50%; background-repeat: no-repeat no-repeat; ">
	  保存</span>
       </div>	
      </div>
      <div style="clear:both"></div>
    </div> <!-- end tDiv2 -->
  </div> <!-- end tDiv -->
   <div class="ptogtitle" title="Minimize/Maximize"><span></span></div>


<div class="body-right-bottom-content">
	<div id="tabs">
	 <ul> 
  	  <?php foreach ($array_data AS $key => $value): ?>	 
	     <li><a href="#tabs-<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></li>
	  <?php endforeach; ?>
	</ul>
	<?php foreach ($array_data AS $key => $value): ?>	 
	<div id="tabs-<?php echo $value['id'] ?>">  <!-- begin sub tabs -->
	<div style="display:none" id="check_change"></div>
	<table class="uiInfoTable">
	    <tbody>
		<?php $ids = Text::random('hexdec',5); ?> 
	        <?php $list = $value['lists']; ?>
	        <?php $count= count($list); ?>
		<?php foreach ($list AS $key => $value): ?>
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
	              <?php if($value['type']=='checkbox'): ?>
		         <td class="data"><input type="checkbox" <?php echo $value['attr'] ?>  name="<?php echo $value['name'] ?>"  id="<?php echo $ids.'_'.$key ?>"  /></td> 	
		      <?php else: ?>
		      <?php if($value['type']=='textarea'): ?>
		         <td class="data"><textarea name="<?php echo $value['name'] ?>" id="<?php echo $ids.'_'.$key ?>" placeholder="<?php echo $value['placeholder'] ?>" <?php echo $value['attr'] ?>><?php echo str_replace('<br>',chr(13),$value['value']) ?></textarea></td> 	
		       <?php else: ?>	
	  	        <?php if ($value['type']=='date'): ?>
		           <td class="data"><input type="text" id='<?php echo $value['name'] ?>' class="date" value='' /> </td> 	
		       	  
		        <?php else: ?>	
		       <?php $readonly = ($key=="id") ? 'readonly': '';  ?>  
		           <td class="data" ><input <?php echo $readonly; ?> style="width:<?php echo $value['width'] ?>px;color:#000" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
	                  
	                  <?php endif ?>
		         <?php endif ?>
	               <?php endif ?>
	              <?php endif ?>
	            </tr>
	        <?php endforeach ?>
	         </tbody>	  
	       </table>
	     </div> <!-- end sub tabs -->
	<?php endforeach ?>
	</div> <!-- end tabs -->
   </div> <!-- end body-right-content -->
 </div>

