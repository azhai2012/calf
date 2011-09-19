<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('public');

	}
	
   
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		 <script>Azhai.onPages({"type":"css","css":["/media/css/product.css"]});</script>
		 <script>Azhai.callMethod1("/callmethod?controller=product&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		 <script>Azhai.onPages({"type":"js","js":["/media/js/product.js"]});</script>
                   
		 '; 
    
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome