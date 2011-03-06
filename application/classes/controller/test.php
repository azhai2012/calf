<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

	}

	
	public function action_index()
	{	
		parent::before();
		
        $modules= Kohana::modules();
        print_r($modules);
		
		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome