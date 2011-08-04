<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Community {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Community($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_community_content(){	 
		    
		    $result='<div id="community_list">
		           <div id="cmnav">您现在的位置：折扣区</div>
		           <div id="community_context"> <!-- begin community_context -->
		              <div class="left"> <!-- begin left -->
		              community
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
					  
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end community_context -->
		    </div>';
	        
		return $result;
		
	}
	
    
	
}
