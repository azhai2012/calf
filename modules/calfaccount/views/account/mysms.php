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
<div class="mysms clearfix">
	<h2>站内信息</h2>
	   <ul class="info_list">   
	             <li class="info_title">
	                <span class="info_type">信息类别</span>
	                <span class="info_name">主题</span>
	                <span class="info_date">时间</span>
	                <span class="info_operation">操作</span>
	             </li>
	   <?php foreach ($array_data as $key => $value): ?>       
	             <li id="info_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
	               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
	               <span class="info_type" title=""><?php echo $value['type']; ?></span>
	               <span class="info_name" title="主题"><a><?php echo $value['title']; ?></a></span>
	               <span class="info_date" title=""><?php echo $value['date']; ?></span>
	               <span class="info_operation" id="info_operation"><a href="#">删除</a></span> 
	              </li>
	   <?php endforeach; ?>
   </ul>		   
</div>