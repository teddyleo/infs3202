<!DOCTYPE html>
<?php 
	session_start();
	if(isset($_SESSION["auth"]) && $_SESSION["auth"] == true){
		header("location: home.php");
		exit;
	}
	$_SESSION["auth"] = false;
?>
<html>
	<head>
		<title>Occhiolist</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
        <script src="js/index.js" defer></script>
		<script src="js/dragndrop.js"></script>
	</head>
	<body>
		<div class="container">
			<img src="img/occhiolistlogo.png" alt="Occhiolist Logo" height="155" width="360">
			<p>Welcome to Occhiolist, a cryptic web puzzle that literately forces you <br> 
			   to think outside the box.  Log in or Create an account below to begin <br>
			   your journey into the web of riddles.
			</p>
			<div class="login-page">
			<div class="errormessage">The username or password you entered is incorrect. Please try again.</div>
				<div class="form">
					<form class="register-form">
						<input id="namereg" type="text" placeholder="username" pattern=".{3,}" maxlength="20"/>
						<input id="passreg" type="password" placeholder="password" pattern=".{3,}" maxlength="20"/>
						<input id="emailreg" type="text" placeholder="email address" pattern=".{3,}" maxlength="254"/>
						<button type="submit" id="createbutton">create</button>
						<p class="message">Already registered? <a href="#">Sign In</a></p>
					</form>
					<form class="login-form">
						<input id="name" type="text" placeholder="username" pattern=".{3,}" maxlength="20"/>
						<input id="pass" type="password" placeholder="password" pattern=".{3,}" maxlength="20"/>
						<p id="unlock">Please Unlock</p>
						<div id="drag">
							<div id="keyholder"><img id="key" src="img/occhiolistlogo.png" draggable="true" ondragstart="drag(event)"></div>
							<div id="lock" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
							<div id="clear"></div>
						</div>
						<button type="submit" id="loginbutton">login</button>
						<p class="message">Not registered? <a href="#">Create an account</a></p>
					</form>
					
				</div>
			</div>
			<div class="push"></div>
		</div>
		<div class="footer">
			<div class="faq">
				<a href="FAQNL.html">FAQ</a>
			</div>
			<div class="copyright">
				<p>Contact: jtahrens@hotmail.com</p>
				<p>© 2016 by Occhiolist, All Rights Reserved</p>
			</div>
		</div>
	</body>
</html>
