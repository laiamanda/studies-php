<?php 
    // These arrays use named keys
    $person = [
        "name" => "Amanda",
        "age" => 25,
        "city" => "NY"
    ];

    echo $person["name"];
    echo "<br>";

    $person['profession'] = "developer";

    foreach ($person as $key => $value) {
        echo "$key: $value <br>";
    } 
?>