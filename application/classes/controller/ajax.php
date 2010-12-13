<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {


	private  $template='';
	private $model;
	private $session;
	private $userid;
	private $roleid;
	private $cust;
	private $sups;
	

	public function before(){
		$this->adminRoles = new Model_Admin_Roles();
		$this->adminUsers = new Model_Admin_Users();
		$this->sups       = new Model_Mods_Supplier();
		$this->cust       = new Model_Mods_Customer();
		
		$this->session = Session::instance();
		$asession =$this->session->as_array();
		$this->userid= $asession['userlogin']['userid'];
		$this->roleid = $asession['userlogin']['roleid'];
		$this->meets = new Model_Setting_Meets();
	}

	public function action_index()
	{
		parent::before();
		$_get = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$_setid = array_key_exists('fl',$_GET)?$_GET['fl']:'';

		$supid   = array_key_exists('id',$_POST)? $_POST['id']:'';
		$cxnr    = array_key_exists('cxnr',$_POST)? $_POST['cxnr']:'';
		$picname = array_key_exists('picname',$_POST)? $_POST['picname']:'';
		$picsize = array_key_exists('picsize',$_POST)? $_POST['picsize']:'';
		$num     = array_key_exists('num',$_POST)?$_POST['num']:'';
		$price   = array_key_exists('price',$_POST)?$_POST['price']:'';
		$content = array_key_exists('content',$_POST)?$_POST['content']:'';
        $location = array_key_exists('location',$_POST)?$_POST['location']:''; 

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
			
			//客户管理
			case "custmeetjoin":{
				
				$this->template = $this->cust->ajax_get_mods_cus_list();
				
			}break;
			
			case "custmtcart":{
				
				$this->template = $this->cust->ajax_get_mods_customer_meet_cart_list();
				
			}break;

			//供货商管理
				
			case "supmt":{
				$this->template = $this->sups->ajax_get_mods_sup_list(array('userid'=>$this->userid,'meetid'=>$_setid));
			}break;
				
			case "supfav":{
				
	         	$this->template = $this->sups->ajax_get_mods_sup_fav(array('userid'=>$this->userid,'meetid'=>$_setid));
	         	
			}break;
			case "supaddfav":{
				
				$this->template = $this->sups->ajax_Set_Model_Supplier(array('userid'=>$this->userid,'meetid'=>$_setid,'content'=>$content,'location'=>$location),"UPDATEFAV");
	        
			}break;
			
			case "supnew":{

				$this->template = $this->sups->ajax_get_mods_sup_new(array('userid'=>$this->userid));

			}break;

			case "supmview":{

				$this->template = $this->sups->ajax_get_mods_sup_view_list(array('userid'=>$this->userid,'meetid'=>$_setid));
				
			}break;
			
			case "supdelprod":{

				$this->template = $this->sups->ajax_Set_Model_Supplier($_setid,"DELETE");

			}break;
				
				
			case "supselectproc":{

				$this->template = $this->sups->ajax_get_select_proc_dialog(array('userid'=>$this->userid,'meetid'=>$_setid));

			}break;

			case "suporder":{
				
				$this->template = $this->sups->ajax_get_setting_suporder_list(array('userid'=>$this->userid,'meetid'=>$_setid));
			
			}break;
				
			case "suppropose":{
				$this->template = $this->sups->ajax_get_setting_suppropose_list();
			}break;
				
			case "supaddprod":{

				$_setid = $_setid.';'.$this->userid;
				$this->template = $this->sups->ajax_Set_Model_Supplier($_setid,"INSERT");
					
			}break;
				
			case "supsetprodinfo":{
				$ary = array('id'=>$supid,'cxnr'=>$cxnr,'picname'=>$picname,'picsize'=>$picsize,'num'=>$num,'price'=>$price);
				$this->template = $this->sups->ajax_Set_Model_Supplier($ary,"UPDATEINFO");

			}break;
			case "supuploadpic":{

				$this->template = $this->sups->ajax_upload_file($_setid);
				 
			}break;
			case "supmupload":{

				$this->template = $this->sups->ajax_get_select_upload_product_picture_dialog(array("id"=>$_setid));

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