<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 
 * 功能：公共类库（数据库类 ） 
 * @author zhaibob
 * 
 * TODO 完成相关数据的内容
 */

class Kohana_Calfdb_Product {
	
	protected $calfdb;
	private $_id;
	private $_data = array();
	
	public static function factory($id,array $data= NULL){
		
		return new Kohana_Calfdb_Product($id,$data);
		
	}
	
	
	/**
	 * 功能：得到新贴的数据。
	 * @todo 关联商品数据库的实现
	 */
	public function product_views_new_posts_data_array(){
		// @todo 商品明细内的新发贴数据，注意这里需要分页的功能
		$array_data=array(
		'status'=>array('totalpage'=>4,'url'=>'#','write_url'=>'#'),
		'lists'=>array(
		   array('title'=>'商品不错','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		   array('title'=>'商品不错，送货也快！','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		   array('title'=>'商品不错','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		   array('title'=>'商品不错，送货也快！','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		   ),
		);
		return $array_data;
		
	}
	
	
	/**
	 * 功能：得到问答贴的数据。
	 * Enter description here ...
	 */
	public function product_views_ask_posts_data_array(){
		// @todo 商品明细内的问答贴，注意这里是分页显示的数据
		$array_data= array(
		'status'=>array('totalpage'=>4,'url'=>'#','write_url'=>'#'),
        'lists'=>array(
		    array('title'=>'货送不急时，新货什么时候上','report'=>'1','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		    array('title'=>'有缺货！赠品没有收到','report'=>'2','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		    array('title'=>'货送不急时，新货什么时候上','report'=>'3','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
	 	    array('title'=>'有缺货！赠品没有收到','report'=>'4','view'=>'34','author'=>'XXX药店','create_at'=>'2011-01-01 00:00'),
		   ),
		);
		
		return $array_data;
		
	}
	
	/**
	 * 商品明细的关联商品的数据
	 * Enter description here ...
	 */
	public function product_views_relevance_data_array(){
		$result= array(
		    array('url' => '#', 'img' => '/media/images/ec7e7412-51b8-4b89-a8df-aa30052e32c6.jpg', 'rate_strong' => '33%', 'rate_content' => 'Centrum善存佳维片新上市家庭装120片', 'price' => '108.00'),
		    array('url' => '#', 'img' => '/media/images/a5882aa4-1faf-4a1e-8045-a67edbe6add8.jpg', 'rate_strong' => '22%', 'rate_content' => 'Centrum善存佳维片1.33g*60片', 'price' => '108.00'),
		    array('url' => '#', 'img' => '/media/images/c4bebaca-2bc8-4d4b-abc9-ebc6981a611c.jpg', 'rate_strong' => '21%', 'rate_content' => '养生堂天然维生素C咀嚼片90粒促销特惠装', 'price' => '108.00'),
		);
		
	    return $result; 
	}
	
	
	/*
	 * 功能：商品明细的数据，每个商品的详细的展示
	 * @author zhaibob
	 *  
	 * 
	 */
	public function product_views_data_array(){
		
		$result= array(
		         'product_info'=>array(
                   'id'=>'10039455',    //商品id
                   'name'=>'阿莫西林胶囊',  //商用名称
                   'pname'=>'太灵',    //通用名称
                   'uses'=>'功能主治：用于敏感菌（不产β-内酰胺酶菌株）',  //功能主治
                   'price'=>'10.70',    //商品的价格
                   'spec'=>'10*10',    //商品规格
                   'unit'=>'盒',   //单位
                   'group'=>'100',   //商品包装
                   'lsno'=>'国药准字100203004',  //批准文号
                  ),
                  'product_imgs'=>
                   array(
                          array('big_image'=>'/media/images/big1.jpg','small_image'=>'/media/images/small1.jpg'),
                          array('big_image'=>'/media/images/big2.jpg','small_image'=>'/media/images/small2.jpg'),
                          array('big_image'=>'/media/images/big3.jpg','small_image'=>'/media/images/small3.jpg'),
                          array('big_image'=>'/media/images/big4.jpg','small_image'=>'/media/images/small4.jpg'),
              
                   ),
                   'product_description'=>array(
                          'content'=>'
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
                                 ',
                   ),
                   'product_discount'=> array(
                                            'single' => array('content' => '买一赠送10'),
                                            'compose' => array(
                                                     'master' => array (
                                                            'id' => '153691', 
                                                            'url' => '#', 
                                                            'type' => 'master', 
                                                            'name' => 'GREEN A 绿A天然螺旋藻精片0.5g*12粒*50袋*1桶绿A天然螺', 
                                                            'price' => '103.00',
                                                            'img' => '/media/images/ed4b324b-b12b-46e3-bfca-1b594c22056d.jpg'),
                                                      'other' => array (
                                                             array(
                                                               'id' => '153694', 
                                                               'url' => '#', 
                                                               'type' => 'other', 
                                                               'name' => '养生堂天然维生素E软胶囊160粒', 
                                                               'price' => '83.00',
                                                               'img' => '/media/images/8df94bb2-26b9-4c3c-85c8-4ca900d5b196.jpg'
                                                               ),
                                                             array(
                                                             'id' => '361440', 
                                                             'url' => '#', 
                                                             'type' => 
                                                             'other', 
                                                             'name' => '胡世百康茶花花粉125g', 
                                                             'price' => '23.00', 
                                                             'img' => '/media/images/8df94bb2-26b9-4c3c-85c8-4ca900d5b196.jpg')
                                                          )
                                                       ),
                                             'total_info'=> array('total'=>'500.00','default_total'=>'530.00','save_money'=>'30.00'),            
                          ),
                          
                   
          );     
         
		return $result;
		
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
	
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
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
