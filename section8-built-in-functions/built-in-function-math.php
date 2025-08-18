<?php 
    // Absolute value
    echo abs(-10);
    
    echo "<br>";

    // Round value
    echo round( 3.567, 2);

    echo "<br>";

    echo ceil(4.2);

    echo "<br>";

    echo floor(4.2);

    echo "<br>";

    $numbers = [1, 20, 30, 40, 50];
    echo max($numbers);
    echo "<br>";
    echo min($numbers);
    echo "<br>";

    $base = 2;
    $exp = 3;

    echo pow($base, $exp);

    echo "<br>";
    $number = 16;
    echo sqrt($number);

    echo "<br>";
    echo rand(1, 100);
?>