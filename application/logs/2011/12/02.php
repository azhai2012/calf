<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-02 17:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 17:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:16:24 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-12-02 21:16:24 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(114): Kohana_Calfdb_Admin::instance('Home', '', '')
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-12-02 21:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:21:37 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-12-02 21:21:37 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(114): Kohana_Calfdb_Admin::instance('Home', '', '')
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-12-02 21:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:23:37 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-12-02 21:23:37 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(114): Kohana_Calfdb_Admin::instance('Home', '', '')
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-12-02 21:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-12-02 21:23:38 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
2011-12-02 21:23:38 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Calfdb_Admin::instance() must be an array, string given, called in /Users/zhaibob/git/calf/application/classes/controller/test.php on line 114 and defined ~ MODPATH/calfdb/classes/kohana/calfdb/admin.php [ 29 ]
--
#0 /Users/zhaibob/git/calf/modules/calfdb/classes/kohana/calfdb/admin.php(29): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/zhaibob/...', 29, Array)
#1 /Users/zhaibob/git/calf/application/classes/controller/test.php(114): Kohana_Calfdb_Admin::instance('Home', '', '')
#2 [internal function]: Controller_Test->action_index()
#3 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#6 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#7 {main}
2011-12-02 21:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-12-02 21:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}