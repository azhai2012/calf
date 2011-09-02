<?php defined('SYSPATH') or die('No direct script access.');
/*
 * 功能：商品展示区功能
 * 创建日期：2011-08-22 
 * 作者：azhai
 * 版本：12.04 alpha1 
 
 */

class Controller_Shelf extends Controller {


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
		   <script>Azhai.callMethod1("/callmethod?controller=shelf","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"css","css":["/media/css/shelf.css"]});</script> 
		   <script>Azhai.onPages({"type":"js","js":["/media/js/shelf.js"]});</script> 
		   <script>Azhai.callMethod2("/callmethodajax","[\'compare\']");</script>
		  '; 
    }

     
    public function action_compare(){
    	parent::before();
    	$this->template->menus='';
    	$this->template->css='';
    	$this->template->callmethod='
    			   <script>Azhai.callMethod1("/callmethod?controller=comparelist","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
    			   <script>Azhai.onPages({"type":"css","css":["/media/css/compare.css"]});</script> 
    			  '; 
    }
    
    
	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome
