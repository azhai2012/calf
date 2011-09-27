<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shops {
	
	private $_id;
	private $_data = array();
	private $CalfDB;
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shops($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
            $this->_id = $id;
            $this->_data = $data; 
            $this->CalfDB = Calfdb_Shops::factory($this->_id,$this->_data); 
	}
	
	public function get_shops_content(){
		 
	        $array_data= $this->CalfDB->get_shops_content();
	        $template = View::factory('shops/content');
	        $template->array_data= $array_data; 
		return $template;
		
	}
	
	 
	 	
}
