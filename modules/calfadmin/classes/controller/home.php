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
            $home_db = Calfdb_Admin::execute('Home',$this->_id,$this->_data);
           switch ($sk) {
           	case 'news':
           		$this->template= View::factory('admin/home/news/content')
                                         ->set('array_data',$home_db->get_admin_home_news_add_list_array_data());
           		break;
           	case 'showadd':
           		$this->template= View::factory('admin/home/show/mod'); 
           		break;
                case 'showlist':
	                $this->template= View::factory('admin/home/show/list'); 
	           	break;
	        case 'advadd':
		       $this->template= View::factory('admin/home/adv/add',array('array_data',$home_db->get_admin_home_adv_add_list_array_data()));
		      	break;
	        case 'advlist':
		       $this->template= View::factory('admin/home/adv/list')
		                        ->set('array_data',$home_db->get_admin_home_adv_list_array_data());
		       break;
		case 'notice':
		       $this->template= View::factory('admin/home/notice/content')
		                        ->set('array_data',$home_db->get_admin_home_notice_list_array_data());  
		     break;
                default: $this->template='';
           		# code...
           		break;
         }

       }

         public function action_product() {
           parent::before();
           $sk = $this->_sk;
           $p = array('page'=>1,'prepage'=>10,'sortname'=>'display_name','sortorder'=>'desc','query'=>'','qtype' =>'display_name' );
           $product_db = Calfdb_Admin::execute('Product',$this->_id,$p);
           $p = array('page'=>1,'prepage'=>10,'sortname'=>'id','sortorder'=>'desc','query'=>'','qtype' =>'id' );
		
           $product_order_db = Calfdb_Admin::execute('Order',$this->_id,$p);

           switch ($sk) {
           	case 'managerproduct':
                       
           	       $array_data = $product_db->get_admin_product_manager_array_data();
  	               $this->template= View::factory('admin/product/product/product')->set('array_data',$array_data);
                       break;
           	case 'managerdiscount':
	          	$this->template= View::factory('admin/product/discount/discount')
	                                 ->set('array_data',$product_db->get_admin_product_discount_manager_array_data());
                        break;
                case 'orderlist':
	                $this->template= View::factory('admin/product/order/list')
	                                 ->set('array_data',$product_order_db->get_admin_order_list_array_data());
	           	break;
	        case 'discountlist':
		       $this->template= View::factory('admin/product/order/dislist')
		                         ->set('array_data',$product_order_db->get_admin_order_discount_list_array_data());
		      	break;
	        case 'product':
		       $this->template= View::factory('admin/product/analysis/product'); 
		       break;
		case 'summary':
		       $this->template= View::factory('admin/product/analysis/summary'); 
		       break;
		case 'market':
		       $this->template= View::factory('admin/product/analysis/market'); 
		       break;
                default: $this->template='';
           		# code...
           		break;
              }

          }

	public function action_hots() {
          parent::before();
          $sk =$this->_sk;
          $hots_db = Calfdb_Admin::execute('Hots',$this->_id,$this->_data);

          switch ($sk) {
          	case 'manager':
          		$this->template= View::factory('admin/hots/manager/content')
                                         ->set('array_data',$hots_db->get_admin_hots_list_array_list());
          		break;
          	case 'template':
          		$this->template= View::factory('admin/hots/template/content'); 
          		break;
               case 'hotslist':
	                $this->template= View::factory('admin/hots/hotslist/content')   
	                                 ->set('array_data',$hots_db->get_admin_hots_list_array_list());
                   	break;
	        case 'product':
		       $this->template= View::factory('admin/hots/analysis/product'); 
		      	break;
	        case 'market':
		       $this->template= View::factory('admin/hots/analysis/market'); 
		       break;
                 default: $this->template='';
          		# code...
          		break;
              }
             
            }


	public function action_tuan() {
            parent::before();
            $sk = $this->_sk;
            $tuan_db = Calfdb_Admin::execute('Tuan',$this->_id,$this->_data);
            switch ($sk) {
        	case 'managerteam':
        		$this->template= View::factory('admin/tuan/manager/content') 
                                         ->set('array_data',$tuan_db->get_admin_tuan_list_array_data());
        		break;
        	case 'teamlist':
        		$this->template= View::factory('admin/tuan/tuanlist/content')
                                         ->set('array_data',$tuan_db->get_admin_tuan_list_array_data());
        		break;
                case 'product':
	                $this->template= View::factory('admin/tuan/analysis/product'); 
	           	break;
	        case 'market':
		       $this->template= View::factory('admin/tuan/analysis/market'); 
		       break;
                 default: $this->template='';
        		# code...
        		break;
              }

          }


	public function action_discounts() {
            parent::before();
            $sk = $this->_sk;
            $discount_db = Calfdb_Admin::execute('Discount',$this->_id,$this->_data);
            switch ($sk) {
        	case 'manager':
        		$this->template= View::factory('admin/discount/manager/content')
                                       ->set('array_data',$discount_db->get_admin_discount_list_array_data());
        		break;
        	case 'lists':
        		$this->template= View::factory('admin/discount/discountlist/content') 
                                       ->set('array_data',$discount_db->get_admin_discount_list_array_data());
        		break;
                case 'product':
	                $this->template= View::factory('admin/discount/analysis/product'); 
	           	break;
	        case 'market':
		       $this->template= View::factory('admin/discount/analysis/market'); 
		       break;
                 default: $this->template='';
        		# code...
        		break;
              }

         }


	public function action_community() {
             parent::before();
            $sk = $this->_sk;
            $community_db = Calfdb_Admin::execute('Community',$this->_id,$this->_data);
            switch ($sk) {
         	case 'manager':
    		$this->template= View::factory('admin/community/manager/content'); 
    		break;
        	case 'lists':
    		$this->template= View::factory('admin/community/communitylist/content'); 
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

