<?php 
  $x = "2";
  $y = 2;

  if($x === $y) {
    echo "IT IS";
  }

  echo "<br>";

  $age = 25;
  $hasId = true;

  $isMember= false;

  $hasPermission = true;

  $hasDiscountCoupon = true;

  if ($age >= 18 &&  $hasId) {
    echo "You are allowed to enter.";
  } else {
    echo "Access Denied";
  }

  echo "<br>";

  if (!$isMember){
    echo "Need to login";
  } else {
    echo "Welcome";
  }

  echo "<br>";
  
  if ($age >= 18 && ($isMember || $hasDiscountCoupon)) {
    echo "You are eligible for the discount";
  } else {
    echo "You do not qualify.";
  }

?>