<?php
error_reporting(E_ALL);
ini_set('display_error','on');

$con = mysqli_connect("localhost","root","mysqljg","accesskey");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name= trim($_POST['username']);
$pswd= trim($_POST['password1']);

$sql="INSERT INTO user (username,password) VALUES ('$name','$pswd')";

$con->query($sql);

$message = "Registered Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script> window.location.assign('index.php'); </script>";

mysqli_close($con);
?>