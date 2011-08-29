<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-29 04:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-29 04:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL text was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-08-29 04:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 04:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 04:30:45 --- ERROR: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 67 ]
2011-08-29 04:30:45 --- STRACE: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 67 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/azhai2011...', 67, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(67): in_array('455533222', NULL)
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(30): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 04:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 04:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:03:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:03:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:04:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:04:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:05:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
2011-08-29 05:05:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: product_compare ~ MODPATH/calfmsc/classes/kohana/msc.php [ 82 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/azhai2011...', 82, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(68): Kohana_Msc->read_product_compare()
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:06:38 --- ERROR: ErrorException [ 8 ]: Undefined index: product_compare1 ~ MODPATH/calfmsc/classes/kohana/msc.php [ 70 ]
2011-08-29 05:06:38 --- STRACE: ErrorException [ 8 ]: Undefined index: product_compare1 ~ MODPATH/calfmsc/classes/kohana/msc.php [ 70 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 70, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 05:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 05:06:39 --- ERROR: ErrorException [ 8 ]: Undefined index: product_compare1 ~ MODPATH/calfmsc/classes/kohana/msc.php [ 70 ]
2011-08-29 05:06:39 --- STRACE: ErrorException [ 8 ]: Undefined index: product_compare1 ~ MODPATH/calfmsc/classes/kohana/msc.php [ 70 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 70, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 05:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 05:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:45:03 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 73 ]
2011-08-29 09:45:03 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 73 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 73, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:45:32 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:45:32 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:45:33 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:45:33 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:45:35 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:45:35 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:45:39 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:45:39 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:29 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:29 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:30 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:30 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:46 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:46 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:47 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:47 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:47 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:47 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:47 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:47 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:50:48 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
2011-08-29 09:50:48 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 75 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 75, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:51:06 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:51:06 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:51:07 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:51:07 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:54:28 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:54:28 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:54:29 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:54:29 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:54:29 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:54:29 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:54:30 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
2011-08-29 09:54:30 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ MODPATH/calfmsc/classes/kohana/msc.php [ 71 ]
--
#0 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/home/azhai2011...', 71, Array)
#1 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#2 [internal function]: Controller_Test->action_index()
#3 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-08-29 09:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 09:55:14 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 74 ]
2011-08-29 09:55:14 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 74 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/azhai2011...', 74, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(74): array_push(NULL, '49922')
#2 /home/azhai2011/git/calf/application/classes/controller/test.php(34): Kohana_Msc->write_product_compare()
#3 [internal function]: Controller_Test->action_index()
#4 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-08-29 09:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 09:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 11:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 11:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 11:01:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:01:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:01:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:01:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:01:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:01:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:03:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:03:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:03:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:03:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:03:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:03:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:03:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:03:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:06:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:06:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:06:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:06:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:08:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:08:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 11:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 11:10:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:10:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:10:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:10:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:11:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:11:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:12:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:12:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:12:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:12:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:12:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:12:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:12:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:12:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:13:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:13:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:13:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:13:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:14:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
2011-08-29 11:14:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Msc::get_compare_content() ~ APPPATH/classes/controller/callmethodajax.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-29 11:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 11:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-29 11:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-29 11:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}