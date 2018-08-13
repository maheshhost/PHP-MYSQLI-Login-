<?php
 
$conn = mysqli_connect("localhost","root","1234","register");

if(mysqli_connect_errno()) {
	echo "failed to connect to MySQL: " .mysqli_connect_errno();
} 

?>