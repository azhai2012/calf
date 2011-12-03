<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-28 21:37:54 --- ERROR: ErrorException [ 4096 ]: Object of class Date could not be converted to string ~ APPPATH/classes/controller/test.php [ 115 ]
2011-11-28 21:37:54 --- STRACE: ErrorException [ 4096 ]: Object of class Date could not be converted to string ~ APPPATH/classes/controller/test.php [ 115 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(115): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/zhaibob/...', 115, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-11-28 21:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-28 21:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-28 21:43:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant time - assumed 'time' ~ APPPATH/classes/controller/test.php [ 118 ]
2011-11-28 21:43:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant time - assumed 'time' ~ APPPATH/classes/controller/test.php [ 118 ]
--
#0 /Users/zhaibob/git/calf/application/classes/controller/test.php(118): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/zhaibob/...', 118, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#5 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#6 {main}
2011-11-28 21:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-28 21:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-28 23:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/expo.swf ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-28 23:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/expo.swf ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-28 23:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/expo.swf ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-28 23:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/expo.swf ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}