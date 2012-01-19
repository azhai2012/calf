<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Home {
	
	private $_id;
	private $_data;
	private $_calfDb;
	
      	public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Home($id,$data);
	}
	
	public static function instance($classname,array $data = NULL){
	     $class= 'Kohana_Admin_Home_'.$classname;
	     return new $class($data);
        }
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
		$this->_calfDb = Calfdb_Admin::instance('Body',$this->_id,$this->_data);
		 
	}
	
	/**
        * 
        */
        public function get_body_content() {
            // TODO :
	    $array_data = $this->_calfDb->get_admin_body_array_data();  
  	    $default = View::factory('admin/default');
            $template = View::factory('admin/body')
                        ->set('array_data',$array_data) 
                        ->set('selected',$this->_id) 
                        ->set('action','index')
                        ->set('mod_content',$default);
           
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
