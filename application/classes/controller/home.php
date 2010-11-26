<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	private  $template='';
	private $model;

	public function before(){
		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
	}
	
	public function action_index()
	{	
		parent::before();
		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
	    $u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head=''; 
	    foreach ($result as $key => $value){
	    	$head.= $key.":".$value->name;
	    } 
	    $this->template->contentcol='';
	    $this->template->head=$head;
		$this->template->rfloat=array(array('name'=>'管理','url'=>'/?sk=admin'),array('name'=>'首页','url'=>'/'));	
		if (substr($sk,0,2)==='ad')
		{
		   $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_admin_menus().'\'});</script>';
				
	       switch ($sk){
			  case 'adr':{
		       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adr","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'adrnew':{
		 	  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'adredit':{
			  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  
			}
			
			
		}
	 	else
	 	{
	    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_menus().'\'});</script>';
	    
		}
		
		$this->template->css='<script>Azhai.onPages({"type":"css","css":["/media/css/apps.css?'.time().'"]});</script>';
	    
	    
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome