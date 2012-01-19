<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-11 
 * @copyright 2012 
 *
 */
class Kohana_Admin_Home_Home {

	private $_id;
	private $_data;
	private $_calfDb;

      	public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Home_Home($id,$data);
	}

        public static function instance($classname){
	     $class= 'Kohana_Admin_Home_Mod_'.$classname;
	     return new $class;
        }

        public function get_mod_home_list(){
	    $mod = self::instance('Home')
	           ->get_body_content($this->_data);
	 
	    echo $mod;
        }       


	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
		$this->_calfDb = Calfdb_Admin::instance('Body',$this->_id,$this->_data);

	}
	
	function get_body_content(){
		  $array_data = array();
		  $default = View::factory('admin/mod_manager/default');
	          $template = $default;
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

