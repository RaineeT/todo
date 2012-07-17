<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-16 20:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 20:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:05:55 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-07-16 21:05:55 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(42): Kohana_View->__get('styles')
#1 [internal function]: Controller_Auth->after()
#2 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#3 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 21:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:07:00 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-07-16 21:07:00 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(42): Kohana_View->__get('styles')
#1 [internal function]: Controller_Auth->after()
#2 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#3 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 21:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:11:03 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-07-16 21:11:03 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(40): Kohana_View->__get('styles')
#1 [internal function]: Controller_Auth->after()
#2 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#3 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 21:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-16 21:38:08 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-07-16 21:38:08 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(37): Kohana_View->__get('styles')
#1 [internal function]: Controller_Auth->after()
#2 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#3 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-16 21:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-16 21:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-16 21:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-16 21:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}