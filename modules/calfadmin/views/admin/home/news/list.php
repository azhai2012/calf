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
<div id="news-content">
   <div id="admin-header">
       管理
       <h1>News - 新闻管理 - 列表</h1>
   </div>
 <div id="news-list">
 <table >
    <tbody><tr>
      <th>编号</th>
      <th width="300px">新闻标题</th>
      <th>发布日期</th>
      <th>状态</th>
  </tr>

   <?php foreach ($array_data as $key => $value): ?>    	
  <tr>
    <td><?php echo $value['id']; ?></td>
    <td><a href="#"><?php echo $value['name']; ?></a></td>
    <td><?php echo $value['date']; ?></td>
    <td><?php echo ($value['isactive']==1)?'激活':'未激活' ?></td>
   </tr>
   <?php endforeach; ?>    

  <tr><td colspan="5"><a href="javascript:void();" id="news-insert" onclick="News.showAdd();">添加</a></td></tr>
  </tbody>
    </table>
  </div>	
</div>