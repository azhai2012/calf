<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-05 
 * @copyright 2011 
 *
 */
?>
<div id="product-content">
   <div id="admin-header">
       列表
       <h1>Order Lists - 订单列表 </h1>
   </div>
<div id="order-list">
  <table>
    <tbody><tr>
      <th>订单编号</th>
      <th width="300px">客户名称</th>
      <th width="50px">商品数</th>
      <th>金额</th>
      <th>创建日期</th>
      <th>状态</th>
   </tr>
	
   <?php foreach ($array_data as $key => $value): ?>  	
    <tr>
    <td><?php echo HTML::anchor('/order/view/'.$value['id'],$value['id']) ?></td>
    <td><?php echo $value['customer_name'] ?></td>
    <td><?php echo $value['rowcount'] ?></td>   
    <td><?php echo $value['amount']; ?></td>
    <td><?php echo $value['create_date'] ?></td>
    <td><?php echo ($value['flows']==1) ? '执行' : '未执行'; ?></td>
  </tr>
   <?php endforeach ?>
   <tr>
     <td colspan=6><?php echo HTML::anchor('#','刷新'); ?></td> 	
   </tr>
  </tbody>
    </table>


    </div>	
</div>