<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '客户管理',
    'version' => '1.0.0.1',
    'modules' => array
     (
         'customer' => array(
                      'name'=>'订单管理',
		              'sk'=>'cus',
                      'ct'=> array(
                           '商品订货'     => array('name'=>'custolist','permissons'=>array('find'=>'查询')),
			               '商品购物车'   => array('name'=>'custcart','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '订单查询'     => array('name'=>'custoview','permissons'=>array('find'=>'查询')),
			               '配送单查询'   => array('name'=>'custdelivery','permissons'=>array('find'=>'查询')),
                           '单据下载'   => array('name'=>'custdown','permissons'=>array('find'=>'查询')),
                     ),
          ),
      ),
);