<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-25 11:16:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
2011-09-25 11:16:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 11:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:17:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
2011-09-25 11:17:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 11:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:18:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
2011-09-25 11:18:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfcommunity/classes/kohana/community.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 11:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:19:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ MODPATH/calfcommunity/classes/kohana/community.php [ 37 ]
2011-09-25 11:19:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ MODPATH/calfcommunity/classes/kohana/community.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 11:19:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfcommunity/classes/kohana/community.php [ 30 ]
2011-09-25 11:19:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_data ~ MODPATH/calfcommunity/classes/kohana/community.php [ 30 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/classes/kohana/community.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 30, Array)
#1 /Users/zhaibob/git/calf/modules/calfcommunity/classes/kohana/community.php(20): Kohana_Community->get_community_left_content()
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Community->get_community_content()
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-25 11:23:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfdb/classes/kohana/calfdb/community.php [ 34 ]
2011-09-25 11:23:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH/calfdb/classes/kohana/calfdb/community.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 11:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:25:35 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
2011-09-25 11:25:35 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:25:36 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
2011-09-25 11:25:36 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:26:56 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
2011-09-25 11:26:56 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:26:59 --- ERROR: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
2011-09-25 11:26:59 --- STRACE: ErrorException [ 8 ]: Undefined index: lists ~ MODPATH/calfcommunity/views/community/left.php [ 11 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 11, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:13 --- ERROR: ErrorException [ 8 ]: Undefined index: product ~ MODPATH/calfcommunity/views/community/left.php [ 36 ]
2011-09-25 11:27:13 --- STRACE: ErrorException [ 8 ]: Undefined index: product ~ MODPATH/calfcommunity/views/community/left.php [ 36 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 36, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:14 --- ERROR: ErrorException [ 8 ]: Undefined index: product ~ MODPATH/calfcommunity/views/community/left.php [ 36 ]
2011-09-25 11:27:14 --- STRACE: ErrorException [ 8 ]: Undefined index: product ~ MODPATH/calfcommunity/views/community/left.php [ 36 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/left.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 36, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(15): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#6 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#7 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#9 [internal function]: Controller_Test->action_index()
#10 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#11 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#13 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#14 {main}
2011-09-25 11:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:29:56 --- ERROR: ErrorException [ 8 ]: Undefined index: titles ~ MODPATH/calfcommunity/views/community/right.php [ 17 ]
2011-09-25 11:29:56 --- STRACE: ErrorException [ 8 ]: Undefined index: titles ~ MODPATH/calfcommunity/views/community/right.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/right.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calfcommunity/views/community/content.php(18): Kohana_View->__toString()
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
2011-09-25 11:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 11:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 11:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 19:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 19:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 19:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 19:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 19:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 19:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 19:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 19:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 19:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 19:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:05:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdiscounts/classes/kohana/discounts.php [ 51 ]
2011-09-25 20:05:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdiscounts/classes/kohana/discounts.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 20:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:05:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:05:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:06:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdiscounts/classes/kohana/discounts.php [ 51 ]
2011-09-25 20:06:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calfdiscounts/classes/kohana/discounts.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 20:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:06:41 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: get_new_list ~ SYSPATH/classes/kohana/view.php [ 171 ]
2011-09-25 20:06:41 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: get_new_list ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdiscounts/classes/kohana/discounts.php(56): Kohana_View->__get('get_new_list')
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Discounts->get_discounts_content()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-25 20:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:07:10 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: get_new_list ~ SYSPATH/classes/kohana/view.php [ 171 ]
2011-09-25 20:07:10 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: get_new_list ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdiscounts/classes/kohana/discounts.php(56): Kohana_View->__get('get_new_list')
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Discounts->get_discounts_content()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-25 20:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 20:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 20:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:46:13 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:46:13 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:46:16 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:46:16 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:47:35 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:47:35 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:49:53 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:49:53 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:49:54 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:49:54 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:49:55 --- ERROR: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
2011-09-25 21:49:55 --- STRACE: ErrorException [ 1 ]: Class 'Calfdb_Tuan' not found ~ MODPATH/calftuan/classes/kohana/tuan.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:50:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
2011-09-25 21:50:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:50:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
2011-09-25 21:50:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:52:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
2011-09-25 21:52:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-25 21:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 21:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 21:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/discount.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p011.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/p010.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/community.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/2199/0293c50f-c8ac-4291-b897-6d1a3363876c.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_tit.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/i/bg_p.jpg ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-25 22:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-25 22:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}