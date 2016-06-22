<?php 
	  unset($_SESSION["login"]);
	  session_destroy();
	  $_SESSION["login"] = 1;
	  header("Location: Login.php");
 ?>