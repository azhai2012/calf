<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-17 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Tuan extends Kohana_Calfdb_Admin {
	
	
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


        /**
        * 
        */
        public function get_admin_tuan_list_array_data() {
            // TODO :
            $array_data = array(
		  array('id' =>1,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		  array('id' =>2,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		  array('id' =>3,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		  array('id' =>4,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		  array('id' =>5,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
		  array('id' =>6,'product_id'=>'102030','display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','create_date'=>'2011-01-01','end_date'=>'2011-01-01','creator'=>'上海先锋药厂','is_active'=>1), 
	    );
            return $array_data;
        }

	
	
}
