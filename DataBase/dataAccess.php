<?php
	function getuser()
	{
		$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
		$query = "SELECT * FROM user";
		$result = odbc_exec($db,$query);
		return ($result);
	}
	function createuserT($username,$password)
	{
		$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
		try
		{
			$db->beginTransation();
			$db->exec("CALL createUser($username,$password,1,1,1)");
			$db->commit();
		}
		catch (Exception $ex)
		{
			$db->rollback();
			echo("Something went wrong while creating user");
		}
	}
	function createuser($username,$password)
	{
		$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");
		$db->exec("CALL createUser($username,$password,1,1,1)");
	}
?>
