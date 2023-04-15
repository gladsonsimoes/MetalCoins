<?php

if (isset($_SESSION['token']) && $_SESSION['id_perfil'] == 1){
    header("Location: ../views/admin.php");
}

?>