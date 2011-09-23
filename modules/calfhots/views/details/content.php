<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
?>
<div id="hots_list" class="clearfix">
           <div id="hnav"><?php echo __('您现在的位置'); ?>：<a href="/hots"><?php echo __('展会区'); ?></a> </div>
           <div id="hots_view_context"> <!-- begin hots_context -->
              <div class="left"> <!-- begin left -->
               <?php echo $get_hots_view_left_content; ?>
              </div>  <!-- end left -->
              <div class="right"> <!-- begin right --> 
               <?php echo $get_hots_view_right_content; ?>
      </div> <!-- end right -->
  </div> <!-- end account_context -->
</div>