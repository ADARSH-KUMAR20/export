
<?php
$connection=mysqli_connect("localhost","root","","register");

 ?>


<?php
if(isset($_POST['login']))
{
  $password=$_POST['password'];
  $email=$_POST['email'];

  $query="SELECT * FROM register ";
  $result=mysqli_query($connection,$query);

  while($row=mysqli_fetch_assoc($result))
  {
      if(($email==$row['email'])&&($password==$row['password']))
      {
        header("location:index.html");
      }

}

}


 ?>




<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="login.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="login.php" method="post">
    <input type="text" name="email" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="register.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>
