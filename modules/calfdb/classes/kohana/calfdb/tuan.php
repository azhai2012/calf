<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-23 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Tuan {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Tuan($id,$data);

	}

    /**
    * get right content
    */
    public function get_tuan_right_content() {
        // TODO : [calfdb/tuan] set right data
        $array_data = array(
		   'note' =>array(
			         array('title'=>'8月27-29日白色iPhone 4抽奖结果','url'=>'#'),
			         array('title'=>'8月24-26日五张大闸蟹礼券结果','url'=>'#'),
			         array('title'=>'8月20-22日京东礼品卡抽奖结果','url'=>'#'),
			       ), 
		   'info'=>array('title'=>'申请团购','content'=>'申请发起团购，想团什么都行！'),
		   'faq' => array(
			      'title'=>'团购答疑',
		   	      'totalcount' =>array('rowcount'=>2666,'url'=>'#'),
			      'add_question'=> array('id'=>'6019'),
			      'lists'=> array(
			      	  array('name'=>'我团购的迪士尼书包已经付款了订单里怎么不显示','url'=>'#'),
					  array('name'=>'农村参加团购怎么发货邮寄','url'=>'#'),
					  array('name'=>'团购服务电话没人接，客服人员请帮我查下团购订单号793953','url'=>'#'),
			      ), 
		    ),
			
		);
        return $array_data;
    }

    /**
    * get left data
    */
    public function get_tuan_left_content() {
        // TODO : [calfdb/tuan] set left data
     	 $array_data = array(
		        array('head_title' =>'0元抽奖！佳节到，运气旺，轻点鼠标，就有机会抢到万众瞩目的白色iPhone 4一部！只要参与，就能抽奖，快快分享给身边的朋友们吧！ ','head_url'=>'#',
			              'team_price'=>'999.00','url'=>'#','mark_price'=>'1999','discount_price'=>'999','save_money'=>'1000',
			          'team_num'=>2030,'min_num'=>10,'permit_time'=>'0:20','stop_date'=>'2011-10-01 0:0',
			          		'master_img'=>'/media/images/13149637511434.jpg',
					           'description'=>'	 <ul>
				                     <li>1、强大性能，迷人外观；</li>
				                     <li>2、全新音乐触感；</li>
				                     <li>3、高清大屏幕，多点触控；</li>
				                     <li>4、超长续航时间。</li>
				                    </ul>	
					                 '), 
		    	array('head_title' =>'0元抽奖！佳节到，运气旺，轻点鼠标，就有机会抢到万众瞩目的白色iPhone 4一部！只要参与，就能抽奖，快快分享给身边的朋友们吧！ ','head_url'=>'#',
						              'team_price'=>'999.00','url'=>'#','mark_price'=>'1999','discount_price'=>'999','save_money'=>'1000',
						          'team_num'=>2030,'min_num'=>10,'permit_time'=>'0:20','stop_date'=>'2011-10-01 0:0',
						          'master_img'=>'/media/images/13149637511434.jpg',
						           'description'=>'	 <ul>
					                     <li>1、强大性能，迷人外观；</li>
					                     <li>2、全新音乐触感；</li>
					                     <li>3、高清大屏幕，多点触控；</li>
					                     <li>4、超长续航时间。</li>
					                    </ul>	
						                 ' ),
		 );
	
        return $array_data;
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

