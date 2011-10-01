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
		   <script>Azhai.onPages({"type":"css","css":["/media/css/admin.css"]});</script> 
		   <script>Azhai.callMethod1("/admin/callmethod?controller=admin","[\'headertop\',\'headcontent\',\'menus\',\'maincontentcol\',\'mainpagefoot\']");</script>
		   <script>Azhai.onPages({"type":"js","js":["/media/js/admin.js"]});</script> 
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
            case "headertop": $mods ='this is headertop!';
                break;
            case "headcontent": $mods = 'this is headercontent';
                break;
            case "menus": $mods = 'this is menus';
                break;
            case "maincontentcol": {
                    switch ($controller) {
                        case 'main': $mods = 'this is main';
                            break;
                        default:'';
                    }
                }break;
            case "mainpagefoot": $mods = 'this is foot';
                break;
            default:'';
          }
          $this->template = $mods;
          
        }


	public function after(){
		$this->response->body($this->template);
	}

} // End Welcome

