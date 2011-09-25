<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-26 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Community {

	protected $calfdb;
	private $_id;
	private $_data = array();

	public static function factory($id,array $data= NULL){

		return new Kohana_Calfdb_Community($id,$data);

	}
	
	
	function __construct($id,array $data=NULL){
		$this->_id = $id;
		$this->_data= $data;
	}

        /**
        * get left
        */
        public function get_community_left_content() {
            // TODO : [community] set left data
           $array_data = array(
            'talk'=>array(
	         'titles'=>array('head_title'=>'讨论贴','product_title'=>'热门讨论商品'),
	         'topic_lists' =>array(
	      	      array('id'=>'1111','title'=>'幸亏看全了，不然SB了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
	      	      array('id'=>'1111','title'=>'爵士钢琴，下辈子我还爱你','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
	      	      array('id'=>'1111','title'=>'刚花99买了WR700N，太坑爹了！','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
	      	      array('id'=>'1111','title'=>'华缩的新一代败家卡终于出来了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
	      	      array('id'=>'1111','title'=>'京东，如此可以关了团购不丢人了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
	      	      array('id'=>'1111','title'=>'99元对华为的749元，应该有市场的','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),

	            ),
	          
	          'product_lists'=>array(
	       	       array('id'=>'1111','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),
	       	       array('id'=>'2222','img'=>'/media/images/72d329ce-f1a9-48c8-adcf-7261bb6154d2.jpg'),
	       	       array('id'=>'3333','img'=>'/media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg'),
	       	       array('id'=>'4444','img'=>'/media/images/350caca7-aad8-4c6f-840a-66e9f6bd6d16.jpg'),
	       	       array('id'=>'5555','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),
                  ),
	      ),
              'new'=>array(
	              'titles'=>array('head_title'=>'新发贴','product_title'=>'热门新贴商品'),
		      'topic_lists' =>array(
		      	   array('id'=>'1111','title'=>'幸亏看全了，不然SB了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
		      	   array('id'=>'1111','title'=>'爵士钢琴，下辈子我还爱你','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
		      	   array('id'=>'1111','title'=>'刚花99买了WR700N，太坑爹了！','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
		      	   array('id'=>'1111','title'=>'华缩的新一代败家卡终于出来了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
		      	   array('id'=>'1111','title'=>'京东，如此可以关了团购不丢人了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
		      	   array('id'=>'1111','title'=>'99元对华为的749元，应该有市场的','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),

		         ),
		        'product_lists'=>array(
		       	       array('id'=>'1111','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),
		       	       array('id'=>'2222','img'=>'/media/images/72d329ce-f1a9-48c8-adcf-7261bb6154d2.jpg'),
		       	       array('id'=>'3333','img'=>'/media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg'),
		       	       array('id'=>'4444','img'=>'/media/images/350caca7-aad8-4c6f-840a-66e9f6bd6d16.jpg'),
		       	       array('id'=>'5555','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),

		         ),
	             ),
		 'ask'=>array(
		              'titles'=>array('head_title'=>'问答贴','product_title'=>'热门问答商品'),
			      'topic_lists' =>array(
			      	   array('id'=>'1111','title'=>'幸亏看全了，不然SB了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
			      	   array('id'=>'1111','title'=>'爵士钢琴，下辈子我还爱你','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
			      	   array('id'=>'1111','title'=>'刚花99买了WR700N，太坑爹了！','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
			      	   array('id'=>'1111','title'=>'华缩的新一代败家卡终于出来了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
			      	   array('id'=>'1111','title'=>'京东，如此可以关了团购不丢人了','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),
			      	   array('id'=>'1111','title'=>'99元对华为的749元，应该有市场的','viewcount'=>'11123','repetcount'=>'96','author'=>'白话文','about'=>'路由器'),

			         ),
			        'product_lists'=>array(
			       	       array('id'=>'1111','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),
			       	       array('id'=>'2222','img'=>'/media/images/72d329ce-f1a9-48c8-adcf-7261bb6154d2.jpg'),
			       	       array('id'=>'3333','img'=>'/media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg'),
			       	       array('id'=>'4444','img'=>'/media/images/350caca7-aad8-4c6f-840a-66e9f6bd6d16.jpg'),
			       	       array('id'=>'5555','img'=>'/media/images/abc7f8b3-cb38-4e75-82b7-16113cd1efa0.jpg'),

			         ),
		             ),


	         );
	      
         
            return $array_data;
        }

         /**
         * get right 
         */
         public function get_community_right_content() {
             // TODO : [community] get right data
          	$array_data = array(
			'new'=>array(
			     'titles' =>array('head_title'=>'新发帖子关注榜'),
			     'lists'=> array(
			     	 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				
			     ),  
			  ),
			'talk'=>array(
			     'titles' =>array('head_title'=>'讨论帖子关注榜'),
			     'lists'=> array(
			     	 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
			     ),  
			  ),
			'ask'=>array(
			     'titles' =>array('head_title'=>'问答帖子关注榜'),
			     'lists'=> array(
			     	 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
				 array('id'=>'11222','title'=>'本本早到手了，不会装系统~哪位大侠可否教教小女子~'),
			     ),  
			  ),

			);
             return $array_data;
         }

  
	function  __get($name){
	   if(isset($this->$name)){ 
          return $this->$name;
	   }else { 
          return NULL; 
       } 
	}

	function __set($name,$value){

		$this->$name = $value;
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
