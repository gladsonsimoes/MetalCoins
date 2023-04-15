<?php

if (empty($_SESSION)) {
    session_start();
}

if (empty($_SESSION)) {
    die("
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../styles/notAcess.css'>

    <div id='tituloMetalCoins'>
     <h1 id='titulo1'> Ops!</h1>
    </div>
    <div class='info'>
        <h1 id='titulo'>Sem sessão Iniciada </h1>
        <a href='../controllers/acess/logout.php'><button id='btn1'>Login</button></a>
    </div>
   ");
} else if (!isset($_SESSION["token"]) || $_SESSION['id_perfil'] != 1){
    die("
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../styles/notAcess.css'>

    <div id='tituloMetalCoins'>
     <h1 id='titulo1'> Ops!</h1>
    </div>
    <div class='info'>
        <h1 id='titulo'>Você não é Administrador </h1>
        <a href='principal'><button id='btn1'>Ir para a tela principal</button></a>
        <a href='../controllers/acess/logout.php'><button id='btn1'>Sair e Fazer Login</button></a>
    </div>
   ");
} 

?>