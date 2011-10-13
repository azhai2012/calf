<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'company'=>'徐州淮海药业',
		'type'       => 'odbc',
		'connection' => array(
			'hostname'=> '221.229.255.181',
			'databasename'=> 'masterprice',
			'username'=> 'sa',
			'password'=> 'Admin2011',
			'ports'=> '8099',
	    ),
        'persistent'   => FALSE,
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
        'master_sql'=>'select top 10 product_id as 商品编号,price as 单价,\'的飞机撒kdjask机读卡三九kdjask大胜靠德las\' as kk from m_price  order by product_id',
	    'detail_sql'=>'select * from m_price where product_id={0}',
	    'update_sql'=>'update m_price set price=7 where product_id={0}',
	    
	),
	'users'=> array(
	    'admin'=>'hhyy123',	
	    'user1'=>'123',
	)
	
);