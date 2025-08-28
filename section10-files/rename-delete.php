<?php 
    $old_name = "data.txt";
    $new_name = "new_data.txt";

    if(file_exists($old_name)) {
        // rename($old_name, $new_name);
        // echo "File renamed";

        unlink($new_name);
        echo "File Deleted";
    } else {
        echo "It does not exists";
    }
?>