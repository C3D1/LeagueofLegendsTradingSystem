<?php 
	$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");

	function namensausgabe($id)
	{
		$query = "";
	}



	$query = "SELECT * FROM user";
	$result = odbc_exec($db,$query);

	while($row= odbc_fetch_array($result)) {
		echo($row["username"]);
		echo($row["password"]);
	}


 ?>

