<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Logout extends Controller {


	private  $template='';
    private  $session;
	public function before(){
	
		$this->session = Session::instance();
	}

	public function action_index()
	{	
		parent::before();
		$this->session->set('userlogin','');
		$this->request->redirect('/');            	
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome