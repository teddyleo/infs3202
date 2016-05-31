<!DOCTYPE html>
<?php
	session_start();

	if ($_SESSION["auth"] == false) {
		header("location: index.php");
		exit;
}
?>
<html>
	<head>
		<title>Occhiolist - Account Settings</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/account.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
		<script src="js/account.js" defer></script>
	</head>
	<body>
		<div class="content">
			<div class="banner">
				<div class="logo">
					<img src="img/occhiolistlogo.png" alt="Occhiolist Logo" height="100" width="270">
				</div>
				<div class="container" id="main" role="main">
					<ul class="menu">
						<li></li>
						<li><a href="home.php">Home</a></li>
						<li><a href="riddles.php">Riddles</a>
							<ul class="submenu">
								<li><a href="riddles.php">Proxy - 1</a></li>
								<li><a href="riddles.php">Proxy - 2</a></li>
								<li><a href="riddles.php">Proxy - 3</a></li>
								<li><a href="riddles.php">Proxy - 4</a></li>
							</ul>
						</li>
						<li class="active"><a href="FAQL.php">FAQ</a>
							<ul class="submenu">
								<li><a href="FAQL.php">General</a></li>
								<li><a href="FAQAns.php">Answers</a></li>
							</ul>
						</li>
						<li><a>Account</a></li>
					</ul>
				</div>
				<h1>Account Settings</h1>
				<hr>
			</div>
			<div class="forms">
				<div class="pass-change">
					<h2>Change account password</h2>
					<hr>
					<div class="passform">
						<p>Use the form below to change your account password.  A confirmation <br>
						email will be sent before password change is in affect.</p>
						<form class="passchange-form">
							<div class="forminput">
								<div class="floater">
									Old password:
									<input type="text" id="oldpass"><br>
								</div>
								<div class="floater">
									New password:
									<input type="text" id="newpass"><br>
								</div>
								<div class="clear"></div>
								
							</div>
							<button type="button" class="btn" onclick="submitPassChange()">Save</button>
						</form>
					</div>
				</div>
				<div class="email-change">
					<h2>Change email address</h2>
					<hr>
					<div class="emailform">
						<p>Use the form below to change your account password.  A confirmation <br>
						email will be sent to the old address before the address change is in affect.</p>
						<form class="emailchange-form">
							<div class="forminput">
								<div class="floater">
									Old email address:
									<input type="text" id="oldemail"><br>
								</div>
								<div class="floater">
									New email address:
									<input type="text" id="newemail"><br>
								</div>
								<div class="clear"></div>
								
							</div>
							<button type="button" class="btn" onclick="submitEmailChange()">Save</button>
						</form>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="push"></div>
		</div>
		<div class="footer">
			<div class="copyright">
				<a href='logout.php'>Logout</a>
				<p>Contact: jtahrens@hotmail.com</p>
				<p> © 2016 by Occhiolist, All Rights Reserved</p>
			</div>
		</div>
	</body>
</html>