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
		$this->template->callmethod='<script>Azhai.callMethod1("/cartcallmethod","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		 <script>Azhai.onPages({"type":"js","js":["/media/js/cart.js?'.time().'"]});</script>
		
		'; 
    
	}
	
	public function action_step()
	{
		$id = $this->request->param('id');
	    $this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='<script>Azhai.callMethod1("/cartcallmethod?id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		 <script>Azhai.onPages({"type":"js","js":["/media/js/cart.js?'.time().'"]});</script>'; 
		
	}
	
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome