<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mssql',
		'connection' => array(
			'hostname'=> '192.168.100.251',
			'databasename'=> 'hheyweb',
			'username'=> 'sa',
			'password'=> 'azsOFT',
			'ports'=> '1433',
	    ),
        'persistent'   => FALSE,
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
	),
	
);