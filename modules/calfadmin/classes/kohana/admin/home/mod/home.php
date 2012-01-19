<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Home_Mod_Home {
	
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
 	    $p = array('page'=>0,'prepage'=>100,'sortname'=>'mod','sortorder'=>'desc','query'=>'02','qtype'=>'flag');
	    $Cms_db = Calfdb_Admin::instance('ModManager','',$p);
	    $data = $Cms_db->get_admin_mods_manager_array_data();
	    $rows=$data['rows'];
	    $default = View::factory('admin/mod_manager/home/show/list')->set('array_data',$rows);  
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
