<?php

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['token'];
$id_perfil = $_SESSION['id_perfil'];

echo "<script>console.log($id_perfil)</script>";

//se nao for o id_perfil 1 que é o admin voltar para pasta
if (!isset($_SESSION["token"]) || $id_perfil != 1) {
    header("Location: ../views/notAcess.html");
    exit();
} 

?>