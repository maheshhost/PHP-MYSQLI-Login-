<?php
require('connect.php');
include('auth.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Secured Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #e84118">
<div class="form">
<p>Dashboard</p>	
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>


</body>
</html>