<?php 
//se nao tiver com login
if(!isset($_SESSION)){
    session_start();
}

//finalizar sessao!
session_destroy();

header("Location: ../../views/login.php");

?>
