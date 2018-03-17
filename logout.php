<?php
    if(!isset($_SESSION))
    {
        session_start();
    };
    unset($_SESSION['name']);
    unset($_SESSION['id']);
    echo "<script> window.location.assign('index.php'); </script>";
    
?> 