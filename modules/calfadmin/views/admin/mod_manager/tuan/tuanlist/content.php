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
<div id="tuan-content">
   <div id="admin-header">
       列表
       <h1>Lists - 团购列表</h1>
   </div>

<div id="tuan-list">
  <table>
    <tbody><tr>
      <th>团购id</th>
      <th>商品编号</th>
      <th width="300px">商品名称</th>
      <th width="50px">单位</th>
      <th>创建日期</th>
      <th>结束日期</th>
      <th>发起者</th>
      <th>状态</th>
  </tr>

   <?php foreach ($array_data as $key => $value): ?>  	
    <tr>
    <td><?php echo HTML::anchor('/admin/tuan/'.$value['id'],$value['id']) ?></td>
    <td><?php echo $value['product_id'] ?></td>
    <td><?php echo $value['display_name'] ?></td>
    <td><?php echo $value['unit'] ?></td>   
    <td><?php echo $value['create_date']; ?></td>
    <td><?php echo $value['end_date'] ?></td>
    <td><?php echo $value['creator'] ?></td>
    <td><?php echo ($value['is_active']==1) ? '已结束' : '未激活'; ?></td>
 
  </tr>
   <?php endforeach ?>
  
  </tbody>
    </table>


    </div>	
</div>