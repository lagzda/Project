<?php
 @session_start();
 
require "config1.inc.php";
$_SESSION['user']="";
	echo("<script type='text/javascript'> location.href='login1.php';</script>");

?>