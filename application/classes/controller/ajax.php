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
		$this->sups       = new Model_Mods_Supplier();
		$this->cust       = new Model_Mods_Customer();
		$this->pubs       = new Model_Mods_Public();
		$this->his        = new Model_Mods_Hisptial();
		$this->model      = new Model_Menus();

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
		$this->meets = new Model_Setting_Meets();
	}

	public function isie(){
		return (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE"));
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
		$prodid  = array_key_exists('pid',$_POST)?$_POST['pid']:'';
		$num     = array_key_exists('num',$_POST)?$_POST['num']:'';
		$price   = array_key_exists('price',$_POST)?$_POST['price']:'';
		$content = array_key_exists('content',$_POST)?$_POST['content']:'';
		$location = array_key_exists('location',$_POST)?$_POST['location']:'';
		$sup_id  =  array_key_exists('supid',$_POST)?$_POST['supid']:'';
		$bdate   = array_key_exists('bdate',$_GET)?$_GET['bdate']:'';
		$edate   = array_key_exists('edate',$_GET)?$_GET['edate']:'';
		$id      = array_key_exists('id',$_POST)?$_POST['id']:'';

		$this->template = '';
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
				
			case "cus":{
				$this->template = $this->cust->ajax_get_mods_cus_main();

			}break;
				
			case "custmeetjoin":{

				$this->template = $this->cust->ajax_get_mods_cus_list();

			}break;
				
			case "custmtprodview":{
				$ary1 = explode(',',$_setid);
				$ary= array('userid'=>$this->userid,'username'=>$this->username,'meetid'=>$ary1[0],'supid'=>$ary1[1],'prodid'=>$ary1[2]);
				$this->template = $this->cust->ajax_get_mods_cus_prod_view_list($ary);

			}break;
				
			case "custmtview":{
				$ary1 = explode(',',$_setid);
				$ary= array('userid'=>$this->userid,'meetid'=>$ary1[0],'supid'=>$ary1[1],'username'=>$this->username);
				$this->template = $this->cust->ajax_get_mods_cus_view_list($ary);

			}break;
				

			case "custaddtotmpcart":{
				$ary = array('userid'=>$this->userid,'supid'=>$sup_id,'meetid'=>$_setid,'pid'=>$prodid,'num'=>$num,'price'=>$price);
				if ($this->isie()) {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"TMPDBCART");
				}
				else {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"TMPDBCART");
				}
			}break;
				
			case "custupdtmpcart":{
				$ary = array('userid'=>$this->userid,'supid'=>$sup_id,'meetid'=>$_setid,'pid'=>$prodid,'num'=>$num,'id'=>$id);
				if ($this->isie()) {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"UPTTMPDBCART");
				}else {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"UPTTMPDBCART");
				}
			}break;
				
			case "custdeltmpcart":{
				$ary = array('userid'=>$this->userid,'supid'=>$sup_id,'meetid'=>$_setid,'pid'=>$prodid,'num'=>$num);
				if ($this->isie()) {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"DELTMPDBCART");
				}else {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"DELTMPDBCART");
				}
					
			}break;
				
			case "custtmptocart":{
				$ary = array('userid'=>$this->userid);
				if ($this->isie()) {
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"INSERTDBCART");
				}
				else
				{
					$this->template = $this->cust->ajax_Set_Model_Customer($ary,"INSERTDBCART");
				}
				 
			}break;
				
			case "custropose":{
				$this->template = $this->cust->ajax_get_mods_cus_ropose(array('userid'=>$this->userid));
			}break;

			case "addropose":{
				$this->template = $this->cust->ajax_get_mods_cus_add_ropose(array('userid'=>$this->userid));
			}break;
				
			case "custaddropose":{
				 
				$ary = array('userid'=>$this->userid,'content'=>$content);
				$this->template = $this->cust->ajax_Set_Model_Customer($ary,"INSTERROPOSE");
				 
			}break;

			case "custmtgettmpcart":{

				$this->template = $this->cust->ajax_get_mods_cus_tmp_cart(array('userid'=>$this->userid,'meetid'=>$_setid));
					
			}break;

			case "custmtorder":{

				$this->template = $this->cust->ajax_get_mods_customer_meet_cart_list($this->userid,$bdate,$edate);

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

			case "supselectprocother":{
				$fls=explode(',',$_setid);
				$this->template = $this->sups->ajax_get_select_proc_dialog_other(array('userid'=>$this->userid,'meetid'=>$fls[0],'spmc'=>$fls[1],'cdmc'=>$fls[2]));
					
			}break;

			case "supselectproc":{
				$fls=explode(',',$_setid);
				$this->template = $this->sups->ajax_get_select_proc_dialog(array('userid'=>$this->userid,'meetid'=>$fls[0],'spmc'=>$fls[1]));

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


	public function after(){
		$this->request->response = $this->template;
	}



} // End Welcome