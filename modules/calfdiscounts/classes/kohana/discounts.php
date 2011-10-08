<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Discounts {
	
	private $_id;
	private $_data = array();
	private $_CalfDB;
	
        public static function factory($id,array $data = NULL)
	{
		return new Kohana_Discounts($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
           $this->_id = $id;
           $this->_data = $data; 
           $this->CalfDB = Calfdb_Discount::factory($this->_id,$this->_data); 
	}
	
	
	public function get_discounts_content(){	 
		    
		$array_data= $this->CalfDB->get_discounts_content();
		$template = View::factory('discounts/content');  
                $template->array_data= $array_data; 		  
		return $template;
		
	}

	
}
