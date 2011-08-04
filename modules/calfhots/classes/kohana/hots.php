<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Hots {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Hots($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_hots_content(){	 
		    
		    $result='<div id="account_list">
		           <div id="hnav">您现在的位置：热卖区</div>
		           <div id="hots_context"> <!-- begin hots_context -->
		              <div class="left"> <!-- begin left -->
		                hots
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
					  
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';
	        
		return $result;
		
	}
	
    
	
}
