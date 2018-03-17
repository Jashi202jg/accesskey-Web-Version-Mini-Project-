<?php session_start(); ?>
<?php include('checklogin.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
            <title>AccessKey | Home</title>
            <link href="ak.png" rel="shortcut icon" />
            <link href="style.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
            </script>
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
                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout<b><?php echo " ".$_SESSION['name'];?></b></a>
                    </div>
                    <div class="mng-acc"><a href="account.php"><i class="fa fa-gear"></i> Manage accounts</a></div>
                           
                </div>
        
    <div class="container">
        <div class="parent">
        <?php
            error_reporting(E_ALL);
            ini_set('display_error','on');

            $con = mysqli_connect("localhost","root","mysqljg","accesskey");

            if (mysqli_connect_errno()){
	            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }       
            $id=$_SESSION['id'];
            $sql = "SELECT accname,url FROM accounts where user_id='$id'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<a href='".$row["url"]."' target='_blank'><div class='card'>
                            <div class='contains'>
                                <span class='card-title'>".$row["accname"]."</span>
                            </div>
                          </div></a>";
                }
            }

            mysqli_close($con);
        ?>    
                
        </div>
        
    </div>
    <div class="sidebox">
        <div class="addacc">
        <form name="accform" action="acc.php" method="POST">       
            <h2 class="addacc-heading">Add Account</h2>
            <i class="fa fa-sticky-note"></i>
            <input type="text"  class="form-control" name="accname" placeholder="Account Name" required/>
            <br><i class="fa fa-user"></i>
            <input type="text"  class="form-control" name="username" placeholder="Username" required/>
            <br><i class="fa fa-lock"></i>
            <input type="password" class="form-control" name="password" placeholder="Password" required/>
            <br><i class="fa fa-globe"></i>
            <input type="text" class="form-control" name="url" placeholder="URL(optional)" value="https://"/><br><br>      
            <button class="lr-btn" type="submit">Done&nbsp;<i class="fa fa-plus"></i></button><br><br> 
        </form>
        </div>
    </div>
    <script type="text/javascript" src="accesskey.js">
    </script> 
    </body>
</html>    