<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $upload_dir = "uploads/";

        // If directory does not exists, then make a upload directory
        if(!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        foreach($_FILES['files']['name'] as $key => $file_name) {
            // var_dump($file_name);

            $file_tmp = $_FILES['files']['tmp_name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_error = $_FILES['files']['error'][$key];
            $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $target_file = $upload_dir . basename($file_name);

            if($file_error === UPLOAD_ERR_OK) {
                // Check for file size
                if($file_size > 5 * 1024 * 1024) {
                    echo "Error file size is too big";
                } 
                // Check for file type
                elseif(!in_array($file_type, ['jpg', 'png', 'jpeg', 'gif', 'txt'])){
                    echo "Error file type is not allowed";
                } else {
                    if(move_uploaded_file($file_tmp, $target_file)) {
                        echo "File {$file_name} uploaded";
                    } else {
                        // Unable to move uploaded file
                        echo "Error Unable to upload your {$file_name}";
                    }
                }
            } else {
              echo "Error: File {$file_name} failed to upload due to error {$file_error}";  
            }
        }
    } else {
        echo "No files were uploaded";
    }
?>