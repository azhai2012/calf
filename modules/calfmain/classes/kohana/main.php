<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Main {

	private $_id;
	private $_data = array();

        public static function factory($id,array $data = NULL)
	{
		return new Kohana_Main($id,$data);
	}

	function __construct($id,array $data = NULL)
	{
          $this->_id = $id;
          $this->_data = $data; 

	}

        function get_main_content(){

  	 $array_data = array(
		'slider' =>array(
			array('img'=>'/media/images/m01.jpg','width'=>'720','height'=>'290','title'=>''),
			array('img'=>'/media/images/m02.jpg','width'=>'720','height'=>'290','title'=>''),
			array('img'=>'/media/images/m03.jpg','width'=>'720','height'=>'290','title'=>''),
			array('img'=>'/media/images/m04.jpg','width'=>'720','height'=>'290','title'=>''),
			array('img'=>'/media/images/m05.jpg','width'=>'720','height'=>'290','title'=>''),
		 ),
		 'notice'=> array(
		      array('id'=>'2121','title'=>'海外手机挑选小贴士','url'=>'#'),	
		      array('id'=>'2121','title'=>'同一收货地址购买限制规定','url'=>'#'),	
		      array('id'=>'2121','title'=>'代购商品价格如何计算','url'=>'#'),	
		      array('id'=>'2121','title'=>'澳洲运费优惠咯','url'=>'#'),	
		      array('id'=>'2121','title'=>'易趣图片管家功能升级公告','url'=>'#'),	
		 ),	
	         'info'=>array(
	         	array('id'=>'2133','content'=>'<div class="t">今日团购</div>
	                         <div class="c clearfix">
	                            <div><a href="#"><img src="/media/images/t001.jpg" /></a></div>
	                            <div class="tuanbtn"><a href="#">参团采购</a></div>
	                         </div>'
	                ),
	         ),

	   );
	   
	   $template = View::factory('main/content');
	   $template->array_data = $array_data;	
	   $template->get_content_hot_products = $this->get_content_hot_products();
	   $template->get_content_new_products = $this->get_content_new_products(); 
	   return $template;
 	} 	




	/* 首页 -- 新品上架 */
        function get_content_new_products(){
	   		$array_data = array(
				'left' =>array(
				      'img'=>'/media/images/n01.jpg','info'=>'皮肤过敏 消化不良 感冒流感 止咳祛痰 退烧止痛药 咽喉肿痛',	
				 ) ,
				 'right'=>array(

					  array(
						'date'=>'2011-07-01',
				                'lists'=>array(
				                          array('id'=>12323,'img'=>'/media/images/p02.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p03.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p04.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p05.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p06.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                  ),
				              ),
					  array(
						'date'=>'2011-07-22',
				                'lists'=>array(
				                          array('id'=>12323,'img'=>'/media/images/p07.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p08.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p09.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p10.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                          array('id'=>12323,'img'=>'/media/images/p11.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
				                  ),
				              ),
				 ), 
			);
			
	     $template = View::factory('main/new');
	     $template->array_data= $array_data;
	     return $template;
	}


	 /* 首页 -- 热销商品 */
      function get_content_hot_products(){

	$array_data = array(
	    array(
	        'title'=>'热销商品',
		'lists'=>array( 
		'left' =>array('img'=>'/media/images/h01.jpg','info'=>'皮肤过敏 消化不良 感冒流感 止咳祛痰 退烧止痛药 咽喉肿痛',),
		'right' =>array(
			'rc'=> array(
				  array('title'=>'化学制剂',
			                'lists'=>array(
				                    array('id'=>12323,'img'=>'/media/images/T1tpmeXetqXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                            array('id'=>12323,'img'=>'/media/images/T1momdXiNsXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                          ),),
				  array('title'=>'中成药',
			                'lists'=>array(
			                          array('id'=>12323,'img'=>'/media/images/T1cG9eXXxjXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                          array('id'=>12323,'img'=>'/media/images/T17mKgXjViXXXXXXXX-373-262.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                        ), ),
				  array('title'=>'外用药',
			                'lists'=>array(
			                          array('id'=>12323,'img'=>'/media/images/T1a.5dXbJrXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                          array('id'=>12323,'img'=>'/media/images/T1VHGeXc0dXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                        ), ),
				  array('title'=>'器械',
			                'lists'=>array(
			                          array('id'=>12323,'img'=>'/media/images/T1TE1dXcBrXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                          array('id'=>12323,'img'=>'/media/images/T1WoqdXg4sXXXXXXXX-120-120.jpg','name'=>'碧生源常润茶','price'=>'52','def_price'=>'58.00','info'=>'作用：美体瘦身'),	
			                        ),),		
			 ),
			'ranking'=>array(
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
				array('id'=>22133,'name'=>'碧生源常润茶'),
			),
                      ),
	  	   ), 
		
                ),
            );
	    $template = View::factory('main/hots');
	    $template->array_data = $array_data;
            return $template;
	}


  
}
	