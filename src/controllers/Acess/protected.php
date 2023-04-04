<?php 

if(!isset($_SESSION)){
    session_start();
}


if (!isset($_SESSION["token"]) || empty($_SESSION["token"])) {
    header("Location: ../views/notAcess.html");
    exit();
  } 

  
?>