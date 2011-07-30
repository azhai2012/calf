<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Account {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Account($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_account_content(){
		
		    $active =$this->_data['mod'];
		    $func='';
		    switch ($active) {
		    	case 'order':{
		    	 $navtitle="我的订单";
		    	 $func= $this->get_account_order_list();
		    	} break;
		    	case 'paymenthistory':{
		    	 $navtitle="支付历史";
		    	 $func= $this->get_paymenthistory_list();
		    	} break;
		    	case 'coupons':{
		    		$navtitle="礼品卡";
		    	    $func= $this->get_coupons_list();
		    	}break;
		    	case 'pointslist':{
		    	    $navtitle="我的积分";
		    	    $func= $this->get_pointslist_list();
		    	}break;
		    	case 'profileleft':{
		    		$navtitle="账户信息";
		    		$func=  $this->get_profileleft_list();
		    	}break;
		    	case 'mypassword':{
		    		$navtitle="修改密码";
		    	    $func=  $this->get_mypassword_list();
		    	}break;
		    	case 'mysms':{
		    		$navtitle="站内消息";
		    	    $func = $this->get_mysms_list();
		    	}break;
		    	case 'myquestion':{
		    		$navtitle="投诉建议";
		    	    $func = $this->get_myquestion_list();
		    	}break;
		    	default : $navtitle='';	 
		    } 
		    
		    $result='<div id="account_list">
		           <div id="anav">您现在的位置：'.$navtitle.'</div>
		           <div id="account_context"> <!-- begin account_context -->
		              <div class="left"> <!-- begin left -->
		              
		                <div class="side_content">
                       
                           <div class="sidel_title"><h3>订单管理</h3> </div>
                           	<ul class="content"> ';
		    
		    $current = ($active == 'order')?'current':'';
		    $result.= ' <li><a class="'.$current.'" href="/account/order">我的订单</a></li>';

		    $current = ($active == 'paymenthistory')?'current':'';
            $result.=' <li><a class="'.$current.'" name="paymenthistory" href="/account/paymenthistory" target="_parent">支付历史</a></li> ';
        
            $result.='</ul>
	                       <div class="sidel_title"><h3>账户管理</h3> </div>
           	               <ul class="content"> ';

            $current = ($active == 'coupons')?'current':'';
            $result.='<li><a class="'.$current.'" name="mycoupons" href="/account/coupons" target="_parent">礼券/礼品卡</a></li> ';

            $current = ($active == 'pointslist')?'current':'';
            $result.='<li><a class="'.$current.'" name="points_index_list" href="/account/pointslist" target="_parent">我的积分</a></li>';
            
            $current = ($active == 'profileleft')?'current':'';
            $result.='<li><a class="'.$current.'" name="profileleft" href="/account/profileleft" target="_parent">账户信息</a></li> ';

            $current = ($active == 'mypassword')?'current':'';
            $result.='<li><a class="'.$current.'" name="mypassword" href="/account/mypassword" target="_parent">修改密码</a></li>';
            
            $current = ($active == 'mysms')?'current':'';
            $result.='<li><a class="'.$current.'" name="mysms" href="/account/mysms" target="_parent">站内消息</a></li>';
            
            $current = ($active == 'myquestion')?'current':'';
            $result.='<li class="'.$current.'"><a name="myquestion" href="/account/myquestion" target="_parent">投诉建议</a></li>';

            $result.=' </ul>	                     
		                </div> 
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
            $result.=$func; 
		    $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';
	        
		return $result;
		
	}
	
    function get_account_order_list(){
		
		$result='<ul class="order_list">   
		             <li class="order_title">
		                <span class="list_input"></span>
		                <span class="list_order">订单号</span>
		                <span class="list_name">品种数</span>
		                <span class="list_way">有无赠品</span>
		                <span class="list_total">订单总金额</span>
		                <span class="list_status">订单状态</span>
		                <span class="list_time"><a href="#" class="arrow_up">下单时间</a></span>
		                <span class="list_operation">操作</span>
		             </li>
		             <li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="#" class="list_order" target="_blank" name="orderid">8642662094</a>
		               <span class="list_name" title="">10</span>
		               <span class="list_way" title="有赠品">有</span>
		               <span class="list_total" id="list_total">￥98.00</span>
		               <span class="list_status">取消</span>
		               <span class="list_time">2011-07-23</span>
		               <span class="list_operation" id="list_operation">----</span> 
		              </li>
		            </ul>';
       return $result;		
	
	}
	
	function get_coupons_list(){
		$result='
		   <div class="coupons clearfix">
		      <div class="giftcards_hint">
                   您当前共有 
                   <a href="#"><b>0</b></a> 张可用礼券，礼品卡帐户可用金额为
                   <span class="hot">￥0.00</span>
                   <a href="#">[查看明细]</a>，
                   未激活金额为
                   <span class="hot">￥0.00</span>
                   <a href="#">[查看明细]</a>。
              </div>
                                    
           </div>                         
		';
		return $result;
	}
	
	
	function get_paymenthistory_list(){
		$result = '';
		return $result;
	}
	
	function get_pointslist_list(){}
	
	function get_profileleft_list(){}
	
	function get_mypassword_list(){}
	
    function get_mysms_list(){}

    function get_myquestion_list(){}
	
	
	
}
