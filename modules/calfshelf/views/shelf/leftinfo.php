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
<div class="recommend-panel">
  <div class="hot-store-rank ald">
   <h3 class="hd"><?php echo __('热销店铺排行'); ?></h3>
    <ul class="hot-store-list bd clearfix">
       <?php foreach ($array_data as $key => $value): ?>
       <li class="hot-store clearfix">
         <h4 class="hot-store-title">
         <a href="<?php echo $value['url']; ?>" title="<?php echo $value['name']; ?>" target="_blank"><?php echo $key.'.'.$value['name'] ?></a></h4>
         <p class="hot-store-weeksale"><?php echo __('周销量：'); ?><strong><?php echo $value['week_sale_count']; ?></strong></p>
         <p class="hot-store-weeksale"><span><?php echo $value['other_info']; ?></span></p>
       </li>
       <?php endforeach; ?>
    </ul>
  </div>
</div>