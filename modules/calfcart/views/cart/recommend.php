<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 购物车商品推荐功能的视图
 *
 * @author Azhai
 * @version \$Id\$
 * @copyright 2011 2011-09-20 
 *
 */
?>
<div class="cart_recommend" name="recomzone" style="display: block; "><!-- begin cart_recommend -->
   <h2><span><?php echo __('根据您购物车中的商品，您可能还关住以下商品：'); ?></span> </h2>
   <div id="cart_recommend_List">  <!-- begin cart_recommend_list -->   
      <div class="cart_promotions_info"> <!-- begin cart_promotions_info -->      
         <ul class="cart_promotions_info_ul clearfix">
           <?php foreach ($array_data as $key => $value): ?>
            <li>
               <p class="pic">
                <a name="productpic_alsobuy" href="<?php echo $value['url'] ?>" target="_blank" title="<?php echo $value['name']; ?>">
                <img src="<?php echo $value['img']; ?>"></a>
               </p>
               <p class="name">
                <a name="product_alsobuy" href="#" target="_blank" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
               </p>
                <p class="price"><span class="price_m"><s>￥<?php echo $value['price_def']; ?></s></span>
	              <span class="price_d">￥<?php echo $value['price']; ?></span>
	            </p>
                <p class="buy">
	              <a name="movetoshoppingcart_alsobuy" href="/cart/<?php echo $value['id']; ?>" onclick=""><?php echo __('放入购物车'); ?></a> 
	            </p>
            </li>
            <?php endforeach; ?>
         </ul>  
        </div> <!-- end cart_promotions_info -->
      </div><!-- end cart_recommend_list -->
</div> <!-- end cart_recommend -->


