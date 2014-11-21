<?php

	function DBConnection()
	{
		require(dirname(__FILE__).'/../../config/DBConfig.php');
	
		$DBdsn = 'mysql:dbname='.$DBName.';host='.$DBHost;

		$DBConn;
		try {
			$DBConn = new PDO($DBdsn, $DBUser, $DBPass);
		} catch (PDOException $e) {
			echo 'Falló la conexión: ' . $e->getMessage();
		}
		
		return $DBConn;
	}
	
	function GetLastLandingID($DBConn)
	{
		$query = 'SELECT * FROM ap_last_sub_id;';
		$queryResult = $DBConn->query($query);
		$result = $queryResult->fetch(PDO::FETCH_ASSOC);
		
		return $result['last_landing_id'];
	}
	
	function SetLastLandingID($DBConn, $lastID)
	{
		$queryUpdate = "UPDATE ap_last_sub_id SET `last_landing_id`=$lastID WHERE `id` = 1;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
 ?>