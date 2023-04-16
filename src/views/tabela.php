<?php
include_once('../../database/conexao.php');
include('../controllers/Acess/protectedAdmin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/dialog.css">
    <link rel="stylesheet" href="../styles/tabela.css">

    <title>Listar Usuário</title>
</head>

<body>
    <header>
        <nav class="navbar navbar tb">
            <a class="navbar-brand fn" href="admin.php"> MetalCoins</a>
        </nav>
    </header>
    <br>

    <div class="container">
        <br>
        <h1 class="titulof" align="center">Lista de Usuários </h1><br><br>

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
                    <tr class="fonttable">
                        <th> ID </th>
                        <th> Nome</th>
                        <th> E-mail </th>
                        <th> ID Perfil</th>
                        <th> MetalCoins </th>
                        <th> Editar</th>
                        <th> Excluir</th>
                    </tr>
                </thead>

                <!-- Listar Conteudo da Tabela -->
                <tbody>
                    <?php
                    $queryUser = "SELECT usuarios.*, conta_corrente.saldo
                    FROM usuarios INNER JOIN conta_corrente WHERE id_perfil= 2 
                    LIMIT $inicio, $limite_result";
                    $result = $conn->prepare($queryUser);
                    $result->execute(); 

                    if (($result) and ($result->rowCount() > 0)) {
                        while ($row_usuario = $result->fetch(PDO::FETCH_ASSOC)) {
                            extract($row_usuario);
                            echo "<tr>";
                            echo "<td> $row_usuario[id]</td>";
                            echo "<td> $row_usuario[nome] </td>";
                            echo "<td> $row_usuario[email] </td>";
                            echo "<td> $row_usuario[id_perfil] </td>";
                            echo "<td> $row_usuario[saldo]  </td>";
                            echo "<td>
                 <button class='btn btn-dark' id='edit-$row_usuario[id]' '>Editar</button>
                    <dialog data-id='$row_usuario[id]'>
                        <form class='form' method='POST' action='../controllers/user/UserController.php'>
                          <p class='title'>Editando Usuário </p>
                          <p class='message'>Logo abaixo esta as informações do $row_usuario[nome] </p> 
                          <label>
                             <input value=$row_usuario[nome] name='name' placeholder='Editar Nome' type='text' class='input'>
                             <span> Nome </span>
                           </label>                        
                           <label> 
                             <input value=$row_usuario[email] name='email' placeholder='Editar Email' type='email' class='input'> 
                             <span>E-mail</span>
                             <input type='hidden' name='id' value='$row_usuario[id]'>
                           </label>
                              <input value='Alterar' name='EditUser' class='submit' type='submit'> 
                              <a class='btn btn-dark' id='cancel-$row_usuario[id]' href=''> Cancelar </a>    
                        </form> 
                    </dialog>
                </td>";
                            echo "<td><a class='btn btn-danger' id='delete-$row_usuario[id]' href='../controllers/Admin/DeleteUser.php?id=$row_usuario[id]'>Excluir</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        die(" > Erro com Banco de Dados <");
                    }
                    ?>
                </tbody>
            </table>
            <br>
        </div>
    </div>

    <!-- Página da Tabela -->
    <div align="center" id="Listagem-Page">
        <?php

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
                echo "<a href='tabela.php?page=$pagina_anterior'>[ $pagina_anterior ]</a>";
            }
        }

        echo "[ $pagina ]";


        for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
            if ($proxima_pagina <= $qtn_pagina) {
                echo "<a href='tabela.php?page=$proxima_pagina'>[ $proxima_pagina ]</a>";
            }
        }
        echo "<a href='tabela.php?page=$qtn_pagina'>[ Ultima Página ] </a>";

        ?>
    </div>
    <script src="../js/dialog.js" type="text/javascript"> </script>
</body>

</html>