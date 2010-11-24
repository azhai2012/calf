<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {


	private  $template='';
	private $model;

	public function before(){
		$this->admin= new Model_Admin();
	}
	
	public function action_index()
	{	
		parent::before();
		$_get = array_key_exists('sk',$_GET)?$_GET['sk']:'';

		$this->template = '';
		switch ($_get) {
			case "adr":{
			   $this->template = $this->admin->ajax_get_admin_roles_list();
			}
			break;
			case "adrnew":{
			   $this->template = $this->admin->ajax_get_admin_roles();
			}
			break;
			case "'adrdel":{
				$_setid = array_key_exists('fl',$_GET)?$_GET['fl']:'';
	        	$this->admin->ajax_set_admin_roles_list($_setid);
			}break;
			default:
				;
			break;
		}
		
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome