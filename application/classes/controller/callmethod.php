<?php defined('SYSPATH') or die('No direct script access.');

class Controller_callmethod extends Controller {


	private $template='';
	private $header;
	private $content;
	private $footer;



	public function before(){
		$this->header  = new Model_Main_Header(); 
		$this->content = new Model_Main_Content(); 
		$this->footer  = new Model_Main_Footer(); 
	}

	public function action_index()
	{
		parent::before();
        $sk = array_key_exists('sk',$_POST)?$_POST['sk']:'';
        $id = array_key_exists('id',$_GET)?$_GET['id']:'';  

		 
        $mod = array_key_exists('mod',$_GET)?$_GET['mod']:'';
		$controller= array_key_exists('controller',$_GET)?$_GET['controller']:'';
		
    	$modary = array("mod"=>$mod);
			
		$mods=$sk;
		switch ($sk) {
		  case "headertop":  $mods  = $this->header ->getmods("top"); break;
		  case "headcontent": $mods = $this->header ->getmods("content");break;
		  case "menus":     $mods = $this->header ->get_menu($controller);break;  
		  case "maincontentcol":  {
		  	switch ($controller){
		  	    case 'main': $mods  = $this->content->get_main_content($id,$modary);break;
		  	    case 'cart': $mods  = $this->content->get_cart_content($id,$modary);break;
				case 'shops': $mods  = $this->content->get_shops_content($id,$modary);break;
		  	    case 'product': $mods  = $this->content->get_product_content($id,$modary);break;
		  	    case 'tuan': $mods  = $this->content->get_tuan_content($id,$modary);break;
			    case 'hots': $mods  = $this->content->get_hots_content($id,$modary);break;
		  	    case 'account': $mods  = $this->content->get_account_content($id,$modary);break;
				case 'discounts': $mods  = $this->content->get_discounts_content($id,$modary);break;
				case 'community': $mods  = $this->content->get_community_content($id,$modary);break;
				default:'';
			}
		  }break;
		  case "mainpagefoot":   $mods   = $this->footer ->get_footer(); break;
		  default:'';
		}
        $this->template = $mods;
		
	}
   
	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome