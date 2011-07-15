<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Procduct {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Model_Main_Procduct($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	public function get_procduct_content(){
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
	                         <div class="booth pic s310">
	                            <a href="#" target="_blank">
	                              <img id="J_ImgBooth" src="http://img01.taobaocdn.com/imgextra/i1/T1syadXdhkXXcjwWMU_013608.jpg_310x310.jpg" data-haszoom="700">
	                              </a>
	                             <div class="zoom-icon" id="J_zoomIcon"></div>
	                         </div>
	                         <ul id="J_UlThumb" class="thumb clearfix">
							   <li>
					            <div class="pic s40">
						          <a href="#"><img src="http://img01.taobaocdn.com/imgextra/i1/T1syadXdhkXXcjwWMU_013608.jpg_40x40.jpg" haszoom="1"></a>
					            </div>
				               </li>
							   <li class="selected">
					             <div class="pic s40">
						           <a href="#"><img src="http://img02.taobaocdn.com/imgextra/i2/469190021/T2_sJqXg8MXXXXXXXX_!!469190021.jpg_40x40.jpg" haszoom="1"></a>
					             </div>
				               </li>
						     </ul>
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
