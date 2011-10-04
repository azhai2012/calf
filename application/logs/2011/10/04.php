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