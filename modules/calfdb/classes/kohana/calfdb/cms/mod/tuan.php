<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-17 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Cms_Tuan extends Kohana_Calfdb_Cms {
	
	
        /**
        * 
        */
        public function get_cms_tuan_array_data() {
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
        }

	
	
}
