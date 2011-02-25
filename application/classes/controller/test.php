<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

	}

	public function action_index()
	{	
		parent::before();
		
		//$a='a:1:{s:11:"configState";a:7:{s:14:"design_package";s:1:"1";s:12:"design_theme";s:1:"0";s:11:"design_head";s:1:"1";s:13:"design_header";s:1:"0";s:13:"design_footer";s:1:"0";s:16:"design_watermark";s:1:"0";s:17:"design_pagination";s:1:"0";}}';
		//echo serialize($a);
		//print_r(unserialize($a));
		
		//$a= Kohana::config('work/css')->css;
		//print_r($a);
		$results= DB::query(Database::INSERT,"
		              (role_id,resource_id,role_type,permission) 
				         values ('1','ddd','G','deny'),
				                ('1','ddd/dd','G','deny')           
                      ",TRUE)
		           ->as_object()->execute();
		           
	 	print_r($results);           
		
		echo md5('666666');
		
		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome