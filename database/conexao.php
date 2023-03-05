<<<<<<< HEAD
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

=======
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

>>>>>>> 5b48719c84571b687d309dc60e2e4a5f9116fe0d
?>