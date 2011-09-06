<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '会议管理',
    'version' => '1.0.0.1',
    'picuploadpath'=>'/home/azhai/uploads',     
    'modules' => array
     (
         'supplier' => array(
                      'name'=>'供货商管理',
		              'sk'=>'sup',
                      'ct'=> array(
                           '展会管理'     => array('name'=>'supm','permissons'=>array('find'=>'查询')),
			               '展会订单'     => array('name'=>'suporder','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '意见反馈建议'     => array('name'=>'suppropose','permissons'=>array('find'=>'查询')),
			               '库存查询'     => array('name'=>'supkc','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '入库查询'     => array('name'=>'suprk','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '退库查询'     => array('name'=>'suptk','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '销售流向查询'     => array('name'=>'supxs','permissons'=>array('find'=>'查询','ex'=>'导出')),
			         
                      ),
               ),
       
      ),
);