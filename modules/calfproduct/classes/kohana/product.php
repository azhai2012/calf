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
		 <script src="/media/js/jquery.jqzoom.js" type="text/javascript" async=""></script>
		           <div id="pnav">您现在的位置：商品信息</div>
		         
		           <div id="proc_context"> <!-- begin proc_context -->
		              <div class="left"> <!-- begin left -->
		                '.$this->get_product_left_context().'   
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                '.$this->get_product_right_context().' 	                       
	                   </div> <!-- end right -->
		             
		           </div> <!-- end proc_context -->		           
		</div>';
		return $result;
		
	}
	
	function get_product_right_context(){
		// @todo 商品详细信息展示
		$result=' <div class="h1_title">
	                       
	                         <h1>阿莫西林胶囊<span>功能主治：用于敏感菌（不产β-内酰胺酶菌株）</span></h1>
                          </div>
                          <div class="property"> <!-- begin property -->
		                     <div class="wrap"> <!-- begin wrap -->
		                        <ul class="meta">
					                <li id="StrPrice" class="detail-price"><span>价格：</span><strong id="J_StrPrice">￥10.70</strong>元</li>
                                    <li id="Strsec" class="detail-sepc"><span>规格：</span>10*10</li>
                                    <li id="Strsec" class="detail-sepc"><span>包装：</span>100</li>
                                    <li id="Strls" class="detail-ls"><span>批准文号：国药准字100203004</span></li>
                                 
                                    
                                </ul>
                            	<div class="key">
		                           <div class="skin naked">
    		                         <dl class="amount clearfix">
    			                       <dt></dt>
    			                        <dd>
    				    				  <span>数量：</span><input id="num" type="text" class="text" value="1">
    				    			    </dd>
    				    			    <dd class="btn">
    				    				  <a href="#" class="b_s"><input type="button" id="submit"  value="放入购物车" /></a>
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
	                       <div class="shopkeeper">
                             
                             </div>
                               
                          <div class="bottom clearfix">
		                  <div class="b_detail">
                                   '.$this->get_product_discount_context().'  
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
		                  
		              </div><div class="clearfix"></div>'.$this->get_procduct_posts_context();
		
		return $result;
	}

        private function get_product_discount_context(){
            $result='
              <div class="p_discount clearfix">
                 <h3>优惠活动</h3>
                  <div class="dd clearfix" id="dd">
                    <h4><span></span>单品促销</h4>
                    <div class="ddc">买一送10</div> 
                  </div>
                  <div class="tabcon" id="group" style="display: block; ">
                    <h4><span></span>组合套餐</h4>
                    <div class="master"> <!-- master -->
                    <div class="p-img">
                      <a href="#" target="_blank">
                         <img src="/media/images/ed4b324b-b12b-46e3-bfca-1b594c22056d.jpg" 
                           onerror="this.src=\'/media/images/none_150.gif\'" width="100" height="100">
                      </a>
                     </div>
                     <div class="p-name">
                      <a href="#" target="_blank">GREEN A 绿A天然螺旋藻精片0.5g*12粒*50袋*1桶</a>
                     </div> 
                     <div class="icon-add"></div>
                  </div> <!-- end master -->
                  <div class="suits"> 
                    <ul class="list">
                      <li>
                        <div class="p-img">
                          <a href="#" target="_blank">
                           <img width="100" height="100" onerror="this.src=\'/media/images/none_150.gif\'" 
                             src="/media/images/8df94bb2-26b9-4c3c-85c8-4ca900d5b196.jpg" alt="养生堂天然维生素E软胶囊160粒">
                          </a>
                          </div>
                          <div class="p-name">
                            <a href="#" target="_blank">养生堂天然维生素E软胶囊160粒</a>
                          </div>
                          <div class="choose">
                            <input type="checkbox" value="153694" checked="true" onclick="buyGCombineBuy(this)">
                            <span class="p-price"><strong>￥76.00</strong></span>
                          </div>
                       </li>
                       <li>
                         <div class="p-img">
                           <a href="#" target="_blank">
                             <img width="100" height="100" onerror="this.src=\'/media/images/none_150.gif\'" 
                                 src="/media/images/8edd4f46-df24-43e9-969b-21b599ab4c1c.jpg" alt="胡世百康茶花花粉125g">
                           </a>
                         </div>
                         <div class="p-name">
                            <a href="#" target="_blank">胡世百康茶花花粉125g</a>
                         </div>
                         <div class="choose">
                            <input type="checkbox" value="361440" checked="true" onclick="buyGCombineBuy(this)">
                            <span class="p-price"><strong>￥29.00</strong></span>
                           </div>
                          </li>
                          </ul>
                       </div>
                       <div class="infos" onclick="">
                         <div class="p-name">
                           <a href="#">购买最佳组合</a>
                         </div>
                         <div class="pprice" id="buy-wmeprice" value="520.80">总价：<strong>￥520.80</strong></div>
                         <div class="p-market" id="buy-wmaprice" value="539.00">总定价：<del>￥539.00</del></div>
                         <div class="btns"><a id="buy-groupgoods" class="btn-buy" href="#">购买组合</a></div>
                       </div>
                    </div>
              </div>
              <div class="clearfix"></div>
            ';
            return $result;
        }


        /*
         * 讨论贴内容
         */
        public function get_ajax_return_product_post_one_context(){
            $result='
                  <ul class="list">
                     <li class="list_title" style="border-top:0;"><span class="r0">话题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
                
                    <li><span class="r0">商品不错</span><span class="r1">1/34</span><span class="r2">XXX药店</span><span class="r3">2011-08-02 3:00</span></li>
                    <li><span class="r0">商品不错，送货也快！</span><span class="r1">1/34</span><span class="r2">XXX药店</span><span class="r3">2011-02-01 14:34</span></li>
                  </ul>
                  <div class="p_status">
                     <div class="ps_left">有问题大家来讨论？[<a href="#">发表话题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                  </div>   
                    
                   ';
             return $result;
        }
        
        /*
         * 问答贴内容
         */
        public function get_ajax_return_product_post_two_context(){
            $result='
                <ul class="list">
                   <li class="list_title" style="border-top:0;"><span class="r0">主题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
                    <li><span class="r0">货送不急时，新货什么时候上</span><span class="r1">1/34</span><span class="r2">XXX药店</span><span class="r3">2011-08-02 3:00</span></li>
                    <li><span class="r0">有缺货！赠品没有收到</span><span class="r1">1/34</span><span class="r2">XXX药店</span><span class="r3">2011-02-01 14:34</span></li>
                </ul>
                <div class="p_status">
                  <div class="ps_left">有什么问题？[<a href="#">发表主题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                </div>
             ';
            return $result;
        }
        
	/*
         * 发帖显示内容
         */
        private function get_procduct_posts_context(){
            $result='
              <div class="posts">
                <ul class="tab">
                  <li class="post1 cur"><span class="t_l"></span><span class="t_r">讨论贴</span></li>
                  <li class="post2"><span class="t_l"></span><span class="t_r">问答贴</span></li>
                </ul>
                <div id="postsone" style="display:block">
                 正在加载，请等待...
                </div>
                <div id="poststwo" style="display:none">
                 正在加载，请等待...
                </div>
              </div>    
            ';
            return $result;
        }




        private function get_product_left_context(){
		$result= '<div class="side_title"><h2><span>购买本商品的顾客还买过</span></h2>	</div>  
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
					    <div class="clearfix"></div>   ';
			return $result;			
	}
	
}
