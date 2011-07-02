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
	   $result='<div>this is headtop</div>';
	   return $result;
	}
	
    function get_hcontent(){
	   $result='<div id="hcontent" class="clearfix">
	   <h1 class="logo" ><a href="#" >商城</a></h1>
	   <div id="find">
	      <ul>
	        <li class="on"><span class="first">商品</span></li>
	        <li><span>店铺</span></li>
	      </ul>
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
	                <li><a href="#">首页</a></li>
	                <li><a href="#">店铺</a></li>
	                <li><a href="#">热卖区</a></li>
	              </ul> 
	      </div>'.$this->get_carts();

	      
	     } break;
	     default:'';
	   }
	   return $result;
	}

    function get_carts(){
	    $result= '<div id="carts">购物车 </div>';	
	    return $result;
	}
	
	
	
}
