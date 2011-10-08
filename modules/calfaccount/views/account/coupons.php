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

<div class="coupons clearfix">
      <h2>我的礼品卡</h2>
      <div class="giftcards_hint">
   <?php echo __('您当前共有'); ?> 
   <a href="#"><b><?php echo  $array_data['cartcount']; ?></b></a> 张可用礼券，礼品卡帐户可用金额为
   <span class="hot">￥<?php echo $array_data['amount']; ?></span>
   <a href="#">[查看明细]</a>，
  
</div>
<div class="cards">
  <p><span><label>卡号：</label></span><input name="cardid" id="cardid" value="" />
  <span><label>密码：</label></span><input type="password" name="cardpsw" id="cardpsw" value="" />
  <span></span><input type="button" name="cardactive" id="cardactive" value="激活" /></p>
</div>                     
</div>