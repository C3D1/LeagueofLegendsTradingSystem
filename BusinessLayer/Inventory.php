<?php

	function ShowInventory($UserId)
	{
		$db = odbc_pconnect("LolTrade2","root","") or die("Datenbankverbindung ist fehlgeschlagen x");

		$queryINVID = "SELECT inventory.id FROM user,inventory WHERE user.id == $UserId";
		$resultINVID = odbc_exec($db,$queryINVID);
		$inventoryid = $resultINVID

		$query1 = "SELECT skin.Name FROM skin,inventory WHERE skin.InventoryId == $inventoryid";
		$query2 = "SELECT skin. FROM champion,inventory WHERE champion.InventoryId == $inventoryid ";

		$result1 = odbc_exec($db,$query);
		$result2 = odbc_exec($db,$query);	
		while($row= odbc_fetch_array($result1)) {
			
			if($Zeilennummer % 2 == 0){
                                echo "<tr bgcolor = #DDD>";	
                            }
                            else{
                                echo "<tr bgcolor = #FFF>";	
                            }
                            
                            echo  "<td>" . $row->german . "</td><td>" . $row->france."</td>";
                            $Zeilennummer ++;
			
		}
		return "False";
	}

?>3