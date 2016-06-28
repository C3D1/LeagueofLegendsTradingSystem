<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="DesignLogin.css">
</head>
<body >
	<div class="header">
		<H1>Trading System</H1>
		<img src="../Images/LoL_Icon.png" alt="League of Legends Icon" class="icon">
	</div>
	<div class="content">
		<ul class="navi">
		    <li><a href="Index.php">Home</a></li>
            <li><a href="TradeList.php">Trade</a></li>
            <li><a href="#">Request</a></li>
		    <li><a href="Logout.php">Logout</a></li>
		    <li><a href="Registration.php">Registration<a/></li>
		</ul>
		<?php
		require_once("../BusinessLayer/User.php"); 
        echo("<form method = \"post\" >
            <p>Registration</p>
            <input placeholder=\"username\" type = \"text\" name = \"name\" /><br/>
            <input placeholder=\"password\" type = \"password\" name = \"password\" /><br/>
            
        </form>");
        echo("<button type=\"button\" onclick=\"alert('User created')\"><a style=\"text-decoration: none;\" href=\"Index.php\">register</a></button>");
		if(isset($_POST['submit']))
		{	
                
                header("Location: Index.php");
        }
        ?>
	</div>
	<div class="footer">
		<p>&copy; Cédric Schnider, Gino Pio Loco<p>
	</div>
</body>
</html>