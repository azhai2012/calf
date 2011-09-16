<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 功能：公共类库（数据库类 ） 
 * @author zhaibob
 * 
 * 
 */

class Kohana_Calfdb {
	
	protected $calf_db;
	private $_id;
	private $_data = array();
	
	public static function factory($id,array $data = NULL){
		return new Kohana_Calfdb($id,$data);
		
	}
	
	/*
	 * 功能：商品明细的数据，每个商品的详细的展示
	 * @author zhaibob
	 *  
	 * 
	 */
	public function product_views_data_array(){
		
		$result= Calfdb_Product::factory($this->_id,$this->_data)->product_views_data_array(); 
         
		return $result;
		
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
