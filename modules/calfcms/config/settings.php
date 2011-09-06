<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '内容管理',
    'version' => '1.0.0.1',
    'newspicuploadpath'=>'./media/upload/',     
    'modules' => array
     (
        'cms' => array(
                      'name' => '内容管理',
                      'sk'=> 'cms',
                      'ct'=>array(
                           '新闻管理'     => array('name'=>'cmsnews','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '模板管理'     => array('name'=>'cmstemplates','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '展会信息'     => array('name'=>'cmstmtinfo','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
			               '投诉管理'     => array('name'=>'cmstrepose','permissons'=>array('add'=>'增加','modify'=>'修改','del'=>'删除','find'=>'查询')),
                         ), 
         ),
      ),
);