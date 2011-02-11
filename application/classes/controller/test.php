<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

	}

	public function action_index()
	{	
		parent::before();
		$a= '<script>Azhai.onPages({"type":"","id":"navside","content":":m"});</script>';
        $a1=array(':m'=>111);
        $b= strtr($a,$a1);
        
        print_r($b);
		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome