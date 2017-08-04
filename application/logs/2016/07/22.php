<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-22 08:24:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/template/base.php [ 35 ] in file:line
2016-07-22 08:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-22 08:27:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/layouts/empty/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php:145
2016-07-22 08:27:32 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/layout...')
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Template/Base.php(71): Kohana_View->__construct('template/layout...')
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(69): Controller_Template_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php:145
2016-07-22 08:44:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/template/base.php [ 59 ] in file:line
2016-07-22 08:44:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-22 08:49:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH/views/template/base.php [ 40 ] in file:line
2016-07-22 08:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-22 08:53:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH, expecting ',' or ';' ~ APPPATH/views/template/base.php [ 51 ] in file:line
2016-07-22 08:53:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line