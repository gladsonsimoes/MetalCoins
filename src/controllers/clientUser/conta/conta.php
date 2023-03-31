<?php
include_once('../../../../database/conexao.php');
session_start();

if (!isset($_SESSION["token"]) || empty($_SESSION["token"])) {
  header("Location: ../../views/Login.php");
  exit();
} 


?>
