<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-17 13:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 13:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 13:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 13:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 13:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 13:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 13:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 13:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 13:43:24 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-07-17 13:43:24 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(37): Kohana_View->__get('styles')
#1 [internal function]: Controller_Auth->after()
#2 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#3 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-17 23:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-17 23:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-17 23:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:38:03 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-17 23:38:03 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#1 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('fasfads')
#2 [internal function]: Kohana_Database->quote('fasfads')
#3 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\Users\Rainee\Documents\GitHub\todo\application\classes\model\login.php(14): Kohana_Database_Query->execute()
#6 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(73): Model_Login->login('fasfads', 'fdasfdas')
#7 [internal function]: Controller_Auth->action_login()
#8 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 23:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:38:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-17 23:38:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#1 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('fsafda')
#2 [internal function]: Kohana_Database->quote('fsafda')
#3 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 C:\Users\Rainee\Documents\GitHub\todo\application\classes\model\login.php(14): Kohana_Database_Query->execute()
#6 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(73): Model_Login->login('fsafda', 'fdsadfas')
#7 [internal function]: Controller_Auth->action_login()
#8 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#9 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-17 23:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-17 23:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-17 23:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}