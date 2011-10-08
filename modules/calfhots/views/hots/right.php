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
<div class="hots-extra">
 <h3><?php echo __('会展展商热销排行榜'); ?></h3> 
 <ul>
   <?php foreach ($array_data['s_list'] as $key => $value): ?>
     <li>
	     <span class="h_no"><?php echo ($key + 1); ?></span>
	     <span class="h_name"><a href="<?php echo $value['url']; ?>"> <?php echo $value['name']; ?></a></span>
	     <span class="h_amount"><?php echo $value['amount']; ?></span>
	 </li> 
   <?php endforeach; ?>	
 </ul>
</div>  

<div class="hots-extra">
   <h3><?php echo __('会展商品热销排行榜'); ?></h3> 
   <ul>
      <?php foreach ($array_data['p_list'] as $key => $value): ?>
         <li>
	       <span class="h_no "><?php echo ($key + 1); ?></span>
	       <span class="h_name"><a href="<?php echo $value['url']; ?>"><?php echo $value['name'];?></a></span>
	       <span class="h_amount"><?php echo $value['amount']; ?></span>
	     </li>
	  <?php endforeach; ?>
   </ul>
</div>