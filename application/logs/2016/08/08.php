<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-08 11:31:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::js_custom() ~ APPPATH/classes/Controller/Manage.php [ 132 ] in file:line
2016-08-08 11:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 12:35:41 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template.php [ 92 ] in file:line
2016-08-08 12:35:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 12:37:45 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ APPPATH/views/template.php [ 92 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 12:37:45 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 92, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Request::param()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#11 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 12:37:54 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ APPPATH/views/template.php [ 92 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 12:37:54 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 92, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Request::param()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#11 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 12:38:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/template.php [ 92 ] in file:line
2016-08-08 12:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 12:44:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/views/template.php [ 92 ] in file:line
2016-08-08 12:44:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 12:46:13 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ APPPATH/views/template.php [ 92 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 12:46:13 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 92, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(92): Kohana_Request::param()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#11 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php:92
2016-08-08 13:44:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/manage/edit.php [ 23 ] in file:line
2016-08-08 13:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 13:52:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/manage/edit.php [ 125 ] in file:line
2016-08-08 13:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-08 13:52:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/manage/edit.php [ 127 ] in file:line
2016-08-08 13:52:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line