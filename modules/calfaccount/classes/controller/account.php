<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Controller {


    private  $template='';
	
    public function before(){
		$this->template= View::factory('public');

	}
   
	function pub_action_index(){
		parent::before();
	    $action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = $this->request->param('id');
	    	    	  
	    $this->template->callmethod='
		    <script>Azhai.callMethod1("/callmethod?controller=account&mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		    <script>Azhai.onPages({"type":"js","js":["/media/js/account.js"]});</script> 
		  ';
	}
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/callmethod?controller=account&mod=order","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		   <script>Azhai.onPages({"type":"js","js":["/media/js/account.js"]});</script> 
		  '; 
    }

    public function action_view(){
    	$this->pub_action_index();
    }
	
	public function action_order(){
		$this->pub_action_index();
	}
	
     public function action_paymenthistory(){
		$this->pub_action_index();
	}
	
     public function action_coupons(){
	    $this->pub_action_index();
	 }
	 
	 public function action_wishlist(){
	 	$this->pub_action_index();
	 }
	 
	 public function action_mytmplate(){
	 	$this->pub_action_index();
	 }
	 
	
     public function action_pointslist(){
		$this->pub_action_index();
	}
	
    public function action_profileleft(){
		$this->pub_action_index();
	}
	
     public function action_repassword(){
		$this->pub_action_index();
	}
	
    public function action_mysms(){
		$this->pub_action_index();
	}	
	
	 public function action_myquestion(){
		$this->pub_action_index();
	}	
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome
