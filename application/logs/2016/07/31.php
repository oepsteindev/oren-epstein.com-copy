<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-31 20:59:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/welcome/show.php [ 2 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php:2
2016-07-31 20:59:18 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 2, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Welcome.php(43): Kohana_Response->body(Object(View))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#12 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php:2
2016-07-31 20:59:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/welcome/show.php [ 2 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php:2
2016-07-31 20:59:51 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 2, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(62): include('/hermes/bosnawe...')
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(359): Kohana_View::capture('/hermes/bosnawe...', Array)
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Welcome.php(43): Kohana_Response->body(Object(View))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_show()
#7 [internal function]: Kohana_Controller->execute()
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#12 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/views/welcome/show.php:2