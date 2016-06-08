<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="DesignLogin.css">
</head>
<body>
	<div class="header">
		
	</div>
	<div class="content">
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
        $_SESSION["login"];
        if($_SESSION["login"] != "12345")
        {
            echo("<form method = \"post\" >
                <p>Login</p>
                <input placeholder=\"username\" type = \"text\" name = \"name\" /><br/>
                <input placeholder=\"password\" type = \"password\" name = \"password\" /><br/>
                <input  type = \"submit\" name = \"submit\" value = \"Senden\" />
            </form>");
        }
        else
        {
            echo("<button><a href=\"Logout.php\">Logout</a></button>");
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
                        $_SESSION["login"] = "12345";
                        header("Location: Login.php");
                    }
            }
        ?>
	</div>
	<div class="footer">
		
	</div>
</body>
</html>