<?php 
	  require_once("Login.php"); 
	  unset($_SESSION["login"]);
	  session_destroy();
	  header("Location: Login.php");
 ?>
