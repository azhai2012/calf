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
       
        private $_id ;
        private $_data = array();
        private $_db;

   	function __construct($id,array $data=NULL){

		$this->_id = $id;
		$this->_data= $data;
	        $this->_db = parent::_calgdb();

	}


       /**
	   * 
       */
       public function get_admin_order_list_array_data() {
           // TODO :
            $params= $this->_data;
	    $qtype = $params['qtype'];
	    $query =$params['query'];

	    if ($query) 
	    switch ($qtype){
	       case 'id': $query = array($qtype => (int)$query); break;
	       default: $query = array($qtype => new MongoRegex("/^$query/i"));
            }
            else $query=array();

	    $limit = array('sortorder'=>$params['sortorder'],'sortname'=>$params['sortname'],'limit'=>$params['prepage'],'skip'=>$params['page']);
   	    $array_data =array(
	                       'total'=>$this->_db->count('orders',$query),
                               'rows'=>$this->_db->find_limit('orders',$query,array(),$limit)
                               );
            return $array_data;
       }

        public function get_admin_order_details_array_data() {
           // TODO :
            $params= $this->_data;
	    //$qtype = $params['qtype'];
	   // $query =$params['query'];

	   // if ($query) 
	   // switch ($qtype){
	   //    case 'id': $query = array($qtype => (int)$query); break;
	   //    default: $query = array($qtype => new MongoRegex("/^$query/i"));
           //}
            //else $query=array();

	    //$limit = array('sortorder'=>$params['sortorder'],'sortname'=>$params['sortname'],'limit'=>$params['prepage'],'skip'=>$params['page']);
   	    $details = $this->_db->find('orders_details',array('id'=> $params['order_id']));  
            $total = $this->_db->count('orders_details',array('id'=>$params['order_id']));
            $array_data = array('total'=>$total,'rows'=>array()); 
            foreach ($details AS $key => $value) {
            	# code...

                $products =  $this->_db->find_one('products',array('id'=>$value['product_id']));
                $prices =   $this->_db->find_one('prices',array('product_id'=>$value['product_id']));
                $amount = (int)$value['quantity']*(float)$prices['price'];

                $ary = array('id'         =>$value['id'],
                           'product_id'   =>$value['product_id'],
                           'display_name' =>$products['display_name'],
                           'unit'         =>$products['unit'],
                           'quantity'     =>$value['quantity'],
                           'price'        =>$prices['price'],  
                           'amount'       =>$amount,
                           'batch'        =>$value['batch'],
                           'validity'     =>$value['validity'],
                          );
                $array_data['rows'][] = $ary; 
            }
           
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