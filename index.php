<?php
include_once('database/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="src/styles/login.css">
        <!-- <link type="text/css" rel="stylesheet" href="css/metalcoins.css"> -->
    <title>Login MetalCoins</title>

   
    </style>
</head>

<body style="background: linear-gradient(123.7deg, #7236AD -33.13%, #313C59 111.98%); height: 20px;">

    <br>

    <div class="container" align="center">
        <div id="tituloMetalCoins">
            <h1 id="titulo">Metal Coins</h1>
        </div>
        

        <div class="imagem">
        </div>
    

        <br>
        <br>
        <div id="borda1" style="background: linear-gradient(180deg, #6E3AC2 0%, rgba(217, 217, 217, 0) 107.71%);" class="container">

        <br>
    <br>
            <form id="signIn" method="POST" action="src/controllers/user/LoginConnect.php">
            <div class="form-group form-row">
                <div class="col-9">
                    <input type="email" name="email" class="form-control rounded-pill ex3" placeholder="E-mail:" required
                        autocomplete="off" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <div class="col-9">
                    <input type="password" name="password" class="form-control rounded-pill ex1" placeholder="Senha:"
                        minlength="8" required />
                </div>
            </div>
            
           <a href="conta.php"><input style="background-color: #332E51;" type="submit" value="Login" name="loginUser" class="btn btn-dark btn-lg rounded-pill ex"></a>
            </form>
            
        </form>
        <br>
        </div>
    

        <br>
        <div>
            <h4 class="form-check-label fn">Ainda não é cadastrado? <a href="src/views/cadastro.php">Registrar</a></h4>
        </div>
        

</body>

</html>