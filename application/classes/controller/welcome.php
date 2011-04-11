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
  	    
        
	}

	public function action_index()
	{
		parent::before();

		$this->userid= $this->sess->user_id;
		$this->roleid= '1';
		$isadmin= ($this->sess->extra==='N;') ?1:0;

		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'nt';
		//$u = new Calf_Menus();
		//$result = Calfpub::getmenus($u);
		//$head='';
		//foreach ($result as $key => $value){
		//	$head.= $key.":".$value->name;
		//}

		$this->template->isadmin= $isadmin;
		$this->template->info= array('id'=>$this->userid);
		$this->template->head='';//$head;
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
                $this->template->css = '<script>Azhai.onPages({"type":"js","js":["/media/js/admin.js?'.time().'"]});</script>';
			  
			  }break;
			  case 'adc':
			  {
			   	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adc","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                $this->template->css = '<script>Azhai.onPages({"type":"js","js":["/media/js/admin.js?'.time().'"]});</script>';
			  
			  }break;
			}
		}
		else
		{
	       $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_menus($this->userid).'\'});</script>';
		   $contentcol = Kohana::config('work/basic')->contentcol;
		   foreach($contentcol as $key=>$value)
		   {		   	  
		   	  if ($key===$sk)
		   	  {
		   	  	$this->template->contentcol = $value['values'];	
		   	  }
		   }
			/*
			switch ($sk){
				case 'nt':{
					$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=nt","id":"contentcol","loadingid":"loadingIndicator"});</script>';
				}break;
				case 'cus':{
					$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cus","id":"contentcol","loadingid":"loadingIndicator"});</script>';
				}break;
				default:{}
			}
			*/
				
		}

		 




	}

	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome