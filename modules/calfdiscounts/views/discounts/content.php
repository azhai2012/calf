<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-26 
 * @copyright 2011 
 *
 */
?>

<div id="discounts_list" class="clearfix">
           <div id="dnav"><?php echo __('您现在的位置：折扣区'); ?></div>
              <div class="list_detail clearfix" name="">
               <ul>
                	<li class="li_first li_line">
	               	   <span class="first"><?php echo __('近日促销榜'); ?></span>
		               <span class="blue"><a href="#"><?php echo __('近24小时促销榜'); ?></a></span>
		               <span class="blue"><a href="#"><?php echo __('近7日促销榜'); ?></a></span>
		               <span class="blue"><a href="#"><?php echo __('近30日促销榜'); ?></a></span>
	                </li>
	               <li class="li_first li_line">
	               	   <span class="first"><?php echo __('即将结束促销'); ?></span>
		               <span class="blue"><a href="#"><?php echo __('近24小时结束的促销商品'); ?></a></span>
		               <span class="blue"><a href="#"><?php echo __('近3天结束的促销商品'); ?></a></span>
		            </li>
                </ul>
          </div>
           <div id="discount_context"> <!-- begin discount_context -->
              <div class="left"> <!-- begin left -->
                <div class="dis_new_list clearfix">  <!-- begin newlist -->  
		<script src="/media/js/jquery-corner.js" type="text/javascript" async=""></script>
		<script>$(".dis_new_list li,.left_area").corner("5px");</script>
	
	         <?php foreach ($array_data as $key => $value): ?>
	         <div class="left_area"> <!-- begin left area -->
               	 <h3><?php echo $value['mod']['title']; ?></h3>
	         <ul class="clearfix">
		  <?php foreach ($value['lists'] as $sub_key => $sub_value): ?>
	             <li>
	               <a href="#"><img src="<?php echo $sub_value['img']; ?>" alt=""></a>
	             <span class="name"><?php echo $sub_value['name']; ?></span>
	             <span class="disinfo"><?php echo $sub_value['content']; ?></span>
	             <span class="price">单价：<b><?php echo $sub_value['price']; ?></b>元/盒</span>
	             <span class="enddate">截至日期：<?php echo $sub_value['end_at']; ?></span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	           <?php endforeach; ?>
	          </ul>
	          </div> <!-- end left area -->
	         <?php endforeach; ?>
                </div> <!-- end new list -->
              </div>  <!-- end left -->
              <div class="right"> <!-- begin right --> 
              </div> <!-- end right -->
           </div> <!-- end discount -->
    </div>