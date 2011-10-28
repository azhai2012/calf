<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-27 07:43:41 --- ERROR: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 69 ]
2011-10-27 07:43:41 --- STRACE: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 69 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 69, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:45:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 07:45:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:45:26 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 07:45:26 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:46:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 07:46:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:46:51 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/calfadmin/classes/controller/post.php [ 49 ]
2011-10-27 07:46:51 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/calfadmin/classes/controller/post.php [ 49 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 49, Array)
#1 [internal function]: Controller_Post->action_product()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:47:18 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/calfadmin/classes/controller/post.php [ 49 ]
2011-10-27 07:47:18 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/calfadmin/classes/controller/post.php [ 49 ]
--
#0 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 49, Array)
#1 [internal function]: Controller_Post->action_product()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:48:08 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
2011-10-27 07:48:08 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 69, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:48:20 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
2011-10-27 07:48:20 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 69, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:48:52 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
2011-10-27 07:48:52 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 69, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:49:17 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 70 ]
2011-10-27 07:49:17 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 70 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 70, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:49:51 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 70 ]
2011-10-27 07:49:51 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 70 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 70, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:50:14 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoCursor::$_id ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 07:50:14 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoCursor::$_id ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 67, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:50:47 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 07:50:47 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:53:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:53:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:53:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:53:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:53:54 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:53:54 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(71): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 71, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:57:27 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:57:27 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:57:52 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:57:52 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:58:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:58:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:58:17 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:58:17 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 07:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:58:33 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$id ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:58:33 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$id ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(71): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 71, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:59:05 --- ERROR: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
2011-10-27 07:59:05 --- STRACE: ErrorException [ 8 ]: Undefined index: 4ea9516cec56370201000000 ~ APPPATH/classes/controller/test.php [ 69 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(69): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 69, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 07:59:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 07:59:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(71): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 71, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 07:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 07:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:02:33 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoCursor::$id ~ APPPATH/classes/controller/test.php [ 68 ]
2011-10-27 08:02:33 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoCursor::$id ~ APPPATH/classes/controller/test.php [ 68 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(68): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 68, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:02:54 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoCursor::$_id ~ APPPATH/classes/controller/test.php [ 68 ]
2011-10-27 08:02:54 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoCursor::$_id ~ APPPATH/classes/controller/test.php [ 68 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(68): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 68, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:08:18 --- ERROR: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #3 is expected to be an array or a sort flag ~ MODPATH/calfadmin/classes/controller/post.php [ 55 ]
2011-10-27 08:08:18 --- STRACE: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #3 is expected to be an array or a sort flag ~ MODPATH/calfadmin/classes/controller/post.php [ 55 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_multisort...', '/Users/zhaibob/...', 55, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(55): array_multisort(Array, 4, Object(MongoCursor))
#2 [internal function]: Controller_Post->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 08:08:22 --- ERROR: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #3 is expected to be an array or a sort flag ~ MODPATH/calfadmin/classes/controller/post.php [ 55 ]
2011-10-27 08:08:22 --- STRACE: ErrorException [ 2 ]: array_multisort() [function.array-multisort]: Argument #3 is expected to be an array or a sort flag ~ MODPATH/calfadmin/classes/controller/post.php [ 55 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_multisort...', '/Users/zhaibob/...', 55, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(55): array_multisort(Array, 4, Object(MongoCursor))
#2 [internal function]: Controller_Post->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 08:21:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 08:21:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 67, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:21:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 08:21:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 08:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:23:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 67 ]
2011-10-27 08:23:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 67 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 67, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:24:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 70 ]
2011-10-27 08:24:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 08:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:42:32 --- ERROR: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 08:42:32 --- STRACE: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 08:43:06 --- ERROR: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 08:43:06 --- STRACE: ErrorException [ 8 ]: Undefined index: display_name ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 08:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 08:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:02:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:02:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:03:11 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:03:11 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:03:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:03:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:03:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:03:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:03:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:03:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:04:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:04:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:05:05 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:05:05 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:05:35 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 73 ]
2011-10-27 09:05:35 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:05:59 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:05:59 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$display_name ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:06:18 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
2011-10-27 09:06:18 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 73, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:06:32 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
2011-10-27 09:06:32 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 73, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:06:34 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
2011-10-27 09:06:34 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$_id ~ APPPATH/classes/controller/test.php [ 73 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(73): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 73, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:06:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:06:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:07:23 --- ERROR: ErrorException [ 8 ]: Undefined index: _id ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 09:07:23 --- STRACE: ErrorException [ 8 ]: Undefined index: _id ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 71, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:07:40 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 09:07:40 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(71): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 71, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:07:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:07:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:11:02 --- ERROR: ErrorException [ 2 ]: array_intersect_key() [function.array-intersect-key]: at least 2 parameters are required, 1 given ~ APPPATH/classes/controller/test.php [ 68 ]
2011-10-27 09:11:02 --- STRACE: ErrorException [ 2 ]: array_intersect_key() [function.array-intersect-key]: at least 2 parameters are required, 1 given ~ APPPATH/classes/controller/test.php [ 68 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', '/Users/zhaibob/...', 68, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(68): array_intersect_key(Object(MongoCursor))
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 09:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:14:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
2011-10-27 09:14:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 74 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(74): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 74, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:22:23 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 09:22:23 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:25:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
2011-10-27 09:25:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoCursor as array ~ APPPATH/classes/controller/test.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:26:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 66 ]
2011-10-27 09:26:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 66 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 66, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:27:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 66 ]
2011-10-27 09:27:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ APPPATH/classes/controller/test.php [ 66 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 66, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:39:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
2011-10-27 09:39:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 09:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:40:02 --- ERROR: ErrorException [ 8 ]: Undefined property: MongoId::$a ~ APPPATH/classes/controller/test.php [ 79 ]
2011-10-27 09:40:02 --- STRACE: ErrorException [ 8 ]: Undefined property: MongoId::$a ~ APPPATH/classes/controller/test.php [ 79 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/zhaibob/...', 79, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 09:40:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 78 ]
2011-10-27 09:40:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/test.php [ 78 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(78): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/zhaibob/...', 78, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 09:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 09:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:03:48 --- ERROR: ErrorException [ 8 ]: Use of undefined constant a - assumed 'a' ~ APPPATH/classes/controller/test.php [ 80 ]
2011-10-27 10:03:48 --- STRACE: ErrorException [ 8 ]: Use of undefined constant a - assumed 'a' ~ APPPATH/classes/controller/test.php [ 80 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(80): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 80, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 10:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:04:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/test.php [ 80 ]
2011-10-27 10:04:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH/classes/controller/test.php [ 80 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(80): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 80, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 10:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:07:40 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
2011-10-27 10:07:40 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:07:58 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
2011-10-27 10:07:58 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:09:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/test.php [ 80 ]
2011-10-27 10:09:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/test.php [ 80 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(80): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 80, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 10:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:10:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/test.php [ 82 ]
2011-10-27 10:10:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/test.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(82): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/zhaibob/...', 82, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-10-27 10:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:14:19 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 81 ]
2011-10-27 10:14:19 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:15:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
2011-10-27 10:15:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:15:33 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
2011-10-27 10:15:33 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:15:38 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
2011-10-27 10:15:38 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:16:12 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 83 ]
2011-10-27 10:16:12 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:16:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 83 ]
2011-10-27 10:16:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type MongoId as array ~ APPPATH/classes/controller/test.php [ 83 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:39:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function skip() ~ APPPATH/classes/controller/test.php [ 75 ]
2011-10-27 10:39:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function skip() ~ APPPATH/classes/controller/test.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 10:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 10:59:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: skip ~ MODPATH/mango/classes/mangodb.php [ 262 ]
2011-10-27 10:59:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: skip ~ MODPATH/mango/classes/mangodb.php [ 262 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(262): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 262, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 10:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 10:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:01:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: skip ~ MODPATH/mango/classes/mangodb.php [ 433 ]
2011-10-27 11:01:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: skip ~ MODPATH/mango/classes/mangodb.php [ 433 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(433): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 433, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(263): MangoDB->_call('find_limit', Array)
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array)
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-10-27 11:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:05:07 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to MangoDB::find_limit() must be an array, null given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 75 and defined ~ MODPATH/mango/classes/mangodb.php [ 256 ]
2011-10-27 11:05:07 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to MangoDB::find_limit() must be an array, null given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 75 and defined ~ MODPATH/mango/classes/mangodb.php [ 256 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(256): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 256, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', NULL, NULL, Array)
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:05:44 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
2011-10-27 11:05:44 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 434, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(434): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:05:48 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
2011-10-27 11:05:48 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 434, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(434): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:09:15 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
2011-10-27 11:09:15 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 434 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 434, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(434): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:10:33 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:10:33 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:10:36 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:10:36 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:11:01 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:11:01 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:11:05 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:11:05 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:11:07 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:11:07 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:11:19 --- ERROR: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
2011-10-27 11:11:19 --- STRACE: ErrorException [ 2 ]: MongoCursor::skip() expects parameter 1 to be long, array given ~ MODPATH/mango/classes/mangodb.php [ 435 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'MongoCursor::sk...', '/Users/zhaibob/...', 435, Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(435): MongoCursor->skip(Array)
#2 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(264): MangoDB->_call('find_limit', Array)
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(75): MangoDB->find_limit('products', Array, Array, Array)
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 11:11:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:11:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:20:57 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
2011-10-27 11:20:57 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(40): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:21:13 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
2011-10-27 11:21:13 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(40): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:21:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:21:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:22:06 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
2011-10-27 11:22:06 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(40): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:22:08 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
2011-10-27 11:22:08 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Calfdb_Admin_Product::get_admin_product_manager_array_data() must be an array, none given, called in /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php on line 67 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 40 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(40): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/zhaibob/...', 40, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:23:33 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
2011-10-27 11:23:33 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 76, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:24:48 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
2011-10-27 11:24:48 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 76, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:24:50 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
2011-10-27 11:24:50 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 76, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:24:52 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
2011-10-27 11:24:52 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 76, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:28:57 --- ERROR: ErrorException [ 1 ]: Cannot access private property Kohana_Calfdb_Admin::$_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 75 ]
2011-10-27 11:28:57 --- STRACE: ErrorException [ 1 ]: Cannot access private property Kohana_Calfdb_Admin::$_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 11:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:31:45 --- ERROR: ErrorException [ 1 ]: Undefined class constant '_data' ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 75 ]
2011-10-27 11:31:45 --- STRACE: ErrorException [ 1 ]: Undefined class constant '_data' ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 11:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:33:08 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
2011-10-27 11:33:08 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 11:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:37:18 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
2011-10-27 11:37:18 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 11:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:38:13 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
2011-10-27 11:38:13 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 76 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 76, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:38:50 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
2011-10-27 11:38:50 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 77, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:41:02 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
2011-10-27 11:41:02 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 77, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:41:04 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
2011-10-27 11:41:04 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 77 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 77, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:44:22 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 28 ]
2011-10-27 11:44:22 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 11:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:46:04 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 86 ]
2011-10-27 11:46:04 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 86 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 86, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:46:07 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 86 ]
2011-10-27 11:46:07 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 86 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 86, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:47:32 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:47:32 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:48:23 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:48:23 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:48:27 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:48:27 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:48:35 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:48:35 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:48:44 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:48:44 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:49:51 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:49:51 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:50:50 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:50:50 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:50:52 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:50:52 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:51:27 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 11:51:27 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 11:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:53:01 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:53:01 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:53:11 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:53:11 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:53:48 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:53:48 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:54:42 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:54:42 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:57:49 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:57:49 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:58:11 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:58:11 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 11:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 11:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 11:58:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 11:58:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:01:34 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:01:34 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:01:37 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:01:37 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:01:47 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:01:47 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:05:25 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:05:25 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:07:37 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:07:37 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:08:08 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
2011-10-27 12:08:08 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 83, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:08:30 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
2011-10-27 12:08:30 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 83, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:10:03 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
2011-10-27 12:10:03 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 83 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 83, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/post.php(36): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Post->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:11:50 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:11:50 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:12:36 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:12:36 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:13:12 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:13:12 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:14:16 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:14:16 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:15:07 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:15:07 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:15:45 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 88 ]
2011-10-27 12:15:45 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 88 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 88, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:16:32 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:16:32 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:17:13 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
2011-10-27 12:17:13 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin_Product::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 29 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 15 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(15): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 15, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Calfdb_Admin_Product->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(24): Kohana_Calfdb_Admin::execute('Product', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/product.php(18): Kohana_Admin_Product->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(97): Kohana_Admin_Product::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:18:59 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Calfdb_Admin_Product ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-10-27 12:18:59 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Calfdb_Admin_Product ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 12:19:51 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:19:51 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:20:11 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:20:11 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:21:25 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:21:25 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:22:31 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:22:31 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:22:34 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
2011-10-27 12:22:34 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(32): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 32, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/home.php(24): Kohana_Calfdb_Admin::execute('Home', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/home.php(18): Kohana_Admin_Home->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(95): Kohana_Admin_Home::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:22:36 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
2011-10-27 12:22:36 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Calfdb_Admin::__construct() must be an array, null given, called in /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php on line 28 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 32 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(32): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/zhaibob/...', 32, Array)
#1 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(28): Kohana_Calfdb_Admin->__construct('', NULL)
#2 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/home.php(24): Kohana_Calfdb_Admin::execute('Home', '', NULL)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/kohana/admin/home.php(18): Kohana_Admin_Home->__construct('', NULL)
#4 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/admin.php(95): Kohana_Admin_Home::factory('')
#5 [internal function]: Controller_Admin->action_callmethod()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-10-27 12:23:49 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 88 ]
2011-10-27 12:23:49 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 88 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 88, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:26:04 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:26:04 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:26:06 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:26:06 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:26:36 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:26:36 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:27:09 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:27:09 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:27:11 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:27:11 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 12:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 12:27:16 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:27:16 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:29:45 --- ERROR: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
2011-10-27 12:29:45 --- STRACE: ErrorException [ 8 ]: Undefined index: prepage ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(87): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 87, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:30:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 89 ]
2011-10-27 12:30:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 89 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 89, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 12:41:59 --- INFO: 0
2011-10-27 12:42:30 --- INFO: 0
2011-10-27 12:44:14 --- INFO: 1
2011-10-27 12:44:17 --- INFO: 15
2011-10-27 12:44:23 --- INFO: 15
2011-10-27 12:44:25 --- INFO: 195
2011-10-27 12:45:30 --- INFO: 0
2011-10-27 12:45:33 --- INFO: 0
2011-10-27 12:45:34 --- INFO: 0
2011-10-27 12:45:34 --- INFO: 0
2011-10-27 12:46:08 --- INFO: 15
2011-10-27 12:46:14 --- INFO: 210
2011-10-27 12:46:15 --- INFO: 210
2011-10-27 12:46:16 --- INFO: 210
2011-10-27 12:46:17 --- INFO: 210
2011-10-27 12:46:17 --- INFO: 210
2011-10-27 12:46:19 --- INFO: 15
2011-10-27 12:47:04 --- INFO: 1
2011-10-27 12:47:05 --- INFO: 15
2011-10-27 12:48:01 --- INFO: 1
2011-10-27 12:48:03 --- INFO: 2
2011-10-27 12:50:01 --- INFO: 1
2011-10-27 12:50:03 --- INFO: 2
2011-10-27 12:50:06 --- INFO: 1
2011-10-27 12:50:07 --- INFO: 2
2011-10-27 12:50:10 --- INFO: 1
2011-10-27 12:50:11 --- INFO: 2
2011-10-27 12:50:13 --- INFO: 1
2011-10-27 12:50:14 --- INFO: 2
2011-10-27 12:50:16 --- INFO: 2
2011-10-27 12:50:16 --- INFO: 2
2011-10-27 12:50:17 --- INFO: 2
2011-10-27 12:50:18 --- INFO: 2
2011-10-27 13:04:13 --- INFO: 1
2011-10-27 13:04:13 --- INFO: 1
2011-10-27 13:04:16 --- INFO: 1
2011-10-27 13:04:16 --- INFO: 1
2011-10-27 13:07:29 --- INFO: 1
2011-10-27 13:07:29 --- INFO: 1
2011-10-27 13:07:29 --- INFO: 1
2011-10-27 13:07:30 --- INFO: 1
2011-10-27 13:07:30 --- INFO: 1
2011-10-27 13:07:30 --- INFO: 1
2011-10-27 13:07:30 --- INFO: 1
2011-10-27 13:08:16 --- INFO: 1
2011-10-27 13:08:54 --- INFO: 1
2011-10-27 13:08:54 --- INFO: 1
2011-10-27 13:08:55 --- INFO: 1
2011-10-27 13:08:55 --- INFO: 1
2011-10-27 13:08:58 --- INFO: 1
2011-10-27 13:08:58 --- INFO: 1
2011-10-27 13:09:21 --- INFO: 1
2011-10-27 13:09:21 --- INFO: 1
2011-10-27 13:09:22 --- INFO: 1
2011-10-27 13:09:22 --- INFO: 1
2011-10-27 13:09:22 --- INFO: 1
2011-10-27 13:09:23 --- INFO: 1
2011-10-27 13:10:01 --- INFO: 1
2011-10-27 13:10:01 --- INFO: 1
2011-10-27 13:10:02 --- INFO: 1
2011-10-27 13:10:02 --- INFO: 1
2011-10-27 13:10:04 --- INFO: 1
2011-10-27 13:10:04 --- INFO: 1
2011-10-27 13:10:06 --- INFO: 1
2011-10-27 13:10:06 --- INFO: 1
2011-10-27 13:10:06 --- INFO: 1
2011-10-27 13:10:06 --- INFO: 1
2011-10-27 13:10:07 --- INFO: 1
2011-10-27 13:10:07 --- INFO: 1
2011-10-27 13:10:07 --- INFO: 1
2011-10-27 13:10:31 --- INFO: 1
2011-10-27 13:10:32 --- INFO: 1
2011-10-27 13:10:35 --- INFO: 1
2011-10-27 13:10:35 --- INFO: 1
2011-10-27 13:10:35 --- INFO: 1
2011-10-27 13:10:36 --- INFO: 1
2011-10-27 13:10:36 --- INFO: 1
2011-10-27 13:10:36 --- INFO: 1
2011-10-27 13:10:36 --- INFO: 1
2011-10-27 13:13:21 --- INFO: 1
2011-10-27 13:13:21 --- INFO: 1
2011-10-27 13:13:24 --- INFO: 1
2011-10-27 13:13:24 --- INFO: 1
2011-10-27 13:13:24 --- INFO: 1
2011-10-27 13:13:24 --- INFO: 1
2011-10-27 13:13:25 --- INFO: 1
2011-10-27 13:13:25 --- INFO: 1
2011-10-27 13:13:25 --- INFO: 1
2011-10-27 13:13:39 --- INFO: 1
2011-10-27 13:13:39 --- INFO: 1
2011-10-27 13:13:43 --- INFO: 1
2011-10-27 13:13:43 --- INFO: 1
2011-10-27 13:13:43 --- INFO: 1
2011-10-27 13:13:43 --- INFO: 1
2011-10-27 13:13:43 --- INFO: 1
2011-10-27 13:13:44 --- INFO: 1
2011-10-27 13:13:44 --- INFO: 1
2011-10-27 13:14:11 --- INFO: 1
2011-10-27 13:14:11 --- INFO: 1
2011-10-27 13:14:13 --- INFO: 1
2011-10-27 13:14:13 --- INFO: 1
2011-10-27 13:14:13 --- INFO: 1
2011-10-27 13:14:14 --- INFO: 1
2011-10-27 13:14:14 --- INFO: 1
2011-10-27 13:14:14 --- INFO: 1
2011-10-27 13:14:14 --- INFO: 1
2011-10-27 13:15:01 --- INFO: 1
2011-10-27 13:15:02 --- INFO: 1
2011-10-27 13:15:03 --- INFO: -1
2011-10-27 13:15:04 --- INFO: 1
2011-10-27 13:15:05 --- INFO: -1
2011-10-27 13:15:06 --- INFO: -1
2011-10-27 13:15:07 --- INFO: 1
2011-10-27 13:15:46 --- INFO: 1
2011-10-27 13:15:47 --- INFO: 1
2011-10-27 13:15:47 --- INFO: -1
2011-10-27 13:15:51 --- INFO: 1
2011-10-27 13:15:52 --- INFO: -1
2011-10-27 13:15:53 --- INFO: -1
2011-10-27 13:15:54 --- INFO: 1
2011-10-27 13:15:55 --- INFO: 1
2011-10-27 13:15:55 --- INFO: -1
2011-10-27 13:15:56 --- INFO: -1
2011-10-27 13:15:57 --- INFO: 1
2011-10-27 13:15:57 --- INFO: 1
2011-10-27 13:15:58 --- INFO: -1
2011-10-27 13:16:03 --- INFO: -1
2011-10-27 13:16:05 --- INFO: -1
2011-10-27 13:16:06 --- INFO: 1
2011-10-27 13:16:09 --- INFO: -1
2011-10-27 13:16:09 --- INFO: 1
2011-10-27 13:16:14 --- INFO: 1
2011-10-27 13:16:16 --- INFO: 1
2011-10-27 13:16:16 --- INFO: -1
2011-10-27 13:16:17 --- INFO: -1
2011-10-27 13:16:18 --- INFO: 1
2011-10-27 13:16:19 --- INFO: 1
2011-10-27 13:16:19 --- INFO: -1
2011-10-27 13:16:20 --- INFO: -1
2011-10-27 13:16:20 --- INFO: 1
2011-10-27 20:00:30 --- ERROR: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
2011-10-27 20:00:30 --- STRACE: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 103, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:05:01 --- ERROR: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
2011-10-27 20:05:01 --- STRACE: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 103, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:05:16 --- ERROR: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
2011-10-27 20:05:16 --- STRACE: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(103): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 103, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:08:29 --- ERROR: ErrorException [ 1 ]: Cannot access private property Kohana_Calfdb_Admin::$_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 68 ]
2011-10-27 20:08:29 --- STRACE: ErrorException [ 1 ]: Cannot access private property Kohana_Calfdb_Admin::$_data ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:09:16 --- ERROR: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 73 ]
2011-10-27 20:09:16 --- STRACE: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 73 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 73, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:10:59 --- ERROR: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 73 ]
2011-10-27 20:10:59 --- STRACE: ErrorException [ 8 ]: Undefined index: sortorder ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 73 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(73): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 73, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(67): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:19:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
2011-10-27 20:19:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 82, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:19:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
2011-10-27 20:19:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 82, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:19:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
2011-10-27 20:19:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 82, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:21:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: 1 ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
2011-10-27 20:21:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: 1 ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 82, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:21:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: 1 ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
2011-10-27 20:21:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: 1 ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 82 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 82, Array)
#1 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#2 [internal function]: Controller_Home->action_product()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-10-27 20:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:43:07 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
2011-10-27 20:43:07 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:43:08 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
2011-10-27 20:43:08 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:43:11 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
2011-10-27 20:43:11 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana_Calfdb_Admin::$_calfdb ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:45:22 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Calfdb_Admin ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 18 ]
2011-10-27 20:45:22 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Calfdb_Admin ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:49:18 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 70 ]
2011-10-27 20:49:18 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:49:27 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 70 ]
2011-10-27 20:49:27 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:51:54 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:51:54 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:51:57 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:51:57 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:52:00 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:52:00 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 20:59:24 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:59:24 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:59:26 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:59:26 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:59:39 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
2011-10-27 20:59:39 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 20:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 20:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 21:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 21:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 22:39:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method MangoDB::lastError() ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 62 ]
2011-10-27 22:39:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method MangoDB::lastError() ~ MODPATH/calfdb/classes/kohana/calfdb/admin/product.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-27 22:43:31 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:43:31 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(56): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:43:33 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:43:33 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(56): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:48:40 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:48:40 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:48:42 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:48:42 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:48:48 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:48:48 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 22:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 22:49:22 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:49:22 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 22:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 22:49:25 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:49:25 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 22:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 22:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-27 22:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-27 22:50:53 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:50:53 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:50:55 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:50:55 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-10-27 22:50:56 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
2011-10-27 22:50:56 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mango/classes/mangodb.php [ 427 ]
--
#0 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(427): MongoCollection->count(Array)
#1 /Users/zhaibob/git/calf/modules/mango/classes/mangodb.php(235): MangoDB->_call('count', Array)
#2 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin/product.php(59): MangoDB->count('products', Array)
#3 /Users/zhaibob/git/calf/modules/calfadmin/classes/controller/home.php(69): Kohana_Calfdb_Admin_Product->get_admin_product_manager_array_data()
#4 [internal function]: Controller_Home->action_product()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}