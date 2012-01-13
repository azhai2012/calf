<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-12-03 
 * @copyright 2011 
 *
 */
?>
 <div id="admin-header">
 <h1><div  style="float:left;padding-top:3px;padding-bottom:2px;"><?php echo $navdata['modname'] ?></div><div style="float:left;padding-left:5px;padding-top:5px;font-size:10px" id='action_title'></div></h1>
   <div>
       <ul class="mod_nav">
       <?php foreach ($navdata['lists'] as $key => $value): ?>
	<li>
	  <div class="fbutton">
	    <div style="padding-left:5px;padding-top:2px;padding-right:5px;border:0;">
	      <span style="background-image: url(<?php echo $value['img'] ?>); 
	       background-attachment: initial; background-origin: initial; background-clip: initial; 
	       background-color: initial; padding-left: 20px; padding-right:5px;
	       background-position: 0% 50%; background-repeat: no-repeat no-repeat; ">
	      <a href="<?php echo $value['url'] ?>"  onclick="<?php echo $value['click']  ?>"><?php echo $value['name'] ?></a> 
	     </span>
	    </div>
	   </div>
	<?php endforeach ?>
   </ul>
</div>
</div>