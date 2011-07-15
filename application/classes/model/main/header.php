<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Header {
	
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
	               <li><a href="#">我的订单</a></li>
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
	
	public function get_menu($menuname="home"){
	   $result ='';	
	   switch ($menuname){
	     case "home":{
	      $result= '<div id="menu">
	              <ul>
	                <li><a href="/">首页</a></li>
	                <li><a href="#">店铺</a></li>
	                <li><a href="#">热卖区</a></li>
	                 <li><a href="#">团购</a></li>
	                  <li><a href="#">社区</a></li>
	              </ul> 
	      </div>'.$this->get_carts();

	      
	     } break;
	     default:'';
	   }
	   return $result;
	}

    function get_carts(){
	    $result= '<div id="carts"><a href="/cart">购物车里有 <span>0</span> 个商品, 总金额：<b>0.00</b>元 </a></div>';	
	    return $result;
	}
	
	
	
}
