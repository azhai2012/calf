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
<div class="account clearfix">
 <h2>我的订单</h2>
 <ul class="order_list clearfix">  
     <li> 
     <select id="ordertype" class="sele" name="">
    <option value="1">近一个月订单</option>
    <option value="2">一个月前订单</option>
 </select>
     </li> 
     <li class="order_title">
        <span class="list_input"></span>
        <span class="list_order">订单号</span>
        <span class="list_name">品种数</span>
        <span class="list_way">有无赠品</span>
        <span class="list_total">订单总金额</span>
        <span class="list_status">订单状态</span>
        <span class="list_time"><a href="#" class="arrow_up">下单时间</a></span>
        <span class="list_operation">操作</span>
     </li>
     <?php foreach ($array_data as $key => $value): ?>
	<li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="/account/order/<?php echo $value['no']; ?>" class="list_order"name="orderid"><?php echo $value['no']; ?></a>
		               <span class="list_name" title=""><?php echo $value['ordernumber']; ?></span>
		               <span class="list_way" title="有赠品"><?php echo $value['gifts']; ?></span>
		               <span class="list_total" id="list_total">￥<?php $value['total']; ?></span>
		               <span class="list_status">取消</span>
		               <span class="list_time"><?php echo $value['date']; ?></span>
		               <span class="list_operation" id="list_operation">----</span> 
	</li>
     <?php endforeach; ?>	
    </ul>
    <div class="btm"></div>
</div>