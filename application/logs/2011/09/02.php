<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-02 13:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-02 13:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-02 13:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shelf/003 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-09-02 13:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shelf/003 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#2 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#3 {main}
2011-09-02 13:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-02 13:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-02 13:42:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ MODPATH/calfmsc/classes/kohana/msc.php [ 118 ]
2011-09-02 13:42:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ MODPATH/calfmsc/classes/kohana/msc.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}