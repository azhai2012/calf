<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-17 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Community extends Kohana_Calfdb_Admin {
      
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
 
}