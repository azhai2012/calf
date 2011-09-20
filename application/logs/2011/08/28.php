<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-28 04:35:04 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
2011-08-28 04:35:04 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/azhai2011...', 44, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(44): array_key_exists('id', NULL)
#2 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(21): Kohana_Msc->__construct(NULL)
#3 /home/azhai2011/git/calf/application/classes/controller/test.php(29): Kohana_Msc::factory()
#4 [internal function]: Controller_Test->action_index()
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-08-28 04:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-28 04:36:16 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
2011-08-28 04:36:16 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/azhai2011...', 44, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(44): array_key_exists('id', NULL)
#2 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(21): Kohana_Msc->__construct(NULL)
#3 /home/azhai2011/git/calf/application/classes/controller/test.php(29): Kohana_Msc::factory()
#4 [internal function]: Controller_Test->action_index()
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-08-28 04:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-28 04:36:17 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
2011-08-28 04:36:17 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/azhai2011...', 44, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(44): array_key_exists('id', NULL)
#2 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(21): Kohana_Msc->__construct(NULL)
#3 /home/azhai2011/git/calf/application/classes/controller/test.php(29): Kohana_Msc::factory()
#4 [internal function]: Controller_Test->action_index()
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-08-28 04:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-28 04:36:18 --- ERROR: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
2011-08-28 04:36:18 --- STRACE: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/calfmsc/classes/kohana/msc.php [ 44 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/azhai2011...', 44, Array)
#1 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(44): array_key_exists('id', NULL)
#2 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(21): Kohana_Msc->__construct(NULL)
#3 /home/azhai2011/git/calf/application/classes/controller/test.php(29): Kohana_Msc::factory()
#4 [internal function]: Controller_Test->action_index()
#5 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-08-28 04:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-28 04:44:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function arrat() ~ APPPATH/classes/controller/test.php [ 29 ]
2011-08-28 04:44:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function arrat() ~ APPPATH/classes/controller/test.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-28 04:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-28 04:56:49 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH/classes/controller/test.php [ 30 ]
2011-08-28 04:56:49 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH/classes/controller/test.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-28 04:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-28 04:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}