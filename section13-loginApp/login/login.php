<?php 

    session_start();
    
    $message = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // Example credentials
        $username = 'admin';
        $password = 'password';
        // Get user's input
        $input_username =  $_POST['username'];
        $input_password =  $_POST['password'];

        if($input_username === $username && $input_password === $password) {
            // Set Session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $input_username;
            // Redirect to admin php
            header("Location: admin.php");
            exit;
        } else {
            $message = "Invalid username or password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Login</title>
    </head>
    <body>
        <h2> Login Page</h2>
        <?php if($message): ?>
            <p style="color:red"><?php echo $message ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="username">Username</label>
            <input id="username" name="username" type="text">
            <br>
            <br>
            <label for="password">Password</label>
            <input id="password" name="password" type="text">
            <br>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>