<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {

    }
    if($_FILES["file"]["error"] === 0) {
        $uploaddir = "uploads/";
        $file_name = basename($_FILES["file"]["name"]);

        $target_file = $uploaddir . $file_name;

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Successfully upload your file";
        } else {
            echo "Unable to upload your file.";
        }
    }

    // Intro about upload files
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    
    // var_dump($_FILES['file']["tmp_name"]);

    // move_uploaded_file($temp, $permanent)
?>