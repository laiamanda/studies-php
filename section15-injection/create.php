<?php 
    // $conn = mysqli_connect('localhost','root', '');
    // $sql = "CREATE DATABASE prepare_stmt_db";
    // $result = mysqli_query($conn, $sql);

    $conn = mysqli_connect('localhost','root', '', 'prepare_stmt_db');
    // $sql = "
    //     CREATE TABLE `users` (
    //     `id` INT(6) NOT NULL AUTO_INCREMENT,
    //     `username` VARCHAR(50) NOT NULL,
    //     `password` VARCHAR(255) NOT NULL,
    //     `email` VARCHAR(100) NOT NULL,
    //     `reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    //     PRIMARY KEY (`id`)
    // )";

    // $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES
    //     ('alice', 'kZa', 'alice@example.com'),
    //     ('bob', '$2y0', 'bob@example.com'),
    //     ('charlie', 'jS', 'charlie@example.com'),
    //     ('david', '$2y$10q', 'david@example.com'),
    //     ('eve', '$2y', 'eve@example.com'),
    //     ('frank', 'x', 'frank@example.com'),
    //     ('grace', 'cD', 'grace@example.com'),
    //     ('heidi', 'S2tV', 'heidi@example.com'),
    //     ('ivan', '56', 'ivan@example.com'),
    //     ('judy', 'T1', 'judy@example.com');
    //     ";
    // $result = mysqli_query($conn, $sql); 

    $stmt = mysqli_prepare($conn, "INSERT INTO users(username, email, password, reg_date) VALUES(?,?,?,?)");

    if($stmt) {
        $username = 'John';
        $email = 'John@gmail.com';
        $password = 123;
        $reg_date = date('Y-m-d');

        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $reg_date);
        mysqli_stmt_execute($stmt);
    
        echo "New User is created successfully";
    
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: ". mysqli_error($conn);
    }
    
   
    
?>
