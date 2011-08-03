<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shops {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shops($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_shops_content(){
		$result='<div id="shopslist">
		
		           <div id="snav">您现在的位置：店铺</div>
		         
		           <div id="shops_context"> <!-- begin shops_context -->
		              <div class="left"> <!-- begin left -->
		                shops
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                  
	                  </div> <!-- end right -->
		             
		           </div> <!-- end shops_context -->
		           
		</div>';
		return $result;
		
	}
	
	
	
}
