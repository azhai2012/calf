<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '会议管理',
    'version' => '1.0.0.1',
    'picuploadpath'=>'/home/azhai/uploads',
	'modules' => array
     (
        
               'basic' => array(
               'name'=>'基本设置',
		       'sk'=>'sz',
               'ct'=> array(
	                 '商品设置'     => array('name'=>'spsz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '展会设置'   => array('name'=>'meet','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         ),
               ),
     
               'customer' => array(
                      'name'=>'客户管理',
		              'sk'=>'cus',
                      'ct'=> array(
                           '展会浏览'     => array('name'=>'custmt','permissons'=>array('find'=>'查询')),
			               '展会订单'     => array('name'=>'custorder','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '投诉建议'     => array('name'=>'custropose','permissons'=>array('find'=>'查询')),
			         ),
               ),
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
               'report' => array(
                      'name'=>'报表统计',
		              'sk'=>'bb',
                      'ct'=> array(
	                       '会议订单'     => array('name'=>'ddbb','permissons'=>array('find'=>'查询','ex'=>'导出')),
			               '销售统计'     => array('name'=>'xsbb','permissons'=>array('find'=>'查询','ex'=>'导出')),
			         ),
               ),
         
        /*  
		'basic' => array(
               'name'=>'基本设置',
		       'sk'=>'sz',
               'ct'=> array(
	                 '商品设置'     => array('name'=>'spsz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '货位设置'     => array('name'=>'gt','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			        // '店员设置'     => array('name'=>'dy','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '供货商设置'   => array('name'=>'ghssz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '客商设置'   => array('name'=>'khsz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '其他设置'   => array('name'=>'qtsz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
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
        'sale' => array(
                'name'=>'销售管理',
	            'sk'=>'xs',
	            'ct'=> array(
	                 '销售订单'   => array('name'=>'dd','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '销售退单'   => array('name'=>'td','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '销售记账'   => array('name'=>'jz','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
			         '销售合同'   => array('name'=>'ht','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询','ex'=>'导出')),
			         '发票管理'   => array('name'=>'fp','permissons'=>array('add'=>'新增','del'=>'删除','find'=>'查询')),
                   ),
             ),    
        'report' => array(
                'name'=>'报表统计',
	            'sk'=>'bb',
	            'ct'=> array(
                      '库存报表'=>array('name'=>'kcbb','permissons'=>array('find'=>'查询','print'=>"导出")),
                      '入库报表'=>array('name'=>'rkbb','permissons'=>array('find'=>'查询','print'=>"导出")),
                      '退库报表'=>array('name'=>'tkbb','permissons'=>array('find'=>'查询','print'=>"导出")),
                      '进销存报表'=>array('name'=>'jxcbb','permissons'=>array('find'=>'查询','print'=>"导出")),
                      '销售分析'=>array('name'=>'fxbb','permissons'=>array('find'=>'查询','print'=>"导出")),
                      ),  
             ),    
         */           
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
