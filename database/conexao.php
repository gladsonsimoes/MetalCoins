<?php

$dbname = "metalcoin";
$host = "localhost";
$user = "root";
$pass = "123456";
$port = 3306;

try {
$conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass);
} catch(PDOException $e) {
    echo '<br>
        <div align="center">
         <h3 style="color: red;"> ERROR: </h3>
         <h3>' . $e->getMessage(). '</h3>
        </div>
   <br>';

//[2002] -> Port ou Host Errado
//[1045] -> User ou Pass Errado (Pass : talvez seu servidor não tenha senha!)
//[1049] -> dbname Errado
}

?>