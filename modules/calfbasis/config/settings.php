<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '内容管理',
    'version' => '1.0.0.1',
    'modules' => array
     (
        'basis' => array(
                      'name' => '基础管理',
                      'sk'=> 'basis',
                      'ct'=>array(
                           '商品设置'     => array('name'=>'basisprocs','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '供货商设置'     => array('name'=>'basissuppers','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '客商设置'     => array('name'=>'basiscustomers','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '其他设置'     => array('name'=>'basisothers','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
                         ), 
         ),
      ),
);