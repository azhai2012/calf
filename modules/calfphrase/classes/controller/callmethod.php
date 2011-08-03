<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Callmethod extends Controller {


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
		$controller= array_key_exists('controller',$_GET)?$_GET['controller']:'';
		$mods='';
		switch ($sk) {
			case "headertop":  $mods  = $this->header ->getmods("top"); break;
			case "headcontent": $mods = $this->header ->getmods("content");break;
			case "menus":     $mods = $this->header ->get_menu($controller);break;
			case "maincontentcol":  $mods  = $this->content->get_main_content();break;
			case "mainpagefoot":   $mods   = $this->footer ->get_footer(); break;
			default:'';
		}
		$this->template = $mods;

	}
	 
	public function after(){
		$this->response->body($this->template);
	}



} // End Welcome