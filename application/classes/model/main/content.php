<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Content {
	
	function get_main_content($id,$mod){		   
		   return Main::factory($id,$mod)->get_main_content();         
 	}
	
	
	function get_product_content($id,$mod){
		
		$result= Product::factory($id,$mod)->get_product_content();
		return $result;
		
	}
	
	function get_compare_content(){
		return Msc::factory()->get_shelf_product_default_compare();
	}
	
	function get_compare_list_content(){
		return Msc::factory()->get_shelf_product_compare_list();
	}
	
	function get_shelf_content($id,$mod){
		
		$result= Shelf::factory($id,$mod)->get_shelf_content();
		return $result;
		
	}
	
	function get_shops_content($id,$mod){
		
		$result= Shops::factory($id,$mod)->get_shops_content();
		return $result;
		
	}
	
	function get_tuan_content($id,$mod){
		
		$result= Tuan::factory($id,$mod)->get_tuan_content();
		return $result;
		
	}
	
	function get_hots_content($id,$mod){
		
		$result= Hots::factory($id,$mod)->get_hots_content();
		return $result;
		
	}
        
        function get_hots_view_content($id,$mod){
		
		$result= Hots::factory($id,$mod)->get_hots_view_content();
		return $result;
		
	}
	
	function get_discounts_content($id,$mod){
		
		$result= Discounts::factory($id,$mod)->get_discounts_content();
		return $result;
		
	}
	
	function get_community_content($id,$mod){
		
		$result= Community::factory($id,$mod)->get_community_content();
		return $result;
	}
	
	
	
	function get_account_content($id,$mod){
	   
		$result= Account::factory($id,$mod)->get_account_content();
		return $result;	
	}
	
	
    function get_cart_content($id,$mod){
		
		$result= Cart::factory($id,$mod)->get_cart_content();
		return $result;
		
	}
	
	
	
	
}
