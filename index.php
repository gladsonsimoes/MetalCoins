<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Coins</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>
    <form method="POST" action="./src/controllers/UserController.php">
        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo"></br>
        <br><label>E-mail: </label></br>
        <input type="email" name="email" placeholder="E-mail"></br>
        <br><label>Senha: </label></br>
        <input type="password" name="password" placeholder="No mínimo 8 caracteres"></br>
        <br><input type="submit" value="Cadastre-se">
</form>
</body>
</html>