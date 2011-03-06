<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '会议管理',
    'version' => '1.0.0.1',
    'picuploadpath'=>'/home/azhai/uploads',     
    'modules' => array
     (
        'meet' => array(
                     'name' => '展会区',
                      'sk'=> 'mt',
                      'ct'=>array(
                           '参加展会'     => array('name'=>'custmt','permissons'=>array('find'=>'查询')),
			               '展会订单'     => array('name'=>'custorder','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '展会信息'     => array('name'=>'custmtinfo','permissons'=>array('find'=>'查询')),
			               '投诉建议'     => array('name'=>'custropose','permissons'=>array('find'=>'查询')),
			 
                         ), 
         ),
      ),
);