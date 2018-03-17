<?php session_start(); ?>
<?php include('afterlogin.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
            <title>AccessKey | Login</title>
            <link href="ak.png" rel="shortcut icon" />
            <link href="style.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $(".loader").fadeOut("slow");
            });
            </script>
    </head>
    <body>
        <div class="loader"></div>
        <style>
            body{background-image: url("acsk.png");}
        </style>    
    
        <div class="container">
                <div class="wrapper">
                    <form name="logform" action="log.php" method="POST" onsubmit="return checklogin()">       
                        <h2 class="form-signin-heading">Login</h2>
                        <i class="fa fa-user"></i>
                        <input type="text"  class="form-control" name="username" placeholder="Username" required autofocus/>
                        <br><i class="fa fa-lock"></i>   
                        <input type="password" class="form-control" name="password" placeholder="Password" required/><br><br>      
                        <button class="lr-btn" type="submit">Login&nbsp;<i class="fa fa-sign-in"></i></button><br><br> 
                        <div class="sign-help">Not Registered?<a href="register.php">Register</a></div><br><br>  
                    </form>
                </div>
            <script type="text/javascript" src="accesskey.js">
            </script>    
        </div>
    </body> 
</html>
