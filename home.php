<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
}

li {
    float: right;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
}
</style>
</head>
<title>Asignment 1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="jscripit.js"></script>
	</head>
	<body>
		<div id="header">
			<div id="left">
			<form data-toggle="validator" role="form">
								<div class="form-group">
									<label for="Name" class="control-label">Welcome</label>
				
			</div>
		<div id="left">
			<div id="content"><br>
				hiiii <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
			</div>
		</div>
		</div>
		
		<ul>
			<li><a href="home.php">Home</a></li>
	
		</ul>
		<br><br><br><br><h3><i><b>Game Details</b></i></h3>
		<div class="form-group">
									<label for="sel1">PLAYERS</label>
									<select class="form-control" id="sel1" required>
										<option>Select--</option>
										<option>2 Player</option>
									</select>
								</div>
								
								<br><br><br><br><h3><i><b>choose your level</b></i></h3>
								<div class="form-group">
									<label for="sel1">level</label>
									<br><br><a href="simple.html" class="btn btn-info" role="button">Simple </a>
									<a href="medium.html" class="btn btn-info" role="button">Medium</a>
									<a href="hard.html" class="btn btn-info" role="button">Hard</a>
									
								</div>

		
</body>
</html>