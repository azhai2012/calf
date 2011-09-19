<?php
/*
 * 功能：显示购物车的视图
 * @author zhaibob
 * @copyright 2011
 * 
 */ 
?>
<div id="cartlist"> 
<div id="nav">您现在的位置：<a href="/cart">购物车</a> >> 步骤 <?php echo $id;?></div>

<?php if ($step_id == 1): ?>
   <div id="cart_context"> <!-- begin cart_context -->
       <div class="cart_nav_setp_one  clearfix" id="step_one">
           <span class="location"> <?php echo __("1 我的购物车"); ?></span>
           <span><?php echo __("2 确认购物车信息"); ?> </span>
           <span><?php echo __("3 成功提交订单"); ?></span>
       </div>
       <div class="side_content">
          <?php echo $get_cart_content_step_one; ?>
       </div>  <!-- end side_content -->
   </div> <!-- end cart_context -->
<?php  endif; ?>
<?php if ($step_id == 2):?>
    <div id="cart_context"> <!-- begin cart_context -->
        <div class="cart_nav_setp_two  clearfix" id="step_two">
            <span> <?php echo __("1. 我的购物车"); ?></span>
            <span class="location"> <?php echo __("2. 确认购物车信息"); ?></span>
            <span><?php echo __("3. 成功提交订单"); ?></span>
        </div>
        <div class="side_content">
            <?php echo $get_cart_content_step_two; ?>
        </div>  <!-- end side_content -->
	</div> <!-- end cart_context -->
<?php endif; ?>
<?php if ($step_id == 3): ?>
     <div id="cart_context"> <!-- begin cart_context -->
          <div class="cart_nav_setp_three  clearfix" id="step_three">
               <span> <?php echo __("1. 我的购物车"); ?></span>
               <span> <?php echo __("2. 确认购物车信息"); ?></span>
               <span class="location"><?php echo __("3. 成功提交订单"); ?></span>
          </div>
         <div class="side_content">
            <?php echo $get_cart_content_step_three; ?>
         </div>  <!-- end side_content --> 
     </div> <!-- end cart_context -->
<?php endif; ?>     
</div>