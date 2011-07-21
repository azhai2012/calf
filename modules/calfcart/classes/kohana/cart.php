<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Cart {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Cart($id,$data);
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
		          $result.='
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
		          $result.='
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
		          $result.='
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
		        
		    
			default: $result.='</div>'; 
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
                    <a name="checkout" id="checkout_btn" href="/cart/step/2" class="clearing" title="结算">去结算</a>
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
		        <li>
		         <div id="cartItems">
		               <h4>商品清单</h4>
		               <div class="cart_detail">
		               <div class="b_name">
		                 <span class="experience">
		                  [<a href="/cart" name="gobackcart">返回修改购物车</a>]</span>
		                  <span class="news_red" id="cart_items_tips"></span></div>
		                  <div id="rpt_cart_items">
		                    <ul class="cart_subject">
		                      <li class="row1">商品名称</li>
		                      <li class="row2">积分</li>
		                      <li class="row3">单价</li>
		                      <li class="row4"><span title="优惠">优惠</span></li>
		                      <li class="row5">数量</li>
		                      <li class="row6">小计</li>
		                    </ul>
		                    <div class="cart_general">
		                      <ul class="cart_list" >
		                      <li class="row0">20178848</li>
		                      <li class="row1" title="绿A螺旋藻精片 150g（300片） 抗辐射防辐射">绿A螺旋藻精片 150g（300片） 抗辐射防辐射</li>
		                      <li class="row7"><span></span></li>
		                      <li class="row2">146</li>
		                      <li class="row3">￥145.90</li>
		                      <li class="row4"></li>
		                      <li class="row5">1</li>
		                      <li class="row6">￥145.90</li>
		                      </ul>
		                       <br class="clearfix">
		                      <ul class="cart_list">
		                        <li class="row0">60113620</li>
		                        <li class="row1" title="乐力 儿童多维软胶糖150g">乐力 儿童多维软胶糖150g</li>
		                        <li class="row7"><span></span></li>
		                        <li class="row2">98</li>
		                        <li class="row3">￥98.00</li>
		                        <li class="row4"></li>
		                        <li class="row5">1</li>
		                        <li class="row6">￥98.00</li>
		                      </ul> 
		                       
		                     </div>
		                    
		                     <div class="clearfix"></div>
		                     <span class="price_charge_border"></span>
		                     </div>
                              <div class="clearing_expand clearfix" > 
		                        <div id="div_invoice" class="clearing_expand_info">
		                         <span class="title"><a href="javascript:for_99click();" id="invoice_bar_close" name="invoice" class="close">展开</a>
		                          <a id="a_invoice" href="javascript:for_99click();">备注信息</a>
		                         </span>
		                         <div class="clearfix"></div>
		                             <span class="objhide" id="span_invoice">
		                                <p class="remarks"><label>备注内容：</label><input id="remarks" name="remarks" value="" /></p>
		                                <p class="remark_btn"><span class="btn"><a id="invoice_submit" name="submitinvoice" href="javascript:for_99click();">确认</a></span>
		                                   <span class="wrong" id="span_invoice_tips"></span></p>
		                             </span>
		                         </div>
		                         <div id="div_coupon__money" class="clearing_expand_info">
		                             <span class="title">
		                                <a href="javascript:for_99click();" id="coupon_close_bar" name="usecardcoupon" class="close">展开</a>
		                                <a id="span_coupon_tips" style="cursor:pointer;" href="javascript:for_99click();">使用礼品卡/礼券</a>
		                             </span>
		                             <div class="clearfix"></div>
		                              <p class="objhide" id="span_gift">
		                                <span class="gift_info">卡号：<input type="text" class="gift_input jihuo_input" id="inp_coupon_number"></span>
		                                <span class="gift_info">密码：<input id="inp_coupon_pwd" type="text" class="gift_input jihuo_input"></span>
		                                <span class="gift_btn"><span class="btn"><a href="javascript:for_99click();" id="btn_coupon_bind">激活</a></span></span>
		                                <span class="wrong" id="span_invoice_tips"></span>
		                              </p>
		                             
		                         </div>
		                       </div>
		                      </div>
		                   
		                   <div class="price_charge">
		              
		                        <p class="p_charge1">
		                           商品金额总计：<span>￥<span id="sp_bargin_total">98.00</span></span>
		                          </p>
		                        <p class="p_charge1">账户余额冲抵： <span id="sp_cust_cash_used">-￥0.00</span></p>
		                        <p class="p_charge1" id="p_coupon_amount">
		                        <span id="sp_coupon_amount_tips">礼券冲抵：</span>
		                        <span id="sp_coupon_amount" class="p_charge4_span">
		                           <span class="objhide_0">-</span>￥0.00</span>
		                      </p>
		                      <p class="charge_total">您需支付：<span class="c_red">￥<span id="sp_payable">98.00</span></span></p>
		                      </div>
		                    </div>
		                    
		                </div>
		                 <div class="clearfix"></div>
		                <div class="order_submit"><a href="javascript:for_99click();" id="submit" name="submit">提交订单</a></div>
		         </li>  
		              
		      
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