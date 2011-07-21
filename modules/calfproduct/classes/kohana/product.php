<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Product {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Product($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_product_content(){
		$result='<div id="proclist">
		           <div id="pnav">您现在的位置：商品信息</div>
		           <div id="proc_context"> <!-- begin proc_context -->
		              <div class="left"> <!-- begin left -->
		                <div class="side_title"><h2><span>购买本商品的顾客还买过</span></h2>	</div>  
		                <div class="side_content">
		                  <ul>
		                    <li><div class="pic">
						      <a href="#" target="_blank" title="【当当自营】小熊 酸奶机SNJ-520">
						      <img src="http://img33.ddimg.cn/78/10/60078723-1_x.jpg"></a>
					          </div></li>
                            <li><a href="#" target="_blank">【当当自营】小熊&nbsp;酸奶机SNJ-520</a></li>
		                  </ul>
		                </div> 
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                  <div class="h1_title">
	                       
	                         <h1>【当当自营】九阳豆浆机全钢无网系列DJ13B-A12D<span>制浆快，电机寿命长，智能温控，营养更丰富</span></h1>
                          </div>
                          <div class="property"> <!-- begin property -->
		                     <div class="wrap"> <!-- begin wrap -->
		                        <ul class="meta">
					                <li id="StrPrice" class="detail-price"><span>价格：</span><strong id="J_StrPrice">10.70</strong>元</li>
                                    <li><p class="toggler-holder">
                                         <a id="J_Toggler" class="toggler" title="显示所有信息" href="#"><i>更多信息</i></a>
                                        </p>
                                    </li>
                                </ul>
                            	<div class="key">
		                           <div class="skin naked">
    		                         <dl class="amount clearfix">
    			                       <dt>数&nbsp;&nbsp;&nbsp;&nbsp;量：</dt>
    			                        <dd>
    				    				  <input id="Amount" type="text" class="text" value="1">件
    				    			    </dd>
    		                         </dl>
		     			           </div>
                                </div>
      	 	                   </div> <!-- end wrap -->
      	 	              </div>   <!-- end property -->  
                          <div class="gallery">  <!-- begin gallery -->
                           <!--itemPics-->
	                       <div class="clearfix" style="position:relative;"> 
					            <a href="http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_big1.jpg"  rel="gal1" id="jprocimg"  title="" > 
 					            <img src="http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_small1.jpg" 
 					             title="triumph"  style="border: 1px solid #666;"> 
					        </a> 
					    </div> 
						<br/> 
						  <br>
						  <ul id="thumblist" class="clearfix">
							<li><a class="zoomThumbActive" href="javascript:void(0);" rel="{gallery: \'gal1\', smallimage: \'http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_small1.jpg\',largeimage: \'http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_big1.jpg\'}"><img src="http://www.mind-projects.it/projects/jqzoom/imgProd/thumbs/triumph_thumb1.jpg"></a></li>
							<li><a href="javascript:void(0);" rel="{gallery: \'gal1\', smallimage: \'http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_small2.jpg\',largeimage: \'http://www.mind-projects.it/projects/jqzoom/imgProd/triumph_big2.jpg\'}" class=""><img src="http://www.mind-projects.it/projects/jqzoom/imgProd/thumbs/triumph_thumb2.jpg"></a></li>
						  </ul>
				          <script type="text/javascript"> $(\'a#jprocimg\').jqzoom({title:false});</script>
                           <!--end of itemPics-->				        
	                       </div>
	                       <div class="shopkeeper"></div>
                          <div class="bottom clearfix">
		                  <div class="b_detail">
		                    <div class="b_detail_title"><h2><span> 详细功能 </span></h2></div>
		                    
		                  </div>
		                  
		              </div>
	                       
	                   </div> <!-- end right -->
		             
		           </div> <!-- end proc_context -->
		</div>';
		return $result;
		
	}
	
	
	
}
