<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-18 03:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL error was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-18 03:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL error was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-18 03:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:39:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
2011-10-18 03:39:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/adv/add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(201): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-18 03:39:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
2011-10-18 03:39:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/adv/add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(201): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-18 03:39:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
2011-10-18 03:39:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/adv/add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(201): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-18 03:39:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
2011-10-18 03:39:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/adv/add.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/adv/add.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(201): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-18 03:47:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:47:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
2011-10-18 03:47:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:49:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
2011-10-18 03:49:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 03:49:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
2011-10-18 03:49:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:49:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
2011-10-18 03:49:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/controller/home.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-18 03:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-18 03:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-18 04:02:39 --- ERROR: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-18 04:02:39 --- STRACE: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/hots/meet...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/hots/meet...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(102): Kohana_View::factory('admin/hots/meet...')
#3 [internal function]: Controller_Home->action_hots()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-18 04:02:41 --- ERROR: View_Exception [ 0 ]: The requested view admin/hots/product/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-18 04:02:41 --- STRACE: View_Exception [ 0 ]: The requested view admin/hots/product/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/hots/prod...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/hots/prod...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(102): Kohana_View::factory('admin/hots/prod...')
#3 [internal function]: Controller_Home->action_hots()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-18 04:02:41 --- ERROR: View_Exception [ 0 ]: The requested view admin/hots/market/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-18 04:02:41 --- STRACE: View_Exception [ 0 ]: The requested view admin/hots/market/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/hots/mark...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/hots/mark...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(102): Kohana_View::factory('admin/hots/mark...')
#3 [internal function]: Controller_Home->action_hots()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-18 04:02:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-18 04:02:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/hots/meet...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/hots/meet...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(102): Kohana_View::factory('admin/hots/meet...')
#3 [internal function]: Controller_Home->action_hots()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-18 04:04:59 --- ERROR: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-18 04:04:59 --- STRACE: View_Exception [ 0 ]: The requested view admin/hots/meetlist/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/hots/meet...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/hots/meet...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(102): Kohana_View::factory('admin/hots/meet...')
#3 [internal function]: Controller_Home->action_hots()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}