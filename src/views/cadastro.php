<?php
include_once('../../database/conexao.php');
include('../controllers/Acess/redirectLogin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/googlefonts/QuickSand.css" rel="stylesheet">
    <link href="../styles/googlefonts/alata.css" rel="stylesheet">
    <link href="../styles/googlefonts/Irish+Grover.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <title>Cadastro MetalCoins</title>


</head>

<body style="background: linear-gradient(123.7deg, #7236AD -33.13%, #313C59 111.98%); height: 20px;">

    <br>

    <div class="container" align="center">
        <div id="tituloMetalCoins">
            <h1 id="titulo">Metal Coins</h1>
        </div>

        <div id="borda1" style="background: linear-gradient(180deg, #6E3AC2 0%, rgba(217, 217, 217, 0) 107.71%);"
            class="container">

            <div class="form-group form-row">
                <form name="signIn" method="post" action="../controllers/user/UserController.php">
                    <br>
                    <br>

                    <div class="col-9">
                        <input type="text" name="name" class="form-control rounded-pill ex2" placeholder="Nome:"
                            required />
                    </div>
                    <br>
                    <div class="col-9">
                        <input type="email" name="email" class="form-control rounded-pill ex3" placeholder="E-mail:"
                            required />
                    </div>
                    <br>
                    <div class="col-9">
                        <input type="password" name="password" class="form-control rounded-pill ex2"
                            placeholder="Crie sua senha:" minlength="8" required />
                    </div>

                    <input style="background-color: #332E51;" type="submit" value="Cadastrar" name="createdUser"
                        class="btn btn-dark btn-lg rounded-pill ex" />

                </form>
            </div>

            <br>
        </div>
        <br>
        <div>
            <h4 class="fn">Já possui uma conta? <a href="login.php">Entrar</a></h4>
        </div>
        <br>
    </div>
</body>

</html>