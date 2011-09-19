<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * 功能：商品详细信息，到购物车的重要环节。
*
* 日期：2011-09-01
*
* @author zhaibob
*
* 数据表结构：
*
*/

class Kohana_Product {

	private $_id;
	private $_data = array();
	private $calfdb = NULL;
	private $_array_data= array();
	private $conten_template = NULL;
	private $left_template = NULL;
	private $right_template = NULL;
	private $discount_template = NULL;
    private $posts_template= NULL;
    private $post_template= NULL;
    private $_new_posts_data = NULL;
    private $_ask_posts_data = NULL;
    private $_relevance_data = NULL;
    

	public static function factory($id, array $data = NULL) {
		return new Kohana_Product($id, $data);
	}

	function __construct($id, array $data = NULL) {
		$this->_id = $id;
		$this->_data = $data;
		$this->calfdb  = Calfdb_Product::factory($id,$data);
		$this->_array_data =  $this->calfdb->product_views_data_array();
		$this->_new_posts_data = $this->calfdb->product_views_new_posts_data_array();
		$this->_ask_posts_data = $this->calfdb->product_views_ask_posts_data_array();
		$this->_relevance_data = $this->calfdb->product_views_relevance_data_array();
		
		$this->content_template= View::factory('product/content');
		$this->left_template= View::factory('product/left');
		$this->right_template = View::factory('product/right');
		$this->discount_template = View::factory('product/discount');
		$this->posts_template = View::factory('product/posts');
		$this->post_template = View::factory('product/post');
		
		
		
	}

	/*
	 * 商品信息内容
	*/
	public function get_product_content() {
		 
		$this->content_template->nav_name= $this->_array_data['product_info']['name'];
		$this->content_template->get_product_left_content =$this->get_product_left_content();
		$this->content_template->get_product_right_content = $this->get_product_right_content();
		 
		$result= $this->content_template;
		 
		 
		return $result;
	}

	/*
	* 右边栏显示商品区
 	*/
	private function get_product_right_content() {

		$array_data = $this->_array_data['product_info'];
		//根据商品的id 得到商品的图片，显示
		$array_images_data = $this->_array_data['product_imgs'];
		$this->right_template->array_data  = $array_data;
		$this->right_template->array_images_data = $array_images_data;
		$this->right_template->get_product_discount_content = $this->get_product_discount_content();
		$this->right_template->get_product_info_content = $this->get_product_info_content();
		$this->right_template->get_procduct_posts_content = $this->get_procduct_posts_content();

		$result = $this->right_template;
		return $result;
	}

	/*
	 * 读取商品的详细信息
	*
	* 说明：读取数据库HTML格式文件呈现。
	*/

	private function get_product_info_content() {
		$result = $this->_array_data['product_description']['content'];
		return $result;
	}

	/*
	 * 功能：显示促销信息
	*
	* 促销信包括：单品促销和组合套餐
	*
	*/

	private function get_product_discount_content() {

		$array_data = $this->_array_data['product_discount'];

		$array_total_data= $array_data['total_info'];

		$single = $array_data['single'];
		$single_bool = (!empty($single['content']));

		$compose = $array_data['compose'];
		$compose_bool = (!empty($compose['other']));

		$this->discount_template->single_bool = $single_bool;
		$this->discount_template->single= $single;
		$this->discount_template->compose_bool = $compose_bool;
		$this->discount_template->compose = $compose;
	
		$this->discount_template->array_total_data = $array_total_data;	
		
		$result= $this->discount_template;
		return $result;
		
	}

	/*
	 * 讨论贴内容
	*/

	public function get_ajax_return_product_post_one_content() {

		$array_data= $this->_new_posts_data;
		$this->post_template->mod ='new';
		$this->post_template->array_data = $array_data['lists'];
		$this->post_template->array_status_data =$array_data['status']; 		
		$result = $this->post_template;
		return $result;
	}

	/*
	 * 问答贴内容
	*/

	public function get_ajax_return_product_post_two_content() {

		$array_data= $this->_ask_posts_data;
		$this->post_template->mod ='ask';
		$this->post_template->array_data = $array_data['lists'];
		$this->post_template->array_status_data =$array_data['status'];
		$result = $this->post_template;
		return $result;	
	}

	/*
	 * 发帖显示内容
	*/

	private function get_procduct_posts_content() {
		$result = $this->posts_template;
		return $result;
	}

	/*
	 * 页面商品左边内容
	*
	* 作用：显示关联商品的信息
	*/

	private function get_product_left_content() {

		$array_data = $this->_relevance_data;
        
		$this->left_template->array_data = $array_data;
		
		$result =$this->left_template ;
		return $result;
	}

}
