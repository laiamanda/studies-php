<?php 
    class User {
        private $user;
        private $email;

        public function __construct($name, $email) {
            // $this->name = $name;
            // $this->email = $email;
            $this->setEmail($email);
        }

        // Getter

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
            } else {
                echo "Not valid email";
            }
        }

        public function displayUserInfo() {
            return "User: ". $this->email;
        }
    }

    $user = new User('Admin', 'admin@admin.com');
    $user -> setEmail('admin_updated@gmail.com');
    echo $user->getEmail();
    echo $user->displayUserInfo();
?>