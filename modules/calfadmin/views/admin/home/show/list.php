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
<div id="show-content">
   <div id="admin-header">
       管理
       <h1>Shows - 页面展示管理 - 列表</h1>
   </div>	
    <div id="mod-list">
             <table class="download">
    <tbody><tr>
      <th>模块编号</th>
      <th>模块标题</th>
      <th width="300px">模块语句</th>
      <th>创建日期</th>
      <th>生效日期</th>
      <th>状态</th>
  </tr>
   <?php $array_data = array(
	   array('id' =>1123,'title'=>'新品区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	   array('id' =>1123,'title'=>'保健品区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	   array('id' =>1123,'title'=>'器械区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	   array('id' =>1123,'title'=>'新品区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	   array('id' =>1123,'title'=>'新品区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	   array('id' =>1123,'title'=>'新品区','sql_txt'=>'select * from tablename','create_date'=>'2011-01-01','begin_date'=>'2011-03-01','active'=>1),
	); ?>
   <?php foreach ($array_data as $key => $value): ?>
   <tr>
    <td><?php echo $value['id']; ?></td>
    <td><?php echo $value['title'] ?></td>
    <td><code><?php echo $value['sql_txt'] ?></code></td>   
    <td><?php echo $value['create_date'] ?></td>
    <td><?php echo $value['begin_date'] ?></td>
    <td><?php echo ($value['active']===1) ? '激活' : '未激活' ; ?></td>
  </tr>
  <?php endforeach ?> 
 
  </tbody>
    </table>
    </div>     
</div>