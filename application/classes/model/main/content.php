<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Content {
	
	function get_main_content(){
		
           $result='<div id="desktop" class="clearfix">'.$this->get_content_left().$this->get_content_right().'</div>';
	       $result.='<div id="hotprocduct" class="clearfix">'.$this->get_content_hot_products().'</div>';
	       $result.='<div id="newprocduct" class="clearfix">'.$this->get_content_new_products().'</div>';
	       $result.='<div id="hotshop" class="clearfix">'.$this->get_content_shop_products().'</div>';
	   return $result;
 	}
	
	
	function get_product_content($id){
		
		$result= Product::factory($id)->get_product_content();
		return $result;
		
	}
	
    function get_cart_content($id){
		
		$result= Cart::factory($id)->get_cart_content();
		return $result;
		
	}
	
	function get_content_left(){
		
		$result=' <div id="dleft" class="w720">
                   <ul id="slider" class="images">
				     <li style="list-style-type: none; list-style-position: initial; list-style-image: initial; position: absolute; top: 0px; left: 0px; z-index: 98; opacity: 1; "><img src="/media/images/banner4.jpg" width="720" height="290" title=""></li>
				     <li style="list-style-type: none; list-style-position: initial; list-style-image: initial; position: absolute; top: 0px; left: 0px; z-index: 98; opacity: 1; "><img src="/media/images/banner5.jpg" width="720" height="290" title=""></li>
	               </ul>
		        </div>';
	   return $result;
		
		
	}
	
	function get_content_right(){
		$result= '
		   <div id="dright" class="w250">
		     <div id="report" class="m" >
				    <div class="rt">
					    <ul class="info">
					       <li><a href="/info" id="ic" title="公告资讯">公告</a></li>
                           <li><a href="/login" id="login" title="登录" style="padding-left:10px;">登录</a></li>
                           <li><a href="/notice" id="notice" title="">新闻</a></li>
                        </ul>
				    </div>
				    <div class="rc">
                     <ul class="rclist">
				      <li><a href="#" target="_blank" title="海外手机挑选小贴士"><span>海外手机挑选小贴士</span></a></li> 
		               <li><a href="#" target="_blank" title="同一收货地址购买限制规定"><span>同一收货地址购买限制规定</span></a></li>
                       <li><a href="#" target="_blank" title="代购商品价格如何计算">代购商品价格如何计算？</a></li>
		              <li><a href="#" target="_blank" title="澳洲运费优惠咯！">澳洲运费优惠咯！</a></li>
		              <li><a href="#" target="_blank" title="易趣图片管家功能升级公告"><span>易趣图片管家功能升级公告</span></a></li>     
                      </ul>';
		
         $result.=$this->get_tuan();
         $result.='</div>
            </div>
		   </div>
		';
		
		return $result;
	}
	
	
	/* 首页 -- 团购信息 */
	function get_tuan(){
		$result =' <div id="tuan" class="clearfix">
                        <div class="t">今日团购</div>
                        <div class="c clearfix">
                          <div><a href="#"><img src="/media/images/t001.jpg" /></a></div>
                          <div class="tuanbtn"><a href="#">参团采购</a></div>
                        </div>
                      </div> ';
		return $result;
	}
	
	/* 首页 -- 新品上架 */
	function get_content_new_products(){
		$result= '
		  <h1 id="npt"><a href="#">新品上架</a></h1>
		  <div id="npc" class="clearfix" >
		     <div class="left">
		         <div id="lt"></div>
		         <div id="lc">
		            <h1><a href="#"><img src="/media/images/n01.jpg" class="nw240"/></a></h1>
		            <div><b>功能主治：</b></div>
		             <div>皮肤过敏 消化不良 感冒流感 止咳祛痰 退烧止痛药 咽喉肿痛</div>
		        </div>
		     </div>
		     <div class="right">
		          <div class="rc">
                    <div class="rc1 clearfix">
                      <h1>2011-07-01</h1>
		              <ul>
		              <li>
		               <a href="/product?id=223333223"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		               <span class="productName">碧生源常润茶</span>
		               <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		               <span class="productInfo">作用：美体瘦身</span>
		             </li>
		            <li>
		            <a href="#"><img src="/media/images/T1momdXiNsXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/T1cG9eXXxjXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/T17mKgXjViXXXXXXXX-373-262.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/T1WcyfXfxeXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            
		           </ul>
		           </div>
		           <div class="rc2 clearfix">
		            <h1>2011-06-31</h1>
		            <ul> 
		             <li>
		            <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		           </ul>
		          </div>
		        </div>
		     </div>
		    
		  </div>
		 
		';
		return $result;
	}
	
	 /* 首页 -- 热销商品 */
     function get_content_hot_products(){
		$result= '
		  <h1 id="hpt"><a href="#">热销商品</a></h1>
		  <div id="hpc" class="clearfix" >
		     <div class="left">
		      <div id="lt"></div>
		        <div id="lc">
		        <a href="#"><img src="/media/images/h01.jpg" class="nw240"/></a>
		        </div>
		     </div>
		      <div class="right">
		        <div class="rc">
                  <div class="rc1 clearfix">
                  <h1>化学制剂</h1>
		          <ul>
		            <li>
		             <a href="#"><img src="/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		             </li>
		            <li>
		            <a href="#"><img src="/media/images/T1momdXiNsXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		           </ul>
		           </div>
		           <div class="rc2 clearfix">
		            <h1>中成药</h1>
		            <ul> 
		             <li>
		            <a href="#"><img src="/media/images/T1cG9eXXxjXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/T17mKgXjViXXXXXXXX-373-262.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            </ul>
		           </div> 
		           <div class="rc3 clearfix">
		           <h1>外用药</h1>
		            <ul> 
		           <li>
		            <a href="#"><img src="/media/images/T1a.5dXbJrXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/T1VHGeXc0dXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            
		           </ul>
		          </div>
		            <div class="rc4 clearfix">
		            <h1>器械</h1>
		            <ul> 
		             <li>
		            <a href="#"><img src="/media/images/T1TE1dXcBrXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/T1WoqdXg4sXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		           </ul>
		          </div>
		        </div>
		    
		  </div>
		   <div class="ph">
		     <div class="pt">销售排行榜</div>
		     <div class="pc">
		       <ul>
		         <li class="first"><b title="1"></b><span>1</span></li>
		         <li class="secord"><b></b><span>2</span></li>
		         <li class="third"><b></b><span>3</span></li>
		         <li>4</li>
		         <li>5</li>
		         <li>6</li>
		         <li>7</li>
		         <li>8</li>
		         <li>9</li>
		         <li class="last">10</li>
		       </ul>
		     </div>
		     
		   </div>
		 </div>
		';
		return $result;
	}
	
	 /* 畅销品牌 */
	 function get_content_shop_products(){
		$result= ' 
		  <h1 id="spt"><a href="#">畅销品牌</a></h1>
		  <div id="spc" class="clearfix" >
		     <div class="left">
		        <div id="lt"></div>
		        <div id="lc">
		          <h1><a href="#"><img src="/media/images/n02.jpg" class="nw240"/></a></h1>
		          <div><b></b></div>
		          <div></div>
		        </div>
		     </div>
		     <div class="right">
		        <div class="rc">
                  <div class="rc1 clearfix">
                  <ul>
		            <li>
		             <a href="#" class="rclogoimg"><img src="/media/images/a01.jpg" alt=""></a>
		             <span class="productName">上海新亚</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/a0101.jpg" alt=""></a>
		              <ul class="pl">
		                 <li>碧生源常润茶11</li>
		                 <li>碧生源常润茶22</li>
		               </ul>
		            </li>
		           </ul>
		          </div>  
                  <div class="rc2 clearfix">
                    <ul>
		            <li>
		            <a href="#" class="rclogoimg"><img src="/media/images/a02.jpg" alt=""></a>
		             <span class="productName">海泰</span>
		            </li>
		            <li>
		            <a href="#"><img src="/media/images/a0201.jpg" alt=""></a>
		           
		              <ul class="pl">
		                 <li>碧生源常润茶11</li>
		                 <li>碧生源常润茶22</li>
		               </ul>
		            </li>
                  </ul>
		          </div>  
                  <div class="rc3 clearfix">
                    <ul>
		      
		            <li>
		            <a href="#" class="rclogoimg"><img src="/media/images/a03.jpg" alt=""></a>
		             <span class="productName">北京国联</span>
		             
		            </li>
		            
		             <li>
		            <a href="#"><img src="/media/images/a0301.jpg" alt=""></a>
		            
		              <ul class="pl">
		                 <li>碧生源常润茶11</li>
		                 <li>碧生源常润茶22</li>
		               </ul>
		            </li>
                  </ul>
		          </div>  
                  <div class="rc4 clearfix">
                    <ul>
		            
		            <li>
		            <a href="#" class="rclogoimg"><img src="/media/images/a04.jpg" alt=""></a>
		             <span class="productName">广西千珍</span>
		            </li>
		             <li>
		            <a href="#"><img src="/media/images/a0401.jpg" alt=""></a>
		            
		              <ul class="pl">
		                 <li>碧生源常润茶11</li>
		                 <li>碧生源常润茶22</li>
		               </ul>
     	             </li>
		           </ul>
		          </div>  
                  <div class="rc5 clearfix">
                    <ul>
		             <li>
		            <a href="#" class="rclogoimg"><img src="/media/images/a05.jpg" alt=""></a>
		             <span class="productName">贵州百灵</span>
		            </li>
		             <li>
		               <a href="#"><img src="/media/images/a0501.jpg" alt=""></a>
		             
		               <ul class="pl">
		                 <li>碧生源常润茶11</li>
		                 <li>碧生源常润茶22</li>
		               </ul>
		            </li>
		           </ul>
		          </div>
		        </div>
		    
		  </div>
				';
		
		
		return $result; 
	 }
	
	
}
