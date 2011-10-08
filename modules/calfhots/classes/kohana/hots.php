<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Hots {

    private $_id;
    private $_data = array();
    private $_template_content = NULL;
    private $_template_left = NULL;
    private $_template_right = NULL;
    private $_template_details_left = NULL;
    private $_template_details_right = NULL;
    private $_template_details_content = NULL;



    public static function factory($id, array $data = NULL) {
        return new Kohana_Hots($id, $data);        
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
        $this->_template_content = View::factory('hots/content');
        $this->_template_left = View::factory('hots/left');
        $this->_template_right = View::factory('hots/right');   
        $this->_template_details_content = View::factory('details/content');
        $this->_template_details_left = View::factory('details/left');
        $this->_template_details_right = View::factory('details/right');
      
    }

   
    public function get_hots_view_content() {
         
        $this->_template_details_content->get_hots_view_left_content = $this->get_hots_view_left_content();
        $this->_template_details_content->get_hots_view_right_content = $this->get_hots_view_right_content();

        return $this->_template_details_content;
    }

    

/*
	TODO 得到展商信息
*/
    private function get_hots_view_left_content() {

        $array_data = array(
	       
	        's_info'=>array('name'=>'哈药六厂','address'=>'哈尔滨','contact'=>'400-222-5555'),
            's_list'=>array( 
	            array('name' => '凯图', 'url' => '#', 'amount' => 203940.00),
                array('name' => '卡丹路', 'url' => '#', 'amount' => 103940.00),
                array('name' => '卡尔蒂尼', 'url' => '#', 'amount' => 33940.00),
                array('name' => '凯欧柯曼', 'url' => '#', 'amount' => 503940.00),
                array('name' => '卡佛连', 'url' => '#', 'amount' => 43940.00),
             ),
            'p_lists'=>array(
            	array('name' => '阿莫西林胶囊', 'url' => '#', 'amount' => '203940.00'),
	            array('name' => '优卡单', 'url' => '#', 'amount' => '103940.00'),
	            array('name' => '感冒胶囊', 'url' => '#', 'amount' => '33940.00'),
	            array('name' => '板蓝根', 'url' => '#', 'amount' => '503940.00'),
	            array('name' => '达可宁', 'url' => '#', 'amount' => '43940.00'),
	            array('name' => '感冒胶囊', 'url' => '#', 'amount' => '33940.00'),
	            array('name' => '达可宁', 'url' => '#', 'amount' => '43940.00'),
	            array('name' => '感冒胶囊', 'url' => '#', 'amount' => '33940.00'),
	            array('name' => '板蓝根', 'url' => '#', 'amount' => '503940.00'),
	            array('name' => '达可宁', 'url' => '#', 'amount' => '43940.00'),
            ), 
        );

        $this->_template_details_left->array_data = $array_data;         
        return $this->_template_details_left;
    }

   
    private function get_hots_view_right_content() {

        $array_data = 
         array(
	        'discounts'=> array('discount_info'=>'全场满1000元送大礼包。'), 
             'lists'=>array(
	        array('id' => 8694912583, 'img' => '/media/images/T1yH09XopFXXXd1Go2_043122.jpg_160x160.jpg','url'=>'#','price' => '99.00', 'default_price' => '108.00', 'name' => '姿美堂(左旋肉碱)', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 869491442583, 'img' => '/media/images/T1CB1kXhBBXXXNiio9_104003.jpg_160x160.jpg','url'=>'#', 'price' => '49.00', 'default_price' => '108.00', 'name' => '康恩贝 葡萄籽胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 88693344912583, 'img' => '/media/images/T12TmkXedqXXcNWAc._112808.jpg_160x160.jpg','url'=>'#', 'price' => '54.00', 'default_price' => '108.00', 'name' => '康恩贝 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 128694912583, 'img' => '/media/images/T16jiaXblwXXbmBDA1_042450.jpg_160x160.jpg','url'=>'#', 'price' => '75.00', 'default_price' => '108.00', 'name' => '碧生源减肥茶正品 减 淝茶', 'spec' => '2合', 'discount' => '买一送10积分'),
            array('id' => 8694912583, 'img' => '/media/images/T1A0l_XhlCXXb006sV_021243.jpg_160x160.jpg','url'=>'#', 'price' => '69.00', 'default_price' => '138.00', 'name' => '蒂芬妮 100%精纯天然', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 8694532912583, 'img' => '/media/images/T19nCkXcNlXXaxG.A._113650.jpg_160x160.jpg','url'=>'#', 'price' => '49.56', 'default_price' => '118.00', 'name' => '康恩贝 大豆异黄酮 ', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 864394912583, 'img' => '/media/images/T1yxieXXtdXXaKT9nb_124903.jpg_160x160.jpg','url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '青青小美/左旋肉碱', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 86949553212583, 'img' => '/media/images/T1ebxZXXRKXXcKpgfb_094114.jpg_160x160.jpg','url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '纤姿华夫正品 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
           ),
        );

        $this->_template_details_right->array_data = $array_data;    

        return $this->_template_details_right;
    }


    /**
     * @description: host content
     * @author azhai
     * @date 23 September, 2011
     * @params 
     */
    public function get_hots_content() {
       		
        $this->_template_content->get_hots_left_content = $this->get_hots_left_content();
        $this->_template_content->get_host_right_content = $this->get_host_right_content();
        return $this->_template_content;

    }

    private function get_host_right_content() {

        $array_data = array(
           's_list'=>array( 
	              array('name' => '凯图', 'url' => '#', 'amount' => 203940.00),
                  array('name' => '卡丹路', 'url' => '#', 'amount' => 103940.00),
                  array('name' => '卡尔蒂尼', 'url' => '#', 'amount' => 33940.00),
                  array('name' => '凯欧柯曼', 'url' => '#', 'amount' => 503940.00),
                  array('name' => '卡佛连', 'url' => '#', 'amount' => 43940.00),
                ),
            'p_list'=>array(
            	array('name' => '阿莫西林胶囊', 'url' => '#', 'amount' => 203940.00),
	            array('name' => '优卡单', 'url' => '#', 'amount' => 103940.00),
	            array('name' => '感冒胶囊', 'url' => '#', 'amount' => 33940.00),
	            array('name' => '板蓝根', 'url' => '#', 'amount' => 503940.00),
	            array('name' => '达可宁', 'url' => '#', 'amount' => 43940.00),	 
            ),
        );
        $this->_template_right->array_data = $array_data;
        return $this->_template_right;
    }

     function get_hots_left_content() {

        $array_data = array(
            array('name' => '徐州片区会展', 'date_begin' => '2011-09-01', 'date_end' => '2011-09-07', 'isactive' => 1,
                'values' => array(
                    array('name' => '凯图', 'url' => '/hots/views/0102', 'img' => '/media/images/767_2.jpg', 'counts' => 109),
                    array('name' => '卡丹路', 'url' => '/hots/views/0102', 'img' => '/media/images/223_2.jpg', 'counts' => 210),
                    array('name' => '卡尔蒂尼', 'url' => '/hots/views/0102', 'img' => '/media/images/330_2.jpg', 'counts' => 230),
                    array('name' => '凯乐石', 'url' => '/hots/views/0102', 'img' => '/media/images/593_2.jpg', 'counts' => 132),
                    array('name' => 'KLX', 'url' => '/hots/views/0102', 'img' => '/media/images/1549_2.jpg', 'counts' => 45),
                    array('name' => '凯欧柯曼', 'url' => '/hots/views/0102', 'img' => '', 'counts' => 45),
                    array('name' => '卡尔蒂尼', 'url' => '/hots/views/0102', 'img' => '/media/images/330_2.jpg', 'counts' => 230),
                    array('name' => '凯乐石', 'url' => '/hots/views/0102', 'img' => '/media/images/593_2.jpg', 'counts' => 132),
                    array('name' => 'KLX', 'url' => '/hots/views/0102', 'img' => '/media/images/1549_2.jpg', 'counts' => 45),
                    array('name' => '凯欧柯曼', 'url' => '/hots/views/0102', 'img' => '', 'counts' => 45),
                     ),
            ),
            array('name' => '连云港区会展', 'date_begin' => '2011-09-10', 'date_end' => '2011-09-17', 'isactive' => 0,
                'values' => array(
                    array('name' => '凯图', 'url' => '#', 'img' => '/media/images/767_2.jpg', 'counts' => 109),
                    array('name' => '卡丹路', 'url' => '#', 'img' => '/media/images/223_2.jpg', 'counts' => 210),
                    array('name' => '卡尔蒂尼', 'url' => '#', 'img' => '/media/images/330_2.jpg', 'counts' => 230),
                    array('name' => '凯乐石', 'url' => '#', 'img' => '/media/images/593_2.jpg', 'counts' => 132),
                    array('name' => 'KLX', 'url' => '#', 'img' => '/media/images/1549_2.jpg', 'counts' => 45),
                    array('name' => '凯欧柯曼', 'url' => '#', 'img' => '', 'counts' => 45),
                    array('name' => '恺王', 'url' => '#', 'img' => '', 'counts' => 41),
                    array('name' => 'KAJA', 'url' => '#', 'img' => '', 'counts' => 42),
                    array('name' => '卡佛连', 'url' => '#', 'img' => '', 'counts' => 43),
                    array('name' => '康莉', 'url' => '#', 'img' => '', 'counts' => 44),
                    array('name' => '卡瓦文迪', 'url' => '#', 'img' => '', 'counts' => 45),
                ),
            ),
            array('name' => '苏州区会展', 'date_begin' => '2011-09-20', 'date_end' => '2011-09-21', 'isactive' => 0,
                'values' => array(
                ),
            ),
            array('name' => '无锡区会展', 'date_begin' => '2011-09-20', 'date_end' => '2011-09-21', 'isactive' => 0,
                'values' => array(
                ),
            ),
            array('name' => '常州区会展', 'date_begin' => '2011-09-20', 'date_end' => '2011-09-21', 'isactive' => 0,
                'values' => array(
                ),
            ),
        );
        $this->_template_left->array_data = $array_data;
        return $this->_template_left;
    }

}
