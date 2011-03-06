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
	private $isadmin;



	public function before(){

		$this->adminRoles = new Model_Admin_Roles();
		$this->adminUsers = new Model_Admin_Users();
	    $this->adminCms = new Model_Admin_Cms();
		$this->pubs       = new Model_Mods_Public();
		$this->model      = new Model_Menus();
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
		
		$this->userid= $this->sess->user_id;

		$this->roleid= '1';
		$this->isadmin= ($this->sess->extra==='N;') ?1:0;
		//$this->username= $sess->username;
	

	}

	public function isie(){
		return (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE"));
	}

	public function foo($name,$_get,$Prams){
	  echo $name;  
	  echo eval("return $name::factory($_get,$Prams)->get_menus();"); 
		
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
		$sup_id   = array_key_exists('supid',$_POST)?$_POST['supid']:'';
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

	
		$this->template = "正在建设中...";
		
		$mods= '';
		
		/*************************************
		 * 1、设置bootstrap.php的模块
		 * 2、增加模块功能
		 * 
		 */
	
		//if ($mods === '')  $mods  = Calfmeet::factory($_get)->get_menus($Prams);
		//if ($mods === '')  $mods  = CalfSupplier::factory($_get,$Prams)->get_menus();
	    //if ($mods === '')  $mods  = CalfCustomer::factory($_get,$Prams)->get_menus(); 
	    
	    
	    /******************************
	     * 系统管理（用户管理和角色管理）
	     */
        if ($mods === '') {
	        $Prams = array('param'=>array('res'=>$res,'id'=>$id,'fl'=>$_fl,'users'=>$users,'data'=>$data));
			$mods = $this->sys->get_system($_get,$Prams);
        }
        
        $this->template = $mods;
		
	}


	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome