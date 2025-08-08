<?php 
    function greetUserWithTime($name, $greeting="Good Morning") {
        echo "{$greeting} {$name} \n";
    }

    greetUserWithTime(name:"Alice");
    echo "<br>";
    greetUserWithTime(name:"Bob", greeting: "Good evening");
?>