<?php
include_once('./database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login MetalCoins</title>
</head>

<body>
    <!-- NavBar -->
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">MetalCoins</a>
        </nav>
    </header>
    <br>

    <!-- Conteudo da Página -->
    <div class="container">
        <h3>Login Usuário</h3>
        <br>
        <form name="signIn" method="POST" action="./src/controllers/user/UserController.php">
            <div class="form-group form-row">
                <label>E-mail:</label>
                <div class="col-4">
                    <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail" required
                        autocomplete="off" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <label>Senha:</label>
                <div class="col-4">
                    <input type="password" name="password" class="form-control" placeholder="Crie sua senha"
                        minlength="8" required />
                </div>
            </div>
            <br>
            <input type="submit" value="Entrar" name="loginUser">
        </form>
        <br>
        <h3>Se for novo, <a href="Cadastro.php">Faça o Cadastro e receba 100 MetalCoins </a></h3>
    </div>
</body>

</html>