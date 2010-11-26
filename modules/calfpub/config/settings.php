<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'version' => '1.0.0.1',
	'modules' => array
     (

		'basic' => array(
               'name'=>'基本设置',
		       'sk'=>'sz',
               'ct'=> array(
	                 '商品设置'     => array('name'=>'spsz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '货架设置'     => array('name'=>'gt','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '店员设置'     => array('name'=>'dy','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '供货商设置'   => array('name'=>'ghs','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         ),
               ),

	     'stock' => array(
                'name'=>'库存管理',
	            'sk'=>'kc',
	            'ct'=> array(
	                 '商品入库'   => array('name'=>'rk','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '商品退库'   => array('name'=>'th','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '商品盘点'   => array('name'=>'pd','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '商品报损'   => array('name'=>'bs','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '效期管理'   => array('name'=>'xq','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
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
