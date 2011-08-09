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
		 <script src="/media/js/jquery.jqzoom.js?1311674536" type="text/javascript" async=""></script>
		           <div id="pnav">您现在的位置：商品信息</div>
		         
		           <div id="proc_context"> <!-- begin proc_context -->
		              <div class="left"> <!-- begin left -->
		                <div class="side_title"><h2><span>购买本商品的顾客还买过</span></h2>	</div>  
		                <div class="side_content clearfix">
		              
		                    <ul >
		                        <li class="fore">
		                         <div class="p-img">
		                            <a href="http://www.360buy.com/product/232428.html">
		                              <img src="http://img13.360buyimg.com/n4/4523/ec7e7412-51b8-4b89-a8df-aa30052e32c6.jpg" width="100" height="100"
		                                  onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="Centrum善存佳维片新上市家庭装120片"></a>
		                         </div>
		                         <div class="rate"><strong>33%会买：</strong>Centrum善存佳维片新上市家庭装120片</div>
		                         <div class="p-price"><strong>
		                            <img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                 src="http://price.360buyimg.com/gp232428,1.png"></strong>
		                         </div></li>
		                         <li onclick="reClick(&quot;GR1&quot;,&quot;232428&quot;,&quot;232426#58.8&quot;,&quot;0&quot;)">
		                                <div class="p-img"><a href="http://www.360buy.com/product/232426.html">
		                                  <img src="http://img11.360buyimg.com/n4/2923/a5882aa4-1faf-4a1e-8045-a67edbe6add8.jpg" width="100" height="100" 
		                                  onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="Centrum善存佳维片1.33g*60片"></a>
		                                </div>
		                                <div class="rate"><strong>23%会买：</strong><a href="http://www.360buy.com/product/232426.html">Centrum善存佳维片1.33g*60片</a></div>
		                                <div class="p-price"><strong><img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                     src="http://price.360buyimg.com/gp232426,1.png"></strong>
		                                </div>
		                         </li>
		                         <li onclick="reClick(&quot;GR1&quot;,&quot;232428&quot;,&quot;175247#65&quot;,&quot;1&quot;)">
		                            <div class="p-img">
		                               <a href="http://www.360buy.com/product/175247.html">
		                                <img src="http://img12.360buyimg.com/n4/1660/c4bebaca-2bc8-4d4b-abc9-ebc6981a611c.jpg" width="100" height="100" 
		                                onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="养生堂天然维生素C咀嚼片90粒促销特惠装" 送养生堂挑战9日焕颜装=""></a>
		                                </div>
		                                <div class="rate"><strong>17%会买：</strong>
		                                   <a href="http://www.360buy.com/product/175247.html">养生堂天然维生素C咀嚼片90粒促销特惠装 送养生堂挑战9日焕颜装</a></div>
		                                <div class="p-price"><strong><img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                     src="http://price.360buyimg.com/gp175247,1.png"></strong></div>
		                         </li>
		                         <li class="fore">
		                         <div class="p-img">
		                            <a href="http://www.360buy.com/product/232428.html">
		                              <img src="http://img13.360buyimg.com/n4/4523/ec7e7412-51b8-4b89-a8df-aa30052e32c6.jpg" width="100" height="100"
		                                  onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="Centrum善存佳维片新上市家庭装120片"></a>
		                         </div>
		                         <div class="rate"><strong>33%会买：</strong>Centrum善存佳维片新上市家庭装120片</div>
		                         <div class="p-price"><strong>
		                            <img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                 src="http://price.360buyimg.com/gp232428,1.png"></strong>
		                         </div></li>
		                         <li onclick="reClick(&quot;GR1&quot;,&quot;232428&quot;,&quot;232426#58.8&quot;,&quot;0&quot;)">
		                                <div class="p-img"><a href="http://www.360buy.com/product/232426.html">
		                                  <img src="http://img11.360buyimg.com/n4/2923/a5882aa4-1faf-4a1e-8045-a67edbe6add8.jpg" width="100" height="100" 
		                                  onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="Centrum善存佳维片1.33g*60片"></a>
		                                </div>
		                                <div class="rate"><strong>23%会买：</strong><a href="http://www.360buy.com/product/232426.html">Centrum善存佳维片1.33g*60片</a></div>
		                                <div class="p-price"><strong><img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                     src="http://price.360buyimg.com/gp232426,1.png"></strong>
		                                </div>
		                         </li>
		                         <li onclick="reClick(&quot;GR1&quot;,&quot;232428&quot;,&quot;175247#65&quot;,&quot;1&quot;)">
		                            <div class="p-img">
		                               <a href="http://www.360buy.com/product/175247.html">
		                                <img src="http://img12.360buyimg.com/n4/1660/c4bebaca-2bc8-4d4b-abc9-ebc6981a611c.jpg" width="100" height="100" 
		                                onerror="this.src=\'http://www.360buy.com/images/none/none_150.gif\'" alt="养生堂天然维生素C咀嚼片90粒促销特惠装" 送养生堂挑战9日焕颜装=""></a>
		                                </div>
		                                <div class="rate"><strong>17%会买：</strong>
		                                   <a href="http://www.360buy.com/product/175247.html">养生堂天然维生素C咀嚼片90粒促销特惠装 送养生堂挑战9日焕颜装</a></div>
		                                <div class="p-price"><strong><img onerror="this.src=\'http://www.360buy.com/images/no1.gif\'" 
		                                     src="http://price.360buyimg.com/gp175247,1.png"></strong></div>
		                         </li>
		                      </ul>   
		                     
					    </div>
					    <div class="clearfix"></div>      
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                  <div class="h1_title">
	                       
	                         <h1>阿莫西林胶囊<span>功能主治：用于敏感菌（不产β-内酰胺酶菌株）</span></h1>
                          </div>
                          <div class="property"> <!-- begin property -->
		                     <div class="wrap"> <!-- begin wrap -->
		                        <ul class="meta">
					                <li id="StrPrice" class="detail-price"><span>价格：</span><strong id="J_StrPrice">10.70</strong>元</li>
                                    <li id="Strsec" class="detail-sepc"><span>规格：</span>10*10</li>
                                    <li id="Strsec" class="detail-sepc"><span>包装：</span>100</li>
                                    <li id="Strls" class="detail-ls"><span>批准文号：国药准字100203004</span></li>
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
    				    				  <input id="num" type="text" class="text" value="1">件
    				    			    </dd>
    				    			    <dd>
    				    				  <input type="button" id="submit"  value="提交" />
    				    				  <input type="button" id="collection"  value="收藏" />
    				    				  <input type="button" id="collection"  value="比价" />
    				    			    </dd>
    				    			    
    		                         </dl>
		     			           </div>
                                </div>
      	 	                   </div> <!-- end wrap -->
      	 	              </div>   <!-- end property -->  
                          <div class="gallery">  <!-- begin gallery -->
                           <!--itemPics-->
	                       <div class="pics clearfix" style="position:relative;"> 
					            <a href="/media/images/p01_big.jpg"  rel="gal1" id="jprocimg"  title="" > 
 					            <img src="/media/images/p01.jpg" 
 					             title="triumph"  style="border: 1px solid #666;"> 
					        </a> 
					    </div> 
						<br/> 
						  <br>
						  <ul id="thumblist" class="clearfix">
							<li><a class="zoomThumbActive" href="javascript:void(0);" rel="{gallery: \'gal1\', smallimage: \'/media/images/p01.jpg\',largeimage: \'/media/images/p01.jpg\'}"><img src="/media/images/p0101.jpg"></a></li>
							<li><a href="javascript:void(0);" rel="{gallery: \'gal1\', smallimage: \'/media/images/p01.jpg\',largeimage: \'/media/images/p01_big.jpg\'}" class=""><img src="/media/images/p0102.jpg"></a></li>
						  </ul>
				          <script type="text/javascript"> $(\'a#jprocimg\').jqzoom({title:false});</script>
                           <!--end of itemPics-->				        
	                       </div>
	                       <div class="shopkeeper"></div>
                          <div class="bottom clearfix">
		                  <div class="b_detail">
		                    <div class="b_detail_title"><h2><span> 详细功能 </span></h2></div>
		                    <div id="tcontent" class="productsInfo_tab" style="display: block; ">
阿莫西林胶囊(阿莫灵)正品保障并为您提供最全面的阿莫西林胶囊说明书(阿莫灵说明书)。
参与<a href="http://www.baiyjk.com/activities/" target="_blank" title="活动">正在进行的活动</a>更超值。阿莫西林胶囊的作用与功效(阿莫灵的作用与功效)如下：
<br>
<br>
<p>【通用名】<span>阿莫西林胶囊Amoxycillin Capsules </span></p>
<p>【医保类别】<span>医保甲类</span> </p>
<p>【产品简介】</p>阿莫西林胶囊由香港澳美制药厂生产，有效成分为阿莫西林，具有广谱抗菌、口服吸收快，毒副作用低等优点，对革兰氏阳性菌和阴性菌均具良好抗菌活性。阿莫灵已成为儿童及成人院外呼吸道感染、尿路感染等感染性疾病的常用药物之一。阿莫灵严格按国际GMP标准生产，原料采用独家的“青霉素聚合物限量内控技术”，绝少<a href="/health/20107/FI0000010616.html">过敏</a>性，外包装采用防潮、防漏粉、电话电码防伪新包装，确保一流品质。 
<p>【适用症】</p>阿莫西林胶囊适用于敏感菌所引起的各种感染，如呼吸道感染（<a href="/health/200912/FI0000009208.html">肺炎</a>、急慢性支气管炎、扁桃体炎、中耳炎等）；生殖泌尿道感染（淋病、尿道炎、膀胱炎、肾盂肾炎等）；皮肤软组织感染；伤寒及副伤寒等。 
<p>【性状】<span>阿莫西林胶囊为红色/黄色胶囊，内容物为白色或类白色易吸湿性粉末；每粒含阿莫西林0.25g。</span> </p>
<p>【规格】<span>24*0.25克</span> <br><p>






</p></p>
以上是阿莫西林胶囊的说明书(阿莫灵的说明书)，希望您能更加了解该产品。


			</div>
		                  </div>
		                  
		              </div>
	                       
	                   </div> <!-- end right -->
		             
		           </div> <!-- end proc_context -->
		           
		</div>';
		return $result;
		
	}
	
	
	
}
