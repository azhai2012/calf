<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : hots view details
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
?>

<div class="all_discount_info">
       <?php echo $array_data['discounts']['discount_info']; ?>
</div>

<div class="s-filter grid">
    <div class="mode">
        <span><?php echo __('显示'); ?>：</span>
            <a href="#" alt="<?php echo __('列表方式'); ?>" title="<?php echo __('列表方式'); ?>" class="mode-row"><?php echo __('列表方式'); ?></a>
            <a href="#" alt="<?php echo __('图表模式'); ?>" title="<?php echo __('图表模式'); ?>" class="mode-grid"><?php echo __('图表模式'); ?></a>
    </div>
    <div class="taxis">
        <span>排序：</span>
           <a href="#" alt="<?php echo __('按销量排列'); ?>" title="<?php echo __('按销量排列'); ?>" class="def"><?php echo __('销量'); ?><i class="icon"></i></a>
           <a href="#" alt="<?php echo __('按新品排列'); ?>" title="<?php echo __('按新品排列'); ?>" class="fav def"><?php echo __('新品'); ?><i class="icon"></i></a>
           <a href="#" alt="<?php echo __('按价格排列'); ?>" title="<?php echo __('按价格排列'); ?>" class="def"><?php echo __('价格'); ?><i class="icon"></i></a>
           <a href="#" alt="<?php echo __('按收藏排列'); ?>" title="<?php echo __('按收藏排列'); ?>" class="up"><?php echo __('收藏'); ?><i class="icon"></i></a>
           <a href="#" alt="<?php echo __('按人气排列'); ?>" title="<?php echo __('按人气排列'); ?>" class="down"><?php echo __('人气'); ?><i class="icon"></i></a>
    </div>
   
</div>

<div class="list-content grid"> <!-- begin grid -->

 <form action="#" method="post" name="compareForm" target="_blank">
  <input type="hidden" id="" name="isPostfree" value=" 0 ">
  <input type="hidden" id="" name="supportCod" value=" 0 ">
  <input type="hidden" id="" name="loc" value="">
  <input type="hidden" id="" name="fromPath" value="malllist">
  <ul class="product-list">';

   <?php  foreach ($array_data['lists'] as $key => $value): ?>
      <li class="product">
         <div class="productInfo">
                <div type="hidden" id="pid" value="<?php echo $value['id']; ?>"></div>
                <div class="product-img">
	                <a href="<?php echo $value['url']; ?>" target="_blank" onclick="">
                                    <img src="<?php echo $value['img']; ?>"></a>
                </div>
			    <p class="product-price clearfix">
		          <strong class="price"><?php echo $value['price']; ?></strong>
	            </p>
	            <p class="default-price"><span></span><?php echo $value['default_price']; ?></p>
	       <h3 class="product-title" ><a href="<?php echo $value['url']; ?>" target="_blank" onclick=""><?php echo $value['name']; ?></a>
                            </h3>
	            <p class="product-spec"><?php echo __('规格').':'.$value['spec']; ?></p>
	            <p class="product-sum"><b class="pro-sale"><?php echo __('促销');?><strong class="proHigh"><?php echo $value['discount']; ?></strong></b></p>
	            <p>
	            <?php echo __('数量'); ?> ：<input id="p_sum"  value="10"></p>
	            <p class="aclick">
	             <a href="javascript:void();" id="btn_buy"><?php echo __('订购'); ?></a>
	             <a href="javascript:void();" id="btn_wishlist"><?php echo __('收藏'); ?></a>
	             <a href="javascript:Compare.getcompare('<?php echo $value['id']; ?>');" id="btn_compare"><?php echo __('对比'); ?></a>
	            </p>	            
	            
	    </div>
      </li>
   <?php endforeach; ?> 
  </ul>
 </form>
</div> <!-- end grid -->