<?php

include("connection.php");

$username = $_POST['username'];
$password = $_POST['password'];
 

$sql = "SELECT * FROM tbl_register WHERE username ='$username' AND password = '$password'";
echo $sql;
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	// $row = mysqli_fetch_assoc($res);
	// echo '{ "id" : "'.$row['id'].'", "status" : "login", "otp" : "'.$otp.'" }';
	echo "successfull";
}
else
{
	echo "failed";
}

?>