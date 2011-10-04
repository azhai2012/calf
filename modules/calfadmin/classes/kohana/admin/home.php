<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Home {
	
	private $_id;
	private $_data;
	
      	public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Home($id,$data);
	}
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}
	
	/**
        * 
        */
        public function get_body_content() {
            // TODO :

		$array_data = array(
			 array('id'=>1,'mod_name'=>'notices','name' =>'公告管理','url'=>'/admin/index/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'news','name' =>'新闻管理','url'=>'/admin/index/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'advertising','name' =>'广告管理','url'=>'/admin/index/3',
			                  'lists'=>array(
				           array('name'=>'添加广告栏目','url'=>'#'),
				      	   array('name'=>'广告列表','url'=>'#'),
				           ),
			      ), 
			 array('id'=>4,'mod_name'=>'shows','name' =>'展示管理','url'=>'/admin/index/4','lists'=>array(
			           array('name'=>'添加展示栏目','url'=>'#'),
			      	   array('name'=>'展示列表','url'=>'#'),
			                   ),
			       ) , 
			 );

            $template = View::factory('admin/body');
            $template->array_data = $array_data;
            $template->selected = $this->_id;
            $template->mod_content = $this->get_mod_content();
            return $template;
        }
	
	/**
	* 
	*/
	private function get_mod_content() {
	    // TODO :
	     switch ($this->_id) {
	     	case 1:
	     	     $template = View::factory('admin/home/notice');
	     	       break;
                case 2:
	       	     $template = View::factory('admin/home/news');
                break;  
	     	default:
	         	$template = '';
	     		break;
            }
	    return $template;
	}
	
	
	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
           } 
	}

	function __set($name,$value){

		$this->$name = $value;
	}


	function __destruct(){

		//$this->session->destroy();
	}

	function __toString(){

		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;

	}
	
		
}
