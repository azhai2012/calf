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
		           <div id="snav">您现在的位置：货架区</div>
		           <div id="shelf_context"> <!-- begin shelf_context -->
		              <div class="left clearfix"> <!-- begin left -->
		              '.$this->get_shelf_left_content().
		              '
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		              '.$this->get_shelf_right_content().
		                $this->get_shelf_right_filter(). 
		              '
     	              </div> <!-- end right -->
		           </div> <!-- end tuan_context -->
		    </div>';
	        
		return $result;
		
	}
	
	function get_shelf_left_content(){
		$result='<div class="cate-item">
			<ul>
			<li>
			  <a href="#" onclick=""><b class="icon blueLeft"></b>所有商品分类</a>
			  <ul>
			    <li>
			      <strong class="selected">品牌保健品</strong>
			      <ul>
			        <li> <a title="日常营养保健食品(1397)" href="#" onclick="">日常营养保健食品<b>(1397)</b></a></li>
                    <li> <a title="保健食品精选(432)" href="#" onclick="">保健食品精选<b>(432)</b></a></li>
                  </ul>
                 </li>
			  </ul>
			    <ul class="j_groupCon" style="height: auto; ">
					<li>
						<strong class="selected">功能营养推荐</strong>
						<ul class="j_groupClose" data-height="231" style="height: 168px; ">
													<li>
								<a title="维生素/矿物质(1497)" href="" onclick="">维生素/矿物质<b>(1497)</b></a>
							</li>
													<li>
								<a title="排毒/调理肠胃(1247)" href="" onclick="">排毒/调理肠胃<b>(1247)</b></a>
							</li>
													<li>
								<a title="美容养颜(1234)" href="" onclick="">美容养颜<b>(1234)</b></a>
							</li>
													<li>
								<a title="抗疲劳/提高免疫力(235)" href="" onclick="">抗疲劳/提高免疫力<b>(235)</b></a>
							</li>
													<li>
								<a title="抗衰老(151)" href="" onclick="">抗衰老<b>(151)</b></a>
							</li>
													<li>
								<a title="强健骨骼(31)" href="" onclick="">强健骨骼<b>(31)</b></a>
							</li>
													<li>
								<a title="护眼明目(16)" href="\" onclick="">护眼明目<b>(16)</b></a>
							</li>
													<li>
								<a title="改善睡眠(12)" href="" onclick="">改善睡眠<b>(12)</b></a>
							</li>
													<li>
								<a title="辅助降脂/降糖/降压(7)" href="#" onclick="">辅助降脂/降糖/降压<b>(7)</b></a>
							</li>
													<li>
								<a title="补脑益智(7)" href="#" onclick="">补脑益智<b>(7)</b></a>
							</li>
													<li>
								<a title="体重管理(2)" href="#" onclick="">体重管理<b>(2)</b></a>
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
	
	
}
