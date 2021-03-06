<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Header {
	
	private $_data = array();
	/**
	* 
	*/
	public static function factory($data = array()) {
	    // TODO :	    
	    return new Model_Main_Header($data);
	}
	
	function __construct($data = null) {
		$this->_data = $data;
	}
	
	
	function getmods($modname){
		$mods="";
		switch ($modname){
			case "top": $mods= $this->get_headtop();break;
			case "content":$mods= $this->get_hcontent();break;
			default:'';
		}
		return $mods;
	}
	
	
	function get_headtop(){
	   $result='<div id="myinfo" class="clearfix">
	             <div id="userinfo">您好，欢迎光临。<a href="/login">请登录</a></div> 
	             <ul>
	               <li>'.$this->get_carts().'</li>
	               <li><a href="/account">我的订单</a></li>
	               <li><a href="#">我的信息</a></li>
	               <li><a href="#">会员积分</a></li>
	               <li><a href="#">礼品卡</a></li>
	             </ul> 
	           </div>';
	   return $result;
	}
	
    function get_hcontent(){
	   $result='<div id="hcontent" class="clearfix">
	   <h1 class="logo" ><a href="#" >商城</a></h1>
	   <div id="find">
	     	     
	       <form id="headersearchform" action="http://search.eachnet.com/Search" method="post" target="_blank">
            <ol>
              <li>
                <input type="text" class="keyword_txt" id="headerkeywords" name="keyword" value="" _defval="看看正在流行什么..." _allowempty="no" style="">
              </li>
              <li>
                <input type="submit" class="search_btn" value="搜 索">
                <input type="hidden" name="ST" value="1">
                <input type="hidden" name="pavilionCode" value="cn">
              </li>
            </ol>
            </form>
          </div> 
         
        </div>
        ';
	   return $result;
	}
	
	public function get_menu($current,$menuname="home"){
		
	   $result ='';	
	   
	   $a1 = ($current=='main')?'current':'';
	   $a2 = ($current=='shops')?'current':'';
	   $a3 = ($current=='shelf')?'current':'';
	   $a4 = ($current=='tuan')?'current':'';
	   $a5 = ($current=='hots' ||$current=='hotsview')?'current':'';
	   $a6 = ($current=='discounts')?'current':'';
	   $a7 = ($current=='community')?'current':'';
	   
	   
	   switch ($menuname){
	     case "home":{
	      $result= '<div id="menu">
	              <ul>
	                <li class="'.$a1.'"><a href="/">首页</a></li>
	                <li class="'.$a2.'"><a href="/shops">店铺</a></li>
	                <li class="'.$a3.'"><a href="/shelf">商品区</a></li>
	                <li class="'.$a4.'"><a href="/tuan">团购</a></li>
	                <li class="'.$a5.'"><a href="/hots">展会</a></li>
	                <li class="'.$a6.'"><a href="/discounts">促销区</a></li>
	                <li class="'.$a7.'"><a href="/community">社区</a></li>
	                </ul>
	             
	               <div class="clearfix"></div>
	      </div>';

	      
	     } break;
	     default:'';
	   }
	   return $result;
	}

	// @todo 修改购物车内容
    function get_carts(){
	    $result= '<div class="carts">
	                <span class="c_icon"></span>
	                <span class="c_txt">购物车里有<strong class="cart_num">10000</strong>个商品</span> 
	                <span><a class="gotocart"  href="/cart">去结算</a></span>
	             </div>';	
	    return $result;
	}
	
	
	
}
