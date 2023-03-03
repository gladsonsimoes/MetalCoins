<?php
include_once('./database/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuário</title>
</head>

<body>
    <h1>Listar Usuário</h1>

    <?php
    //receber o número da pagina
    $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    //setar a quantidade de registros por página
    $limite_result = 3;

    //calcular o inicio da visualização
    $inicio = ($limite_result * $pagina) - $limite_result;


    //listar usuario
    $queryUser = "SELECT id, id_perfil, nome, email FROM usuarios LIMIT $inicio, $limite_result";
    $result = $conn->prepare($queryUser);
    $result->execute();

    if (($result) and ($result->rowCount() != 0)) {
        while ($row_usuario = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row_usuario);

            echo "<tbody>";
            echo "<tr>";
            echo "<td> $id </td>";
            echo "<td> $nome </td>";
            echo "<td> $email </td>";
            echo "</tr>";
            echo "</tbody>";
            echo "<hr>";

        }
    } else {
        echo "404 Not Found";
    }

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
</body>

</html>