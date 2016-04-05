<?php
@session_start();
  if($_SESSION['user']==""){
    header( 'Location: /login1.php' ) ;
  }
  else{  
  header( 'Location: /module.php' ) ;
  }
?>

