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
         <h2><?php echo __('我的详细订单'); ?></h2> 
         <p class="o_t"><b><?php echo __('订单号：').$this->_id ?>'</b>(配送完毕)</p>
         <ul class="order_flow">
	   <?php foreach ($array_data['flows'] as $key => $value): ?> 
              <li><?php echo $value['date'].' '.$value['content']; ?></li>
           <?php endforeach; ?>
         </ul>
         
         <p class="gifts_title"><b>赠品信息</b> <span style="float:right">* 请在验收商品时，核对赠品信息。</span></p>
         <ul class="gifts_info">
	   <?php foreach ($array_data['gifts'] as $key => $value): ?>
             <li><?php echo $value['content'] ?></li>
           <?php endforeach; ?> 
         </ul>
         <p class="o_l_t" ><b>详细订单信息</b></p>
         <ul class="o_list">
	    	
            <li class="order_view_title">
                <span class="list_name">商品名称</span>
                <span class="list_batch">批号</span>
                <span class="list_price">单价</span>
                <span class="list_num">数量</span>
                <span class="list_amount">金额</span>
                <span class="list_time">下单时间</span>
             </li>
             <?php foreach ($array_data['orders'] as $key => $value): ?>    
              <li class="order_view_list">
                <span class="list_name"><?php echo $value['name']; ?></span>
                <span class="list_batch"><?php echo $value['batch']; ?></span>
                <span class="list_price"><?php echo $value['price']; ?></span>
                <span class="list_num"><?php echo $value['number']; ?></span>
                <span class="list_amount"><?php echo $value['amount'] ?></span>
                <span class="list_time"><?php echo $value['date']; ?></span>
             </li>  
             <?php endforeach; ?> 
            
             <div class="btm"></div>  
            <li><div class="o_total">商品记录总数：<strong><?php echo $array_data['total']['rowcount']; ?></strong>&nbsp条记录，商品金额合计：￥
	        <b><?php array_data['total']['totalamount'] ?></b>元</div></li> 
         </ul>
           <div class="clearfix"></div>
           <p class="o_l_o" ><b>附带信息：<?php echo $array_data['total']['infos']; ?></b></p>
        
        </div>