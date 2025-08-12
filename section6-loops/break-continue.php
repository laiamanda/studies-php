<?php 
    for($index=1; $index <= 5; $index++) {
        if($index == 3) {
            break;
        }
        echo "Number $index <br>";
    }

    echo "<br>";

    for($index=1; $index <= 5; $index++) {
        if($index == 3) {
            continue;
        }
        echo "Number $index <br>";
    }
?>