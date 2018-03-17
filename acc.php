<?php
error_reporting(E_ALL);
ini_set('display_error','on');

$con = mysqli_connect("localhost","root","mysqljg","accesskey");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$id=$_SESSION['id'];
$acc= trim($_POST['accname']);
$name= trim($_POST['username']);
$pswd= trim($_POST['password']);
$link= trim($_POST['url']);

$sql="INSERT INTO accounts (user_id,accname,username,password,url) VALUES ('$id','$acc','$name','$pswd','$link')";

$con->query($sql);

if(mysqli_affected_rows($con) > 0){
	$message = "Added new account Successfully";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> window.location.assign('home.php'); </script>";
}
if(mysqli_affected_rows($con) == 0){
	$message = "Sorry, Try again";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> window.location.assign('home.php'); </script>";
}
mysqli_close($con);
?>