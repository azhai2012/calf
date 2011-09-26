<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-26 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Discount {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Discount($id,$data);

	}

        /**
        * get discount content
        */
        public function get_discounts_content() {
            // TODO :[discount] set discount data
               $array_data = array(
		      array(
			    'mod'=>array('title'=>'最新促销商品'),	
			    'lists'=>array(
				array('id'=>'22133','img' =>'/media/images/p02.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p03.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p04.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p05.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p06.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p07.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p08.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p09.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p010.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p011.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
                   ),
                 ),
	     	    array(
			    'mod'=>array('title'=>'打折促销商品'),	
			    'lists'=>array(
				array('id'=>'22133','img' =>'/media/images/p02.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p03.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p04.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p05.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p06.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p07.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p08.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p09.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p010.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
			        array('id'=>'22133','img' =>'/media/images/p011.jpg' ,'name'=>'板蓝根冲剂 20g 广东白云山','content'=>'买10盒积分10分,买20盒积30分','price'=>'2.5','end_at'=>'2012-01-01'),
                     ),
                   ),
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

