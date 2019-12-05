<?php
    define('DB_DSN','mysql:host=localhost;dbname=shoppinglist');
    define('DB_USER','dboshoplist');
    define('DB_PASS','o5uzx2C30LVmggCX');

    try {
        $db = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        print "Error: " . $e->getMessage();
        die(); // Force execution to stop on errors.
    }
?>
