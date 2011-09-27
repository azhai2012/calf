<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-27 07:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 07:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 07:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 07:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 07:19:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 07:19:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 07:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 07:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:06:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH/classes/controller/test.php [ 50 ]
2011-09-27 08:06:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH/classes/controller/test.php [ 50 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 50, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:07:48 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:07:48 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:17 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:17 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:19 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:19 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:49 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:49 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:50 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:50 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:50 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:50 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:50 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:50 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:09:51 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:09:51 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:25 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:25 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:26 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:26 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:26 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:26 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:27 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:27 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:10:28 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:10:28 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:12:55 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:12:55 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:13:20 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:13:20 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:13:21 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:13:21 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:13:55 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:13:55 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:13:56 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:13:56 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:13:57 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:13:57 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:14:21 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:14:21 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:14:22 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:14:22 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:14:22 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:14:22 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:14:23 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:14:23 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:15:59 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:15:59 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:00 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:00 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:01 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:01 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:02 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:02 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:04 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:04 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:06 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:06 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:19 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:19 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:20 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:16:20 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 47, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:51 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 48 ]
2011-09-27 08:16:51 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 48, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(48): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:16:52 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 48 ]
2011-09-27 08:16:52 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ APPPATH/classes/controller/test.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Users/zhaibob/...', 48, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(48): array_key_exists(Array, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-27 08:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:17:37 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/test.php [ 48 ]
2011-09-27 08:17:37 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/test.php [ 48 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(48): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 48, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:17:37 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/test.php [ 48 ]
2011-09-27 08:17:37 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/test.php [ 48 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(48): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/zhaibob/...', 48, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:17:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:17:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:19:19 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:19:19 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:19:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 47 ]
2011-09-27 08:19:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/test.php [ 47 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(47): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 47, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-27 08:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:38:34 --- ERROR: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:38:34 --- STRACE: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shops/content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shops/content', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshops/classes/kohana/shops.php(65): Kohana_View::factory('shops/content')
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(34): Kohana_Shops->get_shops_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(41): Model_Main_Content->get_shops_content('', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-27 08:41:17 --- ERROR: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:41:17 --- STRACE: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shops/content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shops/content', NULL)
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(78): Kohana_View::factory('shops/content')
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-27 08:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:42:46 --- ERROR: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:42:46 --- STRACE: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('content', NULL)
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(78): Kohana_View::factory('content')
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-27 08:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:42:47 --- ERROR: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:42:47 --- STRACE: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('content', NULL)
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(78): Kohana_View::factory('content')
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-27 08:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:42:48 --- ERROR: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:42:48 --- STRACE: View_Exception [ 0 ]: The requested view content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('content', NULL)
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(78): Kohana_View::factory('content')
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-27 08:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:44:36 --- ERROR: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:44:36 --- STRACE: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shops/content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shops/content', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshops/classes/kohana/shops.php(65): Kohana_View::factory('shops/content')
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(34): Kohana_Shops->get_shops_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(41): Model_Main_Content->get_shops_content('', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-27 08:44:39 --- ERROR: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:44:39 --- STRACE: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shops/content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shops/content', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshops/classes/kohana/shops.php(65): Kohana_View::factory('shops/content')
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(34): Kohana_Shops->get_shops_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(41): Model_Main_Content->get_shops_content('', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-27 08:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:44:43 --- ERROR: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-27 08:44:43 --- STRACE: View_Exception [ 0 ]: The requested view shops/content could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shops/content')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shops/content', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshops/classes/kohana/shops.php(65): Kohana_View::factory('shops/content')
#3 /Users/zhaibob/git/calf/application/classes/model/main/content.php(34): Kohana_Shops->get_shops_content()
#4 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(41): Model_Main_Content->get_shops_content('', Array)
#5 [internal function]: Controller_callmethod->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-27 08:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 08:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 08:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-27 09:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-27 09:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}