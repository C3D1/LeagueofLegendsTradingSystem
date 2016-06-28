<?php 
	$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
	$query = "SELECT * FROM user";
	$result = odbc_exec($db,$query);

	function login($pw,$username)
	{
		require_once("../DataBase/dataAccess.php"); 
		$result = getuser();
		while($row= odbc_fetch_array($result)) {
			if ($row["username"] == $username && $row["password"] == $pw) 
			{
				return "True";
			}
		}
		return "False";
	}
	function create_user($username,$password)
	{
		require_once("../DataBase/dataAccess.php");
		createuser($username,$password);
	}
 ?>

