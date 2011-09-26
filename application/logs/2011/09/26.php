<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-26 01:35:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 49 ]
2011-09-26 01:35:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 49 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 49, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-26 01:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-09-26 01:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-09-26 01:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:36:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:36:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:40:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: _array_data ~ APPPATH/classes/controller/test.php [ 64 ]
2011-09-26 01:40:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: _array_data ~ APPPATH/classes/controller/test.php [ 64 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 64, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-26 01:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:42:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: _array_data ~ APPPATH/classes/controller/test.php [ 64 ]
2011-09-26 01:42:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: _array_data ~ APPPATH/classes/controller/test.php [ 64 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 64, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-26 01:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:50:17 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/calfmain/views/main/content.php [ 40 ]
2011-09-26 01:50:17 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/calfmain/views/main/content.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfmain/views/main/content.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(65): Kohana_View->__toString()
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-26 01:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 01:50:33 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/calfmain/views/main/content.php [ 40 ]
2011-09-26 01:50:33 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ MODPATH/calfmain/views/main/content.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfmain/views/main/content.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(36): Kohana_View->__toString()
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-26 01:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 01:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-26 02:13:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 67 ]
2011-09-26 02:13:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 67, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-09-26 02:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-26 02:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}