<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database="simple_pdo";

try {
    $conn = new PDO("mysql:host=$server_name;dbname=$database", $username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


?>