<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shelf {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shelf($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_shelf_content(){
		
		    $result='<div id="account_list">
		           <div id="tnav">您现在的位置：货架</div>
		           <div id="tuan_context"> <!-- begin tuan_context -->
		              <div class="left"> <!-- begin left -->
		                货架
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end tuan_context -->
		    </div>';
	        
		return $result;
		
	}
	
    
	
	
}
