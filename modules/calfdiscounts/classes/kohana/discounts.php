<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Discounts {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Discounts($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_discounts_content(){	 
		    
		    $result='<div id="discounts_list">
		           <div id="hnav">您现在的位置：折扣区</div>
		           <div id="hots_context"> <!-- begin hots_context -->
		              <div class="left"> <!-- begin left -->
		                discounts
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
					  
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';
	        
		return $result;
		
	}
	
    
	
}
