<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
?>
<?php foreach ($array_data['lists'] as $key => $value): ?>
   <li class="product">
         <div class="productInfo">
                <div type="hidden" id="pid" value="<?php echo $value['id'];?>"></div>
                <div class="product-img">
	                <a href="<?php echo $value['url']; ?>" target="_blank" onclick="">
                                    <img src="<?php echo $value['img']; ?>"></a>
                </div>
			    <p class="product-price clearfix">
		          <strong class="price"><?php echo $value['price']; ?></strong>
	            </p>
	            <p class="default-price"><span></span><?php echo $value['default_price'];?> </p>
	       <h3 class="product-title" >
		      <a href="<?php echo $value['url']; ?>" target="_blank" onclick=""><?php echo $value['name']; ?></a>
                            </h3>
	            <p class="product-spec"><?php echo __('规格'); ?>: <?php echo $value['spec']; ?></p>
	            <p class="product-dis"><b>[<?php echo __('促销'); ?>]</b>: <strong><?php echo $value['discount']; ?></strong></p>
	            <p>
	            <?php  echo __('数量'); ?>：<input id="p_sum" value="10"></p>
	            <p class="aclick">
	             <a href="javascript:void();" id="btn_buy"><?php echo __('订购'); ?></a>
	             <a href="javascript:void();" id="btn_wishlist"><?php echo __('收藏'); ?></a>
	             <a href="javascript:Compare.getcompare(\'<?php echo $value['id']; ?>\');" id="btn_compare"><?php echo __('对比'); ?></a>
	            </p>
	    </div>
     </li> 
 <?php endforeach; ?>