<?php 
    if(isset($_COOKIE['username'])) {
        echo "Welcome:" . $_COOKIE['username'];
    } else {
       echo "Hello Guest"; 
    }
?>