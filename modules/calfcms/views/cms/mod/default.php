<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-11 
 * @copyright 2012 
 *
 */
?>
<div id="body-content" style="position:relative;overflow:auto;">
   <div id="body-list"> <!-- body list --> 
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
