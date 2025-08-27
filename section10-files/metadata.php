<?php 
    $file_name = "data.txt";

    if(file_exists($file_name)) {
        echo "File size " . filesize($file_name) . " bytes <br>";
        echo "Last Modified " . date("F d Y H:i:s.", filemtime($file_name)) ."\n";

        if(is_readable(($file_name))) {
            echo "It is readable .\n";
        }

        if(is_writable($file_name)) {
            echo "Is writeable .\n";
        }
    } else {
        echo "It does NOT exists";
    }
?>