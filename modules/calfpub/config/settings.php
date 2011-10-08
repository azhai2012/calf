<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'product'=> '会议管理',
    'version' => '1.0.0.1',
    'picuploadpath'=>'/home/azhai/uploads', 
    'openmods'=>array(
       
        'calfcustomer',
        'calfsupplier',
     ),     
    'memcache' => array
              (
               'memcached'=>FALSE,
               'sessionname'=>'userlogin',
               'links'=>'/login',
               'tcpip'=>'192.168.100.123',
               'ports'=>11211, 
               'ajaxfunc',
              ),
	'modules' => array
      (
               'admin'=>array(
                      'name'=>'系统管理',
                      'sk'=>'sys',
                      'ct'=> array(
                           '角色' => array('name'=>'sysrole','permissons'=>array()),
                           '用户' => array('name'=>'sysuser','permissons'=>array()),
                           '设置' => array('name'=>'syssetup','permissons'=>array()),
                    ), 
              ),        
      ),
      
    
);
