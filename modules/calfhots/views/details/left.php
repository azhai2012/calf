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
 <div class="s_info">
     <h3><?php echo __('展商信息'); ?></h3>
     <ul>
        <li><span><?php echo __('参展商名称'); ?>：</span><span><?php echo $array_data['s_info']['name']; ?> </span></li>
        <li><span><?php echo __('参展商地址'); ?>：</span><span><?php echo $array_data['s_info']['address']; ?></span></li>
        <li><span><?php echo __('业务留言'); ?>：</span><span></span></li>
        <li><span><?php echo __('服务电话'); ?>：</span><span><?php echo $array_data['s_info']['contact']; ?></span></li>
     </ul>
    </div>
     <div class="s_info">
      <h3><?php echo __('会展畅销商品排行'); ?></h3>
      <ul>
       <?php foreach ($array_data['s_list'] as $key => $value): ?>
       <li>
	     <span class="p_no"><?php echo ($key + 1); ?></span>
	     <span class="p_url"><a href="<?php echo $value['url']; ?>"> <?php echo $value['name']; ?></a></span>
	     <span class="p_amount"><?php echo $value['amount']; ?></span>
	   </li>
       <?php endforeach; ?>
      </ul>
 </div>