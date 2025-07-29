<?php 
    // Cannot change the constants. Not dynamic
    define("DB_PASS", "secret123!@#");
    echo DB_PASS;

    // Magic Constants
    echo __DIR__;
    echo __FILE__;
?>