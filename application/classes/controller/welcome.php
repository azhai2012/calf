<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	private $pub;
	private  $template='';
	private $model;

	public function before(){
		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		$this->admin= new Model_Admin();
		
	}
	
	public function action_index()
	{	
		parent::before();
        $sk = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head=''; 
	    foreach ($result as $key => $value){
	    	$head.= $key.":".$value->name;
	    } 
	    $this->template->head=$head;
	    $this->template->rfloat=array(array('name'=>'管理','url'=>'/?sk=admin'),array('name'=>'首页','url'=>'/'));
	    $this->template->contentcol=''; 
	    
		if (substr($sk,0,2)==='ad')
		{
	        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_admin_menus().'\'});</script>';
			if ($sk==='adr') 
			{
		      //$this->template->contentcol ='<script>Azhai.onPages({"type":"","id":"contentcol","content":\''.$this->admin->get_admin_roles().'\'});</script>';
			   $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adr","id":"contentcol","loadingid":"loadingIndicator"});</script>';
		 
			}
		}
	 	else
	 	{
	    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_menus().'\'});</script>';
	    
		}
		
	    $this->template->css='<script>Azhai.onPages({"type":"css","css":["/media/css/basic.css?'.time().'"]});</script>';
		
		
		
		
		
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome