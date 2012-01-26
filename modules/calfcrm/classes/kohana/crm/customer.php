<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-10 
 * @copyright 2012 
 *
 */

class Kohana_Crm_Customer extends Kohana_Crm {
	
  	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Crm_Customer($id,$data);

	}


	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}


        function get_body_content(){
	  
	   $body = View::factory('crm/customer/default')->set('action','lists');
	   $template = $body;
	
	   return $template;
	
        }


	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL;
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
