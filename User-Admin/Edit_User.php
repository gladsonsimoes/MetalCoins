<?php
include_once('../database/conexao.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $edit = $conn->prepare("SELECT * FROM usuarios WHERE id=$id");
    $edit->execute();

    $count_rows = $edit->rowCount();

    //verificar se tem na tabela e imprimir nos input
    if ($count_rows > 0) {
        // while ($user = PDO::FETCH_ASSOC) {
        //     $nome = $user['nome'];
        //     $email = $user['email'];
        //     $senha = $user['password'];
        // }
    } else {
        header("Location: Listar.php");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Editar Usuário</title>
</head>

<body>
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">MetalCoins</a>
        </nav>
    </header>
    <br>

    <!-- Conteudo da página -->
    <div class="container">
        <h3>Editar Usuário</h3>
        <br>
        <form name="signIn" method="post" action="./src/controllers/user/UserController.php">
            <div class="form-group form-row">
                <label>Nome:</label>
                <div class="col-4">
                    <input type="text" name="name" class="form-control" placeholder="Nome completo"
                        value="<?php echo $nome; ?>" required autocomplete="off" />
                </div>
            </div>
            <br>
            <div class="form-group form-row">
                <label>E-mail:</label>
                <div class="col-4">
                    <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"
                        value="<?php echo $email; ?>" required autocomplete="off" />
                </div>
            </div>
            <br>
            <input type="submit" value="Editar" name="EditUser">
        </form>
        <div>
            <br>
            <h3><a href="Listar.php">Voltar para a tabela</a></h3>
        </div>
</body>

</html>