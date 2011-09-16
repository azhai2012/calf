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
*
*
*
*
*
*
*
*
*
*
*
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
    

	public static function factory($id, array $data = NULL) {
		return new Kohana_Product($id, $data);
	}

	function __construct($id, array $data = NULL) {
		$this->_id = $id;
		$this->_data = $data;
		$this->calfdb  = Calfdb::factory($id,$data);
		$this->_array_data =  $this->calfdb->product_views_data_array();
		$this->content_template= View::factory('product/content');
		$this->left_template= View::factory('product/left');
		$this->right_template = View::factory('product/right');
		$this->discount_template = View::factory('product/discount');
		$this->posts_template = View::factory('product/posts');
		
	}

	/*
	 * 商品信息内容
	*/
	public function get_product_content() {
		 
		$this->content_template->nav_name= $this->_array_data['product_info']['name'];
		$this->content_template->get_product_left_context =$this->get_product_left_context();
		$this->content_template->get_product_right_context = $this->get_product_right_context();
		 
		$result= $this->content_template;
		 
		 
		return $result;
	}

	/*
	* 右边栏显示商品区
 	*/
	function get_product_right_context() {

		$array_data = $this->_array_data['product_info'];
		//根据商品的id 得到商品的图片，显示
		$array_images_data = $this->_array_data['product_imgs'];

		$this->right_template->name  = $array_data['name'];
		$this->right_template->uses  = $array_data['uses'];
		$this->right_template->price = $array_data['price'];
		$this->right_template->pname = $array_data['pname'];
		$this->right_template->spec  = $array_data['spec'];
		$this->right_template->unit  = $array_data['unit'];
		$this->right_template->group = $array_data['group'];
		$this->right_template->lsno  = $array_data['lsno'];
		$this->right_template->big_image = $array_images_data[0]['big_image'];
		$this->right_template->array_images_data = $array_images_data;
		$this->right_template->get_product_discount_context = $this->get_product_discount_context();
		$this->right_template->get_product_info_content = $this->get_product_info_content();
		$this->right_template->get_procduct_posts_context = $this->get_procduct_posts_context();

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

	private function get_product_discount_context() {

		$array_data = $this->_array_data['product_discount'];

		$array_total_data= $array_data['total_info'];

		$result = '';
		

		$single = $array_data['single'];
		$single_bool = (!empty($single['content']));

		$compose = $array_data['compose'];
		$compose_bool = (!empty($compose['other']));

		$this->discount_template->single_bool = $single_bool;
		$this->discount_template->single_content = $single['content'];
		$this->discount_template->compose_bool = $compose_bool;
		$this->discount_template->compose_master_img = $compose['master']['img'];
		$this->discount_template->compose_master_url = $compose['master']['url'];
		$this->discount_template->compose_master_name = $compose['master']['name'];
		$this->discount_template->compose_other = $compose['other'];
		$this->discount_template->array_total_data_total = $array_total_data['total'];
		$this->discount_template->array_total_data_default_total = $array_total_data['default_total'];
		$this->discount_template->array_total_data_save_money = $array_total_data['save_money'];
		
		
		$result= $this->discount_template;
		return $result;
		
	}

	/*
	 * 讨论贴内容
	*/

	public function get_ajax_return_product_post_one_context() {

		$array_data=array(
		array('title'=>'商品不错','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'商品不错，送货也快！','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'商品不错','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'商品不错，送货也快！','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		);

		$result = '
                  <ul class="list">
                     <li class="list_title" style="border-top:0;"><span class="r0">话题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
                ';
		foreach ($array_data as $key => $value) {
			$result .='<li><span class="r0">'.$value['title'].'</span><span class="r1">'.$value['report'].'/'.$value['view'].'</span><span class="r2">'.$value['author'].'</span><span class="r3">'.$value['create_at'].'</span></li>';
		}
		$result .=' </ul>
                  <div class="p_status">
                     <div class="ps_left">有问题大家来讨论？[<a href="#">发表话题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                  </div>   
                    
                   ';
		return $result;
	}

	/*
	 * 问答贴内容
	*/

	public function get_ajax_return_product_post_two_context() {

		$array_data=array(
		array('title'=>'货送不急时，新货什么时候上','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'有缺货！赠品没有收到','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'货送不急时，新货什么时候上','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		array('title'=>'有缺货！赠品没有收到','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		);
		 

		$result = '
                <ul class="list">
                   <li class="list_title" style="border-top:0;"><span class="r0">主题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
               ';
		foreach ($array_data as $key => $value) {
			$result .='<li><span class="r0">'.$value['title'].'</span><span class="r1">'.$value['report'].'/'.$value['view'].'</span>
                       <span class="r2">'.$value['author'].'</span><span class="r3">'.$value['create_at'].'</span></li>';
		}
		$result .='
                 </ul>
                <div class="p_status">
                  <div class="ps_left">有什么问题？[<a href="#">发表主题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                </div>
             ';
		return $result;
	}

	/*
	 * 发帖显示内容
	*/

	private function get_procduct_posts_context() {
		$result = $this->posts_template;
		return $result;
	}

	/*
	 * 页面商品左边内容
	*
	* 作用：显示关联商品的信息
	*/

	private function get_product_left_context() {

		$array_data = array(
		array('url' => '#', 'img' => '/media/images/ec7e7412-51b8-4b89-a8df-aa30052e32c6.jpg', 'rate_strong' => '33%', 'rate_content' => 'Centrum善存佳维片新上市家庭装120片', 'price' => '108.00'),
		array('url' => '#', 'img' => '/media/images/a5882aa4-1faf-4a1e-8045-a67edbe6add8.jpg', 'rate_strong' => '22%', 'rate_content' => 'Centrum善存佳维片1.33g*60片', 'price' => '108.00'),
		array('url' => '#', 'img' => '/media/images/c4bebaca-2bc8-4d4b-abc9-ebc6981a611c.jpg', 'rate_strong' => '21%', 'rate_content' => '养生堂天然维生素C咀嚼片90粒促销特惠装', 'price' => '108.00'),
		);
        
		$this->left_template->array_data = $array_data;
		
		$result =$this->left_template ;
		return $result;
	}

}
