<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Shops {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Shops($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_shops_content(){
		$result='<div id="shopslist">
		
		           <div id="snav">您现在的位置：店铺</div>
		         
		           <div id="shops_context" class="clearfix"> <!-- begin shops_context -->
		              <div class="left"> <!-- begin left -->
		                <!-- 热门推荐 -->
		                <div class="hot_recommend clearfix"> <!-- begin recommend -->
		                 '.$this->get_hot_recommend().'  
						</div> <!-- end recommend -->
						
						
		              </div>  <!-- end left -->
		            
		              <div class="right"> <!-- begin right --> 
		             
					    <div class="month_ranking"> <!-- begin ranking -->
					    '.$this->get_month_ranking().'
		             	</div> <!-- end ranking -->  
	                 
					  </div> <!-- end right -->
			
			       </div> <!-- end shops_context -->
		             <!-- 新加入品牌 -->
						<div class="new_join clearfix"> <!-- begin join -->
		                  '.$this->get_new_join().' 
						</div> <!-- end join -->
						
		           
		</div>';
		return $result;
		
	}
	
	/*
	 * 热门推荐 
	 */
	function get_hot_recommend(){
	  $result='
	    <h2>热门推荐品牌</h2>
	    <ul>
	      <li><a href="#"><img src="/media/images/s04.jpg" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s04.jpg" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s3.png" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s4.jpg" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s3.png" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s4.jpg" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s3.png" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	      <li><a href="#"><img src="/media/images/s4.jpg" alt=""><span class="bg-title"></span><span class="title">六神旗舰店</span></a></li>
	   
	  
	    </ul>
	  
	  
	  
	  
	  ';
	  return $result;	
	}
	
	/*
	 * 新加入品牌
	 */
    function get_new_join(){
    	$result='

		   <h2>本月最新入驻品牌<b></b></h2>
            <div class="bd">
              <ul class="ul-new clearfix">
               <li><a href="#"><img src="/media/images/d01.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d02.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d04.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d03.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d01.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d03.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d04.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d02.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d01.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
               <li><a href="#"><img src="/media/images/d04.jpg" alt="联合利华"></a> <p class="title"><a href="#">全场6折起 惊喜多多</a></p></li>
                                                                                             
            </ul>
           </div>

	  ';
	  return $result;	
    }
    
    /*
	 * 月排行
	 */	 
	function get_month_ranking(){
		 $result='
	    <h2>月销售排行</h2>
	    <div class="bd-side">
            <div class="row">
             <ol>
               <li class="odd"><a href="#" ><span class="num high">1</span><span class="name">韩都衣舍</span><strong>439299</strong> 件</a></li>
               <li><a href="#"><span class="num high">2</span><span class="name">城市服务</span><strong>290668</strong> 件</a></li>
               <li class="odd"><a href="#"><span class="num high">3</span><span class="name">真维斯</span><strong>247085</strong> 件</a></li>
               <li><a href="#"><span class="num">4</span><span class="name">GAINREEL</span><strong>179430</strong> 件</a></li>
               <li class="odd"><a href=""><span class="num">5</span><span class="name">七匹狼</span><strong>165913</strong> 件</a></li>
               <li><a href="#" target="_blank"><span class="num">6</span><span class="name">美特斯邦威</span><strong>148685</strong> 件</a></li>
               <li class="odd"><a href="#"><span class="num">7</span><span class="name">李宁</span><strong>121141</strong> 件</a></li>
               <li><a href="#"><span class="num">8</span><span class="name">诺基亚</span><strong>117969</strong> 件</a></li>
               <li class="odd"><a href="#"><span class="num">9</span><span class="name">金士顿</span><strong>113493</strong> 件</a></li>
               <li><a href="#"><span class="num">10</span><span class="name">相宜本草</span><strong>109373</strong> 件</a></li>
              </ol>
            </div>
            <img src="/media/images/g01.png" style="width:232px" />
        </div>
	  ';
	  return $result;	
	
	
	} 
	 
	 	
}
