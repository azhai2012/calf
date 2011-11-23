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
	               <li><a href="/account/profileleft">我的信息</a></li>
	               <li><a href="/account/pointlist">我的积分</a></li>
	               <li><a href="/account/coupons">我的礼品卡</a></li>
	             </ul> 
	           </div>';
	   return $result;
	}
	
    function get_hcontent(){
	   $result='<div id="hcontent" class="clearfix">
	   <h1 class="logo" ><a href="#" >商城</a></h1>
	   <div id="find">
	     	     
	       <form id="headersearchform" action="/search" method="post" target="_blank">
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
	                <li><a class="index index'.$a1.'" href="/"></a></li>
	                <li><a  class="shops shops'.$a2.'" href="/shops"></a></li>
	                <li><a class="shelf shelf'.$a3.'" href="/shelf"></a></li>
	                <li><a  class="tuan tuan'.$a4.'" href="/tuan"></a></li>
	                <li><a class="mhots mhots'.$a5.'" href="/hots"></a></li>
	                <li><a  class="discounts discounts'.$a6.'" href="/discounts"></a></li>
	                <li><a class="community community'.$a7.'" href="/community"></a></li>
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
	    $result= '<a class="gotocart"  href="/cart">
	                <div class="carts">
	                <span class="c_icon"></span>
	                <span class="c_txt">购物车里有<strong class="cart_num">10000</strong>个商品</span> 
	             </div></a>';	
	    return $result;
	}
	
	
	
}
