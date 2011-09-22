<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : [tuan] left view 
 *
 * @author Azhai
 * @date 2011-09-22 
 * @copyright 2011 
 *
 */
?>
<?php foreach ($array_data as $key => $value): ?>

 <div id="deal-intro" class="cf todydeal clearfix">
           
            <h1 class="indextitle">
              <a style="color:#333;" href="<?php echo $value['head_url']; ?>" target="_blank"><?php echo $value['head_title']; ?> 
              </a>
            </h1>
            <div class="main">
                <div class="deal-buy">
                    <div class="deal-price-tag"></div>
                    <p id="team-price-6102" class="deal-price">
                      <strong><?php echo $value['team_price']; ?></strong>
                      <span>
                        <a class="tuan_btn" target="_blank" href="<?php echo $value['url']; ?>">
                        </a>
                      </span>
	                    </p>
                </div>
                <table class="deal-discount">
                    <tbody><tr><th><?php echo __('原价'); ?></th><th><?php echo __('折扣'); ?></th><th><?php echo __('节省'); ?></th></tr>
                    <tr>
                        <td id="team-market_price-6102"><del>¥<?php echo $value['mark_price']; ?></del></td>
                        <td id="team-discount-6102">¥<?php echo $value['discount_price']; ?></td>
                        <td id="team-save-6102">¥<?php echo $value['save_money']; ?></td>
                    </tr>
                </tbody></table>
                 <div class="deal-box deal-timeleft deal-on" id="deal-timeleft6102" curtime="1315101015251" diff="137320000">
                    <h3><?php echo __('剩余时间'); ?></h3>
                    <div class="limitdate">
	<ulclass="clearfix"id="counter6102"><li><span>1</span>天</li><li><span>14</span>小时</li><li><span>8</span>分钟</li></ul></div>
                </div>
                   <div class="deal-box deal-status deal-status-open" id="deal-status-6102">
                    <p class="deal-buy-tip-top"><strong><?php echo $value['team_num']; ?></strong> 人已购买</p>
                    <p class="deal-buy-on" style="line-height:200%;">
                       <img src="/media/images/deal-buy-succ.gif"> 团购成功！<br>还可以继续购买</p>
                    <p class="deal-buy-tip-btm"><?php echo $value['permit_time']; ?>达到最低团购人数：<strong><?php echo $value['min_num']; ?></strong><?php echo __('家'); ?></p>
                  </div>
             </div>
            <div class="side">
	           	<div class="deal-buy-cover-img" id="team_images">
                  <img src="<?php echo $value['master_img'] ?>" width="440" height="280">
                </div>
                <div class="digest">
                  <?php echo $value['description']; ?>
                </div>
            </div>
        </div>
<?php endforeach; ?>