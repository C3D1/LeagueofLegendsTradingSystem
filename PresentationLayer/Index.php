	<?php

/*************************************************/
// M151:          Data Abstraction Layer (DAL)
// Author:        Rolf H. Hirschi
// Datum:         25.04.2016
// Version:       1.0
// Applikation:   Theorie
//
// Filename:      checklogin.php
// Include Files: navigation.php
/*************************************************/

/*************************************************/
// Datum        - Aenderung
// 25.04.2016   - Neu
/*************************************************/


	session_start();

	$server = "M151_A_041_MySQL"; //System DSN fuer MySQL
	// $server = "M151_A_041_MSSQL"; //System DSN fuer MSSQL

	$user = "root";
	$pass = "gibbiX12345";
	$toReturn = "";
	$DBName = "rhirschi";
	$DBPassword = "gugus";

	$Username = "";
	$Password = "";

	if (isset($_POST['username'])) {
		$Username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$Password = $_POST['password'];
	}

	//connect to database 
	$connectionstring = odbc_pconnect($server ,$user, $pass) or die("Datenbankverbindung ist fehlgeschlagen");

	function check_user_password($cConnection, $cName, $cPassword) {
		// Check User Password conbination
		// Return Value is true for valid User, Password Combination
		//              is false for invalid User, Password combination
		$Query = "Select username, password from tbl_user where username ='". $cName . "' and password= '". $cPassword. "';";

		// Execution of Query
		$result = odbc_exec($cConnection,$Query );

		// Read database date
		while($row= odbc_fetch_array($result)) {
			$DBName = $row["username"];
			$DBPassword = $row["password"];
		}

		if ((isset($DBName)) && (isset($DBPassword))) {
			// Verify User, Password combination
			if ((strlen($DBName) > 0) && (strlen($DBPassword) > 0)) {
				return true;
			}
		}
		return false;
	}

	if (check_user_password ($connectionstring, $Username, $Password) == true) {
		//Valid User/Password
		$_SESSION['isLogin'] = true;
		include("../PL/navigation.php");
?>
		<p style="width:640px;">
			Sie wurden erfolgreich angemeldet!
		</p>
	</body>
</html>
<?php
	}
	else {
		$_SESSION['isLogin'] = false;
		require_once("../PL/navigation.php");
?>
		<p style="width:640px;">
			Sie wurden NICHT angemeldet!
		</p>
	</body>
</html>
<?php
	}
?>

 ?>