<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-01 
 * @copyright 2011 
 *
 */

class Kohana_Admin {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Admin($id,$data);

	}
	
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}

        /**
        * 
        */
        public function get_header_content() {
            // TODO :
 	   $array_data = array(
	          'login'=>array('name'=>'azhai'),
	          'mod' =>array('name'=>$this->_id),
	          'lists'=>array(
		    array('id' =>'home-link','name'=>'主页','url'=>'/admin/index','action'=>'home'), 
	            array('id' =>'product-link','name'=>'商品区','url'=>'/admin/product','action'=>'product'), 
		    array('id' =>'tuan-link','name'=>'团购','url'=>'/admin/tuan','action'=>'tuan'), 
		    array('id' =>'hots-link','name'=>'展会','url'=>'/admin/hots','action'=>'hots'), 
	 	    array('id' =>'discounts-link','name'=>'促销区','url'=>'/admin/discounts','action'=>'discounts'), 
	 	    array('id' =>'community-link','name'=>'社区','url'=>'/admin/community','action'=>'community'), 
	          ),
	         );


            $template = View::factory('admin/header');
            $template->array_data = $array_data;  
            return  $template;
        }

        /**
        * 
        */
        public function get_body_content() {
            // TODO :
            $template = View::factory('admin/body');
            return $template;
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
