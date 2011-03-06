<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Menus  implements Kohana_Deeb {

	function getmenus(){
		$query =DB::query(Database::SELECT, 'SELECT * FROM admin_role ',TRUE)
		        //->param(':name','login')
		        ->as_object()
		        ->execute();
		return $query;
	}
	
	function getid(){
		
	}


}