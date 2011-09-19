<?php  defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Community {

    private $_id;
    private $_data = array();

    public static function factory($id, array $data = NULL) {
        return new Kohana_Community($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
    }

    public function get_community_content() {

        $result = '<div id="community_list">
		           <div id="cmnav">您现在的位置：社区</div>
		           <div id="community_context"> <!-- begin community_context -->
		              <div class="left"> <!-- begin left -->
		              '.$this->get_community_left_content().'
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
                              '.$this->get_community_right_content().
                             '</div> <!-- end right -->
		           </div> <!-- end community_context -->
		    </div>';

        return $result;
    }

    /*
     * 讨论贴 
     */

    private function get_community_left_talk_content() {
        $result = '
                <div class="left-extra">
            <div class="m topic">
                <div class="mt">
                    <h2>
                        讨论帖</h2>
                </div>
                <div class="mc">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tbody align="center">
                            <tr>
                                <th width="400px" class="tl">
                                    主题 / 回复
                                </th>
                                <th width="100px">
                                    浏览
                                </th>
                                <th width="100px">
                                                                
                                    作者
                                </th>
                                <th width="100px">
                                    商品分类
                                </th>
                            </tr>
                            <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">幸亏看全了，不然SB了</a></div></td>
                               <td class="gray">24975 / 96</td>
                               <td class="gray"><div><a target="_blank" href="#">白话文</a></div></td>
                               <td class="blue"><a target="_blank" href="#">路由器</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">爵士钢琴，下辈子我还爱你</a></div></td>
                               <td class="gray">7602 / 35</td>
                               <td class="gray"><div><a target="_blank" href="#">konghongmin</a></div></td>
                               <td class="blue"><a target="_blank" href="#">音乐会</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">刚花99买了WR700N，太坑爹了！</a></div></td>
                               <td class="gray">7119 / 21</td><td class="gray"><div><a target="_blank" href="#">菲利克斯_</a></div></td>
                               <td class="blue"><a target="_blank" href="#">路由器</a></td>
                              </tr>
                              <tr>
                                <td class="ta-l"><div><a target="_blank" href="#">华缩的新一代败家卡终于出来了</a></div></td>
                                <td class="gray">5990 / 63</td>
                                <td class="gray"><div><a target="_blank" href="#">煤气站王德成</a></div></td>
                                <td class="blue"><a target="_blank" href="#">显卡</a></td>
                               </tr>
                               <tr>
                                 <td class="ta-l"><div><a target="_blank" href="#">京东，如此可以关了团购不丢人了</a></div></td>
                                 <td class="gray">5592 / 61</td>
                                 <td class="gray"><div><a target="_blank" href="#">lone178</a></div></td>
                                 <td class="blue"><a target="_blank" href="#">白酒/黄酒</a></td>
                               </tr>
                               <tr>
                                 <td class="ta-l"><div><a target="_blank" href="#">99元对华为的749元，应该有市场的</a></div></td>
                                 <td class="gray">5294 / 24</td>
                                 <td class="gray"><div><a target="_blank" href="#">SSF__</a></div></td>
                                 <td class="blue"><a target="_blank" href="#">路由器</a></td>
                               </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="m hots">
                <div class="mt">
                    <h2>
                        热门讨论商品</h2>
                </div>
                <div class="mc">
                    <ul>
                        <li class="fore"><div class="p-img"><a href="#6-5f78db864811.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/72d329ce-f1a9-48c8-adcf-7261bb6154d2.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/350caca7-aad8-4c6f-840a-66e9f6bd6d16.jpg"></a></div></li>
                    </ul>
                </div>
            </div>
        </div>
                ';

        return $result;
    }

    /*
     * 今日新贴
     */

    private function get_community_left_news_content() {
        $result = '
               <div class="left-extra">
            <div class="m topic">
                <div class="mt">
                    <h2>
                        今日新帖</h2>
                </div>
                <div class="mc">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tbody align="center">
                            <tr>
                                <th width="400px" class="tl">
                                    主题
                                </th>
                                <th width="100px">
                                    浏览/回复
                                </th>
                                <th width="100px">
                                    
                                    作者
                                </th>
                                <th width="100px">
                                    商品分类
                                </th>
                            </tr>
                            <tr>
                               <td class="ta-l">
                                 <div><a target="_blank" href="#">屏幕大，塑料感重，还IP4还是有差距的。</a></div>
                               </td>
                               <td class="gray">7661 / 27</td>
                               <td class="gray"><div><a target="_blank" href="#">买东西的阿斗</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td></tr>
                            <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">959元入手，刷机，完全去联通内置软件！</a></div></td>
                               <td class="gray">7257/41</td>
                               <td class="gray"><div><a target="_blank" href="#">flong99</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td>
                             </tr>
                             <tr><td class="ta-l">
                              <div><a target="_blank" href="#">比较全的蓝魔W12HD图片~和优缺点介绍，想买的来看看！</a></div></td>
                              <td class="gray">5955/24</td>
                              <td class="gray"><div><a target="_blank" href="#">小猪头的微笑</div></td>
                              <td class="blue"><a target="_blank" href="#">MID</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">4799元，看准时机入手，还送了包包。有图有效果欢迎欣赏</a></div></td>
                               <td class="gray">5869/32</td><td class="gray"><div><a target="_blank" href="#">jimoyuren12</a></div></td>
                               <td class="blue"><a target="_blank" href="#">单反相机</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">8月8号那天900块买到的朋友进来留个言啊</a></div></td>
                               <td class="gray">5552/52</td><td class="gray"><div><a target="_blank" href="#">只是微笑</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">晒一晒我买的乐加套件还是大红色婚床上的</a></div></td>
                               <td class="gray">5092/22</td>
                               <td class="gray"><div><a target="_blank" href="#">rongmengan</a></div></td>
                               <td class="blue"><a target="_blank" href="#">床品件套</a></td>
                             </tr>
                             <tr>
                                <td class="ta-l"><div><a target="_blank" href="#">昨晚下单，上午到手的，感觉很棒，大家也看看</a></div></td>
                                <td class="gray">4081/23</td>
                                <td class="gray"><div><a target="_blank" href="#">aiai呢</a></div></td>
                                <td class="blue"><a target="_blank" href="#">MID</a></td>
                             </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="m hots">
                <div class="mt">
                    <h2>
                        今日新贴商品</h2>
                </div>
                <div class="mc">
                    <ul>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/08a2394e-b7bb-4226-a9aa-18285dbb880e.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/f4c5203f-66bf-4feb-8830-ad71edd37d52.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/d7e2475b-c33e-4f6c-869a-53d0c3741ded.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/e57771fc-31dd-489b-a25a-fd489bbeeb37.jpg"></a></div></li>
                        <li><div class="p-img"><a href="#" target="_blank">
                        <img height="100" width="100" src="/media/images/67aeed65-0284-4dcb-b738-2fae1811de65.jpg"></a></div></li>
                    </ul>
                </div>
            </div>
        </div> 
            ';

        return $result;
    }

    /*
     * 问答贴
     *
     */
    private function get_community_left_question_content() {
        $result = '
              <div class="left-extra">
            <div class="m topic">
                <div class="mt">
                    <h2>
                        问答帖</h2>
                </div>
                <div class="mc">
                    <table cellspacing="0" cellpadding="0" border="0">
                          <tr>
                                <th width="400px" class="tl">
                                    主题
                                </th>
                                <th width="100px">
                                    浏览/回复
                                </th>
                                <th width="100px">
                                    
                                    作者
                                </th>
                                <th width="100px">
                                    商品分类
                                </th>
                            </tr>
                            <tr>
                               <td class="ta-l">
                                 <div><a target="_blank" href="#">屏幕大，塑料感重，还IP4还是有差距的。</a></div>
                               </td>
                               <td class="gray">7661 / 27</td>
                               <td class="gray"><div><a target="_blank" href="#">买东西的阿斗</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td></tr>
                            <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">959元入手，刷机，完全去联通内置软件！</a></div></td>
                               <td class="gray">7257/41</td>
                               <td class="gray"><div><a target="_blank" href="#">flong99</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td>
                             </tr>
                             <tr><td class="ta-l">
                              <div><a target="_blank" href="#">比较全的蓝魔W12HD图片~和优缺点介绍，想买的来看看！</a></div></td>
                              <td class="gray">5955/24</td>
                              <td class="gray"><div><a target="_blank" href="#">小猪头的微笑</div></td>
                              <td class="blue"><a target="_blank" href="#">MID</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">4799元，看准时机入手，还送了包包。有图有效果欢迎欣赏</a></div></td>
                               <td class="gray">5869/32</td><td class="gray"><div><a target="_blank" href="#">jimoyuren12</a></div></td>
                               <td class="blue"><a target="_blank" href="#">单反相机</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">8月8号那天900块买到的朋友进来留个言啊</a></div></td>
                               <td class="gray">5552/52</td><td class="gray"><div><a target="_blank" href="#">只是微笑</a></div></td>
                               <td class="blue"><a target="_blank" href="#">手机</a></td>
                             </tr>
                             <tr>
                               <td class="ta-l"><div><a target="_blank" href="#">晒一晒我买的乐加套件还是大红色婚床上的</a></div></td>
                               <td class="gray">5092/22</td>
                               <td class="gray"><div><a target="_blank" href="#">rongmengan</a></div></td>
                               <td class="blue"><a target="_blank" href="#">床品件套</a></td>
                             </tr>
                             <tr>
                                <td class="ta-l"><div><a target="_blank" href="#">昨晚下单，上午到手的，感觉很棒，大家也看看</a></div></td>
                                <td class="gray">4081/23</td>
                                <td class="gray"><div><a target="_blank" href="#">aiai呢</a></div></td>
                                <td class="blue"><a target="_blank" href="#">MID</a></td>
                             </tr>                </tbody>
                    </table>
                </div>
            </div>
            <div class="m hots">
                <div class="mt">
                    <h2>
                        热门问答商品</h2>
                </div>
                <div class="mc">
                    <ul>
                      <li><div class="p-img"><a href="#" target="_blank">
                      <img height="100" width="100" src="/media/images/dbb3b345-a227-4098-a809-44bd094bafd4.jpg"></a></div></li>
                      <li><div class="p-img"><a href="#" target="_blank">
                      <img height="100" width="100" src="/media/images/b8575336-bbef-4f6c-9b19-c3bbd1b0e223.jpg"></a></div></li>
                      <li><div class="p-img"><a href="#" target="_blank">
                      <img height="100" width="100" src="/media/images/53f83bc2-c8b5-4c7d-9598-5f4377cffcc1.jpg"></a></div></li>
                      <li><div class="p-img"><a href="#" target="_blank">
                      <img height="100" width="100" src="/media/images/f15f8ce5-1343-49a5-aba2-7c613e59911f.jpg"></a></div></li>
                      <li><div class="p-img"><a href="#" target="_blank">
                      <img height="100" width="100" src="/media/images/3ad28289-c3df-4c3c-8ead-3bc6fe56818c.jpg"></a></div></li>
                    </ul>
                </div>
            </div>
        </div>    
            ';
        return $result;
    }

    private function get_community_left_content() {
        $result = $this->get_community_left_news_content() .
                $this->get_community_left_question_content() .
                $this->get_community_left_talk_content();

        return $result;
    }

    private function get_community_right_new_content(){
        
        $result='
          <div class="right-extra">
            <div class="m rank">
                <div class="mt">
                    <h2>
                        新帖关注榜</h2>
                </div>
                <div class="mc">
                    <ul>
                        <li><span class="fore1 ">1</span><a href="http://club.360buy.com/bbsDetail/437744_19eb67d7-94bf-4b28-ba64-61035e18ad19_1.html" target="_blank">飞利浦2011新款pt860新鲜到货多图火速晒单</a></li><li><span class="fore2 ">2</span><a href="http://club.360buy.com/bbsDetail/437744_c5d8e08e-78a6-4d61-8d4d-99aa873351ed_1.html" target="_blank">飞利浦的剃须刀，网上购物我看行！</a></li><li><span class="fore3 ">3</span><a href="http://club.360buy.com/bbsDetail/419066_a11c9eea-adfd-4ae0-9d8b-d88862ac7635_1.html" target="_blank">三星 I9100 3G手机（黑色）开箱记</a></li><li><span>4</span><a href="http://club.360buy.com/bbsDetail/499012_e5f7b759-b6bd-4549-ac9c-bcb76cfad53c_1.html" target="_blank">见过性价比高的手机，没见过这么高的。牛</a></li><li><span>5</span><a href="http://club.360buy.com/bbsDetail/419066_2f654287-9253-42f4-be8c-1c3052ea965a_1.html" target="_blank">渴望HD I9100 IP4 对比</a></li><li><span>6</span><a href="http://club.360buy.com/bbsDetail/383280_e7e0a04c-1b9e-45a3-b2e7-0de57956b1a3_1.html" target="_blank">格力谦者KFR-26GW/（26550）FNAa-3 ，确实不错</a></li><li><span>7</span><a href="http://club.360buy.com/bbsDetail/437755_a99e9f86-589c-4b70-882f-81c001443f5c_1.html" target="_blank">送给LP的礼物~~~~小奢侈一把</a></li><li><span>8</span><a href="http://club.360buy.com/bbsDetail/134178_1e123826-aafe-44a2-bbcf-92e9463c2449_1.html" target="_blank">D90晒单拉，还是RMB 6939的时候买的~相当不错，第一张照片试机很好</a></li><li><span>9</span><a href="http://club.360buy.com/bbsDetail/1000614472_492fffe8-11b2-4229-840e-4e3f8a4169b4_1.html" target="_blank">听说爵士乐能让女孩更有韵味呢~~我家多多也想去可惜宠物不让进</a></li><li><span>10</span><a href="http://club.360buy.com/bbsDetail/435535_0f949d40-f0fe-4adf-93c1-614c2c5668b4_1.html" target="_blank">行货品质，无任何瑕疵，完美机器，配件全正品</a></li><li><span>11</span><a href="http://club.360buy.com/bbsDetail/332308_d5d28dc3-7a04-44d5-997e-0b0624a4cd39_1.html" target="_blank">8月8号那天900块买到的朋友进来留个言啊</a></li><li><span>12</span><a href="http://club.360buy.com/bbsDetail/405728_c6222a2e-7270-4bc3-8d67-6218d0acbb05_1.html" target="_blank">惠科（HKC）S9815H 18.5英寸宽屏液晶显示器</a></li><li><span>13</span><a href="http://club.360buy.com/bbsDetail/325276_e529bbd6-58e7-4fde-93d3-a0c6c76a0860_1.html" target="_blank">质量好，便宜，咱，</a></li><li><span>14</span><a href="http://club.360buy.com/bbsDetail/377194_d6e8d157-9d4c-4bca-ac70-b99edbe79187_1.html" target="_blank">名不虚传的ThinkPad，E420s让我备感满意。有图有文有真相。</a></li><li><span>15</span><a href="http://club.360buy.com/bbsDetail/421369_6f287f0a-d3f7-44cf-aab6-d805bc6d71f9_1.html" target="_blank">彪悍小Y，你值得拥有！</a></li><li><span>16</span><a href="http://club.360buy.com/bbsDetail/121707_adf9ad5b-3a19-4101-958b-99755f62d396_1.html" target="_blank">打造841n最强晒单 从旧到新排排坐。</a></li><li><span>17</span><a href="http://club.360buy.com/bbsDetail/499012_63ef4889-2d28-47c8-8d7c-1de18dec47f0_1.html" target="_blank">959元入手，刷机，完全去联通内置软件！</a></li>
                    </ul>
                </div>
            </div>
        </div>  
          ';
        return $result;
    }
    
    private function get_community_right_question_content(){
        $result='
          <div class="right-extra">
            <div class="m rank">
                <div class="mt">
                    <h2>
                        问答帖子关注榜</h2>
                </div>
                <div class="mc">
                    <ul>
                        <li><span class="fore1 ">1</span>
                        <a href="#" target="_blank">本本早到手了，不会装系统~哪位大侠可否教教小女子~</a></li>
                        <li><span class="fore2 ">2</span><a href="#" target="_blank">留个联系方式</a></li>
                        <li><span class="fore3 ">3</span><a href="#" target="_blank">开心麻花是加50就可以多买一张票么？</a></li>
                        <li><span>4</span><a href="#" target="_blank">此音箱音质如何，有用过的请回答，望复！</a></li>
                        <li><span>5</span><a href="#" target="_blank">是不是要至少买2个才能用啊？</a></li>
                        <li><span>6</span><a href="#" target="_blank">真的是国产神器！太NB了 我的神快把U880带走吧！我真的受不了</a></li>
                        <li><span>7</span><a href="#" target="_blank">希望能给解释一下</a></li>
                        <li><span>8</span><a href="#" target="_blank">请问有礼盒包装么？怎么没有说明啊</a></li>
                        <li><span>9</span><a href="#" target="_blank">79826899订单为什么不发货呢？</a></li>
                        <li><span>10</span><a href="#" target="_blank">这个和另外一个美素不一样么？</a></li>
                        <li><span>11</span><a href="#" target="_blank">请问我的赠送的京券什么时候到？</a></li>
                        <li><span>12</span><a href="#" target="_blank">请问我的赠送的京券什么时候到？</a></li>
                        <li><span>13</span><a href="#" target="_blank">这个机器加什么内存合适，谁加过了？</a></li>
                        <li><span>14</span><a href="#" target="_blank">这货是姜饼？这货明明是蜂巢啊！</a></li>
                        <li><span>15</span><a href="#" target="_blank">袖子问题</a></li>
                        <li><span>16</span><a href="#" target="_blank">郁闷的 团购，求围观</a></li>
                        <li><span>17</span><a href="#" target="_blank">哈七1-7精装版啥时候到货呢</a></li>
                    </ul>
                </div>
            </div>
        </div>    
        ';
        return $result;
    }
    
    private function get_community_right_talk_content(){
        
        $result='
          <div class="right-extra">
            <div class="m rank">
                <div class="mt">
                    <h2>
                        讨论帖子关注榜</h2>
                </div>
                <div class="mc">
                    <ul>
                        <li><span class="fore1 ">1</span><a href="http://club.360buy.com/bbsDetail/492263_ae3d0101-bac4-4525-aed2-cf1f6f74deac_1.html" target="_blank">骗人的夺宝岛。。伤的不轻。</a></li><li><span class="fore2 ">2</span><a href="http://club.360buy.com/bbsDetail/492263_926677f3-765f-4e82-851b-bf535b8513a4_1.html" target="_blank">被京东伤了</a></li><li><span class="fore3 ">3</span><a href="http://club.360buy.com/bbsDetail/1000611106_b18fe924-a119-4ff0-b15e-cf698c29973c_1.html" target="_blank">看到京东开始卖票了，选一句【陈奕迅】的歌送给初恋吧，或许TA不会看到，但一定听得到</a></li><li><span>4</span><a href="http://club.360buy.com/bbsDetail/1000698696_1f5bcbd4-69c7-4bea-aef7-d059dbb66a7f_1.html" target="_blank">【西城】要来北京了，大家喜欢westlife几年了，怎么喜欢上的？</a></li><li><span>5</span><a href="http://club.360buy.com/bbsDetail/505129_83a1c90b-63a8-4cf6-9208-22b331a57152_1.html" target="_blank">幸亏看全了，不然SB了</a></li><li><span>6</span><a href="http://club.360buy.com/bbsDetail/1000787319_6a9bc2c1-af06-434c-a45a-5e001a7098fe_1.html" target="_blank">大家都是怎么开始接触雅尼的呢？</a></li><li><span>7</span><a href="http://club.360buy.com/bbsDetail/499657_d2e17db5-3c77-44ad-ac9d-8878589b6622_1.html" target="_blank">破盘价,998!!!  只要998</a></li><li><span>8</span><a href="http://club.360buy.com/bbsDetail/505129_798a5914-df88-4f5c-977e-24c63071914f_1.html" target="_blank">【讨论】WR703N 1.0的优点与缺点</a></li><li><span>9</span><a href="http://club.360buy.com/bbsDetail/508723_6ee2c86b-a96c-4180-a24c-e264f1c8dac8_1.html" target="_blank">华缩的新一代败家卡终于出来了</a></li><li><span>10</span><a href="http://club.360buy.com/bbsDetail/1000826564_ef13ea5c-1b3f-4325-adfb-e36954516c42_1.html" target="_blank">这个东西千万不能买</a></li><li><span>11</span><a href="http://club.360buy.com/bbsDetail/1000734552_deac1b11-4a9a-4630-bbf0-fe87aa9b744c_1.html" target="_blank">京东，如此可以关了团购不丢人了</a></li><li><span>12</span><a href="http://club.360buy.com/bbsDetail/505129_22d88d59-4404-40d2-a48c-c1c700fc513c_1.html" target="_blank">【讨论】3G兼容性的由来与解决办法</a></li><li><span>13</span><a href="http://club.360buy.com/bbsDetail/495298_7297202a-0c4f-447f-83e4-10664ed28d09_1.html" target="_blank">有些坑上帝（内详）</a></li><li><span>14</span><a href="http://club.360buy.com/bbsDetail/426715_f59e04ce-eeed-4208-866f-9a100402df26_1.html" target="_blank">可怜的娃儿，都没人理</a></li><li><span>15</span><a href="http://club.360buy.com/bbsDetail/1000771870_e05fa314-1d4f-46f1-a0f6-0222b43f6cb0_1.html" target="_blank">爵士钢琴，下辈子我还爱你</a></li><li><span>16</span><a href="http://club.360buy.com/bbsDetail/1000611105_2ac22418-e62a-424c-8789-ac7aeb0a95fd_1.html" target="_blank">我的梦想是：我想和喜欢的他去看陈奕迅的演唱会。</a></li><li><span>17</span><a href="http://club.360buy.com/bbsDetail/499651_b70eb3f2-e2e3-4ea1-a2de-77bb16726ab2_1.html" target="_blank">索尼的没落，不是偶然的</a></li>
                    </ul>
                </div>
            </div>
        </div>    
        ';
        
        return $result;
        
    } 
    
        private function get_community_right_content() {
        $result = $this->get_community_right_new_content().
                $this->get_community_right_question_content() .
                $this->get_community_right_talk_content();

        return $result;
    }
    
    
}
