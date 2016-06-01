<?php
	session_start();
	require_once('PasswordHash.php');
	$GLOBALS['mysqli'] = new mysqli('localhost', 'root', 'password', 'occhiolist');
	if($GLOBALS['mysqli']->connect_errno > 0){
		die('Unable to connect to database [' . $GLOBALS['mysqli']->connect_error . ']');
	}
	
	$json = json_decode(file_get_contents('php://input'), true);
	
	switch ($json["action"]) {	
		case "login":
			$name = $json["name"];
			$pass = $json["pass"];
			$hasher = new PasswordHash(8, false);
			$sql = "SELECT `hash_encoding` FROM `user_authentication` WHERE `name` = '" . $name . "'";
			$sql2 = "SELECT `email_address` FROM `user_authentication` WHERE `name` = '" . $name . "'";
					
			if(!$result = $GLOBALS['mysqli']->query($sql)){
				echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
			}
			else {
				$storedHash = $result->fetch_array();
				if ($storedHash) {
					$check = $hasher->CheckPassword($pass, $storedHash[0]);
					if ($check) {
						if(!$result2 = $GLOBALS['mysqli']->query($sql2)){
							echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
						}
						$email = $result2->fetch_array();
						$_SESSION["user_id"] = $email[0];
						$_SESSION["user_name"] = $name;
						$_SESSION["auth"] = true;
						echo (json_encode('Pass'));
					} else {
						echo (json_encode('Fail'));
					}
				}
				else {
					echo (json_encode('Fail'));
				}
			} 
			break;
			
		case "create":
			$name = $json["name"];
			$pass = $json["pass"];
			$email = $json["email"];
			$hasher = new PasswordHash(8, false);
			$hash = $hasher->HashPassword($pass);
			if (strlen($hash) >= 20) {
					$sql = "INSERT INTO `user_authentication`(`email_address`, `name`, `hash_encoding`) VALUES ('" . $email . "','" . $name . "','" . $hash . "')";
					$sql2 = "INSERT INTO `user_progress` (`user_id`, `riddle1_progress`) VALUES ('" . $email . "', '0')";
					if(!$result = $GLOBALS['mysqli']->query($sql)){
						echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
					}
					else {
						if(!$result2 = $GLOBALS['mysqli']->query($sql2)){
							echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
						}
						$_SESSION["user_id"] = $email;
						$_SESSION["auth"] = true;
						echo (json_encode('Pass'));
					}
			} 
			else {
				echo (json_encode('Fail'));
			}
			break;
	}
?>