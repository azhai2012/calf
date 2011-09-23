<?php
/*
 * 功能：展会视图
 * @author zhaibob
 * @date 2011-09-19
 */
?>
<div id="hots_list"> <!-- begin hots_list -->
    <div id="hnav"><?php echo __('您现在的位置')?>：<a href="/hots"><?php echo __('展会区'); ?></a></div>
      <div id="hots_context"> <!-- begin hots_context -->
        <div class="left clearfix" style="width:720px;float:left;"> <!-- begin left -->
           <?php  echo $get_hots_left_content; ?>
         </div>  <!-- end left -->
         <div class="right" style="float:left"> <!-- begin right -->
	       <?php echo $get_host_right_content; ?>
      </div> <!-- end right -->
   </div> <!-- end hots_context -->
</div>


