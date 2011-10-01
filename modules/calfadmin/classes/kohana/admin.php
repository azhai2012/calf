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



?>
