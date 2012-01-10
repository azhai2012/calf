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
        <script src="/media/js/jquery.flexigrid.js" type="text/javascript" charset="utf-8"></script>
        <script src="/media/js/crm.customer.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="/media/js/jquery.placeholder.js"></script>
	<script type="text/javascript" charset="utf-8">
         $(function(){   

	        $.Placeholder.init();
           	Customers.getGrid();

                $( "#tabs" ).tabs();

               	 $("#btn_save").click(function(){
		       Products.AddContent(); 
		  });

                $("#btn_cancel").click(function(){
	     	  $('.flexigrid').show();
		  $('#grid_operating').hide();  
	        });

           }); 	
        </script>
<div id="customer-content" style="position:relative;overflow:auto;">
<div id="body-list"> <!-- begin list -->
   <table id="flexgrid" style="display:none"></table>
   <div id="grid_operating" >
   </div>	
  </div>  <!-- end body-list -->
  <div id="dialog">	
    <div class="dragDiv">  
      <div class="pop_content " id="pop_content" tabindex="0" role="alertdialog">
      <div class="pop_content_load"></div> 
     </div>
    <div>
  </div> <!-- end #dialog -->	

</div> <!-- end customer-content -->

	
	

	