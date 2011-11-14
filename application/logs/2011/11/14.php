<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-14 00:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 00:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 00:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 00:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 02:19:21 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Worksheet.php [ 967 ]
2011-11-14 02:19:21 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Worksheet.php [ 967 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-14 02:20:40 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Cell.php [ 502 ]
2011-11-14 02:20:40 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Cell.php [ 502 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-14 02:22:58 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Shared/String.php [ 566 ]
2011-11-14 02:22:58 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH/excel/classes/vendor/phpexcel/PHPExcel/Shared/String.php [ 566 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-14 03:03:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: master_img ~ MODPATH/calfadmin/views/admin/product/product/modify.php [ 121 ]
2011-11-14 03:03:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: master_img ~ MODPATH/calfadmin/views/admin/product/product/modify.php [ 121 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/modify.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 121, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(176): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Post->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Post))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-11-14 03:07:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: master_product_img ~ MODPATH/calfadmin/views/admin/product/product/modify.php [ 121 ]
2011-11-14 03:07:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: master_product_img ~ MODPATH/calfadmin/views/admin/product/product/modify.php [ 121 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/views/admin/product/product/modify.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 121, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(176): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Post->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Post))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-11-14 03:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/4ec0e2e1d4103.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 03:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/4ec0e2e1d4103.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 03:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/4ec0e3149ec26.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 03:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/4ec0e3149ec26.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 03:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 03:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 03:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/upload/4ec0e342753bb.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 03:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/upload/4ec0e342753bb.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 04:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 04:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-14 04:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/media/images/upload/4ec0e9392a87c.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-14 04:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/media/images/upload/4ec0e9392a87c.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-14 04:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-11-14 04:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/Array was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}