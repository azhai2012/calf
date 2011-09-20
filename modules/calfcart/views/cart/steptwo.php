<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : cart_two
 *
 * @author Azhai
 * @version \$Id\$
 * @copyright 2011 2011-09-20 
 *
 */
?>

 <div class="cart_two">
      <ul>
        <li>
         <div id="cartItems">
               <h4><?php echo __('商品清单'); ?></h4>
               <div class="cart_detail">
               <div class="b_name">
                 <span class="experience">
                  [<a href="/cart" name="gobackcart"><?php echo __('返回修改购物车'); ?></a>]</span>
                  <span class="news_red" id="cart_items_tips"></span></div>
                  <div id="rpt_cart_items">
                    <ul class="cart_subject">
                      <li class="row1"><?php echo __('商品名称'); ?></li>
                      <li class="row2"><?php echo __('积分'); ?></li>
                      <li class="row3"><?php echo __('单价'); ?></li>
                      <li class="row4"><span title="<?php  echo __('优惠'); ?>"><?php echo __('优惠'); ?></span></li>
                      <li class="row5"><?php echo __('数量'); ?> </li>
                      <li class="row6"><?php echo __('小计'); ?></li>
                    </ul>
                    <div class="cart_general">
                      <ul class="cart_list" >
                     <?php foreach ($array_data['lists'] as $key => $value): ?>
                      <li class="row0"><?php echo $value['id']; ?></li>
                      <li class="row1" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></li>
                      <li class="row7"><span></span></li>
                      <li class="row2"><?php echo $value['numtotal']; ?></li>
                      <li class="row3">￥<?php echo $value['price']; ?></li>
                      <li class="row4"><?php echo $value['dis_price'] ?></li>
                      <li class="row5"><?php echo $value['num']; ?></li>
                      <li class="row6">￥<?php echo $value['amount']; ?></li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                    
                     <div class="clearfix"></div>
                     <span class="price_charge_border"></span>
                     </div>
                      <div class="clearing_expand clearfix" > 
                        <div id="div_invoice" class="clearing_expand_info">
                         <span class="title"><a href="javascript:for_99click();" id="invoice_bar_close" name="invoice" class="close"><?php echo __('展开'); ?></a>
                          <a id="a_invoice" href="javascript:for_99click();"><?php echo __('备注信息'); ?></a>
                         </span>
                         <div class="clearfix"></div>
                             <span class="objhide" id="span_invoice">
                                <p class="remarks"><label><?php echo __('备注内容：'); ?></label><input id="remarks" name="remarks" value="" /></p>
                                <p class="remark_btn"><span class="btn"><a id="invoice_submit" name="submitinvoice" href="javascript:for_99click();"><?php echo __('确认'); ?></a></span>
                                   <span class="wrong" id="span_invoice_tips"></span></p>
                             </span>
                         </div>
                         <div id="div_coupon__money" class="clearing_expand_info">
                             <span class="title">
                                <a href="javascript:for_99click();" id="coupon_close_bar" name="usecardcoupon" class="close"><?php echo __('展开'); ?></a>
                                <a id="span_coupon_tips" style="cursor:pointer;" href="javascript:for_99click();"><?php echo __('使用礼品卡/礼券'); ?></a>
                             </span>
                             <div class="clearfix"></div>
                              <p class="objhide" id="span_gift">
                                <span class="gift_info"><?php echo __('卡号：'); ?><input type="text" class="gift_input jihuo_input" id="inp_coupon_number"></span>
                                <span class="gift_info"><?php echo __('密码：'); ?><input id="inp_coupon_pwd" type="text" class="gift_input jihuo_input"></span>
                                <span class="gift_btn"><span class="btn"><a href="javascript:for_99click();" id="btn_coupon_bind"><?php echo __('激活'); ?></a></span></span>
                                <span class="wrong" id="span_invoice_tips"></span>
                              </p>
                             
                         </div>
                       </div>
                      </div>
                   
                   <div class="price_charge">
              
                        <p class="p_charge1">
                           <?php echo __('商品金额总计：'); ?><span>￥<span id="sp_bargin_total"><?php echo $array_data['def_total']; ?></span></span>
                          </p>
                    
                        <p class="p_charge1" id="p_coupon_amount">
                        <span id="sp_coupon_amount_tips"><?php echo __('礼券冲抵：'); ?></span>
                        <span id="sp_coupon_amount" class="p_charge4_span">
                           <span class="objhide_0">-</span>￥<?php echo $array_data['coupon']; ?></span>
                      </p>
                      <p class="charge_total"><?php echo __('您需支付：'); ?><span class="c_red">￥<span id="sp_payable"><?php echo $array_data['total']; ?></span></span></p>
                      </div>
                    </div>
                    
                </div>
                 <div class="clearfix"></div>
                    
	                <div class="order_submit"><a href="/cart/step/3" id="submit" name="submit"><?php echo __('提交订单'); ?></a></div>
         </li>  
              
      
      </ul>
     
    </div>