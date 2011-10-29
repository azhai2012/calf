<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Community {

	private $_id;
	private $_data;
	private $_calfD;
	
	
    public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Community($id,$data);
	}

	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
		$this->_calfDb = Calfdb_Admin::execute('Community',$this->_id,$this->_data); 
	}

	/**
        * 
        */
        public function get_body_content() {
            // TODO :

	    $array_data = $this->_calfDb->get_admin_community_array_data();
            $default = View::factory('admin/community/default');  
            $template = View::factory('admin/body')
                        ->set('array_data',$array_data) 
                        ->set('selected',$this->_id) 
                        ->set('action','community')
                        ->set('mod_content',$default);
            return $template;
        }


	function __get($name){ if(isset($this->$name)){ return $this->$name; }else { return NULL; } }

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

