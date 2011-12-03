<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-03 10:16:52 --- ERROR: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
2011-12-03 10:16:52 --- STRACE: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-12-03 10:16:54 --- ERROR: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
2011-12-03 10:16:54 --- STRACE: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-12-03 10:17:02 --- ERROR: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
2011-12-03 10:17:02 --- STRACE: ErrorException [ 8 ]: Undefined index: navdata ~ MODPATH/calfadmin/classes/controller/home.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-12-03 10:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 10:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 10:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 10:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 11:08:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 11:08:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 11:08:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 11:08:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 13:49:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 13:49:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 14:59:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 14:59:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 14:59:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 14:59:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 14:59:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 14:59:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 15:29:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 15:29:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 15:37:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 15:37:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 16:55:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
2011-12-03 16:55:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/product/product/product.php [ 18 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/product.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 18, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(219): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 17:08:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/content.php [ 55 ]
2011-12-03 17:08:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/content.php [ 55 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/content.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 55, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(123): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 17:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 17:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 17:58:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/body.php [ 60 ]
2011-12-03 17:58:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/body.php [ 60 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 60, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(123): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 18:06:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/body.php [ 59 ]
2011-12-03 18:06:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/body.php [ 59 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 59, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(126): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 18:30:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
2011-12-03 18:30:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/news/content.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 27, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(49): Kohana_View->__toString()
#5 [internal function]: Controller_Home->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-12-03 18:30:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
2011-12-03 18:30:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/news/content.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 27, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(49): Kohana_View->__toString()
#5 [internal function]: Controller_Home->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-12-03 18:30:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
2011-12-03 18:30:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfadmin/views/admin/home/news/content.php [ 27 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/home/news/content.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 27, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(49): Kohana_View->__toString()
#5 [internal function]: Controller_Home->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-12-03 20:43:15 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
2011-12-03 20:43:15 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/calfadmin/views/admin/body.php [ 61 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/body.php(61): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/zhaibob/...', 61, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(126): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 20:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 20:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 20:44:03 --- ERROR: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 20:44:03 --- STRACE: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(23): Kohana_View::factory('admin/')
#3 [internal function]: Controller_Home->before()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 20:45:27 --- ERROR: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 20:45:27 --- STRACE: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(23): Kohana_View::factory('admin/')
#3 [internal function]: Controller_Home->before()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 20:49:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 20:49:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(23): Kohana_View::factory('admin/')
#3 [internal function]: Controller_Home->before()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 20:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 20:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 20:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 20:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:17:29 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:17:29 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:17:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:17:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:17:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:17:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:17:32 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:17:32 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:17:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:17:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:19:16 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:19:16 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:19:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:19:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:19:49 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:19:49 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:19:54 --- ERROR: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-12-03 21:19:54 --- STRACE: View_Exception [ 0 ]: The requested view admin/navcontent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/navconten...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/navconten...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(48): Kohana_View::factory('admin/navconten...')
#3 [internal function]: Controller_Home->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-12-03 21:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:26:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
2011-12-03 21:26:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/navcontent.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(228): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 21:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:26:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant nav - assumed 'nav' ~ MODPATH/calfadmin/classes/controller/home.php [ 54 ]
2011-12-03 21:26:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant nav - assumed 'nav' ~ MODPATH/calfadmin/classes/controller/home.php [ 54 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(54): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 54, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-12-03 21:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:27:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
2011-12-03 21:27:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/navcontent.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(228): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 21:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:27:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
2011-12-03 21:27:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: navdata ~ MODPATH/calfadmin/views/admin/navcontent.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/navcontent.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(228): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-12-03 21:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascript:void(0); ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascript:void(0); ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-03 21:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-03 21:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}