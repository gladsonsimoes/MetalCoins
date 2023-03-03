<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "metalcoin";
$port = 3306;


try {
$conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>