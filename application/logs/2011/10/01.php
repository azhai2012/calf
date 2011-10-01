<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-01 10:30:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/model/menus.php [ 9 ]
2011-10-01 10:30:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/model/menus.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 10:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-01 10:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-10-01 10:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/admin.css ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-10-01 10:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/admin.css ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}