<?php
include_once('../../database/conexao.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $selectSQL = $conn->prepare("SELECT * FROM usuarios WHERE id=$id");
    $selectSQL->execute();

    $count_rows = $selectSQL->rowCount();

    if ($count_rows > 0) {
        $deleteSQL = $conn->prepare("DELETE FROM usuarios WHERE id=$id");
        $deleteSQL->execute();

        echo "<script>
        alert('Usuário Excluído!');
        window.location.href='Listar.php';
         </script>";
    }
}
?>