<?php 
    session_start();

    if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Admin</title>
    </head>
    <body>
        <h2> Welcome to <?php echo $_SESSION['username']?> page </h2>
        <a href="logout.php">Logout</a>
    </body>
</html>