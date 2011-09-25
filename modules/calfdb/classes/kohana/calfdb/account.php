<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-25 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Account {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Account($id,$data);

	}
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}

	/**
	* get content
	*/
	public function get_account_content() {
	    // TODO : [account] set account content
	   // FIXME : db to array
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
	    return $array_data;
	}
	
	/**
	* get order list
	*/
	public function get_account_order_list() {
	    // TODO : [account] set order list data
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
	 
	    return $array_data;
	}
	
	/**
	*  get order list
	*/
	public function get_account_order_total_list() {
	    // TODO : [account] set order total list data  
	 $array_data = array(
			  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
			  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
	         	  array('no'=>'8642662094','ordernumber'=>10,'gifts'=>'有','total'=>'98.00','date'=>'2011-02-10' ), 
			);
	    return $array_data;
	}
	
	/**
	*  get wishlist 
	*/
	public function get_wishlist_list() {
	    // TODO : [account] set wishlist data
	 	 $array_data = array(
		        array('productid' =>'60113620','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113621','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113622','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113623','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113624','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
			array('productid' =>'60113625','img'=>'/media/images/60113620-1_t.jpg', 'url'=>'#','name'=>'乐力 儿童多维软胶糖150g','icon'=>'images/promotion_icon/icon_102.png','origin'=>'上海','popularity'=>5,'price'=>'85.00'),
		 );
	    return $array_data;
	}
	
	/**
	* get coupons list
	*/
	public function get_coupons_list() {
	    // TODO : [account] set coupons list
	    $array_data = array('id' =>'09338' ,'cartcount'=>'0','amount'=>'0.00' );
	    return $array_data;
	}
	
	/**
	* get pointslist
	*/
	public function get_pointslist_list() {
	    // TODO : [account] set pointlists data
	 	$array_data = 
		     array(
			'status'=>array('total'=>1),
			'lists'=>array(
			   array('date' =>'2011-02-01','gain'=>10,'useed'=>5,'description'=>'无') ,
			   array('date' =>'2011-02-02','gain'=>10,'useed'=>4,'description'=>'无') ,
			 )
		 );
	    return $array_data;
	}
	
	/**
	* get mysms list
	*/
	public function get_mysms_list() {
	    // TODO : [account] set mysms list data 
	 $array_data = array(
		array('type' =>'订单','title'=>'主题1','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题2','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题3','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题4','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题5','date'=>'2011-02-01'),
		array('type' =>'订单','title'=>'主题6','date'=>'2011-02-01'),
	     );
	    return $array_data;
	}
	
	/**
	* get question
	*/
	public function get_myquestion_list() {
	    // TODO :[account] set question data
	    $array_data = array(
		array('content' =>'问题1', 'url'=>'#','date'=>'2011-01-10'), 
		array('content' =>'问题2', 'url'=>'#','date'=>'2011-01-10'), 
		array('content' =>'问题3', 'url'=>'#','date'=>'2011-01-10'), 
   	    );
	    return $array_data;
	}
	
	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
       } 
	}

	function __set($name,$value){

		$this->$name = $value;
	}



	function __destruct(){

		//$this->session->destroy();
	}

	function __toString(){

		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;

	}

}