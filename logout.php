<?php
  if(!isset($_SESSION)) 
    session_start();
  
  unset($_SESSION['username']);
  unset($_SESSION['fullname']);
  session_destroy();

  header("Location: logIn.php");
  exit(0);
?>