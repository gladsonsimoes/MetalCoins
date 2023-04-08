<?php
include('../../database/conexao.php');

$_SESSION["token"];
$id = $_SESSION["id"];

if (!isset($_SESSION["token"]) || empty($_SESSION["token"])) {
  header("Location: ../../views/Login.php");
  exit();
} else {
  $token_parts = explode('_', $_SESSION["token"]);
  $query =
    "SELECT usuarios.*, conta_corrente.*
   FROM usuarios 
   INNER JOIN conta_corrente ON usuarios.id = conta_corrente.id_usuario 
   WHERE (id_usuario='" . $id . "') ;";
  $result = $conn->prepare($query);
  $result->execute() or die();
  $row = $result->rowCount();
  $data = $result->fetch();

}

?>