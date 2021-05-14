<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'marimar');
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'includes');

require_once(LIB_PATH.DS."config.php");
//load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."user.php"); 
require_once(LIB_PATH.DS."accomodation.php");
require_once(LIB_PATH.DS."guest.php"); 
require_once(LIB_PATH.DS."reserve.php");  

require_once(LIB_PATH.DS."database.php");


?>