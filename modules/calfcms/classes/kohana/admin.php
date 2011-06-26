<?php defined('SYSPATH') or die('No direct access allowed.');


class Controller_Calfcms_Admin extends Controller {

	public function before(){
	  $this->template='aaa';
	}
	
	public function action_index()
	{
		parent::before();
		
	}
	
   public function after(){
		$this->response->body($this->template);
	}
	
}