<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Procduct {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Model_Main_Procduct($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_procduct_content(){
		$result='<div id="proclist">
		           <div id="pnav">您现在的位置：'.$this->_id.'</div>
		</div>';
		return $result;
		
	}
	
	
	
}
