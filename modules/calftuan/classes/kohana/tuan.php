<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Tuan {

    private $_id;
    private $_data = array();

    public static function factory($id, array $data = NULL) {
        return new Kohana_Tuan($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
    }

    public function get_tuan_content() {

        $result = '<div id="account_list">
                 <script src="/media/js/jquery-corner.js" type="text/javascript" async=""></script>
	         <script>$("#deal-intro,").corner("10px");</script>
		           <div id="tuan_context" class="clearfix"> <!-- begin tuan_context -->
		              <div class="left"> <!-- begin left -->
		                 '.$this->get_tuan_left_content().'
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> '.$this->get_tuan_right_content().
                     '</div> <!-- end right -->
		           </div> <!-- end tuan_context -->
		    </div>';

        return $result;
    }
    
    private function get_tuan_right_content(){
        $result = $this->get_tuan_right_info_content().$this->get_tuan_right_begin_content().$this->get_tuan_right_help_content();
        return $result;
    }

    
    /*
     * 公告信息 
     * 
     */
    private function get_tuan_right_info_content(){
        $result='
            <div class="sbox-content">
              <div class="tip">
              <h2>公告板</h2>
              <ul class="bulletin">
                 <li><a target="_blank" href="#"><strong>8月27-29日白色iPhone 4抽奖结果</strong></a></li>
                 <li><a target="_blank" href="#"><strong>8月24-26日五张大闸蟹礼券结果</strong></a></li>
                 <li><a target="_blank" href="#"><strong>8月20-22日京东礼品卡抽奖结果</strong></a></li>
               </ul>
            </div>
          </div>   ';
        return $result;
    }

    /*
     * 发起团购
     */
    private function get_tuan_right_begin_content(){
        $result='  
           <div class="sbox-content">
           <div class="tip">
            <h2>申请团购</h2>
            <p class="text">申请发起团购，想团什么都行！<br>
               <a href="/account/invite.php">我要申请&gt;&gt;</a><br>
            </p>
          </div>
	  </div>';
        return $result;
    }
    
    /*
     * 团购答疑
     */
    private function get_tuan_right_help_content(){
        $result='
             <div class="sbox-content">
		<div class="deal-consult-tip">
			<h2>团购答疑</h2>
                  <div class="deal-consult-option">
                  <div class="deal-consult-option-btn-count">
                    <a href="/team/ask.php?id=6019">查看全部(<span>2666</span>)</a>
                  </div>
                  <div class="deal-consult-option-btn-post">
                    <a href="/team/ask.php?id=6019#post">我要提问</a>
                  </div><div class="clearfix"></div>
               </div>
	         <ul class="list">
		    <li class="liline">我团购的迪士尼书包已经付款了订单里怎么不显示<a href="/team/ask.php?id=6019#ask-entry-29151" target="_blank">查看详细&gt;&gt;</a></li>
		    <li class="liline">农村  参加团购  怎么发货？  邮寄？<a href="/team/ask.php?id=6019#ask-entry-29148" target="_blank">查看详细&gt;&gt;</a></li>
		    <li>团购服务电话没人接，客服人员请帮我查下团购订单号793953<a href="/team/ask.php?id=6019#ask-entry-29146" target="_blank">查看详细&gt;&gt;</a></li>
		</ul>
	     </div>
	</div>';
        return $result;
    }


    private function get_tuan_left_content(){
        $result='
            <div id="deal-intro" class="cf todydeal clearfix">
                   
                    <h1 class="indextitle">
                      <a class="deal-today-link" href="/team-6102.html" style="color:#333;" target="_blank">
                         <span style="color:#cc0000;font-weight:bold; font-family:arial,sans-serif">全国</span>今日团购：
                      </a>
                      <a style="color:#333;" href="/team-6102.html" target="_blank">0元抽奖！佳节到，运气旺，轻点鼠标，就有机会抢到万众瞩目的白色iPhone 4一部！只要参与，就能抽奖，快快分享给身边的朋友们吧！找便宜来京东，找巨便宜就来京东团购！     
                      </a>
                    </h1>
                    <div class="main">
                        <div class="deal-buy">
                            <div class="deal-price-tag"></div>
                            <p id="team-price-6102" class="deal-price">
                              <strong>94999.00</strong>
                              <span>
                                <a class="tuan_btn" target="_blank" href="/team-6102.html">
                                 
                                </a>
                              </span>
                            </p>
                        </div>
                        <table class="deal-discount">
                            <tbody><tr><th>原价</th><th>折扣</th><th>节省</th></tr>
                            <tr>
                                <td id="team-market_price-6102"><del>¥94999.00</del></td>
                                <td id="team-discount-6102">0.00</td>
                                <td id="team-save-6102">¥4999.00</td>
                            </tr>
                        </tbody></table>
                                                <div class="deal-box deal-timeleft deal-on" id="deal-timeleft6102" curtime="1315101015251" diff="137320000">
                            <h3>剩余时间</h3>
                            <div class="limitdate"><ul class="clearfix" id="counter6102"><li><span>1</span>天</li><li><span>14</span>小时</li><li><span>8</span>分钟</li></ul></div>
                        </div>
                           <div class="deal-box deal-status deal-status-open" id="deal-status-6102">
                            <p class="deal-buy-tip-top"><strong>188543</strong> 人已购买</p>
                            <p class="deal-buy-on" style="line-height:200%;">
                               <img src="/media/images/deal-buy-succ.gif"> 团购成功！<br>还可以继续购买</p>
                            <p class="deal-buy-tip-btm">0时16分达到最低团购人数：<strong>10</strong>人</p>
                          </div>
                                                                    </div>
                    <div class="side">
                        <div class="deal-buy-cover-img" id="team_images">
                          <img src="/media/images/13149637511434.jpg" width="440" height="280">
                        </div>
                        <div class="digest">
                            <ul>
                             <li>1、强大性能，迷人外观；</li>
                             <li>2、全新音乐触感；</li>
                             <li>3、高清大屏幕，多点触控；</li>
                             <li>4、超长续航时间。</li>
                            </ul> 
                         </div>
                    </div>
                </div>           

         ';
        
        return $result;
    }
    
    

}
