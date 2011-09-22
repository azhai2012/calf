<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-22 01:27:19 --- ERROR: View_Exception [ 0 ]: The requested view shelf/right could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-22 01:27:19 --- STRACE: View_Exception [ 0 ]: The requested view shelf/right could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shelf/right')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shelf/right', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshelf/classes/kohana/shelf.php(22): Kohana_View::factory('shelf/right')
#3 /Users/zhaibob/git/calf/modules/calfshelf/classes/kohana/shelf.php(13): Kohana_Shelf->__construct('', Array)
#4 /Users/zhaibob/git/calf/application/classes/model/main/content.php(27): Kohana_Shelf::factory('', Array)
#5 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(43): Model_Main_Content->get_shelf_content('', Array)
#6 [internal function]: Controller_callmethod->action_index()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_callmethod))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-09-22 01:29:05 --- ERROR: View_Exception [ 0 ]: The requested view shelf/right could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-09-22 01:29:05 --- STRACE: View_Exception [ 0 ]: The requested view shelf/right could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/zhaibob/git/calf/system/classes/kohana/view.php(137): Kohana_View->set_filename('shelf/right')
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(30): Kohana_View->__construct('shelf/right', NULL)
#2 /Users/zhaibob/git/calf/modules/calfshelf/classes/kohana/shelf.php(22): Kohana_View::factory('shelf/right')
#3 /Users/zhaibob/git/calf/modules/calfshelf/classes/kohana/shelf.php(13): Kohana_Shelf->__construct('2222', NULL)
#4 /Users/zhaibob/git/calf/application/classes/controller/test.php(30): Kohana_Shelf::factory('2222', NULL)
#5 [internal function]: Controller_Test->action_index()
#6 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#10 {main}
2011-09-22 01:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:29:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calfshelf/views/shelf/left.php [ 14 ]
2011-09-22 01:29:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calfshelf/views/shelf/left.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:29:44 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/calfshelf/views/shelf/left.php [ 31 ]
2011-09-22 01:29:44 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ MODPATH/calfshelf/views/shelf/left.php [ 31 ]
--
#0 /Users/zhaibob/git/calf/modules/calfshelf/views/shelf/left.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 31, Array)
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
2011-09-22 01:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:30:24 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:24 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:27 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:27 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:35 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:35 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:38 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:38 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:40 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:40 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:50 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:50 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:51 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:51 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:53 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:53 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:30:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:30:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:03 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:03 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:03 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:03 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:03 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:03 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:05 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:05 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:05 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:05 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:22 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:22 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:24 --- ERROR: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
2011-09-22 01:31:24 --- STRACE: ErrorException [ 1 ]: Call to undefined function 
		
           
            
               
                  商品：
                     
               
               
                 价格：
                 
                  到
                 
               
               
                   搜索
               
             
           
           
              共搜索到 392 个符合条件的商品。
           
        
		() ~ MODPATH/calfshelf/views/shelf/content.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:33:30 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
2011-09-22 01:33:30 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:33:31 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
2011-09-22 01:33:31 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:33:31 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
2011-09-22 01:33:31 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 01:33:33 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
2011-09-22 01:33:33 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/calfshelf/views/shelf/content.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 01:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 01:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 02:29:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH/calfshelf/views/shelf/leftinfo.php [ 18 ]
2011-09-22 02:29:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH/calfshelf/views/shelf/leftinfo.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 02:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 02:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 03:10:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
2011-09-22 03:10:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:11:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 102 ]
2011-09-22 03:11:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 102 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:11:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 102 ]
2011-09-22 03:11:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 102 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:12:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
2011-09-22 03:12:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:13:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
2011-09-22 03:13:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:13:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
2011-09-22 03:13:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfshelf/views/shelf/content.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_callmethod->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-09-22 03:13:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
2011-09-22 03:13:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfshelf/views/shelf/content.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/zhaibob/git/calf/application/classes/controller/callmethod.php(75): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_callmethod->after()
#7 /Users/zhaibob/git/calf/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_callmethod))
#8 /Users/zhaibob/git/calf/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/zhaibob/git/calf/system/classes/kohana/request.php(1144): Kohana_Request_Client->execute(Object(Request))
#10 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#11 {main}
2011-09-22 03:13:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
2011-09-22 03:13:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: get_shelf_left_shop_info ~ MODPATH/calfshelf/views/shelf/content.php [ 17 ]
--
#0 /Users/zhaibob/git/calf/modules/calfshelf/views/shelf/content.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/zhaibob/...', 17, Array)
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
2011-09-22 03:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 03:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 03:25:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb::factory() ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 27 ]
2011-09-22 03:25:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb::factory() ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:25:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Calfdb::factory() ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 27 ]
2011-09-22 03:25:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Calfdb::factory() ~ MODPATH/calfshelf/classes/kohana/shelf.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 03:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 03:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 10:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 10:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 10:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: team-6102.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 10:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: team-6102.html ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 10:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 10:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:05:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 7 ]
2011-09-22 11:05:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:06:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 7 ]
2011-09-22 11:06:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:07:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 47 ]
2011-09-22 11:07:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:07:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 51 ]
2011-09-22 11:07:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH/calftuan/classes/kohana/tuan.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:08:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:08:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:08:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:08:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:09:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:09:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:09:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:09:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:09:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:09:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:09:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:09:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:12:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
2011-09-22 11:12:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH/calftuan/views/tuan/right.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:14:07 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ MODPATH/calftuan/views/tuan/right.php [ 38 ]
2011-09-22 11:14:07 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ MODPATH/calftuan/views/tuan/right.php [ 38 ]
--
#0 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/right.php(38): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 38, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/content.php(17): Kohana_View->__toString()
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
2011-09-22 11:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:23:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 86 ]
2011-09-22 11:23:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:23:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 86 ]
2011-09-22 11:23:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/calfdb/classes/kohana/calfdb/tuan.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:33:01 --- ERROR: ErrorException [ 8 ]: Undefined index: master_img ~ MODPATH/calftuan/views/tuan/left.php [ 52 ]
2011-09-22 11:33:01 --- STRACE: ErrorException [ 8 ]: Undefined index: master_img ~ MODPATH/calftuan/views/tuan/left.php [ 52 ]
--
#0 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/left.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 52, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/content.php(14): Kohana_View->__toString()
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
2011-09-22 11:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:33:04 --- ERROR: ErrorException [ 8 ]: Undefined index: master_img ~ MODPATH/calftuan/views/tuan/left.php [ 52 ]
2011-09-22 11:33:04 --- STRACE: ErrorException [ 8 ]: Undefined index: master_img ~ MODPATH/calftuan/views/tuan/left.php [ 52 ]
--
#0 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/left.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/zhaibob/...', 52, Array)
#1 /Users/zhaibob/git/calf/system/classes/kohana/view.php(61): include('/Users/zhaibob/...')
#2 /Users/zhaibob/git/calf/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/zhaibob/...', Array)
#3 /Users/zhaibob/git/calf/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/zhaibob/git/calf/modules/calftuan/views/tuan/content.php(14): Kohana_View->__toString()
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
2011-09-22 11:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}
2011-09-22 11:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2011-09-22 11:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/tuan.js ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /Users/zhaibob/git/calf/index.php(111): Kohana_Request->execute()
#1 {main}