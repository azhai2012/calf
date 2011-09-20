<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Cart {
	
	private $_id;
	private $_data = array();
	private $_template = NULL;
	private $_template_one = NULL;
	
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Cart($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = (!empty($id))?$id:'1';
       $this->_data = $data;
       $this->_template = View::factory('cart/content'); 
       $this->_template_one = View::factory('cart/stepone');
      
	}
	
	public function get_cart_content(){
		
		$this->_template->step_id = $this->_id;
		$id='';
		if ($this->_id==1) $id='一';
		if ($this->_id==2) $id='二';
		if ($this->_id==3) $id='三';
		
		$this->_template->id = $id;
		$this->_template->get_cart_content_step_one = $this->get_cart_content_step_one();
		$this->_template->get_cart_content_step_two = $this->get_cart_content_step_two();
		$this->_template->get_cart_content_step_three = $this->get_cart_content_step_three();
		
		$result=$this->_template;
		
		return $result;
		
	}
	
	public function get_cart_content_step_one(){
		// @todo 增加购物车的功能-读取数据。
		
		$array_data= array(
		    'lists'=>array(
		       array('id'=>1020203,'name'=>"绿A螺旋藻精片 150g（300片） 抗辐射防辐射",'numtotal'=>100,'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),
		array('id'=>1020203,'name'=>"绿A螺旋藻精片 150g（300片） 抗辐射防辐射",'numtotal'=>100,'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),
		array('id'=>1020203,'name'=>"绿A螺旋藻精片 150g（300片） 抗辐射防辐射",'numtotal'=>100,'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),
		
	        ),
	        'status'=>array('rowcount'=>1,'total'=>'200.40','return_url'=>'#'),
		);
		
		$this->_template_one->array_data = $array_data;
		
		$result=$this->_template_one;
		return $result;
		
		
	}
	
	public function get_cart_remment_content(){
		return '<div class="cart_recommend" name="recomzone" style="display: block; ">
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
		                <div class="order_submit"><a href="/cart/step/3" id="submit" name="submit">提交订单</a></div>
		         </li>  
		              
		      
		      </ul>
		     
		    </div>
		 
		';
		return $result;
		
		
	}
	
    public function get_cart_content_step_three(){
		$result='
		    <div class="cart_three">
		    <div class="cart_wrapper">
    <!--货到付款 开始-->
  <div class="success_frame money_notice">
    <p class="price">订单8642662094已提交。
    	
    预计1天内发货。
    
    <a href="http://order.dangdang.com/orderdetails.aspx?modify=true&amp;orderid=8642662094" target="_blank">查看订单状态&gt;&gt;</a></p>
    <div class="information3">
    
      <p>您需要在收货时向送货员支付<span>￥98.00</span></p>
      
    </div>
    
    <p class="information_goon">
    
    </p>
    
    <p class="success_footer">
      <span>* 您可以在“<a href="http://order.dangdang.com/myallorders.aspx?modify=true" target="_blank">我的订单</a>”中查看或取消您的订单，由于系统需进行订单预处理，您可能不会立刻查询到刚提交的订单</span>
    </p>
  </div>
  <!--货到付款 结束-->
  

  
</div>
		      
		    </div>
		 
		';
		return $result;
		
		
	}
	
	
	
	
}
