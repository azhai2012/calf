<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shelf {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shelf($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_shelf_content(){
		
		    $result='<div id="account_list">
		         
		           <div id="shelf_context"> <!-- begin shelf_context -->
		              <div class="left clearfix"> <!-- begin left -->
		              '.$this->get_shelf_left_content().
		                $this->get_shelf_left_shop_info().
		              '
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		              '.$this->get_shelf_right_content().
		                $this->get_shelf_right_filter().
		                $this->get_shelf_right_list().
		              '
     	              </div> <!-- end right -->
     	              <div id="compare"></div>
		           </div> <!-- end tuan_context -->
		    </div>';
	        
		return $result;
		
	}
	
	/*
	 * 功能：左边显示查询条件。
	 * 
	 * 
	 */
	function get_shelf_left_content(){
		$result='<div class="cate-item">
			<ul>
			<li>
			  <a href="#" onclick="" class="c_t"><b class="icon blueLeft"></b>所有商品分类</a>
			  <ul>
			    <li>
			      <strong class="selected">常用商品区</strong>
			      <ul>
			        <li> <a title="所在区域畅销商品(397)" href="#" onclick="">所在区域畅销商品<b>(397)</b></a></li>
                    <li> <a title="全部常用商品(1432)" href="#" onclick="">全部常用商品<b>(1432)</b></a></li>
                  </ul>
                 </li>
			  </ul>
			    <ul class="j_groupCon" style="height: auto; ">
					<li>
						<strong class="selected">按剂型分类</strong>
						<ul class="j_groupClose" data-height="231" style="height: 168px; ">
													<li>
								<a title="片剂/胶囊(1497)" href="" onclick="">片剂/胶囊<b>(1497)</b></a>
							</li>
													<li>
								<a title="针剂/注射剂(1247)" href="" onclick="">针剂/注射剂<b>(1247)</b></a>
							</li>
													<li>
								<a title="中成药/饮片(1234)" href="" onclick="">中成药/饮片<b>(1234)</b></a>
							</li>
													<li>
								<a title="外用/口服(235)" href="" onclick="">外用/口服<b>(235)</b></a>
							</li>
													<li>
								<a title="医用器械(151)" href="" onclick="">医用器械<b>(151)</b></a>
							</li>
													<li>
								<a title="保健品(31)" href="" onclick="">保健品<b>(31)</b></a>
							</li>
				 		</ul>
												<div class="cate-toggler j_groupToggler">
							<a hidefocus="true" class="j_groupTri close" href="#"><b class="icon grayDown"></b>更多</a>
						</div>
											</li>
				</ul>
			   </li>
            </ul>
        </div>';
		
		return $result;
	}
	
	/*
	 * 功能：显示热销店铺
	 */
	function get_shelf_left_shop_info(){
		$result=
		'<div class="recommend-panel">
		  <div class="hot-store-rank ald">
		   <h3 class="hd">热销店铺排行</h3>
		    <ul class="hot-store-list bd clearfix">
		       <li class="hot-store clearfix">
		         <h4 class="hot-store-title">
		         <a href="#" title="康恩贝官方旗舰店" target="_blank">1.康恩贝官方旗舰店</a></h4>
		         <p class="hot-store-weeksale">周销量：<strong>4424</strong></p>
		         <p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>108-185</span></p>
		       </li>
		       
		       <li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop57302028.taobao.com?recommendid83_15=57302028&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.2&amp;scm=1003.634.1104.0" title="欧德凯保健专营店" target="_blank">2.欧德凯保健专营店</a></h4><p class="hot-store-weeksale">周销量：<strong>1745</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>125-352</span></p></li><li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop62642324.taobao.com?recommendid83_15=62642324&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.3&amp;scm=1003.634.1104.0" title="直成食品专营店" target="_blank">3.直成食品专营店</a></h4><p class="hot-store-weeksale">周销量：<strong>948</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>138-388</span></p></li><li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop59001086.taobao.com?recommendid83_15=59001086&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.4&amp;scm=1003.634.1104.0" title="鲁库斯食品专营店" target="_blank">4.鲁库斯食品专营店</a></h4><p class="hot-store-weeksale">周销量：<strong>785</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>46-92</span></p></li><li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop60429282.taobao.com?recommendid83_15=60429282&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.5&amp;scm=1003.634.1104.0" title="太太品牌旗舰店" target="_blank">5.太太品牌旗舰店</a></h4><p class="hot-store-weeksale">周销量：<strong>630</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>130-278</span></p></li><li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop58755960.taobao.com?recommendid83_15=58755960&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.6&amp;scm=1003.634.1104.0" title="陶文食品专营店" target="_blank">6.陶文食品专营店</a></h4><p class="hot-store-weeksale">周销量：<strong>554</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>219-554</span></p></li><li class="hot-store clearfix"><h4 class="hot-store-title"><a href="http://shop64674345.taobao.com?recommendid83_15=64674345&amp;recommendId=83_15_634_1104&amp;spm=1003.1.1.7&amp;scm=1003.634.1104.0" title="泰尔旗舰店" target="_blank">7.泰尔旗舰店</a></h4><p class="hot-store-weeksale">周销量：<strong>211</strong></p><p class="hot-store-weeksale">售价：<span class="price"><span class="b">¥</span>264-415</span></p></li>
		       
		    </ul>
		  </div>
		</div>
		'
		;
		return $result;
		
	}
	
	/*
	 * 功能：显示商品内容
	 */
	function get_shelf_right_content(){
		$result='
		<div class="s-search">
           <div class="search-form">
            <ul>
               <li class="keyword">
                  <label for="keyword">商品：</label>
                     <input id="keyword" name="keyword" type="text" value="">
               </li>
               <li class="price">
                 <label for="price">价格：</label>
                 <input id="price1" name="price1" type="text" class="price" value="">
                  到
                 <input id="price2" name="price2" type="text" class="price" value="">
               </li>
               <li class="submit">
                   <a href="#" class="button">搜索</a>
               </li>
             </ul>
           </div>
           <div class="search-result">
              共搜索到<span> 392 </span>个符合条件的商品。
           </div>
        </div>
		';
		return $result;
	}
    
	/*
	 * 功能:显示查询商品的条件
	 */
	function get_shelf_right_filter(){
		// TODO 排序的实现
		$result='
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
	
	/*
	 * 功能：循环显示商品列表内容
	 */
	function get_shelf_right_list(){
            
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
			            <p class="product-dis"><b>[促销]</b>: <strong>'.$value['discount'].'</strong></p>
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
	
	
	
	
	
}
