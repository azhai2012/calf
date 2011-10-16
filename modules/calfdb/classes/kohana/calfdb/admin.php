<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-06 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Admin($id,$data);

	}
	
	/**
	* 
	*/
	public static function execute($name,$id,$data) {
	    // TODO :
	    $class ='Kohana_Calfdb_Admin_'.$name;
	    return new $class($id,$data);
	}    
	
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}  

       /**
       * 
       */
       public function get_admin_community_array_data() {
           // TODO :
        	$array_data = array(
			 array('id'=>1,'mod_name'=>'manager','name' =>'社区管理','url'=>'/admin/community/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'lists','name' =>'社区内容列表','url'=>'/admin/community/2',
			      ) , 
			 );
           return $array_data;
       }

       /**
       * 
       */
       public function get_admin_discount_array_data() {
           // TODO :
        
		$array_data = array(
			 array('id'=>1,'mod_name'=>'manager','name' =>'促销管理','url'=>'/admin/discounts/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'lists','name' =>'促销列表','url'=>'/admin/discounts/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'analysis','name' =>'促销分析','url'=>'/admin/discounts/3',
			                  'lists'=>array(
				           array('mod_name'=>'product','name'=>'商品销售分析','url'=>'#'),
				      	   array('mod_name'=>'market','name'=>'销售区域分析','url'=>'#'),
				           ),
			      ), 
			 );
           return $array_data;
       }


        /**
        * 
        */
        public function get_admin_hots_array_data() {
            // TODO :
         
		$array_data = array(
			 array('id'=>1,'mod_name'=>'meet','name' =>'展会管理','url'=>'/admin/hots/1',
				  'lists'=>array(
			           array('mod_name'=>'manager','name'=>'展商管理','url'=>'#'),
			      	   array('mod_name'=>'template','name'=>'展会模板','url'=>'#'),
			           ),
			      ) , 
			 array('id'=>2,'mod_name'=>'meetlist','name' =>'展会列表','url'=>'/admin/hots/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'analysis','name' =>'展会分析','url'=>'/admin/hots/3',
			                  'lists'=>array(
				           array('mod_name'=>'product','name'=>'商品销售分析','url'=>'#'),
				      	   array('mod_name'=>'market','name'=>'销售区域分析','url'=>'#'),
				           ),
			      ), 
			 );
            return $array_data;
        }


        

      

        /**
        * 
        */
        public function get_admin_tuan_array_data() {
            // TODO :
         	$array_data = array(
			 array('id'=>1,'mod_name'=>'managerteam','name' =>'团购管理','url'=>'/admin/tuan/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'teamlist','name' =>'团购列表','url'=>'/admin/tuan/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'analysis','name' =>'团购分析','url'=>'/admin/tuan/3',
			                  'lists'=>array(
				           array('mod_name'=>'product','name'=>'商品销售分析','url'=>'#'),
				      	   array('mod_name'=>'market','name'=>'销售区域分析','url'=>'#'),
				           ),
			      ), 
			 );
            return $array_data;
        }


       function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
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
