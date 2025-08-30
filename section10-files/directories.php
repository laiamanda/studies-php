<?php 
    $directory = "uploads";

    // Create directory
    if(!file_exists($directory)) {
        mkdir($directory, 0777, true);
        echo "Directory created";

    } else {
        echo "Directory already exists";
    }

    echo "<br>";

    if(is_dir($directory)) {
        $files = scandir($directory);

        foreach($files as $file) {
            if ($file !== "." && $file !== "..") {
                echo "File: $file <br>";
            } 
        }
    }


?>