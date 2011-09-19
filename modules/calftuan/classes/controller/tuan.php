<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tuan extends Controller {


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
		   <script>Azhai.onPages({"type":"css","css":["/media/css/tuan.css"]});</script> 
		   <script>Azhai.callMethod1("/callmethod?controller=tuan","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"js","js":["/media/js/tuan.js"]});</script> 
		  '; 
    }

    
	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome
