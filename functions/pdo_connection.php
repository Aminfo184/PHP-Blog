<?php 
    global $pdo;
try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new pdo("mysql:host=YourHostName;dbname=YourDataBaseName", "YourUsername", "YourPassword", $options);
    return $pdo;
} catch (PDOException $e) {
    echo 'error: '.$e->getMessage();
    exit;
}