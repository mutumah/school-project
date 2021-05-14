<?php
require_once("../includes/initialize.php");
session_start();

// unset( $_SESSION['ADMIN_ID'] );
// unset( $_SESSION['ADMIN_UNAME'] );
// unset( $_SESSION['ADMIN_USERNAME'] );
// unset( $_SESSION['ADMIN_UPASS'] );
// unset( $_SESSION['ADMIN_UROLE'] );
foreach($_SESSION as $k => $v){
	unset($_SESSION[$k]);
}
 	
redirect(WEB_ROOT ."admin/index.php?logout=1");
?>