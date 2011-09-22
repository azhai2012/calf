<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-21 
 * @copyright 2011 
 *
 */
?>
<div class="cate-item">
	<ul>
	<li>
	  <a href="#" onclick="" class="c_t"><b class="icon blueLeft"></b><?php echo __('所有商品分类'); ?></a>
	  <ul>
	    <li>
	      <strong class="selected"><?php echo __('常用商品区'); ?></strong>
	      <ul>
	       <?php foreach ($array_data['common_area'] as $key => $value): ?>
	       
	        <li> <a title="<?php echo $value['name'].'('.$value['product_count'].')';?>" href="<?php echo $value['url'] ?>" onclick=""><?php echo $value['name']; ?><b>(<?php echo $value['product_count']; ?>)</b></a></li>
           <?php endforeach; ?>         
          </ul>
         </li>
	  </ul>
	    <ul class="j_groupCon" style="height: auto; ">
			<li>
				<strong class="selected"><?php echo __('按剂型分类'); ?></strong>
				<ul class="j_groupClose" data-height="231" style="height: 168px; ">
					<?php foreach ($array_data['category_area'] as $key => $value): ?>
				 <li> <a title="<?php echo $value['name'].'('.$value['product_count'].')';?>" href="<?php echo $value['url'] ?>" onclick=""><?php echo $value['name']; ?><b>(<?php echo $value['product_count']; ?>)</b></a></li>
					<?php endforeach; ?>
				</ul>
		  	</li>
		</ul>
	   </li>
    </ul>
</div>

<?php  echo $get_shelf_left_shop_info; ?>