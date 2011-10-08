<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-06 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Admin($id,$data);

	}

       /**
       * 
       */
       public function get_admin_home_array_data() {
           // TODO :
          $array_data = array(
			 array('id'=>1,'mod_name'=>'notice','name' =>'公告管理','url'=>'/admin/index/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'news','name' =>'新闻管理','url'=>'/admin/index/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'advertising','name' =>'广告管理','url'=>'/admin/index/3',
			                  'lists'=>array(
				           array('id'=>'31','mod_name'=>'advadd','name'=>'添加广告栏目','url'=>'/admin/index/31'),
				      	   array('id'=>'32','mod_name'=>'advlist','name'=>'广告列表','url'=>'/admin/index/32'),
				           ),
			      ), 
			 array('id'=>4,'mod_name'=>'shows','name' =>'商品展示管理','url'=>'/admin/index/4','lists'=>array(
			           array('mod_name'=>'showadd','name'=>'展示模块','url'=>'#'),
			      	   array('mod_name'=>'showlist','name'=>'展示列表','url'=>'#'),
			           ),
			       ) , 
	    );
           return $array_data;
       }

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
        public function get_admin_hots_array_data() {
            // TODO :
         
		$array_data = array(
			 array('id'=>1,'mod_name'=>'meet','name' =>'展会管理','url'=>'/admin/hots/1',
				  'lists'=>array(
			           array('mod_name'=>'manager','name'=>'展商管理','url'=>'#'),
			      	   array('mod_name'=>'template','name'=>'展会模板','url'=>'#'),
			           ),
			      ) , 
			 array('id'=>2,'mod_name'=>'meetlist','name' =>'展会列表','url'=>'/admin/hots/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'analysis','name' =>'展会分析','url'=>'/admin/hots/3',
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


       function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
       } 
	}

	function __set($name,$value){

		$this->$name = $value;
	}


	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}


	function __destruct(){

		//$this->session->destroy();
	}

	function __toString(){

		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;

	}

}
