<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-16 23:58:40 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, object given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 120 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-11-16 23:58:40 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, object given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 120 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(120): Kohana_Calfdb_Admin::instance('Product', 'modity', Object(stdClass))
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-11-16 23:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-16 23:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-16 23:59:14 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, object given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 120 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-11-16 23:59:14 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, object given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 120 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(120): Kohana_Calfdb_Admin::instance('Product', 'modity', Object(stdClass))
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-11-16 23:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-16 23:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-16 23:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mytest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-16 23:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mytest was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-11-16 23:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-16 23:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-16 23:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-16 23:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-16 23:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-16 23:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}