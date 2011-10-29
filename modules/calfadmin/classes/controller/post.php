<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-22 
 * @copyright 2011 
 *
 */

class Controller_Post extends Controller {
    
     private $_id;
     private $_data;
     private $template;
     private $_sk;
	
     public function before() {
	         $this->_sk= array_key_exists('sk', $_GET) ? $_GET['sk'] : '';
	         $this->_id='';
	         $this->_data=array();
     }	
	 
     public function action_orders(){
        
        $flag      =  $this->request->param('id');

        if ($flag==='list'){
        $page      =  Arr::get($_POST,'page',1);
        $rp        =  Arr::get($_POST,'rp',15);
	$sortname  =  Arr::get($_POST,'sortname','display_name');
	$sortorder =  Arr::get($_POST,'sortorder','desc');
	$query     =  Arr::get($_POST,'query',false);
	$qtype     =  Arr::get($_POST,'qtype',false);
        
        $pg= ($page-1)*$rp;

        $sortorder= ($sortorder=='desc')? -1 : 1;

        $p = array('page'=>$pg,'prepage'=>$rp,'sortname'=>$sortname,'sortorder'=>$sortorder,'query'=>$query,'qtype'=>$qtype);

	$order_db = Calfdb_Admin::execute('Order','',$p);
	$array_data = $order_db->get_admin_order_list_array_data();

	$rows=$array_data['rows'];
	//***
	$total =$array_data['total'];
	//*****
 	$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());

	foreach($rows AS $row){
		$entry = array('id'=>$row['id'],
				'customer_name'=>$row['customer_name'],
				'rowcount'=>$row['rowcount'],
				'amount'=>$row['amount'],
				'create_date'=>$row['create_date'],
				'flows'=>$row['flows']
		);
		$jsonData['rows'][] = $entry;
	  }
        }
        else
        {
		$order_db = Calfdb_Admin::execute('Order','',array('order_id'=>(int)$flag));
		$array_data = $order_db->get_admin_order_details_array_data();
		$rows=$array_data['rows']; 
		$total =$array_data['total']; 
		$jsonData = array('page'=>1,'total'=>$total,'rows'=>array());
		foreach($rows AS $row){
			$entry = array('id'       =>$row['id'],
	                           'product_id'   =>$row['product_id'],
	                           'display_name' =>$row['display_name'],
	                           'unit'         =>$row['unit'],
	                           'quantity'     =>$row['quantity'],
	                           'price'        =>$row['price'],  
	                           'amount'       =>$row['amount'],
	                           'batch'        =>$row['batch'],
	                           'validity'     =>$row['validity'],
	                          );
			$jsonData['rows'][] = $entry;
		  }
		 
        } 

        $this->template = json_encode($jsonData);
 
	
    }	
	
     public function action_product() {	
	
	$page      =  Arr::get($_POST,'page',1);
	$rp        =  Arr::get($_POST,'rp',15);
	$sortname  =  Arr::get($_POST,'sortname','display_name');
	$sortorder =  Arr::get($_POST,'sortorder','desc');
	$query     =  Arr::get($_POST,'query',false);
	$qtype     =  Arr::get($_POST,'qtype',false);
       
        $pg= ($page-1)*$rp;

        $sortorder= ($sortorder=='desc')? -1 : 1;

        $p = array('page'=>$pg,'prepage'=>$rp,'sortname'=>$sortname,'sortorder'=>$sortorder,'query'=>$query,'qtype'=>$qtype);

	$product_db = Calfdb_Admin::execute('Product','',$p);
	$array_data = $product_db->get_admin_product_manager_array_data();

	$rows=$array_data['rows'];
	//***
	$total =$array_data['total'];
	//*****
 	$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
	
	foreach($rows AS $row){
		//If cell's elements have named keys, they must match column names
		//Only cell's with named keys and matching columns are order independent.
		$entry = array('id'=>$row['id'],
				'display_name'=>$row['display_name'],
				'unit'=>$row['unit'],
				'create_date'=>$row['create_date'],
				'active_date'=>$row['active_date'],
				'is_active'=>$row['is_active']
		);
		$jsonData['rows'][] = $entry;
	}

        $this->template = json_encode($jsonData);
     }

     public function after() {
		$this->response->body($this->template);
     }
}