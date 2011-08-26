<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Admin {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Admin($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_admin_content(){
		
		    $active = $this->_data['mod'];
		    $id = $this->_id;
		    $menus= array();
	}

   public function action_config(){
    	$this->pub_action_index();
    }
	
	/*
	 * 商品管理 
	 */
	public function action_prodoct(){
		$this->pub_action_index();
	}
	
	/*
	 * 品牌管理
	 */
    public function action_shops(){
		$this->pub_action_index();
	}
	
	 /*
	  * 积分管理
	  */
	 public function action_points($active){
			
		    $func='';
		    switch ($active) {
		    	
		    	case 'config':{
		    	 $navtitle="基本设置";
		    	 $func= $this->get_admin_config_list();
		    	 } break;
		    	case 'product':{
		    	 $navtitle="商品管理";
		    	 $func= $this->get_admin_product_list();
		    	} break;
		    	case 'shops':{
		    		$navtitle="店铺管理";
		    		$func= $this->get_admin_shops_list($id);
		    	} break;
		    	case 'mytmplate':{
		    		$navtitle="模板管理";
		    		$func= $this->get_admin_tmplate_list();
		    	} break;
		    	case 'coupons':{
		    		$navtitle="赠品管理";
		    	    $func= $this->get_admin_coupons_list();
		    	} break;
		    	case 'points':{
		    	    $navtitle="积分管理";
		    	    $func= $this->get_admin_points_list();
		    	} break;
		    	case 'suppers':{
		    		$navtitle="供货商管理";
		    		$func=  $this->get_admin_suppers_list();
		    	} break;
		    	case 'users':{
		    		$navtitle="用户管理";
		    		$func=  $this->get_admin_users_list();
		    	} break;
		    	case 'information':{
		    		$navtitle="账户信息";
		    	    $func=  $this->get_admin_information_list();
		    	} break;
		    	case 'sms':{
		    		$navtitle="站内消息";
		    	    $func = $this->get_admin_sms_list();
		    	} break;
		    	case 'question':{
		    		$navtitle="投诉建议";
		    	    $func = $this->get_admin_question_list();
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
		    
		    $current = ($active == 'config')?'current':'';
		    $result.= ' <li><a class="'.$current.'" href="/admin/config">选项</a></li>';

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
    	// TODO: 整个订单流程
		// @todo 订单的详细配送过程
		if (!empty($this->_id))
		$result='<div class="account clearfix">
		         <h2>我的详细订单</h2> 
		         <p class="o_t"><b>订单号：'.$this->_id.'</b>(配送完毕)</p>
		         <ul class="order_flow">
		           <li>2010-08-01 12:02:00 生成订单</li>
		           <li>2010-08-01 12:12:00 审核订单，并开始备货</li>
		           <li>2010-08-01 12:22:00 进入复核阶段</li>
		           <li>2010-08-01 12:42:00 进入理货阶段</li>
		           <li>2010-08-01 22:52:00 装车发往中专站</li>
		           <li>2010-08-01 02:52:00 中专站验货完毕</li>
		           <li>2010-08-01 06:52:00 配送员签收(王三 13544495806)，准备配送。</li>
		           <li>2010-08-01 08:52:00 客户签收送达。</li>
		         </ul>
		         
		         <p class="gifts_title"><b>赠品信息</b> <span style="float:right">* 请在验收商品时，核对赠品信息。</span></p>
		         <ul class="gifts_info">
		           <li>买达克宁10盒，送洗衣粉1袋。</li>
		           <li>买必奇10盒，送折叠椅子一把。</li>		           
		         </ul>
		        
		         <p class="o_l_t" ><b>详细订单信息</b></p>
		         
		         <ul class="o_list">
		            <li class="order_view_title">
		                <span class="list_name">商品名称</span>
		                <span class="list_batch">批号</span>
		                <span class="list_price">单价</span>
		                <span class="list_num">数量</span>
		                <span class="list_amount">金额</span>
		                <span class="list_time">下单时间</span>
		             </li>
		             <li class="order_view_list">
		                <span class="list_name">达克宁 10*10g 江西恒瑞药业，盒</span>
		                <span class="list_batch">201108</span>
		                <span class="list_price">12.60</span>
		                <span class="list_num">10</span>
		                <span class="list_amount">126.00</span>
		                <span class="list_time">2010-08-01</span>
		             </li>  
		              <li class="order_view_list">
		                <span class="list_name">必奇 10*10g 江西先声药业，盒</span>
		                <span class="list_batch">20111001</span>
		                <span class="list_price">10.60</span>
		                <span class="list_num">10</span>
		                <span class="list_amount">160.00</span>
		                <span class="list_time">2010-08-01</span>
		                
		             </li>
		              <div class="btm"></div>  
		            <li><div class="o_total">商品记录总数：<strong>2</strong>&nbsp条记录，商品金额合计：￥<b>286.00</b>元</div></li> 
		         </ul>
		           <div class="clearfix"></div>
		           <p class="o_l_o" ><b>附带信息：无</b></p>
		           
		        
		        </div> 
		        
		        
		         '; 
		else
		// @todo 我的订单列表 *注意 操作的功能
		$result='
		         <div class="account clearfix">
		         <h2>我的订单</h2>
		         <ul class="order_list clearfix">  
		             <li> 
		                 <select id="ordertype" class="sele" name="">
                            <option value="1">近一个月订单</option>
                            <option value="2">一个月前订单</option>
                         </select>
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
		             '.$this->get_order_sub_list().'
		            </ul>
		            <div class="btm"></div>
		        </div> 
		 ';
       return $result;		
	
	}
	
	function get_order_sub_list(){
		$result='<li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="/account/order/8642662094" class="list_order"name="orderid">8642662094</a>
		               <span class="list_name" title="">10</span>
		               <span class="list_way" title="有赠品">有</span>
		               <span class="list_total" id="list_total">￥98.00</span>
		               <span class="list_status">取消</span>
		               <span class="list_time">2011-07-23</span>
		               <span class="list_operation" id="list_operation">----</span> 
		              </li>
		              <li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="/account/order/8642662095" class="list_order"  name="orderid">8642662095</a>
		               <span class="list_name" title="">10</span>
		               <span class="list_way" title="有赠品">有</span>
		               <span class="list_total" id="list_total">￥98.00</span>
		               <span class="list_status">正在审核</span>
		               <span class="list_time">2011-07-23</span>
		               <span class="list_operation" id="list_operation"><a href="cal">取消订单</a></span> 
		              </li>
		               <li id="orderlist_normal" onmouseout="this.style.background=\'none\'" onmouseover="this.style.background=\'#f4f4f4\'" 
		               style="background-image: none; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		               <a href="#" class="list_control" title="展开" name="unfold">折叠</a> 
		               <a href="/account/order/8642662096" class="list_order"  name="orderid">8642662096</a>
		               <span class="list_name" title="">10</span>
		               <span class="list_way" title="有赠品">有</span>
		               <span class="list_total" id="list_total">￥98.00</span>
		               <span class="list_status">已送达</span>
		               <span class="list_time">2011-07-23</span>
		               <span class="list_operation" id="list_operation"><a href="#">收货反馈</a>|<a href="#">退换货</a></span> 
		              </li>';
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
	
	/*** 我的收藏 ***/
	// @todo 收藏内容
	function get_wishlist_list($id){
		
		$a0 = ($id=='a0')?'selected':'';
		$a1 = ($id=='a1')?'selected':'';
		$a2 = ($id=='a2')?'selected':'';
		$a3 = ($id=='a3')?'selected':'';
		
		$result = '
			   <div class="wishlist clearfix">
			            <h2>我的收藏</h2>       
			      <div class="favorites">
                   
                      <div class="favorites_sort" >
          
                       <span>显示</span>
 
                       <select name="sort" onchange="javascript:Account.SelectSort(this);">
                        <option '.$a0.' value="a0">显示全部商品</option>
                        <option '.$a1.' value="a1">仅显示降价商品</option>
                        <option '.$a2.' value="a2">仅新到货商品</option>
                        <option '.$a3.' value="a3">仅促销商品</option>
                       </select>   
      
                     </div>
                      <div class="clearfix"></div>
 
			          <ul>
			          <li class="f_title">
			            <span><input type="checkbox" id="allselect" name="allselect" onclick="javascript:Account.AllSelect();" />
			              <a href="javascript:void(0);" onclick="document.getElementById(\'allselect\').click()"  >全选</a></span>
			            <span class="totaldelete"><button name="totaldelete" onclick="javascript:GoDel();" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'">批量删除</button></span>
			            <span class="totalbuy"><button name="totalbuy" onclick="javascript:btnBuyClick(this,2);" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'" class="btnhover">批量购买</button></span>
			            
			          </li>'
			          .$this->get_wishlist_sub_list().
			          '
			          <li class="f_title">
			            <span><input type="checkbox" id="allselect" name="allselect" onclick="document.getElementById(\'allselect\').click()"  />  <a href="javascript:void(0);" onclick="document.getElementById(\'allselect\').click()"  >全选</a></span>
			            <span class="totaldelete"><button name="totaldelete" onclick="javascript:GoDel();" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'">批量删除</button></span>
			            <span class="totalbuy"><button name="totalbuy" onclick="javascript:btnBuyClick(this,2);" onmouseover="this.className=\'btnhover\'" onmouseout="this.className=\'\'" class="btnhover">批量购买</button></span>
			            
			          </li>
			        </ul>
			      
			  </div>
			';
		 
		return $result;
	}
	
	function get_wishlist_sub_list(){
		// @todo 得到收藏夹的商品列表
		$result='		 
		  <li class="product_list">
		  <span class="row01"><input type="checkbox" name="CheckAll" id="CheckAll" onclick="javascript:check_one_click(this,60113620);" value="60113620"></span>
		  <span class="row02"><a name="product_pic" title="乐力 儿童多维软胶糖150g" href="#" target="_blank"><img src="/media/images/60113620-1_t.jpg"></a></span>
		  <span class="row03">
		  <span class="name"><a name="product_name" href="#" title="乐力 儿童多维软胶糖150g" target="_blank">乐力 儿童多维软胶糖150g</a></span>
		  <span class="icon"><img src="images/promotion_icon/icon_102.png" title="促销" onerror="this.style.display=\'none\';"></span>
		  <span class="tags">生产企业：当当网</span>
		  <span>收藏人气：5</span>
		  <span class="discount_info">促销：</span>
		                               
		  </span>
		  <span class="row04">
		  <span class="discount">单价：<b>￥<span id="sale_price_60113620">85.00</span></b> </span>
		  <span class="row05">
		     <span><label>数量：</label><input name="s_num" id="s_num" value="1"/></span>
		     <a name="single_buy" href="#">
		     <img src="/media/images/newbtn_buy.gif" title="购买" border="0"></a>
		  </span>
		   <span class="row06"><a href="#">从收藏夹中删除</a></span>
		</li>
		<li class="product_list">
		  <span class="row01"><input type="checkbox" name="CheckAll" id="CheckAll" onclick="javascript:check_one_click(this,60113620);" value="60113620"></span>
		  <span class="row02"><a name="product_pic" title="乐力 儿童多维软胶糖150g" href="#" target="_blank"><img src="/media/images/60113620-1_t.jpg"></a></span>
		  <span class="row03">
		  <span class="name"><a name="product_name" href="#" title="乐力 儿童多维软胶糖150g" target="_blank">乐力 儿童多维软胶糖150g</a></span>
		  <span class="icon"><img src="images/promotion_icon/icon_102.png" title="促销" onerror="this.style.display=\'none\';"></span>
		  <span class="tags">生产企业：当当网</span>
		  <span>收藏人气：5</span>
		  <span class="discount_info">促销：</span>
		                               
		  </span>
		  <span class="row04">
		  <span class="discount">单价：<b>￥<span id="sale_price_60113620">85.00</span></b> </span>
		  <span class="row05">
		     <span><label>数量：</label><input name="s_num" id="s_num" value="1"/></span>
		     <a name="single_buy" href="#">
		     <img src="/media/images/newbtn_buy.gif" title="购买" border="0"></a>
		  </span>
		  <span class="row06"><a href="#">从收藏夹中删除</a></span>
		  
		</li>
		';
		return $result;
	}
	
    
	/*** 采购模板 ***/
	function get_mytmplate_list(){
		$result = '
				   <div class="mytmplate clearfix">
				      <h2>采购模板</h2>
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
