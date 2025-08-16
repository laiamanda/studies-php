<?php 
    $app = "PHP CMS";
    
    function exampleFunction() {
        echo $GLOBALS('app');
        print_r($GLOBALS);
    }

    exampleFunction();

    // superglobals.php?name=Amanda&age=25
    $name = $_GET["name"];
    $age = $_GET["age"];

    echo "Name: " . $name . "<br>";
    echo "Age: " . $age;
?>