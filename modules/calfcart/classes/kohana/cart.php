<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Cart {
	
	private $_id;
	private $_data = array();
	private $_template = NULL;
	private $_template_one = NULL;
	private $_template_two = NULL;
	private $_template_recommend = NULL;
	
	
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
       $this->_template_two = View::factory('cart/steptwo');
       $this->_template_recommend = View::factory('cart/recommend');
      
	}
	
    /**
     * @description: 
     * @author azhai
     * @date 20 September, 2011
     * @params 
     */    
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
	
	/**
	 * @description: 
	 * @author azhai
	 * @date 20 September, 2011
	 * @params 
	 */
	public function get_cart_content_step_one(){
		// @todo 增加购物车的功能-读取数据。
		
		$array_data= array(
		    'lists'=>array(
		             array('id'=>1020203,'name'=>"绿A螺旋藻精片150g抗辐射防辐射",
		                    'numtotal'=>100,'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),		
	                 array('id'=>1020203,'name'=>"绿A螺旋藻精片150g（300片）抗辐射防辐射",'numtotal'=>100,
	                        'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),
		             array('id'=>1020203,'name'=>"绿A螺旋藻精片 150g（300片） 抗辐射防辐射",
		                   'numtotal'=>100,'num'=>10,'price'=>'119.00','savemoney'=>'0','url'=>'#','img'=>'/media/images/20178848-1_x.jpg'),
		    ),
	        'status'=>array('rowcount'=>1,'total'=>'200.40','return_url'=>'#'),
		);
		
		$this->_template_one->array_data = $array_data;
		$this->_template_one->get_cart_recommend_list = $this->get_cart_recommend_content();
		$result=$this->_template_one;
		return $result;
		
		
	}
	
    /**
     * undocumented function
     *
     * @return void
     * @author zhai bob
     */
    function get_cart_recommend_content(){
		
		$array_data = array(
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			
			 );
		$this->_template_recommend->array_data = $array_data;
		return $this->_template_recommend;
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author zhai bob
	 */
    public function get_cart_content_step_two(){
		
		$array_data = array(
			   'def_total'=>'447.00',
			   'coupon'=>'0',
			   'total'=>'447.00',
			   'lists'=> array(
		    	array('id' =>20178848,'name'=>'绿A螺旋藻精片 150g（300片） 抗辐射防辐射','numtotal'=>146,'price'=>'146.00','dis_price'=>'0','num'=>1,'amount'=>'145.90'),
				array('id' =>20178848,'name'=>'绿A螺旋藻精片 150g（300片） 抗辐射防辐射','numtotal'=>146,'price'=>'146.00','dis_price'=>'0','num'=>1,'amount'=>'145.90'),
					array('id' =>20178848,'name'=>'绿A螺旋藻精片 150g（300片） 抗辐射防辐射','numtotal'=>146,'price'=>'146.00','dis_price'=>'0','num'=>1,'amount'=>'145.90'),
			    ),
		  );
		
		$this->_template_two->array_data = $array_data;
		 
		return $this->_template_two;
		
		
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
