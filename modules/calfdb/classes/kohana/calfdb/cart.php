<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : cart db 
 *
 * @author Azhai
 * @version \$Id\$
 * @copyright 2011 2011-09-20 
 *
 */
class Kohana_Calfdb_Cart {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Cart($id,$data);

	}

    /**
    * get cart 1 
    */
    public function get_cart_one_data_array() {
	   // TODO : set cart_data_one
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
		return $array_data;
    }    

    /**
    * get cart 2
    */
    public function get_cart_two_data_array() {
	  // TODO : set cart_data_two
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
      return $array_data;
    }

    /**
    * get cart recommend
    */
    public function get_cart_recommend_data_array() {
       // TODO : set cart recommend data
        $array_data = array(
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			    array('id'=>121344,'name'=>'汤臣倍健 多种维生素片60粒','img'=>'/media/images/20178848-1_x.jpg','url'=>'#','price_def'=>'108.00','price'=>'91.80'),
			
			 );
        return $array_data;
    }

    /**
    * get cart 3
    */
    public function get_cart_three_data_array() {
        // TODO : set cart 3
        $array_data = array('order_no' =>8642662094,'day'=>1,'total'=>'98.00', );
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


	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
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
