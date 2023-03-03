<?php
include_once('./database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Coins</title>
</head>

<body>
    <!-- NavBar -->
    <nav>
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
          </div>
    </nav>

    <!-- Conteudo da página -->   
    <h1>Metal Coins</h1>
    <h3>Cadastro Usuário</h3>
    <div class="container">
        <form name="signIn" method="POST" action="./src/controllers/user/UserController.php">
            <label>Nome: </label>
            <br>
            <input type="text" name="name" placeholder="Nome completo" required>
            <br>
            <br><label>E-mail: </label>
            <br>
            <input type="email" name="email" placeholder="E-mail" required>
            <br>
            <br><label>Senha: </label>
            <br>
            <input type="password" name="password" placeholder="No mínimo 8 caracteres" minlength="8" required></br>
            <br>
            <input type="submit" value="Cadastre-se" name="createdUser">
        </form>
        <p>Já tem Cadastro?, <a href="login.php">Clique para o Login</a></p>
    </div>
</body>

</html>