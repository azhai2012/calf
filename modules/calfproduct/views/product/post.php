<?php
/*
* 功能模块：calfproduct
* 路径：/modules/calfproduct/view/product
* 说明：商品信息的右边栏视图--ajax加载社区
* @author zhaibob
* 创建日期：2011.9.16
 */
?>

<?php if ($mod==='new'): ?>
<ul class="list">
  <li class="list_title" style="border-top:0;"><span class="r0"><?php echo __('话题'); ?></span><span class="r1"><?php echo __('回复/浏览'); ?></span><span class="r2"><?php echo __('作者'); ?></span><span class="r3"><?php echo __('发表时间'); ?></span></li>
  <?php foreach ($array_data as $key => $value): ?>
   <li>
      <span class="r0"><?php echo $value['title']; ?></span>
      <span class="r1"><?php echo $value['report'].'/'.$value['view'];?></span>
      <span class="r2"><?php echo $value['author']; ?></span>
      <span class="r3"><?php echo $value['create_at']; ?></span>
   </li>
  <?php endforeach; ?>
</ul>
<div class="p_status">
<div class="ps_left"><?php echo __('有问题大家来讨论？'); ?>[<a href="<?php echo $array_status_data['write_url'] ?>"><?php echo __('发表主题'); ?></a>]</div><div class="ps_right"><?php echo __('共有').$array_status_data['totalpage'].__('条记录') ?><a href="<?php echo $array_status_data['url'] ?>"><?php echo __('浏览全部信息'); ?></a></div>
</div>
<?php endif; ?>

<?php if ($mod==='ask'): ?>

<ul class="list">
   <li class="list_title" style="border-top:0;">
       <span class="r0"><?php echo __('主题'); ?></span><span class="r1"><?php echo __('回复/浏览'); ?></span><span class="r2"><?php echo __('作者');?> </span><span class="r3"><?php echo __('发表时间'); ?></span></li>
   <?php foreach ($array_data as $key => $value): ?>
   <li>
	    <span class="r0"><?php echo $value['title'];?></span>
	    <span class="r1"><?php echo $value['report'].'/'.$value['view']; ?></span>
        <span class="r2"><?php echo $value['author']; ?></span>
        <span class="r3"><?php echo $value['create_at']; ?></span>
   </li>
   <?php endforeach; ?>
</ul>

<div class="p_status">
<div class="ps_left"><?php echo __('有什么问题？'); ?>[<a href="<?php echo $array_status_data['write_url'] ?>"><?php echo __('发表主题'); ?></a>]</div><div class="ps_right"><?php echo __('共有').$array_status_data['totalpage'].__('条记录') ?><a href="<?php echo $array_status_data['url'] ?>"><?php echo __('浏览全部信息'); ?></a></div>
</div>
<?php endif; ?>