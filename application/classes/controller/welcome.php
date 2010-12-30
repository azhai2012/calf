<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	private $pub;
	private  $template='';
	private $model;
	private	$session;
	private $userid;
	private $roleid;
	private $sess;
	private $sessionname;
	private $links;


	public function before(){


		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		
	    $memche = Kohana::config('settings')->memcache;
		
		$memcached = $memche['memcached'];
		$this->sessionname = $memche['sessionname'];
		$this->links= $memche['links'];
		if (!$memcached)
		{ 
			$this->session = Session::instance();
		}
		else
		{
          if (isset($_SERVER['HTTP_COOKIE']))
            $a = explode('session=',$_SERVER['HTTP_COOKIE']);
          else
            $this->request->redirect($this->links);
		
		  $id= substr($a[1],0,26);
          $memcache_obj = new memcache;
          $memcache_obj->connect($memche['tcpip'],$memche['ports']);
          $m_obj = $memcache_obj->get("$id");
          $m = explode('|',$m_obj);
          if (!is_array($m) or empty($m[0]))
             $this->request->redirect($this->links);   
          else
          $this->session = array($this->sessionname => unserialize($m[4])); 
		}
	}

	public function action_index()
	{
		parent::before();
		
		$sess= $this->session[$this->sessionname][0];
		
        if (is_array($this->session))
		$islogin= $sess->userid;
		else
		$islogin='';

		if (empty($islogin) || $islogin==='')
		{
			$this->request->redirect($this->links);
		}

		$this->userid= $sess->userid;
		$this->roleid= $sess->role_id;
		$isadmin= $sess->isadmin;

		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'nt';
		$u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head='';
		foreach ($result as $key => $value){
			$head.= $key.":".$value->name;
		}
	
		$this->template->isadmin= $isadmin;
		$this->template->info= array('id'=>$this->userid);
		$this->template->head=$head;
		if ((int)$isadmin===1)
		$this->template->rfloat=array(array('name'=>'管理','url'=>'/?sk=admin'),array('name'=>'首页','url'=>'/'));
		else
		$this->template->rfloat=array(array('name'=>'首页','url'=>'/'));
	  
		$this->template->contentcol='';
		$this->template->css='';
	  
		if (substr($sk,0,2)==='ad' && (int)$isadmin===1)
		{
			$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_admin_menus().'\'});</script>';
			switch ($sk){
				case 'adr':
					{
						$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adr","id":"contentcol","loadingid":"loadingIndicator"});</script>';
					}break;
						
				case 'adu':
			  {
			  	$page =  array_key_exists('page',$_GET)? '&page='.$_GET['page']:'';

			  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adu'.$page.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			}
		}
		else
		{
			$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_menus($this->userid).'\'});</script>';
			switch ($sk){
				case 'nt':{
					$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=nt","id":"contentcol","loadingid":"loadingIndicator"});</script>';
				}break;
				case 'cus':{
					$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cus","id":"contentcol","loadingid":"loadingIndicator"});</script>';
				}break;
				default:{}
			}
			
		}

     




	}

	public function after(){
		$this->request->response = $this->template;
	}



} // End Welcome