<?php
	session_start();
	require_once('PasswordHash.php');
	$GLOBALS['mysqli'] = new mysqli('us-cdbr-azure-west-c.cloudapp.net', 'baa9009b8cacca', '304c8562', 'occhiolistDB');
	$GLOBALS['mysqli2'] = new mysqli('us-cdbr-azure-west-c.cloudapp.net', 'baa9009b8cacca', '304c8562', 'occhiolistDB');
	$GLOBALS['mysqli3'] = new mysqli('us-cdbr-azure-west-c.cloudapp.net', 'baa9009b8cacca', '304c8562', 'occhiolistDB');
	/* $GLOBALS['mysqli'] = new mysqli('localhost', 'root', 'password', 'occhiolist');
	$GLOBALS['mysqli2'] = new mysqli('localhost', 'root', 'password', 'occhiolist');
	$GLOBALS['mysqli3'] = new mysqli('localhost', 'root', 'password', 'occhiolist'); */
	if($GLOBALS['mysqli']->connect_errno > 0){
		die('Unable to connect to database [' . $GLOBALS['mysqli']->connect_error . ']');
	}
	
	$json = json_decode(file_get_contents('php://input'), true);
	
	switch ($json["action"]) {	
		case "login":
			$name = $json["name"];
			$name2 = $json["name"];
			$pass = $json["pass"];
			$hasher = new PasswordHash(8, false);
			
			$stmt = $GLOBALS['mysqli']->prepare("SELECT `hash_encoding` FROM `user_authentication` WHERE `name` = ?");
			$stmt->bind_param("s", $name);
			if(!$result = $stmt->execute()){
				echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
			}
			else {
				$storedHash = '';
				$stmt->bind_result($storedHash);
				$stmt->fetch();
				if ($storedHash) {
					$check = $hasher->CheckPassword($pass, $storedHash);
					if ($check) {
						$email = '';
						$stmt2 = $GLOBALS['mysqli2']->prepare("SELECT `email_address` FROM `user_authentication` WHERE `name` = ?");
						$stmt2->bind_param("s", $name2);
						if(!$result = $stmt2->execute()){
							echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli2']->error . ']'));
						} else {
							$stmt2->bind_result($email);
							$stmt2->fetch();
							$_SESSION["user_id"] = $email;
						}
						
						$sql3 = "SELECT `riddle1_progress` FROM `user_progress` WHERE `user_id` = '" . $_SESSION["user_id"] . "'";
						if(!$result3 = $GLOBALS['mysqli3']->query($sql3)){
							echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli3']->error . ']'));
						}
						$progress = $result3->fetch_array();
						$_SESSION["riddle1_progress"] = $progress[0];
						
						$_SESSION["auth"] = true;
						$_SESSION["name"] = $name;
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
			
		case "changeemail":
			$oldemail = $json["oldemail"];
			$newemail = $json["newemail"];
			
			$stmt = $GLOBALS['mysqli']->prepare("SELECT `email_address` FROM `user_authentication` WHERE `name` = ?");
			$stmt->bind_param("s", $_SESSION["name"]);
			if(!$result = $stmt->execute()){
				echo (json_encode('An error occurred, please try again at a later date'));
			}
			else {
				$storedEmail = '';
				$stmt->bind_result($storedEmail);
				$stmt->fetch();
				$stmt->store_result();
				$stmt->free_result();
				if ($storedEmail == $oldemail) {
					$stmt2 = $GLOBALS['mysqli']->prepare("UPDATE `user_authentication` SET `email_address` = ? WHERE `name` = ?");
					if($stmt2 === false) {
						echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
					}
					$stmt2->bind_param("ss", $newemail, $_SESSION["name"]);
					if(!$result = $stmt2->execute()){
						echo (json_encode('An error occurred, please try again at a later date'));
					}
					else {
						echo (json_encode('Pass'));
					}
				}
				else {
					echo (json_encode('Old email does not match currently stored email'));
				}
			} 
			break;
			
		case "changepass":
			$oldpass = $json["oldpass"];
			$newpass = $json["newpass"];
			
			$stmt = $GLOBALS['mysqli']->prepare("SELECT `hash_encoding` FROM `user_authentication` WHERE `name` = ?");
			$stmt->bind_param("s", $_SESSION["name"]);
			if(!$result = $stmt->execute()){
				echo (json_encode('An error occurred, please try again at a later date'));
			}
			else {
				$hasher = new PasswordHash(8, false);
				$storedHash = '';
				$stmt->bind_result($storedHash);
				$stmt->fetch();
				$stmt->store_result();
				$stmt->free_result();
				$check = $hasher->CheckPassword($oldpass, $storedHash);
				if ($check) {
					$hasher2 = new PasswordHash(8, false);
					$hash = $hasher2->HashPassword($newpass);
					$stmt2 = $GLOBALS['mysqli']->prepare("UPDATE `user_authentication` SET `hash_encoding` = ? WHERE `name` = ?");
					if($stmt2 === false) {
						echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
					}
					
					$stmt2->bind_param("ss", $hash, $_SESSION["name"]);
					if(!$result = $stmt2->execute()){
						echo (json_encode('An error occurred, please try again at a later date'));
					}
					else {
						echo (json_encode('Pass'));
					}
				}
				else {
					echo (json_encode('Old password does not match currently stored password'));
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
					$stmt = $GLOBALS['mysqli']->prepare("INSERT INTO `user_authentication`(`email_address`, `name`, `hash_encoding`) VALUES (?,?,?)");
					$stmt->bind_param("sss", $email, $name, $hash);
					if(!$result = $stmt->execute()){
						if ($GLOBALS['mysqli']->errno == 1062) {
							echo (json_encode('This email address is already associated with a username or this username has already been taken'));
						}
					}
					else {
						$sql2 = "INSERT INTO `user_progress` (`user_id`, `riddle1_progress`) VALUES ('" . $email . "', '0')";
						if(!$result2 = $GLOBALS['mysqli']->query($sql2)){
							echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
						}
						$_SESSION["user_id"] = $email;
						$_SESSION["name"] = $name;
						$_SESSION["riddle1_progress"] = 0;
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