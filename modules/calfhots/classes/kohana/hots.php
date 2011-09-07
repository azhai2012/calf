<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Hots {

    private $_id;
    private $_data = array();

    public static function factory($id, array $data = NULL) {
        return new Kohana_Hots($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
    }

    public function get_hots_view_content() {
         $result = '<div id="hots_list">
		           <div id="hnav">您现在的位置：<a href="/hots">展会区</a> --'.$this->_id.'</div>
		           <div id="hots_view_context"> <!-- begin hots_context -->
		              <div class="left clearfix"> <!-- begin left -->
		              ' . $this->get_hots_view_left_content(). '
		              </div>  <!-- end left -->
		              <div class="right clearfix"> <!-- begin right --> ' 
                              .$this->get_hots_view_right_top_all_discount_info()
                              .$this->get_hots_view_right_filter()
                              .$this->get_hots_view_right_content();

        $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';

        return $result;
    }

    private function get_hots_view_left_content(){
        
         $array = array(
            array('name' => '凯图', 'url' => '#', 'amount' => 203940.00),
            array('name' => '卡丹路', 'url' => '#', 'amount' => 103940.00),
            array('name' => '卡尔蒂尼', 'url' => '#', 'amount' => 33940.00),
            array('name' => '凯欧柯曼', 'url' => '#', 'amount' => 503940.00),
            array('name' => '卡佛连', 'url' => '#', 'amount' => 43940.00),
            
        );
         
        $result='
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
        $array =array(
            array('name' =>'阿莫西林胶囊', 'url' => '#', 'amount' => '203940.00'),
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
         foreach($array as $key=>$value){
             $result.='<li><span class="p_no">'.($key+1).'</span><span class="p_url"><a href="'.$value['url'].'">'.$value['name'].'</a></span><span class="p_amount">'.$value['amount'].'</span></li>';
         }    
         $result.='</ul>
            </div>
        ';
        return $result;
    }
    
    private function get_hots_view_right_top_all_discount_info(){
        $result='<div class="all_discount_info">
               全场满1000元送大礼包。
            </div>';
        return $result;
    }


    private function get_hots_view_right_filter(){
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
	
    
    private function get_hots_view_right_content(){
  	$result='
		<div class="list-content grid">
	    
	     <form action="http://sell.taobao.com/auction/spu_compare.htm" method="post" name="compareForm" target="_blank">
	      <input type="hidden" id="" name="isPostfree" value=" 0 ">
	      <input type="hidden" id="" name="supportCod" value=" 0 ">
	      <input type="hidden" id="" name="loc" value="">
	      <input type="hidden" id="" name="fromPath" value="malllist">
	      <ul class="product-list">';
		  // @todo 循环写入商品列表
	      $result.=
	      '
	          <!-- 商品列表 -->
              <li class="product">
	             <div class="productInfo">
	                    <div type="hidden" id="pid" value="8694912583"></div>
		                <div class="product-img">
			                <a href="#" target="_blank" onclick=""><img src="/media/images/T1yH09XopFXXXd1Go2_043122.jpg_160x160.jpg"></a>
		                </div>
					    <p class="product-price clearfix">
    			          <strong class="price">99.00</strong>
    		            </p>
    		            <p class="default-price"><span></span>108.00</p>
			            <h3 class="product-title" >
				          <input type="checkbox" name="listAuctionId" value="a:8694912583_0db1">
				          <a href="#" target="_blank" onclick="">【包邮】姿美堂 左旋肉碱 左旋肉减 正品 胶囊 左旋右碱</a>
                        </h3>
			            <p class="product-sum"><b class="pro-sale">月销量: <strong class="proHigh">13077</strong></b></p>
			            <p>
			            数量：<input id="p_sum"  value="10"></p>
			            <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'869491253383\');" id="btn_compare">对比</a>
			            </p>
			            
			            
			    </div>
              </li>
         ';     	
	     //以下循环时删除。                 	
         $result.= '                	
          	                	
    <li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="#" target="_blank" onclick=""><img src="/media/images/T1CB1kXhBBXXXNiio9_104003.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">49.01</strong>
    		</p>
    		<p class="default-price"><span></span>108.00</p>
						<h3 class="product-title" style="height: auto; ">
				<input type="checkbox" name="malllistAuctionId" value="a:12572824269_0db1">
				<a href="#" target="_blank" onclick="">康恩贝 葡萄籽胶囊 美白祛斑 调节内分泌</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">10065</strong></p>
              
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			           <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'869491442583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                	<li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="#" target="_blank" onclick=""><img src="/media/images/T12TmkXedqXXcNWAc._112808.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">54.00</strong>
    		</p>
    		<p class="default-price"><span></span>108.00</p>
						<h3 class="product-title" style="height: auto; ">
				<input type="checkbox" name="malllistAuctionId" value="a:12498199696_0db1">
				<a href="#" target="_blank" onclick="">康恩贝 钙D软胶囊 补充钙质 强健骨骼 营养保健品</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">9716</strong></p>
                        
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			         <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'8693344912583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          <li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="#" target="_blank" onclick=""><img src="/media/images/T16jiaXblwXXbmBDA1_042450.jpg_160x160.jpg"></a>
		</div>
					<p class="product-price">
    			<strong class="price">76.00</strong>
    		</p>
    		<p class="default-price"></p>
			<h3 class="product-title" style="height: 36px; overflow-x: hidden; overflow-y: hidden; ">
				<input type="checkbox" name="malllistAuctionId" value="a:5014015371_0db1">
				<a href="#" target="_blank" onclick="">碧生源减肥茶正品 减 淝茶 2盒送小沱茶 减肥销售排行榜 包邮</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">7416</strong></p>
                       
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			               <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'128694912583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                	<li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="" target="_blank" onclick="atpanelClick("><img src="/media/images/T1A0l_XhlCXXb006sV_021243.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">69.00</strong>
    		</p>
    		<p class="default-price"><span></span>138.00</p>
						<h3 class="product-title" style="height: 36px; overflow-x: hidden; overflow-y: hidden; ">
				<input type="checkbox" name="malllistAuctionId" value="a:12293292082_0db1">
				<a href="" target="_blank" onclick="">正品 蒂芬妮 100%精纯天然 深海鱼胶原蛋白粉5克*20袋</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">6106</strong></p>
                          
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			              <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'548694912583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                	<li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="" target="_blank" onclick=""><img src="/media/images/T19nCkXcNlXXaxG.A._113650.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">49.56</strong>
    		</p>
    		<p class="default-price"><span></span>118.00</p>
						<h3 class="product-title" style="height: auto; ">
				<input type="checkbox" name="malllistAuctionId" value="a:12663208506_0db1">
				<a href="" target="_blank" onclick="">康恩贝 大豆异黄酮 软胶囊 纯天然的植物雌激素</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">4737</strong></p>
                          
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			               <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'8694532912583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                	<li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="" target="_blank" onclick=""><img src="/media/images/T1yxieXXtdXXaKT9nb_124903.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">14.90</strong>
    		</p>
    		<p class="default-price"><span></span>50.00</p>
						<h3 class="product-title" style="height: 36px; overflow-x: hidden; overflow-y: hidden; ">
				<input type="checkbox" name="malllistAuctionId" value="a:9404001355_0db1">
				<a href="" target="_blank" onclick="">限时3折青青小美/左旋肉碱/左旋肉减/正品/胶囊/左旋右碱/14.9</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">4473</strong></p>
                         
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			              <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'864394912583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                	<li class="product">
	<div class="productInfo">
		<div class="product-img">
			<a href="" target="_blank" onclick=""><img src="/media/images/T1ebxZXXRKXXcKpgfb_094114.jpg_160x160.jpg"></a>
		</div>
								<p class="product-price proSales-price">
    			<strong class="price">46.00</strong>
    		</p>
    		<p class="default-price"><span></span>98.00</p>
						<h3 class="product-title">
				<input type="checkbox" name="malllistAuctionId" value="a:12367432314_0db1">
				<a href="" target="_blank" onclick="">纤姿华夫正品 钙D软胶囊  青少年增高药 孕妇中老年 液体钙片补钙</a>
    </h3>
			<p class="product-sum">
			<p class="pro-sale">月销量: <strong class="proHigh">4215</strong></p>
                          
				</p>
				 <p>
			            数量：<input id="p_sum"  value="10"></p>
			              <p class="aclick">
			             <a href="javascript:void();" id="btn_buy">订购</a>
			             <a href="javascript:void();" id="btn_wishlist">收藏</a>
			             <a href="javascript:Compare.getcompare(\'86949553212583\');" id="btn_compare">对比</a>
			            </p>
			</div>
</li>
          	                
          	                              	
	</ul>
	</form>
</div>
		';
	    return $result;  }


    public function get_hots_content() {

        $result = '<div id="account_list">
		           <div id="hnav">您现在的位置：<a href="/hots">展会区</a></div>
		           <div id="hots_context"> <!-- begin hots_context -->
		              <div class="left clearfix"> <!-- begin left -->
		              ' . $this->get_hots_left_content() . '
		              </div>  <!-- end left -->
		              <div class="right clearfix"> <!-- begin right --> ' . $this->get_host_right_content();

        $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
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

    private function get_hots_left_content(){

        $array_data = array(
            array('name' => '徐州片区会展', 'date_begin' => '2011-09-01', 'date_end' => '2011-09-07', 'isactive' => 1,
                'values' => array(
                    array('name' => '凯图', 'url' => '/hots/views/0102', 'img' => '/media/images/767_2.jpg', 'counts' => 109),
                    array('name' => '卡丹路', 'url' => '/hots/views/0102', 'img' => '/media/images/223_2.jpg', 'counts' => 210),
                    array('name' => '卡尔蒂尼', 'url' => '/hots/views/0102', 'img' => '/media/images/330_2.jpg', 'counts' => 230),
                    array('name' => '凯乐石', 'url' => '/hots/views/0102', 'img' => '/media/images/593_2.jpg', 'counts' => 132),
                    array('name' => 'KLX', 'url' => '/hots/views/0102', 'img' => '/media/images/1549_2.jpg', 'counts' => 45),
                    array('name' => '凯欧柯曼', 'url' => '/hots/views/0102', 'img' => '', 'counts' => 45),
                ),
            ),
            array('name' => '连云港区会展', 'date_begin' => '2011-09-10', 'date_end' => '2011-09-17', 'isactive' => 1,
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

        $result = '';
        foreach ($array_data as $key => $value) {

            $count = count($value['values']);
            $values = $value['values'];
            $isactive = ($value['isactive'] == 1) ? 'active' : 'notactive';
            $result.='
                  <div class="abc-a">
                     <div class="' . $isactive . '"></div>
                     <h3><a name="brandK">' . $value['name'] . '</a></h3> ';
            if ($value['isactive'] == 1) {
                $result.='
                     <div class="title"><p>参展供货商：' . $count . ' 家</p>
                     <p>开始日期：' . $value['date_begin'] . ' -- 结束日期：' . $value['date_end'] . '</p>
                     </div>   
                     <div>
                     <ul class="abc-height150px">
                  ';
                for ($i = 0; $i < $count; $i++) {
                    if ($i < 5) {
                        $result.='<li><a href="' . $values[$i]['url'] . '">
                           <img src="' . $values[$i]['img'] . '" alt="' . $values[$i]['name'] . '">
                           <p>' . $values[$i]['name'] . '( <span class="ff6600">' . $values[$i]['counts'] . '</span>款)</p>
                           </a>
                         </li>';
                    } 
                    else { 
                        if (($i % 5) === 0)
                            $result.='</ul> <ul class="brandfontlist">';
                        $result.='<li><a href="' . $values[$i]['url'] . '">
                                    <p>' . $values[$i]['name'] . '( <span class="ff6600">' . $values[$i]['counts'] . '</span>款)</p>
                                 </a></li>';
                    }
                }
                
                $result.='</ul> 
                      </div>  
                      <div class="status">*提示：本场目前参加家数：1000 家 , 截至目前共订购：2030056.00元</div>
   
                    ';
            }
            else {
                $result.='
                     <div class="title"><p>预计开始日期：' . $value['date_begin'] . ' -- 结束日期：' . $value['date_end'] . '</p></div>                          
                     <ul class="abc-height150px">
                    ';
                $result.='<li><div style="width:710px;font-size:30px;color:#ddd;height:150px;text-align:center;line-height:150px;">惊喜连连,敬请期待！</div></li>';

                $result.='</ul> ';
            }

            $result.=' <div class="clearfix"></div></div>';
        }


        return $result;
    }

}
