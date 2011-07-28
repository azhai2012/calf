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
		$result='<div id="account_list">
		           <div id="anav">您现在的位置：商品信息</div>
		           <div id="account_context"> <!-- begin account_context -->
		              <div class="left"> <!-- begin left -->
		              
		                <div class="side_content">
                        <div class="sidel_title"> 
                              <h3>功能列表</h3>
                              <a id="DocPersonal_set" name="setting" href="javascript:showDocSetPage()">设置</a> 
                          </div>
                           <div class="sidel_title"><h3>订单管理</h3> </div>
                           	<ul class="content"> 
				               <li><a class="current" href="#">我的订单</a></li>
                               <li><a name="paymenthistory" href="#" target="_parent">支付历史</a></li>
				            </ul>
	                       <div class="sidel_title"><h3>账户管理</h3> </div>
           	               <ul class="content"> 
				              <li><a class="" name="mycoupons" href="#" target="_parent">礼券/礼品卡</a></li>
                              <li><a class="" name="points_index_list" href="" target="_parent">我的积分</a></li>
                              <li><a class="" name="profileleft" href="#" target="_parent">账户信息</a></li>
                              <li><a class="" name="mypassword" href="#" target="_parent">修改密码</a></li>
                              <li><a class="" name="mysms" href="#" target="_parent">站内消息</a></li>
                              <li class=""><a name="myquestion" href="#" target="_parent">投诉建议</a></li>
				           </ul>
	                     
		                </div> 
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                
	                   </div> <!-- end right -->
		             
		           </div> <!-- end account_context -->
		</div>';
		return $result;
		
	}
	
	
	
}
