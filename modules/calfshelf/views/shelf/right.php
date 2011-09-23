<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-22 
 * @copyright 2011 
 *
 */
?>
<!-- begin search; -->
<div class="s-search">
   <div class="search-form">
    <ul>
       <li class="keyword">
          <label for="keyword"><?php echo __('商品：'); ?></label>
             <input id="keyword" name="keyword" type="text" value="">
       </li>
       <li class="price">
         <label for="price"><?php echo __('价格：'); ?></label>
         <input id="price1" name="price1" type="text" class="price" value="">
          <?php echo __('至'); ?>
         <input id="price2" name="price2" type="text" class="price" value="">
       </li>
       <li class="submit">
           <a href="#" class="button"><?php echo __('搜索'); ?></a>
       </li>
     </ul>
   </div>
   <div class="search-result">
      共搜索到<span> <?php echo $array_data['totalcount']['rowcount']; ?> </span>个符合条件的商品。
   </div>
</div>
<!-- end search -->
<!-- begin filter -->		
<div class="s-filter grid">
        <div class="mode">
            <span><?php __('显示：'); ?></span>
                <a href="#" alt="<?php echo __('列表方式'); ?> " title="<?php echo __('列表方式'); ?>" class="mode-row"><?php echo __('列表方式'); ?></a>
                <a href="#" alt="<?php echo __('图表方式'); ?>" title="<?php echo __('图表方式'); ?>" class="mode-grid"><?php echo __('图表方式'); ?></a>
        </div>
        <div class="taxis">
            <span><?php echo __('排序：'); ?></span>
               <a href="#" alt="<?php echo __('按销量排列'); ?>" title="<?php echo __('按销量排列'); ?>" class="def"><?php echo __('销量'); ?><i class="icon"></i></a>
               <a href="#" alt="<?php echo __('按新品排列'); ?>" title="<?php echo __('按新品排列'); ?>" class="fav def"><?php echo __('新品'); ?><i class="icon"></i></a>
               <a href="#" alt="<?php echo __('按价格排列'); ?>" title="<?php echo __('按价格排列'); ?>" class="def"><?php echo __('价格'); ?><i class="icon"></i></a>
               <a href="#" alt="<?php echo __('按收藏排列'); ?>" title="<?php echo __('按收藏排列'); ?>" class="up"><?php echo __('收藏'); ?><i class="icon"></i></a>
               <a href="#" alt="<?php echo __('按人气排列'); ?>" title="<?php echo __('按人气排列'); ?>" class="down"><?php echo __('人气'); ?><i class="icon"></i></a>
        </div>
        <div class="dis">
           <span><?php echo __('筛选'); ?>：</span>
             <input type="checkbox" id="disp" /><label title="<?php echo __('促销'); ?>" for="disp"><?php echo __('促销'); ?></label>
             <input type="checkbox" id="newp" /><label title="<?php echo __('新品'); ?>" for="newp"><?php echo __('新品'); ?></label>
             
        </div>
    </div>
<!-- end filter -->
<!-- begin grid -->
<div class="list-content grid">
    
     <form action="#" method="post" name="compareForm" target="_blank">
      <input type="hidden" id="" name="isPage" value="1">
      <input type="hidden" id="" name="maxPage" value="10">
      <input type="hidden" id="" name="supportCod" value=" 0 ">
      <input type="hidden" id="" name="loc" value="">
      <input type="hidden" id="" name="fromPath" value="malllist">
      <ul class="product-list">
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
      </ul>
      <div id="page">
      	<a href="javascript:Compare.Append(2);" >继续浏览</a>
      </div>
     </form>
     <div id="top" style="position:fixed;bottom:30px">
	  	<a href="javascript:Compare.Gotop();" ><span>返回顶部</span></a>
     </div>
    </div>
<!-- end grid -->
