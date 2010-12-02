<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {


	private  $template='';
	private $model;
	private $session;
	private $ghsid;

	public function before(){
		$this->adminRoles = new Model_Admin_Roles();
		$this->adminUsers = new Model_Admin_Users();
		$this->sups       = new Model_Mods_Supplier();
		$this->session = Session::instance();
		$asession =$this->session->as_array();
		$this->ghsid= $asession['userlogin']['ghsid'];
		$this->meets = new Model_Setting_Meets();
	}
	
	public function action_index()
	{	
		parent::before();
		$_get = array_key_exists('sk',$_GET)?$_GET['sk']:'';
        $_setid = array_key_exists('fl',$_GET)?$_GET['fl']:'';
      
		$this->template = '';
		switch ($_get) {
			
			//角色和权限
			case "adr":{
			   $this->template = $this->adminRoles->ajax_get_admin_roles_list();
			}break;
			case "adrnew":{			
			   $this->template = $this->adminRoles->ajax_get_admin_roles_new();
			}
			break;
			case "adrview":{			
			   $this->template = $this->adminRoles->ajax_get_admin_roles_view($_setid);
			}
			break;			
			case "adradd":{
				$this->template =$this->adminRoles->ajax_set_admin_roles($_setid,"INSERT");
			}break;
			case "adrdel":{
		       	$this->template =$this->adminRoles->ajax_set_admin_roles($_setid,"DELETE");
			}break;
			case "adredit":{				
	        	$this->template =$this->adminRoles->ajax_set_admin_roles($_setid,"UPDATE");
			}break;
			
			//用户管理
			case "adu":{
			   $this->template = $this->adminUsers->ajax_get_admin_users_list();
			}break;
			
			case "adunew":{
			   $this->template = $this->adminUsers->ajax_get_admin_users_new();	
			  
			}break;
			
			case "aduview":{			
			   $this->template = $this->adminUsers->ajax_get_admin_users_view($_setid);
			}
			break;	
			
			case "aduadd":{
			   $this->template = $this->adminUsers->ajax_set_admin_users($_setid,"INSERT");	
			  
			}break;
			
			case "adudel":{
			   $this->template = $this->adminUsers->ajax_set_admin_users($_setid,"DELETE");	
			  
			}break;

			case "aduedit":{
			   $this->template = $this->adminUsers->ajax_set_admin_users($_setid,"UPDATE");	
			  
			}break;
			
			//会展设置
			
			case "meet":{
			   $this->template = $this->meets->ajax_get_setting_meet_list();	
			}break;
			
			case "meetnew":{
			   $this->template = $this->meets->ajax_get_setting_meet_new();	
			}break;
			
			case "meetview":{
			   $this->template = $this->meets->ajax_get_setting_meet_view($_setid);	
			}break;
			
			case "meetadd":{
				$this->template = $this->meets->ajax_set_setting_meet($_setid,"INSERT");	
			}break;
			
		    case "meetdel":{
				$this->template = $this->meets->ajax_set_setting_meet($_setid,"DELETE");	
			}break;
			
		    case "meetedit":{
				$this->template = $this->meets->ajax_set_setting_meet($_setid,"UPDATE");	
			}break;

			//供货商管理
			
			case "supmt":{
				$this->template = $this->sups->ajax_get_mods_sup_list(array('ghsid'=>$this->ghsid));	
			}break;
			
			case "supnew":{
				
				$this->template = $this->sups->ajax_get_mods_sup_new(array('ghsid'=>$this->ghsid));	
				
			}break;
			
			case "supselectproc":{
				
				$this->template = $this->sups->ajax_get_select_proc_dialog(array('ghsid'=>$this->ghsid));	
				
			}break;
			
			
			
			case "suporder":{
				$this->template = $this->sups->ajax_get_setting_suporder_list();	
			}break;
			
			case "suppropose":{
				$this->template = $this->sups->ajax_get_setting_suppropose_list();	
			}break;
			
			
			default:
				$this->template = "正在建设中...";
			break;
		}
		
	}

	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome