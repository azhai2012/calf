<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-16 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Order extends Kohana_Calfdb_Admin {
 /**
       * 
       */
       public function get_admin_order_list_array_data() {
           // TODO :
             $array_data = array(
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>1,'amount'=>'100.00','create_date'=>'2011-01-01 03:00','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>2,'amount'=>'101.00','create_date'=>'2011-01-01 03:00','flows'=>0), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>5,'amount'=>'102.00','create_date'=>'2011-01-01 03:00','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>2,'amount'=>'103.00','create_date'=>'2011-01-01 03:00','flows'=>0), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>8,'amount'=>'104.00','create_date'=>'2011-01-01 03:00','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>33,'amount'=>'105.00','create_date'=>'2011-01-01 03:00','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>67,'amount'=>'106.00','create_date'=>'2011-01-01 03:00','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>10,'amount'=>'107.00','create_date'=>'2011-01-01 03:00','flows'=>0), 

		);
           return $array_data;
       }

       /**
       * 
       */
       public function get_admin_order_discount_list_array_data() {
           // TODO :
              $array_data = array(
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>1,'create_date'=>'2011-01-01','flows'=>1), 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>13,'create_date'=>'2011-01-01','flows'=>0), 	  
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>10,'create_date'=>'2011-01-01','flows'=>1), 	 
		  array('id' =>121311,'customer_name'=>'康泰大药房','rowcount'=>5,'create_date'=>'2011-01-01','flows'=>1), 
		);
           return $array_data;
       }

}