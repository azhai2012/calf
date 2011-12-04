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
 <h1><?php echo $navdata['modname'] ?></h1>
   <div>
       <ul class="mod_nav">
       <?php foreach ($navdata['lists'] as $key => $value): ?>
	<li>
	  <div class="fbutton" style="margin-left: 2px; ">
	    <div>
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