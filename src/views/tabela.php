<?php
include('../controllers/Acess/protectedAdmin.php');
include_once('../../database/conexao.php');


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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/produtos.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/dialog.css">
    <link rel="stylesheet" href="../styles/tabela.css">

    <title>Listar Usuário</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div style="background: #6E3AC2;" class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-coins"></i>
            <h4 id="sub-titulo">Metalcoins</h4>
        </div>

        <div class="options__menu hp">
            <a href="admin.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="conta.php">
                <div class="option">
                    <i class="fas fa-user" title="Conta"></i>
                    <h4>Conta</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contato</h4>
                </div>
            </a>

            <a href="CadastroProduto.php">
                <div class="option">
                    <i class="fas fa-edit" aria-hidden="true" title="Gerenciar Produtos"></i>
                    <h4>Gerenciar produtos</h4>
                </div>
            </a>

            <div>
                <div class="option">
                    <i class="fas fa-edit" aria-hidden="true" title="Gerenciar usuários"></i>
                    <h4>Gerenciar usuários</h4>
                </div>
            </div>

            <a href="../controllers/Acess/logout.php">
                <div id="sair" class="option">
                    <i class="fa fa-sign-out" aria-hidden="true" title="Exit"></i>
                    <h4>Sair</h4>
                </div>
            </a>
        </div>
    </div>
    </form>

    <script src="../js/script.js" type="text/javascript"></script>
    <br>

    <!--  CONTEUDO DA TABELA -->
    <div class="container-sm">
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
                    FROM usuarios INNER JOIN conta_corrente WHERE id_perfil= 2 LIMIT $inicio, $limite_result";
                    $result = $conn->prepare($queryUser);
                    $result->execute();

                    if ($result->rowCount() > 0) {
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
    </div>

    <script src="../js/dialog.js" type="text/javascript"> </script>

</body>

</html>