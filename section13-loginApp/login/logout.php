<?php 
    session_start();
    // Set Sesssion to be an empty array
    $_SESSION = [];
    // Destroy session
    session_destroy();
    // Redirect to login.php
    header("Location:login.php");
    exit;
?>