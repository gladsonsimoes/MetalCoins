<?php
include_once('./database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
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

    <!-- Conteudo da Página -->
    <h1>MetalCoins</h1>
    <h3>Login Usuário</h3>
    <div class="container">
        <form name="signIn" method="POST" action="./src/controllers/user/UserController.php">
            <input type="email" name="email" placeholder="E-mail" required>
            <br>
            <br><label>Senha: </label>
            <br>
            <input type="password" name="password" placeholder="No mínimo 8 caracteres" required></br>
            <br>
            <input type="submit" value="Entrar" name="createdUser">
        </form>
        <p>Se for novo, <a href="Cadastro.php">Cadastre-se agora e receba 100 MetalCoins</a></p>
    </div>
</body>

</html>