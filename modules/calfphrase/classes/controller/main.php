<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {


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
		  <script>Azhai.callMethod1("/callmethod","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");
		  </script>
		  <script>Azhai.onPages({"type":"js","js":["/media/js/jquery.bxSlider.min.js?'.time().'"]});</script>
		  <script>Azhai.onPages({"type":"js","js":["/media/js/main.js?'.time().'"]});</script>
		  
		  '; 
    
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome