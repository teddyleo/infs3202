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
		<link rel="stylesheet" type="text/css" href="css/FAQAns.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' defer></script>
	</head>
	<body>
		<div class="content">
			<div class="banner">
				<div class="logo">
				<img src="img/occhiolistlogo.png" alt="Occhiolist Logo" height="100" width="270">
				</div>
				<div id="main" role="main">
					<ul class="menu">
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
								<li><a>Answers</a></li>
							</ul>
						</li>
						<li><a href="account.php">Account</a></li>
					</ul>
				</div>
				<h1>Answers</h1>
				<hr>
			</div>
			<div class="faqsect">
				<div class="shape">
					<img src="img/FAQShapeAns.png" alt="FAQ Decoration" height="750" width="100">
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
						<td class="inner" id="riddle1">
							<a onclick="toggleAnswer('#riddle1', 'h1')">
								<h3>Proxy - 1 </h3><h4>Proxy - 1 </h4> 
								<i id="down" class="fa fa-chevron-down" aria-hidden="true"></i>
								<i id="up" class="fa fa-chevron-up" aria-hidden="true"></i>
							</a><div id="clear"></div>
							<p>The answers for Proxy 1 are not yet released.  They will be released soon.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner negpadding" id="riddle2">
							<a onclick="toggleAnswer('#riddle2', 'h2')">
								<h3>Proxy - 2 </h3><h4>Proxy - 2 </h4> 
								<i id="down" class="fa fa-chevron-down" aria-hidden="true"></i>
								<i id="up" class="fa fa-chevron-up" aria-hidden="true"></i>
							</a><div id="clear"></div>
							<p>Proxy 2 has not been released yet, therefore there are no answers available.
							</p>
						</td>
						</tr>
						<tr>
						<td class="inner" id="riddle3">
							<a onclick="toggleAnswer('#riddle3', 'h3')">
								<h3>Proxy - 3 </h3><h4>Proxy - 3 </h4> 
								<i id="down" class="fa fa-chevron-down" aria-hidden="true"></i>
								<i id="up" class="fa fa-chevron-up" aria-hidden="true"></i>
							</a><div id="clear"></div>
							<p>Proxy 3 has not been released yet, therefore there are no answers available.
							</p>
						</td>	
						</tr>
						<tr>
						<td class="inner negpadding" id="riddle4">
							<a onclick="toggleAnswer('#riddle4', 'h4')">
								<h3>Proxy - 4 </h3><h4>Proxy - 4 </h4> 
								<i id="down" class="fa fa-chevron-down" aria-hidden="true"></i>
								<i id="up" class="fa fa-chevron-up" aria-hidden="true"></i>
							</a><div id="clear"></div>
							<p>Proxy 4 has not been released yet, therefore there are no answers available.
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
		<script src="js/FAQAns.js"></script>
	</body>
</html>