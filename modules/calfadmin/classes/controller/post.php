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

	$order_db = Calfdb_Admin::instance('Order','',$p);
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
		$order_db = Calfdb_Admin::instance('Order','',array('order_id'=>(int)$flag));
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

	$product_db = Calfdb_Admin::instance('Product','',$p);
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

     public function action_productdb(){
	  $attr = Arr::get($_POST,"data","");
	  $action = $this->request->param('id');
	  $ary = json_decode($attr,true);
	  $product_db = Calfdb_Admin::instance('Product',$action,$ary);
          $result = $product_db->set_admin_product_info();
	  $this->template = $result;
     }

     public function action_getproductinfo(){
	
 	$id= Arr::get($_POST,'id','');

        $p=array('id'=> $id );
        $product_db = Calfdb_Admin::instance('Product','',$p);
	$array_data = $product_db->get_admin_product_info_array_data();	

	$row= $array_data['rows'];
	$is_active = ($row['is_active']==="启用") ? 'checked':'';
	$data = array(
	      array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>$row['id']),
              array('display_name' =>'商品分类','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'category','value'=>$row['category'],
                    'subvalue'=>array('化学药制剂','中成药','生物制品','保健食品','器械')),
	      array('display_name' =>'剂型','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'product_type','value'=>$row['product_type'],
	            'subvalue'=>array('针剂','片剂','口服外用','一类医疗器械','二类医疗器械','三类医疗器械','其他')),
	      array('display_name' =>'商品名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>$row['name']),
	      array('display_name' =>'商品通用名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'general_name','value'=>$row['general_name']),
	      array('display_name' =>'规格','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'norm','value'=>$row['norm']),
	      array('display_name' =>'单位','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'unit','value'=>$row['unit']),
	      array('display_name' =>'生产企业','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'factory','value'=>$row['factory']),
	      array('display_name' =>'批准文号','type'=>'text','attr'=>'','width'=>150,'placeholder'=>'必填','name'=>'certificateNo','value'=>$row['certificateNo']),
	      array('display_name' =>'包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>$row['group']),
	      array('display_name' =>'中包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'middle_group','value'=>$row['middle_group']),
	      array('display_name' =>'国批价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'general_price','value'=>$row['general_price']),
	      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'请输入该商品的功能','name'=>'uses','value'=>$row['uses']),
	      array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px" '.$is_active.'','name'=>'is_active'),
	);
	
	$this->template = View::factory('admin/product/product/modify'); 
        $this->template->action ='modity';
 	$this->template->array_data= $data;	 
        
      
     }

     public function after() {
		$this->response->body($this->template);
     }
}