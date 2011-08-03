<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shops extends Controller {


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
		 <script>Azhai.callMethod1("/scallmethod?controller=shops&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"css","css":["/media/css/shops.css"]});</script>
		 '; 
    
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome