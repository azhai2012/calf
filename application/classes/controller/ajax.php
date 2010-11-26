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
        $_setid = array_key_exists('fl',$_GET)?$_GET['fl']:'';
      
		$this->template = '';
		switch ($_get) {
			case "adr":{
			   $this->template = $this->admin->ajax_get_admin_roles_list();
			}break;
			case "adrnew":{			
			   $this->template = $this->admin->ajax_get_admin_roles_new();
			}
			break;
			case "adrview":{			
			   $this->template = $this->admin->ajax_get_admin_roles_view($_setid);
			}
			break;			
			case "adradd":{
				$this->template =$this->admin->ajax_set_admin_roles($_setid,"INSERT");
			}break;
			case "adrdel":{
		       	$this->template =$this->admin->ajax_set_admin_roles($_setid,"DELETE");
			}break;
			case "adredit":{				
	        	$this->template =$this->admin->ajax_set_admin_roles($_setid,"UPDATE");
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