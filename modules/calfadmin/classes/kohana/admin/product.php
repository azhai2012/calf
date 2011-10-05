<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-04 
 * @copyright 2011 
 *
 */

class Kohana_Admin_Product{
	
	private $_id;
	private $_data;
	
      	public static function factory($id,array $data= NULL){
		return new Kohana_Admin_Product($id,$data);
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
			 array('id'=>1,'mod_name'=>'managerproduct','name' =>'商品管理','url'=>'/admin/product/1',
			      ), 
			 array('id'=>2,'mod_name'=>'managerdiscount','name' =>'促销管理','url'=>'/admin/product/2',
			      ), 
			 array('id'=>3,'mod_name'=>'order','name' =>'订单管理','url'=>'/admin/product/3',
			                  'lists'=>array(
				           array('mod_name'=>'orderlist','name'=>'查询订单列表','url'=>'#'),
				      	   array('mod_name'=>'discountlist','name'=>'促销商品列表','url'=>'#'),
				     	 ),
			      ), 
			 array('id'=>4,'mod_name'=>'shows','name' =>'数据决策','url'=>'/admin/product/4','lists'=>array(
			                   array('mod_name'=>'product','name'=>'商品销售分析','url'=>'#'),
					   array('mod_name'=>'summary','name'=>'商品汇总分析','url'=>'#'),
					   array('mod_name'=>'market','name'=>'销售市场分析','url'=>'#'),
				           ),
			       ) , 
			 );

            $template = View::factory('admin/body');
            $template->array_data = $array_data;
            $template->selected = $this->_id;
            $template->mod_content ='';
            $template->action = 'product';
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
