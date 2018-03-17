<?php

if (isset($_POST['view'])) {
    session_start();
    include('checklogin.php');
    echo "<!DOCTYPE HTML>
          <html>
          <head>
                <title>AccessKey | Home</title>
                <link href='ak.png' rel='shortcut icon' />
                <link href='style.css' rel='stylesheet' />
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
                <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet'>
                </script>
          </head>        
          <body>
              <style>
                body{background-image: url('bg-green.jpg');}
              </style>
                  <div class='topnav'>
                      <img class='akico' src='ak.png'/>
                      <div class='accs'>
                          <p>AccessKey<br><font size='2'><a href='accesskey.apk' download='AccessKey.apk'>Download android version</a></font></p>
                      </div> 
                      <div class='logout'>
                          <a href='logout.php'><i class='fa fa-sign-out'></i> Logout<b> ".$_SESSION['name']."</b></a>
                      </div>
                      <div class='mng-acc'><a href='account.php'><i class='fa fa-gear'></i> Manage accounts</a></div>
                      <div class='mng-acc'><a href='home.php'><i class='fa fa-home'></i> Home</a></div>         
                   </div>
                   <div class='container'>";
                   
                   error_reporting(E_ALL);
                   ini_set('display_error','on');
       
                   $con = mysqli_connect("localhost","root","mysqljg","accesskey");
       
                   if (mysqli_connect_errno()){
                       echo "Failed to connect to MySQL: " . mysqli_connect_error();
                   }       
                   
                   session_start();
                   $id=$_SESSION['id'];
                   $acc= trim($_POST['accname']);

                   $sql = "SELECT accname,username,password,url FROM accounts where user_id='$id' AND accname='$acc'";
                   $result = $con->query($sql);
       
                   if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                           echo "<div class='vcard'>
                                   <div class='contains'>
                                       <span class='card-title'><center><font color='blue' face='Gloria'>".$row["accname"]."</font></center></span><br>
                                       <span class='card-title'>Username:</span><br>
                                       <span class='card-title'>".$row["username"]."</span><br><br>
                                       <span class='card-title'>Password:</span><br>
                                       <span class='card-title'>".$row["password"]."</span><br><br> 
                                       <center><a href='".$row[url]."' target='_blank'><button class='launch-btn'>Launch</button></a></center>
                                   </div>
                                 </div>";
                       }
                   }
                   if ($result->num_rows == 0) {
                    $message = $acc.", No such account exists!";
                    echo "<script type='text/javascript'>alert('$message');</script>"; 
                    echo "<script> window.location.assign('account.php'); </script>"; 
                   }     
                   mysqli_close($con);
          echo"</div>
           </body>
           </html>";
}


if (isset($_POST['edit'])) {
  session_start();
  include('checklogin.php');
  $acc= trim($_POST['accname']);
  echo "<!DOCTYPE HTML>
        <html>
        <head>
              <title>AccessKey | Home</title>
              <link href='ak.png' rel='shortcut icon' />
              <link href='style.css' rel='stylesheet' />
              <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
              <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet'>
              </script>
        </head>        
        <body>
            <style>
              body{background-image: url('bg-green.jpg');}
            </style>
                <div class='topnav'>
                    <img class='akico' src='ak.png'/>
                    <div class='accs'>
                        <p>AccessKey<br><font size='2'><a href='accesskey.apk' download='AccessKey.apk'>Download android version</a></font></p>
                    </div> 
                    <div class='logout'>
                        <a href='logout.php'><i class='fa fa-sign-out'></i> Logout<b> ".$_SESSION['name']."</b></a>
                    </div>
                    <div class='mng-acc'><a href='account.php'><i class='fa fa-gear'></i> Manage accounts</a></div>
                             
                </div>
                <div class='editbox'>
                    <div class='editacc'>
                        <form name='editform' action='editacc.php' method='POST'>       
                            <h2 class='addacc-heading'>Edit Account</h2>
                            <i class='fa fa-sticky-note'></i>
                            <input type='text'  class='form-control' name='accname' placeholder='Account Name' value=".$acc." required/>
                            <br><i class='fa fa-user'></i>
                            <input type='text'  class='form-control' name='username' placeholder='New Username' required/>
                            <br><i class='fa fa-lock'></i>
                            <input type='password' class='form-control' name='password' placeholder='New Password' required/>
                            <br><i class='fa fa-globe'></i>
                            <input type='text' class='form-control' name='url' placeholder='URL' value='https://'/><br><br>
                            <button class='lr-btn' type='submit'>Update&nbsp;<i class='fa fa-upload'></i></button><br><br>
                        </form>        
                    </div>
                </div>
                <script type='text/javascript' src='accesskey.js'>
                </script> 
        </body>
    </html>";
}


if (isset($_POST['del'])) {
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
}
?>