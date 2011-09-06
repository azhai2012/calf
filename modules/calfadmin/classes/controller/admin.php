<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {


    private  $template='';
	
    public function before(){
		$this->template= View::factory('admin');

	}
   
	function pub_action_index(){
		parent::before();
	    $action = $this->request->action();
		$this->template->menus='';
	    $this->template->css='';
	    $id = $this->request->param('id');
	    	    	  
	    $this->template->callmethod='
		    <script>Azhai.callMethod1("/callmethod?controller=admin&mod='.$action.'&id='.$id.'","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		    <script>Azhai.onPages({"type":"css","css":["/media/css/admin.css"]});</script> 
		    <script>Azhai.onPages({"type":"js","js":["/media/js/admin.js"]});</script> 
		  ';
	}
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/callmethod?controller=admin&mod=config","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"css","css":["/media/css/admin.css"]});</script> 
		   <script>Azhai.onPages({"type":"js","js":["/media/js/admin.js"]});</script> 
		  '; 
    }

    /*
	 *  选项
	 */
    public function action_config(){
    	$this->pub_action_index();
    }
	
	/*
	 * 商品管理 
	 */
	public function action_prodoct(){
		$this->pub_action_index();
	}
	
	/*
	 * 品牌管理
	 */
    public function action_shops(){
		$this->pub_action_index();
	}
	
	 /*
	  * 积分管理
	  */
	 public function action_points(){
	    $this->pub_action_index();
	 }
	 
	 
	 /*
	  * 赠品管理
	  */ 
     public function action_coupons(){
	    $this->pub_action_index();
	 }
	 
	 /*
	  * 模板管理
	  */
	 public function action_tmplate(){
	 	$this->pub_action_index();
	 }
	 
	 /*
	  * 用户管理
	  */
     public function action_users(){
		$this->pub_action_index();
	}

     /*
	  * 供货商管理
	  */
     public function action_suppers(){
		$this->pub_action_index();
	}
	 
	 
	/*
	 * 账户信息
	 */  
	public function action_informations(){
		$this->pub_action_index();
	}
	
	
	/*
	 * 短信管理 信息管理
	 */
    public function action_sms(){
		$this->pub_action_index();
	}	
	
	/*
	 *投诉管理 
	 */
	public function action_question(){
		$this->pub_action_index();
	}	
	
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome
