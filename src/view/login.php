<?php
include_once('../../database/conexao.php');

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
        <form name="signIn" method="POST" action="../controllers/user/LoginConnect.php">
            <div class="form-group form-row">
                <div class="col-4">
                    <input type="email" name="email" class="form-control rounded-pill " placeholder="Digite seu E-mail " required
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
            <input type="submit" value="Entrar" name="loginUser">
        </form>
        <br>
        <h4>Não tem uma conta? <a href="Cadastro.php">Cadastre-se</a></h4>
        <b><a href="">Esqueceu a senha? </a></b>
    </div>
</body>

</html>