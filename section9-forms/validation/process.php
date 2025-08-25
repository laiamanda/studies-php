<?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usernameErr = $emailErr = "";
    $username = $email = "";

    if(empty($_POST['username'])) {
      $usernameErr = "username is required";
    } else {
      $username = htmlspecialchars(trim($_POST['username']));
    }

    if(empty($_POST['email'])) {
      $emailErr = "username is required";
    } else {
      $email = htmlspecialchars(trim($_POST['email']));

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if(empty($usernameErr) && empty($emailErr)) {
      echo "Form Submitted";
      echo "<br>";
      echo "Username: " . $username . "<br>" . "Email: ". $email . "<br>";
    } else {
      echo "Errors: <br>";
      echo $usernameErr . "<br>" . $emailErr . "<br>";
    }

  }

// if(isset($_POST['submit'])) {
    
// $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom");
    
//     $minimun = 5;
//     $maximun = 10;

// $username = $_POST['username'];
// $password = $_POST['password'];
    
//   if(strlen($username) < $minimun ) {
  
//       echo "Username has to be longer than five";
  
//   }  
    
//     if(strlen($username) > $maximun  ) {
  
//       echo "Username cannot be longer than 10 ";
  
//   }  
    
//     if(!in_array($username,$name)) {
    
//         echo " Sorry you are not allowed";
    
//     } else {
    
//     echo "Welcome";
//     }
    
    
    
    
    
// //echo "Hello" . $username;   
// //echo "Your Password is " . $password;


// }



?>
