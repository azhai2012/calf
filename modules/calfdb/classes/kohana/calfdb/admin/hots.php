<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-17 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Hots extends Kohana_Calfdb_Admin {
	
	
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
        public function get_admin_hots_list_array_list() {
            // TODO :
         $array_data = array(
		  array('id' =>1,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		 array('id' =>2,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		 array('id' =>3,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		 array('id' =>4,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		 array('id' =>5,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		 array('id' =>5,'title'=>'徐州展区会议','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		);
            return $array_data;
        }
   
}
