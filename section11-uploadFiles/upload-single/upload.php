<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_FILES["file"]["error"] === 0) {
            $uploaddir = "uploads/";
            $file_name = basename($_FILES["file"]["name"]);
    
            $target_file = $uploaddir . $file_name;
    
            $file_size = $_FILES["file"]["size"];
            $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
            $allowed_types = ['jpg', 'png', 'gif', 'jpeg', 'txt'];
    
            // Check file size
            if($file_size > 2 * 1024 * 1024) {
                $fileErr = "Your file is too large: {$file_size }";
            }
            // Check file types
            elseif(!in_array($file_type, $allowed_types )) {
                $fileErr = "Only JPG, PNG, GIF, JPEG, TXT files are allowed";
            } else {
                if(!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    $fileErr = "Sorry there was an error uploading your file";
                } 
                // else {
                //     echo "Successfully to Upload.";
                // }
            }
        } 
        // Handle when file does not upload 
        else {
            switch($_FILES["file"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "The uploaded files files exceed the maximum size allowed in the server";
            }
        }

        if(empty($fileErr)) {
            echo "The file has been uploaded";
        } else {
            echo $fileErr . "<br>";
        }
    }
   
?>
