<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-29 03:29:09 --- ERROR: ErrorException [ 1 ]: Call to undefined function date_defautt_timezone_set() ~ APPPATH/classes/controller/test.php [ 114 ]
2011-11-29 03:29:09 --- STRACE: ErrorException [ 1 ]: Call to undefined function date_defautt_timezone_set() ~ APPPATH/classes/controller/test.php [ 114 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-29 03:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-11-29 03:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-11-29 17:30:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function date_defautt_timezone_set() ~ APPPATH/classes/controller/test.php [ 114 ]
2011-11-29 17:30:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function date_defautt_timezone_set() ~ APPPATH/classes/controller/test.php [ 114 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}