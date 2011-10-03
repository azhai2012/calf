<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-01 
 * @copyright 2011 
 *
 */
class Controller_Admin extends Controller {


    private  $template='';

    public function before(){
		$this->template= View::factory('admin/content');

	}


	public function action_index()
	{	
		parent::before();
		$this->template->callmethod='
                   <script>Azhai.callMethod1("/admin/callmethod?controller=index","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		'; 
        }

	public function action_product()
	{	
		parent::before();
		$this->template->callmethod='
	         <script>Azhai.callMethod1("/admin/callmethod?controller=product","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		'; 
        }

	public function action_tuan()
	{	
		parent::before();
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/admin/callmethod?controller=tuan","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		  '; 
        }

	public function action_hots()
	{	
		parent::before();
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/admin/callmethod?controller=hots","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		  '; 
        }

	public function action_discounts()
	{	
		parent::before();
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/admin/callmethod?controller=discounts","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		  '; 
        }

	public function action_community()
	{	
		parent::before();
		$this->template->callmethod='
		   <script>Azhai.callMethod1("/admin/callmethod?controller=community","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		  '; 
        }

        /**
        * 
        */
        public function action_callmethod() {
            // TODO :
            parent::before();
            $sk = array_key_exists('sk', $_POST) ? $_POST['sk'] : '';
            $id = array_key_exists('id', $_GET) ? $_GET['id'] : '';


           $mod = array_key_exists('mod', $_GET) ? $_GET['mod'] : '';
           $controller = array_key_exists('controller', $_GET) ? $_GET['controller'] : '';
  
           $modary = array("mod" => $mod);

           $mods = $sk;
           switch ($sk) {
            case "headertop": $mods ='';
                break;
            case "headcontent": $mods = Admin::factory($controller)->get_header_content();
                break;
            case "menus": $mods = '';
                break;
            case "maincontentcol": {
                    switch ($controller) {
                        case 'index': $mods = Admin::factory($controller)->get_body_content();
                            break;
                        default:'';
                    }
                }break;
            case "mainpagefoot": $mods = '';
                break;
            default:'';
          }
          $this->template = $mods;
          
        }


	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome

