<?php
include("../controllers/products/productsController.php");    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/cadastroProducts.css">
    <title>Login MetalCoins</title>
</head>

<body>

    <div class="container" align="center">
            <form class="form">
                <span class="title">Cadastro de Produtos</span>
                    <span class="sub mb">Adicionar Imagem</span>
                        <input id="file" type="file">
                            <label class="avatar" for="file">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                            <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                                <g id="SVGRepo_iconCarrier"> <path fill="#ffffff" d="M17.1813 16.3254L15.3771 14.5213C16.5036 13.5082 17.379 12.9869 18.2001 12.8846C19.0101 12.7837 19.8249 13.0848 20.8482 13.8687C20.8935 13.9034 20.947 13.9202 21 13.9202V15.024C21 19.9452 19.9452 21 15.024 21H8.976C4.05476 21 3 19.9452 3 15.024V13.7522C3.06398 13.7522 3.12796 13.7278 3.17678 13.679L4.45336 12.4024C5.31928 11.5365 6.04969 10.8993 6.71002 10.4791C7.3679 10.0605 7.94297 9.86572 8.50225 9.86572C9.06154 9.86572 9.6366 10.0605 10.2945 10.4791C10.9548 10.8993 11.6852 11.5365 12.5511 12.4024L16.8277 16.679C16.9254 16.7766 17.0836 16.7766 17.1813 16.679C17.2789 16.5813 17.2789 16.423 17.1813 16.3254Z" opacity="0.1"></path>
                                                 <path stroke-width="2" stroke="#ffffff" d="M3 8.976C3 4.05476 4.05476 3 8.976 3H15.024C19.9452 3 21 4.05476 21 8.976V15.024C21 19.9452 19.9452 21 15.024 21H8.976C4.05476 21 3 19.9452 3 15.024V8.976Z"></path> 
                                                 <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M17.0045 16.5022L12.7279 12.2256C9.24808 8.74578 7.75642 8.74578 4.27658 12.2256L3 13.5022"></path> 
                                                 <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M21.0002 13.6702C18.907 12.0667 17.478 12.2919 15.1982 14.3459"></path> 
                                                  <path stroke-width="2" stroke="#ffffff" d="M17 8C17 8.55228 16.5523 9 16 9C15.4477 9 15 8.55228 15 8C15 7.44772 15.4477 7 16 7C16.5523 7 17 7.44772 17 8Z"></path> 
                                                </g>
                                    </svg>
                                </span>
                            </label>
                                <input type="text" class="input" placeholder="Nome">
                                <input type="text" class="input" placeholder="Valor"> 
                                <input type="text" class="input" placeholder="Descrição">
                                <input type="text" class="input" placeholder="Estoque"> 
                                <input type="text" class="input" placeholder="Data de Validade"> 
                                <button class="botao">Cadastrar</button>
            </form>
    </div>
</body>

</html>