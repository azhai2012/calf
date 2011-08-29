<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 功能：公共类库（memcache , session ） 
 * 
 * 
 * 
 */

class Kohana_Msc {
	
	protected $session;

	
	protected $memcache;
	
	private  $product_compare;
	
	private  $product_id;
	
	private $_data = array();
	
	public static function factory(array $data = NULL){
		
		return new Kohana_Msc($data);
		
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
	
	
	function __construct(array $data=NULL){
		
		
		$this->_data = $data;
		if (isset($this->_data))
		{
	  	   $id = array_key_exists('id', $this->_data)?$this->_data['id']: '';
		   
		   if (!empty($id))
		      $this->session = Session::instance(NULL,$id);
		   else
		      $this->session = Session::instance();
		}
		else 
		   $this->session = Session::instance();
		
	}
	
	
	/*
	 * 功能：将比对的商品写入会话中。 
	 * 
	 */
	public function write_product_compare(){
		
		$array =  $this->read_product_compare(); //(isset($array)) ? $this->read_product_compare(): array();
		$array = (isset($array))? $array :array();
		$value = $this->_data[$this->product_compare][$this->product_id];
		if (!in_array($value, $array))
		{
		  $array = array_values($array);
	  	  $array[] = $value;
	  	  $this->session->set($this->product_compare, $array);
		}

		return $array;
	}
	
	public function read_product_compare(){
		return $this->session->get($this->product_compare);
	}
	
	
	public function set($key,$value){
		
		return $this->session->set($key, $value);
	}
	
	public function get($key){
		return $this->session->get($key);
	}
	
	public function get_once($key){
		
		return $this->session->get_once($key);
	}
	
	public function delete($key){
		return $this->session->delete($key);
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
