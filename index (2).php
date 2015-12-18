<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<center>
		<div id="login-form">
			<img src="1.jpg" class="img-responsive">
				<div class="container">
					<div class="jumbotron">
						<h1><b><font color="orange">The Snake Game</font></b></h1>
							<p><font color="brown"><i>Kill yourself...</i></font></p> 
								<form method="post">
									<table align="center" width="30%" border="0">
									<div class="form-group">
										<tr>
											<td><input type="text" class="form-control" name="email" placeholder="Your Email" required></td>
										</tr></div>
										<div class="form-group">
										<tr>
											<td><input type="password" class="form-control" name="pass" placeholder="Your Password" required /></td>
										</tr>
										</div>
										<div class="form-group">
										<tr>
											<td><button type="submit" name="btn-login" class="btn btn-danger">Sign In</button></td>
										</tr>
										</div>
										<div class="form-group">
										<tr>
											<td><a href="register.php">Sign Up Here</a></td>
										</tr>
										</div>
									</table><br><br>
									<div class="form-group">
									<a href="snake.html" class="btn btn-success" role="button">PLAY GAME </a>
								</form>
								
					</div>
	</center>
</body>
</html>