<?php 
    
    // Database configuration
    define("DB_SERVER", "localhost");
    define("DB_USER", "cms_user");
    define("DB_PASS", "dupa");
    define("DB_NAME", "cms");
 
    // Create a database connection
    $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    // Test if connection succeeded
    if (mysqli_connect_errno()) {
        die('Database connection failed: ' .
        mysqli_connect_error() . " (" . mysql_connect_errno() . ")"
        );
    }
?>