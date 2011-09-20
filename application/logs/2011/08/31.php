<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-31 08:09:25 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2011-08-31 08:09:25 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /home/azhai2011/git/calf/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /home/azhai2011/git/calf/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(54): Kohana_Session::instance()
#3 /home/azhai2011/git/calf/modules/calfmsc/classes/kohana/msc.php(25): Kohana_Msc->__construct(Array)
#4 /home/azhai2011/git/calf/application/classes/controller/callmethodajax.php(27): Kohana_Msc::factory(Array)
#5 [internal function]: Controller_Callmethodajax->action_index()
#6 /home/azhai2011/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callmethodajax))
#7 /home/azhai2011/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/azhai2011/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-08-31 08:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascript:void(); ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-31 08:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: javascript:void(); ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-08-31 08:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-08-31 08:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /home/azhai2011/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}