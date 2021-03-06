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
 
              
	public function set_admin_product_info(){
            switch ($this->_id){
	        case "add":    return $this->add_product(); break;
	        case "modity": return $this->modity_product(); break; 
	        case "delete": return $this->delete_product(); break; 		
            }
        }

        /**
        *  导出商品信息
        */
	public function set_import_admin_product_info_array_data(){
	   
	    $params = $this->_data;
	    foreach ($params as $key => $value) {
	      $result = $this->_db->insert('products',$value);  
	    }     
	   
	    return $result;
	      
	
        }

        /**
        *  导出商品信息
        */
	public function get_export_admin_product_info_array_data(){

	    $params = $this->_data;
	    $query  = Arr::get($params,'where',array());
	    if ($query) {
	        foreach($query as $k=> $v){
		   $key=$k;
		   $value= $v; 
      	        }
	        switch ($key){
	           case 'is_active': $query = array($key =>$value); break;
	           case 'id': $query = array($key => (int)$value); break;
	           default: $query = array('$or'=>array(array($key => new MongoRegex("/^$value/i")),array('name_code' => new MongoRegex("/^$value/i"))));
                }
            }
            else $query = array();
            $array_data = array(
	                       'rows'=>$this->_db->find('products',$query,array('_id'=>0)),
                          );

	    return $array_data;

        }


       /**
        *  导出商品信息
        */
	public function get_export_one_admin_product_info_array_data(){

	    $params = $this->_data;
	   // $query  = array("id"=>(string)$params['id']);  
	    $array_data =array(
	                       'rows'=>$this->_db->find_one('products',array(),array('_id'=>0)),
                         );
	    return $array_data;

        }


        public function get_admin_product_info_array_data(){
	   
	    $params = $this->_data;
	    $query  = array("id"=>(int)$params['id']);  
	    $array_data =array(
	                       'rows'=>$this->_db->find_one('products',$query),
                               );
	    return $array_data;
	
        }

       /**
        *   得到商品信息
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
	       case 'is_active': $query = array($qtype =>$query); break;
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

       /**
        * 删除商品
        */
        private function delete_product() {
            // TODO :
            $params = $this->_data;
            $ary=array("id"=>(int)$params['id']);
            $return =$this->_db->remove('products',$ary);
            return  $return;
        } 

        /**
        * 检查商品是否存在
        */
        private function check_product_id($id) {
            // TODO :
            $array_data = $this->_db->find_One('products',$id);
            return $array_data;
        }

        /**
         * 增加商品
         */
        private function add_product(){
	      $params = $this->_data;
	      $id= array("id"=>(int)$params['id']);   

	      if ($this->check_product_id($id)) 
	         return "-1";     

	      $ary = array();
	      $displayname='';

	      foreach ($params AS $key => $value) {
		     
		      if ($key== "id") 
		           $ary['id']= (int)$value; 
		      else
		           $ary["$key"]="$value"; 
		
		      if ($key=="name") {
		          $displayname= $value;
		          $ary['name_code']= Pinyin::instance()->getInitials($value);  
		      } 
		      if ($key=="norm") $displayname.= " ".$value;
		      if ($key=="factory") {
			$displayname.=" ".$value;
		 	$ary['factory_code']= Pinyin::instance()->getInitials($value);  
		     } 
	       }
	       $ary['display_name']= $displayname;
	       $ary['create_date']= date('Y-m-d');
               $ary['active_date']= date('Y-m-d');

               $return =$this->_db->insert('products',$ary);
               return  $return;

        } 


        /**
        * 
        */
        public function set_admin_product_image_data() {
            $params = $this->_data;
            $query = array('id'=>(int)$params['pid']);
            $newobj= array('$pull'=>array('imgs'=>array('name'=>''.$params['filename'].'')));  
            $return =$this->_db->update('products', $query,$newobj);
            $filename ='./media/product/img/'.$params['filename'];
            if (file_exists($filename) && is_readable($filename))
                unlink($filename); 
            return $return;
        }
       
        /**
         *  修改商品信息
         */
        private function modity_product(){
	    $params = $this->_data;
	    $query  = array('id'=>(int)$params['id']);  
	    unset($params['id']);
	    foreach ($params as $key => $value) {
	       if ($key!='imgs'){	
	       $newobj=array('$set'=>array("$key"=>"$value")); 
	       $return =$this->_db->update('products',$query,$newobj);	  

	       $displayname='';
	       if (($key=="name") OR ($key=="norm") OR ($key=="factory"))
	       {

	 	  $find = $this->_db->find_One('products',$query); 
	          switch ($key){
		    case "name": 
		      $displayname = $value.' '.$find['norm'].' '.$find['factory']; 
		    break;
		    case "norm":  
		      $displayname = $find['name'].' '.$value.' '.$find['factory']; 
		    break;
		    case "factory": 
		      $displayname = $find['name'].' '.$find['norm'].' '.$value; 
		    break;
	           }

	           $newobj=array('$set'=>array("display_name"=>"$displayname")); 
	           $this->_db->update('products',$query,$newobj);
	       } 
	     }
	     else {
		 foreach ($value as $subkey => $subvalue) {
		   foreach ($subvalue as $skey => $svalue) {
		    
		      $newobj=array('$push'=>array('imgs'=>array("$skey"=>"$svalue"))); 
		      $return =$this->_db->update('products',$query,$newobj);  
		      $filename = './media/upload/'.$svalue;
		      if (file_exists($filename) && is_readable($filename)){
		         copy($filename,'./media/product/img/'.$svalue);
		         unlink($filename);
	              } 
	            }
		 } 
	     }	
	    }	
	    return  $return;

        }

}

