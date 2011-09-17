<?php
/*
 * 功能模块：calfproduct
 * 路径：/modules/calfproduct/view/product
 * 说明：商品信息的右边栏视图
 * @author zhaibob
 * 创建日期：2011.9.16 
 */
?>
<div class="h1_title"> <!-- begin h1_title -->
<h1><?php echo $array_data['name']; ?><span><?php echo __('功能主治:').$array_data['uses']; ?></span></h1>
</div> <!-- end h1_title -->

<div class="property"> <!-- begin property -->
    <div class="wrap"> <!-- begin wrap -->
       <ul class="meta">
		  <li id="StrPrice" class="detail-price"><span><?php echo __('价格:');?></span><strong id="J_StrPrice">￥<?php echo $array_data['price']; ?></strong>元</li>
          <li id="Strpname" class="detail-pname"><span><?php echo __('通用名称：').$array_data['pname']; ?></li>
          <li id="Strsec" class="detail-spec"><span><?php echo __('规格：').$array_data['spec']; ?></li>
          <li id="Strunit" class="detail-unit"><span><?php echo __('单位：').$array_data['unit']; ?></li>
          <li id="Strgroup" class="detail-group"><span><?php echo __('包装：').$array_data['group']; ?></li>
          <li id="Strls" class="detail-ls"><span><?php echo __('批准文号：').$array_data['lsno']; ?></span></li>
       </ul>
       <div class="key">
         <div class="skin naked">
    		<dl class="amount clearfix">
    		  <dt></dt>
    		  <dd><span><?php echo __('数量：');?></span><input id="num" type="text" class="text" value="1"></dd>
    		  <dd class="btn"><a href="/cart/<?php echo $array_data['id'] ?>" class="b_s"><input type="button" id="submit"  value="<?php echo __('放入购物车');?>" /></a>
    				    	<input type="button" id="collection"  value="<?php echo __('收藏');?>" />
    		  </dd>
    		</dl>
		 </div>
        </div>
    </div> <!-- end wrap -->
</div>   <!-- end property -->  

<div class="gallery">  <!-- begin gallery -->
  <!--itemPics-->
    <div class="pics clearfix" style="position:relative;"> 
      <a href="<?php echo $array_images_data[0]['big_image']; ?>"  rel="gal1" id="jprocimg"  title="" > 
      <img src="<?php echo $array_images_data[0]['big_image']; ?>" title="triumph"  style="border: 1px solid #666;width:300px; height:270px;"> 
     </a>  
    </div> 
    <br/>
   <ul id="thumblist" class="clearfix">
      <?php foreach ($array_images_data as $key => $value): ?>
      <?php $active = ($key===0)?'class="zoomThumbActive"':'';?>  
      <li><a <?php echo $active; ?> href="javascript:void(0);"  rel="{gallery: 'gal1',
                                    smallimage:'<?php echo $value['big_image'];?>',largeimage:'<?php echo $value['big_image'];?>'}">
              <img src="<?php echo $value['small_image'];?>">
           </a>
      </li>
      <?php endforeach;?>
    </ul>    
	<script type="text/javascript"> $('a#jprocimg').jqzoom({title:false});</script>
   <!--end of itemPics-->				        
</div> <!-- end gallery -->

<div class="bottom clearfix"><!-- begin bottom --> 
   <div class="b_detail"> <!-- begin b_detail -->
       <?php echo $get_product_discount_content; ?>
       <div class="b_detail_title"><h2><span> 详细功能 </span></h2>
          <?php echo $get_product_info_content; ?>
       </div>
   </div> <!-- end b_detail -->
 </div> <!-- end bottom -->
 <div class="clearfix"></div>
 <?php echo $get_procduct_posts_content; ?>

