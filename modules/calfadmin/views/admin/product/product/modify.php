<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description :  /post/getproductinfo
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
	
	<script src="/media/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" charset="utf-8">
        $(function(){
	   
              $('#uploadform').ajaxUpload({
		       target:'/upload/image',
		       handleJsonResponse:function(json){
			    if (json.file.name){
			      var _li = document.createElement('li');	
			      var _img = document.createElement('img');
			      var leg = $('li', 'ul.pimgs').length;
			      _img.className= 'img_'+leg;
			      $(_img).attr({'width':100,'height':100});	
			      $(_img).attr('src','/media/upload/'+json.filename);
			      $(_li).append(_img);
			      $('ul.pimgs').append(_li);
			      $('#status').append('<div><input type="checkbox" value="'+json.filename+'" id="files" name="attach" checked >'+json.file.name+'  ( <i>'+json.file.type+'</i> )  '+Math.round(json.file.size/1024)+'KB </div>');
		              $('#check_change').html("1");      
		            }
			},
		       beforeSubmit: function(form,iframe){$('#loading').html('loading...');},
		       afterSubmit: function(form,iframe){$('#loading').html('');$('#file',form).val('');}
		 });
		
			
	       $.Placeholder.init();
	        
	        var editor = CKEDITOR.instances['editor1']; 
	       
	        if (editor){editor.destroy(true)}
	           editor = CKEDITOR.replace( 'editor1');
	        CKEDITOR.instances['editor1'].on('blur',function(e){$('#check_textarea_change').html('1');$('#check_change').html('1')})
	
	        addUploadButton();
          
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

	function addUploadButton(editor){
	 
		 CKEDITOR.on('dialogDefinition', function( ev ){
		        var dialogName = ev.data.name;
		        var dialogDefinition = ev.data.definition;
		        if ( dialogName == 'image' ){
		            var infoTab = dialogDefinition.getContents( 'info' );
		            infoTab.add({
		                type : 'button',
		                id : 'upload_image',
		                align : 'center',
		                label : '<?php echo __("上传图片"); ?>',
		                onClick : function( evt ){
		                    var thisDialog = this.getDialog();
		                    var txtUrlObj = thisDialog.getContentElement('info', 'txtUrl');
		                    var txtUrlId = txtUrlObj.getInputElement().$.id;
		                    addUploadImage(txtUrlId);
		                }
		            }, 'browse'); //place front of the browser button
		        }
		    });
		}

		function addUploadImage(theURLElementId){
		    var uploadUrl = "/admin/ckeditor"; //这是我自己的处理文件/图片上传的页面URL
		    var imgUrl = window.showModalDialog(uploadUrl,'1'); 
		    var urlObj = document.getElementById(theURLElementId);
		    urlObj.value = imgUrl;
		    urlObj.fireEvent("onchange"); //触发url文本框的onchange事件，以便预览图片
		}
		
			
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
              <?php if($value['type']=='checkbox'): ?>
	         <td class="data"><input type="checkbox" <?php echo $value['attr'] ?>  name="<?php echo $value['name'] ?>"  id="<?php echo $ids.'_'.$key ?>"  /></td> 	
	      <?php else: ?>
	      <?php if($value['type']=='textarea'): ?>
	         <td class="data"><textarea name="<?php echo $value['name'] ?>" id="<?php echo $ids.'_'.$key ?>" placeholder="<?php echo $value['placeholder'] ?>" <?php echo $value['attr'] ?>><?php echo str_replace('<br>',chr(13),$value['value']) ?></textarea></td> 	
	      <?php else: ?>	
  	   	   <?php $readonly = (($key=="id") and ($action=='modity')) ? 'readonly': '';  ?>  
	           <td class="data" ><input <?php echo $readonly; ?> style="width:<?php echo $value['width'] ?>px;color:#000" type="<?php echo $value['type'] ?>" <?php echo 'width='.$value['width'].'px' ?> class="inputtext" title="<?php echo $value['display_name'] ?>" placeholder="<?php echo $value['placeholder'] ?>" name="<?php echo $value['name'] ?>" value="<?php echo $value['value'] ?>" id="<?php echo $ids.'_'.$key ?>"></td>
                <?php endif ?>
               <?php endif ?>
              <?php endif ?>
            </tr>
        <?php endforeach ?>

         </tbody>	  
       </table>
        </div> <!-- end tabs-1 -->
        <div id="tabs-2">
	<div style="display:none" id="description"></div> 
	<div style="display:none" id="check_checkbox_change"></div>
	<div style="display:none" id="check_textarea_change"></div>
	<table class="uiInfoTable">
 	<tbody>	  
	  <tr class="dataRow"> 
	    <th style="width:50px;" class="label"><?php echo __('图片展示') ?>：</th>
	    <td>
	       	 
	       <ul class="pimgs">		 
		   <?php foreach ($imgs_array_data as $key => $value): ?>
	             <?php $imgname = explode('.',$value['name']); ?>		 
		     <li id="<?php echo $imgname[0]; ?>">
			<img width=100 height=100 class="imgs_<?php echo $key ?>" src='/media/product/img/<?php echo $value['name']; ?>' />
			<p style="text-align:center"><a href="javascript:Products.removeImg('<?php echo $value['name'] ?>');"><img style="border:0" src="/media/images/delete.gif" /></a></p>
		     </li>
		   <?php endforeach ?>
	       </ul>
	    </td>	
          </tr>
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
	   	<textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo $description ?></textarea>
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