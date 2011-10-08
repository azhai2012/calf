<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-24 
 * @copyright 2011 
 *
 */
?>

<div class="pointslist clearfix">
      <h2>我的积分</h2>
  <div class="p_total"><span>您当前的积分：<b><?php echo $array_data['status']['total']; ?></b></span><span class="action"><a href="#">查看积分兑换活动</a></span> </div>	
  <div class="p_list" >
     <ul>
      <li class="p_title">
                <span class="list_date">日期</span>
                <span class="list_gain">获得积分</span>
                <span class="list_useed">已使用积分</span>
                <span class="list_directions">详细说明</span>
             </li>
           <?php foreach ($array_data['lists'] as $key => $value): ?>
             <li id="p_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
               <span class="list_date" title=""><?php echo $value['date']; ?></span>
               <span class="list_gain" title="有赠品"><?php echo $value['gain'] ?></span>
               <span class="list_useed" id="list_total"><?php echo $value['useed'] ?></span>
               <span class="list_directions"><?php echo $value['description']; ?></span>
              </li>
          <?php endforeach; ?>
     </ul>
  </div>   
</div>