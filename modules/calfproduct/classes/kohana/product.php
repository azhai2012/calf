<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * 功能：商品详细信息，到购物车的重要环节。
 * 
 * 日期：2011-09-01
 * 
 * @author zhaibob
 * 
 * 数据表结构：
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

class Kohana_Product {

    private $_id;
    private $_data = array();

    public static function factory($id, array $data = NULL) {
        return new Kohana_Product($id, $data);
    }

    function __construct($id, array $data = NULL) {
        $this->_id = $id;
        $this->_data = $data;
    }

    /*
     * 商品信息内容
     */
    public function get_product_content() {
        $result = '<div id="proclist">
		 <script src="/media/js/jquery.jqzoom.js" type="text/javascript" async=""></script>
		           <div id="pnav">您现在的位置：商品信息 >>  阿莫西林胶囊 </div>
		         
		           <div id="proc_context"> <!-- begin proc_context -->
		              <div class="left"> <!-- begin left -->
		                ' . $this->get_product_left_context() . '   
		              </div>  <!-- end left -->
		              <div class="right"> <!-- begin right --> 
		                ' . $this->get_product_right_context() . ' 	                       
	                   </div> <!-- end right -->
		             
		           </div> <!-- end proc_context -->		           
		</div>';
        return $result;
    }

