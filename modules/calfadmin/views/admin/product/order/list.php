<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-05 
 * @copyright 2011 
 *
 */
?>
<div id="product-content">
   <div id="admin-header">
       列表
       <h1>Order Lists - 订单列表 </h1>
   </div>
  <div id="order-list"> <!-- begin list -->
   <table id="flexgrid" style="display:none"></table>
       <script src="/media/js/jquery.flexigrid.js" type="text/javascript" charset="utf-8"></script>
       <script src="/media/js/admin.orders.js" type="text/javascript" charset="utf-8"></script>
       <script type="text/javascript" charset="utf-8">
               	Orders.getGrid();
       </script>
   </div> <!-- end list -->
    <div id="grid_details">
       
    </div>
</div>