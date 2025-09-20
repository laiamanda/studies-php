<?php 
    class User {
        // Public property: accessible from anywhere
        public $name = 'Amanda';
        // Protected property: accessible w/n the class and subclass
        protected $email = "amanda@amanda.com";
        // Private property: accessible only w/n this class
        private $password= "secret123";

        public function displayEmail(){
            return $this->email;
        }
    }

    class AdminUser extends User {
        public function getEmailAgain() {
            return $this-> email . "From Admin Class";
        }
        public function getPassword() {
            return $this-> name; //password will not work
        }
    }

    // It should be just new User...but I think something is wrong with my cookies/settings...
    // $user = new User();
    // echo $user->displayEmail();

    // $admin = new AdminUser();
    // echo $admin->getEmailAgain();

    // $user = new User();
    // echo $user -> getPassword();

    $admin = new AdminUser('test', 'test', 'test');
    echo $admin -> getPassword();
?>