<?php

if (empty($_SESSION)) {
    session_start();
}

if (empty($_SESSION)) {
    
} else if (isset($_SESSION['token']) && $_SESSION['id_perfil'] == 2){
    header("Location: ../views/principal.php");
} else if (isset($_SESSION["token"]) && $_SESSION['id_perfil'] == 1) {
    header("Location: ../views/admin.php");
} 

?>