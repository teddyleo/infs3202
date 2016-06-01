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
		<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
		<script src="js/account.js" defer></script>
		<script src="js/dragndrop2.js"></script>
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
								<li><a href="whereami.php">Proxy - 1</a></li>
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
					<i class="fa fa-chevron-right" aria-hidden="true" id="up" onclick="hideDiv()"></i>
					<div class="passform" id="show">
						<p id="passformp">Use the form below to change your account password.  A confirmation <br>
						email will be sent before password change is in affect.</p>
						<form class="passchange-form">
							<div class="forminput">
								<div class="floater">
									Old password:
									<input type="password" id="oldpass" pattern=".{3,}" maxlength="20"><br>
								</div>
								<div class="floater">
									New password:
									<input type="password" id="newpass" pattern=".{3,}" maxlength="20"><br>
								</div>
								<div class="clear"></div>
								<div id="drag1">
									<p id="unlock1">Please verify you are human, drag the key into the box</p>
									<img id="key" src="img/occhiolistlogo.png" draggable="true" ondragstart="drag(event)">
									<div id="lock" ondrop="drop(event, 'locked1', '#unlock1')" ondragover="allowDrop(event)"></div>
									<div id="clear"></div>
								</div>
							</div>
							<button type="button" class="btn" id="newpassbtn">Save</button>
						</form>
					</div>
				</div>
				<div class="email-change">
					<h2>Change email address</h2>
					<hr>
					<i class="fa fa-chevron-right" aria-hidden="true" id="down" onclick="showDiv()"></i>
					<div class="emailform" id="hide">
						<p id="emailformp">Use the form below to change your account password.  A confirmation <br>
						email will be sent to the old address before the address change is in affect.</p>
						<form class="emailchange-form">
							<div class="forminput">
								<div class="floater">
									Old email address:
									<input type="text" id="oldemail" pattern=".{3,}" maxlength="254"><br>
								</div>
								<div class="floater">
									New email address:
									<input type="text" id="newemail" pattern=".{3,}" maxlength="254"><br>
								</div>
								<div class="clear"></div>
								<div id="drag2">
								
								</div>
							</div>
							<button type="button" class="btn" id="newemailbtn">Save</button>
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