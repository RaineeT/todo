<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-14 19:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-14 19:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL screen was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-14 20:22:06 --- ERROR: Twig_Error_Runtime [ 0 ]: Variable "styles" does not exist in "auth/index.twig" at line 1 ~ MODPATH\twig\vendor\Twig\lib\Twig\Template.php [ 307 ]
2012-07-14 20:22:06 --- STRACE: Twig_Error_Runtime [ 0 ]: Variable "styles" does not exist in "auth/index.twig" at line 1 ~ MODPATH\twig\vendor\Twig\lib\Twig\Template.php [ 307 ]
--
#0 C:\Users\Rainee\Documents\GitHub\todo\application\cache\twig\13\df\ddd3dae35bbe701d20510f8084d8.php(46): Twig_Template->getContext(Array, 'styles')
#1 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Template.php(265): __TwigTemplate_13dfddd3dae35bbe701d20510f8084d8->doDisplay(Array, Array)
#2 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#3 C:\Users\Rainee\Documents\GitHub\todo\application\cache\twig\54\1a\4396b1b87f50c28cfc0cf7736c02.php(28): Twig_Template->display(Array, Array)
#4 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Template.php(265): __TwigTemplate_541a4396b1b87f50c28cfc0cf7736c02->doDisplay(Array, Array)
#5 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#6 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Template.php(250): Twig_Template->display(Array)
#7 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\vendor\Twig\lib\Twig\Environment.php(295): Twig_Template->render(Array)
#8 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\classes\kohana\twig\view.php(57): Twig_Environment->render('auth/index.twig', Array)
#9 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\classes\kohana\twig\view.php(97): Kohana_Twig_View::capture('auth/index.twig', Array)
#10 C:\Users\Rainee\Documents\GitHub\todo\modules\twig\classes\kohana\controller\template\twig.php(66): Kohana_Twig_View->render()
#11 [internal function]: Kohana_Controller_Template_Twig->after()
#12 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\Users\Rainee\Documents\GitHub\todo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\Users\Rainee\Documents\GitHub\todo\index.php(109): Kohana_Request->execute()
#16 {main}