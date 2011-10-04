<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Discounts {
	
	private $_id;
	private $_data;
	
      	public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Discounts($id,$data);
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
			 array('id'=>1,'mod_name'=>'notices','name' =>'促销管理','url'=>'/admin/discounts/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'news','name' =>'促销列表','url'=>'/admin/discounts/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'advertising','name' =>'促销分析','url'=>'/admin/discounts/3',
			                  'lists'=>array(
				           array('name'=>'商品销售分析','url'=>'#'),
				      	   array('name'=>'销售区域分析','url'=>'#'),
				           ),
			      ), 
			 );

            $template = View::factory('admin/body');
            $template->array_data = $array_data;
            $template->selected = $this->_id;
            $template->mod_content ='';
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
