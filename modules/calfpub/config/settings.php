<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'version' => '1.0.0.1',
	'moudles' => array
     (

		'basic' => array(
               'name'=>'基本设置',
		       'sk'=>'sz',
               'ct'=> array(
	                 '商品设置'   => 'spsz',
			         '货架设置'   => 'gt',
			         '店员设置'   => 'dy',
			         '供货商设置'   => 'ghs',
			         '会员设置' => 'hy',
	                 '财务设置'  => 'cw',
                     ),
               ),

	     'stock' => array(
                'name'=>'库存管理',
	            'sk'=>'kc',
	            'ct'=> array(
	                 '商品入库'=>'rk',
			         '商品退库'   => 'th',
			         '商品盘点'   => 'pd',
			         '商品报损'   => 'bs',
			         '效期管理' => 'xq',	               
                   ),
             ),
          
      ),
      
     'admins' => array
     (
         'project'=>array('name'=>"项目",'sk'=>'adp'),
         'user'=>array('name'=>"用户",'sk'=>'adu'),
         'group'=>array('name'=>"组",'sk'=>'adg'),
         'role'=>array('name'=>"角色和权限",'sk'=>'adr'),
         'custom'=>array('name'=>"自定义属性",'sk'=>'adc'),
         'setting'=>array('name'=>"配置",'sk'=>'ads'),
        
     )
);
