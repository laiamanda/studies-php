<?php 
    $str = "Hello World";
    echo strlen($str);
    echo "<br>";

    echo strtoupper($str);
    echo "<br>";

    echo strtolower($str);

    echo "<br>";
    $post = strpos($str, "World");

    if ($post !== false) {
        echo $post;
    }
    echo "<br>";
    
    $new_str = str_replace("World", "Friend", $str);
    echo $new_str;
?>