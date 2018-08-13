<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #ff793f">
<?php
require('connect.php');
session_start();


if (isset($_POST['username'])) {
 	$username = stripslashes($_REQUEST['username']);
 	$username = mysqli_real_escape_string($conn,$username);
 	$password = stripslashes($_REQUEST['password']);
 	$password = mysqli_real_escape_string($conn,$password);

 	//checking user exists in database or not
 	$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
 	$result = mysqli_query($conn,$query) or die(mysql_error());
 	$rows = mysqli_num_rows($result);
 	if ($rows==1) {
 		$_SESSION['username'] = $username;
 		//redirect to index.php
 		header("Location: index.php");
 		} else {
 			echo "<h3>Username/Password is incorrect </h3> <br> Click here to <a href='login.php'>Login</a>";
 		}
 } else {

 	
 	?>
 <div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
	<b>Username</b><br> 
<input type="text" name="username" placeholder="Username..." required /><br />
    <b>Password</b><br> 
<input type="password" name="password" placeholder="Password..." required /><br>
<input type="submit" name="submit" value="Login" />
</form>
<p>Not registered yet <a href="register.php">Register Here</a></p>
</div>

<?php } ?>




</body>
</html>