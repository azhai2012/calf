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
<div id="Hots-content">
   <div id="admin-header">
       管理
       <h1>Hots - 展会管理</h1>
   </div>
<div id="hots-list">
  <table>
    <tbody><tr>
      <th>展会编号</th>
      <th width="300px">会议标题</th>
      <th>创建日期</th>
      <th>结束日期</th>
      <th>发起者</th>
      <th>状态</th>
      <th>编辑</th>

   </tr>

   <?php foreach ($array_data as $key => $value): ?>  	
    <tr>
    <td><?php echo HTML::anchor('/admin/hots/'.$value['id'],$value['id']) ?></td>
    <td><?php echo $value['title'] ?></td>
    <td><?php echo $value['create_date']; ?></td>
    <td><?php echo $value['end_date'] ?></td>
    <td><?php echo $value['creator'] ?></td>
    <td><?php echo ($value['is_active']==1) ? '激活' : '未激活'; ?></td>
    <td><?php echo HTML::anchor('','编辑').' '.HTML::anchor('#','删除'); ?></td>
  </tr>
   <?php endforeach ?>
   <tr>
     <td colspan=9><?php echo HTML::anchor('#','添加'); ?></td> 	
   </tr>
  </tbody>
    </table>


    </div>	
</div>