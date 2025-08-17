<?php 
    $fruits = ["Apple", "Banana", "Orange"];
    $veggies = ["Carrots", "Lettuces", "Plantain"];

    print_r($fruits);

    echo "<br>";
    array_push($fruits, "Mango");
    print_r($fruits);

    echo "<br>";
    array_pop($fruits);
    print_r($fruits);

    $produce = array_merge($fruits, $veggies);
    echo "<br>";
    print_r($produce);

    echo "<br>";

    if(in_array("Banana", $fruits)) {
        echo "Banana is in the array";
    }

    echo "<br>";
    $numbers = [1, 10, 2, 8, -9];
    sort($numbers);
    print_r($numbers);

    echo "<br>";

    $person = ["name" => "Amanda", "age" => 25, "city" => "NY"];
    ksort($person);
    print_r($person);

    echo "<br>";

    $sliced = array_slice($fruits, 1, 2);
    print_r($sliced);


?>
