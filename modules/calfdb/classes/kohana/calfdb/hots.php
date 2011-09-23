<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Hots {

	protected $calfdb;
	private $_id;
	private $_data = array();
	private $_Calfdb;  

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Hots($id,$data);

	}

	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
		$this->_Calfdb = Calfdb_Hots::factory($this->_id,$this->_data);
		  
	}

    /**
    * get Host details
    */
    public function get_hots_view_left_content() {
        // TODO : [Hots] get details left
     	$array_data = $this->_Calfdb->get_hots_view_left_content();
        return 	$array_data;
    }


       /**
       * get details right
       */
       public function get_hots_view_right_content() {
           // TODO : [Hots] get details right Data
        $array_data = $this->_Calfdb->get_hots_view_right_content();
           return $array_data;
       }

        /**
        * get host right
        */
        public function get_host_right_content() {
            // TODO : [Hots] get host right data
           $array_data = $this->_Calfdb->get_host_right_content();
            return $array_data;
        }

        /**
        * get host left
        */
        public function get_host_left_content() {
            // TODO : [Hots] get host left data
         $array_data = $this->_Calfdb->get_host_left_content();
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

	function __destruct(){

		//$this->session->destroy();
	}

	function __toString(){

		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;

	}

}