
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
		<div class="navi">
			
		</div>
		<?php 
		if($_SESSION["login"] != 12345)
		{
			echo("<button><a href=\"Login.php\">Logout</a></button>");
		}
		
		 ?>
		
	</div>
	<div class="content">
		<ul>
		    <li><a href="#">Home</a></li>
		    <li><a href="#">Trade</a></li>
		    <li><a href="#">Request</a></li>
		</ul>

	</div>
	<div class="footer">
		<p>&copy; Cédric Schnider, Gino Pio Loco<p>
	</div>
</body>
</html>
</body>
</html>
<?php 
 ?>
