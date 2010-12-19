<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	private $pub;
	private  $template='';
	private $model;
	private	$session;
	private $userid;
	private $roleid;

	public function before(){


		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		$this->session = Session::instance();


	}

	public function action_index()
	{
		parent::before();

		$sess= $this->session->get('userlogin');

		if (is_array($sess))
		$islogin= $sess[0]->userid;
		else
		$islogin='';

		if (empty($islogin) || $islogin==='')
		{
			$this->request->redirect('./login');
		}

		$this->userid= $sess[0]->userid;
		$this->roleid= $sess[0]->role_id;
		$isadmin= $sess[0]->isadmin;

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
			  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adu","id":"contentcol","loadingid":"loadingIndicator"});</script>';
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