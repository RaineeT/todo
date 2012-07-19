<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-18 00:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:30:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\register.php [ 49 ]
2012-07-18 00:30:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\register.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 00:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:31:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\register.php [ 49 ]
2012-07-18 00:31:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\register.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-18 00:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:40:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''username', 'password', 'email') VALUES('rainee', '25f9e794323b453885f5181f1b624' at line 1 [ INSERT INTO users ('username', 'password', 'email') VALUES('rainee', '25f9e794323b453885f5181f1b624d0b', 'rainee@hotmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-18 00:40:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''username', 'password', 'email') VALUES('rainee', '25f9e794323b453885f5181f1b624' at line 1 [ INSERT INTO users ('username', 'password', 'email') VALUES('rainee', '25f9e794323b453885f5181f1b624d0b', 'rainee@hotmail.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\Users\Rainee\Documents\GitHub\todo\application\classes\model\register.php(51): Kohana_Database_Query->execute()
#2 C:\Users\Rainee\Documents\GitHub\todo\application\classes\controller\auth.php(117): Model_Register->register('rainee', '25f9e794323b453...', 'rainee@hotmail....')
#3 [internal function]: Controller_Auth->action_register()
#4 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-18 00:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-18 00:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-18 00:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#1 {main}