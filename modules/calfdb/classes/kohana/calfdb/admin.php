<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-06 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin {

	public $_calfdb;
	private $_id;
	private  $_data = array();

	public static function factory($id,array $data= NULL){
  
		return new Kohana_Calfdb_Admin($id,$data);
	}
        
        public static function _calgdb(){
	
	   return MangoDB::instance('default');
        }
	
	/**
	* 
	*/
	public static function instance($name,$id=NULL,array $data=NULL) {
	    // TODO :
	    $class ='Kohana_Calfdb_Admin_'.$name;
	    return new $class($id,$data);
	}    
	
        function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
		$this->_calfdb= self::_calgdb();
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
