<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Account {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Account($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_account_content(){
		
		    $active =$this->_data['mod'];
		    $func='';
		    switch ($active) {
		    	case 'order':{
		    	 $navtitle="我的订单";
		    	 $func= $this->get_account_order_list();
		    	} break;
		    	case 'paymenthistory':{
		    	 $navtitle="支付历史";
		    	 $func= $this->get_paymenthistory_list();
		    	} break;
		    	case 'coupons':{
		    		$navtitle="礼品卡";
		    	    $func= $this->get_coupons_list();
		    	} break;
		    	case 'pointslist':{
		    	    $navtitle="我的积分";
		    	    $func= $this->get_pointslist_list();
		    	} break;
		    	case 'profileleft':{
		    		$navtitle="账户信息";
		    		$func=  $this->get_profileleft_list();
		    	} break;
		    	case 'repassword':{
		    		$navtitle="修改密码";
		    	    $func=  $this->get_repassword_list();
		    	} break;
		    	case 'mysms':{
		    		$navtitle="站内消息";
		    	    $func = $this->get_mysms_list();
		    	} break;
		    	case 'myquestion':{
		    		$navtitle="投诉建议";
		    	    $func = $this->get_myquestion_list();
		    	} break;
		    	default : $navtitle='';	 
		    } 
		    
		    $result='<div id="account_list">
		           <div id="anav">您现在的位置：'.$navtitle.'</div>
		           <div id="account_context"> <!-- begin account_context -->
		              <div class="left"> <!-- begin left -->
		              
		                <div class="side_content">
                       
                           <div class="sidel_title"><h3>订单管理</h3> </div>
                           	<ul class="content"> ';
		    
		    $current = ($active == 'order')?'current':'';
		    $result.= ' <li><a class="'.$current.'" href="/account/order">我的订单</a></li>';

		    $current = ($active == 'paymenthistory')?'current':'';
            $result.=' <li><a class="'.$current.'" name="paymenthistory" href="/account/paymenthistory" target="_parent">支付历史</a></li> ';
        
            $result.='</ul>
                       <div class="sidel_title"><h3>商品管理</h3> </div>
                     <ul class="content"> ';
            $current = ($active == 'wishlist')?'current':'';
            $result.='<li><a class="'.$current.'" name="wishlist" href="/account/wishlist" target="_parent">我的收藏</a></li> ';
            
            $current = ($active == 'mytmplate')?'current':'';
            $result.='<li><a class="'.$current.'" name="mytmplate" href="/account/mytmplate" target="_parent">采购模板</a></li> ';
            $result.='</ul>';
	        $result.=' <div class="sidel_title"><h3>账户管理</h3> </div>
           	               <ul class="content"> ';

            $current = ($active == 'coupons')?'current':'';
            $result.='<li><a class="'.$current.'" name="mycoupons" href="/account/coupons" target="_parent">礼品卡</a></li> ';

            $current = ($active == 'pointslist')?'current':'';
            $result.='<li><a class="'.$current.'" name="points_index_list" href="/account/pointslist" target="_parent">我的积分</a></li>';
            
            $current = ($active == 'profileleft')?'current':'';
            $result.='<li><a class="'.$current.'" name="profileleft" href="/account/profileleft" target="_parent">账户信息</a></li> ';

            $current = ($active == 'repassword')?'current':'';
            $result.='<li><a class="'.$current.'" name="mypassword" href="/account/repassword" target="_parent">修改密码</a></li>';
            
            $current = ($active == 'mysms')?'current':'';
            $result.='<li><a class="'.$current.'" name="mysms" href="/account/mysms" target="_parent">站内消息</a></li>';
            
            $current = ($active == 'myquestion')?'current':'';
            $result.='<li class="'.$current.'"><a name="myquestion" href="/account/myquestion" target="_parent">我的反馈</a></li>';

            $result.=' </ul>	                     
		                </div> 
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> ';
            $result.=$func; 
		    $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';
	        
		return $result;
		
	}
	
    function get_account_order_list(){
		
		$result='
		         <div class="account clearfix">
		         <h2>我的订单</h2>
		         <ul class="order_list">  
		             <li> 
		              
		             </li> 
		             <li class="order_title">
		                <span class="list_input"></span>
		                <span class="list_order">订单号</span>
		                <span class="list_name">品种数</span>
		                <span class="list_way">有无赠品</span>
		                <span class="list_total">订单总金额</span>
		                <span class="list_status">订单状态</span>
		                <span class="list_time"><a href="#" class="arrow_up">下单时间</a></span>
		                <span class="list_operation">操作</span>
		             </li>
		             <li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="#" class="list_order" target="_blank" name="orderid">8642662094</a>
		               <span class="list_name" title="">10</span>
		               <span class="list_way" title="有赠品">有</span>
		               <span class="list_total" id="list_total">￥98.00</span>
		               <span class="list_status">取消</span>
		               <span class="list_time">2011-07-23</span>
		               <span class="list_operation" id="list_operation">----</span> 
		              </li>
		            </ul>
		        </div> 
		 ';
       return $result;		
	
	}

	/*** 支付历史 ***/
	function get_paymenthistory_list(){
		$result = ' 
		   <div class="paymenthistory clearfix">
		      <h2>支付历史</h2>
		  </div>
		';
		   
		return $result;
	}
	
	/*** 礼品卡 ***/
	function get_coupons_list(){
		$result='
		   <div class="coupons clearfix">
		      <h2>我的礼品卡</h2>
		      <div class="giftcards_hint">
                   您当前共有 
                   <a href="#"><b>0</b></a> 张可用礼券，礼品卡帐户可用金额为
                   <span class="hot">￥0.00</span>
                   <a href="#">[查看明细]</a>，
                   未激活金额为
                   <span class="hot">￥0.00</span>
                   <a href="#">[查看明细]</a>。
              </div>
              <div class="cards">
                <p><span><label>卡号：</label></span><input name="cardid" id="cardid" value="" />
                <span><label>密码：</label></span><input type="password" name="cardpsw" id="cardpsw" value="" />
                <span></span><input type="button" name="cardactive" id="cardactive" value="激活" /></p>
              </div>                     
           </div>                         
		';
		return $result;
	}
	

	
	/*** 我的积分 ***/
	function get_pointslist_list(){
			
		$result='
	  	   <div class="pointslist clearfix">
	  	      <h2>我的积分</h2>
	          <div class="p_total"><span>您当前的积分：<b>0</b></span><span class="action"><a href="#">查看积分兑换活动</a></span> </div>	
	          <div class="p_list" >
	             <ul>
	              <li class="p_title">
		                <span class="list_date">日期</span>
		                <span class="list_gain">获得积分</span>
		                <span class="list_useed">已使用积分</span>
		                <span class="list_directions">详细说明</span>
		             </li>
		             <li id="p_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <span class="list_date" title="">2010-07-18</span>
		               <span class="list_gain" title="有赠品">1000</span>
		               <span class="list_useed" id="list_total">100</span>
		               <span class="list_directions"></span>
		              </li>
	             </ul>
	          </div>   
	       </div>
		';
		return $result;
		
	}
	
	/*** 账户信息 ***/
	function get_profileleft_list(){
		$result= '
		  <div class="profileleft clearfix">
		     <h2>我的信息</h2>
	      </div>
		';
		return $result;
		
	}
	
	/*** 修改密码 ***/
	function get_repassword_list(){
		$result= '
				  <div class="repassword clearfix">
				     <h2>修改密码</h2>
				     <ul>
                      <li class="item fore">
                        <span class="label"><em>*</em>旧密码：</span>
                        <span>
                        <input name="txtOldPwd" type="password" maxlength="16" id="txtOldPwd" class="text"
                             onblur="return validate.RegExpOne({ \'regexpress\': \'notempty\', \'id\': \'txtOldPwd\', \'message\': \'请输入旧密码!\'})">
                         </span>    
                         <span class="msg-error-01" id="txtOldPwdTip" style="display: none"></span>
                      </li>   
                      <li class="item">
                         <span class="label"><em>*</em>新密码：</span>
                         <span><input name="txtNewPwd" type="password" maxlength="16" id="txtNewPwd" class="text" 
                          onblur="validate.RegExpOne({ \'regexpress\': \'password\', \'id\': \'txtNewPwd\', \'message\': \'密码为由英文、数字及“_”、“-”组成的6-16位字符!\'})">
                         </span>
                         <span class="msg-error-01" id="txtNewPwdTip" style="display: none"></span>
                           
                      </li>
                      <li class="item">
                         <span class="label"><em>*</em>重复新密码：</span>
                         <span>
                           <input name="txtConfimPwd" type="password" maxlength="16" id="txtConfimPwd" class="text" 
                           onblur="return validate.RegConfirmPW({\'regexpress\': \'confirm\', \'id\': \'txtConfimPwd\', \'message\': \'两次密码输入的不一致!\'})">
                         </span>  
                         <span class="msg-error-01" id="txtConfimPwdTip" style="display: none"></span>
                      </li>
                      <li class="item">
                        <span class="label">&nbsp;</span>
                        <span>
                            <input type="submit" name="btnSubmit" value="修改密码" onclick="return validate.AllValidate();" id="btnSubmit" class="btn-pass">
                                <a class="btn btn-11" href="http://jd2008.360buy.com/user_home.aspx"><s></s>取消</a>
                            </span>
                    </li>
				   </ul>  
			      </div>
				';
		return $result;
	}
	
	/*** 站内信息 ***/
    function get_mysms_list(){
    	$result=' <div class="mysms clearfix">
				     <h2>站内信息</h2>
				     <ul class="info_list">   
		             <li class="info_title">
		                <span class="info_type">信息类别</span>
		                <span class="info_name">主题</span>
		                <span class="info_date">时间</span>
		                <span class="info_operation">操作</span>
		             </li>';
		for ($i=0;$i<10;$i++){             
		    $result.='<li id="info_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <span class="info_type" title="">订单</span>
		               <span class="info_name" title="主题"><a>主题'.$i.'</a></span>
		               <span class="info_date" title="">2011-08-01</span>
		               <span class="info_operation" id="info_operation"><a href="#">删除</a></span> 
		              </li>';
		}
		
		$result.='
		            </ul>		   
    	         </div>
    	';
    	return $result;
    }

    /*** 我的反馈 ***/
    function get_myquestion_list(){
    	$result='
    	        <div class="myquestion clearfix">
				     <h2>我的反馈</h2>
				     <ul class="question_title">
				       <li class="lst_title">
				         <span class="q_date">日期</span>
				         <span class="q_title">问题内容</span>
				         <span class="q_operation">操作</span>
				       </li>
				      <li id="info_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		                 <span class="q_date">2010-08-01</span>
				         <span class="q_title" style="text-align:left;"><a href="#">问题1</a></span>
				         <span class="q_operation"><a href="#">删除</a></span>
				       </li>
				     </ul>
    	         </div>
    	';
    	return $result;
    }
	
	
	
}
