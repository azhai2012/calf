<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-24 21:35:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 167 ]
2011-09-24 21:35:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 167 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:38:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 167 ]
2011-09-24 21:38:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 167 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:39:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 180 ]
2011-09-24 21:39:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/account.php [ 180 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:39:39 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_Calfdb_Account' not found ~ MODPATH/calfdb/classes/calfdb/account.php [ 10 ]
2011-09-24 21:39:39 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_Calfdb_Account' not found ~ MODPATH/calfdb/classes/calfdb/account.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:40:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/calfaccount/classes/kohana/account.php [ 103 ]
2011-09-24 21:40:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/calfaccount/classes/kohana/account.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 103, Array)
#1 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(43): Kohana_Account->get_account_order_list()
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_account_content()
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-24 21:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:40:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/calfaccount/classes/kohana/account.php [ 103 ]
2011-09-24 21:40:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH/calfaccount/classes/kohana/account.php [ 103 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 103, Array)
#1 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(43): Kohana_Account->get_account_order_list()
#2 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_account_content()
#3 [internal function]: Controller_Test->action_index()
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#7 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#8 {main}
2011-09-24 21:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:43:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH/calfaccount/views/account/idorder.php [ 50 ]
2011-09-24 21:43:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH/calfaccount/views/account/idorder.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:44:21 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfaccount/views/account/idorder.php [ 13 ]
2011-09-24 21:44:21 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfaccount/views/account/idorder.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:44:22 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfaccount/views/account/idorder.php [ 13 ]
2011-09-24 21:44:22 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfaccount/views/account/idorder.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:46:10 --- ERROR: View_Exception [ 0 ]: The requested view account/wishlist could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-24 21:46:10 --- STRACE: View_Exception [ 0 ]: The requested view account/wishlist could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('account/wishlis...')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('account/wishlis...', NULL)
#2 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(140): Kohana_View::factory('account/wishlis...')
#3 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_wishlist_list('a01')
#4 [internal function]: Controller_Test->action_index()
#5 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#9 {main}
2011-09-24 21:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:47:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ MODPATH/calfaccount/views/account/pointslist.php [ 33 ]
2011-09-24 21:47:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ MODPATH/calfaccount/views/account/pointslist.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-24 21:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:48:58 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/calfaccount/views/account/pointslist.php [ 26 ]
2011-09-24 21:48:58 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/calfaccount/views/account/pointslist.php [ 26 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/views/account/pointslist.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 26, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-24 21:51:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
2011-09-24 21:51:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(198): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 198, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_mysms_list()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-24 21:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:51:51 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
2011-09-24 21:51:51 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(198): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 198, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_mysms_list()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-24 21:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:51:52 --- ERROR: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
2011-09-24 21:51:52 --- STRACE: ErrorException [ 8 ]: Use of undefined constant _template_mysms - assumed '_template_mysms' ~ MODPATH/calfaccount/classes/kohana/account.php [ 198 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/classes/kohana/account.php(198): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 198, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(31): Kohana_Account->get_mysms_list()
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-09-24 21:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:52:31 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/calfaccount/views/account/myquestion.php [ 22 ]
2011-09-24 21:52:31 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ MODPATH/calfaccount/views/account/myquestion.php [ 22 ]
--
#0 /Users/zhaibob/git/calf/modules/calfaccount/views/account/myquestion.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 22, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(34): Kohana_View->__toString()
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-24 21:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 21:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 21:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 22:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 22:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 22:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 22:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/bg_myddorder.gif ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-24 22:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-24 22:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: account/images/promotion_icon/icon_102.png ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}