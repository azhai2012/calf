<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 功能：公共类库（memcache , session ） 
 * 
 * 
 * 
 */

class Kohana_Msc {
	
	protected $session;

	
	protected $memcache;
	
	private  $product_compare='product_compare';
	
	private  $product_id='product_id';
	
	private $_data = array();
	
	public static function factory(array $data = NULL){
		
		return new Kohana_Msc($data);
		
	}
	
	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
       } 
	}
	
	function __set($name,$value){
		
		$this->$name = $value;
	}
	
	
	function __construct(array $data=NULL){
		
		
		$this->_data = $data;
		if (isset($this->_data))
		{
	  	   $id = array_key_exists('id', $this->_data)?$this->_data['id']: '';
		   
		   if (!empty($id))
		      $this->session = Session::instance(NULL,$id);
		   else
		      $this->session = Session::instance();
		}
		else 
		   $this->session = Session::instance();
		
	}
	
	
	/*
	 * 功能：将比对的商品写入会话中。 
	 * 
	 */
	public function write_product_compare(){
		
		$array =  $this->read_product_compare(); 
 		$array = (isset($array))? $array :array('values'=>array(),'count'=>'0','msg'=>'');
		$value = $this->_data[$this->product_compare][$this->product_id];
		if (!in_array($value, $array['values']) || empty($value) )
		{
		  //$array = array_values($array);
	  	  array_push($array['values'],$value);
	  	  $array['count']= count($array['values']);
	  	  $array['msg']='';
	  	  if (!empty($value))
	  	  $this->session->set($this->product_compare, $array);
	  	 }
		 else
		 {
			$array['msg']="已存在该商品。";
			$this->session->set($this->product_compare, $array);
		 }
		return $array;
	}
	
	/*
	 * 功能：读出需要对比的商品列表
	 * 
	 */
	public function read_product_compare(){
		$result= $this->session->get($this->product_compare);
		$array = (isset($result))? $result :array('values'=>array(),'count'=>'0','msg'=>'');
		$array['msg']='';
		$this->session->set($this->product_compare,$array);
		$r=$this->session->get($this->product_compare);
		return $result;
		
	}
	
	public function get_shelf_close_product_compare(){
		
		$this->session->set($this->product_compare,array('values'=>array(),'count'=>'0','msg'=>''));
		return '';
			
	} 
	
	public function get_shelf_product_compare_list(){
		$result = '
		<table cellspacing="0" id="CompareTable" summary="宝贝属性对比">
		<tbody><tr class="toolbar">
			<th scope="col"><a href="http://sell.taobao.com/auction/spu_compare.htm?act=removeall">全部移除</a><img src="http://img.taobao.com/2k5/sys/component/trim.gif" alt="" width="90" height="1"></th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10590637557&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10588191371&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10507373149&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10581172563&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10507871711&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
					</tr>
		<tr class="gray">
			<th scope="row" abbr="图片">图片</th>
															<td class="picname"><a href="http://item.taobao.com/item.htm?id=10590637557" target="_blank"><img src="http://img.taobao.com/bao/uploaded/i1/T12vmeXb4dXXcuLGIU_013605.jpg_sum.jpg"></a></td>
															<td class="picname"><a href="http://item.taobao.com/item.htm?id=10588191371" target="_blank"><img src="http://img.taobao.com/bao/uploaded/i1/T1Zc5eXfxgXXcTQ2rb_093714.jpg_sum.jpg"></a></td>
															<td class="picname"><a href="http://item.taobao.com/item.htm?id=10507373149" target="_blank"><img src="http://img.taobao.com/bao/uploaded/i1/T15VudXlltXXXQ1Ps9_074129.jpg_sum.jpg"></a></td>
															<td class="picname"><a href="http://item.taobao.com/item.htm?id=10581172563" target="_blank"><img src="http://img.taobao.com/bao/uploaded/i1/T1rqyeXXNqXXcCfAg1_041729.jpg_sum.jpg"></a></td>
															<td class="picname"><a href="http://item.taobao.com/item.htm?id=10507871711" target="_blank"><img src="http://img.taobao.com/bao/uploaded/i1/T1xHqdXgxnXXburs38_070057.jpg_sum.jpg"></a></td>
					</tr>
		<tr class="gray">
			<th scope="row" abbr="名称">名称</th>
							<td class="picname"><a href="http://item.taobao.com/item.htm?id=10590637557" target="_blank">云南白药创可贴(轻巧透气型)</a></td>
							<td class="picname"><a href="http://item.taobao.com/item.htm?id=10588191371" target="_blank">云南白药创可贴</a></td>
							<td class="picname"><a href="http://item.taobao.com/item.htm?id=10507373149" target="_blank">云南白药酊</a></td>
							<td class="picname"><a href="http://item.taobao.com/item.htm?id=10581172563" target="_blank">云南白药膏</a></td>
							<td class="picname"><a href="http://item.taobao.com/item.htm?id=10507871711" target="_blank">云南白药膏</a></td>
					</tr>

		<tr>
			<th scope="row" abbr="商家">商家</th>
							<td><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=6fdf4938ba1d7c57cd95d5ec89e96365" target="_blank">开心人大药房旗舰店</a></td>
							<td><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=6fdf4938ba1d7c57cd95d5ec89e96365" target="_blank">开心人大药房旗舰店</a></td>
							<td><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=6fdf4938ba1d7c57cd95d5ec89e96365" target="_blank">开心人大药房旗舰店</a></td>
							<td><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=6fdf4938ba1d7c57cd95d5ec89e96365" target="_blank">开心人大药房旗舰店</a></td>
							<td><a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=6fdf4938ba1d7c57cd95d5ec89e96365" target="_blank">开心人大药房旗舰店</a></td>
					</tr>

        <tr>
			<th scope="row" abbr="店铺动态评分">店铺动态评分</th>
							
                				<td>


									                		                    	                    		               								<ul class="grade">
                       <li><span>如实描述：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1410人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>服务态度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1387人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>发货速度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1386人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                </ul>
				</td>
							
                				<td>


									                		                    	                    		               								<ul class="grade">
                       <li><span>如实描述：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1410人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>服务态度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1387人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>发货速度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1386人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                </ul>
				</td>
							
                				<td>


									                		                    	                    		               								<ul class="grade">
                       <li><span>如实描述：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1410人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>服务态度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1387人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>发货速度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1386人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                </ul>
				</td>
							
                				<td>


									                		                    	                    		               								<ul class="grade">
                       <li><span>如实描述：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1410人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>服务态度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1387人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>发货速度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1386人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                </ul>
				</td>
							
                				<td>


									                		                    	                    		               								<ul class="grade">
                       <li><span>如实描述：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1410人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>服务态度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1387人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                       <li><span>发货速度：</span>
                     <a href="http://rate.taobao.com/user-rate-702348864--receivedOrPosted|0--buyerOrSeller|1.htm" target="_blank"><span class="c-value-no c-value-" title="4.8分，共有1386人打分"></span><em style="padding-left:0;">4.8</em></a></li>
                </ul>
				</td>
					</tr>

		<tr class="gray">
			<th scope="row" abbr="出售方式/价格">出售方式/价格</th>
															<td> 一口价 <span class="price">17.5</span></td>
															<td> 一口价 <span class="price">10.8</span></td>
															<td> 一口价 <span class="price">32.0</span></td>
															<td> 一口价 <span class="price">10.2</span></td>
															<td> 一口价 <span class="price">23.5</span></td>
					</tr>
		<tr>
			<th scope="row" abbr="运费">运费(至 江苏)</th>
																																																																								<td>快递公司:8.00元 ; EMS:20.00元</td>
																																																																								<td>快递公司:8.00元 ; EMS:20.00元</td>
																																																																								<td>快递公司:8.00元 ; EMS:20.00元</td>
																																																																								<td>快递公司:8.00元 ; EMS:20.00元</td>
																																																																								<td>快递公司:8.00元 ; EMS:20.00元</td>
					</tr>
		<tr>
			<th scope="row" abbr="所在地">所在地</th>
							<td>北京</td>
							<td>北京</td>
							<td>北京</td>
							<td>北京</td>
							<td>北京</td>
					</tr>

		<tr>
						<td colspan="6" class="seperator">&nbsp;</td>
		</tr>
					<tr>
				<th scope="row" abbr="品牌">品牌</th>
															<td>云南白药</td>
																				<td>云南白药</td>
																				<td>云南白药</td>
																				<td>云南白药</td>
																				<td>云南白药</td>
												</tr>
					<tr>
				<th scope="row" abbr="皮肤用药/外伤">皮肤用药/外伤</th>
															<td>创可贴</td>
																				<td>创可贴</td>
																				<td>&nbsp;</td>
																				<td>&nbsp;</td>
																				<td>&nbsp;</td>
												</tr>
					<tr>
				<th scope="row" abbr="批准文号">批准文号</th>
															<td>国药准字Z10980015</td>
																				<td>国药准字Z20070316</td>
																				<td>国药准字Z53021238</td>
																				<td>国药准字Z53020792</td>
																				<td>国药准字 Z20073015</td>
												</tr>
					<tr>
				<th scope="row" abbr="生产企业">生产企业</th>
															<td>云南白药集团股份有限公司-贴膏类</td>
																				<td>云南白药集团无锡药业有限公司</td>
																				<td>云南白药集团股份有限公司</td>
																				<td>云南白药集团无锡药业有限公司-贴膏类</td>
																				<td>云南白药集团股份有限公司</td>
												</tr>
					<tr>
				<th scope="row" abbr="规格">规格</th>
															<td>1盒装</td>
																				<td>1盒装</td>
																				<td>1盒装</td>
																				<td>1盒装</td>
																				<td>1盒装</td>
												</tr>
					<tr>
				<th scope="row" abbr="使用方法">使用方法</th>
															<td>外用</td>
																				<td>外用</td>
																				<td>外用</td>
																				<td>外用</td>
																				<td>外用</td>
												</tr>
					<tr>
				<th scope="row" abbr="类别">类别</th>
															<td>中成药</td>
																				<td>中成药</td>
																				<td>中成药</td>
																				<td>中成药</td>
																				<td>中成药</td>
												</tr>
					<tr>
				<th scope="row" abbr="风湿骨伤">风湿骨伤</th>
															<td>&nbsp;</td>
																				<td>&nbsp;</td>
																				<td>水/油/酊</td>
																				<td>乳膏/凝胶</td>
																				<td>贴膏</td>
												</tr>
				<tr class="toolbar">
		<th scope="col"><a href="http://sell.taobao.com/auction/spu_compare.htm?act=removeall">全部移除</a></th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10590637557&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10588191371&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10507373149&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10581172563&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
							<th scope="col">
					<a href="http://sell.taobao.com/auction/spu_compare.htm?act=remove&amp;id=10507871711&amp;allid=10590637557_0db1&amp;allid=10588191371_0db1&amp;allid=10507373149_0db1&amp;allid=10581172563_0db1&amp;allid=10507871711_0db1">移除</a>
																			</th>
					</tr>
	</tbody></table>
		';
		
		
		
		return $result;
		
		
	}
	
	public function get_shelf_product_compare(){
		$result='';
		$this->write_product_compare();
		$data = $this->read_product_compare();
		if ($data['count']>0)
		{
            if (!empty($data['msg'])) $result.='<script>alert(\'对比列表中已存在该商品！\');</script>';
	   	    $result.=' <div id="compare" class="compare" style="right: 0px; display: block; top: 220px; position: fixed; ">
	    	   <div class="mt"><h5>商品比较</h5>
	    	     <div class="extra" onclick="Compare.clear()"></div></div>
	    	     <div class="comPro">
	    	     <ul class="mc" id="comProlist"> ';
	   	    
			foreach ($data['values'] as $key=>$val){
				$result.='<li id="check_'.$val.'">
	    	         <a title="删除" class="close" onclick="reduceCompare('.$val.')"></a>'.$val.'
	    	       </li>
	             ';
			}
			$result.=' </ul>
	    	     <div class="mb">
	    	       <input type="button" value="对比所选商品" class="btn" id="compareImg" onclick="Compare.openCompare()">
	    	     </div>
	    	    </div>
	    	  </div>
	    	';
			
				
		}
		
		return $result;
	}
	
	public function set($key,$value){
		
		return $this->session->set($key, $value);
	}
	
	public function get($key){
		return $this->session->get($key);
	}
	
	public function get_once($key){
		
		return $this->session->get_once($key);
	}
	
	public function delete($key){
		return $this->session->delete($key);
	}
	
	function __destruct(){
		
		//$this->session->destroy();
	}
	
	function __toString(){
		
		$data = serialize($this->_data);
		$data = base64_encode($data);
		return $data;
		
	}

	
	
}
