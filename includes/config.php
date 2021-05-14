<?php
//Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define database server
defined('DB_USER') ? null : define("DB_USER","root");		  //define database user	
defined('DB_PASS') ? null : define("DB_PASS","");			  //define database Password	
defined('DB_NAME') ? null : define("DB_NAME","dragonhousedb"); //define database Name

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot =$_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'includes/config.php'), '', $thisFile);
$srvRoot  = str_replace('config/config.php','', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>