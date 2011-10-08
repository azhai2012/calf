<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('public');

	}
	
   
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='<script>Azhai.onPages({"type":"css","css":["/media/css/cart.css"]});</script>
		 <script>Azhai.callMethod1("/callmethod?controller=cart","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		 <script>Azhai.onPages({"type":"js","js":["/media/js/cart.js?'.time().'"]});</script>
		 
		 
		
		'; 
    
	}
	
	public function action_step()
	{
		$id = $this->request->param('id');
	    $this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='
		 <script>Azhai.onPages({"type":"css","css":["/media/css/cart.css"]});</script>
		 <script>Azhai.callMethod1("/callmethod?controller=cart&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		 <script>Azhai.onPages({"type":"js","js":["/media/js/cart.js?'.time().'"]});</script> 
		';
	}
	
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome