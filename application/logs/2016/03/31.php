<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-31 08:21:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-03-31 08:21:29 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/template/base.php(122): Kohana_View->__toString()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#11 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#14 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66