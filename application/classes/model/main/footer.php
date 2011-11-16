<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Footer {
	
	function get_footer(){
	   $result='
	      	<div class="footer">
		  <div class="col_1">&nbsp;
		  </div>
		  <div class="col_2">
			 <a href="huodongye.php?pn=zucefangsi"><h2>新手上路</h2></a>
			 <span class="blank5"></span>
			 <ul>
			  <li><a href="huodongye.php?pn=zucefangsi">网上购物步骤</a></li>
				<li><a href="huodongye.php?pn=goumailiucheng">账户及订单</a></li>
				<li><a href="huodongye.php?pn=changjianwenti">送货方式</a></li>
			 </ul>
			</div>
			<div class="col_3">
			<a href="huodongye.php?pn=zifufs"><h2>付款方式</h2></a>
			 <span class="blank5"></span>
			 <ul>
			  <li><a href="huodongye.php?pn=zifufs">支付方式</a></li>
				<li><a href="huodongye.php?pn=ruhetuihuan">如何退换</a></li>
			 </ul>
			</div>
			<div class="col_4">
			 <a href="huodongye.php?pn=biaozun"><h2>物流方式说明</h2></a>
			 <span class="blank5"></span>
			 <ul>
			 		<li><a href="huodongye.php?pn=biaozun">物流费用标准</a></li>
				<li><a href="huodongye.php?pn=zuyishixiang">签收注意事项</a></li>
			 </ul>
			</div>
			<div class="col_5">
			 <a href="huodongye.php?pn=tuihuanac"><h2>常见问题</h2></a>
			 <span class="blank5"></span>
			 <ul>
			  <li><a href="huodongye.php?pn=tuihuanac">退换货政策</a></li>
				<li><a href="huodongye.php?pn=fapiaofuwu">发票服务</a></li>
			 </ul>
			</div>
			<div class="col_6">
			 <a href="huodongye.php?pn=gonzuo"><h2>帮助中心</h2></a>
			 <span class="blank5"></span>
			 <ul>
			  <li><a href="huodongye.php?pn=gonzuo">工作时间</a></li>
			 </ul>
			</div>
			
		 </div>
		<div class="footerNav"><a href="index.php">首页</a>|<a href="guanyu.php?pn=guanyuwomen">公司简介</a>| <a href="guanyu.php?pn=ysishenming">隐私声明</a>|<a href="guanyu.php?pn=jiaruwomen">加入我们</a>|<a href="friend.php">友情链接</a>|<a href="complainting.php">投诉与建议</a></div>
		<div class="footerNav">Copyright ©2011 hhey.cn All Rights Reserved hhyy | ICP110146</div>
		';
	   return $result;
	}
}
