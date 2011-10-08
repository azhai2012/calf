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
  <div class="wishlist clearfix">
	            <h2>我的收藏</h2>       
	      <div class="favorites">
   
      <div class="favorites_sort" >

       <span>显示</span>

       <select name="sort" onchange="javascript:Account.SelectSort(this);">
        <option <?php echo $a0; ?> value="a0">显示全部商品</option>
        <option <?php echo $a1; ?> value="a1">仅显示降价商品</option>
        <option <?php echo $a2; ?> value="a2">仅新到货商品</option>
        <option <?php echo $a3; ?> value="a3">仅促销商品</option>
       </select>   

     </div>
      <div class="clearfix"></div>

	          <ul>
	          <li class="f_title">
	            <span><input type="checkbox" id="allselect" name="allselect" onclick="javascript:Account.AllSelect();" />
	              <a href="javascript:void(0);" onclick="document.getElementById(\'allselect\').click()"  >全选</a></span>
	            <span class="totaldelete"><button name="totaldelete" onclick="javascript:GoDel();" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'">批量删除</button></span>
	            <span class="totalbuy"><button name="totalbuy" onclick="javascript:btnBuyClick(this,2);" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'" class="btnhover">批量购买</button></span>
	            
	          </li>
	         <?php foreach ($array_data as $key => $value): ?>
	          <li class="product_list">
		    <span class="row01"><input type="checkbox" name="CheckAll" id="CheckAll" onclick="javascript:check_one_click(this,<?php echo $value['productid']; ?>);" value="<?php echo $value['productid']; ?>"></span>
		    <span class="row02"><a name="product_pic" title="<?php echo $value['name']; ?>" href="#" target="_blank"><img src="<?php echo $value['img']; ?>"></a></span>
		    <span class="row03">
		       <span class="name"><a name="product_name" href="#" title="<?php echo $value['name']; ?>" target="_blank"><?php echo $value['name']; ?></a></span>
		       <span class="icon"><img src="<?php echo $value['icon']; ?>" title="促销" onerror="this.style.display=\'none\';"></span>
		       <span class="tags"><?php echo $value['origin']; ?></span>
		       <span>收藏人气：<?php echo $value['popularity']; ?></span>
		       <span class="discount_info">促销：</span>
 
		     </span>
		     <span class="row04">
		     <span class="discount">单价：<b>￥<span id="sale_price_<?php echo $value['productid']; ?>"><?php echo $value['price']; ?></span></b> </span>
		     <span class="row05">
		     <span><label>数量：</label><input name="s_num" id="s_num" value="1"/></span>
		     <a name="single_buy" href="#">
		     <img src="/media/images/newbtn_buy.gif" title="购买" border="0"></a>
		  </span>
		   <span class="row06"><a href="#">从收藏夹中删除</a></span>
		</li>
		 <?php endforeach; ?>
	          <li class="f_title">
	            <span><input type="checkbox" id="allselect" name="allselect" onclick="document.getElementById(\'allselect\').click()"  />  <a href="javascript:void(0);" onclick="document.getElementById(\'allselect\').click()"  >全选</a></span>
	            <span class="totaldelete"><button name="totaldelete" onclick="javascript:GoDel();" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'">批量删除</button></span>
	            <span class="totalbuy"><button name="totalbuy" onclick="javascript:btnBuyClick(this,2);" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'" class="btnhover">批量购买</button></span>
	            
	          </li>
	        </ul>
	      
	  </div>