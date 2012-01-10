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
<div id="product-content" style="position:relative;overflow:auto;">
   <div id="body-list"> <!-- body list --> 
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
    </div> <!-- end body list -->
    <div id="grid_operating">
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