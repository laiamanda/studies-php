<?php 
    function isEven($number) {
        if($number %2 == 0 ) {
            return true;
        } else {
            return false;
        }
    } 

    $num = 10;
    if (isEven($num)) {
        echo "the number {$num}  is even";
    } else {
        echo "the number {$num}  is NOT even";
    }

?>
