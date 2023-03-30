<?php 

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
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/conta.css">
        <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

        <!-- <link type="text/css" rel="stylesheet" href="css/metalcoins.css"> -->
    <title>Conta Metalcoins</title>
   
   
</head>

<body  style="background: #2E0A5B;">
        <h3 class="tituloU">Olá, João Lindão</h3>
        <span>
            <button class="iconeUsuario"></button>
        </span>
     
       <div class="borda1">
        <h1 class="saldoT">Conta</h1>
        <h1 class="saldoD">Saldo Disponivel</h1>
        <h1 class="valorT">10.000</h1>
    </div>

        <div class="borda2">

    </div>

        <div class="borda3">
            
    </div>
    
       <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".borda1"));
        VanillaTilt.init(document.querySelectorAll(".borda2"));
        VanillaTilt.init(document.querySelectorAll(".borda3"));

    VanillaTilt.init(document.querySelectorAll(".iconeUsuario"));

    </script>

    
</body>

</html>