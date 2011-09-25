<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Account {
	
	private $_id;
	private $_data = array();
	private $_CalfDB; 
	private $_template_content = NULL;
	private $_template_gifts_is_exists_id = NULL;
	private $_template_gifts_is_not_exists_id = NULL;
	private $_template_myquestion = NULL;
	private $_template_mysms = NULL;
	private $_template_wishlist = NULL;
	private $_template_coupons = NULL;
	private $_template_pointslist = NULL;
	private $_template_repassword = NULL;
	private $_template_paymenthistory = NULL;
	
	
        public static function factory($id,array $data = NULL)
	{
		return new Kohana_Account($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
           $this->_id = $id;
           $this->_data = $data; 
           $this->CalfDB = Calfdb_Account::factory($this->_id,$this->_data);
          
	}
	
	
	public function get_account_content(){
		
		    $active = $this->_data['mod'];
		    $id = $this->_id;
		    
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
		    	case 'wishlist':{
		    		$navtitle="我的收藏";
		    		$func= $this->get_wishlist_list($id);
		    	} break;
		    	case 'mytmplate':{
		    		$navtitle="采购模板";
		    		$func= $this->get_mytmplate_list();
		    	} break;
		    	case 'coupons':{
		    		$navtitle="礼品卡";
		    	    $func= $this->get_coupons_list();
		    	} break;
		    	case 'pointslist':{
		    	    $navtitle="我的积分";
		    	    $func= $this->get_pointslist_list();
		    	} break;
		    	case 'profileleft':{
		    		$navtitle="账户信息";
		    		$func=  $this->get_profileleft_list();
		    	} break;
		    	case 'repassword':{
		    		$navtitle="修改密码";
		    	    $func=  $this->get_repassword_list();
		    	} break;
		    	case 'mysms':{
		    		$navtitle="站内消息";
		    	    $func = $this->get_mysms_list();
		    	} break;
		    	case 'myquestion':{
		    		$navtitle="投诉建议";
		    	    $func = $this->get_myquestion_list();
		    	} break;
		    	default : $navtitle='';	 
		    } 
		    
        	$array_data = $this->CalfDB-> get_account_content();
		$this->_template_content = View::factory('account/content');  
	        $this->_template_content->array_data = $array_data;	
		$this->_template_content->active = $active;
		$this->_template_content->navtitle = $navtitle;
		$this->_template_content->func = $func;
		return  $this->_template_content;
		
	}
	
    function get_account_order_list(){
    	// TODO: 整个订单流程
		// @todo 订单的详细配送过程
		
		$array_data = 	$array_data = $this->CalfDB-> get_account_order_list();
		
		if (!empty($this->_id))
		{
		   $this->_template_gifts_is_exists_id = View::factory('account/idorder');	
		   $this->_template_gifts_is_exists_id->id= $this->_id;
		   $this->_template_gifts_is_exists_id->array_data = $array_data;
		   $result= $this->_template_gifts_is_exists_id;
	        }
		else {
		// @todo 我的订单列表 *注意 操作的功能
		
	         $array_data = $this->CalfDB-> get_account_order_total_list();
		 $this->_template_gifts_is_not_exists_id = View::factory('account/notidorder');
		 $this->_template_gifts_is_not_exists_id->array_data=$array_data;
			
		  $result=$this->_template_gifts_is_not_exists_id;
		}
		        
       return $result;		
	
	}
	


	/*** 支付历史 ***/
	function get_paymenthistory_list(){
		$result = View::factory('account/paymenthistory');
		   
		return $result;
	}
	
	/*** 我的收藏 ***/
	// @todo 收藏内容
	function get_wishlist_list($id){
		
		$a0 = ($id=='a0')?'selected':'';
		$a1 = ($id=='a1')?'selected':'';
		$a2 = ($id=='a2')?'selected':'';
		$a3 = ($id=='a3')?'selected':'';
		
	        $array_data = $this->CalfDB-> get_wishlist_list();
		$this->_template_wishlist = View::factory('account/wishlist');
		$this->_template_wishlist->array_data = $array_data; 
		$this->_template_wishlist->a0 = $a0;
		$this->_template_wishlist->a1 = $a1;
		$this->_template_wishlist->a2 = $a2;
		$this->_template_wishlist->a3 = $a3;
		
		
		return $this->_template_wishlist;
	}
    
	/*** 采购模板 ***/
	function get_mytmplate_list(){
		$this->_template_mytmplate = View::factory('account/mytmplate');
	
		return $this->_template_mytmplate;
	}
	
	
	
	/*** 礼品卡 ***/
	function get_coupons_list(){
	     $array_data = $this->CalfDB-> get_coupons_list();
	     $this->_template_coupons = View::factory('account/coupons');
	     $this->_template_coupons->array_data = $array_data; 
             return  $this->_template_coupons;
	}
	

	
	/*** 我的积分 ***/
	function get_pointslist_list(){
			
  	        $array_data = $this->CalfDB-> get_pointslist_list();
		$this->_template_pointslist = View::factory('account/pointslist');
		$this->_template_pointslist->array_data = $array_data;
		return $this->_template_pointslist;
		
	}
	
	/*** 账户信息 ***/
	function get_profileleft_list(){
		$result=  View::factory('account/profileleft');
		return $result;
		
	}
	
	/*** 修改密码 ***/
	function get_repassword_list(){
		 $this->_template_repassword = View::factory('account/repassword');
		return $this->_template_repassword;
	}
	
	/*** 站内信息 ***/
    function get_mysms_list(){
    	$array_data = $this->CalfDB-> get_mysms_list();
	 $this->_template_mysms = View::factory('account/mysms');
	$this->_template_mysms->array_data = $array_data; 
    	return $this->_template_mysms;
    }

    /*** 我的反馈 ***/
    function get_myquestion_list(){
	
	$array_data = $this->CalfDB-> get_myquestion_list();
	$this->_template_myquestion = View::factory('account/myquestion');
        $this->_template_myquestion->array_data = $array_data;
    	return $this->_template_myquestion;
    }
	
	
	
}
