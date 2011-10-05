<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-05 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:29 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:22:29 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:22:33 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:22:33 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:22:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:22:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:22:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:13 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:24:13 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:32 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:33:32 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:35:09 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:35:09 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:35:11 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:35:11 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:35:12 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:35:12 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerteam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerteam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/teamlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/teamlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:40:56 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:40:56 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerteam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerteam was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/teamlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/teamlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:41:09 --- ERROR: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
2011-10-05 00:41:09 --- STRACE: ErrorException [ 8 ]: Undefined index: mod_name ~ MODPATH/calfadmin/views/admin/body.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 41, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(121): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-05 00:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/meetlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/meetlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/meetlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/meetlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/template was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/manager was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/lists was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 00:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 00:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/productplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/summaryplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/marketplot was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/summary was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/summary was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 01:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 01:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/managerproduct was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/managerdiscount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/discountlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/product was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/summary was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/summary was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/market was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-05 02:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined/orderlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:02:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Kohana_Product::$discount_template ~ MODPATH/calfproduct/classes/kohana/product.php [ 110 ]
2011-10-05 02:02:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Kohana_Product::$discount_template ~ MODPATH/calfproduct/classes/kohana/product.php [ 110 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(110): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 110, Array)
#1 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(65): Kohana_Product->get_product_discount_content()
#2 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(46): Kohana_Product->get_product_right_content()
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(12): Kohana_Product->get_product_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(45): Model_Main_Content->get_product_content('', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-05 02:21:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:21:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:21:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:33:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:33:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:34:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:34:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:34:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:34:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:35:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:35:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:36:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
2011-10-05 02:36:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH/calfadmin/classes/controller/home.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-05 02:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 02:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 02:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:39:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:39:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 02:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 02:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 03:19:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 03:19:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/tuan was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-05 04:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/discount was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-05 04:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-05 04:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-05 04:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}