<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-05 
 * @copyright 2011 
 *
 */
class Controller_Home extends Controller {

    private  $template='';
    private $_id;
    private $_data;
    private $_sk;
    private $_calfDb;

    public function before() {
         $this->_sk= array_key_exists('sk', $_GET) ? $_GET['sk'] : '';
         $this->_id='';
         $this->_data=array();
         $this->_calfDb = Calfdb_Admin::factory($this->_id,$this->_data); 

    }

    public function action_index() {
           parent::before();
           $sk = $this->_sk;
           $home_db = Calfdb_Admin::instance('Body',$sk,$this->_data);
           $id = Arr::get($_GET,'id','');
   	   switch ($sk) {
	       case 'modmanager':
		              $navdata = array(
			                          'modname'=>'CMS - 模块管理',
						  'lists'=>array(
						      array('url'=>'javascript:void(0);','img'=>'/media/images/new.gif','name'=>'添加模块','click'=>'Mods.RowAdd();'),
						      array('url'=>'javascript:void(0);','img'=>'/media/images/detail.gif','name'=>'模块列表','click'=>'$(\'#modmanager\').click();'),
					           ),
			      ); 
			      $navcontent = View::factory('admin/navcontent')
		                            ->set('navdata',$navdata);
			      $modcontent= Admin_ModManager::factory($id)->get_body_content();
		              $ary= array('nav'=>"$navcontent",'content'=>"$modcontent"); 
	 	              $this->template=json_encode($ary);

		              break;
	
	        case 'customer':
	              $navdata = array(
		                          'modname'=>'CRM - 客户管理',
					  'lists'=>array(
					      array('url'=>'javascript:void(0);','img'=>'/media/images/new.gif','name'=>'添加客户','click'=>'Customers.RowAdd();'),
					      array('url'=>'javascript:void(0);','img'=>'/media/images/detail.gif','name'=>'客户列表','click'=>'$(\'#customer\').click();'),
				           ),
		      ); 
		      $navcontent = View::factory('admin/navcontent')
	                            ->set('navdata',$navdata);
		      $modcontent= Crm_Customer::factory($id)->get_body_content();
	              $ary= array('nav'=>"$navcontent",'content'=>"$modcontent"); 
 	              $this->template=json_encode($ary);
		
	              break;
           	case 'news':
                       $navdata = array(
		                           'modname'=>'News - 新闻管理',
		                           'lists'=>array(
					      array('url'=>'javascript:void(0);','img'=>'/media/images/new.gif','name'=>'添加新闻','click'=>''),
					      array('url'=>'javascript:void(0);','img'=>'/media/images/detail.gif','name'=>'新闻列表','click'=>'$(\'#news\').click();'),
				           ),    
	                ); 
	               $navcontent= View::factory('admin/navcontent')
	                            ->set('navdata',$navdata);

           		$modcontent= View::factory('admin/home/news/content')
                                         ->set('array_data',$home_db->get_admin_body_news_add_list_array_data());
		        $ary= array('nav'=>"$navcontent",'content'=>"$modcontent"); 

		        $this->template=json_encode($ary);
		
           		break;
                case 'product':
		       $p = array('page'=>1,'prepage'=>10,'sortname'=>'display_name','sortorder'=>'desc','query'=>'','qtype' =>'display_name' );
	               $product_db = Calfdb_Admin::instance('Product',$sk,$p);
	               $p = array('page'=>1,'prepage'=>10,'sortname'=>'id','sortorder'=>'desc','query'=>'','qtype' =>'id' );
            	       $array_data = $product_db->get_admin_product_manager_array_data();
                       $navdata = array(
		                           'modname'=>'CMS - 商品管理',
		                           'lists'=>array(
					      array('url'=>'javascript:void(0);','img'=>'/media/images/new.gif','name'=>'添加商品','click'=>'Products.RowAdd();'),
					      array('url'=>'javascript:void(0);','img'=>'/media/images/detail.gif','name'=>'商品列表','click'=>'$(\'#product\').click();'),
				           ),    
	                ); 
	               $navcontent= View::factory('admin/navcontent')
	                            ->set('navdata',$navdata);
	               $modcontent= View::factory('admin/product_manager/default')
		                    ->set('array_data',$array_data);
                       $ary= array('nav'=>"$navcontent",'content'=>"$modcontent"); 
                       
                       $this->template=json_encode($ary);
	               
                       break;
         
                default: $this->template='';
           		# code...
           		break;
         }

       }

       

	public function after() {
		$this->response->body($this->template);
        }

 }

