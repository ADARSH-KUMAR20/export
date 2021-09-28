<?php
$connection=mysqli_connect("localhost","root","","register");

 ?>

   <?php
 error_reporting(0);
 if(isset($_POST['submit'])){
   $password=$_POST['password'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $password1=$_POST['password1'];
   if($password1==$password)
{
$query1="SELECT * FROM register ";
$result1=mysqli_query($connection,$query1);

while($row=mysqli_fetch_assoc($result1))
{
    if($email==$row['email'])
    {
      $var=10;
    }

}
if($var==10){echo "<h1><center>
email id matched!</center></h1>";
}
else{  $query=" INSERT INTO  register(username,password,email) ";
  $query .=" VALUES ('$username','$password','$email')";

  $result=mysqli_query($connection,$query);
header("location:welcome.php");}

}
else{
  echo "<h1><center>
  password is not matching</center></h1>";

}
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="reg.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="register.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
	<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password1" placeholder="Confirm Password" required="">

					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SUBMIT">
				</form>
				<p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
