<?php 
	$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
	$query = "SELECT * FROM user";
	$result = odbc_exec($db,$query);

	

	function namensausgabe($id)
	{
		$query = "SELECT * FROM user WHERE user.id == $id";
		$result = odbc_exec($db,$query);
		$row= odbc_fetch_array($result);
		return $row;
	}
	function login($pw,$username)
	{
		$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
		$query = "SELECT * FROM user";
		$result = odbc_exec($db,$query);
		while($row= odbc_fetch_array($result)) {
			if ($row["username"] == $username && $row["password"] == $pw) {
				return "True";
			}
		}
		return "False";
	}



	

 ?>

