<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('cart');

	}
	
   
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'1';
		$this->template->callmethod='<script>Azhai.callMethod1("/cartcallmethod?id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>'; 
    
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome