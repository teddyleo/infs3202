<!DOCTYPE html>
<?php
	session_start();
	
	if($_SESSION["riddle1_progress"] < 1){
		$_SESSION["riddle1_progress"] = 1;
		$GLOBALS['mysqli3'] = new mysqli('localhost', 'root', 'password', 'occhiolist');
		$sql = "UPDATE user_progress SET riddle1_progress='1' WHERE user_id='" . $_SESSION["user_id"] . "'";
		if(!$result = $GLOBALS['mysqli3']->query($sql)){
			echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
		}
	}
?>
<html>
	<head>
		<title>Occhiolist - Layer 1</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<link href="css/riddlecontentblack.css" rel="stylesheet" type="text/css" />
		<script>
			function displayHelp() {
				alert("You are helpless.")
			}
		</script>
	</head>
	<body>
		<div class="content">
			<p id="secret" style="color: black">youwin</p>
			<div class="riddle">
				<h1>Layer 1</h1>
				<p>Is there something in the dark?
				</p>
			</div>
			<div class="push"></div>
		</div>
        <div class="footer">
            <div class="copyright">
				<p>Progress: <?php echo ($_SESSION["riddle1_progress"]/2*100)?>%</p>
				<?php
					if($_SESSION["riddle1_progress"] > 1){
						?><a href="youwin.php"><p>Skip</p></a><?php
					}
				?>
				<a href="home.php"><p>Home</p></a>
				<a id="help" href="" onClick="displayHelp()">Help</a>
			</div>
        </div>
	</body>
</html>