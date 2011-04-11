<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

	}
	
    function getUtf8($_str){
		$modcomm=new Model_Comm();
		return $modcomm->utf8Escape($_str);
	}
	
	public function action_index()
	{	
		parent::before();
		
       // $modules= Kohana::modules();
       // print_r($modules);
	    echo $this->getUtf8('大小');
		
		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome