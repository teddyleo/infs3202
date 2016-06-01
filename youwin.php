<!DOCTYPE html>
<?php
	session_start();
	
	if($_SESSION["riddle1_progress"] < 2){
		$_SESSION["riddle1_progress"] = 2;
		$GLOBALS['mysqli3'] = new mysqli('localhost', 'root', 'password', 'occhiolist');
		$sql = "UPDATE user_progress SET riddle1_progress='2' WHERE user_id='" . $_SESSION["user_id"] . "'";
		if(!$result = $GLOBALS['mysqli3']->query($sql)){
			echo (json_encode('There was an error running the query [' . $GLOBALS['mysqli']->error . ']'));
		}
	}
?>
<html>
	<head>
		<title>Occhiolist - Success</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<link href="css/riddlecontent.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="content">
			<div class="riddle">
				<h1>Success</h1>
				<p>You made it through the riddles, well done.
				</p>
				<a id="help" href="home.php">Go Back to Homepage</a>
			</div>
			<div class="push"></div>
		</div>
        <div class="footer">
            <div class="copyright">
				<p>Progress: <?php echo ($_SESSION["riddle1_progress"]/2*100)?>%</p>
			</div>
        </div>
	</body>
</html>