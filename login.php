<html>
<head>
<title>REGISTRATION FORM</title>
<body>
<div>
  <div style="margin-top:20px">
    <div>
      <form name="form_login" method="post" action="login.php" role="form">
        <fieldset>
          <h2>Please Sign In</h2>
          <hr>
          <div>
            <input name="user_id" type="text" id="user_id" placeholder="Email Address">
          </div>
          <div>
            <input type="password" name="password" id="password" placeholder="Password">
          </div>
          <span>
          <button type="button" data-color="info">Remember Me</button><!-- Additional Option -->
          <input type="checkbox" name="remember_me" id="remember_me" checked="checked">
          <hr>
          <div>
            <div>
              <input type="submit" name="Submit" value="Login">
            </div>
            <div> <a href="http://creativealive.com/basic-registration-form-php-mysql-database-connectivity/" target="_blank">Register<small>- Read Article</small></a> </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

</body>
</head>
</html>

<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
    if($_REQUEST['user_id']=="" || $_REQUEST['password']=="")
    {
    echo " Field must be filled";
    }
    else
    {
       $sql1= "select * from student where email= '".$_REQUEST['user_id']."' &&  password ='".$_REQUEST['password']."'";
      $result=mysql_query($sql1)
        or exit("Sql Error".mysql_error());
        $num_rows=mysql_num_rows($result);
       if($num_rows>0)
       {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
           //header("location:filename.php"); 
 //OR just simply print a message.
         Echo "You have logged in successfully";    
        }
        else
        {
            echo "username or password incorrect";
        }
    }
}    
?>