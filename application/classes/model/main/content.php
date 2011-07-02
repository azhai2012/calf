<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Content {
	
	function get_content(){
		
	   $result='<div id="desktop" class="clearfix">'.$this->get_content_left().$this->get_content_right().'</div>';
	   $result.='<div id="newprocduct" class="clearfix">'.$this->get_content_new_products().'</div>';
	   $result.='<div id="hotprocduct" class="clearfix">'.$this->get_content_hot_products().'</div>';
	   
	   
	   return $result;
	   
	}
	
	function get_content_left(){
		
		$result=' <div id="dleft" class="w720">
	             <ul>
		         <li id="tp01" class="">
		         <a href="#" target="_blank" title="每日特价">
		         <img src="/media/images/banner4.jpg" alt="每日特价" width="720" height="290" border="0"></a>
		         </li>
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
                           <li><a href="/login" id="login" title="登录">登录</a></li>
                           <li><a href="/notice" id="notice" title="">咨询</a></li>
                        </ul>
				    </div>
				    <div class="rc">
                     <ul class="rclist">
				      <li><a href="http://bbs.eachnet.com/item_1200000012_11130_0_1.html" target="_blank" title="海外手机挑选小贴士"><span>海外手机挑选小贴士</span></a></li> 
		               <li><a href="http://bbs.eachnet.com/item_1200000029_992_0_1.html?_fromid=homepage_clientguide01_n&amp;srcid=a2838_29" target="_blank" title="同一收货地址购买限制规定"><span>同一收货地址购买限制规定</span></a></li>
                       <li><a href="http://help8.eachnet.com/help/changjia/shoufei/feiyong_1.html?_fromid=homepage_clientguide03_n&amp;srcid=a2838_29" target="_blank" title="代购商品价格如何计算">代购商品价格如何计算？</a></li>
		              <li><a href="http://bbs.eachnet.com/item_1200000029_1479_0_1.html?_fromid=homepage_clientguide04_n&amp;srcid=a2838_29" target="_blank" title="澳洲运费优惠咯！">澳洲运费优惠咯！</a></li>
		              <li><a href="http://bbs.eachnet.com/forum_1200000026_0_0_0_0.html?_fromid=homepage_clientguide05_n&amp;srcid=a2838_29" target="_blank" title="易趣图片管家功能升级公告"><span>易趣图片管家功能升级公告</span></a></li>     
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
		             <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		             </li>
		            <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1momdXiNsXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="http://img03.taobaocdn.com/tps/i3/T1cG9eXXxjXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="http://img04.taobaocdn.com/tps/i4/T17mKgXjViXXXXXXXX-373-262.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="http://img03.taobaocdn.com/tps/i3/T1WcyfXfxeXXXXXXXX-120-120.jpg" alt=""></a>
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
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
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
		             <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1tpmeXetqXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		             </li>
		            <li>
		            <a href="#"><img src="http://img02.taobaocdn.com/tps/i2/T1momdXiNsXXXXXXXX-120-120.jpg" alt=""></a>
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
		            <a href="#"><img src="http://img03.taobaocdn.com/tps/i3/T1cG9eXXxjXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="http://img04.taobaocdn.com/tps/i4/T17mKgXjViXXXXXXXX-373-262.jpg" alt=""></a>
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
		            <a href="#"><img src="http://img04.taobaocdn.com/tps/i4/T1a.5dXbJrXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		            <li>
		            <a href="#"><img src="http://img03.taobaocdn.com/tps/i3/T1VHGeXc0dXXXXXXXX-120-120.jpg" alt=""></a>
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
		            <a href="#"><img src="http://img03.taobaocdn.com/tps/i3/T1TE1dXcBrXXXXXXXX-120-120.jpg" alt=""></a>
		             <span class="productName">碧生源常润茶</span>
		             <span class="productPrice"><ins>52.00</ins>/<del>59.80</del></span>
		             <span class="productInfo">作用：美体瘦身</span>
		            </li>
		             <li>
		            <a href="#"><img src="http://img04.taobaocdn.com/tps/i4/T1WoqdXg4sXXXXXXXX-120-120.jpg" alt=""></a>
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
		         <li>1</li>
		         <li>2</li>
		         <li>3</li>
		         <li>4</li>
		         <li>5</li>
		         <li>6</li>
		         <li>7</li>
		         <li>8</li>
		         <li>9</li>
		         <li>10</li>
		       </ul>
		     </div>
		     
		   </div>
		 
		';
		return $result;
	}
	
	
}
