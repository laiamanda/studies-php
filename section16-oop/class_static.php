<?php 
    class User {
        public static $userCount = 0;

        public $userInstanceCount = 0;

        public function __construct() {
            self::$userCount++;
            $this->userInstanceCount++;
        }

        public static function getUserCount() {
            return "Total User: " . self::$userCount;
        }
    }

    $user = new User();
    $user1 = new User();
    $user3 = new User();

    // echo User::$userCount;
    echo User::getUserCount();
    echo '<br>';
    echo $user->userInstanceCount; 
    echo '<br>';
    echo $user1->userInstanceCount;
?>
