<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-15 09:34:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Manage.php [ 107 ] in file:line
2016-08-15 09:34:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 09:39:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Manage::update_tags() ~ APPPATH/classes/Controller/Manage.php [ 110 ] in file:line
2016-08-15 09:39:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 09:40:06 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `tagged` (`tags`, `podcast_id`) VALUES (), () ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:40:06 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ta...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(65): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(110): Controller_Manage->update_tags(Array, '1')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#9 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:41:47 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `tagged` (`tags`, `podcast_id`) VALUES (), () ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:41:47 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ta...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(66): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(112): Controller_Manage->update_tags(Array, '1')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#9 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:42:59 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `tagged` (`tags`, `podcast_id`) VALUES (), () ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:42:59 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ta...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(66): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(112): Controller_Manage->update_tags(Array, '1')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#9 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 09:46:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Manage.php [ 100 ] in file:line
2016-08-15 09:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 09:47:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Manage.php [ 100 ] in file:line
2016-08-15 09:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 09:58:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Exception::connect_errno() ~ APPPATH/classes/Controller/Manage.php [ 82 ] in file:line
2016-08-15 09:58:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 10:37:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Manage.php [ 70 ] in file:line
2016-08-15 10:37:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 11:42:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Manage::json() ~ APPPATH/classes/Controller/Manage.php [ 59 ] in file:line
2016-08-15 11:42:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 11:48:23 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'tags' cannot be null [ INSERT INTO `tagged` (`tags`, `podcast_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 11:48:23 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ta...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(134): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(170): Controller_Manage->update_tags(Array, '1')
#3 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#9 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 11:49:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 128 ] in file:line
2016-08-15 11:49:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 11:51:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 128 ] in file:line
2016-08-15 11:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:26:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 225 ] in file:line
2016-08-15 12:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:27:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 225 ] in file:line
2016-08-15 12:27:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:27:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '"updated"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 224 ] in file:line
2016-08-15 12:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:32:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '"updated"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH/classes/Controller/Manage.php [ 224 ] in file:line
2016-08-15 12:32:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:32:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Manage.php [ 250 ] in file:line
2016-08-15 12:32:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 12:39:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `tbl_artist` SET `0` = '\"profile_header_img\"=> $post->profile_header_img,' WHERE `id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 12:39:05 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tbl_art...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(240): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 12:40:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `tbl_artist` SET `0` = NULL WHERE `id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 12:40:48 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tbl_art...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(218): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 12:42:25 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `tbl_artist` SET `0` = NULL WHERE `id` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 174 ] in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 12:42:25 --- DEBUG: #0 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tbl_art...', false, Array)
#1 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/application/classes/Controller/Manage.php(218): Kohana_Database_Query->execute()
#2 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Controller.php(84): Controller_Manage->action_post_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#5 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/index.php(118): Kohana_Request->execute()
#8 {main} in /hermes/bosnaweb06a/b2324/ipw.playerlawcom/public_html/player/modules/database/classes/Kohana/Database/Query.php:251
2016-08-15 13:51:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/podcast/index.php [ 50 ] in file:line
2016-08-15 13:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 20:18:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Manage.php [ 27 ] in file:line
2016-08-15 20:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 20:19:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Manage.php [ 27 ] in file:line
2016-08-15 20:19:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 20:19:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Manage.php [ 27 ] in file:line
2016-08-15 20:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-15 20:19:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Manage.php [ 27 ] in file:line
2016-08-15 20:19:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line