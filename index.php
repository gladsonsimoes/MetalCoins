<?php
include_once('./database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Coins</title>
</head>
<body>
    <h1>Metal Coins</h1>
    <h3>Novo usuário</h3>
    <form name="signIn" method="POST" action="./src/controllers/user/UserController.php">
        <label>Nome: </label>
        <br>
        <input type="text" name="name" placeholder="Nome completo">
        <br>
        <br><label>E-mail: </label>
        <br>
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <br><label>Senha: </label>
        <br>
        <input type="password" name="password" placeholder="No mínimo 8 caracteres"></br>
        <br>
        <input type="submit" value="Cadastre-se" name="createdUser">
</form>
</body>
</html>