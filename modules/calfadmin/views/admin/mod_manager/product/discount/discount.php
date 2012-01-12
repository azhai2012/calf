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
       促销
       <h1>Discount - 促销管理 </h1>
   </div>
  <div id="product-discount-list">
  <table>
    <tbody><tr>
      <th>商品编号</th>
      <th width="300px">商品名称</th>
      <th width="50px">单位</th>
      <th>创建日期</th>
      <th>结束日期</th>
      <th>促销信息</th>
      <th>状态</th>
      <th>编辑</th>

   </tr>
   	
   <?php foreach ($array_data as $key => $value): ?>  	
    <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['display_name'] ?></td>
    <td><?php echo $value['unit'] ?></td>   
    <td><?php echo $value['create_date']; ?></td>
    <td><?php echo $value['end_date'] ?></td>
    <td><?php echo $value['infos'] ?></td>
    <td><?php echo ($value['is_active']==1) ? '激活' : '未激活'; ?></td>
    <td><?php echo HTML::anchor('','编辑').' '.HTML::anchor('#','删除'); ?></td>
  </tr>
   <?php endforeach ?>
   <tr>
     <td colspan=8><?php echo HTML::anchor('#','添加'); ?></td> 	
   </tr>
  </tbody>
    </table>


    </div>	
</div>