<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Account {
	
	private $_id;
	private $_data = array();
	private $_template_content = NULL;
	private $_template_gifts_is_exists_id = NULL;
	private $_template_gifts_is_not_exists_id = NULL;
	private $_template_myquestion = NULL;
	private $_template_mysms = NULL;
	private $_template_wishlist = NULL;
	private $_template_coupons = NULL;
	private $_template_pointslist = NULL;
	private $_template_repassword = NULL;
	
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
		    
		 $array_data = array(
			       array('id'=>1,'name'=>'订单管理','content'=>array(
			                    array('name'=>'order','title'=>'我的订单','url'=>'/account/order'),
			                    array('name'=>'paymenthistory','title'=>'支付历史','url'=>'/account/paymenthistory'),
			            ),
			       ),
			       array('id'=>2,'name'=>'商品管理','content'=>array(
				            array('name'=>'wishlist','title'=>'我的收藏','url'=>'/account/wishlist'),
				            array('name'=>'mytmplate','title'=>'采购模板','url'=>'/account/mytmplate'),
					   ),
				    ),	
			       array('id'=>3,'name'=>'账户管理','content'=>array(
				            array('name'=>'coupons','title'=>'礼品卡','url'=>'/account/coupons'),
				   	    array('name'=>'pointslist','title'=>'我的积分','url'=>'/account/pointslist'),
					    array('name'=>'profileleft','title'=>'账户信息','url'=>'/account/profileleft'),
					    array('name'=>'repassword','title'=>'修改密码','url'=>'/account/repassword'),
					    array('name'=>'mysms','title'=>'站内消息','url'=>'/account/mysms'),
					    array('name'=>'myquestion','title'=>'我的反馈','url'=>'/account/myquestion'),
				           ),
			        ), 
		   );
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
		
		$array_data = array(
			'flows' =>array(
			      array('date'=>'2011-01-01 20:30','content'=>'生成订单'),
			      array('date'=>'2011-01-01 20:30','content'=>'审核订单，并开始备货'),
			      array('date'=>'2011-01-01 20:30','content'=>'进入复核阶段'),
			      array('date'=>'2011-01-01 20:30','content'=>'进入理货阶段'),
			      array('date'=>'2011-01-01 20:30','content'=>'装车发往中专站'),
			      array('date'=>'2011-01-01 20:30','content'=>'中专站验货完毕'),
			      array('date'=>'2011-01-01 20:30','content'=>'配送员签收(王三 13544495806)，准备配送。'),
			      array('date'=>'2011-01-01 20:30','content'=>'客户签收送达'),
			 ),
			'gifts' =>array(
			      array('date'=>'2011-01-02 00:12','content'=>'买达克宁10盒，送洗衣粉1袋。'),
			),
			'total'=>array('totalamount'=>'230.00','rowcount'=>2,'infos'=>'无'),
			'orders'=>array(
			     array('name'=>'达克宁 10*10g 江西恒瑞药业，盒',
			           'batch'=>'201108',
			           'price'=>'12.4',
			           'number'=>'10',
			           'amount'=>'124',
			           'date'=>'2011-01-01 00:22',
			     ),
		             array('name'=>'必奇 10*10g 江西先声药业，盒',
			           'batch'=>'20111001',
			           'price'=>'10.60',
			           'number'=>'10',
			           'amount'=>'106.00',
			           'date'=>'2011-01-01 00:22',
			     ),	
			),
		  
		  );
		
		if (!empty($this->_id))
		{
		   $this->_template_gifts_is_exists_id = View::factory('account/idorder');	
		   $this->_template_gifts_is_exists_id->id= $id;
		   $this->_template_gifts_is_exists_id->array_data = $array_data;
		   $result= $this->_template_gifts_is_exists_id;
	        }
		else {
		// @todo 我的订单列表 *注意 操作的功能
		
		$array_data = array(
			  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
			  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
	         	  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
			);
		 $this->_template_gifts_is_not_exists_id = View::factory('account/notidorder');
		 $this->_template_gifts_is_not_exists_id->array_data=$array_data;
			
		  $result=$this->_template_gifts_is_not_exists_id;
		}
		        
       return $result;		
	
	}
	


	/*** 支付历史 ***/
	function get_paymenthistory_list(){
		$result = ' 
		   <div class="paymenthistory clearfix">
		      <h2>支付历史</h2>
		  </div>
		';
		   
		return $result;
	}
	
	/*** 我的收藏 ***/
	// @todo 收藏内容
	function get_wishlist_list($id){
		
		$a0 = ($id=='a0')?'selected':'';
		$a1 = ($id=='a1')?'selected':'';
		$a2 = ($id=='a2')?'selected':'';
		$a3 = ($id=='a3')?'selected':'';
		
		 $array_data = array(
		        array('productid' =>'60113620','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113621','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113622','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113623','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113624','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113625','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
		 );
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
		$result = '
				   <div class="mytmplate clearfix">
				      <h2>采购模板</h2>
				  </div>
				';
			
		return $result;
	}
	
	
	
	/*** 礼品卡 ***/
	function get_coupons_list(){
	     $array_data = array('id' =>'09338' ,'cartcount'=>'0','amount'=>'0.00' );
	     $this->_template_coupons = View::factory('account/coupons');
	     $this->_template_coupons->array_data = $array_data; 
             return  $this->_template_coupons;
	}
	

	
	/*** 我的积分 ***/
	function get_pointslist_list(){
			
		$array_data = 
		     array(
			'status'=>array('total'=>1),
			'lists'=>array(
			   array('date' =>'2011-02-01','gain'=>10,'useed'=>5,'description'=>'无') ,
			   array('date' =>'2011-02-02','gain'=>10,'useed'=>4,'description'=>'无') ,
			 )
		 );
		$this->_template_pointslist = View::factory('account/pointslist');
		$this->_template_pointslist->array_data = $array_data;
		return $this->_template_pointslist;
		
	}
	
	/*** 账户信息 ***/
	function get_profileleft_list(){
		$result= '
		  <div class="profileleft clearfix">
		     <h2>我的信息</h2>
	      </div>
		';
		return $result;
		
	}
	
	/*** 修改密码 ***/
	function get_repassword_list(){
		 $this->_template_repassword = View::factory('account/repassword');
		return $this->_template_repassword;
	}
	
	/*** 站内信息 ***/
    function get_mysms_list(){
    	 $array_data = array(
		array('type' =>'订单','title'=>'主题1','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题2','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题3','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题4','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题5','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题6','date'=>'2011-02-01'),
	     );
	 $this->_template_mysms = View::factory('account/mysms');
	$this->_template_mysms->array_data = $array_data; 
    	return $this-_template_mysms;
    }

    /*** 我的反馈 ***/
    function get_myquestion_list(){
	
	$array_data = array(
		array('content' =>'问题1', 'url'=>'#'), 
		array('content' =>'问题2', 'url'=>'#'), 
		array('content' =>'问题3', 'url'=>'#'), 
	);
	$this->_template_myquestion = View::factory('account/myquestion');
        $this->_template_myquestion->array_data = $array_data;
    	return $this->_template_myquestion;
    }
	
	
	
}
