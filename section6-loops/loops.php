<?php 
    for($index = 1; $index <= 5; $index++) {
        echo "Number: $index \n <br>";
    }
    echo "<br>";

    $index = 1;
    while($index <= 5) {
        echo "Number: $index \n <br>";
        $index++;
    }
    echo "<br>";

    $index = 1;
    do {
        echo "Number: $index \n <br>";
        $index++;  
    } while($index <= 5);

    echo "<br>";
    $colors = ["red", "green", "blue"];

    foreach($colors as $color) {
        echo "Color: $color <br>";
    }

    echo "<br>";
    $person = ["name" => "John", "age" => 25];
    foreach($person as $key => $value) {
        echo "Key: $value <br>";
    }

?>
