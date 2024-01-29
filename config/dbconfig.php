<?php

define('DSN', "mysql:host=localhost;port=3306;dbname=php_crud;charset=utf8mb4");
define("USERNAME", "root");
define("PASSWORD", "password");
define("OPTIONS", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));

try {
    $pdo = new PDO(DSN, USERNAME, PASSWORD, OPTIONS);
} catch (PDOException $e) {
    echo $e->getMessage();
}