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
  <script src="/media/js/admin.mods.js" type="text/javascript" charset="utf-8"></script>
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
     
      <div style="clear:both"></div>
    </div> <!-- end tDiv2 -->
  </div> <!-- end tDiv -->
   <div class="ptogtitle" title="Minimize/Maximize"><span></span></div>


<div class="body-right-bottom-content">
	<div id="body-list">
	 <table width="100%" style="table-layout:fixed" cellspacing="0" cellpadding="0" > 
           <tbody>		 
  	    <?php foreach ($array_data AS $key => $value): ?>	 
	      <tr>
		<?php foreach ($value['lists'] AS $subkey => $subvalue): ?>
			<td style="padding:10px 0 10px 0">
			  <table width="100%" tabindex=<?php echo $subkey ?> style="padding:10px 0 10px 10px;cursor:pointer" cellspacing="0" cellpadding="0" >
			  <tr>
			    <td width="48px"><img src="<?php echo $subvalue['icon'] ?>" /></td>		   
		 	    <td style="padding-left:15px;line-height:20px">
			       <a style="font-size:14px;" href="javascript:void();" onclick="Mods.Click('<?php echo $subvalue['name'] ?>')"><?php echo $subvalue['display_name'] ?></a>
			       <div id="descriptions">
			       	  <?php echo $subvalue['description'] ?>
			       </div>
			    </td>
		          <tr>
			  </table> 
			</td>
			
		  <?php endforeach ?>
	       </tr>	
		<?php endforeach ?>
  	   </tbody>
         </table> 
	</div> <!-- end body-list  -->
   </div> <!-- end body-right-content -->
 </div>

