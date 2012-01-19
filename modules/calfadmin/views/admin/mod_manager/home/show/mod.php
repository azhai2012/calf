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
<div id="show-content">
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
   <div id="mod-list">
  <table class="download">
    <tbody>
      <tr>
        <td>
	 <table>
	     <tbody> 
             <tr>
	       <th><label>模块名称：</label></th>
               <td> <select name="mod_name" id="mod_name" multiple onchange="Mods.SelectMods(this);" size="1">
               	<?php foreach ($data as $key => $value): ?>
                  <option value="<?php echo $value['mod'] ?>"><?php echo $value['mod_name'] ?></option>
	       	<?php endforeach ?>
               </select>
	      </tr>
            </tbody> 
          <table> 
        <td>
      </tr>
      <tr>
        <th></th>
        <td>
         <div id="mod_lists"></div> 	
        </td>
      </tr>	
     </tbody>
    </table>
    </div>     
</div>
</div>