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

$sql="DELETE FROM accounts WHERE user_id='$id' AND accname='$acc'";

$con->query($sql);

if(mysqli_affected_rows($con) > 0){
	$message = $acc." Deleted Successfully!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> window.location.assign('home.php'); </script>";
}
if(mysqli_affected_rows($con) == 0){
	$message = $acc.", No such account exists!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> window.location.assign('account.php'); </script>";
}
mysqli_close($con);
?>