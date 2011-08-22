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
		                $this->get_shelf_left_filter(). 
		              '
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end tuan_context -->
		    </div>';
	        
		return $result;
		
	}
	
	function get_shelf_left_content(){
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
    
	function get_shelf_left_filter(){
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
