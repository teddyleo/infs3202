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
		<title>Occhiolist - Riddles</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/riddles.css">
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
				<div id="main" role="main">
					<ul class="menu">
						<li><a href="home.php">Home</a></li>
						<li><a>Riddles</a>
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
				<h1>Riddles</h1>
				<hr>
			</div>
			
			<section class="riddlesContainer">
				<ul class="img-list">
					<a href="whereami.php"><li>
						<img src="img/riddle1.jpg" width="260" height="180" />
						<span class="text-content">
							<span>Proxy - 1
							<?php
								if($_SESSION["riddle1_progress"] > 0){
									?>
									<br>
									Progress: <?php echo $_SESSION["riddle1_progress"]/2*100?>%
									<?php
								}
							?>
							</span>
						</span>
					</li>
					</a>
					<li>
						<img src="img/riddle2.jpg" width="260" height="180" />
						<span class="text-content"><span>Proxy - 2</span></span>
					</li>
				</ul>
				<ul class="img-list">
					<li>
						<img src="img/riddle3.jpg" width="260" height="180" />
						<span class="text-content"><span>Proxy - 3</span></span>
						</a>
					</li>
					<li>
						<img src="img/riddle4.jpg" width="260" height="180" />
						<span class="text-content"><span>Proxy - 4</span></span>
						</a>
					</li>
				</ul>
			</section>
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