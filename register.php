<?php session_start(); ?>
<?php include('afterlogin.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
            <title>AccessKey | Register</title>
            <link href="ak.png" rel="shortcut icon" />
            <link href="style.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
            body{background-image: url("acsk.png");}
        </style>    
    
        <div class="container">
                <div class="wrapper">
                    <form name="regform" action="reg.php" method="POST" onsubmit="return checkreg()">       
                        <h2 class="form-signin-heading">Register</h2>
                        <i class="fa fa-user"></i>
                        <input type="text"  class="form-control" name="username" placeholder="Username" required autofocus/>
                        <br><i class="fa fa-lock"></i>
                        <input type="password" class="form-control" name="password1" placeholder="Master Password" required/>
                        <br><i class="fa fa-lock"></i>
                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required/><br><br>      
                        <button class="lr-btn" type="submit">Register&nbsp;<i class="fa fa-user-plus"></i></button><br><br> 
                        <div class="sign-help">Already a member?<a href="index.php">Login</a></div><br><br>  
                    </form>
                </div>
            <script type="text/javascript" src="accesskey.js">
            </script>    
        </div>
    </body> 
</html>