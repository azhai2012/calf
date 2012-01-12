<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-17 
 * @copyright 2011 
 *
 */

class Kohana_Calfdb_Admin_Discount extends Kohana_Calfdb_Admin {
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
      public function get_admin_discount_list_array_data() {
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