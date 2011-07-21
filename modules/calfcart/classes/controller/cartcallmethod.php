<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cartcallmethod extends Controller {


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
        $id = array_key_exists('id',$_GET)?$_GET['id']:'1';   
		$mods='';
		switch ($sk) {
		  case "headertop":  $mods  = $this->header ->getmods("top"); break;
		  case "headcontent": $mods = $this->header ->getmods("content");break;
		  case "menus":     $mods = $this->header ->get_menu();break;  
		  case "maincontentcol":  $mods  = $this->content->get_cart_content($id);break;
		  case "mainpagefoot":   $mods   = $this->footer ->get_footer(); break;
		  default:'';
		}
        $this->template = $mods;
		
	}
   
	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome