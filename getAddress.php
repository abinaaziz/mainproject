<?php

include("connection.php");

// $email = $_POST['email'];
$email = "abin.ck.9@gmail.com";
$name = $_POST['text'];
 

$sql = "SELECT * FROM tbl_address WHERE frommail ='$email' AND name = '$name'";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	$row = mysqli_fetch_assoc($res);
	// echo '{ "id" : "'.$row['id'].'", "status" : "login", "otp" : "'.$otp.'" }';
	// $data['data'][] = $row; 
	echo $row['tomail'];
}
else
{
	echo "failed";
}

?>