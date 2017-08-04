<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-18 09:28:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Curly' not found ~ APPPATH/classes/Controller/Curly.php [ 15 ] in file:line
2016-04-18 09:28:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:30:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Curly' not found ~ APPPATH/classes/Controller/Curly.php [ 15 ] in file:line
2016-04-18 09:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:30:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Curly' not found ~ APPPATH/classes/Controller/Curly.php [ 15 ] in file:line
2016-04-18 09:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:33:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/Controller/Curly.php [ 15 ] in file:line
2016-04-18 09:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:33:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'curly' not found ~ APPPATH/classes/Controller/Curly.php [ 15 ] in file:line
2016-04-18 09:33:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:33:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-04-18 09:33:20 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
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
2016-04-18 09:33:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-04-18 09:33:57 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
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
2016-04-18 09:34:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'curly' not found ~ APPPATH/classes/Controller/Curly.php [ 17 ] in file:line
2016-04-18 09:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:34:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-04-18 09:34:21 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
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
2016-04-18 09:39:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-04-18 09:39:57 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
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
2016-04-18 09:40:14 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Curly::magic() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Curly.php [ 17 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:40:14 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 17, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#7 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:40:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Curly' not found ~ APPPATH/classes/Controller/Curly.php [ 17 ] in file:line
2016-04-18 09:40:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:40:47 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Curly::magic() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Curly.php [ 17 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:40:47 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 17, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#7 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:40:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH/views/curly/index.php [ 66 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php:66
2016-04-18 09:40:55 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/views/curly/index.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 66, Array)
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
2016-04-18 09:42:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH/classes/Controller/Curly.php [ 17 ] in file:line
2016-04-18 09:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:42:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Curly::magic() ~ APPPATH/classes/Controller/Curly.php [ 17 ] in file:line
2016-04-18 09:42:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:43:02 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Curly::curl_it() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Curly.php [ 17 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:43:02 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(17): Kohana_Core::error_handler(2048, 'Non-static meth...', '/hermes/bosnawe...', 17, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#7 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:17
2016-04-18 09:43:12 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Curly::curl_it(), called in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php on line 17 and defined ~ APPPATH/classes/curly.php [ 7 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:7
2016-04-18 09:43:12 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', '/hermes/bosnawe...', 7, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(17): Curly::curl_it()
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:7
2016-04-18 09:56:26 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:56:55 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:57:07 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:57:14 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:57:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING_CAST, expecting '&' or T_VARIABLE ~ APPPATH/classes/curly.php [ 7 ] in file:line
2016-04-18 09:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:58:40 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:58:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:58:55 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMXPath could not be converted to string ~ APPPATH/classes/curly.php [ 23 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:23
2016-04-18 09:58:55 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): Kohana_Core::error_handler(4096, 'Object of class...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:23
2016-04-18 09:59:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:59:20 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 09:59:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function item() on a non-object ~ APPPATH/classes/curly.php [ 24 ] in file:line
2016-04-18 09:59:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 09:59:58 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 09:59:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class="e...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:01:10 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class=\"...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:03:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function item() on a non-object ~ APPPATH/classes/curly.php [ 24 ] in file:line
2016-04-18 10:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 10:03:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function item() on a non-object ~ APPPATH/classes/curly.php [ 24 ] in file:line
2016-04-18 10:03:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 10:03:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function item() on a non-object ~ APPPATH/classes/curly.php [ 24 ] in file:line
2016-04-18 10:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 10:06:24 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:06:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(18): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:07:02 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:07:24 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:07:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:07:29 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:08:34 --- EMERGENCY: ErrorException [ 2 ]: stripslashes() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:08:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'stripslashes() ...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): stripslashes(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:23:43 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\\...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:23:54 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:23:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', '//div[@class=\"...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:24:11 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:24:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:24:25 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:24:33 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:24:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:24:44 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DOMXPath could not be converted to string ~ APPPATH/classes/curly.php [ 23 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:23
2016-04-18 10:24:44 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): Kohana_Core::error_handler(4096, 'Object of class...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php:23
2016-04-18 10:25:32 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:25:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:25:39 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:26:07 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:26:42 --- EMERGENCY: ErrorException [ 2 ]: DOMXPath::query() expects parameter 1 to be string, object given ~ APPPATH/classes/curly.php [ 23 ] in file:line
2016-04-18 10:26:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DOMXPath::query...', '/hermes/bosnawe...', 23, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/curly.php(23): DOMXPath->query(Object(DOMXPath))
#2 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(20): Curly::curl_it('http://www.curl...', ''//div[@class="...')
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2016-04-18 10:27:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function item() on a non-object ~ APPPATH/classes/curly.php [ 24 ] in file:line
2016-04-18 10:27:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 10:55:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/Curly.php [ 23 ] in file:line
2016-04-18 10:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-04-18 11:32:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: box2 ~ APPPATH/classes/Controller/Curly.php [ 29 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:29
2016-04-18 11:32:43 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 29, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#7 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:29
2016-04-18 11:33:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: box2 ~ APPPATH/classes/Controller/Curly.php [ 29 ] in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:29
2016-04-18 11:33:43 --- DEBUG: #0 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/hermes/bosnawe...', 29, Array)
#1 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Controller.php(84): Controller_Curly->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Curly))
#4 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/index.php(118): Kohana_Request->execute()
#7 {main} in /hermes/bosnaweb05a/b6/ipw.finespun/public_html/Koh/application/classes/Controller/Curly.php:29