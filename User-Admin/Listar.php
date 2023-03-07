<?php
include_once('../database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listar Usuário</title>
</head>

<body>
    <header>
        <!-- NavBar -->
        <header>
            <!-- NavBar -->
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="index.html">MetalCoins</a>
            </nav>
        </header>
        <br>

    </header>


    <div class="container">
        <br>
        <h1 align="center">Lista de Usuários </h1><br><br>

        <?php
        //receber o número da pagina
        $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //setar a quantidade de registros por página (Quantidade de Usuário Por Página!)
        $limite_result = 5;

        //calcular o inicio da visualização
        $inicio = ($limite_result * $pagina) - $limite_result;
        ?>

        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"> Id </th>
                        <th> Id Perfil</th>
                        <th scope="col"> Nome</th>
                        <th> E-mail </th>
                        <th> MetalCoins </th>
                        <th> Editar</th>
                        <th> Excluir</th>
                    </tr>
                </thead>

                <!-- Listar Conteudo da Tabela -->
                <tbody>
                    <?php
                    $queryUser = "SELECT * FROM usuarios LIMIT $inicio, $limite_result";
                    $result = $conn->prepare($queryUser);
                    $result->execute();

                    if (($result) and ($result->rowCount() > 0)) {
                        while ($row_usuario = $result->fetch(PDO::FETCH_ASSOC)) {
                            extract($row_usuario);
                            echo "<tr>";
                            echo "<td> $id</td>";
                            echo "<td>  </td>";
                            echo "<td> $nome </td>";
                            echo "<td> $email </td>";
                            echo "<td>  </td>";
                            echo "<td><a class='btn btn-primary' href='Edit_User.php?id=$id'>Editar</a></td>";
                            echo "<td><button class='btn btn-secondary' href='Delete_User.php?id=$id'>Excluir</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "404 Not Found , Conteudo Não disponível!";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Página da Tabela -->
    <div align="center" id="Listagem-Page">
        <?php
        echo "<br>";

        //receber o número da pagina
        $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //setar a quantidade de registros por página
        $limite_result = 5;

        //calcular o inicio da visualização
        $inicio = ($limite_result * $pagina) - $limite_result;

        //PAGINACAO
        
        //contar a quantidade de registros no BD
        $query_qnt_registros = "SELECT COUNT(id) AS num_result FROM usuarios;";
        $result_qnt_registros = $conn->prepare($query_qnt_registros);
        $result_qnt_registros->execute();
        $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);

        //Quantidade de página 
        $qtn_pagina = ceil($row_qnt_registros['num_result'] / $limite_result);

        //Maximo de link de paginas 
        $maximo_link = 2;

        for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
            if ($pagina_anterior >= 1) {
                echo "<a href='Listar.php?page=$pagina_anterior'>[ $pagina_anterior ]</a>";
            }
        }

        echo "[ $pagina ]";


        for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
            if ($proxima_pagina <= $qtn_pagina) {
                echo "<a href='Listar.php?page=$proxima_pagina'>[ $proxima_pagina ]</a>";
            }
        }
        echo "<a href='Listar.php?page=$qtn_pagina'>[ Ultima Página ] </a>";

        ?>
    </div>

</body>

</html>