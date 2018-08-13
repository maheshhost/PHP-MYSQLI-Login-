<?php

include("auth.php");

?>
<<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #0097e6">
<div class="form">
	<p>Welcome <?php echo $_SESSION['username']; ?></p>
	<p>This is a secure area.</p>
	
	<p><a href="dashboard.php">Dashboard</a></p>
	<a href="logout.php">Logout</a>
</div>


</body>
</html>