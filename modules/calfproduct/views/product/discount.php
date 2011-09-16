<?php
/*
 * 功能模块：calfproduct
* 路径：/modules/calfproduct/view/product
* 说明：商品信息的右边栏视图--促销
* @author zhaibob
* 创建日期：2011.9.16
*/
?>

<!-- 单品促销 -->

<?php if ($single_bool): ?>
<div class="p_discount clearfix">
	<h3>优惠活动</h3>
	<div class="dd clearfix" id="dd">
		<h5>
			<span></span>
		<?php echo __('单品促销');?> </h5>
		<div class="ddc">
		<?php echo $single_content; ?></div>
	</div>
<?php elseif ($compose_bool):?>
      <div class="p_discount clearfix">
      <h3>优惠活动</h3>
<?php endif; ?>		

<!-- 显示组合套餐 -->
<?php if ($compose_bool): ?>
    <div class="tabcon" id="group" style="display: block; "> <!-- begin tabcon -->
       <h5><span></span><?php echo __('组合套餐'); ?></h5>
       <div class="master"> <!-- master -->
         <div class="p-img">
           <a href="#" target="_blank">
           <img src="<?php echo $compose_master_img;?>" 
                           onerror="this.src=\'/media/images/none_150.gif\'" width="100" height="100">
           </a>
         </div>
         <div class="p-name">
          <a href="<?php echo $compose_master_url;?>" target="_blank"><?php echo $compose_master_name; ?></a>
         </div> 
         <div class="icon-add"></div>
       </div> <!-- end master -->
     <div class="suits">  <!--begin suits  -->
         <ul class="list">
           <?php foreach ($compose_other as $key => $value): ?>
		     <li>
                 <div class="p-img">
                    <a href="<?php echo $value['url'];?>" target="_blank">
                        <img width="100" height="100" onerror="this.src=\'/media/images/none_150.gif\'" 
                           src="<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>">
                    </a>
                 </div>
                 <div class="p-name">
                    <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['name'];?></a>
                 </div>
                 <div class="choose">
                     <input type="checkbox" value="<?php echo $value['id']; ?>" checked="true" onclick="buyGCombineBuy(this)">
                            <span class="p-price"><strong><?php echo $value['price']; ?></strong></span>
                          </div>
                       </li>';
			<?php endforeach; ?>
	      </ul>
       </div> <!-- end suits -->
        <div class="infos" onclick=""> <!-- begin infos -->
                         <div class="p-name">
                           <a href="#"><?php echo __('购买最佳组合');?></a>
                         </div>
                         <div class="pprice" id="buy-wmeprice" value="520.80"><?php echo __('总价：');?><strong>￥<?php echo $array_total_data_total; ?></strong></div>
                         <div class="p-market" id="buy-wmaprice" value="539.00"><?php echo __('总定价：'); ?><del>￥<?php echo $array_total_data_default_total; ?></del></div>
                         <div class="p-save" id="buy-wmaprice" value="18.20">节省：￥'<?php echo $array_total_data_save_money; ?></div>
                         <div class="btns"><a id="buy-groupgoods" class="btn-buy" href="#"><?php echo __('购买组合');?></a></div>
         </div> <!-- end infos -->
     </div> <!-- end tabcon -->
             
  <?php endif; ?>

  <?php if ($compose_bool || $single_bool):?>
			</div>
            <div class="clearfix"></div>
  <?php endif; ?>    
            
            