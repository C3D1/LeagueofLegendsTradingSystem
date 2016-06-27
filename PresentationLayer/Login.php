<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="DesignLogin.css">
</head>
<body>
	<div class="header">
		<H1>Trading System</H1>
		<img src="../Images/LoL_Icon.png" alt="League of Legends Icon" class="icon">
	</div>
	<div class="content">
		<ul>
		    <li><a href="#">Home</a></li>
		    <li><a href="#">Trade</a></li>
		    <li><a href="#">Request</a></li>
		</ul>
		<?php
		require_once("../BusinessLayer/User.php"); 
        session_start();
        if(isset($_SESSION["login"]))
        {

        }
        else
        {
            $_SESSION["login"] = 1;
        }
        if(isset($_SESSION["login"]))
        {
            echo("<form method = \"post\" >
                <p>Login</p>
                <input placeholder=\"username\" type = \"text\" name = \"name\" /><br/>
                <input placeholder=\"password\" type = \"password\" name = \"password\" /><br/>
                <input  type = \"submit\" name = \"submit\" value = \"Senden\" />
            </form>");
        }
        ?>
        <?php
			if(isset($_POST['submit']))
			{
                    $name = $_POST['name'];
                    $Passwort = $_POST['password'];
                    if(login($Passwort,$name) == "True")
                    {
                        $loggedon = true;
                        $_SESSION["login"] = 12345;
                        header("Location: Index.php");
                    }
            }
        ?>
	</div>
	<div class="footer">
		<p>&copy; Cédric Schnider, Gino Pio Loco<p>
	</div>
</body>
</html>