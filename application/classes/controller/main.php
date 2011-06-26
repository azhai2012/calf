<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('main');

	}
	
   
	
	public function action_index()
	{	
		parent::before();
		$this->template->menus='';
	    $this->template->css='';
		$this->template->contentcol='This is main ';
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome