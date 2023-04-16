<?php
include('../../../database/conexao.php');

$id = $_GET['id'];

if ($id) {
        $selectSQL = $conn->prepare("SELECT * FROM usuarios WHERE id=$id");
        $selectSQL->execute();

        $count_rows = $selectSQL->rowCount();

        if ($count_rows > 0) {
            $deleteSQL = $conn->prepare("DELETE FROM usuarios WHERE id=$id");
            $deleteSQL->execute();
            if ($deleteSQL) {
                echo "<script>
            alert('Usuário Excluído!');
            window.location.href='../../views/tabela.php';
             </script>";
            }
        } else {
            die("Usuario nao existe!");
        }
}
// else if ($id_perfil == 1) {
//     echo "<script>
//     alert('Você não pode excluir um administrador!');
//     window.location.href='../../views/tabela.php';
//      </script>";
// }
?>