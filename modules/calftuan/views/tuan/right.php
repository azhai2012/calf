<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : tuan right view;
 *
 * @author Azhai
 * @date 2011-09-22 
 * @copyright 2011 
 *
 */
?>
<!-- tip -->
<div class="sbox-content">
  <div class="tip">
  <h2><?php echo __('公告板'); ?></h2>
  <ul class="bulletin">
	<?php foreach ($array_data['note'] as $key => $value): ?> 
     <li><a target="_blank" href="<?php echo $value['url'] ?>"><strong><?php echo $value['title']; ?></strong></a></li>
    <?php endforeach; ?>
   </ul>
</div>
</div>
<!-- info -->
<div class="sbox-content">
   <div class="tip">
    <h2><?php echo $array_data['info']['title']; ?></h2>
    <p class="text"><?php echo $array_data['info']['content']; ?><br>
       <a href="/account/invite.php"><?php echo __('我要申请'); ?>&gt;&gt;</a><br>
    </p>
  </div>
</div>

<!-- FAQ -->
<div class="sbox-content">
<div class="deal-consult-tip">
<h2><?php echo $array_data['faq']['title']; ?></h2>
      <div class="deal-consult-option">
      <div class="deal-consult-option-btn-count">
        <a href="<?php echo $array_data['faq']['totalcount']['url'] ?>"><?php echo __('查看全部'); ?>(<span><?php echo $array_data['faq']['totalcount']['rowcount']; ?></span>)</a>
      </div>
      <div class="deal-consult-option-btn-post">
        <a href="/team/ask.php?id=6019#post"><?php echo __('我要提问'); ?></a>
      </div><div class="clearfix"></div>
   </div>
 <ul class="list">
 <?php foreach ($array_data['faq']['lists'] as $key => $value): ?>
  <li class="liline"><?php echo $value['name']; ?><a href="<?php echo $value['url']; ?>" target="_blank">查看详细&gt;&gt;</a></li>
 <?php endforeach; ?>
</ul>
</div>
</div>

