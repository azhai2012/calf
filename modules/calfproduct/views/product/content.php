<?php 
/* 
 * 商品明细视图
 * @author zhaibob
 * 创建日期：2011.09.16
 *  
 */ 
?>
<div id="proclist">
<script src="/media/js/jquery.jqzoom.js" type="text/javascript" async=""></script>
<div id="pnav">您现在的位置：商品信息 >>  <?php echo $nav_name; ?> </div>
<div id="proc_context"> <!-- begin proc_context -->
    <div class="left"> <!-- begin left -->
     <?php echo $get_product_left_context; ?>
    </div>  <!-- end left -->
    <div class="right"> <!-- begin right -->
      <?php echo $get_product_right_context; ?>
    </div> <!-- end right -->
  </div> <!-- end proc_context -->		           
</div>