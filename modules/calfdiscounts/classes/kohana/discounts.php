<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Discounts {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Discounts($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_discounts_content(){	 
		    
		    $result='<div id="discounts_list" class="clearfix">
		           <div id="dnav">您现在的位置：折扣区</div>
		              <div class="list_detail clearfix" name="">
		               <ul>
		                	<li class="li_first li_line">
			               	   <span class="first">近日促销榜</span>
				               <span class="blue"><a href="#">近24小时促销榜</a></span>
				               <span class="blue"><a href="#">近7日促销榜</a></span>
				               <span class="blue"><a href="#">近30日促销榜</a></span>
			                </li>
			               <li class="li_first li_line">
			               	   <span class="first">即将结束促销</span>
				               <span class="blue"><a href="#">近24小时结束的促销商品</a></span>
				               <span class="blue"><a href="#">近3天结束的促销商品</a></span>
				            </li>
				           
					    </ul>
	                  </div>
		           <div id="discount_context"> <!-- begin discount_context -->
		              <div class="left"> <!-- begin left -->
		                <div class="dis_new_list clearfix">  <!-- begin newlist -->  
		               '.$this->get_new_list().'
		                </div> <!-- end new list -->
		                
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
					  
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end discount -->
		    </div>';
	        
		return $result;
		
	}
	
	function get_new_list(){
		// @todo  最新促销商品信息 
	    $result='
	         <h3>最新促销商品</h3>
	         <ul class="clearfix">
	             <li>
	               <a href="#"><img src="/media/images/p02.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	             <a href="#"><img src="/media/images/p03.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	              <a href="#"><img src="/media/images/p04.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	               <a href="#"><img src="/media/images/p05.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	               <a href="#"><img src="/media/images/p06.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	               <a href="#"><img src="/media/images/p07.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	               <a href="#"><img src="/media/images/p08.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	               <a href="#"><img src="/media/images/p09.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	              <a href="#"><img src="/media/images/p10.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
	             <li>
	              <a href="#"><img src="/media/images/p11.jpg" alt=""></a>
	             <span class="name">板蓝根冲剂 20g 广东白云山</span>
	             <span class="disinfo">买10盒积分10分,买20盒积30分</span>
	             <span class="price">单价：<b>2.5</b>元/盒</span>
	             <span class="enddate">截至日期：2011-09-01</span>
	             <input id="coll497221" type="button" class="btn-coll" value="购买">
	             <input id="coll497221" type="button" class="btn-coll" value="收藏">
	             <input id="coll497221" type="button" class="btn-coll" value="比价">
	            </li>
				
	           </li>
	         </ul>
	       
	    ';
	   	return $result; 
	}
    
	
}
