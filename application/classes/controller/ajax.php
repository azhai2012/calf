<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {


	private $template='';
	private $model;
	private $session;
	private $userid;
	private $roleid;
	private $cust;
	private $sups;
	private $pubs;
	private $username;
	private $sessionname;
	private $links;
	private $his;



	public function before(){

		$this->adminRoles = new Model_Admin_Roles();
		$this->adminUsers = new Model_Admin_Users();
	    $this->adminCms = new Model_Admin_Cms();
	
		$this->sups       = new Model_Mods_Supplier();
		$this->cust       = new Model_Mods_Customer();
		$this->pubs       = new Model_Mods_Public();
		$this->his        = new Model_Mods_Hisptial();
		$this->model      = new Model_Menus();
		$this->meets      = new Model_Mods_Meets();
		$this->sys        = new Model_Mods_System(); 
		

		$islogin = $this->model->checklogin();
		
		if (isset($islogin))
		{
		  if ($islogin['islogin'])
		  {	
	         $this->sess  = (object)$islogin['result'];
		  }
	      else
	        $this->request->redirect($islogin['links']);
  	    } 
        else
            $this->request->redirect($islogin['links']);
		
		$this->userid= $this->sess->userid;
		$this->roleid= $this->sess->role_id;
		$this->isadmin = $this->sess->isadmin;
		//$this->username= $sess->username;
	

	}

	public function isie(){
		return (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE"));
	}


	public function action_index()
	{
		parent::before();
		$_get = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$_fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
		$_setid = array_key_exists('fl',$_GET)?$_GET['fl']:'';

		$supid    = array_key_exists('id',$_POST)? $_POST['id']:'';
		$cxnr     = array_key_exists('cxnr',$_POST)? $_POST['cxnr']:'';
		$picname  = array_key_exists('picname',$_POST)? $_POST['picname']:'';
		$picsize  = array_key_exists('picsize',$_POST)? $_POST['picsize']:'';
		$prodid   = array_key_exists('pid',$_POST)?$_POST['pid']:'';
		$num      = array_key_exists('num',$_POST)?$_POST['num']:'';
		$price    = array_key_exists('price',$_POST)?$_POST['price']:'';
		$content  = array_key_exists('content',$_POST)?$_POST['content']:'';
		$location = array_key_exists('location',$_POST)?$_POST['location']:'';
		$sup_id   =  array_key_exists('supid',$_POST)?$_POST['supid']:'';
		$bdate    = array_key_exists('bdate',$_GET)?$_GET['bdate']:date('Y-m-d');
		$edate    = array_key_exists('edate',$_GET)?$_GET['edate']:date('Y-m-d');
		$id       = array_key_exists('id',$_POST)?$_POST['id']:'';		
		$res      = array_key_exists('res',$_POST)?$_POST['res']:'';
		$users    = array_key_exists('user',$_POST)?$_POST['user']:'';
		$data     = array_key_exists('data',$_POST)?$_POST['data']:'';

		$this->template = '';
		$Prams = array('users'=>array('userid'=>$this->userid,'roleid'=>$this->roleid,'isadmin'=>$this->isadmin),
		               'param'=>array('fl'=>$_fl,'id'=>$id,'content'=>$content,
		                              'bdate'=>$bdate,'edate'=>$edate,
		                              'meetid'=>$_setid,'supid'=>$supid,
		                              'prodid'=>$prodid,'num'=>$num,'price'=>$price)
		);	

	
		
		$mt  = $this->meets->get_meets($_get,$Prams);
		
		$sp  = $this->sups->get_supplier($_get,$Prams);

		$cus = $this->cust->get_costomers($_get,$Prams);
		
		$Prams = array('param'=>array('res'=>$res,'id'=>$id,'fl'=>$_fl,'users'=>$users,'data'=>$data));
		
		$sys = $this->sys->get_system($_get,$Prams);

		
		if ($mt<>'') //会展
		{
		   $this->template = $mt;
		} 
		else 
		if ($sp<>'') //供货商
		{ 
		   $this->template = $sp;
		}
		else
		if ($cus<>'')  //销售客户
		{ 
		   $this->template = $cus;
		}
		else
	    if ($sys<>'')  //系统管理
		{ 
		   $this->template = $sys;
		}
		else
		{
		
	    	switch ($_get) {
				
			case "nt":{
				$this->template = $this->pubs->ajax_get_public_list();
			}break;

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
				$page = array_key_exists('page',$_GET)? $_GET['page']:'1';
				$this->template = $this->adminUsers->ajax_get_admin_users_list($page);
			}break;
			
		    case "adulist":{
				$page = array_key_exists('page',$_GET)? $_GET['page']:'1';
				$this->template = $this->adminUsers->ajax_get_admin_users_list_page($page);
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
			
			case "adc":{
				$this->template = $this->adminCms->ajax_get_admin_cms_view();
					
			}break;
			case "adcedit":{
				$this->template = $this->adminCms->ajax_set_admin_cms($_setid);
					
			}break;
			
			
			

			//会展设置			
		
			//客户管理
			
			//供货商管理			
				
			//医院部
			case "hissp":{
				$ary=array();
				if (!empty($_setid)){
					$sp = explode(',',$_setid);

					$ary = array(
                                'yp'=>$sp[0],
                                'cd'=>$sp[1],

					);
				}
				$this->template = $this->his->ajax_get_hisptial_product_lists($ary);

			}break;

			case "hissplist":{
				$ary=array();
				if (!empty($_setid)){
					$sp = explode(',',$_setid);
					$p= array_key_exists('page',$_GET)?$_GET['page']:'0';
					$ary = array(
                                'yp'=>$sp[0],
                                'cd'=>$sp[1],
                                'p'=>$p,
					);
					$this->template = $this->his->ajax_get_hisptial_product_lists_ajax($ary);
				}



			}break;


			default:
				$this->template = "正在建设中...";
				break;
		}
	  }

	}


	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome