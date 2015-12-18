<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<center>
<body>
		<img src="1.jpg" class="img-responsive">
			<div class="container">
				<div class="jumbotron">
					<h1><b><font color="orange">The Snake Game</font></b></h1>
						<p><font color="brown"><i>Kill yourself...</i></font></p> 
						<div id="login-form">
						<form method="post">
						<table align="center" width="40%" border="0">
						<div class="form-group">
							<tr>
								<td> 
								<label for="Name" class="control-label">USERNAME</label>
								<input type="text" class="form-control" name="uname" placeholder="Username" required /></td>
							</tr>
							</div>
							<div class="form-group">
							<tr>
								<td>
								<label for="Name" class="control-label">EMAIL</label>
								<input type="email"class="form-control" name="email" placeholder="Email" required /></td>
							</tr>
							</div>
							<div class="form-group">
							<tr>
								<td>
								<label for="Name" class="control-label">PASSWORD</label>
								<input type="password" class="form-control" name="pass" placeholder="Password" required /></td>
							</tr>
							</div>
							<div class="form-group">
							<tr>
							<td><button type="submit" name="btn-signup" class="btn btn-danger">Sign Me Up</button></td>
							</div>
</tr>
<tr>
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>