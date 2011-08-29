<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Callmethodajax extends Controller {


	private $template='';
	private $header;
	private $content;
	private $footer;



	public function before(){
    }

	public function action_index()
	{
		parent::before();
        $sk = array_key_exists('sk',$_POST)?$_POST['sk']:'';
        $id = array_key_exists('id',$_GET)?$_GET['id']:'';  
			
		$mods=$sk;
		switch ($sk) {
		  case 'compare': $mods  = Msc::factory()->get_shelf_product_compare();break;
		  default:'';
		}
        $this->template = $mods;
		
	}
   
	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome