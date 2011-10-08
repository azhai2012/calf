<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shelf {
	
	private $_id;
	private $_data = array();
	private $sheft_db; 
	private $_template_content = NULL;
	private $_template_left = NULL;
	private $_template_left_info = NULL;
	private $_template_right = NULL;
	private $_template_right_ajax = NULL;
	
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shelf($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
       $this->_template_content = View::factory('shelf/content');
       $this->_template_left = View::factory('shelf/left');
       $this->_template_right = View::factory('shelf/right');
       $this->_template_left_info = View::factory('shelf/leftinfo');
       $this->_template_right_ajax = View::factory('shelf/rightajax');
       $this->sheft_db = Calfdb_Shelf::factory($this->_id,$this->_data);
	}
	
	
	public function get_shelf_content(){
		
	    $this->_template_content->get_shelf_left_content = $this->get_shelf_left_content();
	    $this->_template_content->get_shelf_right_content = $this->get_shelf_right_content();	    
	    return $this->_template_content;		
	}
	
	/*
	 * 功能：左边显示查询条件。
	 * 
	 * 
	 */
	function get_shelf_left_content(){
		
		$array_data = $this->sheft_db->get_shelf_left_content();
		 
		$this->_template_left->array_data= $array_data; 
		$this->_template_left->get_shelf_left_shop_info = $this->get_shelf_left_shop_info();
		
		return $this->_template_left;
	}
	
	/*
	 * 功能：显示热销店铺
	 */
 	private function get_shelf_left_shop_info(){
		
		$array_data = $this->sheft_db->get_shelf_left_shop_info();
		
		$this->_template_left_info->array_data = $array_data; 
	
		return $this->_template_left_info;
		
	}
	
	/**
	 * undocumented function
	 *
	 * @return void
	 * @author zhai bob
	 **/
	function ajax_get_shelf_right_content()
	{
	 	 $this->_template_right_ajax->array_data = $this->sheft_db->get_shelf_right_list();
	  	 return  $this->_template_right_ajax;	
	}
	
	/*
	 * 功能：显示商品内容
	 */
	function get_shelf_right_content(){
				
		$this->_template_right->array_data = $this->sheft_db->get_shelf_right_list();
		return  $this->_template_right;
	}
	
	
}
