<?php session_start(); ?>
<?php include('checklogin.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
            <title>AccessKey | Account Manager</title>
            <link href="ak.png" rel="shortcut icon" />
            <link href="style.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>        
    <body>
        <style>
            body{background-image: url("bg-green.jpg");}
        </style>  

        <div class="topnav">
            <img class="akico" src="ak.png"/>
            <div class="accs">
                <p>AccessKey<br><font size="2"><a href="accesskey.apk" download="AccessKey.apk">Download android version</a></font></p>
            </div> 
            <div class="logout">
                <a href="logout.php"><i class="fa fa-sign-out"></i>Logout<b><?php echo " ".$_SESSION['name'];?></b></a>
            </div> 
            <div class="mng-acc"><a href="home.php"><i class="fa fa-home"></i> Home</a></div>                
        </div>  

        <div class="container">
            <div class="accdtls-card">
                <div class="contains">
                    <form name="acc" action="handler.php" method="POST">       
                        <h2 class="addacc-heading">Account Details</h2>
                        <i class="fa fa-sticky-note"></i>
                        <input type="text"  class="form-control" name="accname" placeholder="Account Name" required/>
                        <br>
                        <div class="cucped">
                            <button class="btn-newcucped" type="submit" name="view">View</button>
                            <button class="btn-newcucped" type="submit" name="edit">Edit</button>
                            <button class="btn-cucped" type="submit" name="del">Delete</button>
                        </div>
                    </form>      
                </div>
            </div>
        </div>  
        
        <script type="text/javascript" src="accesskey.js">
            </script> 
    </body>
</html>   