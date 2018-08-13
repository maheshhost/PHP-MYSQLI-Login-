<!DOCTYPE html>
<html>
<head>
	<title>User Registration in PHP & MySQL </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: lightblue">
<?php
require('connect.php');
if(isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
//query to execute
	$query = "INSERT into `users` (username,password,email,trn_date) VALUES ('$username','".md5($password)."','$email','$trn_date')";

	$result = mysqli_query($conn,$query);
	if($result){
		echo "<h1>You are Registered successfully.</h1>
		<br />Click here to <a href='login.php'>Login</a>";
	} 

}else {



?>
<div class="form">
<h2 style="color: green">Registration</h2>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</form>
</div> 
<?php } ?>
</body>
</html>