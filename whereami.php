<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>Occhiolist - Layer 0 - itssodark</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<link href="css/riddlecontent.css" rel="stylesheet" type="text/css" />
		<script>
			function displayHelp() {
				alert("You are helpless.")
			}
		</script>
	</head>
	<body>
		<div class="content">
			<div class="riddle">
				<h1>Layer 0</h1>
				<p>Let's start off with an easy one shall we?
				</p>
			</div>
			<div class="push"></div>
		</div>
        <div class="footer">
            <div class="copyright">
				<p>Progress: <?php echo $_SESSION["riddle1_progress"]/2*100 ?>%</p>
				<?php
					if($_SESSION["riddle1_progress"] > 0){
						?><a href="itssodark.php"><p>Skip</p></a><?php
					}
				?>
				<a href="home.php"><p>Home</p></a>
				<div id="clear"></div>
				<a id="help" href="" onClick="displayHelp()">Help</a>
			</div>
        </div>
	</body>
</html>