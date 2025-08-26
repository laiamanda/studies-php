<?php 
  $file_name = "data.txt";

    // Open the file
    $file = fopen($file_name, "a");

    if($file) {
        // $content = fread($file, filesize($file_name));
        // echo nl2br($content);

        fwrite($file, "I'm a new sentence\n");
        fclose($file);
        echo "File written successfully";
    } else {
        echo "Unable to open file";
    }

    // $content = file_get_contents("data.txt");
    // echo nl2br($content);
?>
