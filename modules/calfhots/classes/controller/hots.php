<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hots extends Controller {


    private  $template='';
	
    public function before(){
		$this->template= View::factory('public');

	}
   
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/callmethod?controller=hots","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"css","css":["/media/css/hots.css"]});</script> 
		   <script>Azhai.onPages({"type":"js","js":["/media/js/hots.js"]});</script> 
		  '; 
    }

	
	public function after(){
		$this->response->body($this->template);
	}
	
	
} // End Welcome