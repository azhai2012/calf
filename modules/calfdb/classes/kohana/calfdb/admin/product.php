<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-16 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Product extends Kohana_Calfdb_Admin  {
  	
        private $_id ;
        private $_data = array();
        private $_db;

   	function __construct($id,array $data=NULL){
	       
		$this->_id = $id;
		$this->_data= $data;
	        $this->_db = parent::_calgdb();
	      
	}  
	
	public function set_admin_modity_product_info_array_data(){

	    $params = $this->_data;
	    $query  = array("id"=>(string)$params['id']);  
	    unset($params['id']); 
	    foreach ($params as $key => $value) {
	       $newobj=array("$set"=>array("$key"=>"$value")); 
	       $this->_db->update('products',$query,$newobj);
	    }
	    return  $array_data;

        }

        public function get_admin_product_info_array_data(){
	   
	    $params = $this->_data;
	    $query  = array("id"=>(string)$params['id']);  
	    $array_data =array(
	                       'rows'=>$this->_db->find_one('products',$query),
                               );
	    return $array_data;
	
        }

       /**
        * 
        */
        public function get_admin_product_array_data() {
            // TODO :
         	$array_data = array(
			 array('id'=>1,'mod_name'=>'managerproduct','name' =>'商品管理','url'=>'/admin/product/1',
			      ), 
			 array('id'=>2,'mod_name'=>'managerdiscount','name' =>'促销管理','url'=>'/admin/product/2',
			      ), 
			 array('id'=>3,'mod_name'=>'order','name' =>'订单管理','url'=>'/admin/product/3',
			                  'lists'=>array(
				           array('mod_name'=>'orderlist','name'=>'查询订单列表','url'=>'#'),
				      	   array('mod_name'=>'discountlist','name'=>'促销商品列表','url'=>'#'),
				     	 ),
			      ), 
			 array('id'=>4,'mod_name'=>'shows','name' =>'数据决策','url'=>'/admin/product/4','lists'=>array(
			                   array('mod_name'=>'product','name'=>'商品销售分析','url'=>'#'),
					   array('mod_name'=>'summary','name'=>'商品汇总分析','url'=>'#'),
					   array('mod_name'=>'market','name'=>'销售市场分析','url'=>'#'),
				           ),
			       ) , 
			 );
            return $array_data;
        }

        /**
        * 
        */
        public function get_admin_product_manager_array_data() {
            // TODO :
	    $params= $this->_data;
	    $qtype = $params['qtype'];
	    $query =$params['query'];
	  
	    if ($query) 
	    switch ($qtype){
	       case 'is_active': $query = array($qtype => (float)$query); break;
	       case 'id': $query = array($qtype => (int)$query); break;
	       default: $query = array('$or'=>array(array($qtype => new MongoRegex("/^$query/i")),array('name_code' => new MongoRegex("/^$query/i"))));
            }
            else $query=array();

	    $limit = array('sortorder'=>$params['sortorder'],'sortname'=>$params['sortname'],'limit'=>$params['prepage'],'skip'=>$params['page']);
   	    $array_data =array(
	                       'total'=>$this->_db->count('products',$query),
                               'rows'=>$this->_db->find_limit('products',$query,array(),$limit)
                               );
            return $array_data;
        }

        /**
        * 
        */
        public function get_admin_product_discount_manager_array_data() {
             // TODO :
              $array_data = array(
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销1','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>1), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销2','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>0), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销3','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>1), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销4','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>0), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销5','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>1), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销6','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>1), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销7','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>0), 
		  array('id' =>1213,'display_name'=>'阿莫西林胶囊 10＊10 上海先锋药厂','unit'=>'合','infos'=>'促销8','create_date'=>'2011-01-01','end_date'=>'2011-01-01','is_active'=>1), 

		);
            return $array_data;
        }

}

