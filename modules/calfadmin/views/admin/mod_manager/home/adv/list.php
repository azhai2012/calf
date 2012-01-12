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
<div id="adv-content">
   <div id="admin-header">
       管理
       <h1>Advertising - 广告管理 - 列表  </h1>
   </div>
    <div id="adv-list">
    <table>
    <tbody>
    <tr>
      <th>栏目编号</th>
      <th>栏目标题</th>
      <th>栏目内容</th>
      <th>创建日期</th>
      <th>生效日期</th>
      <th>失效日期</th>
      <th>状态</th>
  </tr>
  <?php foreach ($array_data as $key => $value): ?> 
   <tr>
    <td><?php echo $value['id']; ?></td>
    <td><?php echo $value['title']; ?></td>
    <td><?php echo $value['content']; ?></td>
    <td><?php echo $value['create_date']; ?></td>
    <td><?php echo $value['begin_date']; ?></td>
    <td><?php echo $value['end_date']; ?></td>
    <td><?php echo ($value['active']===1) ? '激活' : '未激活'; ?></td>
  </tr>
  <?php endforeach ?>
  </tbody>
    </table>
    </div>
</div>