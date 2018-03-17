<?php
error_reporting(E_ALL);
ini_set('display_error','on');

$con = mysqli_connect("localhost","root","mysqljg","accesskey");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();
$name=trim($_POST['username']);
$pswd=trim($_POST['password']);

$sql = "SELECT user_id FROM user WHERE username='$name' AND password='$pswd'";
$sql = str_replace("\'","",$sql);
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){
    $count= $row['user_id'];
}

if($count!=0){
    $_SESSION['name']=$name;
    $_SESSION['id']=$count;
    $message = "Logged in Successfully, ".$_SESSION['name'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script> window.location.assign('home.php'); </script>";
}
if($count==0){
    $message = "Incorrect Username or Password!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script> window.location.assign('index.php'); </script>";
}   

mysqli_close($con);
?>
