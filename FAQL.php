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
		<title>Occhiolist - FAQ</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/FAQL.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
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
								<li><a>General</a></li>
								<li><a href="FAQAns.php">Answers</a></li>
							</ul>
						</li>
						<li><a href="account.php">Account</a></li>
					</ul>
				</div>
				<h1>Frequently Asked Questions</h1>
				<hr>
			</div>
			<div class="faqsect">
				<div class="shape">
					<img src="img/FAQShapeL.png" alt="FAQ Decoration" height="1400" width="100">
				</div>
				<div class="faqtable">
					<div class="tablediv">
					<table>
						<tr>
						<td class="edges negpadding">
							<h2>Riddles</h2>
								<hr>
						</td>
						</tr>
						<tr>
						<td class="inner">
							<h3>What is Occhiolist?</h3>
							<p>Occhiolist is a website that provides challenges to its users through 
							the form of web riddles.  The riddles focus on many different concepts 
							and test the user’s knowledge of both mental logic and computer skills.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner negpadding">
							<h3>How can I find these riddles?</h3>
							<p>The riddles that are hosted by Occhiolist are released in sets.  Each 
							set focuses on a different topic of puzzle solving and will require a 
							different set of skills.  These can be found on the “riddles” 
							page after logging in.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner">
							<h3>How hard are these riddles?</h3>
							<p>The difficulty of the riddles entirely depend on the skills of the user.  
							For example some maybe quite obvious to those who have experience with web 
							design, whereas users without that experience may struggle.
							</p>
						</td>	
						</tr>
						<tr>
						<td class="inner negpadding">
							<h3>What kind of skills do I need?</h3>
							<p>It’s recommended that users have some experience with both HTML and JavaScript 
							for some of the riddles but having less experience may be more 
							enjoyable and cryptic for the user.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner">
							<h3>Is Occhiolist a game?</h3>
							<p>In some ways yes, but in other ways no.  Occhiolist awkwardly sits on the fence as to 
							whether it’s a website in itself or a web game.  Some of the riddles may feel somewhat 
							game-ish but the overall design of the sets lean more towards a traditional website layout.
							</p>
						</td>	
						</tr>
						<tr>
						<td class="inner negpadding">
							<h3>I’m stuck on a riddle, can I find the answers anywhere?</h3>
							<p>Although it’s not recommended that the users look at the answers, they are available in 
							the “Answers” section of the “FAQ” tab after logging in.  Users are able to find 
							the answers to each riddle both separately and together in a set.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner">
							<h2>Account Settings</h2>
							<hr>
						</td>	
						</tr>
						<tr>
						<td class="inner negpadding">
							<h3>How do I change my password?</h3>
							<p>To change your password, go to the user account page via the “Account” tab after logging 
							in.  The page will ask for both the old and new password should you wish to change it.
							</p>
						</td>
						</tr>
						<tr>
						<td class="edges">
							<h3>How do I change my email address for my account?</h3>
							<p>To change your email address, go to the user account page via the “Account” tab after logging in.  
							The page will ask for both the old a new address should you wish to change it.
							</p>
						</td>
						</tr>
					</table>
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