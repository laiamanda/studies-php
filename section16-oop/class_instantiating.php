<?php 
    class User {
        public function create() {
            return "Creating user";
        }
    }

    $user = new User();
    $user2 = new User();

    echo $user->create();
?>