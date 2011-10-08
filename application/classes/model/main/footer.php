<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Main_Footer {
	
	function get_footer(){
	   $result='
	       <div id="footer"><ul class="ftnav nowrap">
              <li><a href="http://www.eachnet.com/abouteachnet.html" rel="nofollow" target="_blank">关于..</a></li>
    <li><a href="http://www.eachnet.com/licence.html" rel="nofollow" target="_blank">营业执照</a></li>
    <li><a href="http://help.eachnet.com/help/tns/securitycenter.htm" rel="nofollow" target="_blank">诚信与安全</a></li>
    <li><a href="http://help8.eachnet.com/help" rel="nofollow" target="_blank">帮助</a></li>
            <li><a href="http://www.eachnet.com/sitemap.html">网站地图</a></li>
      </ul>
  <ul class="copyright nowrap">
    <li>Copyright © 2010 版权所有</li>
    <li><a target="_blank" href="http://www.miibeian.gov.cn" rel="nofollow">ICP证号：沪B2-20090007</a></li>
    <li class="fc2"><a target="_blank" href="http://net.china.cn/" rel="nofollow">不良信息举报中心</a></li>
    <li class="fc3"><a target="_blank" href="http://net.china.cn/" rel="nofollow">上海网警网络110</a></li>
        </ul>
	   </div>';
	   return $result;
	}
}
