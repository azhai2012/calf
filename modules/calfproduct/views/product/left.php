<?php
/*
 * 功能模块：calfproduct
 * 路径：/modules/calfproduct/view/product
 * 说明：商品信息的左边栏视图
 * @author zhaibob
 * 创建日期：2011.9.16 
 */
?>
<div class="side_title"><h2><span><?php echo __('购买本商品的顾客还买过');?></span></h2></div>
  <div class="side_content clearfix"> <!-- begin side_content -->
  <ul >
     <?php foreach ($array_data as $key => $value):?>
     <li class="fore">
	   <div class="p-img">
		<a href="<?php echo $value['url']; ?>">
		 <img src="<?php echo $value['img']; ?>" width="100" height="100"
		      onerror="this.src=\'/media/images/none_150.gif\'" alt="<?php echo $value['rate_content']; ?>"></a>
	   </div>
	   <div class="rate">
	       <strong><?php echo $value['rate_strong'].__('会买');?></strong>
	       <?php echo $value['rate_content'];?>
	   </div>
		<div class="p-price"><strong><?php echo $value['price']; ?></strong></div>
     </li>
     <?php endforeach; ?>   
   </ul>
  </div>
<div class="clearfix"></div>