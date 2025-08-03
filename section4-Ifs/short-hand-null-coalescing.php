<?php 
    // NULL COALESCING OPERATOR

    $username = $_GET['username'] ?? 'GUEST';

    echo $username;

    $user = ['name' => 'Amanda'];
    $age = $user['age'] ?? 'unknown';

    echo "Age: ". $age;
?>