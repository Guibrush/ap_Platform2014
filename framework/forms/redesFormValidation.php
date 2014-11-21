<?php
	require_once('../DB/DBHelpers.php');
	require_once('../DB/DBInsertFunctions.php');
	require_once('../DB/DBUpdateFunctions.php');
	
	$DBConn = DBConnection();

	$electronic_comunications = $_POST["publi"];
	
	$name = $_POST["name"];
	$surName = $_POST["surName"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$adress = $_POST["adress"];
	$country = $_POST["country"];
	$comercial = $_POST["comercial"];
	$comment = $_POST["comment"];

	$web = $_POST["web"];
	$facebook = $_POST["facebook"];
	$linkedin = $_POST["linkedin"];
	$twitter = $_POST["twitter"];

	$clause = $_POST["clause"];
	$legal = $_POST["legal"];

	$segment = $_POST["segment"];
	$code = $_POST["code"];

	$submit = $_POST["submit"];
	
	// echo var_dump($name)." ".var_dump($surName)." ".var_dump($email)." ".var_dump($tel)." ".var_dump($adress)." ".var_dump($country)." ".var_dump($comercial)." ".var_dump($comment)." ".var_dump($web)." ".var_dump($facebook).
		// " ".var_dump($linkedin)." ".var_dump($twitter)." ".var_dump($segment)." ".var_dump($code)." ".var_dump($publi)." ".var_dump($clause)." ".var_dump($legal)." ".var_dump($submit);
		
	$lastLandingID = GetLastLandingID($DBConn);
	$lastLandingID++;
	
	$UserID = InsertUserBasicInfo($DBConn, 
									'Solicitud-producto', 
									'Landing', 
									'Pagina de producto', 
									'no-adwords',
									'LAN'.$lastLandingID, 
									$email,
									$electronic_comunications,
									date("Y-m-d"),
									$country);

	UpdateUserPersonalInfo($DBConn,
							$UserID,
							"",
							"",
							$name,
							$surName,
							"",
							$tel,
							"",
							"",
							$email,
							$adress,
							$country,
							"",
							"",
							"",
							"",
							"",
							"",
							$comercial,
							"",
							$comment);

	UpdateUserSocialInfo($DBConn,
							$UserID,
							$web,
							$facebook,
							$twitter,
							$linkedin,
							"",
							"",
							"",
							"",
							"");

	UpdateUserLegalInfo($DBConn,
						$UserID,
						"",
						$electronic_comunications,
						$legal,
						$clause);

	UpdateUserOtherInfo($DBConn,
						$UserID,
						'adwords-'.$segment,
						"",
						"",
						"",
						"",
						"",
						"",
						"",
						"",
						$code,
						"",
						"",
						"");
						
	SetLastLandingID($DBConn, $lastLandingID)
?>