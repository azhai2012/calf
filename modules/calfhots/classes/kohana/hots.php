<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Hots {

    private $_id;
    private $_data = array();
    private $_template = NULL;

    public static function factory($id, array $data = NULL) {
        return new Kohana_Hots($id, $data);
        
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
        $this->_template = View::factory('hots/content');
         
    }

   
    public function get_hots_view_content() {
        $result = '<div id="hots_list" class="clearfix">
		           <div id="hnav">您现在的位置：<a href="/hots">展会区</a> --' . $this->_id . '</div>
		           <div id="hots_view_context"> <!-- begin hots_context -->
		              <div class="left"> <!-- begin left -->
		              ' . $this->get_hots_view_left_content() . '
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> '
                . $this->get_hots_view_right_top_all_discount_info()
                . $this->get_hots_view_right_filter()
                . $this->get_hots_view_right_content();

        $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
                    </div>' . $this->get_hots_chat();

        return $result;
    }

    private function get_hots_chat() {
        $result = '
          <div id="tstart">
           <div class="tstart-toolbar">
           <div class="tstart-areas" >
            <div class="tstart-left-area"></div>
            <div class="tstart-right-area">
                  <span class="tstart-normal-trigger">
                    <a href="tencent://message/?uin=344216309" target="_blank" title="在线咨询">QQ在线咨询</a>
                  </span>
                  <span class="tstart-normal-trigger">
                    <a href="#" target="_blank" title="投诉建议">投诉建议</a>
                
                  </span>
                 <span class="tstart-item tstart-custom-item" id="tstart-plugin-share">
                 <a href="#" target="_blank">消息</a>
                 <b class="news-num J_NewsNum" style="display: none; "><s>0</s></b>
               </span>
               </span>
             </div>
            </div>
           </div>
          </div> 
         </div>
        ';
        return $result;
    }

/*
	TODO 得到展商信息
*/
    private function get_hots_view_left_content() {

        $array = array(
            array('name' => '凯图', 'url' => '#', 'amount' => 203940.00),
            array('name' => '卡丹路', 'url' => '#', 'amount' => 103940.00),
            array('name' => '卡尔蒂尼', 'url' => '#', 'amount' => 33940.00),
            array('name' => '凯欧柯曼', 'url' => '#', 'amount' => 503940.00),
            array('name' => '卡佛连', 'url' => '#', 'amount' => 43940.00),
        );

        $result = '
            <div class="s_info">
             <h3>展商信息</h3>
             <ul>
                <li><span>参展商名称：</span><span>哈药六厂</span></li>
                <li><span>参展商地址：</span><span>哈尔滨</span></li>
                <li><span>业务留言：</span><span></span></li>
                <li><span>服务电话：</span><span>400-222-5555</span></li>
             </ul>
            </div>
        ';
        $array = array(
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
        );

        $result.='  
            <div class="s_info">
              <h3>会展畅销商品排行</h3>
              <ul>
             ';
        foreach ($array as $key => $value) {
            $result.='<li><span class="p_no">' . ($key + 1) . '</span><span class="p_url"><a href="' . $value['url'] . '">' . $value['name'] . '</a></span><span class="p_amount">' . $value['amount'] . '</span></li>';
        }
        $result.='</ul>
            </div>
        ';
        return $result;
    }

    private function get_hots_view_right_top_all_discount_info() {
        $result = '<div class="all_discount_info">
               全场满1000元送大礼包。
            </div>';
        return $result;
    }

    private function get_hots_view_right_filter() {
        // TODO 排序的实现
        $result = '
		<div class="s-filter grid">
            <div class="mode">
                <span>显示：</span>
                    <a href="#" alt="列表方式" title="列表方式" class="mode-row">列表模式</a>
                    <a href="#" alt="图表方式" title="图表方式" class="mode-grid">图表模式</a>
            </div>
            <div class="taxis">
                <span>排序：</span>
                   <a href="#" alt="按销量排列" title="按销量排列" class="def">销量<i class="icon"></i></a>
                   <a href="#" alt="按新品排列" title="按新品排列" class="fav def">新品<i class="icon"></i></a>
                   <a href="#" alt="按价格排列" title="按价格排列" class="def">价格<i class="icon"></i></a>
                   <a href="#" alt="按收藏排列" title="按收藏排列" class="up">收藏<i class="icon"></i></a>
                   <a href="#" alt="按人气排列" title="按人气排列" class="down">人气<i class="icon"></i></a>
            </div>
            <div class="dis">
               <span>筛选：</span>
                 <input type="checkbox" id="cx" /><label title="促销" for="cx">促销</label>
                 <input type="checkbox" id="xp" /><label title="新品" for="xp">新品</label>
                 
            </div>
        </div>
		
		';
        return $result;
    }

    private function get_hots_view_right_content() {

        $array_data = array(
            array('id' => 8694912583, 'img' => '/media/images/T1yH09XopFXXXd1Go2_043122.jpg_160x160.jpg','url'=>'#','price' => '99.00', 'default_price' => '108.00', 'name' => '姿美堂(左旋肉碱)', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 869491442583, 'img' => '/media/images/T1CB1kXhBBXXXNiio9_104003.jpg_160x160.jpg','url'=>'#', 'price' => '49.00', 'default_price' => '108.00', 'name' => '康恩贝 葡萄籽胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 88693344912583, 'img' => '/media/images/T12TmkXedqXXcNWAc._112808.jpg_160x160.jpg','url'=>'#', 'price' => '54.00', 'default_price' => '108.00', 'name' => '康恩贝 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 128694912583, 'img' => '/media/images/T16jiaXblwXXbmBDA1_042450.jpg_160x160.jpg','url'=>'#', 'price' => '75.00', 'default_price' => '108.00', 'name' => '碧生源减肥茶正品 减 淝茶', 'spec' => '2合', 'discount' => '买一送10积分'),
            array('id' => 8694912583, 'img' => '/media/images/T1A0l_XhlCXXb006sV_021243.jpg_160x160.jpg','url'=>'#', 'price' => '69.00', 'default_price' => '138.00', 'name' => '蒂芬妮 100%精纯天然', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 8694532912583, 'img' => '/media/images/T19nCkXcNlXXaxG.A._113650.jpg_160x160.jpg','url'=>'#', 'price' => '49.56', 'default_price' => '118.00', 'name' => '康恩贝 大豆异黄酮 ', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 864394912583, 'img' => '/media/images/T1yxieXXtdXXaKT9nb_124903.jpg_160x160.jpg','url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '青青小美/左旋肉碱', 'spec' => '20*10', 'discount' => '买一送10积分'),
            array('id' => 86949553212583, 'img' => '/media/images/T1ebxZXXRKXXcKpgfb_094114.jpg_160x160.jpg','url'=>'#', 'price' => '14.90', 'default_price' => '50.00', 'name' => '纤姿华夫正品 钙D软胶囊', 'spec' => '20*10', 'discount' => '买一送10积分'),
        );


        $result = '
		<div class="list-content grid">
	    
	     <form action="#" method="post" name="compareForm" target="_blank">
	      <input type="hidden" id="" name="isPostfree" value=" 0 ">
	      <input type="hidden" id="" name="supportCod" value=" 0 ">
	      <input type="hidden" id="" name="loc" value="">
	      <input type="hidden" id="" name="fromPath" value="malllist">
	      <ul class="product-list">';
        // @todo 循环写入商品列表
        foreach ($array_data as $key => $value) {

            $result.=
                    '
	      <li class="product">
	             <div class="productInfo">
	                    <div type="hidden" id="pid" value="'.$value['id'].'"></div>
		                <div class="product-img">
			                <a href="'.$value['url'].'" target="_blank" onclick="">
                                            <img src="'.$value['img'].'"></a>
		                </div>
					    <p class="product-price clearfix">
    			          <strong class="price">'.$value['price'].'</strong>
    		            </p>
    		            <p class="default-price"><span></span>'.$value['default_price'].'</p>
			       <h3 class="product-title" ><a href="'.$value['url'].'" target="_blank" onclick="">'.$value['name'].'</a>
                                    </h3>
			            <p class="product-spec">规格: '.$value['spec'].'</p>
			            <p class="product-sum"><b class="pro-sale">促销: <strong class="proHigh">'.$value['discount'].'</strong></b></p>
			            <p>
			            数量：<input id="p_sum"  value="10"></p>
			            <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\''.$value['id'].'\');" id="btn_compare">对比</a>
			            </p>
			            
			            
			    </div>
              </li>
            ';
        }

        $result.= '</ul>
	            </form>
                    </div>
		 ';
        return $result;
    }

    public function get_hots_content() {

        $result = '<div id="hots_list"> <!-- begin hots_list -->
		           <div id="hnav">您现在的位置：<a href="/hots">展会区</a></div>
		           <div id="hots_context"> <!-- begin hots_context -->
		              <div class="left clearfix" style="width:700px"> <!-- begin left -->
		              ' . $this->get_hots_left_content() . '
		              </div>  <!-- end left -->
		              <div class="right clearfix"> <!-- begin right --> ' . $this->get_host_right_content();

        $result.='</div> <!-- end right -->
		           </div> <!-- end hots_context -->
		    </div>';

        return $result;
    }

    private function get_host_right_content() {

        $array = array(
            array('name' => '凯图', 'url' => '#', 'amount' => 203940.00),
            array('name' => '卡丹路', 'url' => '#', 'amount' => 103940.00),
            array('name' => '卡尔蒂尼', 'url' => '#', 'amount' => 33940.00),
            array('name' => '凯欧柯曼', 'url' => '#', 'amount' => 503940.00),
            array('name' => '卡佛连', 'url' => '#', 'amount' => 43940.00),
        );



        $result = '
                <div class="hots-extra">
                 <h3>会展展商热销排行榜</h3> 
                 <ul>';
        foreach ($array as $key => $value) {
            $flag = '';
            if ($key == 0) {
                $flag = 'flag1';
            }
            if ($key == 1) {
                $flag = 'flag2';
            }
            if ($key == 2) {
                $flag = 'flag3';
            }
            $result.='<li><span class="h_no ' . $flag . '">' . ($key + 1) . '</span><span class="h_name"><a href="' . $value['url'] . '">' . $value['name'] . '</a></span><span class="h_amount">' . $value['amount'] . '</span></li>';
        }
        $result.='</ul>
               </div>  
               
             ';
        $array = array(
            array('name' => '阿莫西林胶囊', 'url' => '#', 'amount' => 203940.00),
            array('name' => '优卡单', 'url' => '#', 'amount' => 103940.00),
            array('name' => '感冒胶囊', 'url' => '#', 'amount' => 33940.00),
            array('name' => '板蓝根', 'url' => '#', 'amount' => 503940.00),
            array('name' => '达可宁', 'url' => '#', 'amount' => 43940.00),
        );
        $result.='
                <div class="hots-extra">
                 <h3>会展商品热销排行榜</h3> 
                 <ul>';
        foreach ($array as $key => $value) {
            $flag = '';
            if ($key == 0) {
                $flag = 'flag1';
            }
            if ($key == 1) {
                $flag = 'flag2';
            }
            if ($key == 2) {
                $flag = 'flag3';
            }

            $result.='<li><span class="h_no ' . $flag . '">' . ($key + 1) . '</span><span class="h_name"><a href="' . $value['url'] . '">' . $value['name'] . '</a></span><span class="h_amount">' . $value['amount'] . '</span></li>';
        }
        $result.='</ul>
               </div>  
               
             ';
        return $result;
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
        $this->_template->array_data = $array_data;
        $result = $this->_template;
        return $result;
    }

}
