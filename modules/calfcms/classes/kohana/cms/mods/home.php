<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Cms_Mods_Home {
	
	private $_id;
	private $_data;
	private $_calfDb;
	
      	function __construct(array $data=NULL){
		$this->_data= $data;
	}
	
	/**
        * 
        */
        public function get_body_content(array $data = NULL) {
            // TODO :
 	    $array_data = Calfdb_Cms::instance('ModManager')->get_cms_mods_home_array_data();
	    $default = View::factory('cms/mod/default')->set('array_data',$array_data);  
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
