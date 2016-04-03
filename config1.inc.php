<?php
 @session_start();

 $server="localhost";  
 $user="root";        
 $pass="";          
 $db_name="logging";   
 
 $hd=mysql_connect($server,$user,$pass) or die("soorry can not connect to the server");
 $db=mysql_select_db($db_name,$hd) or die("please check your database ");
 mysql_query("set names 'gb2312'");

 $_SESSION["link"]=$hd;
?>