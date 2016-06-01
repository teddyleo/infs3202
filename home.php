<!DOCTYPE html>

<?php
// Inialize session
session_start();
// Test the session to see if is_auth flag was set (meaning they logged in successfully)
if ($_SESSION["auth"] == false) {
	header("location: index.php");
	exit;
}

$_SESSION["riddle1"] = 0;
?>

<html>
	<head>
		<title>Occhiolist</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
		<link href="css/home.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="content">
			<div class="logo">
				<img src="img/occhiolistlogoblack.png" alt="Occhiolist Logo" height="100" width="270">
			</div>
			<div class="container" id="main" role="main">
					<ul class="menu">
						<li></li>
						<li><a>Home</a></li>
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
						<li><a href="account.php">Account</a></li>
					</ul>
				</div>
			<!--<div class="push"></div>-->
			<div  class="welcome">
			<h1>Welcome, <?php echo $_SESSION["name"]?></h1>
				<p>Welcome to Occhiolist, The website that tests your knowledge and 
				understanding of both mental logic and computer skills. Occhiolist provides 
				users with challenges in the form of web riddles.
				So come test your knowledge against the Occhiolist!
				</p>
			</div>
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