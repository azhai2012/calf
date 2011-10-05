<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-04 03:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/triangle-closed-small.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/triangle-closed-small.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/triangle-opened-small.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/images/triangle-opened-small.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/samples/get.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/samples/get.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/browser.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/browser.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/browser.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: resources/browser.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 03:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 03:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 04:53:06 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
2011-10-04 04:53:06 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 43, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(109): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-04 04:53:08 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
2011-10-04 04:53:08 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 43, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(109): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-04 04:53:35 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
2011-10-04 04:53:35 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 43, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(109): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-04 04:53:38 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
2011-10-04 04:53:38 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfadmin/views/admin/body.php [ 43 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 43, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(109): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-04 05:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 05:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 05:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 05:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 05:33:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 05:33:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 05:33:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:33:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 78, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(94): Kohana_Admin->get_body_content()
#2 [internal function]: Controller_Admin->action_callmethod()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-04 05:33:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:33:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 78, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(94): Kohana_Admin->get_body_content()
#2 [internal function]: Controller_Admin->action_callmethod()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-04 05:33:57 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:33:57 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 05:33:59 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:33:59 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 05:34:07 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:34:07 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 05:34:11 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
2011-10-04 05:34:11 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH/calfadmin/classes/kohana/admin.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 05:41:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: mod_id ~ MODPATH/calfadmin/classes/controller/admin.php [ 94 ]
2011-10-04 05:41:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: mod_id ~ MODPATH/calfadmin/classes/controller/admin.php [ 94 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 94, Array)
#1 [internal function]: Controller_Admin->action_callmethod()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-04 05:41:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: mod_id ~ MODPATH/calfadmin/classes/controller/admin.php [ 94 ]
2011-10-04 05:41:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: mod_id ~ MODPATH/calfadmin/classes/controller/admin.php [ 94 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 94, Array)
#1 [internal function]: Controller_Admin->action_callmethod()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-04 07:37:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
2011-10-04 07:37:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 07:37:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
2011-10-04 07:37:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 07:38:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
2011-10-04 07:38:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 07:38:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
2011-10-04 07:38:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 07:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 07:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 07:39:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
2011-10-04 07:39:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting '{' ~ MODPATH/calfadmin/classes/admin/notice.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 07:39:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 07:39:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:19:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 41 ]
2011-10-04 08:19:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 41 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 41, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-04 08:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:29:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:29:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 08:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 08:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 09:18:00 --- ERROR: ErrorException [ 1 ]: Class 'Admin_Hots' not found ~ MODPATH/calfadmin/classes/controller/admin.php [ 101 ]
2011-10-04 09:18:00 --- STRACE: ErrorException [ 1 ]: Class 'Admin_Hots' not found ~ MODPATH/calfadmin/classes/controller/admin.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:51:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:51:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:51:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:51:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:52:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:52:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:53:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: mod_content ~ MODPATH/calfadmin/views/admin/body.php [ 45 ]
2011-10-04 09:53:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: mod_content ~ MODPATH/calfadmin/views/admin/body.php [ 45 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 45, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(120): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-10-04 09:53:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:53:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:54:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:54:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:54:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:54:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 09:56:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
2011-10-04 09:56:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/calfadmin/classes/kohana/admin/home.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 10:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 10:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 11:17:35 --- ERROR: ErrorException [ 1 ]: Class 'Admin_Notice' not found ~ APPPATH/classes/controller/test.php [ 39 ]
2011-10-04 11:17:35 --- STRACE: ErrorException [ 1 ]: Class 'Admin_Notice' not found ~ APPPATH/classes/controller/test.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 11:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 11:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 11:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 11:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 19:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 19:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 19:55:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 19:55:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 19:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-04 19:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-04 20:01:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: callmethod ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
2011-10-04 20:01:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: callmethod ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 61, Array)
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
2011-10-04 20:01:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: callmethod ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
2011-10-04 20:01:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: callmethod ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 61, Array)
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
2011-10-04 20:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/notice was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 20:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 20:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/news was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/shows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/shows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/shows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/shows was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/advertising was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/adv_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/adv_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:54:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:54:10 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:10 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:54:11 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:11 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:54:13 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:13 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:54:18 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:18 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:54:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-04 22:54:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/home/adv/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/home/adv/...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/home/adv/...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(37): Kohana_View::factory('admin/home/adv/...')
#3 [internal function]: Controller_Home->action_advlist()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-04 22:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 22:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 22:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-10-04 23:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-04 23:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/show_list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}