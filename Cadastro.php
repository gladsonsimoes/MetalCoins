<?php
include_once('./database/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro MetalCoins</title>
</head>

<body>
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">MetalCoins</a>
        </nav>
    </header>
    <br>

    <!-- Conteudo da página -->
    <div class="container">
        <h3>Cadastro Usuário</h3>
        <br>
        <form name="signIn" method="post" action="./src/controllers/user/UserController.php">
            <div class="form-group form-row">
                <label>Nome:</label>
                <div class="col-4">
                    <input type="text" name="name" class="form-control" placeholder="Nome completo" required
                        autocomplete="off" />
                </div>
            </div>
            <br>
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
            <b> Ao cadastrar você irá concordar com a nossa <a href="">politica de dados</a> </b>
            <br><br>
            <input type="submit" value="Cadastre-se" name="createdUser">
        </form>
        <div>
            <br>
            <h3>Já possui uma conta? <a href="login.php">Sign in</a></h3>
        </div>
</body>

</html>