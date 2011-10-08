<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @version \$Id\$
 * @copyright 2011 2011-09-20 
 *
 */
?>
<div class="cart_three">
<div class="cart_wrapper">
<div class="success_frame money_notice">
   <p class="price"> <?php echo __('订单').$array_data['order_no'].__('已提交。'); ?>
   <?php  echo __('预计').$array_data['day'].__('天内发货。'); ?>
   <a href="/account/order/<?php echo $array_data['order_no']; ?>" target="_blank"><?php echo __('查看订单状态'); ?>&gt;&gt;</a></p>
   <div class="information3">
      <p><?php echo __('您需要在收货时向送货员支付'); ?><span>￥<?php echo $array_data['total']; ?></span></p>
   </div>
      <p class="information_goon"></p>
      <p class="success_footer">
      <span>* <?php echo __('您可以在“'); ?> <a href="/account/order/<?php echo $array_data['order_no']; ?>" target="_blank">我的订单</a><?php  echo      __('”中查看或取消您的订单，由于系统需进行订单预处理，您可能不会立刻查询到刚提交的订单'); ?></span>
      </p>
  </div>
  </div>
 </div>
