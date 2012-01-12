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
       管理 
       <h1>Manager - 商品管理</h1>
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
      <th>编辑</th>

   </tr>

   <?php $array_data = array(
	  array('id' =>1,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	  array('id' =>2,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	  array('id' =>3,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	  array('id' =>4,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	  array('id' =>5,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	  array('id' =>6,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	); ?>

   <?php foreach ($array_data as $key => $value): ?>  	
    <tr>
    <td><?php echo HTML::anchor('/admin/tuan/'.$value['id'],$value['id']) ?></td>
    <td><?php echo $value['product_id'] ?></td>
    <td><?php echo $value['display_name'] ?></td>
    <td><?php echo $value['unit'] ?></td>   
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