    /*
     * 右边栏显示商品区
     */
    function get_product_right_context() {
      
        // @todo 商品详细信息展示
       $array_data= array(
                   'id'=>'10039455',
                   'name'=>'阿莫西林胶囊',
                   'pname'=>'太灵',    
                   'uses'=>'功能主治：用于敏感菌（不产β-内酰胺酶菌株）',
                   'price'=>'10.70',
                   'sepc'=>'10*10',
                   'unit'=>'盒',
                   'group'=>'100',
                   'lsno'=>'国药准字100203004',
                   'big_img'=>'/media/images/big1.jpg,/media/images/big2.jpg,/media/images/big3.jpg,/media/images/big4.jpg',
                   'small_img'=>'/media/images/small1.jpg,/media/images/small2.jpg,/media/images/small3.jpg,/media/images/small4.jpg',
                  
         );                
        
          //图片显示
          $array_images_data = array(
                          array('big_image'=>'/media/images/big1.jpg','small_image'=>'/media/images/small1.jpg'),
                          array('big_image'=>'/media/images/big2.jpg','small_image'=>'/media/images/small2.jpg'),
                          array('big_image'=>'/media/images/big3.jpg','small_image'=>'/media/images/small3.jpg'),
                          array('big_image'=>'/media/images/big4.jpg','small_image'=>'/media/images/small4.jpg'),
              
          );
         
   
        
        $result = ' <div class="h1_title">
	                         <h1>'.$array_data['name'].'<span>功能主治：'.$array_data['uses'].'</span></h1>
                          </div>
                          <div class="property"> <!-- begin property -->
		                     <div class="wrap"> <!-- begin wrap -->
		                        <ul class="meta">
					                <li id="StrPrice" class="detail-price"><span>价格：</span><strong id="J_StrPrice">￥'.$array_data['price'].'</strong>元</li>
                                    <li id="Strpname" class="detail-pname"><span>通用名称：</span>'.$array_data['pname'].'</li>
                                    <li id="Strsec" class="detail-sepc"><span>规格：</span>'.$array_data['sepc'].'</li>
                                    <li id="Strunit" class="detail-unit"><span>单位：</span>'.$array_data['unit'].'</li>
                                    <li id="Strgroup" class="detail-group"><span>包装：</span>'.$array_data['group'].'</li>
                                    <li id="Strls" class="detail-ls"><span>批准文号：'.$array_data['lsno'].'</span></li>
                                 
                                    
                                </ul>
                            	<div class="key">
		                           <div class="skin naked">
    		                         <dl class="amount clearfix">
    			                       <dt></dt>
    			                        <dd>
    				    				  <span>数量：</span><input id="num" type="text" class="text" value="1">
    				    			    </dd>
    				    			    <dd class="btn">
    				    				  <a href="#" class="b_s"><input type="button" id="submit"  value="放入购物车" /></a>
    				    				  <input type="button" id="collection"  value="收藏" />
    				    			    </dd>
    				    			    
    		                         </dl>
		     			           </div>
                                </div>
      	 	                   </div> <!-- end wrap -->
      	 	              </div>   <!-- end property -->  
                              
                          <div class="gallery">  <!-- begin gallery -->
                           <!--itemPics-->
	                       <div class="pics clearfix" style="position:relative;"> 
					            <a href="'.$array_images_data[0]['big_image'].'"  rel="gal1" id="jprocimg"  title="" > 
 					            <img src="'.$array_images_data[0]['big_image'].'" 
 					             title="triumph"  style="border: 1px solid #666;width:300px; height:270px;"> 
					        </a> 
					    </div> 
						<br/> 
						  <br>
						  <ul id="thumblist" class="clearfix">
                          ';
        
                         foreach ($array_images_data as $key => $value) {
                             
                          $active = ($key===0)?'class="zoomThumbActive"':'';  
                          $result.='<li><a '.$active.' href="javascript:void(0);" 
                                   rel="{gallery: \'gal1\',
                                    smallimage: \''.$value['big_image'].'\',largeimage: \''.$value['big_image'].'\'}">
                                    <img src="'.$value['small_image'].'"></a></li>';
                                    
                        }
						
		
		
						$result.='</ul>
				          <script type="text/javascript"> $(\'a#jprocimg\').jqzoom({title:false});</script>
                           <!--end of itemPics-->				        
	                       </div>
	                       <div class="shopkeeper">
                             
                             </div>
                               
                          <div class="bottom clearfix">
		                  <div class="b_detail">
                                   ' . $this->get_product_discount_context() . '  
		                    <div class="b_detail_title"><h2><span> 详细功能 </span></h2>
                            ' . $this->get_product_info_content() . '
                            </div>
		                    
		                  </div>
		                  
		              </div><div class="clearfix"></div>' . $this->get_procduct_posts_context();

        return $result;
    }

    /*
     * 读取商品的详细信息
     * 
     * 说明：读取数据库HTML格式文件呈现。
     */

    private function get_product_info_content() {
        $result = '
            <div id="tcontent" class="productsInfo_tab" style="display: block; ">
                   <p>阿莫西林胶囊(阿莫灵)正品保障并为您提供最全面的阿莫西林胶囊说明书(阿莫灵说明书)。
                      参与<a href="#" target="_blank" title="活动">正在进行的活动</a>更超值。阿莫西林胶囊的作用与功效(阿莫灵的作用与功效)如下：
                   </p>
                    <p>【通用名】<span>阿莫西林胶囊Amoxycillin Capsules </span></p>
                    <p>【医保类别】<span>医保甲类</span> </p>
                    <p>【产品简介】</p>阿莫西林胶囊由香港澳美制药厂生产，有效成分为阿莫西林，具有广谱抗菌、口服吸收快，毒副作用低等优点，对革兰氏阳性菌和阴性菌均具良好抗菌活性。阿莫灵已成为儿童及成人院外呼吸道感染、尿路感染等感染性疾病的常用药物之一。阿莫灵严格按国际GMP标准生产，原料采用独家的“青霉素聚合物限量内控技术”，绝少<a href="/health/20107/FI0000010616.html">过敏</a>性，外包装采用防潮、防漏粉、电话电码防伪新包装，确保一流品质。 
                    <p>【适用症】</p>阿莫西林胶囊适用于敏感菌所引起的各种感染，如呼吸道感染（<a href="/health/200912/FI0000009208.html">肺炎</a>、急慢性支气管炎、扁桃体炎、中耳炎等）；生殖泌尿道感染（淋病、尿道炎、膀胱炎、肾盂肾炎等）；皮肤软组织感染；伤寒及副伤寒等。 
                    <p>【性状】<span>阿莫西林胶囊为红色/黄色胶囊，内容物为白色或类白色易吸湿性粉末；每粒含阿莫西林0.25g。</span> </p>
                    <p>【规格】<span>24*0.25克</span> 以上是阿莫西林胶囊的说明书(阿莫灵的说明书)，希望您能更加了解该产品。</p>
             </div>
            ';
        return $result;
    }

    /*
     * 显示促销信息
     * 
     * 促销信包括：单品促销和组合套餐
     * 
     */

    private function get_product_discount_context() {

        $array_data = array(
            'single' => array('content' => '买一赠送10'),
            'compose' => array(
                'master' => array('id' => '153691', 'url' => '#', 'type' => 'master', 'name' => 'GREEN A 绿A天然螺旋藻精片0.5g*12粒*50袋*1桶绿A天然螺', 'price' => '103.00'
                    , 'img' => '/media/images/ed4b324b-b12b-46e3-bfca-1b594c22056d.jpg'),
                'other' => array(
                    array('id' => '153694', 'url' => '#', 'type' => 'other', 'name' => '养生堂天然维生素E软胶囊160粒', 'price' => '83.00'
                        , 'img' => '/media/images/8df94bb2-26b9-4c3c-85c8-4ca900d5b196.jpg'),
                    array('id' => '361440', 'url' => '#', 'type' => 'other', 'name' => '胡世百康茶花花粉125g', 'price' => '23.00'
                        , 'img' => '/media/images/8df94bb2-26b9-4c3c-85c8-4ca900d5b196.jpg')
                )
            )
        );

        $result = '';

        $single = $array_data['single'];
        $single_bool = (!empty($single['content']));

        $compose = $array_data['compose'];
        $compose_bool = (!empty($compose['other']));

        //单品促销
        if ($single_bool)
            $result.=' 
                   <div class="p_discount clearfix">
                   <h3>优惠活动</h3>
                   <div class="dd clearfix" id="dd">
                      <h5><span></span>单品促销</h5>
                      <div class="ddc">' . $single['content'] . '</div> 
                   </div>';
        else
        if ($compose_bool) {
            $result.=' 
                   <div class="p_discount clearfix">
                   <h3>优惠活动</h3>';
        }

        //显示组合套餐 
        if ($compose_bool) {
            $result.= '<div class="tabcon" id="group" style="display: block; ">
                    <h5><span></span>组合套餐</h5>
                    <div class="master"> <!-- master -->
                    <div class="p-img">
                      <a href="#" target="_blank">
                         <img src="' . $compose['master']['img'] . '" 
                           onerror="this.src=\'/media/images/none_150.gif\'" width="100" height="100">
                      </a>
                     </div>
                     <div class="p-name">
                      <a href="' . $compose['master']['url'] . '" target="_blank">' . $compose['master']['name'] . '</a>
                     </div> 
                     <div class="icon-add"></div>
                  </div> <!-- end master -->
                  <div class="suits"> 
                    <ul class="list">';

            foreach ($compose['other'] as $key => $value) {
                $result.=' <li>
                             <div class="p-img">
                            <a href="' . $value['url'] . '" target="_blank">
                           <img width="100" height="100" onerror="this.src=\'/media/images/none_150.gif\'" 
                             src="' . $value['img'] . '" alt="' . $value['name'] . '">
                          </a>
                          </div>
                          <div class="p-name">
                            <a href="' . $value['url'] . '" target="_blank">' . $value['name'] . '</a>
                          </div>
                          <div class="choose">
                            <input type="checkbox" value="' . $value['id'] . '" checked="true" onclick="buyGCombineBuy(this)">
                            <span class="p-price"><strong>' . $value['price'] . '</strong></span>
                          </div>
                       </li>';
            }
            $result.='
                    </ul>
                       </div>
                       <div class="infos" onclick="">
                         <div class="p-name">
                           <a href="#">购买最佳组合</a>
                         </div>
                         <div class="pprice" id="buy-wmeprice" value="520.80">总价：<strong>￥520.80</strong></div>
                         <div class="p-market" id="buy-wmaprice" value="539.00">总定价：<del>￥539.00</del></div>
                         <div class="p-save" id="buy-wmaprice" value="18.20">节省：￥18.20</div>
                         <div class="btns"><a id="buy-groupgoods" class="btn-buy" href="#">购买组合</a></div>
                       </div>
                      </div>
                    
                   ';
        }

        //判断所有的促销是否存在
        if ($compose_bool || $single_bool) {
            $result.='</div>
                    <div class="clearfix"></div>';
        }

        return $result;
    }

    /*
     * 讨论贴内容
     */

    public function get_ajax_return_product_post_one_context() {
        
        $array_data=array(
            array('title'=>'商品不错','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'商品不错，送货也快！','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'商品不错','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'商品不错，送货也快！','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
        );
        
        $result = '
                  <ul class="list">
                     <li class="list_title" style="border-top:0;"><span class="r0">话题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
                ';
         foreach ($array_data as $key => $value) {
            $result .='<li><span class="r0">'.$value['title'].'</span><span class="r1">'.$value['report'].'/'.$value['view'].'</span><span class="r2">'.$value['author'].'</span><span class="r3">'.$value['create_at'].'</span></li>';
         }
            $result .=' </ul>
                  <div class="p_status">
                     <div class="ps_left">有问题大家来讨论？[<a href="#">发表话题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                  </div>   
                    
                   ';
        return $result;
    }

    /*
     * 问答贴内容
     */

    public function get_ajax_return_product_post_two_context() {
        
         $array_data=array(
            array('title'=>'货送不急时，新货什么时候上','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'有缺货！赠品没有收到','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'货送不急时，新货什么时候上','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
            array('title'=>'有缺货！赠品没有收到','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
        );
        
        $result = '
                <ul class="list">
                   <li class="list_title" style="border-top:0;"><span class="r0">主题</span><span class="r1">回复/浏览</span><span class="r2">作者</span><span class="r3">发表时间</span></li>
               ';
        foreach ($array_data as $key => $value) {
            $result .='<li><span class="r0">'.$value['title'].'</span><span class="r1">'.$value['report'].'/'.$value['view'].'</span>
                       <span class="r2">'.$value['author'].'</span><span class="r3">'.$value['create_at'].'</span></li>';
         }
         $result .='
                 </ul>
                <div class="p_status">
                  <div class="ps_left">有什么问题？[<a href="#">发表主题</a>]</div><div class="ps_right">共有2条记录，<a href="#">浏览全部信息</a></div>
                </div>
             ';
        return $result;
    }

    /*
     * 发帖显示内容
     */

    private function get_procduct_posts_context() {
        $result = '
              <div class="posts">
                <ul class="tab">
                  <li class="post1 cur"><span class="t_l"></span><span class="t_r">讨论贴</span></li>
                  <li class="post2"><span class="t_l"></span><span class="t_r">问答贴</span></li>
                </ul>
                <div id="postsone" style="display:block">
                 正在加载，请等待...
                </div>
                <div id="poststwo" style="display:none">
                 正在加载，请等待...
                </div>
              </div>    
            ';
        return $result;
    }

    /*
     * 页面商品左边内容
     * 
     * 作用：显示关联商品的信息
     */

    private function get_product_left_context() {

        $array_data = array(
            array('url' => '#', 'img' => '/media/images/ec7e7412-51b8-4b89-a8df-aa30052e32c6.jpg', 'rate_strong' => '33%', 'rate_content' => 'Centrum善存佳维片新上市家庭装120片', 'price' => '108.00'),
            array('url' => '#', 'img' => '/media/images/a5882aa4-1faf-4a1e-8045-a67edbe6add8.jpg', 'rate_strong' => '22%', 'rate_content' => 'Centrum善存佳维片1.33g*60片', 'price' => '108.00'),
            array('url' => '#', 'img' => '/media/images/c4bebaca-2bc8-4d4b-abc9-ebc6981a611c.jpg', 'rate_strong' => '21%', 'rate_content' => '养生堂天然维生素C咀嚼片90粒促销特惠装', 'price' => '108.00'),
        );

        $result = '<div class="side_title"><h2><span>购买本商品的顾客还买过</span></h2>	</div>  
		             <div class="side_content clearfix">
		              <ul >';
        foreach ($array_data as $key => $value) {

            $result .= '<li class="fore">
		                   <div class="p-img">
		                   <a href="#">
		                       <img src="' . $value['img'] . '" width="100" height="100"
		                                  onerror="this.src=\'/media/images/none_150.gif\'" alt="' . $value['rate_content'] . '"></a>
		                         </div>
		                         <div class="rate"><strong>' . $value['rate_strong'] . '会买：</strong>' . $value['rate_content'] . '</div>
		                         <div class="p-price"><strong>' . $value['price'] . '</strong>
		                         </div>
                         </li>';
        }
        $result .= ' </ul>   
					    </div>
					    <div class="clearfix"></div>   ';
        return $result;
    }

}
