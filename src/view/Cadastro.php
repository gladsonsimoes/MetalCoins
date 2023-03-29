<?php
include_once('../../database/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- <link type="text/css" rel="stylesheet" href="css/metalcoins.css"> -->
    <title>Cadastro MetalCoins</title>
</head>

<body>

    <br>

    <!-- Conteudo da página -->
    <div class="container" text-align="center">
        <div id="tituloMetalCoins">
            <h1>Metal Coins</h1>
        </div>
        <br>    
        <h3>Cadastre-se</h3>
        <br>
        <form name="signIn" method="post" action="../controllers/user/UserController.php">
            <div class="form-group form-row" >
                <div class="col-3">
                    <input type="text" name="name" class="form-control rounded-pill" placeholder="Nome" required
                        autocomplete="off" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <div class="col-3">
                    <input type="email" name="email" class="form-control rounded-pill" placeholder="E-mail" required
                        autocomplete="off" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <div class="col-3">
                    <input type="password" name="password" class="form-control rounded-pill" placeholder="Crie sua senha"
                        minlength="8" required />
                </div>
            </div>
            <br>
            <b> Ao cadastrar você irá concordar com a nossa <a href="">politica de dados</a> </b>
            <br><br>
            <input type="submit" value="Cadastrar" name="createdUser">
        </form>
        <div>
            <br>
            <h4>Já possui uma conta? <a href="login.php">Sign in</a></h4>
        </div>
</body>

</html>