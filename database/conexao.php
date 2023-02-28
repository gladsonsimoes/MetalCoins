<?php
$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "metalcoin";
try {
$conn = new PDO('mysql:host=localhost;dbname=metalcoin', $user, $pass);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>