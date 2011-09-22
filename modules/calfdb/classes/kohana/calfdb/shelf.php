<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : shelf db 
 *
 * @author Azhai
 * @date 2011-09-22 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Shelf {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Shelf($id,$data);

	}
     
    /**
    * get_left_data 
    */
    public function get_shelf_left_content() {
        // TODO : [shelf] get left data
        $array_data = array(
			 'common_area' =>array(
				     array('name'=>'所在区域畅销商品','product_count'=>397,'url'=>'#'),
					 array('name'=>'所在区域畅销品牌','product_count'=>7,'url'=>'#'),
					 array('name'=>'全部常用商品','product_count'=>1432,'url'=>'#'),
				   ), 
			 'category_area' => array(
			 	   array('name'=>'片剂/胶囊','product_count'=>1497,'url'=>'#'),
			 	   array('name'=>'针剂/注射剂','product_count'=>1247,'url'=>'#'),
			 	   array('name'=>'中成药/饮片','product_count'=>1234,'url'=>'#'),
			 	   array('name'=>'外用/口服','product_count'=>235,'url'=>'#'),
			 	   array('name'=>'医用器械','product_count'=>151,'url'=>'#'),
			 	   array('name'=>'保健品','product_count'=>31,'url'=>'#'),			 	 
			 ),	
	    );
        return $array_data;
    }

   /**
   * get_left_info data
   */
   public function get_shelf_left_shop_info() {
       // TODO : [shelf] get left info data
    	$array_data = array(
			array('name' =>'康恩贝官方旗舰店','url'=>'#','week_sale_count'=>'4424','other_info'=>'其他信息'), 
			array('name' =>'欧德凯保健专营店','url'=>'#','week_sale_count'=>'1745','other_info'=>'其他信息'), 
			array('name' =>'直成食品专营店','url'=>'#','week_sale_count'=>'948','other_info'=>'其他信息'), 
			array('name' =>'鲁库斯食品专营店','url'=>'#','week_sale_count'=>'785','other_info'=>'其他信息'), 
			array('name' =>'太太品牌旗舰店','url'=>'#','week_sale_count'=>'630','other_info'=>'其他信息'), 
			array('name' =>'陶文食品专营店','url'=>'#','week_sale_count'=>'554','other_info'=>'其他信息'), 
			array('name' =>'泰尔旗舰店','url'=>'#','week_sale_count'=>'221','other_info'=>'其他信息'), 
		 );
       return $array_data;
   }

    /**
    * get_right_lists
    */
    public function get_shelf_right_list() {
        // TODO :[shelf] get right list data 
     	$array_data = array(
			'totalcount'=> array('rowcount'=>392),
            'lists'=> array(
	                      array('id' => 8694912583, 'img' => '/media/images/T1yH09XopFXXXd1Go2_043122.jpg_160x160.jpg',
	                            'url'=>'#','price' => '99.00', 'default_price' => '108.00', 'name' => '姿美堂(左旋肉碱)', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 869491442583, 'img' => '/media/images/T1CB1kXhBBXXXNiio9_104003.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '49.00', 'default_price' => '108.00', 'name' => '康恩贝 葡萄籽胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 88693344912583, 'img' => '/media/images/T12TmkXedqXXcNWAc._112808.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '54.00', 'default_price' => '108.00', 'name' => '康恩贝 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 128694912583, 'img' => '/media/images/T16jiaXblwXXbmBDA1_042450.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '75.00', 'default_price' => '108.00', 'name' => '碧生源减肥茶正品 减 淝茶', 'spec' => '2合', 'discount' => '买一送10积分'),
                          array('id' => 8694912583, 'img' => '/media/images/T1A0l_XhlCXXb006sV_021243.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '69.00', 'default_price' => '138.00', 'name' => '蒂芬妮 100%精纯天然', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 8694532912583, 'img' => '/media/images/T19nCkXcNlXXaxG.A._113650.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '49.56', 'default_price' => '118.00', 'name' => '康恩贝 大豆异黄酮 ', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 864394912583, 'img' => '/media/images/T1yxieXXtdXXaKT9nb_124903.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '青青小美/左旋肉碱', 'spec' => '20*10', 'discount' => '买一送10积分'),
                          array('id' => 86949553212583, 'img' => '/media/images/T1ebxZXXRKXXcKpgfb_094114.jpg_160x160.jpg',
                                'url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '纤姿华夫正品 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
                        ),
        );
        return 	$array_data;
    }

	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
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
