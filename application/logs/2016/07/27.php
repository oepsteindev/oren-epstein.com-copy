<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-27 14:11:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tbl ~ APPPATH/views/welcome/index.php [ 60 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/index.php:60
2016-07-27 14:11:18 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/index.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 60, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/template.php(135): Kohana_View->__toString()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#14 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/index.php:60
2016-07-27 14:14:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/views/welcome/index.php [ 77 ] in file:line
2016-07-27 14:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line