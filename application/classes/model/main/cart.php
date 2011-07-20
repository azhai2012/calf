<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Cart {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Model_Main_Cart($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_cart_content(){
		
		$result='<div id="cartlist"> <div id="nav">您现在的位置：购物车</div>';
		
		switch ($this->_id) {
			 case 1 :
		          $result='
		           <div id="cart_context"> <!-- begin cart_context -->
		              <div class="cart_nav_setp_one  clearfix" id="step_one">
		                <span class="location"> 1. 我的购物车</span>
		                <span> 2. 确认购物车信息</span>
		                <span> 3. 成功提交订单</span>
		                </div>
		              <div class="side_content">
		              '.$this->get_cart_content_step_one().'
		              </div>  <!-- end side_content -->
		             </div> <!-- end proc_context -->
		          </div>';
		        break;
		      case 2 :
		          $result='
		           <div id="cart_context"> <!-- begin cart_context -->
		              <div class="cart_nav_setp_two  clearfix" id="step_two"> 
		                <span> 1. 我的购物车</span>
		                <span class="location"> 2. 确认购物车信息</span>
		                <span> 3. 成功提交订单</span>
		                </div>
		              <div class="side_content">
		               '.$this->get_cart_content_step_two().'
		              </div>  <!-- end side_content -->
		             </div> <!-- end proc_context -->
		          </div>';
		        break;  
		       case 3 :
		          $result='
		           <div id="cart_context"> <!-- begin cart_context -->
		              <div class="cart_nav_setp_three  clearfix" id="step_three"> 
		                <span> 1. 我的购物车</span>
		                <span> 2. 确认购物车信息</span>
		                <span class="location"> 3. 成功提交订单</span>
		              </div>
		              <div class="side_content">
		               '.$this->get_cart_content_step_three().'
		              </div>  <!-- end side_content -->
		             </div> <!-- end proc_context -->
		          </div>';
		        break;     
		        
		    
			default: $result=$result.'</div>'; 
		}
		
		return $result;
		
	}
	
	public function get_cart_content_step_one(){
		// @todo 增加购物车的功能-读取数据。
		$result='
		    <div class="cart_one">
		      <ul class="cart_subject" id="cart_title">
                <li class="title_row1">商品名称</li>
                <li class="title_row2">积分</li>
                <li class="title_row3">单价</li>
                <li class="title_row4">优惠</li>
                <li class="title_row5">数量</li>
                <li class="title_row6">操作</li>
              </ul>
              <div class="cart_one_content">
                <ul class="cart_rows">
                  <li class="row0"><a name="productpic" href="#" target="_blank" title="绿A螺旋藻精片 150g（300片） 抗辐射防辐射"><img src="http://img38.dangdang.com/74/10/20178848-1_x.jpg"></a></li>
		          <li class="row1">
		            <p><i></i>
		              <span class="name">
		              <a name="product" target="_blank" href="#" title="绿A螺旋藻精片 150g（300片） 抗辐射防辐射">绿A螺旋藻精片 150g（300片） 抗辐射防辐射</a>
		              </span>
		            </p>
		          </li>
		          <li class="row2">100</li>		        
                  <li class="row3"><span>￥119.00</span></li>
		          <li class="row4"><span>0</span></li>		        
		          <li class="row5"><input type="text" name="number" value="1" ></li>
		          <li class="row6">
		            <a name="movetofavorite" href="###2" title="此商品将移至“我的收藏”并从购物车中删除"  id="move_20178848">移入收藏</a>
		            <a name="delete" href="javascript:for_99click();" ">删除</a>
		          </li>
		        </ul>
		        <ul class="cart_rows">
                  <li class="row0"></li>
		          <li class="row1"></li>
		          <li class="row2"></li>		        
                  <li class="row3"></li>
		          <li class="row4"></li>		        
		          <li class="row5"></li>
		          <li class="row6"></li>
		      
		        </ul>
		      </div>
		      <div class="clearfix"></div>
		    </div>
		    <div class="cart_total" id="div_total" style="display: block; ">
                <p class="price">商品总数: <span> 10 </span>  个，
                    商品金额总计：
                    <span>￥</span>
                    <span id="total_account">217.00</span>元
                </p>
                <p id="balance">
                    <a name="checkout" id="checkout_btn" href="javascript:void(dispart_order())" class="clearing" title="结算">去结算</a>
                    <a href="http://www.dangdang.com/?ref=shopping-0-E" target="_blank" name="goon" class="goon"> << 继续购物</a>
                </p>
            </div>
            <div class="cart_recommend" name="recomzone" style="display: block; ">
                <h2>
                    <a href="javascript:for_99click();" id="div_AlsoBuyList_up_down" onclick="drawAlsoBuyList();" class="up" name="turnoff" title="up"></a>
                    <span>根据您购物车中的商品，您可能还关住以下商品：</span>
                </h2>
                <div id="cart_recommend_List">
                <div class="cart_promotions_info">
                <div class="clearfix">
                  <ul class="cart_promotions_info_ul clearfix">
                  <li>
                    <p class="pic">
                     <a name="productpic_alsobuy" href="#" target="_blank" title="汤臣倍健 多种维生素片(男士) 60粒">
                      <img src="http://img33.dangdang.com/98/17/20686643-1_l.jpg"></a>
                    </p>
                    <p class="name">
                     <a name="product_alsobuy" href="#" target="_blank" title="汤臣倍健 多种维生素片(男士) 60粒">汤臣倍健 多种维生素片(男士) 60粒</a>
                     </p>
                     <p class="price"><span class="price_m"><s>￥108.00</s></span><span class="price_d">￥91.80</span></p>
                     <p class="buy"><a name="movetoshoppingcart_alsobuy" href="###1" onclick="">放入购物车</a> </p>
                   </li>
                   <li>
                    <p class="pic">
                     <a name="productpic_alsobuy" href="#" target="_blank" title="汤臣倍健 多种维生素片(男士) 60粒">
                      <img src="http://img33.dangdang.com/98/17/20686643-1_l.jpg"></a>
                    </p>
                    <p class="name">
                     <a name="product_alsobuy" href="#" target="_blank" title="汤臣倍健 多种维生素片(男士) 60粒">汤臣倍健 多种维生素片(男士) 60粒</a>
                     </p>
                     <p class="price"><span class="price_m"><s>￥108.00</s></span><span class="price_d">￥91.80</span></p>
                     <p class="buy"><a name="movetoshoppingcart_alsobuy" href="###1" onclick="">放入购物车</a> </p>
                   </li>
                 </ul>  
            </div>
		 
		';
		return $result;
		
		
	}
	
    public function get_cart_content_step_two(){
		$result='
		    <div class="cart_two">
		      <ul>
		        <li></li>
		        <li></li>
		        
		      </ul>
		     
		    </div>
		 
		';
		return $result;
		
		
	}
	
    public function get_cart_content_step_three(){
		$result='
		    <div class="cart_three">
		      <ul>
		        <li></li>
		        <li></li>
		        
		      </ul>
		      
		    </div>
		 
		';
		return $result;
		
		
	}
	
	
	
	
}
