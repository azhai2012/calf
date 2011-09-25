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