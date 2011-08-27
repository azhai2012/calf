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
     	              '
     	              .$this->get_shelf_product_compare().
     	              '
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
			<b class="pro-sale">月销量: <strong class="proHigh">10065</strong></b>
                <a href="#" target="_blank" onclick="">(3481人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">9716</strong></b>
                            <a href="#" target="_blank" onclick="">(1101人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">7416</strong></b>
                            <a href="" target="_blank" onclick=");">(9073人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">6106</strong></b>
                            <a href="" target="_blank" onclick="">(2248人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">4737</strong></b>
                            <a href="" target="_blank" onclick="">(395人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">4473</strong></b>
                            <a href="" target="_blank" onclick="">(6298人评论)</a>
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
			<b class="pro-sale">月销量: <strong class="proHigh">4215</strong></b>
                            <a href="" target="_blank" onclick="">(832人评论)</a>
				</p>
			</div>
</li>
          	                
          	                              	
	</ul>
	</form>
</div>
		';
	    return $result;
		
		
	}
	
	
	/*
	 * 功能说明：显示对比商品功能
	 * 思路：将编号写入 cookie 中，每次刷新时同样显示，删除时将cookie 删除，检查cookie 如没有，写入memcached
	 * 
	 * 
	 */
    function get_shelf_product_compare(){
    	$result= '
    	<div id="compare" class="compare" style="right: 0px; display: block; top: 220px; position: fixed; ">
    	   <div class="mt"><h5>商品比较</h5>
    	     <div class="extra" onclick="clearCompare()"></div></div>
    	     <div class="comPro">
    	     <ul class="mc" id="comProlist">
    	       <li id="check_1000403135">
    	         <a title="删除" class="close" onclick="reduceCompare(1000403135)"></a>CASIO卡西欧 男表 双显运动男士手表AQ-180WD-7B
    	       </li>
    	       <li id="check_154875">
    	         <a title="删除" class="close" onclick="reduceCompare(154875)"></a>卡西欧(Casio)ANALOGUE系列男表BEM-302L-7A
    	       </li>
    	     </ul>
    	     <div class="mb">
    	       <input type="button" value="对比所选商品" class="btn" id="compareImg" onclick="openCompare()">
    	     </div>
    	    </div>
    	  </div>
    	';
    	
    	return $result;
    }
	
	
}
