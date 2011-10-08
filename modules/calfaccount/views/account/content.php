<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-24 
 * @copyright 2011 
 *
 */
?>
<div id="account_list">
    <div id="anav"><?php echo __('您现在的位置：').$navtitle; ?></div>
      <div id="account_context"> <!-- begin account_context -->
         <div class="left"> <!-- begin left -->
            <div class="side_content"> <!-- begin side_content -->
	       <?php foreach ($array_data as $key => $value): ?>
	   	  <div class="sidel_title"><h3><?php echo $value['name'] ?></h3> </div>
	          <ul class="content"> 
	               <?php foreach ($value['content'] as $subkey => $subvalue): ?> 
		       <?php  $current= ($subvalue['name']== $active) ?'current':''; ?>    
	               <li><a class="<?php echo $current; ?>" href="<?php echo $subvalue['url'] ?>">
	                    <?php echo $subvalue['title']; ?></a>
	               </li>
	               <?php endforeach; ?>
	          </ul>
	        <?php endforeach; ?>
             </div> <!-- end side_content -->
           </div>  <!-- end left -->
         <div class="right"> <!-- begin right -->
	   <?php echo $func; ?>
	 </div> <!-- end right -->
      </div> <!-- end account_context -->
  </div>