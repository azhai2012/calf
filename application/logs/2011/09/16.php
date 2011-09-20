<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-16 08:39:17 --- ERROR: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
2011-09-16 08:39:17 --- STRACE: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 115, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 08:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 08:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 08:40:26 --- ERROR: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
2011-09-16 08:40:26 --- STRACE: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 115, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 08:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 08:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 08:40:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:40:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:40:34 --- ERROR: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
2011-09-16 08:40:34 --- STRACE: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/controller/test.php [ 115 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 115, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 08:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 08:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 08:41:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:41:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:42:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:42:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:56:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:56:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:56:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:56:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:56:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:56:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:58:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:58:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:58:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 08:58:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 08:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calf/modules/calfproduct/classes/kohana/product.php ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 08:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: calf/modules/calfproduct/classes/kohana/product.php ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:00:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
2011-09-16 09:00:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ MODPATH/calfproduct/classes/kohana/product.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 09:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 09:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 09:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:30:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:30:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:30:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:30:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:30:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:30:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:30:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:31:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:31:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:31:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:31:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:31:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:31:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:31:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:31:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:32:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
2011-09-16 10:32:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:33:44 --- ERROR: ErrorException [ 2048 ]: Declaration of Kohana_Calfdb_Product::factory() should be compatible with that of Kohana_Calfdb::factory() ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 10 ]
2011-09-16 10:33:44 --- STRACE: ErrorException [ 2048 ]: Declaration of Kohana_Calfdb_Product::factory() should be compatible with that of Kohana_Calfdb::factory() ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 10 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/product.php(10): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Users/zhaibob/...', 10, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/core.php(496): require('/Users/zhaibob/...')
#2 [internal function]: Kohana_Core::auto_load('Kohana_Calfdb_P...')
#3 /Users/zhaibob/git/calf/modules/calfdb/classes/calfdb/product.php(3): spl_autoload_call('Kohana_Calfdb_P...')
#4 /Users/zhaibob/git/calf/system/classes/kohana/core.php(496): require('/Users/zhaibob/...')
#5 [internal function]: Kohana_Core::auto_load('Calfdb_Product')
#6 /Users/zhaibob/git/calf/application/classes/controller/test.php(29): spl_autoload_call('Calfdb_Product')
#7 [internal function]: Controller_Test->action_index()
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#11 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#12 {main}
2011-09-16 10:35:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-09-16 10:35:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:35:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-09-16 10:35:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:37:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-09-16 10:37:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:37:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-09-16 10:37:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:37:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-09-16 10:37:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:38:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:38:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:38:49 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Calfdb_Product::factory(), called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 16 ]
2011-09-16 10:38:49 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Calfdb_Product::factory(), called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 16 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/product.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/zhaibob/...', 16, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(29): Kohana_Calfdb_Product::factory()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-16 10:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:40:50 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Calfdb_Product::factory(), called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 16 ]
2011-09-16 10:40:50 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Calfdb_Product::factory(), called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/product.php [ 16 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/product.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/zhaibob/...', 16, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(29): Kohana_Calfdb_Product::factory()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-16 10:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:41:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
2011-09-16 10:41:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb_Product::factoty() ~ MODPATH/calfdb/classes/kohana/calfdb.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 10:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:42:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
2011-09-16 10:42:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 272, Array)
#1 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(169): Kohana_Product->get_product_discount_context()
#2 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(58): Kohana_Product->get_product_right_context()
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(12): Kohana_Product->get_product_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(45): Model_Main_Content->get_product_content('223333223', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-16 10:42:30 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
2011-09-16 10:42:30 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 272, Array)
#1 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(169): Kohana_Product->get_product_discount_context()
#2 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(58): Kohana_Product->get_product_right_context()
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(12): Kohana_Product->get_product_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(45): Model_Main_Content->get_product_content('223333223', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-16 10:42:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
2011-09-16 10:42:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 272, Array)
#1 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(169): Kohana_Product->get_product_discount_context()
#2 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(58): Kohana_Product->get_product_right_context()
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(12): Kohana_Product->get_product_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(45): Model_Main_Content->get_product_content('223333223', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-16 10:42:35 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
2011-09-16 10:42:35 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH/calfproduct/classes/kohana/product.php [ 272 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(272): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 272, Array)
#1 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(169): Kohana_Product->get_product_discount_context()
#2 /Users/zhaibob/git/calf/modules/calfproduct/classes/kohana/product.php(58): Kohana_Product->get_product_right_context()
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(12): Kohana_Product->get_product_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(45): Model_Main_Content->get_product_content('223333223', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-16 10:48:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 30 ]
2011-09-16 10:48:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 30 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 30, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 10:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:48:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 103 ]
2011-09-16 10:48:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(103): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 103, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 10:48:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:48:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 10:49:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 103 ]
2011-09-16 10:49:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(103): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 103, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 10:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 10:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 12:00:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:00:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/views/product/right.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfproduct/views/product/content.php(17): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_callmethod->after()
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#14 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#15 {main}
2011-09-16 12:00:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:00:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/views/product/right.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfproduct/views/product/content.php(17): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_callmethod->after()
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#14 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#15 {main}
2011-09-16 12:02:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:02:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/views/product/right.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfproduct/views/product/content.php(17): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_callmethod->after()
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#14 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#15 {main}
2011-09-16 12:05:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:05:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/views/product/right.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfproduct/views/product/content.php(17): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_callmethod->after()
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#14 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#15 {main}
2011-09-16 12:08:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:08:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: sepc ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfproduct/views/product/right.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(50): Kohana_View->__toString()
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-16 12:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 12:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 12:08:22 --- ERROR: ErrorException [ 8 ]: Undefined index: spec ~ APPPATH/classes/controller/test.php [ 40 ]
2011-09-16 12:08:22 --- STRACE: ErrorException [ 8 ]: Undefined index: spec ~ APPPATH/classes/controller/test.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-16 12:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-16 12:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-16 12:27:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function _() ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:27:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function _() ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-16 12:27:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function _() ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
2011-09-16 12:27:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function _() ~ MODPATH/calfproduct/views/product/right.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}