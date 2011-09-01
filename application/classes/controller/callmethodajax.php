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
        $fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
			
		$mods=$sk;
		switch ($sk) {
		  case 'compare': {
		  	$ary= array('product_compare'=>array('product_id'=>$id));
		  	$mods  = Msc::factory($ary);
		  	$result = $mods->get_shelf_product_compare();
		  	if ($fl==='close')
		  	{
		  	  $result= $mods->get_shelf_close_product_compare();
		  	}
		  }break;
		  default:'';
		}
        $this->template = $result;
		
	}
   
	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome