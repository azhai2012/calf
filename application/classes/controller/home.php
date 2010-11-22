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
	    $u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head=''; 
	    foreach ($result as $key => $value){
	    	$head.= $key.":".$value->name;
	    } 
	    $this->template->head=$head;
		$this->template->rfloat=array(array('name'=>'首页','url'=>'/'),array('name'=>'管理','url'=>'/?sk=admin'));	
	    $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_sub_menus().'\'});</script>';
	    $this->template->css='<script>Azhai.onPages({"type":"css","css":["/media/css/apps.css?'.time().'"]});</script>';
	
		
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome