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
 <div class="myquestion clearfix">
			     <h2>我的反馈</h2>
			     <ul class="question_title">
			       <li class="lst_title">
			         <span class="q_date">日期</span>
			         <span class="q_title">问题内容</span>
			         <span class="q_operation">操作</span>
			       </li>
		 <?php foreach ($array_data as $key => $value): ?>
		  <li id="info_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
	               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
	                 <span class="q_date"><?php echo $value['date']; ?></span>
		         <span class="q_title" style="text-align:left;"><a href="<?php echo $value['url']; ?>"><?php echo $value['content']; ?></a></span>
			 <span class="q_operation"><a href="#">删除</a></span>
		   </li>
		<?php endforeach; ?>
	 </ul>
</div>