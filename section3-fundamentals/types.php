<?php 

    var_dump(5);
    var_dump(5.5);
    var_dump(true);

    var_dump([2, 'dog', 2.6]);

    var_dump(NULL);

    // CASTING DATA
    $a = (string) 5; // Integer
    $b = (string) 5.5; // Float
    $c = (int) "five"; // String
    $d = (string) false; // Boolean
    $e = (object)["name"=> 'Amanda']; // Array
    $f = (string) NULL; // Null

    var_dump($a);
?>