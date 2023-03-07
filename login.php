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
    <br>
    <!-- Conteudo da Página -->
    <div class="container" align="center">
        <div id="tituloMetalCoins">
            <h1>Metal Coins</h1>
        </div>
        <br>
        <h3>Fazer Login</h3>
        <br>
        <form name="signIn" method="POST" action="./src/controllers/user/LoginConnect.php">
            <div class="form-group form-row">
                <div class="col-4">
                    <input type="email" name="login" class="form-control rounded-pill " placeholder="Digite seu E-mail " required
                        autocomplete="on" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <div class="col-4">
                    <input type="password" name="password" class=" form-control rounded-pill" placeholder="Digite sua senha"
                        minlength="8" required autocomplete="on" />
                </div>
            </div>
            <br>
            <b>Esqueceu a senha? <a href="">To alter</a></b>
            <br>
            <br>
            <input type="submit" value="Login" name="loginUser">
        </form>
        <br>
        <h4>Se for novo, <a href="Cadastro.php">Faça o Cadastro e receba 100 MetalCoins </a></h4>
    </div>
</body>

</html>