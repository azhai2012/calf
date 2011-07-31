<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Controller {


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
		   <script>Azhai.callMethod1("/Acallmethod?mod=order&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
    
	}
	
	
	public function action_order(){
		
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
     public function action_paymenthistory(){
		
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
     public function action_coupons(){
		
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
     public function action_pointslist(){
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
    public function action_profileleft(){
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
     public function action_repassword(){
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}
	
    public function action_mysms(){
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}	
	
	 public function action_myquestion(){
		parent::before();
		$action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = array_key_exists('id',$_GET)?$_GET['id']:'';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/acallmethod?mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/account.css"]});</script> 
		  '; 
	}	
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome