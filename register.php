<?php

include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
 
$sql = "INSERT INTO tbl_register(username, email, password) VALUES ('$username','$email','$password')";
if(mysqli_query($con,$sql))
{ 
	echo "successfull";
}
else
{
	echo "failed";
}

?>