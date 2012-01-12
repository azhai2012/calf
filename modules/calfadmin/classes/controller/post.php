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
	  // if (!$this->request->is_ajax()) exit;
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

        public function action_mods() {	

	$page      =  Arr::get($_POST,'page',1);
	$rp        =  Arr::get($_POST,'rp',15);
	$sortname  =  Arr::get($_POST,'sortname','mod_name');
	$sortorder =  Arr::get($_POST,'sortorder','desc');
	$query     =  Arr::get($_POST,'query',false);
	$qtype     =  Arr::get($_POST,'qtype',false);

        $pg= ($page-1)*$rp;

        $sortorder= ($sortorder=='desc')? -1 : 1;

        $p = array('page'=>$pg,'prepage'=>$rp,'sortname'=>$sortname,'sortorder'=>$sortorder,'query'=>$query,'qtype'=>$qtype);

	$Cms_db = Calfdb_Admin::instance('ModManager','',$p);
	$array_data = $Cms_db->get_admin_mods_manager_array_data();

	$rows=$array_data['rows'];
	//***
	$total =$array_data['total'];
	//*****
 	$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());

	foreach($rows AS $row){
		$entry = array('id'=>$row['id'],
				'mod'=>$row['mod'],
				'mod_name'=>$row['mod_name'],
				'is_active'=>$row['is_active'] 
		);
		$jsonData['rows'][] = $entry;
	}
        $this->template = json_encode($jsonData);
     }


      public function action_customer() {	

	$page      =  Arr::get($_POST,'page',1);
	$rp        =  Arr::get($_POST,'rp',15);
	$sortname  =  Arr::get($_POST,'sortname','display_name');
	$sortorder =  Arr::get($_POST,'sortorder','desc');
	$query     =  Arr::get($_POST,'query',false);
	$qtype     =  Arr::get($_POST,'qtype',false);

        $pg= ($page-1)*$rp;

        $sortorder= ($sortorder=='desc')? -1 : 1;

        $p = array('page'=>$pg,'prepage'=>$rp,'sortname'=>$sortname,'sortorder'=>$sortorder,'query'=>$query,'qtype'=>$qtype);

	$product_db = Calfdb_Crm::instance('Customer','',$p);
	$array_data = $product_db->get_crm_customer_manager_array_data();

	$rows=$array_data['rows'];
	//***
	$total =$array_data['total'];
	//*****
 	$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());

	foreach($rows AS $row){
		$entry = array('id'=>$row['id'],
				'display_name'=>$row['display_name'],
				'create_date'=>$row['create_date'],
				'active_date'=>$row['active_date'],
				'is_active'=>$row['is_active']
		);
		$jsonData['rows'][] = $entry;
	}

        $this->template = json_encode($jsonData);
     }

     public function action_productdb(){
	  $data = Arr::get($_POST,"data","");
	  $pid =  Arr::get($_POST,"pid",""); 
	  $action = $this->request->param('id');
	  switch ($action){
	      case 'modify':{	
	            $ary = json_decode($data ,true);
	            $des= Arr::get($ary,'description');
	            if ($des)
	            $ary['description']= htmlspecialchars($ary['description']);
	
		    $product_db = Calfdb_Admin::instance('Product','modity',$ary);
	            $result = $product_db->set_admin_product_info();
	            $this->template = $result;
                    }
	  	    break;
               case 'removeimg':{
                     $p = array('pid'=>$pid,'filename'=>$data); 
	             $product_db = Calfdb_Admin::instance('Product',$action,$p);
		     $return = $product_db->set_admin_product_image_data();	
		     $this->template =  $return;
	            }
		    break; 
	   }
      }

      /*
       * 得到商品视图内容，自动创建 DOM
       *  1、添加商品的试图
          2、修改商品的视图
       */ 
      public function action_getproductinfo(){
	
                $this->template = View::factory('admin/product_manager/modify');  
	        $flag = Arr::get($_POST,'flag',1);
	
	        if ((int)$flag === 0){
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
		      array('display_name' =>'原价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'old_price','value'=>$row['old_price']),
		      array('display_name' =>'单价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'sale_price','value'=>$row['sale_price']),
	              array('display_name' =>'促销价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'discount_price','value'=>$row['discount_price']),
		      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'','name'=>'uses','value'=>$row['uses']),
		      array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px" '.$is_active.'','name'=>'is_active'),
		);

		
		$this->template->imgs_array_data = (isset($row['imgs'])) ? $row['imgs'] : array();
	        $this->template->action ='Modity';
	        $this->template->description = Arr::get($row,'description'); 
	 	$this->template->array_data= $data;
	
               }else {
	
	 		$data = array(
			      array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
		              array('display_name' =>'商品分类','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'category','value'=>'',
		                    'subvalue'=>array('化学药制剂','中成药','生物制品','保健食品','器械')),
			      array('display_name' =>'剂型','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'product_type','value'=>'',
			            'subvalue'=>array('针剂','片剂','口服外用','一类医疗器械','二类医疗器械','三类医疗器械','其他')),
			      array('display_name' =>'商品名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
			      array('display_name' =>'商品通用名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'general_name','value'=>''),
			      array('display_name' =>'规格','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'norm','value'=>''),
			      array('display_name' =>'单位','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'unit','value'=>''),
			      array('display_name' =>'生产企业','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'factory','value'=>''),
			      array('display_name' =>'批准文号','type'=>'text','attr'=>'','width'=>150,'placeholder'=>'必填','name'=>'certificateNo','value'=>''),
			      array('display_name' =>'包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'group','value'=>''),
			      array('display_name' =>'中包装','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'middle_group','value'=>''),
			      array('display_name' =>'国批价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'general_price','value'=>''),
			      array('display_name' =>'原价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'old_price','value'=>''),
			      array('display_name' =>'单价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'sale_price','value'=>''),
		              array('display_name' =>'促销价','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'discount_price','value'=>''),
			      array('display_name' =>'功能主治','type'=>'textarea','attr'=>'cols=57 rows=6','placeholder'=>'','name'=>'uses','value'=>''),
			      array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px"','name'=>'is_active'),
			);

			$this->template->imgs_array_data = array();
		        $this->template->action ='Add';
		        $row = array('description'=>''); 
		        $this->template->description = Arr::get($row,'description'); 
		 	$this->template->array_data= $data;
               }
 
	
      }  


 
     /**
      *  修改商品信息 
      */
     public function action_getcustomerinfo(){
	
 	$flag = Arr::get($_POST,'flag',1);
       	$this->template = View::factory('crm/modify'); 
       
		$data = array(
		   array('id'=>1,'name'=>'基本信息','lists'=>array(
		          array('display_name' =>'编号','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
	                  array('display_name' =>'客户名称','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
		          array('display_name' =>'地址','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
		 	  array('display_name' =>'电子邮箱','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
		 	  array('display_name' =>'负责业务员','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
			  array('display_name' =>'移动电话','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
		          array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px"','name'=>'is_active'),
		          ),
		   ),
	   	   array('id'=>2,'name'=>'联系人','lists'=>array(
		          array('display_name' =>'姓名','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
	    	          array('display_name' =>'电子邮件','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
	                  array('display_name' =>'移动电话','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
		          array('display_name' =>'性别','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>'',
		                 'subvalue'=>array('男','女')),
		          array('display_name' =>'称谓','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
		          array('display_name' =>'学历','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
		          array('display_name' =>'职务','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			   array('display_name' =>'办公电话','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'name','value'=>''),
			   array('display_name' =>'传真','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			   array('display_name' =>'QQ号','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			   array('display_name' =>'创建日期','type'=>'date','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'c_create_date','value'=>''),
			   array('display_name' =>'最近接触日期','type'=>'date','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'c_update_date','value'=>''),
			),
		    ),
		   array('id'=>3,'name'=>'指标信息','lists'=>array(
		          array('display_name' =>'关键指标','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'id','value'=>''),
	                  array('display_name' =>'客户来源','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'category','value'=>'',
	                        'subvalue'=>array('客户介绍','来电联系','网上查找','促销活动','电话销售')),
		          array('display_name' =>'客户级别','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'product_type','value'=>'',
		            'subvalue'=>array('A类','B类','C类','D类','E类')),
	 	          array('display_name' =>'信用等级','type'=>'text','attr'=>'','width'=>100,'placeholder'=>'必填','name'=>'product_type','value'=>'',
		            'subvalue'=>array('高','较高','一般','较一般','较低','低')),
			  array('display_name' =>'最近接触日期','type'=>'date','attr'=>'','width'=>300,'placeholder'=>'必填','name'=>'a_update_date','value'=>''),
		          array('display_name' =>'累计购买次数','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			  array('display_name' =>'累计销售机会数','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			  array('display_name' =>'累计购买金额','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			  array('display_name' =>'当前销售机会','type'=>'text','attr'=>'','width'=>300,'placeholder'=>'','name'=>'name','value'=>''),
			  array('display_name' =>'启用','type'=>'checkbox','attr'=>'style="margin-top:7px"','name'=>'is_active'),
		      
		      ),
		    ),
		); 
		
		
		$this->template->action ='Add';
	 	$this->template->array_data = $data;	 
        
      }
   

      public function action_getmods(){
	   
	     $action = Arr::get($_POST,'action','shops');
	     $this->template = View::factory('admin/mod_manager/'.$action.'/default'); 
	     $data = array(); 
	     switch ($action) {
	         case 'home': 
	               $action = '首页管理'; 
          	       $data=array(
	             	  array('id'=>1,'name'=>'区域管理','lists'=>array()),
	              	  array('id'=>2,'name'=>'广告管理','lists'=>array()),
	              	  array('id'=>3,'name'=>'信息管理','lists'=>array()),
	               );  
	         break;
		 case 'shops': 
	               $action = '品牌管理'; 
          	       $data = array(
	             	  array('id'=>1,'name'=>'店铺管理','lists'=>array()),
	              	  array('id'=>2,'name'=>'信息管理','lists'=>array()),
	               );  
	         break;
	
	         default: '';	
	     }
	
	     $this->template->action = $action;
	     $this->template->array_data = $data;
      }
     

     public function after() {
		$this->response->body($this->template);
     }
}