<?php defined('SYSPATH') or die('No direct script access.');
/*
 * 功能模块：calfproduct
* 路径：/modules/calfproduct/view/product
* 说明：商品信息的右边栏视图--社区
* @author zhaibob
* 创建日期：2011.9.16
*/
?>
<div class="posts">
<ul class="tab">
<li class="post1 cur"><span class="t_l"></span><span class="t_r"><?php echo __('讨论贴');?></span></li>
<li class="post2"><span class="t_l"></span><span class="t_r"><?php echo __('问答贴'); ?></span></li>
</ul>
<div id="postsone" style="display:block">
  <?php echo __('正在加载，请等待...'); ?>
</div>
 <div id="poststwo" style="display:none">
  <?php echo __('正在加载，请等待...'); ?>
 </div>
</div>