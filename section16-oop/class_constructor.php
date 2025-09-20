<?php 
    class User {
        // public $username = 'admin'; // public/protected/private 
        public $username;
        public function __construct($value) {
            $this->username = $value;
        }

        public function setUsername() {
            echo $this->username;
        }
    }

    // $user = new User();
    // echo $user->username;
    // $user-> setUsername();

    $user = new User('admin');
    echo $user->username;

?>